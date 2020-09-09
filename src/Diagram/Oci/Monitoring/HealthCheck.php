<?php

namespace Nddcoder\Dac\Diagram\Oci\Monitoring;

use Nddcoder\Dac\Diagram\Oci\Oci;

class HealthCheck extends Oci
{
    public function getImage()
    {
        return 'resources/oci/monitoring/health-check.png';
    }
}
