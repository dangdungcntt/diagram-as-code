<?php

namespace Nddcoder\Dac\Diagram\Onprem\Workflow;

use Nddcoder\Dac\Diagram\Onprem\Onprem;

class Kubeflow extends Onprem
{
    public function getImage()
    {
        return 'resources/onprem/workflow/kubeflow.png';
    }
}
