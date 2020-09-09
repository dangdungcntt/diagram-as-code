<?php

namespace Nddcoder\Dac\Diagram\Oci\Storage;

use Nddcoder\Dac\Diagram\Oci\Oci;

class BackupRestore extends Oci
{
    public function getImage()
    {
        return 'resources/oci/storage/backup-restore.png';
    }
}
