# mTik_Ops-Localizations

Welcome — this repository holds community translations for mTik_Ops. This document explains how translators and contributors can add or edit language files, the required filename conventions (including ISO codes), and the recommended workflow for contributing changes.

## Goals
- Make mTik_Ops available in as many languages and dialects as possible.
- Keep translations consistent, discoverable, and easy to review.

## Quick Start
1. Fork the repository and create a branch named `i18n/<language-code>` (for example `i18n/pt-BR`).
2. Add or edit the translation file in this `mTik_Ops-Localizations` folder.
3. Submit a pull request with a short description and the translator's contact or GitHub handle.

## Filename conventions (required)
To make language detection and maintenance consistent we follow ISO codes. Use a clear filename pattern using either the 2-letter ISO 639-1 code or the 3-letter ISO 639-2/3 code. Prefer the 2-letter code when available.

- Primary: use the ISO 639-1 two-letter code in lowercase, e.g. `en.json`, `es.json`, `fr.json`.
- If that language does not have a 2-letter code, use the ISO 639-2/3 three-letter code, e.g. `ace.json` or `mya.json`.
- For regional/dialect variants include the country code (ISO 3166-1 alpha-2) after a hyphen: `pt-BR.json`, `en-GB.json`.
	- Preferred format: `<language>` or `<language>-<REGION>` (example: `pt` or `pt-BR`).
	- Alternative underscore variant (less preferred): `pt_BR.json` — hyphen is recommended.

Examples
- English: `en.json` (2-letter) — 3-letter alternative `eng.json`.
- Spanish (Spain): `es-ES.json` or `es.json`.
- Portuguese (Brazil): `pt-BR.json` (2-letter + region) — 3-letter alternative would be `por-BR.json`.

Notes on codes
- ISO 639-1 (2-letter) is the preferred identifier where available because most systems and browsers expect these.
- ISO 639-2/3 (3-letter) may be used if the language has no 2-letter code. You can look up codes at these resources:
	- https://iso639-3.sil.org/
	- https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes

## File format and encoding (recommended)
- Preferred file format: PHP array files (`.php`) that return an associative array of keys to translated strings (UTF-8, without BOM). Use this format when adding or editing translations in this repository. Example: `en.php` or `pt-BR.php`.
- JSON files are still acceptable if you prefer them or for tooling, but `.php` is the canonical format used by mTik_Ops.

PHP example (preferred)
```
<?php
return [
		'app.title' => 'mTik_Ops',
		'nav.home' => 'Home',
		'login.username' => 'Username',
		'login.password' => 'Password',
];
```

JSON example (optional)
```
{
	"app.title": "mTik_Ops",
	"nav.home": "Home",
	"login.username": "Username",
	"login.password": "Password"
}
```

Guidelines
- Use UTF-8 encoding and do not add a byte-order mark (BOM).
- Keep the same keys as the canonical (source) file; only change the values.
- Preserve placeholders (for example `%s`, `{count}`, or `{{name}}`) exactly as in the source.
- Where plural forms or gender exist, follow the source project's pluralization rules; provide all required forms.
- When using PHP files, return a flat associative array; avoid executable code or side effects in translation files.

## How to add or update a language
1. Locate an existing language file to use as a template (for example `en.json`). If none exists, create a new JSON file named with the correct ISO code (e.g., `xx.json` or `xxx.json`).
2. Copy the full set of keys from the template/source file and translate each value carefully.
3. Run a quick check: load the file in an editor that validates JSON (if using JSON) and ensure there are no syntax errors.
4. Commit your changes on a branch and open a pull request. In the PR description include:
	 - Language name in English and native script (for example: `Português (Brasil)`).
	 - ISO codes used (2-letter and/or 3-letter).
	 - Whether this is a full translation or partial, and any notes about missing keys or plural rules.

## Translator checklist (before opening PR)
- Filename follows the ISO rules (2-letter preferred): `xx.json` or `xx-YY.json`.
- File encoding is UTF-8.
- All placeholders and interpolation tokens match the source.
- Check for correct directionality: if the language is RTL (Arabic, Hebrew, etc.), mention `direction: rtl` in your PR.
- Provide your name/GitHub handle and contact info in the PR so reviewers can follow up.

## Review and merge process
- Maintainters will review translations for completeness and obvious errors.
- Small fixes or typos may be merged directly; larger changes may get review comments.

## Credits and attribution
When you submit a translation, add your name or handle in the PR description; maintainers may add translator credits in the app or project documentation.

## Questions or help
If you need help choosing the right ISO code or with plural/formatting rules, open an issue describing the language and the specific questions. Include examples and, if possible, links to authoritative ISO code pages.

Thank you for helping make mTik_Ops accessible to more users — contributions matter!

