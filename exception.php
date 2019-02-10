<?hh

interface User { public function getName(): string; }

// There are many ways to handle null values.
// Throwing an exception is one of them.

class Student implements User {

  public function __construct(
    private string $name,
    private string $school
  ) {}
	
	public function getName(): string {
		return $this->name;
	}
}

function get_user_name(?User $user): string {

  if($user === null) {
    throw new RuntimeException('Invalid user name');
  }
  return $user->getName();
}

function test(User $user) {
  $name = get_user_name($user);
	var_dump($name);
}

$student = new Student("Duy Ha", "MIT");
test($student);
test(null);
