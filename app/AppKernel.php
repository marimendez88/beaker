<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function __construct($environment, $debug)
    {
        date_default_timezone_set('America/Costa_Rica');
        parent::__construct($environment, $debug);
    }

    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new Lumen\AppBundle\LumenAppBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle(),
            new FOS\UserBundle\FOSUserBundle(),
            new JMS\AopBundle\JMSAopBundle(),
            new JMS\SecurityExtraBundle\JMSSecurityExtraBundle(),
            new JMS\DiExtraBundle\JMSDiExtraBundle($this),
            new Sonata\CoreBundle\SonataCoreBundle(),
            new Sonata\BlockBundle\SonataBlockBundle(),
            new Sonata\jQueryBundle\SonatajQueryBundle(),
            new Knp\Bundle\MenuBundle\KnpMenuBundle(),
            new Sonata\DoctrineORMAdminBundle\SonataDoctrineORMAdminBundle(),
            new Sonata\AdminBundle\SonataAdminBundle(),
            new Sonata\UserBundle\SonataUserBundle('FOSUserBundle'),
            new Knp\Bundle\MarkdownBundle\KnpMarkdownBundle(),
            new Sonata\MarkItUpBundle\SonataMarkItUpBundle(),
//            new Ivory\CKEditorBundle\IvoryCKEditorBundle(),
//            new FM\ElfinderBundle\FMElfinderBundle(),
            new Sonata\IntlBundle\SonataIntlBundle(),
            new Application\Sonata\UserBundle\ApplicationSonataUserBundle(),
            new Knp\Bundle\PaginatorBundle\KnpPaginatorBundle(),
//            new Oh\GoogleMapFormTypeBundle\OhGoogleMapFormTypeBundle(),
            new JMS\SerializerBundle\JMSSerializerBundle(),
            new Genemu\Bundle\FormBundle\GenemuFormBundle(),
            new Lumen\SonataExtendsBundle\LumenSonataExtendsBundle,
            new FOS\RestBundle\FOSRestBundle(),
            new Nelmio\CorsBundle\NelmioCorsBundle(),
            new Elao\ErrorNotifierBundle\ElaoErrorNotifierBundle(),
            new Comur\ImageBundle\ComurImageBundle(),
            new FOS\JsRoutingBundle\FOSJsRoutingBundle(),
            new JMS\TranslationBundle\JMSTranslationBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'), true)) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
    }
}
