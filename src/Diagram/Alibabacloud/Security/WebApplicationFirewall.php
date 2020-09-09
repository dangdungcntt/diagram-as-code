<?php

namespace Nddcoder\Dac\Diagram\Alibabacloud\Security;

use Nddcoder\Dac\Diagram\Alibabacloud\Alibabacloud;

class WebApplicationFirewall extends Alibabacloud
{
    public function getImage()
    {
        return 'resources/alibabacloud/security/web-application-firewall.png';
    }
}
