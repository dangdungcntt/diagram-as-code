<?php

namespace Nddcoder\Dac\Diagram\Openstack\Applicationlifecycle;

use Nddcoder\Dac\Diagram\Openstack\Openstack;

class Freezer extends Openstack
{
    public function getImage()
    {
        return 'resources/openstack/applicationlifecycle/freezer.png';
    }
}
