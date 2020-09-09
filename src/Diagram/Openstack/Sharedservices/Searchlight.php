<?php

namespace Nddcoder\Dac\Diagram\Openstack\Sharedservices;

use Nddcoder\Dac\Diagram\Openstack\Openstack;

class Searchlight extends Openstack
{
    public function getImage()
    {
        return 'resources/openstack/sharedservices/searchlight.png';
    }
}
