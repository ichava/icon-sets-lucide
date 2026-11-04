# Customisation

*How-to guide.* Lucide icons stroke in `currentColor`, so most styling is ordinary CSS.

## Colour

```blade
<x-ichava::icon name="ichava/icon-sets-lucide::house" class="w-6 h-6 text-blue-600" />
<x-ichava::icon name="ichava/icon-sets-lucide::house" style="color: #2563eb" class="w-6 h-6" />
```

With the fluent helper:

```blade
{{ ichava('ichava/icon-sets-lucide::house')->color('#2563eb')->class('w-6 h-6') }}
```

## Stroke width

The files carry `stroke-width="2"`. Override it per icon:

```blade
<x-ichava::icon name="ichava/icon-sets-lucide::house" stroke-width="1.5" class="w-6 h-6" />
```

## Size

The SVGs are 24×24 with `viewBox="0 0 24 24"`; any width and height utility scales them.

```blade
<x-ichava::icon name="ichava/icon-sets-lucide::house" class="w-4 h-4" />
<x-ichava::icon name="ichava/icon-sets-lucide::house" class="w-12 h-12" />
```

## Setting a default class globally

In `config/ichava/core.php`:

```php
'components' => [
    'enabled'       => true,
    'default_class' => 'w-5 h-5 text-gray-700', // applied to every <x-ichava::icon>
],
```

Per-component `class="..."` overrides the global default.

## Accessibility

Add `aria-label` for an icon that carries meaning with no text beside it:

```blade
<x-ichava::icon name="ichava/icon-sets-lucide::house" aria-label="Home" class="w-5 h-5" />
```

A decorative icon beside a text label can omit it.

## See also

- [Variants](variants.md)
- [Blade components](https://github.com/ichava/core/blob/main/docs/tools/blade-components.md)
- [Global helper](https://github.com/ichava/core/blob/main/docs/tools/global-helper.md)

---

[← Docs index](../README.md#documentation)
