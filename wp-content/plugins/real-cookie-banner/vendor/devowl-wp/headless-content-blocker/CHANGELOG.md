# Change Log

All notable changes to this project will be documented in this file.
See [Conventional Commits](https://conventionalcommits.org) for commit guidelines.

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
