<?php

class App {
    private $controller = 'Product';
    private $method = 'index';
    private $params = [];

    private function splitURL() {
        $url = $_GET['url'] ?? 'product';
        return explode('/', trim($url, '/'));
    }

    public function loadController() {
        $url = $this->splitURL();
        $controllerName = ucfirst($url[0] ?? 'Product');
        $filename = "../App/controllers/$controllerName.php";

        if (file_exists($filename)) {
            require $filename;
            $this->controller = new $controllerName;
            unset($url[0]);
        } else {
            require "../App/controllers/_404.php";
            $this->controller = new _404;
        }

        if (isset($url[1]) && method_exists($this->controller, $url[1])) {
            $this->method = $url[1];
            unset($url[1]);
        }

        $this->params = array_values($url);

        call_user_func_array([$this->controller, $this->method], $this->params);
    }
}
