<?php

namespace Nddcoder\Dac\Diagram\Oci\Storage;

use Nddcoder\Dac\Diagram\Oci\Oci;

class BlockStorage extends Oci
{
    public function getImage()
    {
        return 'resources/oci/storage/block-storage.png';
    }
}
