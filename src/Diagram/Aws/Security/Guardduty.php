<?php

namespace Nddcoder\Dac\Diagram\Aws\Security;

use Nddcoder\Dac\Diagram\Aws\Aws;

class Guardduty extends Aws
{
    public function getImage()
    {
        return 'resources/aws/security/guardduty.png';
    }
}
