<?php
/**
 * Created by PhpStorm.
 * User: kokoala
 * Date: 27/04/2017
 * Time: 16:30
 */

require_once __DIR__.'/../vendor/autoload.php';
use Symfony\Component\Console\Application;
use Symfony\Component\Yaml\Command\LintCommand;

(new Application('yaml/lint'))
    ->add(new LintCommand())
    ->getApplication()
    ->setDefaultCommand('lint:yaml', true)
    ->run();