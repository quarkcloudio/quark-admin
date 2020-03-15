<?php

namespace QuarkCMS\QuarkAdmin\Grid\Search\Fields;

use Illuminate\Support\Arr;
use QuarkCMS\QuarkAdmin\Grid\Search\Item;
use Exception;

class NotIn extends Item
{
    public  $options;

    function __construct($name,$label = '') {
        $this->component = 'input';
        $this->name = $name;
        $this->operator = 'notIn';

        if(empty($label) || !count($label)) {
            $this->label = $name;
        } else {
            $label = Arr::get($label, 0, ''); //[0];
            $this->label = $label;
        }

        $this->placeholder = '请选择'.$this->label;

        $style['width'] = 157;
        $this->style = $style;
    }
}