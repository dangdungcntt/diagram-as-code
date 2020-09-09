<?php

namespace Nddcoder\Dac\Diagram\Aws\Migration;

use Nddcoder\Dac\Diagram\Aws\Aws;

class Snowball extends Aws
{
    public function getImage()
    {
        return 'resources/aws/migration/snowball.png';
    }
}
