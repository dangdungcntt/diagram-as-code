<?php

namespace Nddcoder\Dac\Diagram\K8s\Storage;

use Nddcoder\Dac\Diagram\K8s\K8s;

class Pvc extends K8s
{
    public function getImage()
    {
        return 'resources/k8s/storage/pvc.png';
    }
}
