<?php

namespace Nddcoder\Dac\Diagram\Azure\Database;

use Nddcoder\Dac\Diagram\Azure\Azure;

class ElasticJobAgents extends Azure
{
    public function getImage()
    {
        return 'resources/azure/database/elastic-job-agents.png';
    }
}
