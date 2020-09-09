<?php

namespace Nddcoder\Dac\Diagram\Alibabacloud\Compute;

use Nddcoder\Dac\Diagram\Alibabacloud\Alibabacloud;

class ServerlessAppEngine extends Alibabacloud
{
    public function getImage()
    {
        return 'resources/alibabacloud/compute/serverless-app-engine.png';
    }
}
