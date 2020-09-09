<?php

namespace Nddcoder\Dac\Diagram\Azure\Compute;

use Nddcoder\Dac\Diagram\Azure\Azure;

class ContainerInstances extends Azure
{
    public function getImage()
    {
        return 'resources/azure/compute/container-instances.png';
    }
}
