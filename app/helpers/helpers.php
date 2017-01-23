<?php

function currentUser()
{
	return auth()->user();
}

function infoUserFielTable($fields_table,$userID)
{
	$value = $fields_table->field_user
												->where('id_field_table', $fields_table->id)
												->where('id_user', (integer)$userID)
												->first();
	return $value;
}
