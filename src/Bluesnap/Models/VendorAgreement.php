<?php

namespace chistel\Bluesnap\Models;

/**
 * Class VendorAgreement
 * @package chistel\Bluesnap\Models
 */
class VendorAgreement extends Model
{
   /**
    * VendorAgreement constructor.
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
}