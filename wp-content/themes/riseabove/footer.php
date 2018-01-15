		<footer>
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-offset-1 col-sm-10">
						<div class="copyright">
							Copyright <?php echo date('Y'); ?> - All Rights Reserved. Designed &amp; Created by Peter Kingson Chan
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- /body-wrapper 
	</div>-->
	<?php wp_footer(); ?>
	<!-- analytics -->
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-35213265-1', 'auto');
			ga('send', 'pageview');
		</script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
		<?php if ( is_front_page() ) : ?>
			<script>
			jQuery(function(){if(Modernizr.mq("only screen and (min-width: 1200px)")){var e=document.getElementById("reveal-1"),o=scrollMonitor.create(e,-400),r=new RevealFx(e,{revealSettings:{bgcolor:"#FBC02D",direction:"bt",onCover:function(e,o){e.style.opacity=1}}}),t=new RevealFx(document.querySelector("#reveal-2"),{revealSettings:{bgcolor:"#FBC02D",direction:"bt",delay:250,onCover:function(e,o){e.style.opacity=1}}}),n=new RevealFx(document.querySelector("#reveal-3"),{revealSettings:{bgcolor:"#FBC02D",direction:"bt",delay:500,onCover:function(e,o){e.style.opacity=1}}}),l=new RevealFx(document.querySelector("#reveal-4"),{revealSettings:{bgcolor:"#FBC02D",direction:"bt",delay:750,onCover:function(e,o){e.style.opacity=1}}});o.enterViewport(function(){r.reveal(),t.reveal(),n.reveal(),l.reveal(),o.destroy()})}});
			</script>
		<?php endif; ?>
	</body>
</html>