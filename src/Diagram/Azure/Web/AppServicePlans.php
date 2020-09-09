<?php

namespace Nddcoder\Dac\Diagram\Azure\Web;

use Nddcoder\Dac\Diagram\Azure\Azure;

class AppServicePlans extends Azure
{
    public function getImage()
    {
        return 'resources/azure/web/app-service-plans.png';
    }
}
