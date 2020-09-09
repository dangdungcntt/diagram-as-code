<?php

namespace Nddcoder\Dac\Diagram\Aws\Storage;

use Nddcoder\Dac\Diagram\Aws\Aws;

class ElasticBlockStoreEbs extends Aws
{
    public function getImage()
    {
        return 'resources/aws/storage/elastic-block-store-ebs.png';
    }
}
