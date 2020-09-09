<?php

namespace Nddcoder\Dac\Diagram\Azure\Compute;

use Nddcoder\Dac\Diagram\Azure\Azure;

class SapHanaOnAzure extends Azure
{
    public function getImage()
    {
        return 'resources/azure/compute/sap-hana-on-azure.png';
    }
}
