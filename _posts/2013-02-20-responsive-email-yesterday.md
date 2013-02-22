---
layout: thoughts_entry
title: Responsive Email, Yesterday
categories: [thought]
tagged: email
---

**Everyone knows responsive web design (henceforth RWD).** Well, people in the web industry, and those working closely with web folk; they pretty much all know what that term implies. And they all probably have their own opinions about whether it's good or bad, or at least going in the right direction. But what about responsive email design?

##Yep, It's A Thing
I [participated in a panel/talk last week](browserspring.com/temp/pres/ux-2-2013) (use the right arrow key to toggle thru the slides I built) and this was one of the topics I ranted about. As expected, most of the audience either didn't know what I was referring to, hadn't thought about the concept being applied to email, or just didn't seem to care. **No biggie,** I'm used to it. As it happens, email design/development is one of my passions, so I'm pretty plugged into the happenings.

Anywho, I did my best to describe the process behind it (the _how_), and more importantly the _why_ behind it. RWD when applied to email can be even more impactful than when applied to the web. For starters, most email designs are not trying to do **too, too much**; i.e. they most often have 1 or 2 goals that they'd like a recipient to take. Whereas a website can have any number of goals and intended actions. Also, again for the most part, most email designers/developers know the limititations of the medium, and therefore most often start with less. When compared to the web, this is rarely the case (lots of JS, images, CSS, etc.). 

So, when trying to pair down an email from desktop to mobile, it's not **THAT** big of a change, or at least that what I'm trying to say, and also what I believe. So when email design/dev is done within reason, there isn't too much left to do to optimize it for mobile. **And by this, I don't mean that responsifying an email is easy, it certainly is not.** I just mean that the number of images and extra resources to pear down is typically less. Ideally, we'd all start mobile first and build up from there, but I understand the constraints of the real world.

##Why Do This?
Okay, so it's not easy, and most people/businesss won't start mobile first, so **why do we need to care?** Because email interaction done on mobile is skyrocketing. It's [actually on pace surpass desktop clients by the end of this year!](http://marketingland.com/mobile-email-opens-41-percent-33980) **Karaziness.** But, it's also super-exciting.

This is another great opportunity to fine tune your brand and delight your users. Getting an email from your company probably isn't the highlight of their day (sorry, but it's true), and if they have to *pinch and zoom and swipe and rotate** just to be able to read your email, more and more will just not do this. So, take this opportunity and make something that they won't mind interacting with. And, if you can start creating kickass content, then they'll look forward to it(but that's another topic all to itself).

##Got it, Now How Do I Do This?
Great question. Bad answer -- check out all the great resources online written by other smart people.

- [Campaign Monitor](http://www.campaignmonitor.com/guides/mobile/)
- [MailChimp](http://mailchimp.com/mobile-friendly-campaigns/)
- [Zurb Responsive Templates](http://www.zurb.com/playground/responsive-email-templates)

##A For Instance; But In A Bad Way
I got this email today (I get these often, and this is not meant to pick on these folks, they just happenned to be here), and thought to myself about this as a missed opportunity:
![A need for responsive email](http://jefff.co/images/email-sample-not-to-do.png 'A need for responsive email')
This is a simple, plain-jane email; and **I love that.** However, when a window is a certain width, content gets very hard to read _(40-60 chars or so per line)_ and the visual impact of the narrower format is lost. And, more importantly, to me at least, there is **nothing interesting about this email**. Since the line lenght is so long, my eye cant focus on much, and therefore I'd delete it.

A simple responsive media query (for those programs that support it) would have dealt with this easily. There are a lot of other things about this email I don't like (the large logo, no-preheader, no view in web, and **especially no call-to-action**), but I wanted to focus just on how a bit of RWD can go a long way in emailand.