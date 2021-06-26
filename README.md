## 简介

在使用 laravel 的时候，被 laravel 强大所震撼，在开发 laravel 项目的是经常会用到 artisan 命令，真的怎么用怎么丝滑，特别是创建 Controller 或者 Model 的时候，实在太方便了，但是在公司中，经常会遇到的问题就是，项目会抽象出 Service、 Repository 层等等，有没有办法可以像 artisan 命令一样丝滑的创建呢？于是就开发了该 Composer 扩展包。

## 安装

```shell
composer require sockstack/repository --dev
```

## 使用

```shell
php artisan make:repository {name}
```
- 案例一

```shell
php artisan make:repository UserRepository
```

在 `app/Repositories` 目录下生成 `UserRepository.php` 的文件，内容如下：

```php
<?php

namespace App\Repositories;

class UserRepository
{
    public function __construct()
    {
        parent::__construct();
    }
}
```

- 案例二

```shell
php artisan make:repository User/UserRepository
```

在 `app/Repositories/User` 目录下生成 `UserRepository.php` 的文件，内容如下：

```php
<?php

namespace App\Repositorys\User;

class UserRepository
{
    public function __construct()
    {
        parent::__construct();
    }
}
```
