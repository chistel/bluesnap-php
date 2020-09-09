<?php

namespace Chistel\Bluesnap\Models;


/**
 * Class Ecp
 * @package Chistel\Bluesnap\Models
 */
class Ecp extends Model
{
   /**
    * Ecp constructor.
    * @param null $data
    */
   public function __construct($data = null)
   {
      parent::__construct($data);
   }

   /**
    * @var string
    */
   public $accountNumber;

   /**
    * @var string
    */
   public $routingNumber;

   /**
    * @var string
    */
   public $accountType;
}