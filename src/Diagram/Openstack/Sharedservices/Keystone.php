<?php

namespace Nddcoder\Dac\Diagram\Openstack\Sharedservices;

use Nddcoder\Dac\Diagram\Openstack\Openstack;

class Keystone extends Openstack
{
    public function getImage()
    {
        return 'resources/openstack/sharedservices/keystone.png';
    }
}
