<?php         if(isset($_POST['disclaimer1'])) {
                if(isset($_FILES['protocoll'])) {
                        p($l->t("File transmission Success!"));
                                if(rename($_FILES['protocoll']['tmp_name'], realpath(dirname(__DIR__)).'/pdf/disclaimer.pdfi')){
                                echo "<br>";
                                p($l->t("Upload Success"));
                                }
                                else{
                                        echo "<br>";
                                        p($l->t("Error on Upload"));
                                }
                        }
                        else {
                                p($l->t("File transmission Failed!"));
                        }
                }
?>

