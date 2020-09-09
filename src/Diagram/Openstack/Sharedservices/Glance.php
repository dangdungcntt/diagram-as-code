<?php

namespace Nddcoder\Dac\Diagram\Openstack\Sharedservices;

use Nddcoder\Dac\Diagram\Openstack\Openstack;

class Glance extends Openstack
{
    public function getImage()
    {
        return 'resources/openstack/sharedservices/glance.png';
    }
}
