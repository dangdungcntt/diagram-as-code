<?php

namespace Nddcoder\Dac\Diagram\Aws\Storage;

use Nddcoder\Dac\Diagram\Aws\Aws;

class FsxForWindowsFileServer extends Aws
{
    public function getImage()
    {
        return 'resources/aws/storage/fsx-for-windows-file-server.png';
    }
}
