# Attribution

This package has two owners, and each part keeps its own licence.

| Part | Owner | Licence |
|---|---|---|
| The SVG icons in `resources/assets/svg/files/` | Lucide Icons and Contributors; the icons derived from Feather, Cole Bemis | ISC, and MIT for the icons derived from Feather, text below |
| Everything else: the PHP, configuration, translations, tests and documentation | Simtabi LLC | MIT, see [`LICENSE`](LICENSE) |

Simtabi LLC packages and redistributes the icons. It did not draw them and claims no authorship of them.

## Lucide

- **Project**: [Lucide](https://lucide.dev/), source [github.com/lucide-icons/lucide](https://github.com/lucide-icons/lucide)
- **Vendored version**: 1.68.0, from the npm package `lucide-static` (`upstream.current_version` in `resources/assets/svg/config.json`)
- **Licence**: ISC (with MIT for the Feather-derived icons), checked at 1.68.0; the file is also at [`resources/assets/svg/licenses/lucide/LICENSE`](resources/assets/svg/licenses/lucide/LICENSE), and its SHA-256 is recorded in `config.json` under `license.sha256`

ISC and MIT both let you use, modify and redistribute the icons, on one condition: the copyright notices and permission notices below go with every copy. Lucide's file carries both, because about 150 of its icons are derived from Feather (MIT) and are listed in it. This file ships in the package so that condition holds wherever the package goes. If you copy the SVGs out of the package, copy this notice with them. Each upstream SVG opened with a one-line `@license` comment; core's sanitiser removes comments, so the files here carry none and the notice travels in this file instead.

The upstream licence, verbatim from `LICENSE` in `lucide-static@1.68.0` (tag `1.68.0`):

```text
ISC License

Copyright (c) 2026 Lucide Icons and Contributors

Permission to use, copy, modify, and/or distribute this software for any
purpose with or without fee is hereby granted, provided that the above
copyright notice and this permission notice appear in all copies.

THE SOFTWARE IS PROVIDED "AS IS" AND THE AUTHOR DISCLAIMS ALL WARRANTIES
WITH REGARD TO THIS SOFTWARE INCLUDING ALL IMPLIED WARRANTIES OF
MERCHANTABILITY AND FITNESS. IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR
ANY SPECIAL, DIRECT, INDIRECT, OR CONSEQUENTIAL DAMAGES OR ANY DAMAGES
WHATSOEVER RESULTING FROM LOSS OF USE, DATA OR PROFITS, WHETHER IN AN
ACTION OF CONTRACT, NEGLIGENCE OR OTHER TORTIOUS ACTION, ARISING OUT OF
OR IN CONNECTION WITH THE USE OR PERFORMANCE OF THIS SOFTWARE.

---

The following Lucide icons are derived from the Feather project:

airplay, alert-circle, alert-octagon, alert-triangle, aperture, arrow-down-circle, arrow-down-left, arrow-down-right, arrow-down, arrow-left-circle, arrow-left, arrow-right-circle, arrow-right, arrow-up-circle, arrow-up-left, arrow-up-right, arrow-up, at-sign, calendar, cast, check, chevron-down, chevron-left, chevron-right, chevron-up, chevrons-down, chevrons-left, chevrons-right, chevrons-up, circle, clipboard, clock, code, columns, command, compass, corner-down-left, corner-down-right, corner-left-down, corner-left-up, corner-right-down, corner-right-up, corner-up-left, corner-up-right, crosshair, database, divide-circle, divide-square, dollar-sign, download, external-link, feather, frown, hash, headphones, help-circle, info, italic, key, layout, life-buoy, link-2, link, loader, lock, log-in, log-out, maximize, meh, minimize, minimize-2, minus-circle, minus-square, minus, monitor, moon, more-horizontal, more-vertical, move, music, navigation-2, navigation, octagon, pause-circle, percent, plus-circle, plus-square, plus, power, radio, rss, search, server, share, shopping-bag, sidebar, smartphone, smile, square, table-2, tablet, target, terminal, trash-2, trash, triangle, tv, type, upload, x-circle, x-octagon, x-square, x, zoom-in, zoom-out

The MIT License (MIT) (for the icons listed above)

Copyright (c) 2013-present Cole Bemis

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
```

## Crediting

The licence asks only for the notice above to travel with the icons. A visible credit is not required, but is welcome:

> Icons from [Lucide](https://lucide.dev) (ISC), including icons from [Feather](https://feathericons.com) by Cole Bemis (MIT).
