<?php

namespace Nddcoder\Dac\Diagram\Azure\Ml;

use Nddcoder\Dac\Diagram\Azure\Azure;

class MachineLearningServiceWorkspaces extends Azure
{
    public function getImage()
    {
        return 'resources/azure/ml/machine-learning-service-workspaces.png';
    }
}
