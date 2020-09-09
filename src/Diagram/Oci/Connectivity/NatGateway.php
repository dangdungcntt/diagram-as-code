<?php

namespace Nddcoder\Dac\Diagram\Oci\Connectivity;

use Nddcoder\Dac\Diagram\Oci\Oci;

class NatGateway extends Oci
{
    public function getImage()
    {
        return 'resources/oci/connectivity/nat-gateway.png';
    }
}
