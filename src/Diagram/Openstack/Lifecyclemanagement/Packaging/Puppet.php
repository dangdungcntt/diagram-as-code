<?php

namespace Nddcoder\Dac\Diagram\Openstack\Lifecyclemanagement\Packaging;

use Nddcoder\Dac\Diagram\Openstack\Openstack;

class Puppet extends Openstack
{
    public function getImage()
    {
        return 'resources/openstack/lifecyclemanagement/packaging/puppet.png';
    }
}
