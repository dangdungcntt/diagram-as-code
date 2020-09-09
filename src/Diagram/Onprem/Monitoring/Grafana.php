<?php

namespace Nddcoder\Dac\Diagram\Onprem\Monitoring;

use Nddcoder\Dac\Diagram\Onprem\Onprem;

class Grafana extends Onprem
{
    public function getImage()
    {
        return 'resources/onprem/monitoring/grafana.png';
    }
}
