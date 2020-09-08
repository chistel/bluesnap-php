<?php

use chistel\Bluesnap\Models\Vendor;

/**
 * Class VendorController
 */
class VendorController
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
    * Create a Vendor
    *
    * @return Vendor
    */
   public function createVendor()
   {
      $response = \chistel\Bluesnap\Vendor::create([
         'email' => 'vendoremail@example.com',
         'country' => 'US'
      ]);

      if ($response->failed()) {
         $error = $response->data;

         // handle error
      }

      return $response->data;
   }

   /**
    * Get a Vendor
    *
    * @param int $vendor_id
    * @return Vendor
    */
   public function getVendor(int $vendor_id)
   {
      $response = \chistel\Bluesnap\Vendor::get($vendor_id);

      if ($response->failed()) {
         $error = $response->data;

         // handle error
      }

      return $response->data;
   }

   /**
    * Get All Vendors
    *
    * @return Vendor[]
    */
   public function getAllVendors()
   {
      $response = \chistel\Bluesnap\Vendor::get();

      return $response->data;
   }
}
