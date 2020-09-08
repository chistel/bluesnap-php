<?php

namespace chistel\Bluesnap;


/**
 * Class Report
 * @package chistel\Bluesnap
 */
class Report
{
   /**
    * @param $report
    * @param null $query_params
    * @return Response
    */
   public static function get($report, $query_params = null)
    {
        return Adapter::get('Report', $report, [
            'query_params' => $query_params
        ]);
    }
}