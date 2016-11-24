<?php 
/**
* ownCloud - disclaimer
*
* This file is licensed under the Affero General Public License version 3 or
* later. See the COPYING file.
*
* @author Smiril https://github.com/Smiril/
* @copyright Smiril 2016
*/
      if(isset($_POST['disclaimer0'])) {
          \OCP\Util::writeLog('disclaimer', 'File Delete Success ' .date('Y-m-d H:i:s'), \OCP\Util::WARN);
          unlink(realpath(dirname(__DIR__))."/pdf/".$_GET['name']);
          }
          else{
          \OCP\Util::writeLog('disclaimer', 'File Delete Failed ' .date('Y-m-d H:i:s'), \OCP\Util::WARN);
          }
?>
