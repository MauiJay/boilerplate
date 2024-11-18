# You can install the **Boilerplate** package in your CodeIgniter 4 project using either Composer or manual installation. Using Composer is the recommended way to install **Boilerplate** as it simplifies dependency management and package updates. However, if you have any issues with Composer, the manual installation method allows you to use the package as well

## With Composer

Using Composer is the easiest and fastest way to install the package. Follow these steps:

```console
composer require MauiJay/boilerplate
```

Composer will download the package and add it to your project.

```console
composer update
```

## Manual Installation

If you cannot use Composer or prefer to install the package manually, follow these steps:

1. Download the Package

- First, download the **Boilerplate** package manually.
- Visit the package’s GitHub repository and download the [latest version](https://github.com/MauiJay/boilerplate/releases).

  ### Alternatively, if you have the ZIP file of the package, copy it to your project directory

2. Extract Files

- Extract the ZIP file and place the contents in an appropriate directory. For example, you can copy it to `APPPATH . 'ThirdParty\boilerplate\src'`.

3. Update Autoloader

- To ensure the package is automatically loaded in your project, update the Autoloader configuration. Go to `app/Config/Autoload.php` and add the package namespace and path:

  ```php
  $psr4 = [
      'App'         => APPPATH,
      'mauijay\\boilerplate' =>  APPPATH . 'ThirdParty\boilerplate\src'
  ];
  ```

4. Configure the Package

- After adding the package, make sure to configure the necessary settings for SMSRocket (like setting up API Key and ...).
