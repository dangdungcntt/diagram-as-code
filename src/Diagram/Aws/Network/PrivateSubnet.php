<?php

namespace Nddcoder\Dac\Diagram\Aws\Network;

use Nddcoder\Dac\Diagram\Aws\Aws;

class PrivateSubnet extends Aws
{
    public function getImage()
    {
        return 'resources/aws/network/private-subnet.png';
    }
}
