<?php

namespace BackupBundle;

use Pimcore\Extension\Bundle\AbstractPimcoreBundle;
use Pimcore\Extension\Bundle\Traits\PackageVersionTrait;

class BackupBundle extends AbstractPimcoreBundle
{
    use PackageVersionTrait;

    const PACKAGE_NAME = 'manbuv/backup';

    public function getComposerPackageName()
    {
        return self::PACKAGE_NAME;
    }

    public function getVersion()
    {
        return 'v1.0';
    }
}
