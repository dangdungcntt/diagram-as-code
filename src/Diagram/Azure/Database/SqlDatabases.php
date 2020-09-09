<?php

namespace Nddcoder\Dac\Diagram\Azure\Database;

use Nddcoder\Dac\Diagram\Azure\Azure;

class SqlDatabases extends Azure
{
    public function getImage()
    {
        return 'resources/azure/database/sql-databases.png';
    }
}
