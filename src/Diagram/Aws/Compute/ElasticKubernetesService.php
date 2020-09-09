<?php

namespace Nddcoder\Dac\Diagram\Aws\Compute;

use Nddcoder\Dac\Diagram\Aws\Aws;

class ElasticKubernetesService extends Aws
{
    public function getImage()
    {
        return 'resources/aws/compute/elastic-kubernetes-service.png';
    }
}
