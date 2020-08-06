<?php

namespace App\Filters;

class ProductFilter
{
    protected $request;

    protected $filter;

    public function __construct($request, $filter){
        $this->request = $request;
        $this->filter = $filter;
    }

    public function apply(){
        foreach ($this->request->all() as $key => $value) {
            if(method_exists($this, $key)){
                $this->$key($value);
            }
        }
        return $this->filter;
    }

    public function brand($val){
        if($val){
        $this->filter->where('brand_id', $val);
        }
    }
}
