<?php

namespace Nddcoder\Dac\Diagram\Openstack\Sharedservices;

use Nddcoder\Dac\Diagram\Openstack\Openstack;

class Barbican extends Openstack
{
    public function getImage()
    {
        return 'resources/openstack/sharedservices/barbican.png';
    }
}
