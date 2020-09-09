<?php

namespace Nddcoder\Dac\Diagram\Aws\Compute;

use Nddcoder\Dac\Diagram\Aws\Aws;

class ElasticContainerService extends Aws
{
    public function getImage()
    {
        return 'resources/aws/compute/elastic-container-service.png';
    }
}
