<?php

namespace Nddcoder\Dac\Diagram\Oci\Security;

use Nddcoder\Dac\Diagram\Oci\Oci;

class CloudGuard extends Oci
{
    public function getImage()
    {
        return 'resources/oci/security/cloud-guard.png';
    }
}
