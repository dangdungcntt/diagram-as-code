<?php

namespace Nddcoder\Dac\Diagram\Oci\Security;

use Nddcoder\Dac\Diagram\Oci\Oci;

class CloudGuardWhite extends Oci
{
    public function getImage()
    {
        return 'resources/oci/security/cloud-guard-white.png';
    }
}
