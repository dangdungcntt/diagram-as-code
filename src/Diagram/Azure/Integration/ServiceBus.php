<?php

namespace Nddcoder\Dac\Diagram\Azure\Integration;

use Nddcoder\Dac\Diagram\Azure\Azure;

class ServiceBus extends Azure
{
    public function getImage()
    {
        return 'resources/azure/integration/service-bus.png';
    }
}
