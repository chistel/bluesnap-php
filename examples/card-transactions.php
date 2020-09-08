<?php

use chistel\Bluesnap\Models\CardTransaction;
use chistel\Bluesnap\Models\Refund;

class CardTransactionController
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
    * Create a New Transaction (simple)
    *
    * @return CardTransaction
    */
   public function createTransaction()
   {
      $response = \chistel\Bluesnap\CardTransaction::create([
         'creditCard' => [
            'cardNumber' => '4263982640269299',
            'expirationMonth' => '02',
            'expirationYear' => '2018',
            'securityCode' => '837'
         ],
         'amount' => 10.00,
         'currency' => 'USD',
         'recurringTransaction' => 'ECOMMERCE',
         'cardTransactionType' => 'AUTH_CAPTURE',
      ]);

      if ($response->failed()) {
         $error = $response->data;

         // handle error
      }

      $transaction = $response->data;

      return $transaction;
   }

   /**
    * Authorize a New Transaction (with vendor, vaultedShopper, saved card)
    *
    * @param int $vaulted_shopper_id
    * @param int $vendor_id
    * @return CardTransaction
    */
   public function authorizeTransaction(int $vaulted_shopper_id, int $vendor_id)
   {
      $response = \chistel\Bluesnap\CardTransaction::create([
         'vendorInfo' => [
            'vendorId' => $vendor_id,
            'commissionAmount' => 4.00,
         ],
         'vaultedShopperId' => $vaulted_shopper_id,
         'creditCard' => [
            'cardLastFourDigits' => '1111',
            'securityCode' => '111',
            'cardType' => 'VISA',
         ],
         'amount' => 10.00,
         'currency' => 'USD',
         'recurringTransaction' => 'ECOMMERCE',
         'cardTransactionType' => 'AUTH_ONLY',
         'softDescriptor' => 'Your description',
      ]);

      if ($response->failed()) {
         $error = $response->data;

         // handle error
      }

      return $response->data;
   }

   /**
    * Capture a previously authorized transaction
    *
    * @param int $transaction_id
    * @return CardTransaction
    */
   public function captureTransaction(int $transaction_id)
   {
      $response = \chistel\Bluesnap\CardTransaction::update($transaction_id, [
         'transactionId' => $transaction_id,
         'cardTransactionType' => 'CAPTURE',
      ]);

      if ($response->failed()) {
         $error = $response->data;

         // handle error
      }

      return $response->data;
   }

   /**
    * Get a Transaction
    *
    * @param int $transaction_id
    * @return CardTransaction
    */
   public function getTransaction(int $transaction_id)
   {
      $response = \chistel\Bluesnap\CardTransaction::get($transaction_id);

      if ($response->failed()) {
         $error = $response->data;

         // handle error
      }

      return $response->data;
   }

   /**
    * Get All Transactions
    *
    * @return CardTransaction[]
    */
   public function getAllTransactions()
   {
      $response = \chistel\Bluesnap\CardTransaction::get();

      return $response->data;
   }

   /**
    * Refund a Transaction
    *
    * @param int $transaction_id
    * @return Refund
    */
   public function refundTransaction(int $transaction_id)
   {
      // Pass query parameters as array
      $response = \chistel\Bluesnap\Refund::update($transaction_id, [
         'amount' => 10.00,
         'reason' => 'Your refund description'
      ]);

      if ($response->failed()) {
         $error = $response->data;

         //  handle error
      }

      return $response->data;
   }
}
