<?php

namespace Nddcoder\Dac\Diagram\Oci\Monitoring;

use Nddcoder\Dac\Diagram\Oci\Oci;

class HealthCheckWhite extends Oci
{
    public function getImage()
    {
        return 'resources/oci/monitoring/health-check-white.png';
    }
}
