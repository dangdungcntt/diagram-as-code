<?php

namespace Nddcoder\Dac\Diagram\Oci\Network;

use Nddcoder\Dac\Diagram\Oci\Oci;

class InternetGateway extends Oci
{
    public function getImage()
    {
        return 'resources/oci/network/internet-gateway.png';
    }
}
