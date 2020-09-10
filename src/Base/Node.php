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

        if (!empty($image)) {
            $imagePrefix = rtrim($_SERVER['ROOT_DIR'] ?? __ROOT__, '/').'/';
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