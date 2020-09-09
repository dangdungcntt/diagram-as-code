<?php

namespace Nddcoder\Dac\Diagram\Aws\Compute;

use Nddcoder\Dac\Diagram\Aws\Aws;

class ElasticBeanstalk extends Aws
{
    public function getImage()
    {
        return 'resources/aws/compute/elastic-beanstalk.png';
    }
}
