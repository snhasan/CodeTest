<?php 

namespace App\Repository;
use App\data;
use App\Users;
use Carbon\Carbon;


Class Users
{
	CONST CACHE_KEY = 'USERS';


	public function all($orderBy){

		$key = "all.{$orderBy}";
		$cacheKey = $this->getCacheKey($key);

		return chache()->remember($cacheKey, Carbon::now()->addMinutes(5), function() use($orderBy){
			return data::orderBy($orderBy)->get();
		});

		return data::orderBy($orderBy)->get;

	}

	public function get($id){

	}
	public function getCacheKey($key){


		return self::CACHE_KEY .".$key";

	}




}