<?php if(isset($_POST['disclaimer0'])) {
          \OCP\Util::writeLog('disclaimer', 'File Delete Success ' .date('Y-m-d H:i:s'), \OCP\Util::WARN);
          unlink(realpath(dirname(__DIR__))."/pdf/".$_GET['name']);
          }
          else{
          \OCP\Util::writeLog('disclaimer', 'File Delete Failed ' .date('Y-m-d H:i:s'), \OCP\Util::WARN);
          }
?>
