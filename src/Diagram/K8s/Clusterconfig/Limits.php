<?php

namespace Nddcoder\Dac\Diagram\K8s\Clusterconfig;

use Nddcoder\Dac\Diagram\K8s\K8s;

class Limits extends K8s
{
    public function getImage()
    {
        return 'resources/k8s/clusterconfig/limits.png';
    }
}
