<?php

namespace chistel\Bluesnap\Models;

/**
 * Class CardHolderInfo
 * @package chistel\Bluesnap\Models
 */
class CardHolderInfo extends Model
{
   /**
    * CardHolderInfo constructor.
    * @param null $data
    */
   public function __construct($data = null)
   {
      parent::__construct($data);
   }

   /**
    * @var string
    */
   public $firstName;

   /**
    * @var string
    */
   public $lastName;

   /**
    * @var string
    */
   public $softDescriptor;

   /**
    * @var string
    */
   public $address1;

   /**
    * @var string
    */
   public $address2;

   /**
    * @var string
    */
   public $city;

   /**
    * @var string
    */
   public $state;

   /**
    * @var string
    */
   public $zip;

   /**
    * @var string
    */
   public $country;

   /**
    * @var string
    */
   public $phone;

   /**
    * @var string
    */
   public $merchantShopperId;

   /**
    * @var string
    */
   public $personalIdentificationNumber;
}