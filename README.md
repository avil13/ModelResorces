# Простой модуль для отображения данных в формате  REST API

после установки

```
"psr-4": {
            "AVIL13\\ModelResorces\\": "packages/AVIL13/ModelResorces/src",
            "App\\": "app/"
        }

```

Добавить в провайдерам `config/app.php`
```PHP
AVIL13\ModelResorces\ModelResorcesServiceProvider::class,
```

