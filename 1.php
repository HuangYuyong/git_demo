<?php 

class A
{
    public function show()
    {
        echo "我是A类函数，要调用B类函数和C类函数<br/>\n";
        $b = Unit::getInstance('B');
        $b->show();
        $c = Unit::getInstance('C');
        $c->show('A');
    }
}

class B
{
    public function show()
    {
        echo "我是B类函数，要调用C类函数<br/>\n";
        $c = Unit::getInstance('C');
        $c->show('B');
    }
}

class C
{
    public function __construct()
    {
        echo "C类对象被创建<br/>\n";
    }
    
    public function show($parm)
    {
        echo "我是C类函数，现在被{$parm}类函数调用<br/>\n";
    }
}

class Unit
{
    static public function getInstance($class)
    {
        static $arr = [];
        if (!isset($arr[$class]) || !$arr[$class] instanceof $class) {
            $arr[$class] = new $class();
        }
        return $arr[$class];
    }
}

$a = new A();
$a->show();
?>