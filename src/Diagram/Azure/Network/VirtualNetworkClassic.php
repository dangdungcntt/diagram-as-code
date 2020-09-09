<?php

namespace Nddcoder\Dac\Diagram\Azure\Network;

use Nddcoder\Dac\Diagram\Azure\Azure;

class VirtualNetworkClassic extends Azure
{
    public function getImage()
    {
        return 'resources/azure/network/virtual-network-classic.png';
    }
}
