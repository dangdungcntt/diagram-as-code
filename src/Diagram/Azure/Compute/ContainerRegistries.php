<?php

namespace Nddcoder\Dac\Diagram\Azure\Compute;

use Nddcoder\Dac\Diagram\Azure\Azure;

class ContainerRegistries extends Azure
{
    public function getImage()
    {
        return 'resources/azure/compute/container-registries.png';
    }
}
