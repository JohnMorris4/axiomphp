<?php
    class router {
            private $routes;

            function __construct(){
                $this->routes = $GLOBALS["config"]["routes"];
                $route = $this->findRoute();
            }

            private function findRoute(){
                foreach($this->routes as $route){
                    $parts = $this->routePart($route);
                }
            }
    }

?>