<?php

/*
 * This file is part of the KongAdminBundle package.
 *
 * (c) Unikorp <https://github.com/unikorp>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Unikorp\KongAdminBundle\Unit\DependencyInjection;

use Unikorp\KongAdminBundle\DependencyInjection\KongAdminExtension as Extension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Yaml\Parser;

/**
 * kong admin extension test
 *
 * @author VEBER Arnaud <https://gihub.com/VEBERArnaud>
 */
class KongAdminExtensionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * extension
     * @var \Unikorp\KongAdminBundle\DependencyInjection\KongAdminExtension
     */
    private $extension = null;

    /**
     * container
     * @var \Symfony\Component\DependencyInjection\ContainerBuilder $container
     */
    private $container = null;

    /**
     * parser
     * @var \Symfony\Component\Yaml\Parser $parser
     */
    private $parser = null;

    /**
     * set up
     *
     * @return void
     */
    protected function setUp()
    {
        $this->extension = new Extension();
        $this->container = new ContainerBuilder();
        $this->parser = new Parser();
    }

    /**
     * tear down
     *
     * @return void
     */
    protected function tearDown()
    {
        $this->extension = null;
        $this->container = null;
        $this->parser = null;
    }

    /**
     * test load
     *
     * @return void
     */
    public function testLoad()
    {
        $config = <<<'YAML'
kong_admin:
YAML;

        $this->extension->load([$this->parser->parse($config)['kong_admin']], $this->container);
    }
}
