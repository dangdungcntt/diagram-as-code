<?php

namespace Nddcoder\Dac\Diagram\Gcp\Compute;

use Nddcoder\Dac\Diagram\Gcp\Gcp;

class KubernetesEngine extends Gcp
{
    public function getImage()
    {
        return 'resources/gcp/compute/kubernetes-engine.png';
    }
}
