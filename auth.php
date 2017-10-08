<?php

	function auth($login, $password) 
	{
		if (!$login || !$password)
			return false;
		$account = unserialize(file_get_contents('./secure/password'));
		if ($account) 
		{
			foreach ($account as $key => $arg) 
				if ($arg['login'] === $login && $arg['password'] === hash('whirlpool', $password))
					return true;
		}
		return false;
	}
	
?>