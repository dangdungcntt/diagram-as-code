<?php

namespace Nddcoder\Dac\Diagram\Azure\Compute;

use Nddcoder\Dac\Diagram\Azure\Azure;

class CloudsimpleVirtualMachines extends Azure
{
    public function getImage()
    {
        return 'resources/azure/compute/cloudsimple-virtual-machines.png';
    }
}
