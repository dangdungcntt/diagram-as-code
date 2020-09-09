<?php

namespace Nddcoder\Dac\Diagram\Azure\Compute;

use Nddcoder\Dac\Diagram\Azure\Azure;

class AvailabilitySets extends Azure
{
    public function getImage()
    {
        return 'resources/azure/compute/availability-sets.png';
    }
}
