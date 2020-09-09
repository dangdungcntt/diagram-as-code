<?php

namespace Nddcoder\Dac\Diagram\Aws\Analytics;

use Nddcoder\Dac\Diagram\Aws\Aws;

class Redshift extends Aws
{
    public function getImage()
    {
        return 'resources/aws/analytics/redshift.png';
    }
}
