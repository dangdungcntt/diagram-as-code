<?php

namespace Nddcoder\Dac\Diagram\Gcp\Compute;

use Nddcoder\Dac\Diagram\Gcp\Gcp;

class ContainerOptimizedOs extends Gcp
{
    public function getImage()
    {
        return 'resources/gcp/compute/container-optimized-os.png';
    }
}
