# 1. Необходимо создать .env из .env.example
```bash
cp .env.example .env
php artisan key:generate
```

# 2. Поднимаем докер
```bash
docker-compose up --build -d
```

# 3. Переходим в контейнер
```bash
docker exec -it app /bin/bash
```
# 4. Запускаем миграции с сидером
```bash
php artisan migrate --seed
```

# 5. Результат
```bash
https://localhost/api/items
```

# 6. Очистка кэша
```bash
php artisan cache:clear
```
