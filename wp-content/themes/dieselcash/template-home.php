<?php
/**
 * Template Name: Home Template
 */
?>
<section id="home" class="bg-two-lines">
	<div class="bg-two-lines-inner">
		<div class="container">
			<div class="row justify-content-center">
				<?php
					$intro = get_field('intro');
					$button_1 = $intro['button_1'];	
					$button_2 = $intro['button_2'];	
				?>
				<div class="text-center col-12 mb-5">
					<h1 class="mb-3"><?=$intro['h1_intro']?></h1>
					<h5 id="about" class="theme-color mb-5"><?=$intro['h5_intro']?></h5>
					<?php if ($button_1) { ?>
						<a class="button theme-btn mr-2" href="<?php echo $button_1['url']; ?>" target="<?php echo $button_1['target']; ?>">
							<span class="button-label"><?php echo $button_1['title']; ?></span>
						</a>
					<?php } 
					if ($button_2) { ?>
						<a class="button theme-btn-2 mr-2" href="<?php echo $button_2['url']; ?>" target="<?php echo $button_2['target']; ?>">
							<span class="button-label"><?php echo $button_2['title']; ?></span>
						</a>
					<?php } ?>
				</div>
				<?php $coin_different = get_field('what_makes_our_coin_different'); 
					if ($coin_different) { ?>
						<div class="col-lg-7 mb-5">
							<div class="box-radius">
								<h2 class="mb-3 text-center">What makes our coin different ?</h2>
								<h5 class="theme-color mb-3 text-center"><?=$coin_different['intro_coin_different']?></h5>
								<div class="list-image d-flex align-items-center flex-column">
									<?=$coin_different['list_coin_different']?>
								</div>
							</div>	
						</div>
				<?php }?>
				<?php
					if( have_rows('core_principal') ){?>
						<div class="col-12">
							<h2 class="mb-4">Core principal:</h2>
							<ul class="row mb-0 px-0">
							    <?php while( have_rows('core_principal') ): the_row();
									for ($i=1; $i <=3 ; $i++) { 
										$core_principal = get_sub_field('core_principal_0'.$i.'');
										echo '<li class="col-md-4 mb-md-5 mb-4 d-flex align-items-center">';
										echo '<img src="'.$core_principal['img'].'">';
										echo '<div class="ml-4">';
										echo '<h6 class="theme-color">0'.$i.' —</h6>';
										echo '<h5>'.$core_principal['name'].'</h5>';
										echo '</div></li>';
									}
							    endwhile; ?>
					    	</ul>
						</div>
					<?php }
				?>
			</div>
		</div>
	</div>
</section>	
<?php 
	$best_coin_exchange = get_field('best_coin_exchange'); 
	if ($best_coin_exchange){ ?>
	<section>
		<div class="container">
			<div class="row mt-5 mb-5 justify-content-center text-center">
				<div class="col-12 text-center">
					<h2 class="mb-4">Best Coin Exchange</h2>
					<div class="text-center mb-lg-5 mb-3">
						<img class="mr-auto ml-auto mb-3" src="<?=$best_coin_exchange['img']?>" >
						<h5 style="color: #f4ba2f"><?=$best_coin_exchange['name']?></h5>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php } ?>		
<section id="features" class="bg-one-line">
	<div class="bg-one-line-inner">
		<div class="container">
				<?php 
					if( have_rows('what_we_will_more_than_likely_launch_as') ){
						while( have_rows('what_we_will_more_than_likely_launch_as') ): the_row();
							echo '<div class="row"><div class="col-12 mb-5 text-center">';
							echo '<h1 class="mb-3">What we will more than likely launch as</h1>';
							echo '<h3 class="theme-color">'.get_sub_field('web').'</h3>';
							echo '</div></div><div class="row ml-0 mr-0">';
							for ($i=1; $i <=3 ; $i++) { 
								$add_class = 'box-radius mt-0 mt-lg-4 mb-4';
								if ($i==2){
									$add_class = 'box-radius box-radius-bg';
								}
								echo '<div class="col-12 col-lg-4 px-0">';
								echo '<div class="'.$add_class.'">';
								echo '<ul>';
								$column = get_sub_field('column_'.$i.'');
								$column = explode("\n", $column);
								foreach ($column as $value) {
									echo '<li>'.$value.'</li>';
								}
								echo '</ul></div></div>';
							}
							echo '</div>';
						endwhile; 
					}	
				?>
		</div>
	</div>
</section>		
<section class="py-5">
	<div class="container">
		<div class="row justify-content-center mb-5 mt-5">
			<?php 
				// Link 
				$links = get_field('links');
				if ($links){
					echo '<div class="col-12 text-center"><h1 class="mb-5">LINKS</h1></div>';
				}
				$array_links = ['website', 'twitter', 'github', 'youtube', 'mnrank', 'masternodes'];
				foreach ($array_links as $value) {
					$value_x = $links[$value];
					if($value_x){
						echo '<div class="mb-3 text-center col-lg-2 col-md-3 col-sm-4 col-6">';
						echo '<a class="text-white" href="'.$value_x['url'].'" target="'.$value_x['target'].'">';
						echo '<img class="ml-auto mr-auto" src="'.get_stylesheet_directory_uri().'/assets/images/'.$value.'.png'.'">';
						echo '<p class="text-center">'.$value_x['title'].'</p>';
						echo '</a></div>';
					}
				}
			?>
		</div>
		<div class="row justify-content-center">
			<?php 
				// Wallets
				if( have_rows('wallets') ){
					echo '<div class="col-12 text-center">';
					echo '<h1>WALLETS</h1>';
					echo '<h5 class="mb-5 theme-color">Come with lux</h5>';
					echo '</div>';
				    while( have_rows('wallets') ): the_row();
				    	for ($i=1; $i <=5 ; $i++) { 
				    		$list = get_sub_field('list'.$i.'');	
				    		if ($list) {
				    			echo '<div class="mb-3 text-center">';
				    			echo '<img class="ml-auto mr-auto" src="'.$list['img'].'">';
				    			echo '<p class="text-center">'.$list['name'].'</p>';
				    			echo '</div>';
				    		}
				    	}
				   	endwhile; 
				}
			?>
		</div>		
	</div>
</section>
<section class="bg-one-line">
	<div class="bg-one-line-inner">
		<div class="container">
			<div class="row">
				<div class="col-12 mb-5 py-5 text-center">
					<h1 class="mb-3">EXCHANGES</h1>
					<h5 class="theme-color">Initially CB then Cryptopia and then Binance</h5>
				</div>
			</div>
			<?php 
				$mining_pools = get_field('mining_pools');
				$mining_pools = explode("\n", $mining_pools);
				$count_mining_pools = count($mining_pools);
 			?>
			<?php
				if($count_mining_pools !=0 ){
					echo '<div class="row"><div class="col-12 mb-3 mt-5 text-center">';
				    echo '<h2>MINING POOLS TO CONTACT</h2>';
				    echo '</div></div>';
				    echo '<div class="row mb-5 d-flex align-items-center justify-content-center">';
				    for ($i=0; $i < $count_mining_pools ; $i++) { 
				    	$num = $i + 1;
					    echo '<div class="col-xl-3 col-lg-4 col-sm-6 mb-lg-4 mb-4">';
					    if ($num<= 9) {
						    echo '<div class="small-box-radius"><h6 class="theme-color">0'.$num.' —</h6>';
						}else{
							echo '<div class="small-box-radius"><h6 class="theme-color">'.$num.' —</h6>';
						}
					    echo '<h5>'.$mining_pools[$i].'</h5></div></div>';
				    }
				    echo '</div>';
				}    
			?>
			<?php
				if( have_rows('explorers') ){
					echo '<div class="row"><div class="col-12 mt-5 text-center">';
					echo '<h1>EXPLORERS</h1><h5 class="mb-3 theme-color">Probably</h5>';
					echo '</div></div>';
					while( have_rows('explorers') ): the_row();
						echo '<div class="row ml-0 mr-0 mb-5">';
						for ($i=1; $i <=2 ; $i++) { 
				    		$url = get_sub_field('url_0'.$i.'');
				    		if ($url){
				    			$add_class ='box-radius text-center';
				    			if ($i == 2 ){
				    				$add_class = 'box-radius box-radius-bg text-center';
				    			}
				    			echo '<div class="col-12 col-md-6 px-0">';
				    			echo '<div class="'.$add_class.'">';
				    			echo '<div class="box-number"><span>'.$i.'</span><img src="'.get_stylesheet_directory_uri().'/assets/images/number-order.png'.'"></div>';
				    			echo '<h2 class="mb-3">'.$url.'</h2>';
				    			echo '</div></div>';
				    		}
				    	}
						echo '</div>';
					endwhile; 
				}
			?>
			<?php 
				$country = get_field('country');
				$country = explode("\n", $country);
				$count_country = count($country);
				if( $count_country !=0){ ?>
	 			<div class="small-box-radius mb-5">
					<div class="col-12  mt-sm-5 mt-4 mb-5 text-center">
						<h2>TRANSLATIONS</h2>
					</div>
					<div class="row ml-0 ml-md-5">
					<?php for ($i=0; $i <$count_country ; $i++) { 
						$num = $i + 1;
						echo '<div class="mb-sm-5 mb-4 col-md-3 col-sm-4 col-6">';
							if ($num<= 9) {
								echo '<h6 class="theme-color">0'.$num.' —</h6>';
							}else{
								echo '<h6 class="theme-color">'.$num.' —</h6>';
							}
						echo '<h5>'.$country[$i].'</h5>';
						echo '</div>';
					} ?>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>
<section id="contact" class="bg-two-lines bg-none">
	<div class="bg-two-lines-inner bg-center py-5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="text-center col-12 mb-5">
					<h1 class="mb-3">Contact Us</h1>
				</div>
				<div class="col-lg-8">
					<?php echo do_shortcode('[contact-form-7 id="13" title="Contact form 1"]');  ?>
				</div>
			</div>	
		</div>
	</div>
</section>			