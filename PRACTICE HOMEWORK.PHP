class User
	{
		public $name;
		public $id;
		
		
		public function getName()
		{
			return $this->name;
		}
		public function getID()
		{
			return $this->id;
		}
		public function setName($nameparam)
		{
			$this->name = $nameparam;
		}
		public function setID($idparam)
		{
			$this->id = $idparam;
		}
	}
	
	class DetailedUser extends User
	{
		public $number, $email;
		
		
		public function setNumber($numberparam)
		{
			$this->number = $numberparam;
		}
		
		public function setEmail($emailparam)
		{
			$this->email = $emailparam;
		}
		
		public function display()
		{
			echo $this->name . "<br>";
			echo $this->id. "<br>";
			echo $this->number. "<br>";
			echo $this->email. "<br>";
		}
	}
	
	$user1 = new User;
	$user1->setName("Joe");
	$user1->setID("Joe's ID");
	print_r($user1);
	echo $user1->getName();
	echo $user1->getID();
	
	$user2 = $user1;
	echo $user2->getName();
	
	$user3 = new DetailedUser;
	$user3->setName("Jack");
	$user3->setID("JackID");
	$user3->setEmail("jack@email.com");
	$user3->setNumber("888-888-8888");
	$user3->display();