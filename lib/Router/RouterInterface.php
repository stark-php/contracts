<?php namespace Stark\Contracts\Router;

interface RouterInterface
{
    public function route(string $url, $function);
}
