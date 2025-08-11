# EncoreDigitalGroup/Filament-Helpers

The Encore Digital Group Filament Helpers package is a collection of pre-built Filament components that we find ourselves frequently using.
Rather than constantly rebuilding the same component across multiple resources and projects, we centralized these common configurations into a single shared package.
Each helper class method returns a pre-configured Filament component that can be used in your resource classes. Because the helper classes return a Filament component,
you can chain additional method calls to further configure the component as needed.

### Installation

To install the Filament Helpers package, you can use Composer:

```bash
composer require encoredigitalgroup/filament-helpers
```

### Preparing for Filament v4

Preliminary Filament v4 support has been added to this package on the main branch. You can opt-in to using v4 by setting the package version to `^4.0.0-rc1`.
Usage of release candidates in production code is discouraged.

### Upgrading to v4

- Return types have been updated to use the new `Filament\Schemas` namespace.
- Class parameters named `$fieldName` have been renamed to `$field` for consistency with the rest of the package. If you are not using named parameters
  in your code, then there is nothing for you to do.

### Upgrading to v3

The `EncoreDigitalGroup\Filament\Helpers\Forms\GroupSection` class had the following modifications:

- The `make()` method now only has one parameter: `$schema`. No changes are required for use of this parameter.
    - The `$render` parameter has been removed. Use of `make($schema)` automatically renders the component.
    - The `$fluent` parameter has been removed. Use `GroupSection::fluent($schema)` instead.
    - The `$innerColumns` parameter has been removed. Use `GroupSection::fluent($schema)->innerColumns($int)` instead.
    - The `$outerColumns` parameter has been removed. Use `GroupSection::fluent($schema)->outerColumns($int) `instead.
    - The `$innerColumnSpan` parameter has been removed. Use `GroupSection::fluent($schema)->innerColumnSpan($int)` instead.
    - The `$outerColumnSpan` parameter has been removed. Use `GroupSection::fluent($schema)->outerColumnSpan($int)` instead.

- The `fluent()` method has been added:
    - As the name suggests, this method does not automatically render the component. You can make your adjustments using the
      provided methods. Once you are finished making adjustments, you can call `render()` to render the component.

### Upgrading to v2

The only change between v1 and v2 is a slight namespace change. v1 used `EncoreDigitalGroup\FilamentHelpers`. v2 now uses `EncoreDigitalGroup\Filament\Helpers`. This
change was made to make this package consistent with other packages Encore Digital Group has. A simple find and replace will work for this upgrade as there are no other
changes, breaking or otherwise, in this release.

### Usage

```php
DateTimePicker::make('start_date');
HourSelector::make('start_time', 'Start Time');
NumericScale::make('rating', 'Rating');
PercentScale::make('discount', 'Discount');
TextInput::make('first_name', 'First Name')
```

#### DateTimePicker

This helper takes two arguments:

- field: the model attribute to bind the field to.
- required: is the field required? (default: true)

#### HourSelector

This helper takes two arguments:

- field: the model attribute to bind the field to.
- label: the field label. (default: null)

#### NumericScale

This helper takes two arguments:

- field: the model attribute to bind the field to.
- label: the field label. (default: null)

#### PercentScale

This helper takes two arguments:

- field: the model attribute to bind the field to.
- label: the field label. (default: null)

#### TextInput

This helper takes two arguments:

- field: the model attribute to bind the field to.
- label: the field label. (default: null)