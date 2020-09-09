<?php

namespace Nddcoder\Dac\Diagram\Onprem\Iac;

use Nddcoder\Dac\Diagram\Onprem\Onprem;

class Ansible extends Onprem
{
    public function getImage()
    {
        return 'resources/onprem/iac/ansible.png';
    }
}
