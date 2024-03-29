[![Latest stable version]][packagist] [![Total downloads]][packagist] [![License]][packagist] [![GitHub forks]][fork] [![Donate Paypal]][paypal] [![Wishlist amazon]][amazon] [![GitHub stars]][stargazers] [![GitHub watchers]][subscription] [![GitHub followers]][followers] [![Follow Jon on Twitter]][twitter]

# Jonnitto.OutdatedBrowser

This package includes a notification for outdated browsers into [Neos CMS]. You can configure in your [`Settings.yaml`] when the warning should be shown.

| Version | Neos          | Maintained |
| ------- | ------------- | :--------: |
| 1.\*    | 3.3.\* - 5.\* |     ✗      |
| 2.\*    | 4.\* - 5.\*   |     ✗      |
| 3.\*    | 4.3.\* - 5.\* |     ✗      |
| 4.\*    | 4.3.\* - 7.\* |     ✗      |
| 4.3.\*  | 5.3.\* - 8.\* |     ✗      |
| 5.\*    | 5.3.\* - 8.\* |     ✓      |

## Installation

Most of the time you have to make small adjustments to a package (e.g. configuration in [`Settings.yaml`]). Because of that, it is important to add the corresponding package to the composer from your theme package. Mostly this is the site packages located under `Packages/Sites/`. To install it correctly go to your theme package (e.g.`Packages/Sites/Foo.Bar`) and run following command:

```bash
composer require jonnitto/outdatedbrowser --no-update
```

The `--no-update` command prevent the automatic update of the dependencies. After the package was added to your theme `composer.json`, go back to the root of the Neos installation and run `composer update`. Et voilà! Your desired package is now installed correctly.

## Configuration

Basicly you need to ajust the setting `Jonnitto.OutdatedBrowser.lowerThan`. The default value is `AccentColor`.
You can set the setting `Jonnitto.OutdatedBrowser.lowerThan` to different kind of values:

- Browser based
  - `A23` (Android 2.3)
  - `IE8`
  - `IE9`
  - `IE10`
  - `IE11`
  - `Edge`
- Feature based
  - `Flexbox`
  - `oldGrid` (The old css grid specification)
  - `Grid`
  - `AccentColor`
  - `AspectRatio`
- Property based
  - Any CSS property, e. g. `transform`

Example:

```yaml
Jonnitto:
  OutdatedBrowser:
    lowerThan: AspectRatio
```

If you want to check for multiple features, you can write `lowerThan` also an array, for example:

```yaml
Jonnitto:
  OutdatedBrowser:
    lowerThan:
        - Edge
        - grid-auto-flow
```

To change the link to the website who helps the user to download a new browser, you can do it by alter the setting `Jonnitto.OutdatedBrowser.href`. `{locale}` gets replaced with the detected locale. The default value is `https://browsehappy.com/?locale={locale}`

```yaml
Jonnitto:
  OutdatedBrowser:
   href: "https://browser-update.org/{locale}/"
```

Per default, the package checks if the visitor is a crawler or not. If it is a crawler, the warning doesn't get rendered at all. You can disable this behavior like this:

```yaml
Jonnitto:
  OutdatedBrowser:
    disableForCrawler: false
```

To add a CSS class the the element you can do it by adding following setting:

```yaml
Jonnitto:
  OutdatedBrowser:
    class: 'your-custom-css-class`
```

## Credits

This package is based on [Dotpulse.OutdatedBrowser], who was also written by me. As dotpulse is not a company with active developers anymore and I have no access to the repository on packagist, I refactored the package and published it here.

[packagist]: https://packagist.org/packages/jonnitto/outdatedbrowser
[latest stable version]: https://poser.pugx.org/jonnitto/outdatedbrowser/v/stable
[total downloads]: https://poser.pugx.org/jonnitto/outdatedbrowser/downloads
[license]: https://poser.pugx.org/jonnitto/outdatedbrowser/license
[github forks]: https://img.shields.io/github/forks/jonnitto/Jonnitto.OutdatedBrowser.svg?style=social&label=Fork
[donate paypal]: https://img.shields.io/badge/Donate-PayPal-yellow.svg
[wishlist amazon]: https://img.shields.io/badge/Wishlist-Amazon-yellow.svg
[amazon]: https://www.amazon.de/hz/wishlist/ls/2WPGORAVYF39B?&sort=default
[paypal]: https://www.paypal.me/Jonnitto/20eur
[github stars]: https://img.shields.io/github/stars/jonnitto/Jonnitto.OutdatedBrowser.svg?style=social&label=Stars
[github watchers]: https://img.shields.io/github/watchers/jonnitto/Jonnitto.OutdatedBrowser.svg?style=social&label=Watch
[github followers]: https://img.shields.io/github/followers/jonnitto.svg?style=social&label=Follow
[follow jon on twitter]: https://img.shields.io/twitter/follow/jonnitto.svg?style=social&label=Follow
[twitter]: https://twitter.com/jonnitto
[fork]: https://github.com/jonnitto/Jonnitto.OutdatedBrowser/fork
[stargazers]: https://github.com/jonnitto/Jonnitto.OutdatedBrowser/stargazers
[subscription]: https://github.com/jonnitto/Jonnitto.OutdatedBrowser/subscription
[followers]: https://github.com/jonnitto/followers
[neos cms]: https://www.neos.io
[`settings.yaml`]: Configuration/Settings.yaml
[dotpulse.outdatedbrowser]: https://github.com/dotpulse/Dotpulse.OutdatedBrowser
