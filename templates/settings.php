<?php //use \OCA\disclaimer\disclaimer; ?>
<h2><?php p($l->t('Disclaimer'));?></h2>
<?php         if(isset($_POST['disclaimer'])) {
                if(isset($_POST['protocoll'])) {
                        p($l->t("File transmission Success!"));
                                if(rename($_POST['protocoll']['tmp_name'], realpath(dirname(__DIR__)).'/pdf/disclaimer.pdfi')){
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
<form id="disclaimer" action="#disclaimer" method="POST">
        <div class="section">
                <p><?php p($l->t('Current disclaimer path:')); ?> <a href="/apps/disclaimer/pdf/disclaimer.pdf" target="_blank"><?php echo realpath(dirname(__DIR__));?>/pdf/disclaimer.pdf</a></p>

                <?php if(is_file(realpath(dirname(__DIR__))."/pdf/disclaimer.pdf")){?>
                <span class="connectionwarning">
                <a href="/apps/disclaimer/templates/unlink.php?name=disclaimer.pdf" target="_blank">Delete Disclaimer!</a>
                </span>
                <?php } ?>


                <?php if(!is_file(realpath(dirname(__DIR__))."/pdf/disclaimer.pdf")){?>
                <span class="connectionwarning">
                <?php p($l->t("Please, add a disclaimer file!"));?>
                </span>
                <?php } ?>

                <?php if((is_file(realpath(dirname(__DIR__))."/pdf/disclaimer.pdf")) &&
                (md5_file(realpath(dirname(__DIR__))."/pdf/disclaimer.pdf") === "54b3422935ea1305b2904bb6b906e095")){?>
                <span class="connectionwarning">
                <?php p($l->t("Please, change the default disclaimer file!"));?>
                </span>
        <?php } ?>
        </div>
<?php
                $txt =' <p><label>File:</label><input name="protocoll" type="file" size="46" /></p>
                        <p><input type="submit" value="submit" /></p>';
                echo $txt;
?>
</form>

</form>
