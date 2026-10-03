<?php

declare(strict_types=1);

namespace SmitBackend\KubeCanary;

/**
 * Immediate rollback trigger on error budget exhaustion
 */
class RollbackSentinel
{
    public function run(): bool
    {
        return true;
    }
}
