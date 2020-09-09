<?php

namespace Nddcoder\Dac\Diagram\Azure\Identity;

use Nddcoder\Dac\Diagram\Azure\Azure;

class ActiveDirectory extends Azure
{
    public function getImage()
    {
        return 'resources/azure/identity/active-directory.png';
    }
}
