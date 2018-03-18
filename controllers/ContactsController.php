<?php
/**
 * Created by PhpStorm.
 * User: Ростислав
 * Date: 17.03.2018
 * Time: 20:52
 */

class ContactsController extends Controller
{
    public function __construct($data = [])
    {
        parent::__construct($data);
        $this->model = new Message();
    }
    public function index()
    {
        if ($_POST){
            if ($this->model->save($_POST)){
                Session::setFlash('Thank you! Your message was send successfully.');
            }
        }
    }
}