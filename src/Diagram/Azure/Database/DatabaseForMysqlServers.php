<?php

namespace Nddcoder\Dac\Diagram\Azure\Database;

use Nddcoder\Dac\Diagram\Azure\Azure;

class DatabaseForMysqlServers extends Azure
{
    public function getImage()
    {
        return 'resources/azure/database/database-for-mysql-servers.png';
    }
}
