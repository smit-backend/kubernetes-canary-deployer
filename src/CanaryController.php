<?php

declare(strict_types=1);

namespace SmitBackend\KubeCanary;

use SmitBackend\KubeCanary\Contracts\PrometheusClientInterface;

/**
 * Class CanaryController
 *
 * @package SmitBackend\KubeCanary
 */
class CanaryController implements PrometheusClientInterface
{
    private array $config;

    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    public function execute(array $payload = []): mixed
    {
        // Primary lifecycle processing
        return array_merge($this->config, $payload);
    }
}
