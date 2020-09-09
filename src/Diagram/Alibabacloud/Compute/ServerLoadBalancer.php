<?php

namespace Nddcoder\Dac\Diagram\Alibabacloud\Compute;

use Nddcoder\Dac\Diagram\Alibabacloud\Alibabacloud;

class ServerLoadBalancer extends Alibabacloud
{
    public function getImage()
    {
        return 'resources/alibabacloud/compute/server-load-balancer.png';
    }
}
