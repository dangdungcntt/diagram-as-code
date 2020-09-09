<?php

namespace Nddcoder\Dac\Diagram\Azure\Analytics;

use Nddcoder\Dac\Diagram\Azure\Azure;

class Databricks extends Azure
{
    public function getImage()
    {
        return 'resources/azure/analytics/databricks.png';
    }
}
