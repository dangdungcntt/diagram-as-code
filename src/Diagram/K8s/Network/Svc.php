<?php

namespace Nddcoder\Dac\Diagram\K8s\Network;

use Nddcoder\Dac\Diagram\K8s\K8s;

class Svc extends K8s
{
    public function getImage()
    {
        return 'resources/k8s/network/svc.png';
    }
}
