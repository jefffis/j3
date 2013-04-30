---
layout: thoughts_entry
title: Use Your Analytics, People
categories: [thought]
tagged: analytics
---

Developers everywhere fear older versions of IE, its's a fact, and it's a fact for good reason. Supporting IE 8, 7 and possibly even 6 **makes building the web unfun**. But, for some business verticals and clients, it's a necessity, as for some of them, their users still traverse the web with these older, archaic browsers. And, there is not much we can do about this, outside of a few hacky-type things.

Anywho, more importantly is taking what we know about our users before we do anything, and then figuring out the right way to do it. And by taking what we know, I mean using our analytics, if we have them, and applying that to what we want to be able to build for our clients, and their users.

##Look at specific browser usage & goals
It may turn out that IE 8 and below are not really relevant for the clients users, and thus you can **ignore them completely (☺)**. Or, it may turn out that most of their site users are on IE 7, and that this should be [partly] the main browser we build for. I say partly because I wouldn't want to solely build for IE 7, as that would just keep us in this awkward technology place we're in now, but we should take from this the limitations that browser presents, and use that to inform our design and technology decisions. Or, it may turn out that while a good amount of users are using IE 7, but the majority of users who convert some sort of goal are using a different browser. And that would also change what we need to focus on, and how we go about getting there.

Too often in client services I feel like we use a blanket to approach every project rather than using any kind of data that exists to respond back to the client with a better approach to their needs.

Recently I was asked for a quote for building out some wireframes and making the whole site responsive, including IE 8 and 7. I responded saying we certainly could do that, but was there a reason for this other than the client hearing about RWD and thinking it was important for all browsers to 'behave' the same way. I noted that while this could be done, it would add unnecessary JavaScript to force these older browsers to understand media queries, and might even cause them to crash if the designs we're intricate enough. But more to the point, I asked repeatedly why the client wanted this, and if we could look at their analytics to see if this request was even necessary. I never got much of an answer, and I suspect it's because too often in client services (as a business owner) getting more money out of a project is more important than challenging the client, and helping them do what is right for their needs. I was never opposed to doing this, they could have a large Windows Phone 7 base, and this might be necessary -- but my gut told me RWD for older IE was just a must have because of the buzzworthyness of it.

##Use what ya got
Long story short, by now, most businesses who have a website have some sort of analytics, and thus, we as designers/developers can help them decide what is most important and is fluff (usually more expensive as well). Plus, asking for this can also help us seem more competent and more interested in really giving them something that will be the most effective for their business and budgetary needs.

**Also, RWD'ing IE8 and below sucks balls**.

##Bonus
It can be hard for clients to understand that making a website the same in all browsers is not only finacially a bad idea, it's also just impossible. Feel free to share with them this simple website and view it in multiple browsers, and multiple OS' if possible: [Do websites need to look exactly the same in every browser?](http://dowebsitesneedtolookexactlythesameineverybrowser.com/).