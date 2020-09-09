<?php

namespace Nddcoder\Dac\Diagram\Openstack\Lifecyclemanagement\Deployment;

use Nddcoder\Dac\Diagram\Openstack\Openstack;

class Ansible extends Openstack
{
    public function getImage()
    {
        return 'resources/openstack/lifecyclemanagement/deployment/ansible.png';
    }
}
