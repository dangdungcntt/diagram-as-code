<?php

namespace Nddcoder\Dac\Diagram\K8s\Controlplane;

use Nddcoder\Dac\Diagram\K8s\K8s;

class CM extends K8s
{
    public function getImage()
    {
        return 'resources/k8s/controlplane/c-m.png';
    }
}
