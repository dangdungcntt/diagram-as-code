<?php

namespace Nddcoder\Dac\Diagram\Alibabacloud\Database;

use Nddcoder\Dac\Diagram\Alibabacloud\Alibabacloud;

class ApsaradbPostgresql extends Alibabacloud
{
    public function getImage()
    {
        return 'resources/alibabacloud/database/apsaradb-postgresql.png';
    }
}
