# JpPrefecture

[![Build Status](https://travis-ci.org/tsmsogn/JpPrefecture.svg?branch=master)](https://travis-ci.org/tsmsogn/JpPrefecture)

## Installation

```shell
composer require tsmsogn/jp-prefecture
```

## Usage

- Get Prefecture

```php
$hokkaido = JpPrefecture\JpPrefecture::get(1);
```

- Get All Prefectures

```php
$prefectures = JpPrefecture\JpPrefecture::all();
```
