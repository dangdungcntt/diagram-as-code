<?php

namespace Nddcoder\Dac\Diagram\Azure\Network;

use Nddcoder\Dac\Diagram\Azure\Azure;

class LocalNetworkGateways extends Azure
{
    public function getImage()
    {
        return 'resources/azure/network/local-network-gateways.png';
    }
}
