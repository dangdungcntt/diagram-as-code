<?php

namespace Nddcoder\Dac\Diagram\Azure\Database;

use Nddcoder\Dac\Diagram\Azure\Azure;

class DatabaseForMariadbServers extends Azure
{
    public function getImage()
    {
        return 'resources/azure/database/database-for-mariadb-servers.png';
    }
}
