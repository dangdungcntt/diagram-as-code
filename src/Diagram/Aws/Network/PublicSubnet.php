<?php

namespace Nddcoder\Dac\Diagram\Aws\Network;

use Nddcoder\Dac\Diagram\Aws\Aws;

class PublicSubnet extends Aws
{
    public function getImage()
    {
        return 'resources/aws/network/public-subnet.png';
    }
}
