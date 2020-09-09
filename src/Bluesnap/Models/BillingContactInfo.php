<?php

namespace Chistel\Bluesnap\Models;

/**
 * Class BillingContactInfo
 * @package Chistel\Bluesnap\Models
 */
class BillingContactInfo extends Model
{
   /**
    * BillingContactInfo constructor.
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
   public $phone;

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
   public $personalIdentificationNumber;
}