<?php


namespace Nddcoder\Dac\Base;


use Alom\Graphviz\Digraph;
use Nddcoder\Dac\Base\Traits\GraphCommon;
use Nddcoder\Dac\Base\Traits\HasAttr;
use Nddcoder\Dac\Base\Traits\HasFactory;

class Diagram extends Digraph
{
    use HasAttr, HasFactory, GraphCommon;

    public function __construct($id, $label = '', $attributes = [], $parent = null)
    {
        parent::__construct($id, $parent);

        $this->set('label', $label);

        $this->fillAttr($attributes, [
            'graph_attr' => [
                'pad'       => '0.5',
                'splines'   => 'ortho',
                'nodesep'   => '1.2',
                'ranksep'   => '1.2',
                'fontname'  => 'Sans-Serif',
                'fontsize'  => '15',
                'fontcolor' => '#2D3436',
            ],
            'node_attr'  => [
                'shape'      => 'box',
                'style'      => 'rounded',
                'fixedsize'  => 'true',
                'width'      => '1.4',
                'height'     => '1.4',
                'labelloc'   => 'b',
                'imagescale' => 'true',
                'fontname'   => 'Sans-Serif',
                'fontsize'   => '13',
                'fontcolor'  => '#2D3436',
            ],
            'edge_attr'  => [
                'color'     => '#7B8894',
                'fontcolor' => '#2D3436',
                'fontname'  => 'Sans-Serif',
                'fontsize'  => '13',
            ]
        ]);
    }

    public function connect($from, $to, $edgeAttrs = null)
    {
        if (is_array($from)) {
            foreach ($from as $item) {
                if (is_array($item) && isset($item[1])) {
                    $this->connect($item[0], $to, $item[1] ?? $edgeAttrs);
                    continue;
                }
                $this->connect($item, $to, $edgeAttrs);
            }
            return $this;
        }
        if (is_array($to)) {
            foreach ($to as $item) {
                if (is_array($item) && isset($item[1])) {
                    $this->connect($from, $item[0], $item[1]);
                    continue;
                }
                $this->connect($from, $item, $edgeAttrs);
            }
            return $this;
        }

        $fromId = $from instanceof Node ? $from->getId() : $from;
        $toId   = $to instanceof Node ? $to->getId() : $to;

        return $this->edge([$fromId, $toId],
            $edgeAttrs instanceof AttributeBuilder ? $edgeAttrs->toArray() : ($edgeAttrs ?? []));
    }

    public function mergeInstructions($instructions)
    {
        $this->instructions = array_merge($this->instructions, $instructions);
        return $this;
    }
}