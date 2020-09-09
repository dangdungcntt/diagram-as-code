<?php

namespace Nddcoder\Dac\Diagram\Aws\Database;

use Nddcoder\Dac\Diagram\Aws\Aws;

class DynamodbGlobalSecondaryIndex extends Aws
{
    public function getImage()
    {
        return 'resources/aws/database/dynamodb-global-secondary-index.png';
    }
}
