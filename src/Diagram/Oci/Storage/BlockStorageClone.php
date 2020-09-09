<?php

namespace Nddcoder\Dac\Diagram\Oci\Storage;

use Nddcoder\Dac\Diagram\Oci\Oci;

class BlockStorageClone extends Oci
{
    public function getImage()
    {
        return 'resources/oci/storage/block-storage-clone.png';
    }
}
