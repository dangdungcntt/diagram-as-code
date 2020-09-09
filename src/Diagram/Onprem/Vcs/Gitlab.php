<?php

namespace Nddcoder\Dac\Diagram\Onprem\Vcs;

use Nddcoder\Dac\Diagram\Onprem\Onprem;

class Gitlab extends Onprem
{
    public function getImage()
    {
        return 'resources/onprem/vcs/gitlab.png';
    }
}
