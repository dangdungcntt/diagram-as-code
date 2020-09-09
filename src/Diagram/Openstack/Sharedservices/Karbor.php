<?php

namespace Nddcoder\Dac\Diagram\Openstack\Sharedservices;

use Nddcoder\Dac\Diagram\Openstack\Openstack;

class Karbor extends Openstack
{
    public function getImage()
    {
        return 'resources/openstack/sharedservices/karbor.png';
    }
}
