<?php

namespace Nddcoder\Dac\Diagram\Aws\Ml;

use Nddcoder\Dac\Diagram\Aws\Aws;

class ElasticInference extends Aws
{
    public function getImage()
    {
        return 'resources/aws/ml/elastic-inference.png';
    }
}
