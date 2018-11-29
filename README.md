# JpPrefecture

[![Build Status](https://travis-ci.org/tsmsogn/JpPrefecture.svg?branch=master)](https://travis-ci.org/tsmsogn/JpPrefecture)

## Installation

```shell
composer require tsmsogn/jp-prefecture
```

## Usage

- Get prefecture

```php
$hokkaido = JpPrefecture\JpPrefecture::get(1);
```

- Check if whether the prefecture exists

```php
$exists = JpPrefecture\JpPrefecture::exists(1)
```

- Get all prefectures

```php
$prefectures = JpPrefecture\JpPrefecture::all();
```
