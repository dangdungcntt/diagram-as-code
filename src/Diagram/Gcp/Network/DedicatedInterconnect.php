<?php

namespace Nddcoder\Dac\Diagram\Gcp\Network;

use Nddcoder\Dac\Diagram\Gcp\Gcp;

class DedicatedInterconnect extends Gcp
{
    public function getImage()
    {
        return 'resources/gcp/network/dedicated-interconnect.png';
    }
}
