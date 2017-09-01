<?php
/**
 * Created by PhpStorm.
 * User: Markus
 * Date: 29-08-2017
 * Time: 12:11
 */


class Controller
{
    private $users;

    private function setUsers($users)
    {
        $this->users = $users;
    }

    public function getUsers()
    {
        return $this->users;
    }
    public function __construct()
    {
        $User1 = new User(1, 'Hejsae', 'Password11', null, null);
        $User2 = new User(2, 'Jeffjeff', 'Password12', null, null);
        $User3 = new User(3, 'OliverOli', 'Password13', null, null);
        $User4 = new User(4, 'MarleneMM', 'Password14', null, null);
        $User5 = new User(5, 'SusanneSS', 'Password15', null, null);

        $users = array($User1, $User2, $User3, $User4, $User5);
        $this->setUsers($users);
    }

}