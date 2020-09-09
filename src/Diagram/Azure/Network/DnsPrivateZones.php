<?php

namespace Nddcoder\Dac\Diagram\Azure\Network;

use Nddcoder\Dac\Diagram\Azure\Azure;

class DnsPrivateZones extends Azure
{
    public function getImage()
    {
        return 'resources/azure/network/dns-private-zones.png';
    }
}
