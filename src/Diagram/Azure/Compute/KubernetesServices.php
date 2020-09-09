<?php

namespace Nddcoder\Dac\Diagram\Azure\Compute;

use Nddcoder\Dac\Diagram\Azure\Azure;

class KubernetesServices extends Azure
{
    public function getImage()
    {
        return 'resources/azure/compute/kubernetes-services.png';
    }
}
