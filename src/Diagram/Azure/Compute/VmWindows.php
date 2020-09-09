<?php

namespace Nddcoder\Dac\Diagram\Azure\Compute;

use Nddcoder\Dac\Diagram\Azure\Azure;

class VmWindows extends Azure
{
    public function getImage()
    {
        return 'resources/azure/compute/vm-windows.png';
    }
}
