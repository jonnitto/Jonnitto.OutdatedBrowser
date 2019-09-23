[![Latest Stable Version](https://poser.pugx.org/jonnitto/outdatedbrowser/v/stable)](https://packagist.org/packages/jonnitto/outdatedbrowser)
[![Total Downloads](https://poser.pugx.org/jonnitto/outdatedbrowser/downloads)](https://packagist.org/packages/jonnitto/outdatedbrowser)
[![License](https://poser.pugx.org/jonnitto/outdatedbrowser/license)](https://packagist.org/packages/jonnitto/outdatedbrowser)
[![GitHub forks](https://img.shields.io/github/forks/jonnitto/Jonnitto.OutdatedBrowser.svg?style=social&label=Fork)](https://github.com/jonnitto/Jonnitto.OutdatedBrowser/fork)
[![Support development](https://img.shields.io/badge/Donate-PayPal-yellow.svg)](https://www.paypal.me/Jonnitto/20eur)
[![My wishlist on amazon](https://img.shields.io/badge/Wishlist-Amazon-yellow.svg)](https://www.amazon.de/hz/wishlist/ls/2WPGORAVYF39B?&sort=default)  
[![GitHub stars](https://img.shields.io/github/stars/jonnitto/Jonnitto.OutdatedBrowser.svg?style=social&label=Stars)](https://github.com/jonnitto/Jonnitto.OutdatedBrowser/stargazers)
[![GitHub watchers](https://img.shields.io/github/watchers/jonnitto/Jonnitto.OutdatedBrowser.svg?style=social&label=Watch)](https://github.com/jonnitto/Jonnitto.OutdatedBrowser/subscription)
[![GitHub followers](https://img.shields.io/github/followers/jonnitto.svg?style=social&label=Follow)](https://github.com/jonnitto/followers)
[![Follow Jon on Twitter](https://img.shields.io/twitter/follow/jonnitto.svg?style=social&label=Follow)](https://twitter.com/jonnitto)

# Jonnitto.OutdatedBrowser

This package includes [Outdated Browser](http://outdatedbrowser.com/) into [Neos CMS](https://www.neos.io). You can configure in your [`Settings.yaml`](Configuration/Settings.yaml) when the warning should be shown.

| Version | Neos                |
| ------- | ------------------- |
| 1.\*    | 3.3.\*, 4.\* & 5.\* |

## Installation

Most of the time you have to make small adjustments to a package (e.g. configuration in [`Settings.yaml`](Configuration/Settings.yaml)). Because of that, it is important to add the corresponding package to the composer from your theme package. Mostly this is the site packages located under `Packages/Sites/`. To install it correctly go to your theme package (e.g.`Packages/Sites/Foo.Bar`) and run following command:

```bash
composer require jonnitto/outdatedbrowser --no-update
```

The `--no-update` command prevent the automatic update of the dependencies. After the package was added to your theme `composer.json`, go back to the root of the Neos installation and run `composer update`. Et voilà! Your desired package is now installed correctly.

## Configuration

Basicly you need to ajust the setting `Jonnitto.OutdatedBrowser.lowerThan`. The default value is `IE11`.
You can set the setting `Jonnitto.OutdatedBrowser.lowerThan` to different kind of values:

-   Browser based
    -   `A23` (Android 2.3)
    -   `IE8`
    -   `IE9`
    -   `IE10`
    -   `IE11`
    -   `Edge`
-   Feature based
    -   `Flexbox`
    -   `oldGrid` (The old css grid specification)
    -   `Grid`
-   Property based
    -   Any CSS property, e. g. `transform`

Example:

```yaml
Jonnitto:
  OutdatedBrowser:
    lowerThan: Grid
```

## Credits
This package is based on [Dotpulse.OutdatedBrowser](https://github.com/dotpulse/Dotpulse.OutdatedBrowser), who was also written by me. As dotpulse is not a company with active developers anymore and I have no access to the repository on packagist, I refactored the package and published it here.
