<?php

class ViewUser extends user {


	public function showAllUsers() {
		$datas = $this->getAllUsers();
		foreach ($datas as $data) {
			echo "Username is ".$data['korisnickoime']."<br>";
			echo "Password is ".$data['korisnickalozinka']."<br>";
		}
	}

}