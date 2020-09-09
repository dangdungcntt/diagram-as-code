<?php

namespace Nddcoder\Dac\Diagram\Gcp\Network;

use Nddcoder\Dac\Diagram\Gcp\Gcp;

class Nat extends Gcp
{
    public function getImage()
    {
        return 'resources/gcp/network/nat.png';
    }
}
