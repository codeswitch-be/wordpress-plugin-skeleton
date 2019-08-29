# Wordpress Plugin Skeleton

This package provides a skeleton to start building Wordpress plugins

## Installation

1. Download this repository 
2. Add it to your Wordpress plugins folder
3. Makes sure to swap out any default namings to your vendor name and plugin name

## How to use
- Everything in the src directory is being autoloaded by composer
- Actions & filters can be registered in `Skeleton.php`like so:

```php
$this->loader->add_action('action_name', new MyClass, 'handle', 10, 2);
$this->loader->add_filter('filter_name', new MyOtherClass, 'handle', 10, 2);
```

This works just the same as the default Wordpress functions but with a nice wrapper to be object-oriented.

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email jorenvh@gmail.com instead of using the issue tracker.

## Credits

- [Joren Van Hocht](https://github.com/jorenvh)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
