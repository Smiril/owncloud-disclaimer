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

\OCP\App::registerAdmin('disclaimer', 'settings');

$app = new Application();
$app->getContainer()->query('UserHooks')->register();

if (!\OCP\User::isLoggedIn()){
	\OCP\Util::addScript('disclaimer', 'disclaimer');
	\OCP\Util::addStyle('disclaimer', 'disclaimer');
}

