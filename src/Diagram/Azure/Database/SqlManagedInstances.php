<?php

namespace Nddcoder\Dac\Diagram\Azure\Database;

use Nddcoder\Dac\Diagram\Azure\Azure;

class SqlManagedInstances extends Azure
{
    public function getImage()
    {
        return 'resources/azure/database/sql-managed-instances.png';
    }
}
