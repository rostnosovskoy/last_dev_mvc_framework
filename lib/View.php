<?php
/**
 * Created by PhpStorm.
 * User: Ростислав
 * Date: 17.03.2018
 * Time: 15:38
 */

class View
{
    protected $data;
    protected $path;

    protected static function getDefaultViewPath()
    {
        $router = App::getRouter();
        if (!$router){
            throw new Exception("Router: $router doesn't exist.");
        }
        $controller_dir = $router->getController();
        $tamplate_name = $router->getMethodPrefix().$router->getAction().".html";
        return VIEWS_PATH.DS.$controller_dir.DS.$tamplate_name;
    }

    public function __construct($data = [], $path = null)
    {
        if (!$path){
            $path = self::getDefaultViewPath();
        }

        if (!file_exists($path)){
            throw new Exception("Tamplate file is not found in this $path");
        }
        $this->path = $path;
        $this->data = $data;
    }

    public function render()
    {
        $data = $this->data;
        ob_start();
        include ($this->path);
        $content = ob_get_clean();

        return $content;
    }

}