<?php

namespace Nddcoder\Dac\Diagram\Azure\Compute;

use Nddcoder\Dac\Diagram\Azure\Azure;

class FunctionApps extends Azure
{
    public function getImage()
    {
        return 'resources/azure/compute/function-apps.png';
    }
}
