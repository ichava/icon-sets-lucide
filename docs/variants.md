# Variants

*Reference.* How this pack's icons are laid out and addressed.

`ichava/icon-sets-lucide` ships **2,313 icons in one style**, flat under `resources/assets/svg/files/`. There is no
variant directory, so an icon's path is its name: `ichava/icon-sets-lucide::<name>`.

Every icon is drawn on a 24×24 grid as a 2px stroke with round caps and joins, `fill="none"` and `stroke="currentColor"`. Lucide has no filled or alternative weights, which is why the pack has one style. Of the 2,313 files, 2,020 are distinct icons (the entries in upstream's `tags.json`) and 293 are aliases: older names `lucide-static` still ships as files with the same drawing, such as `home` beside `house`. They are kept so code written against either name works.

## Examples

```blade
<x-ichava::icon name="ichava/icon-sets-lucide::house" class="w-6 h-6" />
<x-ichava::icon name="ichava/icon-sets-lucide::heart" class="w-6 h-6" />
```

## Variant enum (PHP)

The `Variant` enum has one case, so code written against the ecosystem's variant contract works here too:

```php
use Simtabi\Laranail\Ichava\IconSetsLucide\Enums\Variant;

Variant::DEFAULT->value;       // 'default'
Variant::default();            // Variant::DEFAULT
Variant::DEFAULT->getPath();   // .../resources/assets/svg/files
```

`getPath()` returns the `files/` root itself: the scaffolder's version named a `files/default/` directory, which a
flat pack does not have. The enum implements `IconSetVariantInterface` from core.

## See also

- [Customisation](customization.md)
- [Icon path format](https://github.com/ichava/core/blob/main/docs/tools/icon-path-format.md)

---

[← Docs index](../README.md#documentation)
