# basic PHP CMS

a basic cms 

## Getting Started

just clone it and all things ready to go.

### Prerequisites

apache server , mysql databse
```
if you wanna use an other server should change the auth for the admin 
area .


### Installing

you should modify the app/start.php for you.
```

define('BASE_URL', 'http://localhost/basic_php_cms/');

$db = new PDO('mysql:host=localhost;dbname=cms', 'root','');

```

## Built With

* [PHP](http://php.net) - the programming language used
* [PDO](http://php.net/manual/en/book.pdo.php) - PHP Data Objects
* [MY SQL](https://www.mysql.com/) - the data base used

## Authors

* **m.ali sadeghi** - *Initial work* - 
[mas1375](https://github.com/mas1375)


## License

This project is licensed under the MIT License - see the 
[LICENSE.md](LICENSE.md) file for details



