<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 9/21/15
 * Time: 3:38 AM
 */

namespace App\Controller;


class UsersController extends AppController{

    public $name = 'Users';

    public function beforeRender(\Cake\Event\Event $event)
    {
        $this->viewBuilder()
            ->layout('login')
            ->theme('Modern');
    }

    public function login(){

    }
} 