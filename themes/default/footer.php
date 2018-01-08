		<div class="wrap">
	            <footer id="bottom">
	                <small><i class="em em-flag-br"></i> &copy; <?php echo date('Y'); ?> <?php echo site_name(); ?>. All rights reserved. <i class="em em-necktie"></i></small>

	                <ul role="navigation">
	                    <li><i class="em em-email"></i> <a href="<?php echo rss_url(); ?>">RSS</a></li>
	                    <?php if (twitter_account()): ?>
	                    <li><a href="<?php echo twitter_url(); ?>"><i class="em em-bird"></i> @<?php echo twitter_account(); ?></a></li>
	                    <?php endif; ?>

	                    <li><a href="<?php echo base_url(); ?>" title="Return to blog."><i class="em em-house"></i> Home</a></li>
	                </ul>
	            </footer>

	        </div>
        </div>
    </body>
</html>
