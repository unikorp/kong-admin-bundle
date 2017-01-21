# kong-admin-bundle

[![Build Status](https://scrutinizer-ci.com/g/unikorp/kong-admin-bundle/badges/build.png?b=master)](https://scrutinizer-ci.com/g/unikorp/kong-admin-bundle/build-status/master)
[![Code Coverage](https://scrutinizer-ci.com/g/unikorp/kong-admin-bundle/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/unikorp/kong-admin-bundle/?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/unikorp/kong-admin-bundle/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/unikorp/kong-admin-bundle/?branch=master)
[![Dependency Status](https://dependencyci.com/github/unikorp/kong-admin-bundle/badge)](https://dependencyci.com/github/unikorp/kong-admin-bundle)

## Installation

### Step 1: Download the Bundle

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```console
$ composer require "unikorp/kong-admin-bundle"
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

### Step 2: Enable the Bundle

Then, enable the bundle by adding it to the list of registered bundles
in the `app/AppKernel.php` file of your project:

```php
<?php
// app/AppKernel.php

// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = [
            // ...
            new Unikorp\KongAdminBundle\KongAdminBundle(),
        ];

        // ...
    }

    // ...
}
```

### Step 3: Configure the Bundle

Then, configure the bundle by adding to the `app/config/config.yml` file of your project:

```yml
#...

# KongAdminBundle Configuration
kong_admin:
```
