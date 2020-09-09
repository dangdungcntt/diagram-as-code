<?php

namespace Nddcoder\Dac\Diagram\Onprem\Monitoring;

use Nddcoder\Dac\Diagram\Onprem\Onprem;

class Splunk extends Onprem
{
    public function getImage()
    {
        return 'resources/onprem/monitoring/splunk.png';
    }
}
