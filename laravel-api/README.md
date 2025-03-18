PHP version : PHP 7.4.29
<br>
DB : MYSQL
<br>
DBNAME : laravel_books_api
<br>
<br>
COMMANDS:<br>
php artisan config:cache<br>
php artisan cache:clear<br>
php artisan view:clear<br>
php artisan optimize<br>
php artisan migrate:refresh<br>
php artisan db:seed<br>

<br>
Example Data : books_tbl<br>
1. To Kill a Mockingbird                    => author : Harper Lee<br>
2. 1984                                     => author : George Orwell<br>
3. The Alchemist                            => author : Paulo Coelho<br>
4. Atomic Habits                            => author : James Clear<br>
5. Harry Potter and the Sorcerers Stone     => author : J.K. Rowling<br>

<br>
These routes bind functions to particular URLs as shown below.<br>
GET     http://127.0.0.1:8000/api/books<br>
GET     http://127.0.0.1:8000/api/books/1984<br>
POST    http://127.0.0.1:8000/api/books<br>
        or http://127.0.0.1:8000/api/books/?book_name=book name test&author_name=author name test<br>
        object ex.<br>
            {
                book_name : "book name test",
                author_name : "author name test",
            }<br>
PUT     http://127.0.0.1:8000/api/books/{id}<br>
        or http://127.0.0.1:8000/api/a/books/7?book_name=book name test 1&author_name=author name test 2<br>
        object ex.<br>
        {<br>
            book_name : "book name test updated",<br>
            author_name : "author name test updated",<br>
        }<br>
DELETE  http://127.0.0.1:8000/api/books/{id}<br>
        or http://127.0.0.1:8000/api/books/7<br>

