<?php

namespace Nddcoder\Dac\Diagram\Gcp\Compute;

use Nddcoder\Dac\Diagram\Gcp\Gcp;

class GkeOnPrem extends Gcp
{
    public function getImage()
    {
        return 'resources/gcp/compute/gke-on-prem.png';
    }
}
