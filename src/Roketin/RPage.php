<?php

namespace Roketin;

class RPage extends Roketin
{
    public function __construct()
    {
        parent::__construct();

        $this->endPoint = '/website/api/v1/pages';
    }

    public function list()
    {
        $this->routes = '/table?';

        return $this;
    }

    public function show($id = null)
    {
        $this->routes = '/'.$id.'?';

        return $this;
    }
}