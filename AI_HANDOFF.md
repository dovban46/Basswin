# BassWin recreation handoff

- Goal: recreate visual layout of `https://07basswin.com/en` inside this WordPress child theme.
- Current stage: header implementation started.
- Source files used:
  - `example/header.html` (header DOM from DevTools).
  - `example/app.css` (style reference for spacing/colors/layout).
  - `example/Bass Win Casino/imgi_1_logo.svg` (logo).

## What is already done

- Replaced `header.php` with BassWin header markup (desktop + mobile blocks).
- Added persistent asset copy:
  - `assets/images/logo.svg`
- Appended header style section to `style.css` based on source CSS.

## Important notes

- The source `app.css` in `example` does not contain explicit icon-class mappings (`.icon-menu`, `.icon-casino`, etc.), so temporary CSS glyph fallbacks were added.
- When continuing in a new chat, verify exact icon source (font/sprite/css) and replace temporary glyphs with real icons for a perfect 1:1 match.
- Keep using assets copied out of `example`, because `example` can be deleted later.
