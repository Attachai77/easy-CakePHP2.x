
<div class="row">
    <div class="col-xs-6 col-xs-offset-3">
		<div class="box box-primary">
			<div class="box-header">
			<h3 class="box-title"><?php echo __('Add Menu'); ?></h3>
			</div>
			<div class="box-body table-responsive">
		
			<?php echo $this->Form->create('Menu', array('role' => 'form')); ?>

				<fieldset>

										<div class="form-group">
						<?php echo $this->Form->input('menu_name', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('menu_icon', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('parent_id', array('class' => 'form-control','options' => $parentMenus)); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('is_sidebar', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('is_topmenu', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('has_child', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->

					<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary pull-right')); ?>
					<?php echo $this->Html->link('Back','/Menus', array('class' => 'btn btn-large btn-warning pull-right','style'=>'margin-right:10px;')); ?>

				</fieldset>

						<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
	li{
		list-style-type: none;
	}
</style>

<!--start: Container -->
<div class="col-xs-12">

		<div class="title"><h3>Web Application Icons</h3></div>
		
		<div class="row-fluid">
			<div class="span3">
			    <ul class="fa-icons">
					<li><i class="fa fa-adjust"></i> fa fa-adjust</li>
			      	<li><i class="fa fa-asterisk"></i> fa fa-asterisk</li>
			      <li><i class="fa fa-ban"></i> fa fa-ban-circle</li>
			      <li><i class="fa fa-bar-chart"></i> fa fa-bar-chart</li>
			      <li><i class="fa fa-barcode"></i> fa fa-barcode</li>
			      <li><i class="fa fa-flask"></i> fa fa-beaker</li>
			      <li><i class="fa fa-bell"></i> fa fa-bell</li>
			      <li><i class="fa fa-bolt"></i> fa fa-bolt</li>
			      <li><i class="fa fa-book"></i> fa fa-book</li>
			      <li><i class="fa fa-bookmark"></i> fa fa-bookmark</li>
			      <li><i class="fa fa-bookmark-empty"></i> fa fa-bookmark-empty</li>
			      <li><i class="fa fa-briefcase"></i> fa fa-briefcase</li>
			      <li><i class="fa fa-bullhorn"></i> fa fa-bullhorn</li>
			      <li><i class="fa fa-calendar"></i> fa fa-calendar</li>
			      <li><i class="fa fa-camera"></i> fa fa-camera</li>
			      <li><i class="fa fa-camera-retro"></i> fa fa-camera-retro</li>
			      <li><i class="fa fa-certificate"></i> fa fa-certificate</li>
			      <li><i class="fa fa-check"></i> fa fa-check</li>
			      <li><i class="fa fa-check-empty"></i> fa fa-check-empty</li>
			      <li><i class="fa fa-cloud"></i> fa fa-cloud</li>
			      <li><i class="fa fa-cog"></i> fa fa-cog</li>
			      <li><i class="fa fa-cogs"></i> fa fa-cogs</li>
			      <li><i class="fa fa-comment"></i> fa fa-comment</li>
			      <li><i class="fa fa-comment-alt"></i> fa fa-comment-alt</li>
			      <li><i class="fa fa-comments"></i> fa fa-comments</li>
			      <li><i class="fa fa-comments-alt"></i> fa fa-comments-alt</li>
			      <li><i class="fa fa-credit-card"></i> fa fa-credit-card</li>
			      <li><i class="fa fa-dashboard"></i> fa fa-dashboard</li>
			      <li><i class="fa fa-download"></i> fa fa-download</li>
			      <li><i class="fa fa-download-alt"></i> fa fa-download-alt</li>
			      <li><i class="fa fa-edit"></i> fa fa-edit</li>
			      <li><i class="fa fa-envelope"></i> fa fa-envelope</li>
			      <li><i class="fa fa-envelope-alt"></i> fa fa-envelope-alt</li>
			    </ul>
			  </div>
			  <div class="span3">
			    <ul class="fa-fa fas">
			      <li><i class="fa fa-exclamation-sign"></i> fa fa-exclamation-sign</li>
			      <li><i class="fa fa-external-link"></i> fa fa-external-link</li>
			      <li><i class="fa fa-eye-close"></i> fa fa-eye-close</li>
			      <li><i class="fa fa-eye-open"></i> fa fa-eye-open</li>
			      <li><i class="fa fa-facetime-video"></i> fa fa-facetime-video</li>
			      <li><i class="fa fa-film"></i> fa fa-film</li>
			      <li><i class="fa fa-filter"></i> fa fa-filter</li>
			      <li><i class="fa fa-fire"></i> fa fa-fire</li>
			      <li><i class="fa fa-flag"></i> fa fa-flag</li>
			      <li><i class="fa fa-folder-close"></i> fa fa-folder-close</li>
			      <li><i class="fa fa-folder-open"></i> fa fa-folder-open</li>
			      <li><i class="fa fa-gift"></i> fa fa-gift</li>
			      <li><i class="fa fa-glass"></i> fa fa-glass</li>
			      <li><i class="fa fa-globe"></i> fa fa-globe</li>
			      <li><i class="fa fa-group"></i> fa fa-group</li>
			      <li><i class="fa fa-hdd"></i> fa fa-hdd</li>
			      <li><i class="fa fa-headphones"></i> fa fa-headphones</li>
			      <li><i class="fa fa-heart"></i> fa fa-heart</li>
			      <li><i class="fa fa-heart-empty"></i> fa fa-heart-empty</li>
			      <li><i class="fa fa-home"></i> fa fa-home</li>
			      <li><i class="fa fa-inbox"></i> fa fa-inbox</li>
			      <li><i class="fa fa-info-sign"></i> fa fa-info-sign</li>
			      <li><i class="fa fa-key"></i> fa fa-key</li>
			      <li><i class="fa fa-leaf"></i> fa fa-leaf</li>
			      <li><i class="fa fa-legal"></i> fa fa-legal</li>
			      <li><i class="fa fa-lemon"></i> fa fa-lemon</li>
			      <li><i class="fa fa-lock"></i> fa fa-lock</li>
			      <li><i class="fa fa-unlock"></i> fa fa-unlock</li>
			      <li><i class="fa fa-magic"></i> fa fa-magic</li>
			      <li><i class="fa fa-magnet"></i> fa fa-magnet</li>
			      <li><i class="fa fa-map-marker"></i> fa fa-map-marker</li>
			      <li><i class="fa fa-minus"></i> fa fa-minus</li>
			      <li><i class="fa fa-minus-sign"></i> fa fa-minus-sign</li>
			    </ul>
			  </div>
			  <div class="span3">
			    <ul class="fa-fa fas">
			      <li><i class="fa fa-money"></i> fa fa-money</li>
			      <li><i class="fa fa-move"></i> fa fa-move</li>
			      <li><i class="fa fa-music"></i> fa fa-music</li>
			      <li><i class="fa fa-off"></i> fa fa-off</li>
			      <li><i class="fa fa-ok"></i> fa fa-ok</li>
			      <li><i class="fa fa-ok-circle"></i> fa fa-ok-circle</li>
			      <li><i class="fa fa-ok-sign"></i> fa fa-ok-sign</li>
			      <li><i class="fa fa-pencil"></i> fa fa-pencil</li>
			      <li><i class="fa fa-picture"></i> fa fa-picture</li>
			      <li><i class="fa fa-plane"></i> fa fa-plane</li>
			      <li><i class="fa fa-plus"></i> fa fa-plus</li>
			      <li><i class="fa fa-plus-sign"></i> fa fa-plus-sign</li>
			      <li><i class="fa fa-print"></i> fa fa-print</li>
			      <li><i class="fa fa-pushpin"></i> fa fa-pushpin</li>
			      <li><i class="fa fa-qrcode"></i> fa fa-qrcode</li>
			      <li><i class="fa fa-question-sign"></i> fa fa-question-sign</li>
			      <li><i class="fa fa-random"></i> fa fa-random</li>
			      <li><i class="fa fa-refresh"></i> fa fa-refresh</li>
			      <li><i class="fa fa-remove"></i> fa fa-remove</li>
			      <li><i class="fa fa-remove-circle"></i> fa fa-remove-circle</li>
			      <li><i class="fa fa-remove-sign"></i> fa fa-remove-sign</li>
			      <li><i class="fa fa-reorder"></i> fa fa-reorder</li>
			      <li><i class="fa fa-resize-horizontal"></i> fa fa-resize-horizontal</li>
			      <li><i class="fa fa-resize-vertical"></i> fa fa-resize-vertical</li>
			      <li><i class="fa fa-retweet"></i> fa fa-retweet</li>
			      <li><i class="fa fa-road"></i> fa fa-road</li>
			      <li><i class="fa fa-rss"></i> fa fa-rss</li>
			      <li><i class="fa fa-screenshot"></i> fa fa-screenshot</li>
			      <li><i class="fa fa-search"></i> fa fa-search</li>
			      <li><i class="fa fa-share"></i> fa fa-share</li>
			      <li><i class="fa fa-share-alt"></i> fa fa-share-alt</li>
			      <li><i class="fa fa-shopping-cart"></i> fa fa-shopping-cart</li>
			    </ul>
			  </div>
			  <div class="span3">
			    <ul class="fa-fa fas">
			      <li><i class="fa fa-signal"></i> fa fa-signal</li>
			      <li><i class="fa fa-signin"></i> fa fa-signin</li>
			      <li><i class="fa fa-signout"></i> fa fa-signout</li>
			      <li><i class="fa fa-sitemap"></i> fa fa-sitemap</li>
			      <li><i class="fa fa-sort"></i> fa fa-sort</li>
			      <li><i class="fa fa-sort-down"></i> fa fa-sort-down</li>
			      <li><i class="fa fa-sort-up"></i> fa fa-sort-up</li>
			      <li><i class="fa fa-star"></i> fa fa-star</li>
			      <li><i class="fa fa-star-empty"></i> fa fa-star-empty</li>
			      <li><i class="fa fa-star-half"></i> fa fa-star-half</li>
			      <li><i class="fa fa-tag"></i> fa fa-tag</li>
			      <li><i class="fa fa-tags"></i> fa fa-tags</li>
			      <li><i class="fa fa-tasks"></i> fa fa-tasks</li>
			      <li><i class="fa fa-thumbs-down"></i> fa fa-thumbs-down</li>
			      <li><i class="fa fa-thumbs-up"></i> fa fa-thumbs-up</li>
			      <li><i class="fa fa-time"></i> fa fa-time</li>
			      <li><i class="fa fa-tint"></i> fa fa-tint</li>
			      <li><i class="fa fa-trash"></i> fa fa-trash</li>
			      <li><i class="fa fa-trophy"></i> fa fa-trophy</li>
			      <li><i class="fa fa-truck"></i> fa fa-truck</li>
			      <li><i class="fa fa-umbrella"></i> fa fa-umbrella</li>
			      <li><i class="fa fa-upload"></i> fa fa-upload</li>
			      <li><i class="fa fa-upload-alt"></i> fa fa-upload-alt</li>
			      <li><i class="fa fa-user"></i> fa fa-user</li>
			      <li><i class="fa fa-user-md"></i> fa fa-user-md</li>
			      <li><i class="fa fa-volume-off"></i> fa fa-volume-off</li>
			      <li><i class="fa fa-volume-down"></i> fa fa-volume-down</li>
			      <li><i class="fa fa-volume-up"></i> fa fa-volume-up</li>
			      <li><i class="fa fa-warning-sign"></i> fa fa-warning-sign</li>
			      <li><i class="fa fa-wrench"></i> fa fa-wrench</li>
			      <li><i class="fa fa-zoom-in"></i> fa fa-zoom-in</li>
			      <li><i class="fa fa-zoom-out"></i> fa fa-zoom-out</li>
			    </ul>
			  </div>
			</div>
			<div class="title"><h3>Text Editor fa fas</h3></div>
			<div class="row-fluid bs-fa fas">
			  <div class="span3">
			    <ul class="fa-fa fas">
			      <li><i class="fa fa-file"></i> fa fa-file</li>
			      <li><i class="fa fa-cut"></i> fa fa-cut</li>
			      <li><i class="fa fa-copy"></i> fa fa-copy</li>
			      <li><i class="fa fa-paste"></i> fa fa-paste</li>
			      <li><i class="fa fa-save"></i> fa fa-save</li>
			      <li><i class="fa fa-undo"></i> fa fa-undo</li>
			      <li><i class="fa fa-repeat"></i> fa fa-repeat</li>
			      <li><i class="fa fa-paper-clip"></i> fa fa-paper-clip</li>
			    </ul>
			  </div>
			  <div class="span3">
			    <ul class="fa-fa fas">
			      <li><i class="fa fa-text-height"></i> fa fa-text-height</li>
			      <li><i class="fa fa-text-width"></i> fa fa-text-width</li>
			      <li><i class="fa fa-align-left"></i> fa fa-align-left</li>
			      <li><i class="fa fa-align-center"></i> fa fa-align-center</li>
			      <li><i class="fa fa-align-right"></i> fa fa-align-right</li>
			      <li><i class="fa fa-align-justify"></i> fa fa-align-justify</li>
			      <li><i class="fa fa-indent-left"></i> fa fa-indent-left</li>
			      <li><i class="fa fa-indent-right"></i> fa fa-indent-right</li>
			    </ul>
			  </div>
			  <div class="span3">
			    <ul class="fa-fa fas">
			      <li><i class="fa fa-font"></i> fa fa-font</li>
			      <li><i class="fa fa-bold"></i> fa fa-bold</li>
			      <li><i class="fa fa-italic"></i> fa fa-italic</li>
			      <li><i class="fa fa-strikethrough"></i> fa fa-strikethrough</li>
			      <li><i class="fa fa-underline"></i> fa fa-underline</li>
			      <li><i class="fa fa-link"></i> fa fa-link</li>
			      <li><i class="fa fa-columns"></i> fa fa-columns</li>
			      <li><i class="fa fa-table"></i> fa fa-table</li>
			    </ul>
			  </div>
			  <div class="span3">
			    <ul class="fa-fa fas">
			      <li><i class="fa fa-th-large"></i> fa fa-th-large</li>
			      <li><i class="fa fa-th"></i> fa fa-th</li>
			      <li><i class="fa fa-th-list"></i> fa fa-th-list</li>
			      <li><i class="fa fa-list"></i> fa fa-list</li>
			      <li><i class="fa fa-list-ol"></i> fa fa-list-ol</li>
			      <li><i class="fa fa-list-ul"></i> fa fa-list-ul</li>
			      <li><i class="fa fa-list-alt"></i> fa fa-list-alt</li>
			    </ul>
			  </div>
			</div>
			<div class="title"><h3>Directional fa fas</h3></div>
			<div class="row-fluid bs-fa fas">
			  <div class="span3">
			    <ul class="fa-fa fas">
			      <li><i class="fa fa-arrow-down"></i> fa fa-arrow-down</li>
			      <li><i class="fa fa-arrow-left"></i> fa fa-arrow-left</li>
			      <li><i class="fa fa-arrow-right"></i> fa fa-arrow-right</li>
			      <li><i class="fa fa-arrow-up"></i> fa fa-arrow-up</li>
			      <li><i class="fa fa-chevron-down"></i> fa fa-chevron-down</li>
			    </ul>
			  </div>
			  <div class="span3">
			    <ul class="fa-fa fas">
			      <li><i class="fa fa-circle-arrow-down"></i> fa fa-circle-arrow-down</li>
			      <li><i class="fa fa-circle-arrow-left"></i> fa fa-circle-arrow-left</li>
			      <li><i class="fa fa-circle-arrow-right"></i> fa fa-circle-arrow-right</li>
			      <li><i class="fa fa-circle-arrow-up"></i> fa fa-circle-arrow-up</li>
			      <li><i class="fa fa-chevron-left"></i> fa fa-chevron-left</li>
			    </ul>
			  </div>
			  <div class="span3">
			    <ul class="fa-fa fas">
			      <li><i class="fa fa-caret-down"></i> fa fa-caret-down</li>
			      <li><i class="fa fa-caret-left"></i> fa fa-caret-left</li>
			      <li><i class="fa fa-caret-right"></i> fa fa-caret-right</li>
			      <li><i class="fa fa-caret-up"></i> fa fa-caret-up</li>
			      <li><i class="fa fa-chevron-right"></i> fa fa-chevron-right</li>
			    </ul>
			  </div>
			  <div class="span3">
			    <ul class="fa-fa fas">
			      <li><i class="fa fa-hand-down"></i> fa fa-hand-down</li>
			      <li><i class="fa fa-hand-left"></i> fa fa-hand-left</li>
			      <li><i class="fa fa-hand-right"></i> fa fa-hand-right</li>
			      <li><i class="fa fa-hand-up"></i> fa fa-hand-up</li>
			      <li><i class="fa fa-chevron-up"></i> fa fa-chevron-up</li>
			    </ul>
			  </div>
			</div>
			<div class="title"><h3>Video Player fa fas</h3></div>
			<div class="row-fluid bs-fa fas">
			  <div class="span3">
			    <ul class="fa-fa fas">
			      <li><i class="fa fa-play-circle"></i> fa fa-play-circle</li>
			      <li><i class="fa fa-play"></i> fa fa-play</li>
			      <li><i class="fa fa-pause"></i> fa fa-pause</li>
			      <li><i class="fa fa-stop"></i> fa fa-stop</li>
			    </ul>
			  </div>
			  <div class="span3">
			    <ul class="fa-fa fas">
			      <li><i class="fa fa-step-backward"></i> fa fa-step-backward</li>
			      <li><i class="fa fa-fast-backward"></i> fa fa-fast-backward</li>
			      <li><i class="fa fa-backward"></i> fa fa-backward</li>
			      <li><i class="fa fa-forward"></i> fa fa-forward</li>
			    </ul>
			  </div>
			  <div class="span3">
			    <ul class="fa-fa fas">
			      <li><i class="fa fa-fast-forward"></i> fa fa-fast-forward</li>
			      <li><i class="fa fa-step-forward"></i> fa fa-step-forward</li>
			      <li><i class="fa fa-eject"></i> fa fa-eject</li>
			    </ul>
			  </div>
			  <div class="span3">
			    <ul class="fa-fa fas">
			      <li><i class="fa fa-fullscreen"></i> fa fa-fullscreen</li>
			      <li><i class="fa fa-resize-full"></i> fa fa-resize-full</li>
			      <li><i class="fa fa-resize-small"></i> fa fa-resize-small</li>
			    </ul>
			  </div>
			</div>
			<div class="title"><h3>Social fa fas</h3></div>
			<div class="row-fluid bs-fa fas">
			  <div class="span3">
			    <ul class="fa-fa fas">
			      <li><i class="fa fa-phone"></i> fa fa-phone</li>
			      <li><i class="fa fa-phone-sign"></i> fa fa-phone-sign</li>
			      <li><i class="fa fa-facebook"></i> fa fa-facebook</li>
			      <li><i class="fa fa-facebook-sign"></i> fa fa-facebook-sign</li>
			    </ul>
			  </div>
			  <div class="span3">
			    <ul class="fa-fa fas">
			      <li><i class="fa fa-twitter"></i> fa fa-twitter</li>
			      <li><i class="fa fa-twitter-sign"></i> fa fa-twitter-sign</li>
			      <li><i class="fa fa-github"></i> fa fa-github</li>
			      <li><i class="fa fa-github-sign"></i> fa fa-github-sign</li>
			    </ul>
			  </div>
			  <div class="span3">
			    <ul class="fa-fa fas">
			      <li><i class="fa fa-linkedin"></i> fa fa-linkedin</li>
			      <li><i class="fa fa-linkedin-sign"></i> fa fa-linkedin-sign</li>
			      <li><i class="fa fa-pinterest"></i> fa fa-pinterest</li>
			      <li><i class="fa fa-pinterest-sign"></i> fa fa-pinterest-sign</li>
			    </ul>
			  </div>
			  <div class="span3">
			    <ul class="fa-fa fas">
			      <li><i class="fa fa-google-plus"></i> fa fa-google-plus</li>
			      <li><i class="fa fa-google-plus-sign"></i> fa fa-google-plus-sign</li>
			      <li><i class="fa fa-sign-blank"></i> fa fa-sign-blank</li>
			    </ul>
			  </div>
			</div>

		</div>

	</div><!--/span-->

</div><!--/row-->						
					

</div>
<!--end: Container-->		