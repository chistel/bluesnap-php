<?php

namespace chistel\Bluesnap;

/**
 * Class Plan
 * @package chistel\Bluesnap
 */
class Plan
{
   /**
    * @param null $id
    * @param null $query_params
    * @return Response
    */
   public static function get($id = null, $query_params = null)
   {
      return Adapter::get('Plan', $id, [
         'query_params' => $query_params
      ]);
   }

   /**
    * @param $data
    * @return Response
    */
   public static function create($data)
   {
      return Adapter::create('Plan', $data);
   }

   /**
    * @param $id
    * @param $data
    * @return Response
    */
   public static function update($id, $data)
   {
      return Adapter::update('Plan', $id, $data);
   }

   /**
    * @param $id
    * @return Response
    */
   public static function delete($id)
   {
      return Adapter::delete('Plan', $id);
   }
}