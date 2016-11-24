<?php         if(isset($_POST['disclaimer1'])) {
                if(isset($_FILES['protocoll'])) {
                        \OCP\Util::writeLog('disclaimer', 'File transmission Success ' .date('Y-m-d H:i:s'), \OCP\Util::WARN);
                                if(rename($_FILES['protocoll']['tmp_name'], realpath(dirname(__DIR__)).'/pdf/disclaimer.pdf')){
                                \OCP\Util::writeLog('disclaimer', 'Disclaimer Upload Success ' .date('Y-m-d H:i:s'), \OCP\Util::WARN);
                                }
                                else{
                                \OCP\Util::writeLog('disclaimer', 'Disclaimer Upload Failed ' .date('Y-m-d H:i:s'), \OCP\Util::WARN);
                                }
                        }
                        else {
                        \OCP\Util::writeLog('disclaimer', 'File transmission Failed' .date('Y-m-d H:i:s'), \OCP\Util::WARN);
                        }
                }
?>
