<?php

namespace Nddcoder\Dac\Diagram\Oci\Storage;

use Nddcoder\Dac\Diagram\Oci\Oci;

class StorageGateway extends Oci
{
    public function getImage()
    {
        return 'resources/oci/storage/storage-gateway.png';
    }
}
