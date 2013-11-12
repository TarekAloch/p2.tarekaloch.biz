<section class='contentFollow'>

<h2>Follow</h2>

<p class="spaceAfter">Choose to follow or unfollow from a list of thinkers just like you!</p>

<? foreach($users as $thinker): ?>

	<!-- you can't unfollow yourself so your button isn't shown -->
    <?php if ($user->user_id != $thinker['user_id']) : ?>

		<!-- print this user's name -->
		<h3><?=$thinker['first_name']?> <?=$thinker['last_name']?></h3>
		
		<!-- if there exists a connection with this user, show a unfollow link -->
		<? if(isset($connections[$thinker['user_id']])): ?>
			<a href='/posts/unfollow/<?=$thinker['user_id']?>'><input type='submit' value='Unfollow' class='button' id="buttonFollow" ></a>
			
		<!-- otherwise, show the follow link -->
		<? else: ?>
			<a href='/posts/follow/<?=$thinker['user_id']?>'><input type='submit' value='Follow' class='button' id="buttonFollow" ></a>
		<? endif; ?>
		<br>
	
	<?php endif; ?>

<? endforeach; ?>

</section>