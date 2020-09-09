<?php

namespace Nddcoder\Dac\Diagram\Openstack\Applicationlifecycle;

use Nddcoder\Dac\Diagram\Openstack\Openstack;

class Murano extends Openstack
{
    public function getImage()
    {
        return 'resources/openstack/applicationlifecycle/murano.png';
    }
}
