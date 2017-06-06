<?php

require(ROOT . "model/BirthdayModel.php");

function index()
{
	render("Birthday/index", array( 
	'birthdays' => getAllBirthdays()
	));
}

function create(){
	render("Birthday/create");
}

function createSave(){
	if (!createBirthday()) {
		header("Location:" . URL . "error/berror");
		exit();
	}

	header("Location:" . URL . "birthday/index");
}

function edit($id = ''){
	$birthdays = getBirthday($id);

	render("Birthday/edit", array(
		'birthdays' => editBirthday()
	));
}

function editSave()
{
	if (!editBirthday()) {
		header("Location:" . URL . "error/berror");
		exit();
	}

	header("Location:" . URL . "birthday/index");
}

function delete($id)
{
	if (!deleteBirthday($id)) {
		header("Location:" . URL . "error/berror");
		exit();
	}

	header("Location:" . URL . "Birthday/index");
}
