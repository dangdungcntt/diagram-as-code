<?php

namespace Nddcoder\Dac\Diagram\Aws\Analytics;

use Nddcoder\Dac\Diagram\Aws\Aws;

class EmrHdfsCluster extends Aws
{
    public function getImage()
    {
        return 'resources/aws/analytics/emr-hdfs-cluster.png';
    }
}
