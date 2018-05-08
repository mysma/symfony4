<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
/**
 * @ORM\Entity(repositoryClass="App\Repository\UsersRepository")
 */
class Users implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25)
     * @Assert\NotBlank(
     *  message="Please enter your name"
     * )
     * @Assert\Length(
     *    min=1,
     *    max=25,
     *    minMessage="The name must be longer than 1 character!",
     *    maxMessage="The name must be shorter than 25 character!"
     *)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=60)
     * @Assert\NotBlank(
     *  message="Please enter your surname"
     * )
     * @Assert\Length(
     *    min=1,
     *    max=60,
     *    minMessage="The surname must be longer than 1 character!",
     *    maxMessage="The surname must be shorter than 60 character!"
     *)
     */
    private $surname;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank(
     *  message="Please enter your login"
     * )
     * @Assert\Length(
     *    min=5,
     *    max=50,
     *    minMessage="The login must be longer than 5 character!",
     *    maxMessage="The login must be shorter than 50 character!"
     *)
     */
    private $login;

    /**
     * @ORM\Column(type="string", length=255)
     */

    private $password;

    /**
    * @ORM\Column(type="string", length=255)
    * @Assert\NotBlank()
    * @Assert\Length(max=4096)
    */
    private $plainPassword;

    /**
     * @ORM\Column(type="string", length=80)
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email.",
     *     checkMX = true
     * )
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adress;
    /**
     * @ORM\Column(type="string", length=7)
     * @Assert\Regex(
      *     pattern="/^[0-9]+[0-9]+\-[0-9]+[0-9]+[0-9]$/D",
      *     message="Your postcode is invalid"
      * )
     */
    private $postcode;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $city;

    public function getId()
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(string $surname): self
    {
        $this->surname = $surname;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(string $login): self
    {
        $this->login = $login;

        return $this;
    }
    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    public function setPlainPassword($password)
    {
        $this->plainPassword = $password;
    }
    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    public function getPostcode(): ?string
    {
        return $this->postcode;
    }

    public function setPostcode(string $postcode): self
    {
        $this->postcode = $postcode;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }
    public function getSalt()
    {
        return null;
    }
    public function getRoles()
    {
        return null;
    }
    public function getUsername()
    {
        return null;
    }
    public function eraseCredentials()
    {
        return null;
    }


}
