---
layout: thoughts_entry
title: Pro-tip -- Hide Empty Elements
categories: [thought]
tagged: CSS
---

**Pro-tip here** a great, often unused CSS selector is `:empty`. So, any time there is an element that is rendered out on a page but has no nodes or text (including whitespaces), this will apply whatever properties we want on them. A few good use cases for this might be empty table cells (especially on mobile), or just any block level elements that have margin, padding, border, height or width applied to them.

##An example

<style scoped>
	p {
		
	}
</style>

This is a paragraph tag with text.

`<p>This is a paragraph tag with text.</p>`

<p></p>

`<p><!-- nothing here --></p>`