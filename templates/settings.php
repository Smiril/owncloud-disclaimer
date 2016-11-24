<?php //use \OCA\disclaimer\disclaimer; ?>
<form id="disclaimer">
<div class="section">
                        <h2><?php p($l->t('Disclaimer'));?></h2>
                        <p><?php p($l->t('Current disclaimer path:')); ?> <a href="/apps/disclaimer/pdf/disclaimer.pdf" target="_blank"><?php echo realpath(dirname(__DIR__));?>/pdf/disclaimer.pdf</a></p>
                        <?php if(is_file(realpath(dirname(__DIR__))."/pdf/disclaimer.pdf")){?>
                        <span class="connectionwarning">
                        <a href="/apps/disclaimer/templates/unlink.php?name=disclaimer.pdf">Delete Disclaimer!</a>
                        </span>
                        <?php } ?>

                        <?php if(!is_file(realpath(dirname(__DIR__))."/pdf/disclaimer.pdf")){?>
                        <span class="connectionwarning">
                        <?php p($l->t("Please, add a disclaimer file!"));?>

                        <form id="disclaimer1" action="/apps/disclaimer/templates/upload.php" enctype="multipart/form-data" method="POST">
                        <p><label><?php p($l->t('File:')); ?></label><input name="protocoll" type="file" size="46"></p>
                        <p><input type="submit" value="submit"></p></form>
                        </span>
                        <?php } ?>

                        <?php if((is_file(realpath(dirname(__DIR__))."/pdf/disclaimer.pdf")) &&
                        (md5_file(realpath(dirname(__DIR__))."/pdf/disclaimer.pdf") === "54b3422935ea1305b2904bb6b906e095")){?>
                        <span class="connectionwarning">
                        <?php p($l->t("Please, change the default disclaimer file!"));?>

                        <form id="disclaimer1" action="/apps/disclaimer/templates/upload.php" enctype="multipart/form-data" method="POST">
                        <p><label><?php p($l->t('File:')); ?></label><input name="protocoll" type="file" size="46"></p>
                        <p><input type="submit" value="submit"></p></form>
                        </span>
                        <?php } ?>
                        </div>
</form>
