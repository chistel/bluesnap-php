<?php

namespace chistel\Bluesnap;

/**
 * Class Subscription
 * @package chistel\Bluesnap
 */
class Subscription
{
   /**
    * @param null $id
    * @param null $query_params
    * @return Response
    */
   public static function get($id = null, $query_params = null)
   {
      return Adapter::get('Subscription', $id, [
         'query_params' => $query_params
      ]);
   }

   /**
    * @param $data
    * @return Response
    */
   public static function create($data)
   {
      return Adapter::create('Subscription', $data);
   }

   /**
    * @param $id
    * @param $data
    * @return Response
    */
   public static function update($id, $data)
   {
      return Adapter::update('Subscription', $id, $data);
   }

   /**
    * @param $id
    * @return Response
    */
   public static function delete($id)
   {
      return Adapter::delete('Subscription', $id);
   }
}