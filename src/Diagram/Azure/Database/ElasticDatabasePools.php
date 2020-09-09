<?php

namespace Nddcoder\Dac\Diagram\Azure\Database;

use Nddcoder\Dac\Diagram\Azure\Azure;

class ElasticDatabasePools extends Azure
{
    public function getImage()
    {
        return 'resources/azure/database/elastic-database-pools.png';
    }
}
