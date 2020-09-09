<?php

namespace Nddcoder\Dac\Diagram\Aws\Database;

use Nddcoder\Dac\Diagram\Aws\Aws;

class Aurora extends Aws
{
    public function getImage()
    {
        return 'resources/aws/database/aurora.png';
    }
}
