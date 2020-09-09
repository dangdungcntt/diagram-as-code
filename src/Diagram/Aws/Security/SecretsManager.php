<?php

namespace Nddcoder\Dac\Diagram\Aws\Security;

use Nddcoder\Dac\Diagram\Aws\Aws;

class SecretsManager extends Aws
{
    public function getImage()
    {
        return 'resources/aws/security/secrets-manager.png';
    }
}
