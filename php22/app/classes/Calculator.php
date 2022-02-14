<?php


namespace App\classes;


class Calculator
{
    protected $firstNumber;
    protected $lastNumber;
    protected $option;
    protected $result;
    public function __construct($post=null)
    {
        if ($post)
        {
            $this->firstNumber = $post['first_number'];
            $this->lastNumber = $post['last_number'];
            $this->option     = $post['option'];
        }
    }
    protected function  add()
    {
        $this->result = $this->firstNumber + $this->lastNumber;
        return $this->result;
    }
    protected function sub()
    {
        $this->result =$this->firstNumber - $this->lastNumber;
        return $this->result;
    }
    protected function mul()
    {
        $this->result =$this->firstNumber * $this->lastNumber;
        return $this->result;
    }
    protected function div()
    {
        $this->result =$this->firstNumber / $this->lastNumber;
        return $this->result;
    }
    protected function mod()
    {
        $this->result =$this->firstNumber % $this->lastNumber;
        return $this->result;
    }
    public function index()
    {
       switch ($this->option)
       {
           case '+' :
               $this->result = $this->add();
               break;

           case '-' :
               $this->result =$this->sub();
               break;

           case '*' :
               $this->result = $this->mul();
               break;

           case '/' :
               $this->result = $this->div();
               break;

           case '%' :
               $this->result = $this->mod();
               break;
       }
      // echo $this->result;
      return $this->result;
    }
}