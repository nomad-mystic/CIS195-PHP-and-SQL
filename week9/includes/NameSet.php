<?php
/**
 * Created by PhpStorm.
 * User: Nomad_Mystic
 * Date: 12/2/2015
 * Time: 1:08 AM
 */


class NameSet extends NamePopularitySet
{
     const YEAR_FIELD = 0;
     const COUNT_FIELD = 1;
     const TOTAL_FIELD = 2;

     function __construct($name, $gender, $metaphone)
     {
          $this->mRecords = [];
          $db = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
          $safe_name = $db->real_escape_string($name);
          $safe_gender = $db->real_escape_string($gender);
          $query = <<<QUERY
SELECT Year, IFNULL((
    SELECT  NameCount
    FROM    NAME_COUNTS
    JOIN    NAMES ON NameID = FK_NameID
    WHERE   Name = '$safe_name'
    AND     YearGenderTotalID = FK_YearGenderTotalID
), 0) AS NameCount,
          Total
FROM 	year_gender_totals
WHERE	Gender = '$safe_gender'
ORDER BY	Year;
QUERY;

          $results =  $db->query($query);

          $recs = $results->fetch_all(MYSQLI_NUM);
//          $name, $gender, $year, $rank, $count, $total, $metaphone
          foreach ($recs as $rec) {
               $name_popularity_rec = new NamePopularityRecord(
                    $name,
                    $gender,
                    $rec[NameSet::YEAR_FIELD],
                    0,
                    $rec[NameSet::COUNT_FIELD],
                    $rec[NameSet::TOTAL_FIELD],
                    $metaphone
               );
               $this->mRecords[] = $name_popularity_rec;
          }
     }
}