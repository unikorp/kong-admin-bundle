<?php

/*
 * This file is part of the KongAdminBundle package.
 *
 * (c) Unikorp <https://github.com/unikorp>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Unikorp\KongAdminBundle\Tests\App;

use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;

/**
 * app kernel
 *
 * @author VEBER Arnaud <https://github.com/VEBERArnaud>
 */
class AppKernel extends Kernel
{
    /**
     * register bundles
     *
     * @return \Symfony\Component\HttpKernel\Bundle\BundleInterface[]
     */
    public function registerBundles()
    {
        return [
            new \Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new \Unikorp\KongAdminBundle\KongAdminBundle(),
        ];
    }

    /**
     * register container configuration
     *
     * @param \Symfony\Component\Config\Loader\LoaderInterface $loader
     *
     * @return void
     */
    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config.yml');
    }
}
