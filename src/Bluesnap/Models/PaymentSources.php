<?php

namespace Chistel\Bluesnap\Models;

/**
 * Class PaymentSources
 * @package Chistel\Bluesnap\Models
 */
class PaymentSources extends Model
{
   /**
    * PaymentSources constructor.
    * @param null $data
    */
   public function __construct($data = null)
   {
      parent::__construct($data);
   }

   /**
    * @var array
    */
   protected $children = ['creditCardInfo' => self::COLLECTION, 'ecpInfo' => self::COLLECTION];

   /**
    * @var CreditCardInfo[]
    */
   public $creditCardInfo;

   /**
    * @var EcpInfo[]
    */
   public $ecpInfo;
}