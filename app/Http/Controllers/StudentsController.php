<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class StudentsController extends Controller
{
  public function index()
  {
  	$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'http://localhost:3000',
    // You can set any number of default request options.
    'timeout'  => 2.0,
]);
$response = $client->request('GET', 'students');
$students = json_decode($response->getBody()->getContents());

     return view('students.index', compact('students'));
  }
public function show($id){
  		$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'http://localhost:3000',
    // You can set any number of default request options.
    'timeout'  => 2.0,
]);
$response = $client->request('GET', "students/{$id}");
$student = json_decode($response->getBody()->getContents());

     return view('students.show', compact('student'));
  }
  public function create(){

    $client = new Client (["base_uri" => "http://localhost:3000"]);
      $options = [
        'json' => [
        "fullname" => "manzana",
        "email" => "manzana@gmail.com"
        ]
      ]; 
    $response = $client-> post ("/students", $options);
  echo $response-> getBody ();

    // return view('students.create');

  }
}
