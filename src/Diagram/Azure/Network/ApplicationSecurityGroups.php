<?php

namespace Nddcoder\Dac\Diagram\Azure\Network;

use Nddcoder\Dac\Diagram\Azure\Azure;

class ApplicationSecurityGroups extends Azure
{
    public function getImage()
    {
        return 'resources/azure/network/application-security-groups.png';
    }
}
