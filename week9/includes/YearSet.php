<?php
/**
 * Created by PhpStorm.
 * User: Nomad_Mystic
 * Date: 12/2/2015
 * Time: 1:08 AM
 */


class YearSet extends NamePopularitySet
{
     const NAME_FIELD = 0;
     const METAPHONE_FIELD = 1;
     const RANK_FIELD = 2;
     const COUNT_FIELD = 3;
     const YEAR_FIELD = 4;
     const GENDER_FIELD = 5;
     const TOTAL_FIELD = 6;


     function __construct($year, $gender, $count)
     {
          $this->mRecords = [];
          $db = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
          $safe_year = $db->real_escape_string($year);
          $safe_gender = $db->real_escape_string($gender);
          $safe_count = $db->real_escape_string($count);
          echo $count;
          $query = <<<QUERY
SELECT Name, Metaphone, Rank, NameCount, Year, Gender, Total
FROM NAMES
JOIN NAME_COUNTS ON NameID = FK_NameID
JOIN YEAR_GENDER_TOTALS ON YearGenderTotalID = FK_YearGenderTotalID
WHERE Year = $safe_year
AND Gender = '$safe_gender'
ORDER BY Rank
LIMIT 0, $safe_count;
QUERY;

          $results =  $db->query($query);
          $recs = $results->fetch_all(MYSQLI_NUM);
//          $name, $gender, $year, $rank, $count, $total, $metaphone
          foreach ($recs as $rec) {
               $name_popularity_rec = new NamePopularityRecord(
                    $rec[YearSet::NAME_FIELD],
                    $rec[YearSet::GENDER_FIELD],
                    $rec[YearSet::YEAR_FIELD],
                    $rec[YearSet::RANK_FIELD],
                    $rec[YearSet::COUNT_FIELD],
                    $rec[YearSet::TOTAL_FIELD],
                    $rec[YearSet::METAPHONE_FIELD]
               );
               $this->mRecords[] = $name_popularity_rec;
          }
     }
}