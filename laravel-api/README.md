# PHP version : PHP 7.4.29
<br>

## DATABASE
<b>DB :</b> MYSQL
<br>
<b>DB NAME:</b> laravel_books_api
<br>

## COMMANDS
<br>

```
php artisan config:cache
php artisan cache:clear
php artisan view:clear
php artisan optimize
php artisan migrate:refresh
php artisan db:seed
```


<br>

## Example Data : books_tbl<br>

| id | book_name                               | author_name   |
|----|-----------------------------------------|---------------|
| 1  | To Kill a Mockingbird                   | Harper Lee    |
| 2  | 1984                                    | George Orwell |
| 3  | The Alchemist                           | Paulo Coelho  |
| 4  | Atomic Habits                           | James Clear   |
| 5  | Harry Potter and the Sorcerer's Stone   | J.K. Rowling  |



<br>

## These routes bind functions to particular URLs as shown below.

<br>
<b>GET</b>     http://127.0.0.1:8000/api/books<br>
<br>
<b>GET</b>     http://127.0.0.1:8000/api/books/1984<br>
<br>
<b>POST</b>    http://127.0.0.1:8000/api/books<br>
<br>
        or http://127.0.0.1:8000/api/books/?book_name=book name test&author_name=author name test<br>object ex.<br>
            {
                book_name : "book name test",
                author_name : "author name test",
            }<br>
<br>
<b>PUT</b>     http://127.0.0.1:8000/api/books/{id}<br>
        or http://127.0.0.1:8000/api/a/books/7?book_name=book name test 1&author_name=author name test 2<br>
        object ex.<br>
        {<br>
            book_name : "book name test updated",<br>
            author_name : "author name test updated",<br>
        }<br>
<br>
<b>DELETE</b>  http://127.0.0.1:8000/api/books/{id}<br>
        or http://127.0.0.1:8000/api/books/7<br>

## RUN Application

```
php artisan serve
```
## URL
http://127.0.0.1:8000
