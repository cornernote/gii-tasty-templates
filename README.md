# Gii Tasty Templates

Tasty templates for the Gii code generator.


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
php composer.phar require cornernote/gii-tasty-templates:*				// latest release
php composer.phar require cornernote/gii-tasty-templates:dev-master	// development version
```


### Manual Installation

Download the [latest release](https://github.com/cornernote/gii-tasty-templates/releases/latest) or [development version](https://github.com/cornernote/gii-tasty-templates/archive/master.zip) and move the `audit` folder into your `protected/modules` folder.


## Configuration

Add the path to `gii-tasty-templates` to the `generatorPaths` in your gii configuration:

```php
return array(
	'modules' => array(
		'gii' => array(
			'class'=>'system.gii.GiiModule',
			'generatorPaths' => array(
				// use this if you installed with composer
				'/path/to/vendor/cornernote/gii-tasty-templates/tasty',

				// OR, use this if you downloaded into your extensions folder
				//'ext.gii-tasty-templates.tasty',
			),
		),
	),
);
```


## Support

- Does this README need improvement?  Go ahead and [suggest a change](https://github.com/cornernote/gii-tasty-templates/edit/master/README.md).
- Found a bug, or need help using this project?  Check the [open issues](https://github.com/cornernote/gii-tasty-templates/issues) or [create an issue](https://github.com/cornernote/gii-tasty-templates/issues/new).


## License

[BSD-3-Clause](https://raw.github.com/cornernote/gii-tasty-templates/master/LICENSE), Copyright © 2013-2014 [Mr PHP](mailto:info@mrphp.com.au)
