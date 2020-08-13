## Migration Recursive
Выполнение миграций рекурсивно из папки database/migrations. Например,
```
 database/migrations/old
 database/migrations/sprint-1
 database/migrations/sprint-2
 database/migrations/sprint-3/bugfix
```
Из всех выше перечесленных папок выполняться миграции

# Установка
В ``config/app.php`` добавить 
````
'providers' => [
        ...
        \Rolf\MigrationRecursive\src\MigrationRecursiveServiceProvider::class,
]
````
