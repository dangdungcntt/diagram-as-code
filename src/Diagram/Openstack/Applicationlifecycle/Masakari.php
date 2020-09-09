<?php

namespace Nddcoder\Dac\Diagram\Openstack\Applicationlifecycle;

use Nddcoder\Dac\Diagram\Openstack\Openstack;

class Masakari extends Openstack
{
    public function getImage()
    {
        return 'resources/openstack/applicationlifecycle/masakari.png';
    }
}
