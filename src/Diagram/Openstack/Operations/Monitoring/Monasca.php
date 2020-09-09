<?php

namespace Nddcoder\Dac\Diagram\Openstack\Operations\Monitoring;

use Nddcoder\Dac\Diagram\Openstack\Openstack;

class Monasca extends Openstack
{
    public function getImage()
    {
        return 'resources/openstack/operations/monitoring/monasca.png';
    }
}
