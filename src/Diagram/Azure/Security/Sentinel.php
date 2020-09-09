<?php

namespace Nddcoder\Dac\Diagram\Azure\Security;

use Nddcoder\Dac\Diagram\Azure\Azure;

class Sentinel extends Azure
{
    public function getImage()
    {
        return 'resources/azure/security/sentinel.png';
    }
}
