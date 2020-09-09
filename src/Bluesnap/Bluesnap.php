<?php

namespace Chistel\Bluesnap;

/**
 * Class Bluesnap
 * @package Chistel\Bluesnap
 */
class Bluesnap
{
   /**
    * @var
    */
   private static $environment;
   /**
    * @var
    */
   private static $api_key;
   /**
    * @var
    */
   private static $password;
   /**
    * @var
    */
   private static $base_url;

   /**
    * @param $environment
    * @param $api_key
    * @param $password
    */
   public static function init($environment, $api_key, $password)
   {
      self::$environment = $environment;
      self::$api_key = $api_key;
      self::$password = $password;

      if ($environment === 'production') {
         self::$base_url = 'https://ws.bluesnap.com/services/2/';
      } else {
         self::$base_url = 'https://sandbox.bluesnap.com/services/2/';
      }
   }

   /**
    * @return array|null
    */
   public static function getCredentials()
   {
      if (!self::$api_key || !self::$password) {
         return null;
      }

      return [self::$api_key, self::$password];
   }

   /**
    * @return mixed
    */
   public static function getEnvironment()
   {
      return self::$environment;
   }

   /**
    * @return mixed
    */
   public static function getBaseUrl()
   {
      return self::$base_url;
   }
}