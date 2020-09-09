<?php

namespace Nddcoder\Dac\Diagram\K8s\Ecosystem;

use Nddcoder\Dac\Diagram\K8s\K8s;

class Helm extends K8s
{
    public function getImage()
    {
        return 'resources/k8s/ecosystem/helm.png';
    }
}
