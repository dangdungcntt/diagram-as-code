<?php

namespace Nddcoder\Dac\Diagram\Openstack\Orchestration;

use Nddcoder\Dac\Diagram\Openstack\Openstack;

class Mistral extends Openstack
{
    public function getImage()
    {
        return 'resources/openstack/orchestration/mistral.png';
    }
}
