<?php

namespace Lupa;

class Module
{
    
  const VERSION = '1.0.1';
  
  public function getServiceConfig()
  {
    return [
      'factories' => [
        'Solutio\Doctrine\EntityService' => function($container) {
          return new Doctrine\EntityService($container->get('Doctrine\ORM\EntityManager'));
        }
      ]
    ];
  }
    
}