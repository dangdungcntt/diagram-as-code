<?php

namespace Nddcoder\Dac\Diagram\Openstack\Orchestration;

use Nddcoder\Dac\Diagram\Openstack\Openstack;

class Heat extends Openstack
{
    public function getImage()
    {
        return 'resources/openstack/orchestration/heat.png';
    }
}
