<?php


namespace Nddcoder\Dac\Base\Traits;


trait HasAttr
{
    protected function fillAttr($customAttributes, $defaultAttributes = [])
    {
        foreach (['node', 'edge', 'graph'] as $name) {
            $key = "{$name}_attr";

            if (!empty($defaultAttributes[$key]) || !empty($customAttributes[$key])) {
                $this->attr($name, array_merge($defaultAttributes[$key] ?? [], $customAttributes[$key] ?? []));
            }

            unset($customAttributes[$key]);
        }

        foreach ($customAttributes as $key => $value) {
            $this->set($key, $value);
        }
    }
}