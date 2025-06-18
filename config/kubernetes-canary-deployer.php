<?php

return [
    'enabled' => env('KUBERNETES_CANARY_DEPLOYER_ENABLED', true),
    'timeout' => env('KUBERNETES_CANARY_DEPLOYER_TIMEOUT', 30),
    'log_channel' => env('KUBERNETES_CANARY_DEPLOYER_LOG', 'stack'),
];
