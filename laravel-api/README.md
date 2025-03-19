# PHP version : PHP 7.4.29

## DATABASE

**DB :** MYSQL

**DB NAME:** laravel_books_api

## COMMANDS

```
php artisan config:cache
php artisan cache:clear
php artisan view:clear
php artisan optimize
php artisan migrate:refresh
php artisan db:seed
```



## Example Data : books_tbl<br>

| id | book_name                               | author_name   |
|----|-----------------------------------------|---------------|
| 1  | To Kill a Mockingbird                   | Harper Lee    |
| 2  | 1984                                    | George Orwell |
| 3  | The Alchemist                           | Paulo Coelho  |
| 4  | Atomic Habits                           | James Clear   |
| 5  | Harry Potter and the Sorcerer's Stone   | J.K. Rowling  |



## These routes bind functions to particular URLs as shown below.


**GET**     http://127.0.0.1:8000/api/books

**GET**     http://127.0.0.1:8000/api/books/1984


**POST**    http://127.0.0.1:8000/api/books


**PUT**     http://127.0.0.1:8000/api/books/{id}


**DELETE**  http://127.0.0.1:8000/api/books/{id}

## RUN Application

```
php artisan serve
```
## Local development server
http://127.0.0.1:8000
