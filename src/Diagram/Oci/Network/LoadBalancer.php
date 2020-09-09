<?php

namespace Nddcoder\Dac\Diagram\Oci\Network;

use Nddcoder\Dac\Diagram\Oci\Oci;

class LoadBalancer extends Oci
{
    public function getImage()
    {
        return 'resources/oci/network/load-balancer.png';
    }
}
