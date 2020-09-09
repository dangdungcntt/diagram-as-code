<?php

namespace Nddcoder\Dac\Diagram\Onprem\Queue;

use Nddcoder\Dac\Diagram\Onprem\Onprem;

class Rabbitmq extends Onprem
{
    public function getImage()
    {
        return 'resources/onprem/queue/rabbitmq.png';
    }
}
