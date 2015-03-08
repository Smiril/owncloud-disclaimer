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
 
namespace OCA\disclaimer\Hooks;

use OCA\disclaimer\disclaimer;

class UserHooks {

    private $userManager;
	private $groupManager;

    public function __construct($userManager, $groupManager){
        $this->userManager = $userManager;
		$this->groupManager = $groupManager;
    }

	public function hasAcceptedDisclaimer(){
		if(isset($_POST['disclaimer'])){
			return true;
		}
		else{
			$_['invalidpassword'] = true;
			return false;
		}
	}
	
	
	public function processUser( $user, $password ){
		$remoteAddr = $_SERVER['REMOTE_ADDR'];
		\OCP\Util::writeLog('disclaimer', 'Checking  user "' . $user . '" from ' . $remoteAddr, \OCP\Util::DEBUG);
		
		if( $this->hasAcceptedDisclaimer() === false ){
			\OCP\Util::writeLog('disclaimer', 'User "' . $user . '" from IP "'.$remoteAddr.'" has not accepted the disclaimer at '. date('Y-m-d H:i:s'), \OCP\Util::WARN);
			throw new \Exception('You are not allowed to access due to unaccepted disclaimer');
		}
		else{
			\OCP\Util::writeLog('disclaimer', 'User "' . $user . '" from IP "'.$remoteAddr.'" has accepted the disclaimer at ' .date('Y-m-d H:i:s'), \OCP\Util::WARN);
		}
	}	
	
    public function register() {
		if( \OCP\Config::getSystemValue('disable-disclaimer') !== '1' ){
			$callback = array($this, 'processUser');
			$this->userManager->listen('\OC\User', 'preLogin', $callback);
		}
	}
}
