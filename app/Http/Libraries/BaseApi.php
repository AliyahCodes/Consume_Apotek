<?php

namespace App\Http\Libraries;
use Illuminate\Support\Facades\Http;

class BaseApi
{

    protected $baseUrl;

    public function __construct()
	    {
        $this->baseUrl = env('API_HOST');
        }

        private function client()
        {
            return Http::baseUrl($this->baseUrl);
        } 

    public function index(String $endpoint, Array $data = [])
    {
        return $this->client()->get($endpoint, $data);
    }

    public function create(String $endpoint, Array $data)
    {
        return $this->client()->post($endpoint, $data);

    }

    public function detail(String $endpoint, String $id, Array $data = [])
    {
        return $this->client()->get("$endpoint/$id", $data);

    }

    public function update(String $endpoint, String $id, Array $data = [])
    {
        return $this->client()->patch("$endpoint/$id", $data);
    }

    public function delete(String $endpoint, String $id ) 
    {  
        return $this->client()->delete("$endpoint/$id");

    }

    public function onlyTrashed(String $endpoint, Array $data = [])
    {
        return $this->client()->get($endpoint, $data);
    }

    public function restore(String $endpoint, String $id ) 
    {  
        return $this->client()->get("$endpoint/$id");

    }

    public function forceDelete(String $endpoint, String $id ) 
    {  
        return $this->client()->get("$endpoint/$id");

    }

}