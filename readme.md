## Versioning
This package provides helpers and a config file to bust the client cache for your assets.  
If you are using webpack or something similar, this is not needed.  

## Installation
```shell
composer require habier/versioning
php artisan vendor:publish --provider="Habier\Versioning\AssetVersioningServiceProvider"
```

After this, you will find a new config file called **version.php** in your config folder.  
This config file holds your global app version.

## Usage
```blade
<link href="{{ url_version('css/app.css') }}" rel="stylesheet">
<link href="{{ asset_version('css/app.css') }}" rel="stylesheet">
```

You can add specific version number too.
```blade
<link href="{{ url_version('css/app.css', 42) }}" rel="stylesheet">
<link href="{{ asset_version('css/app.css', 42) }}" rel="stylesheet">
```
