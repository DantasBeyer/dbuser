<?php

class User
{
    private int $id;
    private string $fname;
    private string $lname;
    private string $email;


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

    /**
     * @param string $fname
     */
    public function setFname(string $fname): void
    {
        $this->fname = $fname;
        $this->update();
    }

    /**
     * @param string $lname
     */
    public function setLname(string $lname): void
    {
        $this->lname = $lname;
        $this->update();
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
        $this->update();
    }

    public static function db_conn(): PDO
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "phpuser";
        return new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    }

    /**
     * @return User[]|false
     */
    public static function findAll()
    {
        $conn = self::db_conn();
        $sql = 'SELECT * FROM user';
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(8, 'User');
    }

    public static function findOneById(int $id): User
    {
        $conn = self::db_conn();
        $sql = 'SELECT * FROM user where id=:id';
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetchObject('User');
    }

    public static function create(string $fname, string $lname, string $email): User
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

    private function update(): bool
    {
        $conn = self::db_conn();
        $sql = 'UPDATE user SET fname=:fname, lname=:lname, email=:email where id=:id';
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':fname', $this->fname);
        $stmt->bindParam(':lname', $this->lname);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':id', $this->id);
        return $stmt->execute();
    }

    public function delete(User $user): bool
    {
        $conn = self::db_conn();
        $sql = 'DELETE FROM user where id=:id';
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $user->id);
        $user = null;
        return $stmt->execute();


    }
}