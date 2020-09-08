<?php

namespace chistel\Bluesnap\Models;

/**
 * Class VendorInfo
 * @package chistel\Bluesnap\Models
 */
class VendorInfo extends Model
{
   /**
    * VendorInfo constructor.
    * @param null $data
    */
   public function __construct($data = null)
   {
      parent::__construct($data);
   }

   /**
    * @var integer
    */
   public $commissionPercent;

   /**
    * @var integer
    */
   public $commissionAmount;
}