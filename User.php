<?php

class User{

    private int $id;
    private string $fname;
    private string $lname;
    private string $email;

    /**
     * @param int $id
     * @param string $fname
     * @param string $lname
     * @param string $email
     */


    public static function db_conn()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "phpuser";
        return  new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getFname(): string
    {
        return $this->fname;
    }

    /**
     * @return string
     */
    public function getLname(): string
    {
        return $this->lname;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }



//    public static function findall():array
//    {
//        $servername = "localhost";
//        $username = "root";
//        $password = "";
//        $dbname = "phpuser";
//
//        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//        $sql = "SELECT * FROM user";
//        $stmt = $conn->prepare($sql);
//        $stmt->execute();
//        $result = $stmt->fetchAll(2);
//        $userarray = [];
//        foreach ($result as $row) {
//            $userarray[] =  new User($row['id'],$row["fname"],$row['lname'],$row['email']);
//        }
//
//        return $userarray;
//
//
//    }

    /**
     * @return User[]|false
     */
    public static function findAll()
    {
        $conn = self::db_conn();
        $sql = 'SELECT * FROM user';
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(8,'User');
    }



    public static function findOneById(int $id):User
    {
        $conn = self::db_conn();
        $sql = 'SELECT * FROM user where id=:id';
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        return $stmt->fetchObject('User');
    }


    public static function create(string $fname, string $lname, string $email):User
    {
        $conn = self::db_conn();
        $sql = 'INSERT INTO user (fname, lname, email) VALUES (:fname, :lname, :email)';
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':fname', $fname);
        $stmt->bindParam(':lname', $lname);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        return self::findOneById($conn->lastInsertId());

    }

    public function echoName():void
    {
        echo $this->fname;
    }
}