<?php

namespace Nddcoder\Dac\Diagram\Aws\Satellite;

use Nddcoder\Dac\Diagram\Aws\Aws;

class GroundStation extends Aws
{
    public function getImage()
    {
        return 'resources/aws/satellite/ground-station.png';
    }
}
