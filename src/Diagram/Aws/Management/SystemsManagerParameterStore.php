<?php

namespace Nddcoder\Dac\Diagram\Aws\Management;

use Nddcoder\Dac\Diagram\Aws\Aws;

class SystemsManagerParameterStore extends Aws
{
    public function getImage()
    {
        return 'resources/aws/management/systems-manager-parameter-store.png';
    }
}
