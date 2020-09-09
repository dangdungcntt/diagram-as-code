<?php

namespace Nddcoder\Dac\Diagram\Onprem\Ci;

use Nddcoder\Dac\Diagram\Onprem\Onprem;

class Circleci extends Onprem
{
    public function getImage()
    {
        return 'resources/onprem/ci/circleci.png';
    }
}
