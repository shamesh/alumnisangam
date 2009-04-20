<?php if ($sf_request->hasErrors()): ?>
<div id="errorMessages" >
Please correct the following errors and resubmit:
<?php foreach ($sf_request->getErrors() as $error): ?>
	<div id="error"> <img src="/images/iconWarning.gif"/><?php echo $error ?> </div>
<?php endforeach; ?>
</div>
<?php endif; ?>
<?php if ($sf_flash->has('notice')): ?>
<div id="successMessages">
	<div id="message"><?php echo $sf_flash->get('notice')?></div>
</div>
<?php endif; ?>
<br>