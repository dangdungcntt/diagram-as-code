<?php

namespace Nddcoder\Dac\Diagram\K8s\Rbac;

use Nddcoder\Dac\Diagram\K8s\K8s;

class Rb extends K8s
{
    public function getImage()
    {
        return 'resources/k8s/rbac/rb.png';
    }
}
