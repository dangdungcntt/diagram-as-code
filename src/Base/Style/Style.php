<?php


namespace Nddcoder\Dac\Base\Style;


use Nddcoder\Dac\Base\AttributeBuilder;

class Style extends AttributeBuilder
{
    const BOLD = 'bold';
    const DOTTED = 'dotted';

    const DIR_BT = 'BT';
    const DIR_TB = 'TB';
    const DIR_LR = 'LR';

    public function background(string $color)
    {
        return $this->set('bgcolor', $color);
    }

    public function color(string $color)
    {
        return $this->set('color', $color);
    }

    public function style(string $style)
    {
        return $this->set('style', $style);
    }
}