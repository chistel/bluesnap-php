<?php

namespace Chistel\Bluesnap\Exceptions;

use Exception;
use Chistel\Bluesnap\Contracts\ExceptionInterface;

/**
 * Class BluesnapException
 * @package Chistel\Bluesnap\Exceptions
 */
abstract class BluesnapException extends Exception implements ExceptionInterface
{
   /**
    * @var
    */
   private $string;
   /**
    * @var
    */
   private $trace;

   /**
    * @var string
    */
   protected $message = '';
   /**
    * @var int
    */
   protected $code = 0;
   /**
    * @var
    */
   protected $file;
   /**
    * @var
    */
   protected $line;

   /**
    * BluesnapException constructor.
    * @param null $message
    * @param int $code
    */
   public function __construct($message = null, $code = 0)
   {
      if (!$message) {
         throw new $this('Unknown ' . get_class($this));
      }

      parent::__construct($message, $code);
   }

   /**
    * @return string
    */
   public function __toString()
   {
      return get_class($this) . " '{$this->message}' in {$this->file}({$this->line})\n {$this->getTraceAsString()}";
   }
}