<?hh // strict

interface Rx {}

class A {
  <<__RxLocal, __OnlyRxIfImpl(Rx::class)>>
  public function f(): void {
    // ERROR
    echo 1;
  }
}
