# Тестовое задание
Чтобы развернуть проект:
* Изменить .env.example на .env
* Выпольнить комманду `docker-compose up -d`

Есть реализованый сервис в Modules/Comments/Service/CommentService.php

В нем есть пустые методы:
 * `add()` - добавить комментарий
 * `getById()` - получить комментарий по идентификатору
 * `getAll` - получить все комментарии
 * `remove()` - удалить комментарий

Необходимо:

* Создать сущность `Комментарий` которая содержит:
    * Идентификатор пользователя (рандомное число)
    * Заголовок
    * Комментарий
    * Время добавления
* Реализовать методы с использованием DDD и ORM Doctrine.
* Создать таблицу `comment` с помощью миграции Doctrine.
* В базовом шаблоне:
    * Форма создания комментария
    * Вывести один комментарий по id
    * Вывести все комментарии в таблице и добавить кнопку удаления комментария
* Создать ветку `candidate/{ваше имя}` и запушить в нее результат

