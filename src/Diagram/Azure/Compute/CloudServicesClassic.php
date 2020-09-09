<?php

namespace Nddcoder\Dac\Diagram\Azure\Compute;

use Nddcoder\Dac\Diagram\Azure\Azure;

class CloudServicesClassic extends Azure
{
    public function getImage()
    {
        return 'resources/azure/compute/cloud-services-classic.png';
    }
}
