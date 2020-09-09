<?php

namespace Nddcoder\Dac\Diagram\Azure\Identity;

use Nddcoder\Dac\Diagram\Azure\Azure;

class AdPrivilegedIdentityManagement extends Azure
{
    public function getImage()
    {
        return 'resources/azure/identity/ad-privileged-identity-management.png';
    }
}
