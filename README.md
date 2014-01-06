# Gii Templates

Better templates for the Gii code generator.


## Installation

Please download using ONE of the following methods:


### Composer Installation

All requirements are automatically downloaded into the correct location when using composer.  There is no need to download additional files or set paths to third party files.

Get composer:

```
curl http://getcomposer.org/installer | php
```

Install latest release OR development version:

```
php composer.phar require cornernote/gii-templates:*				// latest release
php composer.phar require cornernote/gii-templates:dev-master	// development version
```


### Manual Installation

Download the [latest release](https://github.com/cornernote/gii-templates/releases/latest) or [development version](https://github.com/cornernote/gii-templates/archive/master.zip) and move the `audit` folder into your `protected/modules` folder.


## Configuration

Add the path to `gii-templates` to the `generatorPaths` in your gii configuration:

```php
return array(
	'modules' => array(
		'gii' => array(
			'class'=>'system.gii.GiiModule',
			'generatorPaths' => array(
				// use this if you installed with composer
				'/path/to/vendor/cornernote/gii-templates/gii',

				// OR, use this if you downloaded into your extensions folder
				//'ext.gii-templates.gii',
			),
		),
	),
);
```


## Support

- Does this README need improvement?  Go ahead and [suggest a change](https://github.com/cornernote/gii-templates/edit/master/README.md).
- Found a bug, or need help using this project?  Check the [open issues](https://github.com/cornernote/gii-templates/issues) or [create an issue](https://github.com/cornernote/gii-templates/issues/new).


## License

[BSD-3-Clause](https://raw.github.com/cornernote/gii-templates/master/LICENSE), Copyright © 2013-2014 [Mr PHP](mailto:info@mrphp.com.au)
