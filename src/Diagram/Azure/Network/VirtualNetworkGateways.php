<?php

namespace Nddcoder\Dac\Diagram\Azure\Network;

use Nddcoder\Dac\Diagram\Azure\Azure;

class VirtualNetworkGateways extends Azure
{
    public function getImage()
    {
        return 'resources/azure/network/virtual-network-gateways.png';
    }
}
