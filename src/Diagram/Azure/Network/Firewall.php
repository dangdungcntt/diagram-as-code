<?php

namespace Nddcoder\Dac\Diagram\Azure\Network;

use Nddcoder\Dac\Diagram\Azure\Azure;

class Firewall extends Azure
{
    public function getImage()
    {
        return 'resources/azure/network/firewall.png';
    }
}
