<?php

use chistel\Bluesnap\Models\Report;

class ReportController
{
   /**
    * Initialize the library in your constructor using
    * your environment, api key, and password
    */
   public function __construct()
   {
      $environment = 'sandbox'; // or 'production'
      \chistel\Bluesnap\Bluesnap::init($environment, 'YOUR_API_KEY', 'YOUR_API_PASSWORD');
   }

   /**
    * Get a Report
    *
    * @return Report
    */
   public function getReport()
   {
      // pass query parameters as array
      $response = \chistel\Bluesnap\Report::get('TransactionDetail', [
         'period' => 'THIS_MONTH'
      ]);

      if ($response->failed()) {
         $error = $response->data;

         // handle error
      }

      return $response->data;
   }
}