<?php
/**
 * Created by PhpStorm.
 * User: Nomad_Mystic
 * Date: 12/3/2015
 * Time: 5:42 PM
 */


class MammalSet extends EndangeredSpeciesSet
{

     function __construct($common_name)
     {

          $this->mRecords = [];
          $db = new sqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);

     }



}