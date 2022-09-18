<?php
class User
{

  public $userCode;
  public $name;
  public $lastName;
  public $document;
  public $bornDate;
  public $address;
  public $country;

  function __construct(
    $userCode,
    $name,
    $lastName,
    $document,
    $bornDate,
    $address,
    $country
  ) {
    $this->userCode = $userCode;
    $this->name = $name;
    $this->lastName = $lastName;
    $this->document = $document;
    $this->bornDate = $bornDate;
    $this->address = $address;
    $this->country = $country;
  }

  static function fromRow($row)
  {
    $user = new User(
      $row['userCode'],
      $row['name'],
      $row['lastName'],
      $row['document'],
      $row['bornDate'],
      $row['address'],
      $row['country']
    );
    return $user;
  }

  static function fromUser($row)
  {
    $user = User::fromRow($row);
    $user->userCode = $row['userCode'];
    $user->name = $row['name'];
    $user->lastName = $row['lastName'];
    $user->document = $row['document'];
    $user->bornDate = $row['bornDate'];
    $user->address = $row['address'];
    $user->country = $row['country'];
    return $user;
  }
}
