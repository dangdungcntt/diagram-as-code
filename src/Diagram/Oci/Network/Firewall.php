<?php

namespace Nddcoder\Dac\Diagram\Oci\Network;

use Nddcoder\Dac\Diagram\Oci\Oci;

class Firewall extends Oci
{
    public function getImage()
    {
        return 'resources/oci/network/firewall.png';
    }
}
