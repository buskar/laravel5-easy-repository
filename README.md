# laravel5-easy-repository
repository routine for laravel 5

# example

```php
interface ProfileInterface
{

    public function find($id, $columns = array('*'));

    public function findBy($attribute, $value, $columns = array('*'));

    public function create(array $data, User $user);

    public function update(array $data, $attr, $attribute = "id");
    
    public function delete($id);

}
```

```php
class ProfileRepository extends EasyRepository implements ProfileInterface {

    use RepositoryFind, RepositoryFindBy, RepositoryUpdate, RepositoryDelete;

    public function create(array $data, User $user) {
        $profile = new $this->model($data);
        $profile->user_id = $user->id;
        $profile->save();
        return $profile;
    }

    public function model() {
        return \App\Domain\Profile\Profile::class;
    }

}
```
