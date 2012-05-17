<div id="slide-container">
<div class="slides">

	
	<?php foreach ($slides as $slide):?>
	
	<div class="slide">
		<?php echo $slide['html']?>
	
		<div id="slide_number">
			<?php echo $slide['slide_number']?>
		</div>
	</div> <!-- End of Slide-->
	
	
	<?php endforeach;?>

</div>
<!--Slide Controls -->
<div class="slides-controls"><img class="slides-controls left_btn" src="<?php echo base_url()?>application/assets/images/left_nav.png?>" alt="" />
<img class="slides-controls right_btn" src="<?php echo base_url()?>application/assets/images/right_nav.png?>" alt="" /></div>
</div> <!-- End Slide-Container -->


		<script>

var canvas = document.createElement('canvas'); 
canvas.id = "particles";
document.body.appendChild(canvas);

$("canvas#particles").css('position', 'absolute');
$("canvas#particles").css('top', '0');
$("canvas#particles").css('z-index', '-1');

var width = canvas.width = $(window).width(), 
	height = canvas.height = $(window).height(),
	c = canvas.getContext('2d');
function randomRange(min, max) { 
	return  Math.random()*(max-min) + min; 
}
		</script>