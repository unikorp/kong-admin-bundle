<?php

/*
 * This file is part of the KongAdminBundle package.
 *
 * (c) Unikorp <https://github.com/unikorp>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Unikorp\KongAdminBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * configuration
 *
 * @author VEBER Arnaud <https://github.com/VEBERArnaud>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * get config tree builder
     *
     * @return void
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $treeBuilder->root('kong_admin');

        return $treeBuilder;
    }
}
