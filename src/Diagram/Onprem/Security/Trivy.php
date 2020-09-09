<?php

namespace Nddcoder\Dac\Diagram\Onprem\Security;

use Nddcoder\Dac\Diagram\Onprem\Onprem;

class Trivy extends Onprem
{
    public function getImage()
    {
        return 'resources/onprem/security/trivy.png';
    }
}
