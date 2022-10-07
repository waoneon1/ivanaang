<?php 
	$data_works = [
		['image' => '01.png', 'category' => 'fashion'],
		['image' => '02.png', 'category' => 'studio'],
		['image' => '03.png', 'category' => 'session'],
		['image' => '04.png', 'category' => 'fashion'],
		['image' => '05.png', 'category' => 'studio'],
		['image' => '06.png', 'category' => 'session'],
		['image' => '07.png', 'category' => 'fashion'],
		['image' => '08.png', 'category' => 'studio'],
		['image' => '09.png', 'category' => 'session'],
		['image' => '01.png', 'category' => 'fashion'],
		['image' => '02.png', 'category' => 'studio'],
		['image' => '03.png', 'category' => 'session'],
		['image' => '04.png', 'category' => 'fashion'],
		['image' => '05.png', 'category' => 'studio'],
		['image' => '06.png', 'category' => 'session'],
	];
?>

<section class="ls columns_margin_0 columns_padding_0 page_portfolio">
	<div class="lists" style="outline: none;" data-flickity='{ 
		"pageDots": false, 
		"prevNextButtons": true, 
		"cellAlign": "left", 
		"wrapAround": true,
		"autoPlay": 2000
	}'>
		<?php for ($i=0; $i < count($data_works); $i++): ?>
			<?php 
				$data1 = $data_works[$i];
				$data2 = $data_works[count($data_works) - ($i+1)];
			?>
				<div class="item-media">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/models_square/<?php echo $data1['image'] ?>" alt="" style="width: 290px;display: block;">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/models_square/<?php echo $data2['image'] ?>" alt="" style="width: 290px;display: block;">
				</div>
		<?php endfor ?>
	</div>
</section>