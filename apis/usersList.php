<?php 

class Users {
    public $user_id;
    public $user_name;
    public $user_photo;
    public $isFollowing;
    public $ranking;

    function __construct($id, $name, $photo, $following, $rank) {
		$this->user_id = $id;
		$this->user_name = $name;	
		$this->user_photo = $photo;
		$this->isFollowing = $following;
		$this->ranking = $rank;		
	}
}

class UsersList {
	public $user;
	public $objList = array();

	function __construct() {
		$this->user = new Users(1, 'Bob', './photos/bob.png', true, 10);
		$this->objList[] = $this->user;

		$this->user = new Users(2, 'Jarry', './photos/jarry.png', true, 22);
		$this->objList[] = $this->user;

		$this->user = new Users(3, 'Jonathan', './photos/jonathan.png', false, 27);
		$this->objList[] = $this->user;

		$this->user = new Users(4, 'Mike', './photos/mike.png', false, 35);
		$this->objList[] = $this->user;

		$this->user = new Users(5, 'Suzanne', './photos/suzanne.png', false, 49);
		$this->objList[] = $this->user;

		$this->user = new Users(6, 'Tom', './photos/tom.png', true, 55);
		$this->objList[] = $this->user;

		echo json_encode($this->objList);	
	}
}

new UsersList();
?> 