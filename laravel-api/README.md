PHP version : PHP 7.4.29
DB : MYSQL
DBNAME : laravel_books_api

COMMANDS:
php artisan config:cache
php artisan cache:clear
php artisan view:clear
php artisan optimize
php artisan migrate:refresh
php artisan db:seed


Example Data : books_tbl
1. To Kill a Mockingbird                    => author : Harper Lee
2. 1984                                     => author : George Orwell
3. The Alchemist                            => author : Paulo Coelho
4. Atomic Habits                            => author : James Clear
5. Harry Potter and the Sorcerers Stone     => author : J.K. Rowling


These routes bind functions to particular URLs as shown below.
GET     http://127.0.0.1:8000/api/books
GET     http://127.0.0.1:8000/api/books/1984
POST    http://127.0.0.1:8000/api/books
        or http://127.0.0.1:8000/api/books/?book_name=book name test&author_name=author name test
        object ex.
            {
                book_name : "book name test",
                author_name : "author name test",
            }
PUT     http://127.0.0.1:8000/api/books/{id}
        or http://127.0.0.1:8000/api/a/books/7?book_name=book name test 1&author_name=author name test 2
        object ex.
        {
            book_name : "book name test updated",
            author_name : "author name test updated",
        }
DELETE  http://127.0.0.1:8000/api/books/{id}
        or http://127.0.0.1:8000/api/books/7

