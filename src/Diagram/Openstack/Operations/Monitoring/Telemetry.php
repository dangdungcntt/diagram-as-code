<?php

namespace Nddcoder\Dac\Diagram\Openstack\Operations\Monitoring;

use Nddcoder\Dac\Diagram\Openstack\Openstack;

class Telemetry extends Openstack
{
    public function getImage()
    {
        return 'resources/openstack/operations/monitoring/telemetry.png';
    }
}
