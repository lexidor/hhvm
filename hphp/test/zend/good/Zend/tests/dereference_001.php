<?hh

function a() {
    return array(1,array(5));
}

function b() {
    return array();
}

class foo {
    public $y = 1;

    public function test() {
        return array(array(array('foobar')));
    }
}

function c() {
    return array(new foo);
}

function d() {
    $obj = new foo;
    return $obj->test();
}

function e() {
    $y = 'bar';
    $x = array('a' => 'foo', 'b' => $y);
    return $x;
}

<<__EntryPoint>> function main(): void {
error_reporting(E_ALL);
var_dump(a()[1][0]); // int(5)
try { var_dump(b()[0]); } catch (Exception $e) { echo $e->getMessage()."\n"; }
var_dump(c()[0]->y); // int(1)
var_dump(d()[0][0][0][3]); // string(1) "b"
var_dump(e()['b']); // string(3) "bar"
}
