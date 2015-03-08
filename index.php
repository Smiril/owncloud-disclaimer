<?php
/**
 * ownCloud - disclaimer
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Mikel Olasagasti Uranga <mikel@olasagasti.info>
 * @copyright Mikel Olasagasti Uranga 2015
 */

use OCA\disclaimer\disclaimer;

OCP\JSON::checkAppEnabled('disclaimer');
OCP\User::checkLoggedIn();

$id = isset($_GET['id']) ? (int)$_GET['id'] : 1;

?>