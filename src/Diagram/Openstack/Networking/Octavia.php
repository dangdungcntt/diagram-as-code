<?php

namespace Nddcoder\Dac\Diagram\Openstack\Networking;

use Nddcoder\Dac\Diagram\Openstack\Openstack;

class Octavia extends Openstack
{
    public function getImage()
    {
        return 'resources/openstack/networking/octavia.png';
    }
}
