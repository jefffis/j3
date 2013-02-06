---
layout: thoughts_entry
title: Content-Aware CSS WTF
categories: [thought]
---

<h2 class="h" data-icon="⚒">November 5, 2012 <span>CSS</span></h2>

Media Queries are awesome. They really are. Being able to detect a users device width, height, and/or orientation and then being able to style the content they view accordingly is an invaluable tool in any web designers/developers toolkit. They are paramount to the responsive design movement, and makes porting content from device to device without having to create multiple templates somewhat of a synch. And better still, every day, new possibilities/options are being added to them to make them more powerful.

__* Note: this may be foolish and unnecessary, just something I’ve been noodling on.__

However, media queries are still lacking in that they are only really testing for what kind of environment the content is being displayed in: desktop, iPhone, feature phone, TV, etc. What they don’t know is anything about (and for that matter, CSS as a whole does not either) the content itself. Whether it’s really long, or if there are lots of nav items, or anything like that. And, to be fair, this isn’t a failing of CSS, it was never really intended to do this, as it’s only meant for styling rendered content, and not understanding content.

##Is there anything we can do for this?

HTML5, meta content, and microdata are all the rage now, and for good reason. There purpose is to help make web content more meaningful to search engines and web browsers. And by helping search engines and web browsers to understand the content more, then [theoretically] search engines and web browsers can provide more useful responses to user queries or interactions. So, what can we do for our good friend CSS?

Can we use server-side code to help add cues to our HTML that our CSS can pick up on? I can’t tell you how many times clients have designed something that is dependent on how much content or how many items are contained within a particular element. And, when I tell them that it’s usually not feasible to make these containers respond to the amount of content inside, it’s usually a bit of an effort to explain this to them. And it’s not their fault, if I were just casual web user, I would also not understand why something like this isn’t just built in. Is there a way around this? We can certainly write some JavaScript to help us out, but that would just be a bit heavy-handed in my opinion.

##Server-side Code to the rescue?

I’ve often run into an issue with navigation where when designing a site’s navigation, the content that’s actually used on the live site is pretty different. I try my best to design and build in the ability to allow for expandable content, but depending on what a client does with their site, at some point you might not be able to predict what they will do/add to it. And again, we can use JavaScript to detect if the navigation is over a certain width, but let’s leave that to the server-side code (or at least lets try to =)). So, can we add in some simple server-side code that counts the number of items in the nav and then adds in a class or an HTML5 data attribute that we can then take and style? I think so. This to me would be the ideal way to enable CSS to be aware of the content. Plus, it shouldn’t put too much extra load on the server to do this, as the query that runs to find all the content that belongs in the nav will already have a count of the items included.

##How many elements are we really concerned with here?

Good question. As with everything on the web, there’s no right answer. As I see it, for most projects or perhaps as a boilerplate, I’d say the following:

- the navigation & number of items (both header and footer),
- the number of articles on a page,
- the width of a headline (i.e. number of characters in the title perhaps?),
- the number of items in an element or ordered/unordered list (do we need to prep for if there are more than X number of them, or less than X number of them?)

The project and the design of the project may not call for this at all actually. The design may be so minimal/simple, that nothing can really interfere with it, regardless of what content is used. However, for me, and I’d wager for most web folk, their client work is more demanding than this (not to say that minimalistic/simple design is not hard, because it is hard), and thus I can see a need for content-aware CSS more often than not.

##How doable is this really?

That’s the kicker. Most designers and developers would say that this should just be taken into account when building the site, and I agree with that sentiment, but the real world always throws in some curveballs. Most times, we don’t have the time or the budget to plan for every case scenario, even if we are doing responsive design. However, I think we identify the X number of elements that might present us with issues at the outset, then we should be able to target a few hours to iterate from the “normal” view to the “aware” view. Of course, if we identify a more complex element that needs content-aware CSS, then that might require more time.

For example, I was working on a client site recently where this would have come in very handy. I was asked to create an list of items that were tied to site-wide topics that contained questions tagged with one of the topics. These questions were hidden until :hover, and then the content was shown. We used a bit of JavaScript to always center the content vertically, but at a certain point the content might grow too tall and overflow other items on the page (not a huge deal, but something the client did not love). Fortunately, the amount of questions shown here were limited, but content-aware CSS would have given me the ability to at a certain point change the container to a fixed height and add scrolling, instead of just always increasing the height of the container.

##So, thanks for the ramble, but …

I’m not quite sure what to make of this. I definitely want to give this a whirl next time I start a project that I think would call for it. Some things I’ll keep in mind though: how much extra time do I need to budget, how much extra server load might this add & whether this is worth it, and is this really necessary. These questions I don’t really have an answer for, so I’m excited about fidgeting with this.