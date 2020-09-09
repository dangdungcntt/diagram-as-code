<?php

namespace Nddcoder\Dac\Diagram\Onprem\Inmemory;

use Nddcoder\Dac\Diagram\Onprem\Onprem;

class Hazelcast extends Onprem
{
    public function getImage()
    {
        return 'resources/onprem/inmemory/hazelcast.png';
    }
}
