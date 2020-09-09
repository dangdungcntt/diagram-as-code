<?php

namespace Nddcoder\Dac\Diagram\Azure\Migration;

use Nddcoder\Dac\Diagram\Azure\Azure;

class DatabaseMigrationServices extends Azure
{
    public function getImage()
    {
        return 'resources/azure/migration/database-migration-services.png';
    }
}
