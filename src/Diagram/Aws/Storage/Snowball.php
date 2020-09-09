<?php

namespace Nddcoder\Dac\Diagram\Aws\Storage;

use Nddcoder\Dac\Diagram\Aws\Aws;

class Snowball extends Aws
{
    public function getImage()
    {
        return 'resources/aws/storage/snowball.png';
    }
}
