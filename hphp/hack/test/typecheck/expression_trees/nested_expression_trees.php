<?hh

<<file:__EnableUnstableFeatures('expression_trees')>>

final class Code {
  const type TAst = mixed;
  // Simple literals.
  public function intLiteral(int $_): this::TAst {
    throw new Exception();
  }

  public function splice(mixed $_): this::TAst {
    throw new Exception();
  }
}

function test(): void {
  Code`__splice__(Code`4`)`;
}
