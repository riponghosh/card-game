<template>
    <section class="p-xlg">
		<div class="container">
			<div class="row">
				<div class="col-md-12 center">
					<h2 class="mt-lg mb-sm">Tolet - <strong>My Save Post</strong></h2>
					<!-- <p class="font-size-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna.<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p> -->

					<hr class="custom-divider">
				</div>
			</div>
			<div class="row mt-lg">
				<div class="col-sm-4 pb-xlg">

					<div>
						<span class="thumb-info thumb-info-no-zoom thumb-info-custom mb-xl center">
							<span class="thumb-info-caption">
								<span class="thumb-info-caption-text">
									<h2 class="mb-md mt-xs" style="margin-bottom: 10px !important; ">TO-LET</h2>
									<span class="mb-md mt-xs" style="font-size: 18px;line-height: 0px;">(Family Only)</span>
									<p class="font-size-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
									<div style="width: 100%">
										<div style="width: 50%; float: left;">
											Feturety : 
										</div>
										<div style="width: 50%; float: left; text-align: left;">
											<p style="line-height: 0px; margin-bottom: 0px;">1.Water</p>
											<p style="line-height: 0px; margin-bottom: 0px;">2.Gas</p>
											<p style="line-height: 0px; margin-bottom: 0px;">3.Filtter</p>
										</div>
									</div>
									<div style="width: 100%">
										<div style="width: 50%; float: left;">
											Phone No : 
										</div>
										<div style="width: 50%; float: left; text-align: left;">
											<p style="line-height: 0px; margin-bottom: 0px;">1.01771772e62</p>
											<p style="line-height: 0px; margin-bottom: 0px;">2.01771772e62</p>
											<p style="line-height: 0px; margin-bottom: 0px;">3.01771772e62</p>
										</div>
									</div>
									<div style="width: 100%;"><p style="float: left;margin-left: 50px; width: 100%; text-align: left;"> House No : 71 panthapath</p></div>
									<div style="width: 100%">
										<div style="width: 25%; float: left;">
											Image: 
										</div>
										<div style="width: 75%; float: left; text-align: left;">
											<div style="width: 50%; float: left;border: 1px solid white; margin-top: 1px;">
												<img src="/frontend/img/demos/restaurant/blog/blog-restaurant-2.png" id="myImg" onclick="zoom(this.id)" class=" im img-responsive" alt="">
											</div>
											<div style="width: 50%; float: left; border: 1px solid white; margin-top: 1px;">
												<img src="/frontend/img/demos/restaurant/blog/blog-restaurant-3.png" id="myImg2"  onclick="zoom(this.id)" class="img-responsive" alt="">
											</div>


										</div>
										
									</div>
									<a class="btn btn-primary mt-md" href="demo-restaurant-menu.html" style="margin-right: 4px;">Unsave <i class="fa fa-long-arrow-right"></i></a>
									<a class="btn btn-primary mt-md" href="demo-restaurant-menu.html">Share <i class="fa fa-long-arrow-right"></i></a>
								</span>

							</span>
						</span>
					</div>

				</div>
				<!-- The Modal -->
				<!-- <div id="myModal" class="modal">
				  <span class="close">&times;</span>
				  <img class="modal-content" id="img01">
				  <div id="caption"></div>
				</div> -->
				
				
				
			</div>

		</div>
	</section>
</template>

<script>
    export default {
        mounted() {
        	// this.$Progress.start();
            console.log('Component mounted.');
            this.$Progress.finish();
        }
    }
</script>
