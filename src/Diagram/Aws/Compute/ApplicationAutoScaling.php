<?php

namespace Nddcoder\Dac\Diagram\Aws\Compute;

use Nddcoder\Dac\Diagram\Aws\Aws;

class ApplicationAutoScaling extends Aws
{
    public function getImage()
    {
        return 'resources/aws/compute/application-auto-scaling.png';
    }
}
