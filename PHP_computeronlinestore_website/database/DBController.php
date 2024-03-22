<?php


class DBController
{
    // Database Connection Properties
    protected $host = 'localhost:22';
    protected $user = 'root';    /* root    localhost:22 */
    protected $password = 'passwordW';  /*  your_password */
    protected $database = "onestopcshop";

    // connection property
    public $con = null;

    // call constructor
    public function __construct()
    {
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if ($this->con->connect_error){
            echo "Fail " . $this->con->connect_error;
        }
    }

    public function __destruct()
    {
        $this->closeConnection();
    }

    // for mysqli closing connection
    protected function closeConnection(){
        if ($this->con != null ){
            $this->con->close();
            $this->con = null;
        }
    }
}
