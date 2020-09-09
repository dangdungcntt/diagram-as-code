<?php

namespace Nddcoder\Dac\Diagram\K8s\Group;

use Nddcoder\Dac\Diagram\K8s\K8s;

class Ns extends K8s
{
    public function getImage()
    {
        return 'resources/k8s/group/ns.png';
    }
}
