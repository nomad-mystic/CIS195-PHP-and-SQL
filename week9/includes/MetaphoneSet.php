<?php
/**
 * Created by PhpStorm.
 * User: Nomad_Mystic
 * Date: 12/2/2015
 * Time: 1:08 AM
 */


class MetaphoneSet extends NamePopularitySet
{
     const NAME_FIELD = 0;
     const COUNT_FIELD = 1;
     const TOTAL_FIELD = 2;

     static $count = 0;
     static function whatAmI()
     {
          echo 'I am a Metaphone set with ' . MetaphoneSet::$count . ' Objects';
     }


     function __construct($metaphone, $gender, $count)
     {
          $this->mRecords = [];
          $db = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
          $safe_metaphone = $db->real_escape_string($metaphone);
          $safe_gender = $db->real_escape_string($gender);
          $query = <<<QUERY
SELECT	Name,
		SUM(NameCount) AS NameCount,
          SUM(Total) AS Total
FROM	     names
JOIN 	name_counts ON NameId = FK_NameID
JOIN 	year_gender_totals ON YearGenderTotalID = FK_YearGenderTotalID
WHERE	Metaphone = '$safe_metaphone'
AND 	     Gender = '$safe_gender'
GROUP BY  Name
ORDER BY  CAST(SUM(NameCount) / SUM(Total) AS DECIMAL(18,16)) DESC
LIMIT 0, $count;
QUERY;

          $results =  $db->query($query);

          $recs = $results->fetch_all(MYSQLI_NUM);
//          $name, $gender, $year, $rank, $count, $total, $metaphone
          foreach ($recs as $rec) {
               $name_popularity_rec = new NamePopularityRecord(
                    $rec[MetaphoneSet::NAME_FIELD],
                    $gender,
                    0,
                    0,
                    $rec[MetaphoneSet::COUNT_FIELD],
                    $rec[MetaphoneSet::TOTAL_FIELD],
                    $metaphone
               );
               $this->mRecords[] = $name_popularity_rec;
          }
     }
}