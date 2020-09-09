<?php


namespace Nddcoder\Dac\Base;


use Alom\Graphviz\Subgraph;
use Nddcoder\Dac\Base\Traits\GraphCommon;
use Nddcoder\Dac\Base\Traits\HasAttr;
use Nddcoder\Dac\Base\Traits\HasFactory;

class Cluster extends Subgraph
{
    use HasAttr, HasFactory, GraphCommon;

    public function __construct($id, $label = '', $attributes = [], $parent = null)
    {
        parent::__construct('cluster_'.$id, $parent);

        $this->set('label', $label);

        $this->fillAttr($attributes, [
            'graph_attr' => [
                'pad'       => '1',
                'shape'     => 'box',
                'style'     => 'rounded',
                'labeljust' => 'l',
                'pencolor'  => '#AEB6BE',
                'fontname'  => 'Sans-Serif',
                'fontsize'  => '12',
                'bgcolor'   => '#E5F5FD'
            ]
        ]);
    }
}