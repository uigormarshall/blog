<?php
return [
    'enabled' => env('ANALYTICS_ENABLED', false),
    'ga4' => [
        'measurement_id' => env('GA_MEASUREMENT_ID'),
        'anonymize_ip' => true,
    ],
];
