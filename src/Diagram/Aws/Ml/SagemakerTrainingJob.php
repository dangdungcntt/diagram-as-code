<?php

namespace Nddcoder\Dac\Diagram\Aws\Ml;

use Nddcoder\Dac\Diagram\Aws\Aws;

class SagemakerTrainingJob extends Aws
{
    public function getImage()
    {
        return 'resources/aws/ml/sagemaker-training-job.png';
    }
}
