@include("website.includes.header")

<link rel="stylesheet" href="./assets/css/touchTouch.css" type="text/css" media="screen">
<link rel="stylesheet" href="./assets/css/isotope.css" type="text/css" media="screen">
<div class="subpage">
	<div id="slider_wrapper">
		<div class="img"><img src="./assets/images/mountain.jpg" alt=""></div>
		<div class="slider_bot">
			<div class="page_title text-center">Maktaba ya picha</div>
			<div class="container text-white pb-10">
				<a href="./" class="link text-info">Nyumbani</a> / Maktaba ya picha
			</div>
		</div>
	</div>


	<!-- ABOUT SECTION -->
	<section>
		<div class="container">
			<div class="row">
				<div class="span12">
					<div id="isotope-options">
						<ul id="isotope-filters" class="clearfix">
							<li><a href="#" class="selected" data-filter=".isotope-filterall">All</a></li>
							<li><a href="#" data-filter=".Vikao">Vikao</a></li>
							<li><a href="#" data-filter=".Matamasha">Matamasha</a></li>
							<li><a href="#" data-filter=".Matukio">Matukio</a></li>
							<li><a href="#" data-filter=".Sherehe">Sherehe</a></li>
							<li><a href="#" data-filter=".Uzinduzi">Uzinduzi</a></li>
							<li><a href="#" data-filter=".Nyenginezo">Nyenginezo</a></li>
						</ul>
					</div>

					<div class="thumbnails row" id="isotope-items">
						@foreach($data as $v)
							<div class="col-md-3 isotope-element isotope-filterall pb-7 {{ $v->related }}">
								<div class="thumb-isotope">
									<div class="thumbnail clearfix">
										<a href="{{asset('storage/' . $v->file) }}">
											<figure style="width: 100%;border-radius: 0px !important;">
												<img src="{{asset('storage/' . $v->file) }}" alt=""
													style="width: 100%;border-radius: 0px !important;"><em></em>
											</figure>

										</a>
									</div>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

@include("website.includes.footer")
<script type="text/javascript" src="./assets/js/touchTouch.jquery.js"></script>
<script type="text/javascript" src="./assets/js/jquery.isotope.min.js"></script>
<script>
	$(document).ready(function () {

		// isotop
		var $container = $('#isotope-items'),
			$optionSet = $('#isotope-options'),
			$optionSets = $('#isotope-filters'),
			$optionLinks = $optionSets.find('a');
		$container.isotope({
			filter: '.isotope-filterall',
			layoutMode: 'fitRows'
		});
		$optionLinks.click(function () {
			var $this = $(this);
			// don't proceed if already selected 
			if ($this.hasClass('selected')) {
				return false;
			}
			$optionSet.find('.selected').removeClass('selected');
			$this.addClass('selected');

			var selector = $(this).attr('data-filter');
			$container.isotope({
				filter: selector
			});
			return false;
		});
		$(window).on("resize", function (event) {
			$container.isotope('reLayout');
		});

		// touchTouch
		$('.thumb-isotope .thumbnail a').touchTouch();

	}); //
</script>