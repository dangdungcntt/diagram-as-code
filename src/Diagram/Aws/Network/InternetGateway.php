<?php

namespace Nddcoder\Dac\Diagram\Aws\Network;

use Nddcoder\Dac\Diagram\Aws\Aws;

class InternetGateway extends Aws
{
    public function getImage()
    {
        return 'resources/aws/network/internet-gateway.png';
    }
}
