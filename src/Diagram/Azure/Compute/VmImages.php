<?php

namespace Nddcoder\Dac\Diagram\Azure\Compute;

use Nddcoder\Dac\Diagram\Azure\Azure;

class VmImages extends Azure
{
    public function getImage()
    {
        return 'resources/azure/compute/vm-images.png';
    }
}
