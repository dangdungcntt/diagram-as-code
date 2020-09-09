<?php

namespace Nddcoder\Dac\Diagram\Alibabacloud\Compute;

use Nddcoder\Dac\Diagram\Alibabacloud\Alibabacloud;

class SimpleApplicationServer extends Alibabacloud
{
    public function getImage()
    {
        return 'resources/alibabacloud/compute/simple-application-server.png';
    }
}
