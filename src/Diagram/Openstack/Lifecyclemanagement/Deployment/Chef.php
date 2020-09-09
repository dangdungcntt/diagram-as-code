<?php

namespace Nddcoder\Dac\Diagram\Openstack\Lifecyclemanagement\Deployment;

use Nddcoder\Dac\Diagram\Openstack\Openstack;

class Chef extends Openstack
{
    public function getImage()
    {
        return 'resources/openstack/lifecyclemanagement/deployment/chef.png';
    }
}
