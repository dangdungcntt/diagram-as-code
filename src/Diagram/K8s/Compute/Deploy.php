<?php

namespace Nddcoder\Dac\Diagram\K8s\Compute;

use Nddcoder\Dac\Diagram\K8s\K8s;

class Deploy extends K8s
{
    public function getImage()
    {
        return 'resources/k8s/compute/deploy.png';
    }
}
