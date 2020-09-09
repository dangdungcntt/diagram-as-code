<?php

namespace Nddcoder\Dac\Diagram\Openstack\Storage;

use Nddcoder\Dac\Diagram\Openstack\Openstack;

class Manila extends Openstack
{
    public function getImage()
    {
        return 'resources/openstack/storage/manila.png';
    }
}
