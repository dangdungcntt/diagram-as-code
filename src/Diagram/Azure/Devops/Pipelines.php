<?php

namespace Nddcoder\Dac\Diagram\Azure\Devops;

use Nddcoder\Dac\Diagram\Azure\Azure;

class Pipelines extends Azure
{
    public function getImage()
    {
        return 'resources/azure/devops/pipelines.png';
    }
}
