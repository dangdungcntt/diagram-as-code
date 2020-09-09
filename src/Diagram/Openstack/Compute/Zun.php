<?php

namespace Nddcoder\Dac\Diagram\Openstack\Compute;

use Nddcoder\Dac\Diagram\Openstack\Openstack;

class Zun extends Openstack
{
    public function getImage()
    {
        return 'resources/openstack/compute/zun.png';
    }
}
