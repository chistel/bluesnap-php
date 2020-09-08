<?php

namespace chistel\Bluesnap;

/**
 * Class CardTransaction
 * @package chistel\Bluesnap
 */
class CardTransaction
{
   /**
    * @param null $id
    * @return Response
    */
   public static function get($id = null)
    {
        return Adapter::get('CardTransaction', $id);
    }

   /**
    * @param $data
    * @return Response
    */
   public static function create($data)
    {
        return Adapter::create('CardTransaction', $data, [
            'id_in_header' => false
        ]);
    }

   /**
    * @param $id
    * @param $data
    * @return Response
    */
   public static function update($id, $data)
    {
        return Adapter::update('CardTransaction', $id, $data, [
            'id_in_url' => false
        ]);
    }
}