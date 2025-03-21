<?php

declare(strict_types=1);

namespace SmitBackend\KubeCanary\Contracts;

/**
 * Interface PrometheusClientInterface
 *
 * @package SmitBackend\KubeCanary
 */
interface PrometheusClientInterface
{
    public function execute(array $payload = []): mixed;
}
