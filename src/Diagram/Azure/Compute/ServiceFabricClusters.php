<?php

namespace Nddcoder\Dac\Diagram\Azure\Compute;

use Nddcoder\Dac\Diagram\Azure\Azure;

class ServiceFabricClusters extends Azure
{
    public function getImage()
    {
        return 'resources/azure/compute/service-fabric-clusters.png';
    }
}
