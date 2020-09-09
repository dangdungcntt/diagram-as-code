<?php


namespace Nddcoder\Dac\Base;


use Nddcoder\Dac\Base\Traits\HasFactory;

abstract class Node extends \Alom\Graphviz\Node
{
    use HasFactory;

    public function __construct($id, $label = '', array $attributes = [], $parent = null)
    {
        $image = $this->getImage();

        $attributes  = array_merge($this->getDefaultAttributes(), ['label' => $label], $attributes);
        $imagePrefix = empty($_ENV['ROOT_DIR']) ? '' : rtrim($_ENV['ROOT_DIR'], '/').'/';

        if (!empty($image)) {
            $attributes = array_merge($attributes, [
                'shape'  => 'none',
                'height' => 2,
                'image'  => $imagePrefix.$image
            ]);
        }

        parent::__construct($id, $attributes, $parent);
    }

    abstract public function getImage();

    protected function getDefaultAttributes()
    {
        return [
//            'fontcolor' => '#ffffff'
        ];
    }
}