<?php

class Router
{
    /**
     * Holds the registered routes.
     *
     * @var Route[]
     */
    private $routes = [];

    /**
     * Requested route (URL).
     *
     * @var string
     */
    private $action;

    /**
     * Register a new route.
     *
     * @param $routes List of Routes
     */
    public function __construct($routes = [])
    {
        $this->routes = $routes;
        $this->action = $_SERVER['REQUEST_URI'];
    }

    /**
     * Register a new route.
     *
     * @param $action string
     * @param \Closure $callback Called when current URL matches provided action
     */
    public function route($action, Closure $callback)
    {
        $this->routes[] = new Route($action, $callback);
    }

    /**
     * Dispatch the router.
     */
    public function launch()
    {
        // Removing subfolder from url and correct root route
        $action = trim($this->action, '/');
        $root = trim(Path::rebase(), '/');

        $action = preg_replace("/\/?^$root/", '', $action);
        $action = trim(explode('?', $action)[0], '/');

        $selected_route = null;
        $params = [];
        
        if (preg_match("/.+\.[a-zA-Z0-9]+$/", $action)) {
            exit(Viewer::assets(
                $action,
                [
                    "Accept-Ranges" => "bytes",
                    "Content-Type" => getallheaders()["Accept"] . "*/*",
                ]
            ));
        }

        foreach ($this->routes as $route) {
            if (preg_match("%^{$route->endpoint}$%", $action, $matches) === 1) {
                $selected_route = $route;
                $params = array_filter($matches, 'is_string', ARRAY_FILTER_USE_KEY);
                break;
            }
        }

        if (is_null($selected_route) || !is_callable($selected_route->view)) {
            exit(Viewer::error(404));
        }

        exit(call_user_func($selected_route->view, array_merge($params, $_GET)));
    }
}
