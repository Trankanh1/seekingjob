<?php
namespace App\Http\Servives;

use \App\Http\Repositories\UserRepository;

class UserService {

    protected $_userRepository = null;

    function __constructor()
    {
        $this->_userRepository = new UserRepository();
    }

    public function login($input)
    {
        $result = $this->_userRepository->findUser($input);

        return $result ? true : false;
    }

    public function signUp()
    { 
        $this->_userRepository->createUser();
    }


}
?>