<?php

namespace Nddcoder\Dac\Diagram\Onprem\Container;

use Nddcoder\Dac\Diagram\Onprem\Onprem;

class Docker extends Onprem
{
    public function getImage()
    {
        return 'resources/onprem/container/docker.png';
    }
}
