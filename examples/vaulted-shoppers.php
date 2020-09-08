<?php

use chistel\Bluesnap\Models\VaultedShopper;

/**
 * Class VaultedShopperController
 */
class VaultedShopperController
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
    * Create a VaultedShopper
    *
    * @return VaultedShopper
    */
   public function createVaultedShopper()
   {
      $response = \chistel\Bluesnap\VaultedShopper::create([
         'firstName' => 'John',
         'lastName' => 'Smith',
      ]);

      if ($response->failed()) {
         $error = $response->data;

         //  handle error
      }

      return $response->data;
   }

   /**
    * Get a VaultedShopper
    *
    * @param int $vaulted_shopper_id
    * @return VaultedShopper
    */
   public function getVaultedShopper($vaulted_shopper_id)
   {
      $response = \chistel\Bluesnap\VaultedShopper::get($vaulted_shopper_id);

      if ($response->failed()) {
         $error = $response->data;

         // handle error
      }

      return $response->data;
   }

   /**
    * Get all VaultedShoppers
    *
    * @return VaultedShopper[]
    */
   public function getAllVaultedShoppers()
   {
      $response = \chistel\Bluesnap\VaultedShopper::get();

      return $response->data;
   }

   /**
    * Add a New Card to a VaultedShopper
    *
    * @param int $vaulted_shopper_id
    * @return VaultedShopper
    */
   public function addCardToVaultedShopper(int $vaulted_shopper_id)
   {
      $vaulted_shopper = $this->getVaultedShopper($vaulted_shopper_id);

      $vaulted_shopper->paymentSources = [
         'creditCardInfo' => [
            [
               'billingContactInfo' => [
                  'firstName' => 'John',
                  'lastName' => 'Smith',
               ],
               'creditCard' => [
                  'cardNumber' => '4263982640269299',
                  'expirationMonth' => '02',
                  'expirationYear' => '2018',
                  'securityCode' => '837'
               ]
            ]
         ]
      ];

      $response = \chistel\Bluesnap\VaultedShopper::update($vaulted_shopper_id, $vaulted_shopper);

      if ($response->failed()) {
         $error = $response->data;

         // handle error
      }

      $vaulted_shopper = $response->data;

      return $vaulted_shopper;
   }
}