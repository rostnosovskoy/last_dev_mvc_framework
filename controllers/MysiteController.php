<?php
/**
 * Created by PhpStorm.
 * User: Ростислав
 * Date: 18.03.2018
 * Time: 14:42
 */

class MysiteController extends Controller
{
    public function index()
    {
        $this->data['mysite_content'] = "Here will be mysite content";
    }
}