<?php
/**
 * Created by PhpStorm.
 * User: Nomad_Mystic
 * Date: 12/3/2015
 * Time: 5:42 PM
 */


class animalSet
{
     const IMAGE_FIELD = 4;

     function __construct($type)
     {

          $this->mRecords = [];
          $db = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
          $safe_type = $db->real_escape_string($type);

          $query = <<<QUERY
SELECT *
FROM animals
WHERE type = '$safe_type';
QUERY;

          $results = $db->query($query);
          $records = $results->fetch_all(MYSQLI_NUM);

          foreach ($records as $recs) {
               $type_records = new EndangeredSpeciesRecord(
                    $type,
                    $recs[AnimalSet::IMAGE_FIELD]
               );

               $this->mRecords[] = $type_records;
          }
          var_dump($records);
     }

     function getRecords()
     {
          return $this->mRecords;
     }

}