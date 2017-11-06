# pwp-korigan-payne
Personal Website Project

## Milestone 1 Feedback
Beautiful work here - you've done a nice job outlining a purpose/audience/goal and Persona for your project. There's enough detail here to begin a design strategy.

A general approach to a professional portfolio when you're starting out is a great idea - and it fits perfectly within PWP scope. Heads up though - if you do feel that you're leaning more towards seeking out freelance work, your content choices should be focused on appealing to potential clients. There's quite a bit of difference between marketing your skills for clients vs. other developers or tech hiring leads.

Your persona is a photographer, so I'm wondering if this a niche market you'd like to work with. Photogs tend to have _very_ specific wants and needs when it comes to their web presence (depending on the kind of photography they do), and they tend to be quite tech savvy as well. Design and good front end is critically important to technical creatives as well, so an attractive UI would be a big part of attracting these kinds of clients. I definitely think you can create a PWP that bridges the gap between appealing to potential employers and potential clients: Think of ways that you can illustrate your tech skills that is both informative (for potential employers) while being visually engaging and "friendly" enough for potential clients.

Nice CSS too!

Your project has been set up correctly and your code looks great. Your Milestone 1 passes at [Tier IV](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). You're clear to begin on [Milestone 2a](https://bootcamp-coders.cnm.edu/projects/personal/milestone-two/).

## Milestone 2&alpha; Feedback
Your content strategy is good, but I have some concerns regarding the accuracy of the wireframes. I also want to caution you that parallax should only be enabled on desktop/laptop widths as it is likely to cause issues on mobile. This is generally pretty easy to do with some simple jQuery.

If Axure is proving difficult to use, I would opt for [Mockflow](https://mockflow.com/) instead. You may find better results with this tool, and it provides appropriately scaled templates for desktop and mobile devices. This can be a big help. The scale of these wireframes isn't accurate:

- The general proportions (aspect ratios) between mobile and desktop aren't right. Mobile is tall and narrow, desktop is wide. At this level only a general approximation is needed, but these are pretty far off. That's where Mockflow's mobile and browser templates can be a big help.
- The size and scale of the text and UI components is much too small.
- Having text span the width of a desktop or laptop screen is generally considered too long of a line length for comfortable reading. You'll lose engagement fast.
- Icons are looking jumbled down at the bottom on the mobile wireframe.
- Where do you plan to feature the contact form? This wasn't addressed in the content strategy.

Think of the wireframes as a "road map" for your front end development. The more accurate and complete they are the better your development phase will go. I recommend that you take another shot at these before you begin development.

If you anticipate a longer scroll on your page, I might consider a navigation solution to help users easily navigate your site.

Parallax scroll is generally JavaScript driven, and there are many libraries out there of widely variable quality. One you might want to consider using is the [Rellax.js](https://dixonandmoe.com/rellax/) library. It's regularly maintained and of good quality.

Your Milestone 2a passes at [Tier II](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). Circle back with me about your wireframes if you're having any issues. If you're going to recreate a set, I'll be happy to bump your grade to Tier III if you have a new set complete by Monday 10/6/17.

### Edits &amp; Suggestions
- Isolate the CSS for this Milestone documentation from the CSS file you'll use for your project.  

### 2a Feedback Update
These new wireframes are much more clear - which should provide you with a better guide for your development. You're allocating quite a bit of "negative space" in your layout design - I'm really looking forward to seeing how this will appear. A couple of things to be aware of:
- For a long scrolling page - it may help the user to have some kind of navigation option. You don't have to use bootstrap's. There are some cool options out there like this: https://codyhouse.co/gem/vertical-fixed-navigation/
- Mobile browsers have varying support of CSS `background-attachment: fixed;`. This could affect your design plans on iOS and Chrome for Android. See Notes 2, 4 here: https://caniuse.com/#search=background-attachment

Your score has been bumped to [Tier III](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). You're clear to begin development on your PWP!
