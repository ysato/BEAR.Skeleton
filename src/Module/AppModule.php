<?php
namespace BEAR\Skeleton\Module;

use BEAR\Package\AbstractAppModule;
use BEAR\Package\PackageModule;

class AppModule extends AbstractAppModule
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $appDir = $this->appMeta->appDir;
        require_once $appDir . '/.env';
        $this->install(new PackageModule);
    }
}
