<?php

namespace Nddcoder\Dac\Diagram\Onprem\Queue;

use Nddcoder\Dac\Diagram\Onprem\Onprem;

class Kafka extends Onprem
{
    public function getImage()
    {
        return 'resources/onprem/queue/kafka.png';
    }
}