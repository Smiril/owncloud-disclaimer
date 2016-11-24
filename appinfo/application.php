<?php
/**
 * ownCloud - disclaimer
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Mikel Olasagasti Uranga <mikel@olasagasti.info>
 * @copyright Mikel Olasagasti Uranga 2015
 * @author Smiril https://github.com/Smiril/
 * @copyright Smiril 2016
 */

namespace OCA\disclaimer\AppInfo;


use \OCP\AppFramework\App;
use \OCP\IContainer;

use \OCA\disclaimer\Hooks\UserHooks;

class Application extends App {

	public function __construct (array $urlParams=array()) {
		parent::__construct('disclaimer', $urlParams);

		$container = $this->getContainer();

        /**
         * Controllers
         */		
		$container->registerService('UserHooks', function($c) {
			return new UserHooks(
				$c->query('ServerContainer')->getUserManager(),
				$c->query('ServerContainer')->getGroupManager()
			);
		});

		/**
		 * Core
		 */
		$container->registerService('UserId', function(IContainer $c) {
			return \OCP\User::getUser();
		});		
		
	}

}
