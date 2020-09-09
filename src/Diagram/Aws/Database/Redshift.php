<?php

namespace Nddcoder\Dac\Diagram\Aws\Database;

use Nddcoder\Dac\Diagram\Aws\Aws;

class Redshift extends Aws
{
    public function getImage()
    {
        return 'resources/aws/database/redshift.png';
    }
}
