<?php include("../../includes/header.php"); ?>
	<title  dir=ltr>Google Web Fonts + Email by Jefff</title>
<?php include("../../includes/content.php"); ?>
		<article class="full">	
			<h2 class="header">august 30, 2012 <span>css</span></h2>
			<h1>Do Google Web Fonts Work [Well] In HTML Email?</h1>
			<p>I&#8217;d seen a few tests on (especially on <a href="http://www.campaignmonitor.com/css/" target="_blank">Campaign Monitor</a>) about CSS (mainly interested in CSS3) and support across email programs. Due to the lack of standards, there isn&#8217;t great support outside of the Apple realm. However, I wanted to test to see how well we could use some of the new <a href="http://code.google.com/webfonts" target="_blank">Google Web Fonts</a> (as using Typekit is not really an option yet).</p>
			<p><strong>Update:</strong> <a href="http://www.campaignmonitor.com/blog/post/3897/using-web-fonts-in-email">CampaignMonitor has a good, and more recent</a> round-up of this as well here.</p>
			<small><strong><em>Note: this is a re-post of an old article I wrote <a href="http://thinkdesign.net/email/do-google-web-fonts-well-work-in-html-email/" target="_blank">here</a>.</em></strong></small>
<p>Using our trusty tester <a href="http://litmusapp.com" target="_blank">Litmusapp</a>, I created a super simple email and dropped some &#8216;<a href="http://code.google.com/webfonts/family?family=Droid+Serif" target="_blank">Droid Serif</a>&#8216; action in there. After a few minutes, here&#8217;s what I saw:</p>
<p><span id="more-624"></span></p>
<p><a rel="gallery" href="http://thinkdesign.net/wp-content/uploads/2010/09/google-fonts-litmus-test.png"><img class="alignnone size-full wp-image-625" style="padding-bottom: 15px;" title="We tested Google Web Fonts in Litmus, here's the happenings" src="http://thinkdesign.net/wp-content/uploads/2010/09/google-fonts-litmus-test-small.png" alt="google-fonts-litmus-test" width="530" height="271" /></a></p>
<p>Not too surprising, only 5 clients supported this feature. However, what was more surprising was which clients supported them:</p>
<div style="float: left;">
<h3>Apple Mail (3 &amp; 4):</h3>
<p><a rel="gallery" href="http://thinkdesign.net/wp-content/uploads/2010/09/apple-3.png"><img class="alignnone size-full wp-image-635" title="Apple Mail 3 &amp; 4" src="http://thinkdesign.net/wp-content/uploads/2010/09/apple-3-small.png" alt="apple-mail-works" width="250" height="150" /></a></p>
</div>
<div style="float: right;">
<h3>Entourage 2008:</h3>
<p><a rel="gallery" href="http://thinkdesign.net/wp-content/uploads/2010/09/entourage.png"><img class="alignnone size-full wp-image-635" title="Apple Mail 3 &amp; 4" src="http://thinkdesign.net/wp-content/uploads/2010/09/entourage-small.png" alt="entourage-2008-works" width="250" height="150" /></a></p>
</div>
<div style="celar: both; float: left;">
<h3>Thunderbird 3:</h3>
<p><a rel="gallery" href="http://thinkdesign.net/wp-content/uploads/2010/09/thunderbird.png"><img class="alignnone size-full wp-image-635" title="Apple Mail 3 &amp; 4" src="http://thinkdesign.net/wp-content/uploads/2010/09/thunderbird-small.png" alt="thunderbird-3-works" width="250" height="150" /></a></p>
</div>
<div style="float: right;">
<h3>Postbox:</h3>
<p><a rel="gallery" href="http://thinkdesign.net/wp-content/uploads/2010/09/postbox.png"><img class="alignnone size-full wp-image-635" title="Apple Mail 3 &amp; 4" src="http://thinkdesign.net/wp-content/uploads/2010/09/postbox-small.png" alt="postbox-works" width="250" height="150" /></a></p>
</div>
<div style="celar: both; float: left;">
<h3>Lotus Notes 8 <em>(but not 8.5)</em>:</h3>
<p><a rel="gallery" href="http://thinkdesign.net/wp-content/uploads/2010/09/lotus-notes.png"><img class="alignnone size-full wp-image-635" title="Apple Mail 3 &amp; 4" src="http://thinkdesign.net/wp-content/uploads/2010/09/lotus-notes-small.png" alt="lotus-notes-8-works" width="250" height="150" /></a></p>
</div>
<p class="clear">I found it very interesting, surprising, and a tad disheartening that the iPhone, iPad, and Mobile.me all failed this test, while their desktop cousins passed. Why does Lotus Notes 8 work, and not 8.5? And how does Gmail not pass this test when it&#8217;s using Google code? Oh well, for now, we&#8217;re still not where we (or maybe just me) want to be, but as you can see progress is as progress does.</p>
<p>As usual, the takeaway is declare similar, web-safe fall back fonts for each web font and test, test, test. I&#8217;d suggest using Litmus, but even just creating a few free accounts can help save you some embarrassment (in terms of design looking clunky or completely wrong) and possible SPAM complaints.</p>
			<hr />
			<a href="../css-generated-content/" id="prev" class="more"><span aria-hidden="true" data-icon="A"></span> Previous</a>
			<a href="../content-aware-css/" id="next" class="more"><span aria-hidden="true" data-icon="A"></span> Next</a>
		</article>		
<?php include("../../includes/footer.php"); ?>