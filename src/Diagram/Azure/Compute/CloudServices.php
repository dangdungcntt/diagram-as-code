<?php

namespace Nddcoder\Dac\Diagram\Azure\Compute;

use Nddcoder\Dac\Diagram\Azure\Azure;

class CloudServices extends Azure
{
    public function getImage()
    {
        return 'resources/azure/compute/cloud-services.png';
    }
}
