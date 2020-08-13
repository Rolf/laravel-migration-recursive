## Migration Recursive
Выполнение миграций рекурсивно из папки database/migrations. Например,
```
 database/migrations/old
 database/migrations/sprint-1
 database/migrations/sprint-2
 database/migrations/sprint-3/bugfix
```
Из всех выше перечисленных папок выполнятся миграции

### Поддерживаемые версии
````
Laravel 5.4 - 5.8  
Laravel 6.x  
Laravel 7.x  
````

### Установка

``composer require rolf/migration-recursive:{version}``, где {version} соответствует вашей версии laravel и версии пакета.  
Например, ``composer require rolf/migration-recursive:7.x``

В ``config/app.php`` добавить 
````
'providers' => [
        ...
        \Rolf\MigrationRecursive\src\MigrationRecursiveServiceProvider::class,
]
````


