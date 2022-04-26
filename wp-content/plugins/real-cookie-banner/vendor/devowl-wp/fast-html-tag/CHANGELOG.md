# Change Log

All notable changes to this project will be documented in this file.
See [Conventional Commits](https://conventionalcommits.org) for commit guidelines.

## 0.3.6 (2022-04-20)


### refactor

* extract composer dev dependencies to their corresponding dev package (CU-22h231w)
* move wordpress packages to isomorphic-packages (CU-22h231w)
* put composer license packages to @devowl-wp/composer-licenses (CU-22h231w)





## 0.3.5 (2022-04-04)


### fix

* always consider Cloudflare Rocket loader scripts as non-cdata (CU-21956yr)





## 0.3.4 (2022-03-15)


### chore

* use wildcarded composer repository path (CU-1zvg32c)





## 0.3.3 (2022-03-01)


### fix

* allow to find tag attributes by all tags (CU-1ydpqa1)





## 0.3.2 (2022-02-02)


### fix

* bypass JIT error and try with temporarily deactivated JIT (CU-232auh3)





## 0.3.1 (2022-01-25)


### fix

* allow underscores to calculate inline script variable assignments (CU-23284bc)





# 0.3.0 (2022-01-17)


### build

* create cachebuster files only when needed, not in dev env (CU-1z46xp8)
* improve build and CI performance by 50% by using @devowl-wp/regexp-translation-extractor (CU-1z46xp8)


### feat

* allow multiple attributes in SelectorSyntaxFinder (CU-1wecmxt)


### fix

* compatibility with some HTML minifiers creating malformed HTML (CU-22h3kvw)


### test

* compatibility with Xdebug 3 (CU-1z46xp8)





## 0.2.3 (2021-12-21)


### fix

* do not find escaped scripts in scripts (CU-1y1zpp9)


### test

* add integration tests (CU-1y1zq8b)





## 0.2.2 (2021-11-24)


### fix

* large HTML documents lead to PCRE_BACKTRACK_LIMIT_ERROR errors (CU-1u3zb5b)





## 0.2.1 (2021-11-12)


### fix

* do not check escaped value for selector syntax (CU-1rvy8cv)





# 0.2.0 (2021-11-11)


### chore

* remove not-finished translations from feature branches to avoid huge ZIP size (CU-1rgn5h3)


### feat

* allow to calculate unique keys for (blocked) tags


### refactor

* extract content blocker to own package @devowl-wp/headless-content-blocker (CU-1nfazd0)
* extract HTML-extractor to own package @devowl-wp/fast-html-tag
