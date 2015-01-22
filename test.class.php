<?php

class test
{
	public function hi()
	{
		return echo "hola mundo";
	}
	public function hola()
	{
		return echo "hello world";
	}
	public function test($lang)
	{
		if($lang == 'es')
			return $this->hi();
		return $this->hola();
	}
	public function update($msg)
	{
		return echo $msg;
	}
}
