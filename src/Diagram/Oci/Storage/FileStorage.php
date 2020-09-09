<?php

namespace Nddcoder\Dac\Diagram\Oci\Storage;

use Nddcoder\Dac\Diagram\Oci\Oci;

class FileStorage extends Oci
{
    public function getImage()
    {
        return 'resources/oci/storage/file-storage.png';
    }
}
