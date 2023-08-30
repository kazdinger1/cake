<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Controller\Controller;

class AppController extends Controller
{
    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('Flash');
        $this->loadComponent('RequestHandler');


        $this->loadComponent('Authentication.Authentication');

       $this->loadComponent('Authorization.Authorization');
    }
    
    public function beforeFilter(\Cake\Event\EventInterface $event)
{
    parent::beforeFilter($event);
    $this->Authentication->addUnauthenticatedActions(['index', 'view']);
}
}
