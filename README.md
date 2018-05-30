# Gravatar plugin for Craft CMS 3.x

Adds gravatar support. 

## Requirements

This plugin requires Craft CMS 3.0.0-beta.23 or later.

## Installation

To install the plugin, follow these instructions.

1. Open your terminal and go to your Craft project:

        cd /path/to/project

2. Then tell Composer to load the plugin:

        composer require noxify/gravatar

3. In the Control Panel, go to Settings → Plugins and click the “Install” button for Gravatar.

## Configuring Gravatar

The plugins allows you to configure the following settings directly from your CP:

* Gravatar URL ( `default: //gravatar.com/avatar/` )
* Size ( `default: 80` )
* Rating ( `default: mp` )
* Default Avatar ( `default: mp` )

Detailed instructions what are the allowed values are defined here: https://de.gravatar.com/site/implement/images/

Inside the plugin settings (and also in the `config.php`) you have also the detailed instructions and options.


## Using Gravatar

### Get the Gravatar URL with default settings

```
{{ craft.gravatar.url( 'hello@example.com' ) }}
```

### Get the Gravatar URL with custom settings

```
{{ craft.gravatar.url( 'hello@example.com', {'s' : 120, 'd': 'identicon', 'r' : 'x'} ) }}
```

### Get the Gravatar IMG with default settings

```
{{ craft.gravatar.img( 'hello@example.com' ) }}
```

### Get the Gravatar IMG with custom settings

```
{{ craft.gravatar.img( 'hello@example.com', {'s' : 120, 'd': 'identicon', 'r' : 'x'} ) }}
```

### Get the Gravatar IMG with custom settings and attributes

```
{{ craft.gravatar.img( 'hello@example.com', {'s': 120}, {'class' : 'useravatar'} ) }}
```



## Gravatar Roadmap

Brought to you by [Marcus Reinhardt](https://github.com/noxify)
