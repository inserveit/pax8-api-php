## Requirements
[![PHP Version Require](http://poser.pugx.org/inserve/pax8-api-php/require/php)](https://packagist.org/packages/inserve/pax8-api-php)

## Status

![workflow](https://github.com/inserveit/pax8-api-php/actions/workflows/build-actions.yml/badge.svg)
[![Latest Stable Version](http://poser.pugx.org/inserve/pax8-api-php/v)](https://packagist.org/packages/inserve/pax8-api-php)
[![Latest Unstable Version](http://poser.pugx.org/inserve/pax8-api-php/v/unstable)](https://packagist.org/packages/inserve/pax8-api-php)
[![License](http://poser.pugx.org/inserve/pax8-api-php/license)](https://packagist.org/packages/inserve/pax8-api-php)

# About
A PHP Wrapper for [Pax8](https://devx.pax8.com/)

## Installation
`composer require inserve/pax8-api-php`

## Usage example

```php
<?php

use Inserve\Pax8API\Pax8APIClient;

require 'vendor/autoload.php';

$api = new Pax8APIClient();
$accessToken = $api->authenticate('client.id', 'client.secret');

if (! $accessToken) {
    echo 'Authentication failed';

    return;
}

$subscriptions = $api->company->list();

```
