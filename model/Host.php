<?php

class Host{
    
 public       $host="localhost";
 public       $port=8080;
 public       $user="root";
 public       $password="TRfL711mMcooL";
 public       $database="dlab1911";
 public       $charset="utf8";  
 public       $connection;
 public       $vesion = "4.0";
    
    public function connect() {
        $this->connection = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        mysqli_set_charset($this->connection, $this->charset);
        return $this->connection;
        
    }
    
    public function sqliexecute($sql) {
        $this->connect();
        $q = mysqli_query($this->connection, $sql);
        while ($row = mysqli_fetch_assoc($q)) {
            $x[] = $row;
        }
        if(isset($x)){
            return $x;
        }
    }
    
    
}

