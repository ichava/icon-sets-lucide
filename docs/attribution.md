# Attribution and licence

*Reference.*

## Upstream

[Lucide](https://lucide.dev/) is made by Lucide Icons and Contributors. Source: [github.com/lucide-icons/lucide](https://github.com/lucide-icons/lucide). This pack vendors 1.68.0, from the npm package `lucide-static`; the version is recorded in `resources/assets/svg/config.json` under `upstream.current_version` and nowhere else.

## Licence

The icons and this package are owned separately:

- **The icons** are under the **ISC licence**, © Lucide Icons and Contributors, with the **MIT licence**, © Cole Bemis, for the icons Lucide derives from [Feather](https://feathericons.com) (both in Lucide's [`LICENSE`](https://github.com/lucide-icons/lucide/blob/main/LICENSE)). Simtabi LLC redistributes them and claims no authorship of them.
- **This package's code** (provider, enum, component, configuration) is © Simtabi LLC, [MIT](../LICENSE).

ISC and MIT allow commercial and non-commercial use, modification and redistribution, provided the copyright notices and permission notices accompany every copy. That is a condition, not a courtesy. The upstream text is reproduced in [`ATTRIBUTION.md`](../ATTRIBUTION.md) at the package root, which ships in the dist archive (`docs/` does not), and at `resources/assets/svg/licenses/lucide/LICENSE`.

## Credit

A visible credit is not required by the licence, but is welcome on a "credits" or "about" page:

> Icons from [Lucide](https://lucide.dev) (ISC), including icons from [Feather](https://feathericons.com) by Cole Bemis (MIT).

## Updating from upstream

Asset refreshes run **maintainer-side** via
[`ichava/icon-sets-sync`](https://github.com/ichava/icon-sets-sync), which polls `lucide-static` on npm, refreshes the
SVGs when upstream moves, and opens a pull request. Before it writes anything it compares the upstream licence at
the new version with the hash in `config.json`, and stops if it changed.

End users **don't** refresh locally -- `vendor/` is regenerated on every
`composer install`, so any local change is discarded. Run
`php artisan ichava::ichava-core.check-updates --package=ichava/icon-sets-lucide`
to see whether a new upstream version is available.

---

[← Docs index](../README.md#documentation)
