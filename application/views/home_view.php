<div style="margin-left: 500px;">
	<h1>Cookie Example</h1>
	<?php if($username==null): ?>
	<div>
		<form method="POST" action="<?=base_url('home/setusername')?>">
			<label>Enter your name</label>
			<input type="text" name="username" value="">
			<input type="submit" value="Submit">
		</form>
	</div>
	<?php else: ?>
		<h3>Hi <?=$username?>, Welcome to this website</h3>
		<a href="<?=base_url('home/clearcookie')?>">Clear cookies</a>
	<?php endif?>
</div>
