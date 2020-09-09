<?php

namespace Nddcoder\Dac\Diagram\K8s\Clusterconfig;

use Nddcoder\Dac\Diagram\K8s\K8s;

class Quota extends K8s
{
    public function getImage()
    {
        return 'resources/k8s/clusterconfig/quota.png';
    }
}
