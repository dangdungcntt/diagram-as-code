<?php

namespace Nddcoder\Dac\Diagram\Azure\Network;

use Nddcoder\Dac\Diagram\Azure\Azure;

class OnPremisesDataGateways extends Azure
{
    public function getImage()
    {
        return 'resources/azure/network/on-premises-data-gateways.png';
    }
}
