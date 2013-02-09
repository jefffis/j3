<?php include("includes/header.php"); ?>
	<title  dir=ltr>Jefff | Web Designer and Front-end Tinkerer. Music Snob. Husband. Nerd.</title>
	<meta name="description" content="The web sandbox of Jefff Doan; my work, my musings on web design, email design, and other web-related thingamajigs." />
<?php include("includes/contenth.php"); ?>
	<div class="main cf home fade-in" role="main" id="main">
		<h1 role="whoami">
			<strong>web designer / front-end tinkerer</strong>
			<em>This is my portfolio and thoughtbook. Scroll down to see featured work and thoughts, or <a href="/work/">view all work</a> or <a href="/thoughts/">read some thoughts</a>.</em>
		</h1>
		<h2 class="featured">Featured Work</h2>
		<figure>
			<a href="dailytidbit/">
				<img src="/images/large/dailytidbit.jpg" />
				<figcaption>Dailytidb.it
					<ul>
						<li>design</li>
						<li>front-end</li>
						<li>email template build</li>
						<li>hand-picked curation</li>
						<li class="a">View details</li>
					</ul>
				</figcaption>
			</a>
		</figure>
		<h2 class="featured">Featured Work</h2>
		<figure>
			<a href="google-web-intents/">
				<img src="/images/large/quicksnapr.jpg" />
				<figcaption>Google Web Intents (x4)
					<ul>
						<li>wireframing</li>
						<li>design</li>
						<li>CSS3 / jQuery</li>
						<li class="a">View details</li>
					</ul>
				</figcaption>
			</a>
		</figure>
		<!--<h2 class="featured">Featured Work</h2>
		<figure>
			<a href="adoptably/">
				<img src="/images/large/adoptably.jpg" />
				<figcaption>Adoptab.ly
					<ul>
						<li>wireframing</li>
						<li>design</li>
						<li>front-end</li>
						<li>API integration</li>
						<li class="a">View details</li>
					</ul>
				</figcaption>
			</a>
		</figure>-->
		<article class="snippet">
			<a href="/test/tiny-svg-upscaled-data-uri/">
				<h2>a test/thought</h2>
				<h1>Tiny SVG as Data URI then upscaled out the wazoo.</h1>
				<p>Save logos and icons as SVGs, but first make them as teeny, tiny as possible. This was created at 4800x zoom. Then convert these bad boys to Data URIs and upscale as needed. <strong>Read More &raquo;</strong></p>
			</a>
		</article>
		<article class="snippet">
			<a href="/blog/content-aware-css/">
				<h2>a thought</h2>
				<h1>Content-Aware CSS: WTF?</h1>
				<p>Media Queries are awesome. They really are. Being able to detect a users device width, height, and/or orientation and then being able to style the content they view accordingly is an invaluable tool in any web designers/developers toolkit. They are paramount to the responsive design movement, and makes porting content from device to device without having to create multiple templates somewhat of a synch. And better still, every day, new possibilities/options are being added to them to make them more powerful. <strong>Read More &raquo;</strong></p>
			</a>
		</article>
		<article class="snippet">
			<a href="/blog/google-web-fonts-and-email/">
				<h2>a[n old] thought</h2>
				<h1>Do Google Web Fonts Work [Well] In HTML Email?</h1>
				<p>I&#8217;d seen a few tests on (especially on Campaign Monitor) about CSS (mainly interested in CSS3) and support across email programs. Due to the lack of standards, there isn&#8217;t great support outside of the Apple realm. However, I wanted to test to see how well we could use some of the new Google Web Fonts (as using Typekit is not really an option yet). <strong>Read More &raquo;</strong></p>
			</a>
		</article>
		<article class="snippet">
			<a href="/test/conditional-resources/">
				<h2>a test/thought</h2>
				<h1>Conditional Resource Loading</h1>
				<p>Something I&rsquo;ve been noodling on for a while now; mobile template or RWD. I was staunchly for mobile templates (for non-personal sites), but I&rsquo;ve begun thinking about how to combine them. In my experience, it&rsquo;s mainly been the homepage that really makes for a slower experience with RWD on a mobile device. There&rsquo;s lots of extra content and resources that are not really needed on mobile that are hidden, but still downloaded. <strong>Read More &raquo;</strong></p>
			</a>
		</article>
		<article class="snippet">
			<a href="/blog/css-generated-content/">
				<h2>a thought</h2>
				<h1>CSS Generated Content: What Is It &amp; What&rsquo;s Possible?</h1>
				<p>So what do I mean when I say CSS generated content? Well, it&rsquo;s somewhat complicated, so lemme try to break it down. CSS generated content is a technique that allows content (HTML and/or images) to be inserted into the DOM without actually being included in the HTML. Say what? A bit odd, but basically if you view the source of a page using this, you won&rsquo;t find the corresponding code in the HTML. It&rsquo;s being added in via CSS, and therefore is usually considered just for presentational purposes. <strong>Read More &raquo;</strong></p>
			</a>
		</article>
		<a href="/work/" id="work" class="view-more">&laquo; More Work</a>
		<a href="/thoughts/" id="thoughts" class="view-more">More Thoughts &raquo;</a>
<?php include("includes/footerh.php"); ?>