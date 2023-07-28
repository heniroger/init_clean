<?php


declare(strict_types=1);

namespace Tombo\Ramos\Core\Domain;

// use Wru\Shared\Infra\Adapter\Id;

class User
{
    //  private Id $id;
    private int $id;
    private string $email;


    // /**
    //  * Get the value of id
    //  *
    //  * @return Id
    //  */
    // public function getId(): Id
    // {
    //     return $this->id;
    // }

    // /**
    //  * Set the value of id
    //  *
    //  * @param Id $id
    //  *
    //  * @return self
    //  */
    // public function setId(Id $id): self
    // {
    //     $this->id = $id;
    //     return $this;
    // }

    /**
     * Get the value of email
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }


}
