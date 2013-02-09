<?php include("../../includes/header.php"); ?>
	<title  dir=ltr>Killer CSS Button by Jefff</title>
<?php include("../../includes/content.php"); ?>
		<style>
		/*** Button Test */
		#holder { position:relative; height:40px; margin:5em 0 3em; }
		#submit { display:block; position:absolute; bottom:.2em; left:0; margin:0 auto; padding:.35em .5em .65em; line-height:1; border-radius:3px; -webkit-border-radius:3px; -moz-border-radius:3px; border:1px solid #a09394; border-bottom:4px solid #a09394; color:white; text-shadow:0px -1px 0px rgba(0,0,0,0.3); text-align:center; width:14em; text-decoration:none; font-size:100%; font-weight:900; letter-spacing:-.02em; background:#dbc5c5; background:-webkit-gradient(linear, 0 0, 0 bottom, from(#dbc5c5), to(#b2a9aa)); background:-moz-linear-gradient(#dbc5c5, #b2a9aa); background:linear-gradient(#dbc5c5, #b2a9aa); behavior:url(http://jefff.co/styles/PIE.php); font-family:'Helvetica Neue', Arial, sans-serif; line-height:1; }
		#submit:hover { border-color:#806e70; border-bottom:4px solid #806e70; box-shadow:0px 2px 5px #dbc5c5; -webkit-box-shadow:0px 2px 5px #dbc5c5; -moz-box-shadow:0px 2px 5px #dbc5c5; }
		#submit:active { border-color:#806e70; border-bottom:1px solid #806e70; background:#B2A9AA; background:-webkit-gradient(linear, 0 0, 0 bottom, from(#B2A9AA), to(#DBC5C5)); background:-moz-linear-gradient(#B2A9AA, #DBC5C5); background:linear-gradient(#B2A9AA, #DBC5C5); }
		</style>
		<article class="full">
			<h2 class="header">may 14, 2011 <span>CSSSSS</span></h2>
			<h1>A Killer CSS Button</h1>
			<p><img src="http://jhische.com/dailydropcap/I-3-cap.png" title="Daily Drop Cap by Jessica Hische" alt="I" id="drop-cap" /><del>I</del> am working on a side project (<a href="http://cl.ly/6lKw" target="_blank">check out a screen of it here</a>) and I wanted some simple, slick buttons; but sans images. <strong>Enter CSS3.</strong></p>
			<div id="holder">
				<a href="#" id="submit">This is the button</a>
			</div>
			<!-- <p>In the wild, it&rsquo;s best to position this button as <code>absolute</code>, but here I&rsquo;ve just set it to <code>relative</code>, so the content below is still effected by the change in <code>border-bottom</code>.</p> -->
			</article>
			<article class="full">
			<h2>Here&rsquo;s the HTML:</h2>
			<pre>
&lt;div id="holder"&gt;
&lt;a href="#" id="submit"&gt;This is the button&lt;/a&gt;
&lt;/div&gt;</pre>
			<h2>Here&rsquo;s the CSS:</h2>
			<pre>a:link, a:visited { -webkit-transition:all .2s linear;
-o-transition:all .2s linear;
-moz-transition:all .2s linear; }
<span>/* set transitions for the latest browser users */</span>

#holder { position:relative;
height:40px; }
<span>/* position the parent element */</span>

#submit { display:block;
position:absolute;
bottom:0;
margin:0;
padding:.35em .5em .15em;
line-height:1;
border-radius:3px;
-webkit-border-radius:3px;
-moz-border-radius:3px;
border:1px solid #a09394;
border-bottom:4px solid #a09394;
color:white;
text-shadow:0px -1px 0px rgba(0,0,0,0.3);
text-align:center;
width:10em;
text-decoration:none;
font-size:110%;
background:#dbc5c5;
background:-webkit-gradient(linear, 0 0, 0 bottom,
from(#dbc5c5), to(#b2a9aa));
background:-moz-linear-gradient(#dbc5c5, #b2a9aa);
background:linear-gradient(#dbc5c5, #b2a9aa); }
<span>/* define the pre-activity button */</span>

#submit:hover { border-color:#806e70;
border-bottom:4px solid #806e70;
box-shadow:0px 2px 5px #dbc5c5;
-webkit-box-shadow:0px 2px 5px #dbc5c5;
-moz-box-shadow:0px 2px 5px #dbc5c5; }
<span>/* define the :hover state */</span>

#submit:active { border-color:#806e70;
border-bottom:1px solid #806e70;
background:#B2A9AA;
background:-webkit-gradient(linear, 0 0, 0 bottom,
from(#B2A9AA), to(#DBC5C5));
background:-moz-linear-gradient(#B2A9AA, #DBC5C5);
background:linear-gradient(#B2A9AA, #DBC5C5); }
<span>/* define the :active state */</span></pre>
			<p>Got a way to make it any better? <a href="mailto:iam@jefff.co">I&rsquo;d love to hear about it.</a> Or, <a href="http://jsfiddle.net/jefff/jqQ6f/">fiddle it</a>.</p>
			<hr />
			<a href="../too-many-o-the-same/" id="prev" class="more"><span aria-hidden="true" data-icon="A"></span> Previous</a>
			<a href="../css-mood-board/" id="next" class="more"><span aria-hidden="true" data-icon="A"></span> Next</a>
		</article>
<?php include("../../includes/footer.php"); ?>