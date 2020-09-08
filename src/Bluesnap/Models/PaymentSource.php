<?php

namespace chistel\Bluesnap\Models;

/**
 * Class PaymentSource
 * @package chistel\Bluesnap\Models
 */
class PaymentSource extends Model
{
   /**
    * PaymentSource constructor.
    * @param null $data
    */
   public function __construct($data = null)
   {
      parent::__construct($data);
   }

   /**
    * @var array
    */
   protected $children = ['creditCardInfo' => self::COLLECTION];

   /**
    * @var CreditCardInfo[]
    */
   public $creditCardInfo;
}