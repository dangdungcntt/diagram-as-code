<?php

namespace Nddcoder\Dac\Diagram\Openstack\Storage;

use Nddcoder\Dac\Diagram\Openstack\Openstack;

class Swift extends Openstack
{
    public function getImage()
    {
        return 'resources/openstack/storage/swift.png';
    }
}
