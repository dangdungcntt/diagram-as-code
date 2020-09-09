<?php

namespace Nddcoder\Dac\Diagram\Alibabacloud\Security;

use Nddcoder\Dac\Diagram\Alibabacloud\Alibabacloud;

class BastionHost extends Alibabacloud
{
    public function getImage()
    {
        return 'resources/alibabacloud/security/bastion-host.png';
    }
}
