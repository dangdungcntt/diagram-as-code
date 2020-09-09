<?php

namespace Nddcoder\Dac\Diagram\Aws\Network;

use Nddcoder\Dac\Diagram\Aws\Aws;

class Cloudfront extends Aws
{
    public function getImage()
    {
        return 'resources/aws/network/cloudfront.png';
    }
}
