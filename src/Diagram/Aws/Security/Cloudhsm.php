<?php

namespace Nddcoder\Dac\Diagram\Aws\Security;

use Nddcoder\Dac\Diagram\Aws\Aws;

class Cloudhsm extends Aws
{
    public function getImage()
    {
        return 'resources/aws/security/cloudhsm.png';
    }
}
