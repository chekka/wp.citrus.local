# Change Log

All notable changes to this project will be documented in this file.
See [Conventional Commits](https://conventionalcommits.org) for commit guidelines.

# 0.6.0 (2022-04-20)


### chore

* implement UI for new content blocker visual settings (CU-eb4h2q9)
* update embera (CU-eb4h2q)


### feat

* allow content blocker with preview images in List of consents (CU-eb4h2q)


### fix

* allow to download alternative thumbnails if the first one is not available (CU-eb4h2q)
* compatibility with Thrive Architect when using nested vimeo embeds (CU-eb4h2q)
* download thumbnail in standard format and force 16/9 ratio for YouTube videos (CU-eb4h2q)
* hero content blocker with style attribute not correctly blocked (CU-1zvgm2h)
* improved compatibility with Podigee (CU-eb4h2q)
* improved compatibility with WP YouTube Lyte (CU-eb4h2q)
* relate blockable instance to thumbnail (CU-eb4h2q)
* when content blocker got called multiple times respect found URL in ImagePreview (CU-eb4h2q)


### refactor

* extract composer dev dependencies to their corresponding dev package (CU-22h231w)
* move wordpress packages to isomorphic-packages (CU-22h231w)
* put composer license packages to @devowl-wp/composer-licenses (CU-22h231w)
* revert empty commits for package folder rename (CU-22h231w)





## 0.5.2 (2022-03-15)


### chore

* use wildcarded composer repository path (CU-1zvg32c)





## 0.5.1 (2022-03-01)


### fix

* allow to apply code dynamics to code on page load (CU-1wernq1)
* allow to block all elements via SelectorSyntax even if already blocked (CU-1yyxmwn)
* better memory allocation for scanner and persisting found markups to database (CU-1ydq6ff)
* block CSS styles in style-attributes of HTML elements (CU-1ydpqa1)
* correctly show Blocked URL in scanner results for inline styles (CU-1ydq6ff)
* do not find canoncial links as external URL (CU-1z4gxq1)
* do not scan link rel=shortlink as it does not process any data (CU-1yt2qzj)
* find external URLs again (CU-1ydq6ff)
* google analytics was shown as external URL when using single gtag/js UA integration (CU-1yt64aa)





# 0.5.0 (2022-01-31)


### chore

* clean up and refactor coding for image preview / thumbnails (WIP, CU-1w3c9t7)


### feat

* host scan options could have multiple must-groups to resolve (CU-1vqx293)
* new plugin to extract image preview / thumbnails from embed URLs (CU-1w3c9t7)


### fix

* found Google Trends in scanner when using Google reCAPTCHA standalone (CU-1zgh14v)
* scanner query validation should also work for encoded strings (CU-1vqx293)


### refactor

* remove defined in each file header to make it testable





## 0.4.1 (2022-01-25)

**Note:** This package (@devowl-wp/headless-content-blocker) has been updated because a dependency, which is also shipped with this package, has changed.





# 0.4.0 (2022-01-17)


### build

* create cachebuster files only when needed, not in dev env (CU-1z46xp8)
* improve build and CI performance by 50% by using @devowl-wp/regexp-translation-extractor (CU-1z46xp8)


### feat

* allow multiple attributes in SelectorSyntaxFinder (CU-1wecmxt)


### fix

* compatibility with a3 Lazy Load (CU-22gym0m)
* empty external URL shown when plugin Disable WordPress Emojis is active (CU-1y7rr78)
* in some cases googletagmanager.com was stated as external URL (CU-1zfmt8z)
* sometimes CSS stylings got fonud as external URL (e.g. opacity:0, CU-1y7nren)


### refactor

* move scanner to @devowl-wp/headless-content-blocker package (CU-1xw52wt)


### test

* compatibility with Xdebug 3 (CU-1z46xp8)





# 0.3.0 (2021-12-15)


### feat

* new plugin ScriptInlineExtractExternalUrl (CU-1v6cf91)


### fix

* avoid consent-inline to be empty when blocked multiple times (CU-1xaz9aw)
* support URLs without scheme for ScriptInlineExtractExternalUrl plugin (CU-1v6cf91)


### perf

* speed up scanner up to 300 % (CU-1xpd4z4)





## 0.2.2 (2021-11-24)


### fix

* inline scripts with more than 8,000 characters (depending on env) are not blocked (CU-1u3zb5b)





## 0.2.1 (2021-11-12)


### fix

* **critical :** server error when inline style found as blockable, but no URL got blocked inside rules (CU-1rvx2h3)





# 0.2.0 (2021-11-11)


### chore

* remove not-finished translations from feature branches to avoid huge ZIP size (CU-1rgn5h3)


### feat

* allow to calculate unique keys for (blocked) tags
* introduce DoNotBlockScriptTextTemplates plugin (CU-1qe7t0t)
* introduce new afterSetup callback


### fix

* consider line breaks in content blocker attributes (CU-1nfe6kd)
* correctly block inline style when using selector syntax (CU-1nfazd0)


### refactor

* extract content blocker to own package @devowl-wp/headless-content-blocker (CU-1nfazd0)
