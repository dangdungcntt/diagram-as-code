<?php

namespace Nddcoder\Dac\Diagram\Onprem\Monitoring;

use Nddcoder\Dac\Diagram\Onprem\Onprem;

class Datadog extends Onprem
{
    public function getImage()
    {
        return 'resources/onprem/monitoring/datadog.png';
    }
}
