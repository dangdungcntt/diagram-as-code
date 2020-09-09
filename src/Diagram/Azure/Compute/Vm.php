<?php

namespace Nddcoder\Dac\Diagram\Azure\Compute;

use Nddcoder\Dac\Diagram\Azure\Azure;

class Vm extends Azure
{
    public function getImage()
    {
        return 'resources/azure/compute/vm.png';
    }
}
