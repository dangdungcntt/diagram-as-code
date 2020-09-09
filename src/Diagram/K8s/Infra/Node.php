<?php

namespace Nddcoder\Dac\Diagram\K8s\Infra;

use Nddcoder\Dac\Diagram\K8s\K8s;

class Node extends K8s
{
    public function getImage()
    {
        return 'resources/k8s/infra/node.png';
    }
}
