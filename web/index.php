<watcher/><?php
/**
 * Created by PhpStorm.
 * User: kokoala
 * Date: 27/04/2017
 * Time: 14:57
 */
require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpKernel\Controller\ControllerResolver;
use Symfony\Component\Routing\RequestContext;


//init
$request = Request::createFromGlobals();
$event_dispatcher = new EventDispatcher();
$controller_resolver = new ControllerResolver();
$context = new RequestContext();
$request_stack = new RequestStack();

Request::setTrustedProxies(array('127.0.0.1'),Request::HEADER_X_FORWARDED_ALL);
$kernel = new AppKernel('dev', true);
$response =$kernel->handle($request);
$response->send();
