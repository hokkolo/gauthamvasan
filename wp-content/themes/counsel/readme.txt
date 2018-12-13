=== Counsel ===

Contributors: mudThemes
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

== Installation ==

1. To Install Counsel Theme, Put the "counsel" directory in your wp-content/themes directory.
2. Activate the Theme from WordPress Admin Panel.
3. The Theme installs with the basic layout in place although you can configure theme using options.

== Frequently Asked Questions ==

= Where can I find theme support? =

Go to https://wordpress.org/support/theme/counsel

-- Todo ==
* Recheck Primary Sidebar CSS
* No Sidebar Page Template

== Changelog ==

= 1.0.8 - 05/06/2018 =
* (Core) Added Primary Sidebar

= 1.0.7.13 - 28/05/2018 =
* (es_ES) Added Translations files

= 1.0.7.12 - 31/01/2018 =
* (Slideshow) Now upto 3 slides can be added

= 1.0.7.11 - 19/01/2018 =
* (nl_NL) Added Translation files

= 1.0.7.10 - 11/01/2017 =
* (fr_FR) Added French Translation for Customizer

= 1.0.7.9 - 23/03/2017 =
* (includes/customizer.php) Added more social options
* (functions.php) Modified function counsel_social_section_show()

= 1.0.7.8 - 08/02/2017 =
(i18n) Added translation strings
(i18n) Added translation strings for fr_FR and it_IT
(counsel.pot) Regenerated Translations

= 1.0.7.7 - 15/11/2016 =
* (font awesome) Upgraded to version 4.7.0

= 1.0.7.6 - 06/10/2016 =
* (it_IT) Added translation files
* (fr_FR) Added translation files

= 1.0.7.5 - 17/08/2016 =
* (style.css) Add/Removed theme tags
* (i18n) Removed HTML tags from i18n strings
* (counsel.pot) Regenerated

= 1.0.7.4 - 12/05/2016 =
* (favicon) Removed from theme options
* (font awesome) Updated to version 4.6.2

= 1.0.7.3 - 25/02/2016 =
* (core files) Removed whitespace and implemented code indention
* (loop.php) Removed read more button
* (functions.php) Removed function counsel_readmore_text()
* (functions.php) Modified style/script version in function counsel_enqueue()
* (functions.php) Removed class "empty-template" from counsel_body_class()

= 1.0.7.2 - 06/02/2016 =
* (assets/admin/images) Removed directory
* (assets/global/js/custom.js) Removed unwanted code
* (assets/global/js/custom.min.js) Regenerated
* (assets/global/js/respond.js) Added source file
* (assets/global/js/html5shiv.js) Added source and minified file
* (functions.php) Removed unwanted constants
* (functions.php) Enqueued HTML5 Shiv
* (functions.php) Enqueued respond.min.js and removed version
* (includes/customizer_extended.php) Removed commented code
* (includes/customizer.php) Removed commented code
* (readme.txt) Added resource for HTML5 Shiv

= 1.0.7.1 - 04/01/2016 =
* (font awesome icons) Upgraded to version 4.5.0

= 1.0.7 - 05/11/2015 =
* (functions.php) Enqueued Open-Sans instead of PT-Sans
* (functions.php | header.php) Removed wp_title filter hook
* (functions.php) Added theme support title-tag
* (includes/customizer.php) Added new skin cadet_blue
* (includes/customizer.php) Now boxed layout is default
* (includes/customizer.php) Now forest.jpg is default slide #1
* (assets/global/images) Added forest.jpg
* (screenshot.png) Modified - now forest
* (readme.txt) Modified licenses
* (style.css) Modified CSS

= 1.0.6.1 - 13/09/2015 =
* (style.css) - Added .screen-reader-text class

= 1.0.6 - 13/09/2015 =
* (customizer) - Added instead of options framework
* (functions.php) - Removed constants used in customizer_constants.php
* (favicon) - Now using WordPress 4.3 compatibility
* (counsel.pot) - Regenerated translation file
* (options framework) - Removed
* (options call) - Using counsel_get_options() instead of $counsel_options

= 1.0.5 - 27/06/2015 =
* (functions.php) - Added home link to default menu
* (functions.php) - Added editor style support
* (editor-style.css) - Added
* (street.jpg) - Modified size
* (footer.php) - Added copyright symbol
* (style.css) - Fixed styling bugs for Menu, Social Icons, Header & Footer
* (style.css) - Modified Theme description and Tags
* (screenshot.png) - New with multiple thumbnail images
* (readme.txt) - Modified format

= 1.0.4 - 05/06/2015 =
* (options.php) - Added layout option (Full-width)
* (options.php) - Added new skin (Feather Blue)
* (style.css) - Added layout/skin CSS
* (style.css) - Fixed some bugs
* (street.jpg) - Added new image
* (screenshot.png) - Modified
* (options) - Regenerated array

= 1.0.3 - 09/04/2015 =
* (Options) - Fixed bugs
* (counsel.pot) - Regenerated translation file

= Version 1.0.2 - 16/12/2014 =
* Modified front-page.php (Template call)
* Fixed CSS bug (Flexslider)
* Removed function counsel_pre_load()
* Removed function counsel_custom_css() | Custom CSS is now enqueued

= Version 1.0.1 01/12/2014 =
* Modified function counsel_social_section_show() (Removed grid-col-x class)
* Modified header.php (grid-col-x class)
* Removed sidebar-footer.php
* Modified searchform.php (Translation strings)
* Modified function counsel_enqueue() | Now using 'Roboto Condensed' & 'PT Sans'
* Replaced slideshow image 'Photographer'
* Added slideshow image 'Spring'
* Added slideshow image 'Flowers'
* Modified Options
* Modified mudthemes-panel.css
* Modified options-interface.php (carousel-upgrade)
* Modified custom.js/custom.min.js (Removed social section)
* Modified multiple CSS design properties
* Modified Layout (wide)
* Modified Slideshow text overlay (design)
* Regenerated $counsel_options
* Modified readme.txt | Image licenses
* Modified Screenshot (Violet)

= Version 1.0.0 - 25/12/2014 =
* Counsel Theme initial release

== Resources ==

* Slideshow image (https://pixabay.com/en/forest-mist-nature-trees-mystic-931706/): by http://pixabay.com/en/users/Unsplash-242387/, licensed under [CC0](http://creativecommons.org/publicdomain/zero/1.0/deed.en)
* Options Framework: by Devin Price (http://www.wptheming.com), licensed under [GPLv2] (http://www.gnu.org/licenses/gpl.html)
* Superfish jQuery menu: by Joel Birch (https://github.com/joeldbirch), dual licensed under[GPLv2](http://www.gnu.org/licenses/gpl.html) and [MIT](http://www.opensource.org/licenses/mit-license.php)
* FlexSlider: by WooThemes (http://www.woothemes.com), licensed under [GPLv2] (http://www.gnu.org/licenses/gpl.html)
* Color Picker: by Stefan Petre (http://www.eyecon.ro), dual licensed under [GPL](http://www.gnu.org/licenses/gpl.html) and [MIT](http://www.opensource.org/licenses/mit-license.php)
* Smooth Scroll: by Chris Ferdinandi (http://gomakethings.com), licensed under [MIT](http://www.opensource.org/licenses/mit-license.php)
* Respond.js: by Scott Jehl (https://github.com/scottjehl), licensed under [MIT](http://www.opensource.org/licenses/mit-license.php)
* Font Awesome: by Dave gandy (http://fontawesome.io), dual licensed under [SIL OFL 1.1](http://scripts.sil.org/OFL) and [MIT](http://www.opensource.org/licenses/mit-license.php)
* HTML5 Shiv: by Alexander Farkas (https://github.com/aFarkas), dual licensed under[GPLv2](http://www.gnu.org/licenses/gpl.html) and [MIT](http://www.opensource.org/licenses/mit-license.php)
* Screenshot Photo #1 (https://pixabay.com/en/leaves-autumn-fall-nature-seasonal-984544/): by https://pixabay.com/en/users/Unsplash-242387/, licensed under [CC0](http://creativecommons.org/publicdomain/zero/1.0/deed.en)
* Screenshot Photo #2 (https://pixabay.com/en/paint-brushes-painting-creativity-984434/): by https://pixabay.com/en/users/Unsplash-242387/, licensed under [CC0](http://creativecommons.org/publicdomain/zero/1.0/deed.en)
* Screenshot Photo #3 (https://pixabay.com/en/coffee-cookies-glasses-eyeglasses-983935/): by https://pixabay.com/en/users/Unsplash-242387/, licensed under [CC0](http://creativecommons.org/publicdomain/zero/1.0/deed.en)
* Slideshow Old Photo #1 (http://pixabay.com/en/spring-tree-flowers-meadow-wood-276014/): by http://pixabay.com/en/users/PublicDomainPictures-14/, licensed under [CC0](http://creativecommons.org/publicdomain/zero/1.0/deed.en)
* Slideshow Old Photo #2 (http://pixabay.com/en/flowers-butterfly-lilac-violet-402094/): by http://pixabay.com/en/users/sogard-263901/, licensed under [CC0](http://creativecommons.org/publicdomain/zero/1.0/deed.en)
* Slideshow Old Photo #3 (http://pixabay.com/en/street-road-city-urban-buildings-731451/): by http://pixabay.com/en/users/Unsplash-242387/, licensed under [CC0](http://creativecommons.org/publicdomain/zero/1.0/deed.en)