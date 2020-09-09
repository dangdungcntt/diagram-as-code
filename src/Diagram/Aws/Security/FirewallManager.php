<?php

namespace Nddcoder\Dac\Diagram\Aws\Security;

use Nddcoder\Dac\Diagram\Aws\Aws;

class FirewallManager extends Aws
{
    public function getImage()
    {
        return 'resources/aws/security/firewall-manager.png';
    }
}
