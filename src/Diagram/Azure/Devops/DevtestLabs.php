<?php

namespace Nddcoder\Dac\Diagram\Azure\Devops;

use Nddcoder\Dac\Diagram\Azure\Azure;

class DevtestLabs extends Azure
{
    public function getImage()
    {
        return 'resources/azure/devops/devtest-labs.png';
    }
}
