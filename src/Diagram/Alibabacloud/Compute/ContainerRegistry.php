<?php

namespace Nddcoder\Dac\Diagram\Alibabacloud\Compute;

use Nddcoder\Dac\Diagram\Alibabacloud\Alibabacloud;

class ContainerRegistry extends Alibabacloud
{
    public function getImage()
    {
        return 'resources/alibabacloud/compute/container-registry.png';
    }
}
