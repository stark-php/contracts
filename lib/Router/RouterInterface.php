<?php namespace Stark\Contracts\Router;

interface RouterInterface
{
    public function processRoute(string $url);
    public function storeRoute(string $request_type, string $request_url, $function_to_process_route);
}
