<?php

namespace Nddcoder\Dac\Diagram\Azure\Database;

use Nddcoder\Dac\Diagram\Azure\Azure;

class ManagedDatabases extends Azure
{
    public function getImage()
    {
        return 'resources/azure/database/managed-databases.png';
    }
}
