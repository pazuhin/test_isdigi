<?php

class Application
{
    public function __construct()
    {
        $this->loader();
        $this->db();
    }

    protected function loader()
    {
        require_once SRC_DIRECTORY . '/Tools/Render.php';
        require_once SRC_DIRECTORY . '/Models/BaseModel.php';
        require_once SRC_DIRECTORY . '/Models/Data.php';
        require_once SRC_DIRECTORY . '/Controllers/BaseControllers.php';
        require_once SRC_DIRECTORY . '/Controllers/HomeControllers.php';
    }

    protected function db()
    {
        BaseModel::setConnection();
    }

    public function run()
    {
        if ($_SERVER["REQUEST_URI"] == "/") {
            $controllers = new HomeControllers();
            $controllers->index();
            exit();
        }
    }
}
