<?php

class userTest extends \PHPUnit\Framework\TestCase{
    protected $user;
    public function testSignUpandLogin(){
        $this->user = new \App\user;

        $this->user->signUp(017,123,"Rubaiyet Hossain","Mohammadpur");

        $this->assertEquals($this->user->login(017,123),True);
    }
}

?>