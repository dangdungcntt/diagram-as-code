<?php

namespace Nddcoder\Dac\Diagram\Aws\Analytics;

use Nddcoder\Dac\Diagram\Aws\Aws;

class EmrCluster extends Aws
{
    public function getImage()
    {
        return 'resources/aws/analytics/emr-cluster.png';
    }
}
