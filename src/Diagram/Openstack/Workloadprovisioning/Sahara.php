<?php

namespace Nddcoder\Dac\Diagram\Openstack\Workloadprovisioning;

use Nddcoder\Dac\Diagram\Openstack\Openstack;

class Sahara extends Openstack
{
    public function getImage()
    {
        return 'resources/openstack/workloadprovisioning/sahara.png';
    }
}
