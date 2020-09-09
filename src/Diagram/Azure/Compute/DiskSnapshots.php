<?php

namespace Nddcoder\Dac\Diagram\Azure\Compute;

use Nddcoder\Dac\Diagram\Azure\Azure;

class DiskSnapshots extends Azure
{
    public function getImage()
    {
        return 'resources/azure/compute/disk-snapshots.png';
    }
}
