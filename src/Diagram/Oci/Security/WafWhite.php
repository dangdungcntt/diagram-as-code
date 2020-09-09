<?php

namespace Nddcoder\Dac\Diagram\Oci\Security;

use Nddcoder\Dac\Diagram\Oci\Oci;

class WafWhite extends Oci
{
    public function getImage()
    {
        return 'resources/oci/security/waf-white.png';
    }
}
