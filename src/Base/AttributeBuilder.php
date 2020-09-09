<?php


namespace Nddcoder\Dac\Base;


use Nddcoder\Dac\Base\Traits\HasFactory;

class AttributeBuilder
{
    use HasFactory;

    protected array $attributes = [];

    public function __construct(array $attributes = [])
    {
        $this->attributes = $attributes;
    }

    public function label(string $value)
    {
        return $this->set('label', $value);
    }

    public function set($key, $value)
    {
        return new static(array_merge($this->attributes, [
            $key => $value
        ]));
    }

    public function __call($name, $arguments)
    {
        return $this->set($name, ...$arguments);
    }

    public function toArray()
    {
        return $this->attributes;
    }
}