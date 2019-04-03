<?php

class HomeControllers extends BaseControllers
{

    public function index()
    {
        $this->model = new Data();
        $collections = $this->model->getData();
        $this->view->render('home',
            [
                'collections' => $collections
            ]
        );
    }
}