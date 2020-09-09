<?php

namespace Nddcoder\Dac\Diagram\Azure\Migration;

use Nddcoder\Dac\Diagram\Azure\Azure;

class RecoveryServicesVaults extends Azure
{
    public function getImage()
    {
        return 'resources/azure/migration/recovery-services-vaults.png';
    }
}
