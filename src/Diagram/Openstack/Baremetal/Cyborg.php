<?php

namespace Nddcoder\Dac\Diagram\Openstack\Baremetal;

use Nddcoder\Dac\Diagram\Openstack\Openstack;

class Cyborg extends Openstack
{
    public function getImage()
    {
        return 'resources/openstack/baremetal/cyborg.png';
    }
}
