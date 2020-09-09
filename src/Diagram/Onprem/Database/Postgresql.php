<?php

namespace Nddcoder\Dac\Diagram\Onprem\Database;

use Nddcoder\Dac\Diagram\Onprem\Onprem;

class Postgresql extends Onprem
{
    public function getImage()
    {
        return 'resources/onprem/database/postgresql.png';
    }
}
