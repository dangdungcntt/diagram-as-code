<?php

namespace Nddcoder\Dac\Diagram\Onprem\Ci;

use Nddcoder\Dac\Diagram\Onprem\Onprem;

class Jenkins extends Onprem
{
    public function getImage()
    {
        return 'resources/onprem/ci/jenkins.png';
    }
}
