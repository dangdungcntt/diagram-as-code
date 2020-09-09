<?php

namespace Nddcoder\Dac\Diagram\Azure\Database;

use Nddcoder\Dac\Diagram\Azure\Azure;

class CosmosDb extends Azure
{
    public function getImage()
    {
        return 'resources/azure/database/cosmos-db.png';
    }
}
