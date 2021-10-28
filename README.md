# Test task

> Необходимо реализовать загрузку чека посредством формы. Через ajax запрос. И отобразить ранее загруженные чеки всех пользователей. Чтобы загружать чеки от имени пользователя нужно авторизоваться под ним. Чеки в бд должны иметь следующие поля: Пользователь (user_id), Фото, Тип (обычный, призовой), Код, Статус (Принят, Отклонен). Условия: 1. Призовые чеки грузятся каждый четный час, в остальное время обычные. 2. Если пользователь загрузил призовой чек, то в поле Код (буквы и цифры) генерируется **уникальный** 8 значный код. 3. При отображении всех чеков Коды (призовых чеков) показываются только на неделе на которой пользователь загрузил чек.

## Quick Start

```bash
# download or clone repository
git clone https://github.com/kibo13/test-checks.git

# install dependencies
composer install
npm install

# copy file .env
copy .env.example .env

# generate a key
php artisan key:generate

# create a new mysql database via phpmyadmin or GUI
# import to created database file
static/db_checks.sql

# database configuration
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=database_name
DB_USERNAME=database_username
DB_PASSWORD=database_password

# run application
php artisan serve
```
