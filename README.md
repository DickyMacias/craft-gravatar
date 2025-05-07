# Gravatar plugin for Craft CMS 4.x and 5.x

Adds gravatar support. 

## Requirements

This plugin requires:
- Craft CMS 4.0.0 or later
- PHP 8.0.2 or later

## Compatibility

This plugin is a fork of the original [Gravatar plugin by Marcus Reinhardt](https://github.com/noxify/craft-gravatar) and is specifically designed for Craft CMS 4.x and 5.x.

### Version Compatibility
- For Craft CMS 3.x: Please use the [original plugin by Marcus Reinhardt](https://github.com/noxify/craft-gravatar)
- For Craft CMS 4.x and 5.x: Use this plugin

### Why This Fork?
This fork was created to:
- Provide compatibility with Craft CMS 4.x and 5.x
- Add support for PHP 8.0.2 and later
- Implement strict typing and modern PHP features
- Update the plugin structure to follow current Craft CMS best practices

## Installation

To install the plugin, follow these instructions.

1. Open your terminal and go to your Craft project:

        cd /path/to/project

2. Then tell Composer to load the plugin:

        composer require dickymacias/gravatar

3. In the Control Panel, go to Settings → Plugins and click the "Install" button for Gravatar.

## Configuring Gravatar

The plugins allows you to configure the following settings directly from your CP:

* Gravatar URL ( `default: //gravatar.com/avatar/` )
* Size ( `default: 80` )
* Rating ( `default: mp` )
* Default Avatar ( `default: mp` )

Detailed instructions about allowed values are defined here: https://en.gravatar.com/site/implement/images/

Inside the plugin settings (and also in the `config.php`) you have also the detailed instructions and options.


## Using Gravatar

### Get the Gravatar URL with default settings

```twig
{{ craft.gravatar.url('hello@example.com') }}
```

### Get the Gravatar URL with custom settings

```twig
{{ craft.gravatar.url('hello@example.com', {'s': 120, 'd': 'identicon', 'r': 'x'}) }}
```

### Get the Gravatar IMG with default settings

```twig
{{ craft.gravatar.img('hello@example.com') }}
```

### Get the Gravatar IMG with custom settings

```twig
{{ craft.gravatar.img('hello@example.com', {'s': 120, 'd': 'identicon', 'r': 'x'}) }}
```

### Get the Gravatar IMG with custom settings and attributes

```twig
{{ craft.gravatar.img('hello@example.com', {'s': 120}, {'class': 'useravatar'}) }}
```

## Gravatar Roadmap

This plugin is a fork of the original [Gravatar plugin by Marcus Reinhardt](https://github.com/noxify/craft-gravatar).

### Authors
- Original plugin: [Marcus Reinhardt](https://github.com/noxify)
- Current maintainer: [Dicky Macias](https://github.com/DickyMacias)
