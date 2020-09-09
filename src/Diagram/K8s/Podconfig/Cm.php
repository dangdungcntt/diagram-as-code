<?php

namespace Nddcoder\Dac\Diagram\K8s\Podconfig;

use Nddcoder\Dac\Diagram\K8s\K8s;

class Cm extends K8s
{
    public function getImage()
    {
        return 'resources/k8s/podconfig/cm.png';
    }
}
