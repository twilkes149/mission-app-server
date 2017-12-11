<?php
	
	require_once 'login.php';
	echo "hello world\n";

	//This function reads your DATABASE_URL config var and returns a connection
  //string suitable for pg_connect. Put this in your app.
  function pg_connection_string_from_database_url() {
    extract(parse_url($_ENV["DATABASE_URL"]));
    echo $_ENV['DATABASE_URL'] . "\n" . " userName: $user, password: $pass, host=$host, db: $db";
    echo "dbopts: " . $dbopts;
    return "user=$user password=$pass host=$host dbname=" . substr($path, 1); // <- you may want to add sslmode=require there too
  }
  // Here we establish the connection. Yes, that's all.
  //$pg_conn = pg_connect(pg_connection_string_from_database_url());

  $dbopts = parse_url(getenv('DATABASE_URL'));
  $un = $dbopts["user"],
  $pw = $dbopts["pass"],
  $host = $dbopts["host"],
  $port = $dbopts["port"],
  $db = ltrim($dbopts["path"],'/')

  
  $query = "CREATE TABLE if not exists user (
    id INT NOT NULL AUTO_INCREMENT,
    userName TEXT NOT NULL,
    password TEXT NOT NULL);";

  $pg_conn = pg_connect("host = $host port = $port dbname = $db user = $un password = $pw");//create connection


  // Now let's use the connection for something silly just to prove it works:
  $result = pg_query($pg_conn, $query);

  if ($result)
    echo "success: ". $result;
  else
    echo "failed: " . $result;
?>