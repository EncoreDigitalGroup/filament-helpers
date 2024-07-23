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