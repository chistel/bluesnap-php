<?php

namespace Chistel\Bluesnap;

class SubscriptionCharge
{
    public static function get($id, $query_params = null)
    {
        return Adapter::get('SubscriptionCharge', $id, [
            'query_params' => $query_params
        ]);
    }
}