<?php use \OCA\disclaimer\disclaimer; ?>
<form id="disclaimer">
	<div class="section">
		<h2><?php p($l->t('Disclaimer Validation'));?></h2>
		<p><?php p($l->t('Current disclaimer path:')); ?> <a href="/apps/disclaimer/pdf/disclaimer.pdf"><?php echo realpath(dirname(__DIR__));?>/pdf/disclaimer.pdf</a></p>
		
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
</form>
