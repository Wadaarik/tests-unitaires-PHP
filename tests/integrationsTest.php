<?php

require_once 'vendor/autoload.php';

class IntegrationsTest extends IntegrationTestCase{
    //public function test_index(){
      //  $name = 'John';
        //Creer la request get http
        //$response = $this->make_request("GET", "/hello.php?name=$name");
        //attend une réponse 200
       // $this->assertEquals(200, $response->getStatusCode());
        //$this->assertEquals("<h2>Hello $name</h2>", $response->getBody()->getContents());
        //$this->assertContains("text/html", $response->getHeader('Content-Type')[0]);
    //}

    /**
     * @dataProvider provider
     */

    public function test_hello($name){
        $name = 'John';
        //Creer la request get http
        $response = $this->make_request("GET", "/hello.php?name=$name");
        //attend une réponse 200
        $this->assertEquals(200, $response->getStatusCode());
        //Si le body contient Hello + un nom du provider
        $this->assertEquals("<h2>Hello $name</h2>", $response->getBody()->getContents());
        //Check une string
        $this->assertContains("text/html", $response->getHeader('Content-Type')[0]);
    }
    public function provider(){
        return [
            ["John"],
            ["Remy"],
            ["Cindy"],
        ];
    }
}