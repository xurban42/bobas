<section class="reference">
	<div class="container">
		<div class="row">
			<div class="col l12 m12 s12">
				<h3>Ukázky prací</h3>
				<!-- Swiper -->
			    <div class="swiper-container reference-swiper-container potisk-tricek-top gallery-top">
			        <div class="swiper-wrapper">
        				<?php
							$images = array(
								"1.jpg",
								"2.jpg",
								"3.jpg",
								"4.jpg",
								"5.jpg"
							);
							$images = array_values($images);
							$galleryFolder = 'potisk-tricek';
							$numberOfImages = count($images);
							$numberOfImages = $numberOfImages - 1;
							for ($i = 0; $i < $numberOfImages; $i++){
								echo '
									<div class="swiper-slide">
						            	<img class="swiper-lazy" src="imgs/galerie/'. $galleryFolder .'/'. $images[$i] .'" alt="">

					            	</div>
								';
							}
						?>
			        </div>
			        <!-- Add Pagination -->
		       		<div class="swiper-pagination"></div>
			        <!-- Add Arrows -->
			        <div class="swiper-button-next swiper-button-white"></div>
			        <div class="swiper-button-prev swiper-button-white"></div>
			    </div>
			</div>
	    </div>
	</div>
</section>
