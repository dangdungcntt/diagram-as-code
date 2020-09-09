<?php

namespace Nddcoder\Dac\Diagram\Azure\Compute;

use Nddcoder\Dac\Diagram\Azure\Azure;

class CitrixVirtualDesktopsEssentials extends Azure
{
    public function getImage()
    {
        return 'resources/azure/compute/citrix-virtual-desktops-essentials.png';
    }
}
