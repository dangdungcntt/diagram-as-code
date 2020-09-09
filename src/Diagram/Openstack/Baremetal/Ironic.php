<?php

namespace Nddcoder\Dac\Diagram\Openstack\Baremetal;

use Nddcoder\Dac\Diagram\Openstack\Openstack;

class Ironic extends Openstack
{
    public function getImage()
    {
        return 'resources/openstack/baremetal/ironic.png';
    }
}
