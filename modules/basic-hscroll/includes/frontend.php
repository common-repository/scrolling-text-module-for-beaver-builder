<div class="tt-marquee-module">
	<div class="tt-marquee-container">
	    <div class="marquee">
	        <?php echo $settings->hscroll_text_field; ?>
	    </div>
	</div>
</div>
<script type="text/javascript" src="<?php echo TT_MODULE_SCROLL_URL; ?>/assets/js/marquee.js"></script>
<script type="text/javascript">
jQuery(document).ready(function( $ ) {
	$('.tt-marquee-module').SimpleMarquee({
		duration:<?php echo $settings->hscroll_duration; ?>,
		padding:20,
		marquee_class:'.marquee',
		container_class: '.tt-marquee-container',
		hover:<?php echo $settings->hscroll_hover; ?>
	});
});
</script>
<style>
div.tt-marquee-container {
	width: 100%;
	<?php if( $settings->hscroll_bg_color_field != 'transparent' ) { ?>
	background-color: #<?php echo $settings->hscroll_bg_color_field; ?>;
	<?php } ?>
	color: #<?php echo $settings->hscroll_text_color_field; ?>;
	float: left;
	display: inline-block;
	overflow: hidden;
	box-sizing: border-box;
	height: 45px;
	position: relative;
	cursor: pointer;
}
div.tt-marquee-container > div.marquee {
	display: inline-block;
	white-space:nowrap;
	position:absolute;
}
.marquee, *[class^="marquee"] {
  display: inline-block;
  white-space: nowrap;
  position: absolute;
}
.marquee { 
	margin-left: 25%;
}
</style>