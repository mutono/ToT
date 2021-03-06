<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="trainers")
 */
class E_Trainers{
 	/**
* @Id
* @Column(name="trainerID", type="integer", length=11, nullable=false)
* @GeneratedValue(strategy="AUTO")
* */
private $trainerID;
/**
* @Column(name="firstName", type="string",length=45, nullable=true)
* */
private $firstName;
/**
* @Column(name="lastName", type="string",length=45, nullable=true)
* */
private $lastName;
/**
* @Column(name="phoneNumber", type="string",length=45, nullable=true)
* */
private $phoneNumber;
/**
* @Column(name="nameOfschool", type="string",length=45, nullable=true)
* */
private $nameOfschool;
/**
* @Column(name="residence", type="string",length=45, nullable=true)
* */
private $residence;
/**
* @Column(name="nameOfcourse", type="string",length=45, nullable=true)
* */
private $nameOfcourse;
/**
* @Column(name="moneyAllocated", type="string",length=45, nullable=true)
* */
private $moneyAllocated;

public function getTrainerID() {
		return $this -> trainerID;
}

public function setTrainerID($trainerID) { $this -> trainerID = $trainerID;
}
public function getFirstName() {
		return $this -> firstName;
}

public function setFirstName($firstName) { $this -> firstName = $firstName;
}
public function getLastName() {
		return $this -> lastName;
}

public function setLastName($lastName) { $this -> lastName = $lastName;
}
public function getPhoneNumber() {
		return $this -> phoneNumber;
}

public function setPhoneNumber($phoneNumber) { $this -> phoneNumber = $phoneNumber;
}
public function getNameOfschool() {
		return $this -> nameOfschool;
}

public function setNameOfschool($nameOfschool) { $this -> nameOfschool = $nameOfschool;
}
public function getMoneyAllocated() {
		return $this -> moneyAllocated;
}

public function setMoneyAllocated($moneyAllocated) { $this -> moneyAllocated = $moneyAllocated;
}
}
?>