<?php

namespace Nddcoder\Dac\Diagram\Azure\Network;

use Nddcoder\Dac\Diagram\Azure\Azure;

class LoadBalancers extends Azure
{
    public function getImage()
    {
        return 'resources/azure/network/load-balancers.png';
    }
}
