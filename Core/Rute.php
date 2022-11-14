<?php

namespace Core;


use mysql_xdevapi\Exception;

class Rute
{
    protected $route = [];
    protected $param;
    protected $namespace = "App\Controller\\";

    public function addRoute($url, $parametr)
    {
        $url = preg_replace('/^\//', '', $url);
        $url = preg_replace('/\//', '\\/', $url);
        $url = preg_replace('/\{([a-z]+)\}/', '(?<\1>[a-z0-9-]+)', $url);
        $url = '/^' . $url . '\/?$/i';
        if (is_array($parametr)) {
            $user = explode('@', $parametr['user']);
            $params['controller'] = $user[0];
            $params['actions'] = $user[1];
            if (isset($parametr['namespace'])) {
                $params['namesapce'] = $parametr['namespace'];
            }
        } else {
            $user = explode('@', $parametr);
            $params['controller'] = $user[0];
            $params['actions'] = $user[1];
        }
        $this->route[$url] = $params;
    }

    public function match($url)
    {
        foreach ($this->route as $key => $value) {

            if (preg_match($key, $url, $match)) {
                $params = $value;

                foreach ($match as $kew2 => $value2) {
                    if (is_string($kew2)) {
                        $params['item'][$kew2] = $value2;
                    }else{

                    }
                }

                if (!isset($params['item'])) {
                    $params['item']['x'] = NULL;
                }
                $this->param = $params;

                return true;
            }

        }
        return false;
    }

    public function okmatch($url)
    {
        $url = $this->remove($url);
        if ($this->match($url)) {
            $contoller = $this->param['controller'];
            $name = $this->namrspace();
            $contoller = $name . $contoller;
            if (class_exists($contoller)) {
                $calss = new $contoller;
                if (method_exists($calss, $this->param['actions'])) {
                    call_user_func_array([$calss, $this->param['actions']], $this->param['item']);
                } else {
                    throw new \Exception('NOT FOND METHOD,501');
                }
            } else {
                throw new \Exception('NOT FOUND CONTROLLER,403');
            }
        } else {
            throw new \Exception('URL NOT FOUND,404');
        }

    }

    public function remove($url)
    {
        if (explode('&', $url, 2)) {
            $ur = explode('&', $url, 2);
            return $ur[0];
        } else {
            return $url;
        }

    }

    public function namrspace()
    {
        $space = $this->namespace;

        if (array_key_exists('namesapce', $this->param)) {
            $space .= $this->param['namesapce'] . '\\';
        }
        return $space;
    }

    public function getRoute()
    {
        return $this->route;
    }

    public function getParm()
    {

        return $this->param;
    }
}