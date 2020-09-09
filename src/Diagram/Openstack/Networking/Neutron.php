<?php

namespace Nddcoder\Dac\Diagram\Openstack\Networking;

use Nddcoder\Dac\Diagram\Openstack\Openstack;

class Neutron extends Openstack
{
    public function getImage()
    {
        return 'resources/openstack/networking/neutron.png';
    }
}
