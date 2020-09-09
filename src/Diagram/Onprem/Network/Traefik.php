<?php

namespace Nddcoder\Dac\Diagram\Onprem\Network;

use Nddcoder\Dac\Diagram\Onprem\Onprem;

class Traefik extends Onprem
{
    public function getImage()
    {
        return 'resources/onprem/network/traefik.png';
    }
}
