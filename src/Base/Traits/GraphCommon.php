<?php


namespace Nddcoder\Dac\Base\Traits;

trait GraphCommon
{
    public function direction($dir): self
    {
        return $this->set('rankdir', $dir);
    }

    public function append($instruction): self
    {
        if (is_array($instruction)) {
            foreach ($instruction as $item) {
                parent::append($item);
            }
            return $this;
        }

        return parent::append($instruction);
    }
}