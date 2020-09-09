<?php

namespace Nddcoder\Dac\Diagram\Aws\Compute;

use Nddcoder\Dac\Diagram\Aws\Aws;

class Lightsail extends Aws
{
    public function getImage()
    {
        return 'resources/aws/compute/lightsail.png';
    }
}
