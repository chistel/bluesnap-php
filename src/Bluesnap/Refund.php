<?php

namespace Chistel\Bluesnap;

/**
 * Class Refund
 * @package Chistel\Bluesnap
 */
class Refund
{
   /**
    * @param $id
    * @param null $query_params
    * @return Response
    */
   public static function update($id, $query_params = null)
    {
        return Adapter::update('Refund', $id, null, [
            'id_in_url' => false,
            'query_params' => $query_params
        ]);
    }
}