<?php

namespace Nddcoder\Dac\Diagram\Azure\Network;

use Nddcoder\Dac\Diagram\Azure\Azure;

class PublicIpAddresses extends Azure
{
    public function getImage()
    {
        return 'resources/azure/network/public-ip-addresses.png';
    }
}
