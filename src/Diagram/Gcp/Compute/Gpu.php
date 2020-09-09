<?php

namespace Nddcoder\Dac\Diagram\Gcp\Compute;

use Nddcoder\Dac\Diagram\Gcp\Gcp;

class Gpu extends Gcp
{
    public function getImage()
    {
        return 'resources/gcp/compute/gpu.png';
    }
}
