<?php
use JMS\SerializerBundle\JMSSerializerBundle;
use Symfony\Bundle\FrameworkBundle\FrameworkBundle;
use Symfony\Bundle\WebProfilerBundle\WebProfilerBundle;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Bundle\BundleInterface;
use Symfony\Component\HttpKernel\Kernel;

/**
 * Created by PhpStorm.
 * User: kokoala
 * Date: 28/04/2017
 * Time: 14:47
 */
class AppKernel extends Kernel
{
    /**
     * @return mixed
     */
    public function registerBundles()
    {
        // TODO: Implement registerBundles() method.
        $bundles = [
            new FrameworkBundle(),
            new JMSSerializerBundle()
        ];



        return $bundles;
    }


    public function getRootDir()
    {
        return __DIR__.'/../app/';
    }

    /**
     * @param LoaderInterface $loader
     * @return mixed
     */
    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        // TODO: Implement registerContainerConfiguration() method.
        $loader->load($this->getRootDir().'config/config_'.$this->getEnvironment().'.yml');

    }
}