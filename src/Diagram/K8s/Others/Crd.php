<?php

namespace Nddcoder\Dac\Diagram\K8s\Others;

use Nddcoder\Dac\Diagram\K8s\K8s;

class Crd extends K8s
{
    public function getImage()
    {
        return 'resources/k8s/others/crd.png';
    }
}
