<?php 

class A
{
    public function show()
    {
        echo "����A�ຯ����Ҫ����B�ຯ����C�ຯ��<br/>\n";
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
        echo "����B�ຯ����Ҫ����C�ຯ��<br/>\n";
        $c = Unit::getInstance('C');
        $c->show('B');
    }
}

class C
{
    public function __construct()
    {
        echo "C����󱻴���<br/>\n";
    }
    
    public function show($parm)
    {
        echo "����C�ຯ�������ڱ�{$parm}�ຯ������<br/>\n";
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