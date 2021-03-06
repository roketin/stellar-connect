<?php

namespace Roketin;

class RCategory extends Roketin
{
    public function __construct()
    {
        parent::__construct();

        $this->endPoint = '/product/api/v1/category';
    }

    public function list($parent_id = null)
    {
        if (is_null($parent_id)) {
            $this->routes = '?parent=null&';
        } else {
            $this->routes = '?parent='.$parent_id.'&';
        }

        return $this;
    }

    public function show($id = null)
    {
        $this->routes = '/'.$id.'/show?';

        return $this;
    }
}
