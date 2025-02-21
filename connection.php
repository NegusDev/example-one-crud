<?php 

/* The line ` = "localhost";` is assigning the value "localhost" to the variable
``. In the context of establishing a database connection, this variable typically holds
the hostname or IP address of the server where the database is located. In this case, it indicates
that the MySQL database server is running on the same machine where the PHP script is being executed
(localhost). */
$servername = "localhost";
/* The line ` = "root";` is assigning the value "root" to the variable ``. In the
context of database connections, this variable typically holds the username required to authenticate
and access the database server. In this case, "root" is a common default username used for MySQL
databases, especially in local development environments. */
$username = "root";
/* The line ` = "";` is assigning an empty string as the value to the variable ``. In
the context of establishing a database connection, this typically means that no password is required
for the database user to authenticate and access the database server. This is common in local
development environments or situations where the database is configured to allow passwordless
connections for specific users. */
$password = "";
/* The line ` = "lead_management";` is assigning the value "lead_management" to the
variable ``. In the context of establishing a database connection, this variable
typically holds the name of the specific database within the MySQL server that the PHP script will
be interacting with. In this case, "lead_management" is the name of the database that the script
will connect to for performing database operations like querying, inserting, updating, or deleting
data. */
$database_name = "lead_management";



/* The line ` = "mysql:host=;dbname=;charset=utf8mb4";` is constructing a
Data Source Name (DSN) string that specifies the details required to establish a connection to a
MySQL database using PHP's PDO extension. */
$dsn = "mysql:host=$servername;dbname=$database_name;charset=utf8mb4";
/* The `` array in the PHP code snippet is used to set specific attributes for the PDO (PHP
Data Objects) connection to the MySQL database. Here's a breakdown of what each key-value pair in
the `` array is doing: */
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];


try {
/* The line `     = new PDO(, , , );` is creating a new PDO (PHP Data
Objects) instance to establish a connection to a MySQL database using the provided DSN (Data Source
Name), username, password, and options array. */
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (\PDOException $e) {
    /* The line `throw new \PDOException(->getMessage(), (int)->getCode());` is throwing a new
    instance of the `\PDOException` class with the message and error code obtained from the caught
    exception ``. */
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}



