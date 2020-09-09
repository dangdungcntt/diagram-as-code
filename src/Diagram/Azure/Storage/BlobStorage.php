<?php

namespace Nddcoder\Dac\Diagram\Azure\Storage;

use Nddcoder\Dac\Diagram\Azure\Azure;

class BlobStorage extends Azure
{
    public function getImage()
    {
        return 'resources/azure/storage/blob-storage.png';
    }
}
