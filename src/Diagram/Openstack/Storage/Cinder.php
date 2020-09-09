<?php

namespace Nddcoder\Dac\Diagram\Openstack\Storage;

use Nddcoder\Dac\Diagram\Openstack\Openstack;

class Cinder extends Openstack
{
    public function getImage()
    {
        return 'resources/openstack/storage/cinder.png';
    }
}
