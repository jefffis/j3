---
layout: thoughts_entry
title: Facebook Deep Integration
categories: [thought]
tagged: tutorial
---

This is something I built a while ago (late-2011 or early 2012), but never got around to sharing. **Everyone knows how I feel about page speed**, so why not remove the need to all to Facebook to bring over your page's content onto your website? I know right, no reason not to.

What I'm referring to with this functionality is being able to pull a pages posts, as well as any open graph data associated with that; the big ones are **likes and comments**, as well as user data associated with each of these. You can get a pages posts via RSS, but the likes and comments require a deeper integration using the Facebook API and authenticating your calls with an access_token.

Ultimately, what we will getting is this: **https://graph.facebook.com/facebook_page_ID/posts?access_token=unique_authenticated_token**. And, with this, we can then pass in limit parameter to specify the number of posts to get, and then this will be a valid JSON feed that we can then call whenever we want to, and render whatever content we want to.

##Let's get started

1. First thing, if you don't have a Facebook page that you want to pull content from, create this. However, we'll assume that you already have this, or a client of yours has this, so I won't go into this here.
2. [Create a developer account (aka just login)](https://developers.facebook.com/) that you will use for your dev/app work needed for this.
3. Create and publish your app. Follow the simple steps here, all you need to do is have one of the selections for how your app will integrate with Facebook for permissions sake. However, feel free to use any/all settings you need/want. All we really want here are the **App ID** and the **App Secret key** to do what we need to do.
4. Visit the [Graph API Explorer tool page](https://developers.facebook.com/tools/explorer/) and select your app from the list of **Applications** in the top right. Then click **Get Access Token**, click **Extended Permissions**, and finally enable **offline_access**.
5. Store this **access_token** somewhere safe, and that is not accessible by any front-end means. This is what you need to access the API and get your posts.
6. Lastly, [visit the above URL](https://graph.facebook.com//posts?access_token=) & add in your unique parameters to access your pages data anywhere you want.

##Groovy, now what?