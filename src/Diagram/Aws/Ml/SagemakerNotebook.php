<?php

namespace Nddcoder\Dac\Diagram\Aws\Ml;

use Nddcoder\Dac\Diagram\Aws\Aws;

class SagemakerNotebook extends Aws
{
    public function getImage()
    {
        return 'resources/aws/ml/sagemaker-notebook.png';
    }
}
