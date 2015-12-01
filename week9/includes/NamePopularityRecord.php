<?php
/**
 * Created by PhpStorm.
 * User: Nomad_Mystic
 * Date: 11/30/2015
 * Time: 7:11 PM
 */

class NamePopularityRecord
{
     private $mName;
     private $mYear;
     private $mGender;
     private $mCount;
     private $mTotal;
     private $mMetaphone;
     private $mRank;
     private $mDirty = FALSE;

     function __construct($name, $gender, $year, $rank, $count, $total, $metaphone)
     {
          $this->mName = $name;
          $this->mYear = $year;
          $this->mGender = $gender;
          $this->mRank = $rank;
          $this->mTotal = $total;
          $this->mCount = $count;
          $this->mMetaphone = $metaphone;
     }

     function __destruct()
     {
          if ($this->mDirty)
          {
//               echo "Destroying object<br>";
          }
     }

     //// Setters
     function setName($value)
     {
          $this->mName = $value;
          $this->mDirty = TRUE;
     }

     function setYear($value)
     {
          $this->mYear = $value;
          $this->mDirty = TRUE;
     }
     function setGender($value)
     {
          $this->mGender = $value;
          $this->mDirty = TRUE;
     }

     function setTotal($value)
     {
          $this->mTotal = $value;
          $this->mDirty = TRUE;
     }

     function setCount($value)
     {
          $this->mCount = $value;
          $this->mDirty = TRUE;
     }

     function setMetaphone($value)
     {
          $this->mMetaphone = $value;
          $this->mDirty = TRUE;
     }
     function setRank($value)
     {
          $this->mRank = $value;
          $this->mDirty = TRUE;
     }

//////Getters
     function getRank()
     {
          return $this->mRank;
     }

     function getName()
     {
          return $this->mName;
     }

     function getYear()
     {
          return $this->mYear;
     }

     function getGender()
     {
          return $this->mGender;
     }

     function getCount()
     {
          return $this->mCount;
     }

     function getTotal()
     {
          return $this->mTotal;
     }

     function getMetaphone()
     {
          return $this->mMetaphone;
     }

     function percentage()
     {
          return 100 * $this->mCount / $this->mTotal;
     }
}