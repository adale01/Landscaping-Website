<?php foreach($page->content as $content){ ?>
		<?php if($content->type == 'text'){ ?>
			<div class="cols cols-1" style="margin-top:40px;">
				<div class="col col-1">
					<?php if(!empty($content->title)){ ?>
						<div style="position:relative;">
							<h2><?php echo $content->title; ?></h2>
							<div class="title-divider"></div>
						</div>
					<?php } ?>
					<?php echo $content->text; ?>
				</div>
			</div>
		<?php }else if($content->type == 'image_text'){ ?>
			
			<div class="outer-container white">
				<?php if(!empty($content->title)){ ?>
					<div class="centered-container">
						<h3 class="bubble-title"><?php echo $content->title; ?></h3>
					</div>
				<?php } ?>
			</div>
			<div class="outer-container white spacing">
				<div class="inner-container">
					<div class="image-text">
						<?php if($content->image_side == 'left'){ ?>
								<div class="left-image">
									<img src="<?php echo SITE_URL; ?>dynamic_resources/phl_page_content/<?php echo $content->id; ?>/image.jpg?t=<?php echo $content->last_modified_datetime; ?>" alt="<?php echo $content->image_title; ?>" title="<?php echo $content->image_title; ?>">
								</div>			
						<?php }else{ ?>
								<div class="right-image">
									<img src="<?php echo SITE_URL; ?>dynamic_resources/phl_page_content/<?php echo $content->id; ?>/image.jpg?t=<?php echo $content->last_modified_datetime; ?>" alt="<?php echo $content->image_title; ?>" title="<?php echo $content->image_title; ?>">
								</div>
						<?php } ?>
						<p>
							<?php echo $content->text; ?>
						</p>
						<div style="clear:both"></div>
					</div>
				</div>
			</div>
		<?php }else if($content->type == 'image'){ ?>
			<div class="outer-container white spacing">
				<div class="inner-container">
					<img src="<?php echo SITE_URL; ?>dynamic_resources/phl_page_content/<?php echo $content->id; ?>/image.jpg?t=<?php echo $content->last_modified_datetime; ?>" alt="<?php echo $content->image_title; ?>" title="<?php echo $content->image_title; ?>">
				</div>
			</div>
		<?php }else if($content->type == 'video'){ ?>
			<div class="cols cols-1" style="margin-top:40px;">
				<div class="col col-1">
					<?php if(!empty($content->title)){ ?>
						<div style="position:relative; margin-bottom:20px;">
							<h2><?php echo $content->title; ?></h2>
							<div class="title-divider"></div>
						</div>
					<?php } ?>
					<div class="iframe-wrapper">
						<?php if(!empty($content->youtube_id)){ ?>
							<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $content->youtube_id; ?>" frameborder="0" allowfullscreen></iframe>
						<?php } ?>
					</div>
				</div>
			</div>	
			
		<?php }else if($content->type == 'image_gallery'){ ?>
			<?php if(!empty($content->title)){ ?>
				<div class="centered-container">
					<h3 class="bubble-title"><?php echo $content->title; ?></h3>
				</div>
			<?php } ?>
			<div class="inner-container">
				<div class="image-list image-list-4 spacing">
					<?php foreach($content->images as $image){ ?>
						<div class="image-box-outer">
							<div class="image-box">
								<img src="<?php echo SITE_URL; ?>dynamic_resources/phl_page_content_images/<?php echo $image->id; ?>/image.jpg?t=<?php echo $content->last_modified_datetime; ?>" alt="<?php echo $image->title; ?>" title="<?php echo $image->title; ?>">
								<div class="image-caption">
									<h4><?php echo $image->title; ?></h4>
									<?php echo $image->caption; ?>
								</div>
							</div>
						</div>
					<?php } ?>
					<div class="clear"></div>
				</div>
			</div>
		<?php } ?>
		
	<?php } ?>
</div>