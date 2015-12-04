<?php
/**
 * Created by PhpStorm.
 * User: Nomad_Mystic
 * Date: 12/3/2015
 * Time: 5:33 PM
 */

class EndangeredSpeciesRecord
{

     private $mType;
     private $mId;
     private $mImage;

     function __construct($type, $image)
     {
          $this->mType = $type;
//          $this->mId = $id;
          $this->mImage = $image;
     }

     /// SETTERS

     function setType($value)
     {
          $this->mType = $value;
     }

     function setId($value)
     {
          $this->mId= $value;
     }

     function setImage($value)
     {
          $this->mId= $value;
     }
     ///GETTERS

     function getType()
     {
          return $this->mType;
     }
     function getId()
     {
          return $this->mId;
     }

     function getImage()
     {
          return $this->mImage;
     }
} // End class



