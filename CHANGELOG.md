# Changelog

All notable changes to `ichava/icon-sets-lucide` follow [Keep a Changelog](https://keepachangelog.com/en/1.0.0/) and [Semantic Versioning](https://semver.org/).

## [Unreleased]

## [0.1.0] - TBD

First release of `ichava/icon-sets-lucide`.

### Added

- **Lucide 1.68.0**, from the npm package `lucide-static`: 2,313 SVGs flat under `resources/assets/svg/files/`, addressed as `ichava/icon-sets-lucide::<name>`. Every file was run through icon-sets-sync's sanitiser and satisfies core's SVG policy unchanged; `tests/Unit/SanitisedSvgTest.php` and `tests/Unit/NoStrayTextNodesTest.php` fail otherwise.
- **The upstream licence is recorded and pinned.** `config.json` names it under `license` (`spdx` `ISC`, the file, its SHA-256, and the version and date it was checked), the text ships at `resources/assets/svg/licenses/lucide/LICENSE` and in `ATTRIBUTION.md`, and `tests/Unit/AttributionTest.php` fails if the copy no longer matches the recorded hash or was checked at a different version than the one vendored.
- **Both upstream notices ship**: Lucide's ISC licence and Feather's MIT licence, which the same upstream file carries for about 150 derived icons. Each SVG's `@license` comment is removed by the sanitiser, so the notice travels in `ATTRIBUTION.md` and in `resources/assets/svg/licenses/lucide/LICENSE`.
- **`package.kind` is `icon`**, with no category, item or rule kind; `tests/Feature/SvgKindTest.php` pins it against `config.json` and against core's resolver.
- **The sibling guards**: `SiblingConstraintsTest`, `NoPersonalContactTest`, `DocsShapeTest`, `ResourceShapeTest`, `ReleaseVersionTest`, `PhpstanLevelTest`, `WorkflowPermissionsTest` and `SyncWorkflowCallerTest`, as in `icon-sets-tabler`.
- **`sync-upstream.yml`** is a caller of icon-sets-sync's reusable `sync-pack.yml`, pinned to commit `5fa93a6`, with `contents: read` and `issues: write` only.
