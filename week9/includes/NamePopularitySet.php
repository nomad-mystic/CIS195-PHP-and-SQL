<?php
/**
 * Created by PhpStorm.
 * User: Nomad_Mystic
 * Date: 11/30/2015
 * Time: 8:19 PM
 */


class NamePopularitySet
{

     private $mRecords;

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
          echo $count;
          $query = <<<QUERY
SELECT Name, Metaphone, Rank, NameCount, Year, Gender, Total
FROM NAMES
JOIN NAME_COUNTS ON NameID = FK_NameID
JOIN YEAR_GENDER_TOTALS ON YearGenderTotalID = FK_YearGenderTotalID
WHERE Year = $year
AND Gender = '$gender'
ORDER BY Rank
LIMIT 0, $count;
QUERY;
          $db = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
          $results =  $db->query($query);

          $recs = $results->fetch_all(MYSQLI_NUM);
//          $name, $gender, $year, $rank, $count, $total, $metaphone
          foreach ($recs as $rec) {
               $name_popularity_rec = new NamePopularityRecord(
                    $rec[NamePopularitySet::NAME_FIELD],
                    $rec[NamePopularitySet::GENDER_FIELD],
                    $rec[NamePopularitySet::YEAR_FIELD],
                    $rec[NamePopularitySet::RANK_FIELD],
                    $rec[NamePopularitySet::COUNT_FIELD],
                    $rec[NamePopularitySet::TOTAL_FIELD],
                    $rec[NamePopularitySet::METAPHONE_FIELD]
               );
               $this->mRecords[] = $name_popularity_rec;
          }
     }

     function getRecords()
     {
          return $this->mRecords;
     }
}






















