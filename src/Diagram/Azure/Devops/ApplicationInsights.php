<?php

namespace Nddcoder\Dac\Diagram\Azure\Devops;

use Nddcoder\Dac\Diagram\Azure\Azure;

class ApplicationInsights extends Azure
{
    public function getImage()
    {
        return 'resources/azure/devops/application-insights.png';
    }
}
