<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.provider.dao.main' shared service.

return $this->privates['security.authentication.provider.dao.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider(($this->privates['security.user.provider.concrete.doctrine'] ?? $this->load('getSecurity_User_Provider_Concrete_DoctrineService.php')), new \Symfony\Component\Security\Core\User\UserChecker(), 'main', ($this->privates['security.encoder_factory.generic'] ?? $this->load('getSecurity_EncoderFactory_GenericService.php')), true);
