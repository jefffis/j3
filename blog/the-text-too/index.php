<?php include("../../includes/header.php"); ?>
	<title  dir=ltr>The Text, Too by Jefff</title>
<?php include("../../includes/content.php"); ?>
		<article class="full">
			<h2 class="header">june 27, 2011 <span>email</span></h2>
			<h1>The Text, Too</h1>
			<p><img src="http://jhische.com/dailydropcap/F-11-cap.png" title="Daily Drop Cap by Jessica Hische" alt="F" id="drop-cap" /><del>F</del>or those of us who work on email marketing campaigns at any level, we know that not everyone can/wants to receive the full HTML version of a particular campaign. Some simply cannot receive this, and others simply prefer not to receive this. For these folks, we need to consider the text-only versions of our email campaigns.</p>
			<h2>So, How Do We Prepare?</h2>
			<p>A good amount of content has been <a href="http://www.email-marketing-reports.com/iland/2008/08/plain-text-emails-design-and-format.html" target="_blank">written on suggestions of what to do with text-only emails</a>&mdash;but I think there&rsquo;s been a lack of focus on creativity. A text-only email should not be done via an email programs ability to scrape content from the HTML version and re-jigger it to fit. While it&rsquo;s [probably] not necessary to spend as much time on the text-only version layout as the HTML one, it does warrant a few good moments. Basically, you cannot assume that what works for HTML, will work for text-only. Any content that is hyperlinked in HTML might look odd if you try to recreate this in text. Re-creating / re-writing some content is something I often do to help keep the message the same, but to not ruin the experience.</p>
			<h2>Short &amp; Sweet</h2>
			<p>I think stating that the KISS principles apply here is a no brainer. As the link above (and subsequent links from there) show, keeping line width short is important. Not only for readability, but also because of the wide breadth of devices, there&rsquo;s no real way to prevent something from breaking your lines, you can just hope to minimize this. Reduce link length as well&mdash;remove <code>http://</code> if the URL is going to any <code>www.</code> domain<sup>*</sup>, as most programs will still read this as a working hyperlink. Plus, if you remove this, ESPs won&rsquo;t muck up the URLs into long, obfuscated links.</p>
			<h2>Get Creative</h2>
			<p>The thing I think that&rsquo;s most important for text-only emails is a bit of creativity. Sure, you can&rsquo;t create that sleek, sexy button from the HTML version, but you can certainly create a visual separation for important information. Here&rsquo;s an example of how I like to create the main CTA in my text-only emails:</p>
			<pre>
********************************
*                              *
*    This Is Some CTA Here     *
*      >> www.someURL.com      *
*                              *
********************************</pre>
		</article>
		<article class="full">
			<p>Simple, almost like a marquis that you&rsquo;d see at a movie theater. Given that the content inside here would be hyperlinked and that there is enough white space above and below the box, this really jumps out from the rest of the email. I also always keep the <code>>></code> before any links to help keep a small visual cue for the recipients. I also like to create a <code>header</code> for these emails, in place of the logo and if there are any timestamps for this particular campaign.</p>
			<pre>
==============================================
Sample Business Name Here -- June 27th, 2011
==============================================</pre>
			<h2>All Just Hearsay</h2>
			<p>Again, these are just my thoughts on text-only emails. If done right, I think these can be effective extensions of any campaign. They shouldn&rsquo;t be a burden to create, and they definitely shouldn&rsquo;t just be an after thought either.</p>
			<p><em><sup>*</sup> Any links that have a subdomain set as anything besides <code>www.</code> will need to keep the <code>http://</code> prefixed to them. Just as email programs vary in their sophistication, so to do their understanding of hyperlinks, and what is one and what is not one. If you have a URL that&rsquo;s just too too long, perhaps try using a shortened version <sup>**</sup>.</em></p>
			<p><strong>Update:</strong> <sup>**</sup> If you are going to use a URL shortener, just <a href="http://www.aweber.com/blog/email-deliverability/link-shorteners.htm" target="_blank">do so with caution &amp; choose wisely</a>, as the service you use might get your emails into the junk folder due to SPAM issues.</p>
			<hr />
			<a href="../my-problem-with-groupon/" id="prev" class="more"><span aria-hidden="true" data-icon="A"></span> Previous</a>
			<a href="../transitions-for-the-soul/" id="next" class="more"><span aria-hidden="true" data-icon="A"></span> Next</a>
		</article>
<?php include("../../includes/footer.php"); ?>