<?php declare(strict_types=1);

namespace Battron\BattronCustomHeader;

use Shopware\Core\Framework\Plugin;
use Shopware\Core\Framework\Plugin\Context\UninstallContext;

/**
 * Class BattronCustomHeader
 * @package Battron\BattronCustomHeader
 */
class BattronCustomHeader extends Plugin
{
    /**
     * @param UninstallContext $uninstallContext
     */
    public function uninstall(UninstallContext $uninstallContext): void
    {
        parent::uninstall($uninstallContext);

        if ($uninstallContext->keepUserData()) {
            return;
        }
    }
}
