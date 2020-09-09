<?php

namespace Nddcoder\Dac\Diagram\Openstack\Networking;

use Nddcoder\Dac\Diagram\Openstack\Openstack;

class Designate extends Openstack
{
    public function getImage()
    {
        return 'resources/openstack/networking/designate.png';
    }
}
