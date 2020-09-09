<?php

namespace Nddcoder\Dac\Diagram\Aws\Storage;

use Nddcoder\Dac\Diagram\Aws\Aws;

class ElasticFileSystemEfs extends Aws
{
    public function getImage()
    {
        return 'resources/aws/storage/elastic-file-system-efs.png';
    }
}
