<?php

namespace Nddcoder\Dac\Diagram\Openstack\Workloadprovisioning;

use Nddcoder\Dac\Diagram\Openstack\Openstack;

class Magnum extends Openstack
{
    public function getImage()
    {
        return 'resources/openstack/workloadprovisioning/magnum.png';
    }
}
