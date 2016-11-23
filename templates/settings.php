<?php //use \OCA\disclaimer\disclaimer; ?>
<form id="disclaimer">
        <div class="section">
                <h2><?php p($l->t('Disclaimer'));?></h2>
                <p><?php p($l->t('Current disclaimer path:')); ?> <a href="/apps/disclaimer/pdf/disclaimer.pdf" target="_blank"><?php echo realpath(dirname(__DIR__));?>/pdf/disclaimer.pdf</a></p>
                <form enctype="multipart/form-data" method="post" class="upload">
                <label>Datei:</label><input type="file" name="userfile" id="file" size="46" /><br />
                <input type="submit" name="save" value="Upload" id="save" />
                </form>

                        <?php if(!is_file(realpath(dirname(__DIR__))."/pdf/disclaimer.pdf")){?>
                        <span class="connectionwarning">
                                <?php p($l->t("Please, add a disclaimer file!"));?>
                <form enctype="multipart/form-data" method="post" class="upload">
                <label>Datei:</label><input type="file" name="userfile" id="file" size="46" /><br />
                <input type="submit" name="save" value="Upload" id="save" />
                </form>
                        </span>
                <?php } ?>
                <?php if((is_file(realpath(dirname(__DIR__))."/pdf/disclaimer.pdf")) &&
                                (md5_file(realpath(dirname(__DIR__))."/pdf/disclaimer.pdf") === "54b3422935ea1305b2904bb6b906e095")){?>
                        <span class="connectionwarning">
                                <?php p($l->t("Please, change the default disclaimer file!"));?>
                <form enctype="multipart/form-data" method="post" class="upload">
                <label>Datei:</label><input type="file" name="userfile" id="file" size="46" /><br />
                <input type="submit" name="save" value="Upload" id="save" />
                </form>
                        </span>
                <?php } ?>
        </div>
</form>
