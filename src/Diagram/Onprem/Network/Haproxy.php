<?php

namespace Nddcoder\Dac\Diagram\Onprem\Network;

use Nddcoder\Dac\Diagram\Onprem\Onprem;

class Haproxy extends Onprem
{
    public function getImage()
    {
        return 'resources/onprem/network/haproxy.png';
    }
}
