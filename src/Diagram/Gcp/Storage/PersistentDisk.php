<?php

namespace Nddcoder\Dac\Diagram\Gcp\Storage;

use Nddcoder\Dac\Diagram\Gcp\Gcp;

class PersistentDisk extends Gcp
{
    public function getImage()
    {
        return 'resources/gcp/storage/persistent-disk.png';
    }
}
