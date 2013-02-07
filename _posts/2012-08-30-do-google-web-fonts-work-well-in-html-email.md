---
layout: thoughts_entry
title: Do Web Fonts Work In Email?
categories: [thought]
---

I’d seen a few tests on (especially on [Campaign Monitor](http://www.campaignmonitor.com/css/)) about CSS (mainly interested in CSS3) and support across email programs. Due to the lack of standards, there isn’t great support outside of the Apple realm. However, I wanted to test to see how well we could use some of the new [Google Web Fonts](http://www.google.com/webfonts) (as using Typekit is not really an option yet).

**Update:** [CampaignMonitor has a good, and more recent round-up of this as well here](http://www.campaignmonitor.com/blog/post/3897/using-web-fonts-in-email).

__Note: this is a re-post of an old article I wrote here.__

Using our [trusty tester Litmusapp](https://litmus.com/), I created a super simple email and dropped some [‘Droid Serif‘](http://code.google.com/webfonts/specimen/Droid+Serif) action in there. After a few minutes, here’s what I saw:
![Litmus screenshot](http://thinkdesign.net/wp-content/uploads/2010/09/google-fonts-litmus-test-small.png)

Not too surprising, only 5 clients supported this feature. However, what was more surprising was which clients supported them:

Apple Mail (3 & 4):
![Apple Mail](http://thinkdesign.net/wp-content/uploads/2010/09/apple-3-small.png)

Entourage 2008:
![Entourage 2008](http://thinkdesign.net/wp-content/uploads/2010/09/entourage-small.png)

Thunderbird 3:
![Thunderbird 3](http://thinkdesign.net/wp-content/uploads/2010/09/entourage-small.png)

Postbox:
![Postbox](http://thinkdesign.net/wp-content/uploads/2010/09/postbox-small.png)

Lotus Notes 8 (but not 8.5):
![Lotus Notes 8](http://thinkdesign.net/wp-content/uploads/2010/09/lotus-notes-small.png)


I found it very interesting, surprising, and a tad disheartening that the iPhone, iPad, and Mobile.me all failed this test, while their desktop cousins passed. Why does Lotus Notes 8 work, and not 8.5? And how does Gmail not pass this test when it’s using Google code? Oh well, for now, we’re still not where we (or maybe just me) want to be, but as you can see progress is as progress does.

As usual, the takeaway is declare similar, web-safe fall back fonts for each web font and test, test, test. I’d suggest using Litmus, but even just creating a few free accounts can help save you some embarrassment (in terms of design looking clunky or completely wrong) and possible SPAM complaints.