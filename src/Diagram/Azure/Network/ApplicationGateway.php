<?php

namespace Nddcoder\Dac\Diagram\Azure\Network;

use Nddcoder\Dac\Diagram\Azure\Azure;

class ApplicationGateway extends Azure
{
    public function getImage()
    {
        return 'resources/azure/network/application-gateway.png';
    }
}
