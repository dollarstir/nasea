<?php

class Route
{
    /**
     * Url to be entered to display view
     *
     * @var String
     */
    public $endpoint = null;

    /**
     * List of all url variable names
     *
     * @var array
     */
    public $params = [];

    /**
     * Url to be entered to display view
     *
     * @var Closure
     */
    public $view = null;


    /**
     * Register a new route.
     *
     * @param String $endpoint string
     * @param \Closure $view Called when current URL matches provided endpoint
     */
    public function __construct(
        $endpoint,
        $view
    ) {
        $endpoint = trim($endpoint, '/');
        $endpoint = preg_replace_callback('/{[^}]+}/', function ($value) {
            $value = preg_replace("/[\{\}]/", "", $value[0]);
            $this->params[] = $value;
            return "(?<$value>[a-zA-Z0-9_]+)";
        }, $endpoint);


        $this->endpoint = $endpoint;
        $this->view = $view;
    }
}
