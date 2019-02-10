<?hh

namespace Hack\UserDocumentation\Quickstart\Examples\First;

class Box<T> {
  public function __construct(private T $element) {
}

  public function get(): T {
    return $this->element;
  }
}

function get_int(): int {
  return 30;
}

function use_box(): void {
  $box = new Box(get_int());
  $i = $box->get();
  \var_dump($i);
}

use_box();
