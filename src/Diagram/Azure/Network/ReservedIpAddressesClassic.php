<?php

namespace Nddcoder\Dac\Diagram\Azure\Network;

use Nddcoder\Dac\Diagram\Azure\Azure;

class ReservedIpAddressesClassic extends Azure
{
    public function getImage()
    {
        return 'resources/azure/network/reserved-ip-addresses-classic.png';
    }
}
