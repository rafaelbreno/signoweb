<?php


namespace App\Models;

use SW\Model\Model;

class Client extends Model
{
    private $id,
            $name,
            $email,
            $telephone,
            $birthday,
            $address;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param mixed $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function store()
    {
        $query = "INSERT INTO `client`(`name`, `email`, `telephone`, `birthday`, `address`) VALUES (:name, :email, :telephone, :birthday, :address)";
        $statement = $this->conn->prepare($query);
        $statement->execute(array(
            ':name' => $this->getName(),
            ':email' => $this->getEmail(),
            ':telephone' => $this->getTelephone(),
            ':birthday' => $this->getBirthday(),
            ':address' => $this->getAddress()
        ));

        return $this;
    }

    public function getClients()
    {
        $query = "SELECT * FROM `client`";
        return $this->conn->query($query)->fetchAll();
    }

    public function delete()
    {
        $query = "DELETE FROM `client` WHERE `id` = :id";
        $statement = $this->conn->prepare($query);
        $statement->execute(array(
            'id' => $this->getId()
        ));
        return $statement;
    }
}