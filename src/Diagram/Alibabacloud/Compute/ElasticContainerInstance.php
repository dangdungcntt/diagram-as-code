<?php

namespace Nddcoder\Dac\Diagram\Alibabacloud\Compute;

use Nddcoder\Dac\Diagram\Alibabacloud\Alibabacloud;

class ElasticContainerInstance extends Alibabacloud
{
    public function getImage()
    {
        return 'resources/alibabacloud/compute/elastic-container-instance.png';
    }
}
