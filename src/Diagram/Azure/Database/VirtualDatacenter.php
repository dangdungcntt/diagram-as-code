<?php

namespace Nddcoder\Dac\Diagram\Azure\Database;

use Nddcoder\Dac\Diagram\Azure\Azure;

class VirtualDatacenter extends Azure
{
    public function getImage()
    {
        return 'resources/azure/database/virtual-datacenter.png';
    }
}
