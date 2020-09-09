<?php

namespace Nddcoder\Dac\Diagram\Aws\Compute;

use Nddcoder\Dac\Diagram\Aws\Aws;

class Fargate extends Aws
{
    public function getImage()
    {
        return 'resources/aws/compute/fargate.png';
    }
}
