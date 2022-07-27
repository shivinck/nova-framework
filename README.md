# Nova Framework for API
[![Author](http://img.shields.io/badge/author-@shivinnarayanan-blue.svg)](https://github.com/shivinck) [![GitHub license](https://img.shields.io/github/license/maitraysuthar/rest-api-nodejs-mongodb.svg)](https://github.com/maitraysuthar/rest-api-nodejs-mongodb/blob/master/LICENSE)  ![GitHub repo size](https://img.shields.io/github/repo-size/maitraysuthar/rest-api-nodejs-mongodb) [![Codacy Badge](https://api.codacy.com/project/badge/Coverage/b3eb80984adc4671988ffb22d6ad83df)](https://www.codacy.com/manual/maitraysuthar/rest-api-nodejs-mongodb?utm_source=github.com&utm_medium=referral&utm_content=maitraysuthar/rest-api-nodejs-mongodb&utm_campaign=Badge_Coverage) [![Codacy Badge](https://api.codacy.com/project/badge/Grade/b3eb80984adc4671988ffb22d6ad83df)](https://www.codacy.com/manual/maitraysuthar/rest-api-nodejs-mongodb?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=maitraysuthar/rest-api-nodejs-mongodb&amp;utm_campaign=Badge_Grade) ![Travis (.com)](https://img.shields.io/travis/com/maitraysuthar/rest-api-nodejs-mongodb)


# Get Started 
Nova is a powerful PHP framework with a very small footprint, built for developers who need a simple and elegant toolkit to create full-featured rest api for modern web applications. 


# Guideline for using PHP MVC REST API

<h2> What is REST API? </h2>
<p> A REST API (also known as RESTful API) is an application programming interface (API or web API) that conforms to the constraints of REST architectural style and allows for interaction with RESTful web services. REST stands for representational state transfer and was created by computer scientist Roy Fielding.
<br><br>
An API is a set of definitions and protocols for building and integrating application software. It’s sometimes referred to as a contract between an information provider and an information user—establishing the content required from the consumer (the call) and the content required by the producer (the response). For example, the API design for a weather service could specify that the user supply a zip code and that the producer reply with a 2-part answer, the first being the high temperature, and the second being the low.  </p>

<h1>Introduction</h1>
<p>Simply, the framework will route requests to the correct controller and model. It will do this by analysing request URI for the controller name and the request type (be it POST, PUT, GET, etc.). It will then do some sanity checks, before initialising a new controller and model object and calling the correct method on the controller.</p>
<h1>Documentation</h1>
<h2> Add a new route </h2>
<p> For creating a new route you should open Route.php file from Router directory.  </p>
<p> There is already exist some examples in the file which you can use them as you need.</p>

```php
<?php

$router->get('/home', 'home@index');

$router->post('/home', 'home@post');

$router->get('/', function() {
    echo 'Welcome ';
});
```

<p> For getting parameters follow below example: </p>

```php
<?php

$router->get('/:name', function($param) {
    echo 'Welcome ' . $param['name'];
});
```
<p> For example, when I use this url "yourdomin.com/novausers" I will get following output.</p>

```
Welcome novausers
```

<p> It's just a Piece of cake :) </p>
<p> If you want to send the POST requests follow below example: </p>

```php

$router->post('/:name', function($param) {
    echo 'Welcome ' . $param['name'];
});

```
<h2> Database Connection </h2>

> <p> Consider that for using database you should edit config.php file before start using database.</p>

<p> For getting a database connection, you can use below sample in Model directory: </p>

```php
<?php

use MVC\Model;

class ModelsHome extends Model {

    public function getAllUser() {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "user");
        
        /*
          $query->row : return 1 row
          $query->rows : return all rows
          $query->num_rows : return rows count
        */
        return $query->rows;
    }
}
```
