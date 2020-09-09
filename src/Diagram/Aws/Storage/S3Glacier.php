<?php

namespace Nddcoder\Dac\Diagram\Aws\Storage;

use Nddcoder\Dac\Diagram\Aws\Aws;

class S3Glacier extends Aws
{
    public function getImage()
    {
        return 'resources/aws/storage/s3-glacier.png';
    }
}
