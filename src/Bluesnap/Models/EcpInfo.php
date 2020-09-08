<?php

namespace chistel\Bluesnap\Models;


/**
 * Class EcpInfo
 * @package chistel\Bluesnap\Models
 */
class EcpInfo extends Model
{
   /**
    * EcpInfo constructor.
    * @param null $data
    */
   public function __construct($data = null)
   {
      parent::__construct($data);
   }

   /**
    * @var array
    */
   protected $children = ['ecp' => self::ITEM, 'billingContactInfo' => self::ITEM];

   /**
    * @var string
    */
   public $pfToken;

   /**
    * @var Ecp
    */
   public $ecp;

   /**
    * @var BillingContactInfo
    */
   public $billingContactInfo;
}