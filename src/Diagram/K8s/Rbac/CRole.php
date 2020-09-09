<?php

namespace Nddcoder\Dac\Diagram\K8s\Rbac;

use Nddcoder\Dac\Diagram\K8s\K8s;

class CRole extends K8s
{
    public function getImage()
    {
        return 'resources/k8s/rbac/c-role.png';
    }
}
