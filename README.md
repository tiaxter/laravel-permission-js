<img src="https://i.imgur.com/VmAkC3L.png" alt="">

## 💡 Purpose
This package permit to check user permissions, managed by [spatie/laravel-permission](https://github.com/spatie/laravel-permission) package, directly from JS. 

## 🚀 Installation
- First of all, you can install the package using composer

  ```bash
  composer require tiaxter/laravel-permission-js
  ```

- **This step can be skipper if auto-discovery is enabled**

  Add package service provider into `config/app.php` file

  ```php
  'providers' => [
        ..., 
        Tiaxter\LaravelPermissionJs\LaravelPermissionJsServiceProvider::class
  ];
  ```
  
## 🔰 Getting started
First of all you have to include this Blade Directive inside the page where you want to use this package
```blade
@permissions
```
## 💻 Basic usage
- If you're using TypeScript you will need to add this line at start of your script:
  ```typescript    
  declare function can(permissionName: string): bool
  ```
Checking logged in user permission
```javascript
    const canUserDoSomething = can('permission name here'); // true or false
```

## 🎨 Credits
- Thanks [Giorgia Marangoni](https://www.instagram.com/giorgia_marangoni_/) logo designer for her patience

