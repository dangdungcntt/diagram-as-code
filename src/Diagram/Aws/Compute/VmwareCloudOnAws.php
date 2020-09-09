<?php

namespace Nddcoder\Dac\Diagram\Aws\Compute;

use Nddcoder\Dac\Diagram\Aws\Aws;

class VmwareCloudOnAws extends Aws
{
    public function getImage()
    {
        return 'resources/aws/compute/vmware-cloud-on-aws.png';
    }
}
