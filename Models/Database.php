<?php
class Database
{
    private $connection;

    /*
    create the connection
    */
    private function set_connection()
    {
        $database_name = "mysql:host=localhost;dbname=project_forum";
        $database_username = "root";
        $database_password = "root";

        // echo "<br>";
        // echo "--------------------------------- <br>";
        // echo "connect to database: [" . $database_name . "]... <br>";
        try {
            $pdo = new PDO($database_name, $database_username, $database_password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC

            ]);
            if ($pdo != null) {
                // echo "database connected <br>";
                // echo "---------------------------------";
                // echo "<br>";

                return $pdo;
            }
        } catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
        }
        return null;
    }

    /*
    delete the connection after the request
    */
    private function delete_connection()
    {
        return null;
    }

    /*
    get topics information
        id
        name
        date
    */
    public function get_topics_information($information)
    {
        $this->connection = $this->set_connection();

        if ($this->connection != null) {
            $req = "select " . $information . " from project_forum.topics";
            $stmt = $this->connection->prepare($req);
            $stmt->execute();
            $result = $stmt->fetchAll();

            return $result;
        }

        $this->connection = $this->delete_connection();
    }

    /*
    get comments information by topic id
        id
        text
        id_user
        id_topic
        date
    */
    public function get_commments_information_by_topic_id($information, $id_topic)
    {
        $this->connection = $this->set_connection();

        if ($this->connection != null) {
            $req = "select " . $information . " from comments where id_topic=" . $id_topic . ";";
            $stmt = $this->connection->prepare($req);
            $stmt->execute();
            $result = $stmt->fetchAll();

            return $result;
        }

        $this->connection = $this->delete_connection();
    }

    /*
    get user information
    */
    public function get_user_information($select, $information, $value)
    {
        $this->connection = $this->set_connection();

        if ($this->connection != null) {
            $req = "select " . $select . " from users where " . $information . "=:value;";
            $stmt = $this->connection->prepare($req);
            // $stmt->bindValue(":information", $information);
            $stmt->bindValue(":value", $value);
            $stmt->execute();
            $result = $stmt->fetchAll();

            return $result;
        }

        $this->connection = $this->delete_connection();
    }

    /*
    add a topic
    */
    public function add_topic($name)
    {
        $this->connection = $this->set_connection();

        if ($this->connection != null) {
            $req = 'insert into topics (name, date) values (:name, now());';
            $stmt = $this->connection->prepare($req);
            $stmt->bindValue(":name", $name);
            $stmt->execute();

            return;
        }

        $this->connection = $this->delete_connection();
    }

    /*
    add a comment witn a topic id
    */
    public function add_comment($text, $id_user, $id_topic)
    {
        $this->connection = $this->set_connection();

        if ($this->connection != null) {
            $req = 'insert into comments (text, id_user, id_topic, date) values (:text, :id_user, :id_topic, now());';
            $stmt = $this->connection->prepare($req);
            $stmt->bindValue(":text", $text);
            $stmt->bindValue(":id_user", $id_user);
            $stmt->bindValue(":id_topic", $id_topic);
            $stmt->execute();

            return;
        }

        $this->connection = $this->delete_connection();
    }

    /*
    add user
    */
    public function add_user($name, $mail, $password)
    {
        $this->connection = $this->set_connection();

        if ($this->connection != null) {
            $req = 'insert into users (image, name, mail, type, password) values ("", :name, :mail, "u", :password);';
            $stmt = $this->connection->prepare($req);
            $stmt->bindValue(":name", $name);
            $stmt->bindValue(":mail", $mail);
            $stmt->bindValue(":password", $password);
            $stmt->execute();

            return;
        }

        $this->connection = $this->delete_connection();
    }

    /*
    update user
    */
    public function update_user($id, $select, $value)
    {
        $this->connection = $this->set_connection();

        if ($this->connection != null) {
            $req = 'update users set ' . $select . ' =:value where id =:id;';
            $stmt = $this->connection->prepare($req);
            // $stmt->bindValue(":name", $name);
            $stmt->bindValue(":value", $value);
            $stmt->bindValue(":id", $id);
            $stmt->execute();

            return;
        }

        $this->connection = $this->delete_connection();
    }

    public function remove_topic($id_topic)
    {
    }

    public function remove_comment($id_comment)
    {
    }

    public function remove_user($id_user)
    {
    }
}
