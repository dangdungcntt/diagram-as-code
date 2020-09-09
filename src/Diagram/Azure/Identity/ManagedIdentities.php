<?php

namespace Nddcoder\Dac\Diagram\Azure\Identity;

use Nddcoder\Dac\Diagram\Azure\Azure;

class ManagedIdentities extends Azure
{
    public function getImage()
    {
        return 'resources/azure/identity/managed-identities.png';
    }
}
