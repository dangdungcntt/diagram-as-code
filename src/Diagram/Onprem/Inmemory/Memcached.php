<?php

namespace Nddcoder\Dac\Diagram\Onprem\Inmemory;

use Nddcoder\Dac\Diagram\Onprem\Onprem;

class Memcached extends Onprem
{
    public function getImage()
    {
        return 'resources/onprem/inmemory/memcached.png';
    }
}
