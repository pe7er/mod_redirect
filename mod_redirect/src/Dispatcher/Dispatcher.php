<?php

/**
 * @package     Joomla.Administrator
 * @subpackage  mod_redirect
 *
 * @copyright   (C) 2024 Peter Martin. <https://db8.nl>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Joomla\Module\Redirect\Administrator\Dispatcher;

use Joomla\CMS\Dispatcher\AbstractModuleDispatcher;
use Joomla\CMS\Factory;
use Joomla\CMS\Helper\HelperFactoryAwareInterface;
use Joomla\CMS\Helper\HelperFactoryAwareTrait;

// phpcs:disable PSR1.Files.SideEffects
\defined('_JEXEC') or die;
// phpcs:enable PSR1.Files.SideEffects

/**
 * Dispatcher class for mod_redirect
 *
 * @since 1.0.0
 */
class Dispatcher extends AbstractModuleDispatcher implements HelperFactoryAwareInterface
{
    use HelperFactoryAwareTrait;

    /**
     * Runs the dispatcher.
     *
     * @return  void
     *
     * @throws \Exception
     * @since 1.0.0
     */
    public function dispatch()
    {
        if (!Factory::getApplication()->getIdentity()->authorise('core.edit', 'com_redirect')) {
            return;
        }

        parent::dispatch();
    }

    /**
     * Returns the layout data.
     *
     * @return  array
     *
     * @since 1.0.0
     */
    protected function getLayoutData()
    {
        $data = parent::getLayoutData();

        $data['list'] = $this->getHelperFactory()->getHelper('RedirectHelper')->getRedirectLinks($data['params']);

        return $data;
    }
}
