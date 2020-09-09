<?php

namespace Nddcoder\Dac\Diagram\Openstack\Lifecyclemanagement\Deployment;

use Nddcoder\Dac\Diagram\Openstack\Openstack;

class Helm extends Openstack
{
    public function getImage()
    {
        return 'resources/openstack/lifecyclemanagement/deployment/helm.png';
    }
}
