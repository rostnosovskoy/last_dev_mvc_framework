<?php
/**
 * Created by PhpStorm.
 * User: User12
 * Date: 3/16/2018
 * Time: 4:31 PM
 */

class PagesController extends Controller
{
    public function __construct($data = [])
    {
        parent::__construct($data);
        $this->model = new page();
    }
    public function index()
    {
        $this->data['pages'] = $this->model->getList();
    }

    public function view()
    {
        $params = App::getRouter()->getParams();

        if (isset($params[0])){
            $alias = strtolower($params[0]);

            $this->data['page'] = $this->model->getByAlias($alias);
        }
    }
}