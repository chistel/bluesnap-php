<?php

namespace Chistel\Bluesnap\Models;

/**
 * Class VendorPrincipal
 * @package Chistel\Bluesnap\Models
 */
class VendorPrincipal extends Model
{
   /**
    * VendorPrincipal constructor.
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
   public $address;

   /**
    * @var string
    */
   public $city;

   /**
    * @var string
    */
   public $country;

   /**
    * @var string
    */
   public $zip;

   /**
    * @var string
    */
   public $dob;

   /**
    * @var string
    */
   public $personalIdentificationNumber;

   /**
    * @var string
    */
   public $passportNumber;

   /**
    * @var string
    */
   public $email;
}