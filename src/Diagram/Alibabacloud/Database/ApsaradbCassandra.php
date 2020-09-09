<?php

namespace Nddcoder\Dac\Diagram\Alibabacloud\Database;

use Nddcoder\Dac\Diagram\Alibabacloud\Alibabacloud;

class ApsaradbCassandra extends Alibabacloud
{
    public function getImage()
    {
        return 'resources/alibabacloud/database/apsaradb-cassandra.png';
    }
}
