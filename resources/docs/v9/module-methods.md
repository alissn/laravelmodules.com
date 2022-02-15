# Module Methods

Get an entity from a specific module.

```php
$module = Module::find('blog');
```

Get module name.

```php
$module->getName();
```

Get module name in lowercase.

```php
$module->getLowerName();
```

Get module name in studlycase.

```php
$module->getStudlyName();
```

Get module path.

```php
$module->getPath();
```

Get extra path.

```php
$module->getExtraPath('Assets');
```

Disable the specified module.

```php
$module->disable();
```

Enable the specified module.

```php
$module->enable();
```

Delete the specified module.

```php
$module->delete();
```

Get an array of module requirements. Note: these should be aliases of the module.

```php
$module->getRequires();
```
