<p align="center"><img src="https://banners.beyondco.de/meta%20tags.png?theme=light&packageManager=composer+require&packageName=atm-code-meta-tags&pattern=temple&style=style_1&description=meta+tags+for+laravel&md=0&showWatermark=1&fontSize=100px&images=https%3A%2F%2Flaravel.com%2Fimg%2Flogomark.min.svg" width="600"></p>

<p align="center">
<a href="https://packagist.org/packages/atm-code/meta-tags"><img src="https://img.shields.io/packagist/v/atm-code/meta-tags" /></a>
<a href="https://app.travis-ci.com/atm-code/meta-tags"><img src="https://app.travis-ci.com/atm-code/meta-tags.svg?branch=main" /></a>
<a href="https://github.styleci.io/repos/413043529?branch=main"><img src="https://github.styleci.io/repos/413043529/shield?branch=main" /></a>
<a href="https://packagist.org/packages/atm-code/meta-tags"><img src="https://img.shields.io/packagist/dt/atm-code/meta-tags" /></a>
<a href="https://github.com/atm-code/meta-tags"><img src="https://img.shields.io/github/stars/atm-code/meta-tags" /></a>
</p>

# Laravel Meta Tags

simple way to generate laravel HTML Meta Tags.

## Installation

You can install the package via composer:

```bash
composer require atm-code/meta-tags
```

## Usage

### set Meta tags

```php
\MetaTag
    ::title('site title')
    ->desc('site desc')
    ->type()->url(url('/'))
    ->image(asset('images/logo.png'))
    ->color('#F5F5F4')
```

this will generate the following HTML:

```html
<title>site title</title>
<meta name="title" content="site title">
<meta property="og:title" content="site title">
<meta property="twitter:title" content="site title">
<meta name="description" content="site desc"><meta property="og:description" content="site desc">
<meta property="twitter:description" content="site desc">
<meta name="og:type" content="website">
<meta name="og:url" content="http://site.test">
<meta name="og:image" content="http://site.test/images/logo.png">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:image" content="http://site.test/images/logo.png">
<meta name="theme-color" content="#F5F5F4">
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
