</div>
	<footer class="fade-in">
		<div class="cf">
			<section>
				<p><strong>Jeff Doan</strong> is a web designer/front-end tinkerer living and working in good ol&rsquo; Arlington, VA.</p>
				<h4>&copy; 20-something&mdash;2012&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;<!--<a href="">Colophon</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;-->Reading Now: <a href="http://www.amazon.com/The-Twelve-Book-Passage-Trilogy/dp/0345504984" target="_blank">The Twelve</a>, just finished <a href="http://www.amazon.com/The-Prague-Cemetery-Umberto-Eco/dp/0547577532" target="_blank">The Prague Cemetery</a>.</h4>
			</section>
			<ul>
				<li><a href="mailto:iam@jefff.co"><span aria-hidden="true" data-icon="E"></span> Email Me</a></li>
				<li><a href="http://twitter.com/jefffis" target="_blank"><span aria-hidden="true" data-icon="T"></span> On Twitter</a></li>
				<li><a href="http://www.quora.com/Jeff-Doan" target="_blank"><span aria-hidden="true" data-icon="Q"></span> On Quora</a></li>
				<li><a href="http://zerply.com/jefffis" target="_blank"><span aria-hidden="true" data-icon="R"></span> On Zerply</a></li>
				<!--<li><a href=""></a></li>-->
			</ul>
		</div>
	</footer>
<!-- scripts -->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="/javascripts/app.js"></script>
<script>
// fade in all stuffs
function fadein() {
	setTimeout(function(){
		$('header').fadeIn(200);
		$('#main').fadeIn(1000);
		$('footer').fadeIn(1500);
	}, 10);
}
</script>
</body>
</html>