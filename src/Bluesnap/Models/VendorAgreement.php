<?php

namespace Chistel\Bluesnap\Models;

/**
 * Class VendorAgreement
 * @package Chistel\Bluesnap\Models
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