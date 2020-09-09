<?php

namespace Nddcoder\Dac\Diagram\Alibabacloud\Database;

use Nddcoder\Dac\Diagram\Alibabacloud\Alibabacloud;

class ApsaradbRedis extends Alibabacloud
{
    public function getImage()
    {
        return 'resources/alibabacloud/database/apsaradb-redis.png';
    }
}
