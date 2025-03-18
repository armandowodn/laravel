# PHP version : PHP 7.4.29
<br>
<b>DB :</b> MYSQL
<br>
## DBNAME : laravel_books_api
<br>
<br>
## COMMANDS
<br>
#### MSON

```
php artisan config:cache
php artisan cache:clear
php artisan view:clear
php artisan optimize
php artisan migrate:refresh
php artisan db:seed
```


<br>
<b>Example Data :</b> books_tbl<br>
1. To Kill a Mockingbird                    => author : Harper Lee<br>
2. 1984                                     => author : George Orwell<br>
3. The Alchemist                            => author : Paulo Coelho<br>
4. Atomic Habits                            => author : James Clear<br>
5. Harry Potter and the Sorcerers Stone     => author : J.K. Rowling<br>

<br>
These routes bind functions to particular URLs as shown below.<br>
<b>GET</b>     http://127.0.0.1:8000/api/books<br>
<b>GET</b>     http://127.0.0.1:8000/api/books/1984<br>
<b>POST</b>    http://127.0.0.1:8000/api/books<br>
        or
        #### MSON

        ```
        http://127.0.0.1:8000/api/books/?book_name=book name test&author_name=author name test
        ```
        object ex.<br>
            {
                book_name : "book name test",
                author_name : "author name test",
            }<br>
<b>PUT</b>     http://127.0.0.1:8000/api/books/{id}<br>
        or http://127.0.0.1:8000/api/a/books/7?book_name=book name test 1&author_name=author name test 2<br>
        object ex.<br>
        {<br>
            book_name : "book name test updated",<br>
            author_name : "author name test updated",<br>
        }<br>
<b>DELETE</b>  http://127.0.0.1:8000/api/books/{id}<br>
        or http://127.0.0.1:8000/api/books/7<br>

