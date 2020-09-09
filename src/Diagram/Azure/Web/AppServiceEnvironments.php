<?php

namespace Nddcoder\Dac\Diagram\Azure\Web;

use Nddcoder\Dac\Diagram\Azure\Azure;

class AppServiceEnvironments extends Azure
{
    public function getImage()
    {
        return 'resources/azure/web/app-service-environments.png';
    }
}
