<?php

namespace Nddcoder\Dac\Diagram\Onprem\Gitops;

use Nddcoder\Dac\Diagram\Onprem\Onprem;

class Argocd extends Onprem
{
    public function getImage()
    {
        return 'resources/onprem/gitops/argocd.png';
    }
}
