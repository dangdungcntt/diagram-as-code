<?php

namespace Nddcoder\Dac\Diagram\Openstack\Adjacentenablers\Containerservices;

use Nddcoder\Dac\Diagram\Openstack\Openstack;

class Kuryr extends Openstack
{
    public function getImage()
    {
        return 'resources/openstack/adjacentenablers/containerservices/kuryr.png';
    }
}
