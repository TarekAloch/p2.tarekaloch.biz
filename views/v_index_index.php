<section class='contentMain'>

	<!-- If User is logged in -->
	<?php if($user): ?>
    <h1>Hello,  <?php if($user): ?><?php echo $user->first_name; ?><?php endif; ?>.</h1>
    
	
    <?php endif; ?> 
    
	<p>
		Welcome to ThoughtBranch. Record your thoughts and share your mind with the world!
	</p>
	
	<!-- info graphic showing new users how the site works -->
	<div id="main-info-graphic">
		<div id="frame" style="font-size:12px">
	<p class="para-1" style="display:none;"><span class="bold"><span class="red">T</span>hought<span class="red">B</span>ranch</span> is a collaborative information sharing platform where <span class="bold">anyone can contribute anything</span> they know.</p>
	<p class="para-2" style="display:none;"><span class="bold">O</span>ur vision is to offer everyone that uses this special piece of software the ability to tap into an ever-branching global <span class="bold">"Tree of Thoughts"</span>.</p>
</div>
</div>
	</div>
		
</section>

<aside>
	<!-- inserts login view -->
	<?=$loginContent;?> 	
	<div>
	
		
		<h3 class="features" >Features ~</h3>
		<ul>
		 	<li><span>Upload profile pic</span></li>
		 	<li><span>Delete Post</span></li>
		 	<li><span>Delete Account</span></li>	
		 	
		 	
		 	
		</ul>
	</div>   
</aside>

