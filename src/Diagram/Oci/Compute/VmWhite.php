<?php

namespace Nddcoder\Dac\Diagram\Oci\Compute;

use Nddcoder\Dac\Diagram\Oci\Oci;

class VmWhite extends Oci
{
    public function getImage()
    {
        return 'resources/oci/compute/vm-white.png';
    }
}
