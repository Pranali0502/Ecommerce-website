<?php
namespace UnitTest\Test ;
use PHPUnit\Framework\TestCase ;

class FirstTest    extends \PHPUnit\Framework\TestCase
{
    // public function testThatStringMatch(){
        // $string1 = 'testing';
        // $string2= 'testing';
        // $string3= 'TTTesting';
        
        
        // $this->assertSame($string1 , $string2);
        // $this->assertSame($string2 , $string3);
        
        public function testTrueAssestsToTrue(){
            $condition = true ;
            $this -> assertTrue($condition);
        }



    }

