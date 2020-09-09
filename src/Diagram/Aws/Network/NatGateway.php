<?php

namespace Nddcoder\Dac\Diagram\Aws\Network;

use Nddcoder\Dac\Diagram\Aws\Aws;

class NatGateway extends Aws
{
    public function getImage()
    {
        return 'resources/aws/network/nat-gateway.png';
    }
}
