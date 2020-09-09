<?php

namespace Nddcoder\Dac\Diagram\Aws\Compute;

use Nddcoder\Dac\Diagram\Aws\Aws;

class Ec2 extends Aws
{
    public function getImage()
    {
        return 'resources/aws/compute/ec2.png';
    }
}
