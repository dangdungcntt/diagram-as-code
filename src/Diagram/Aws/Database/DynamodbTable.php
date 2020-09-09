<?php

namespace Nddcoder\Dac\Diagram\Aws\Database;

use Nddcoder\Dac\Diagram\Aws\Aws;

class DynamodbTable extends Aws
{
    public function getImage()
    {
        return 'resources/aws/database/dynamodb-table.png';
    }
}
