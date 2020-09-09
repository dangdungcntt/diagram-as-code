<?php

namespace Nddcoder\Dac\Diagram\Oci\Compute;

use Nddcoder\Dac\Diagram\Oci\Oci;

class Autoscale extends Oci
{
    public function getImage()
    {
        return 'resources/oci/compute/autoscale.png';
    }
}
