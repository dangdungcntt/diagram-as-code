<?php


namespace Nddcoder\Dac\Base\Style;


class EdgeStyle extends Style
{
    const DIR_BACK = 'back';
    const DIR_FORWARD = 'forward';
    const DIR_BOTH = 'both';

    public function label(string $value)
    {
        return $this->set('xlabel', $value);
    }

    public function reverse()
    {
        return $this->set('dir', self::DIR_BACK);
    }

    public function forward()
    {
        return $this->set('dir', self::DIR_FORWARD);
    }

    public function bothDirection()
    {
        return $this->set('dir', self::DIR_BOTH);
    }
}