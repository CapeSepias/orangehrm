<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoginService
 *
 * @author chathura
 */
class LoginService extends BaseService{
    
    public function addLogin($form = null) {
        
        $user = UserRoleManagerFactory::getUserRoleManager()->getUser();
        // Here user shouldn't be null since it's new user login.
        // But in case session data changing the request user role manager should update with new user data
        if (is_null($user)) {
            $user = UserRoleManagerFactory::getNewUserRoleManager()->getUser();
        }
        $login = new Login();
        $login->setUserId($user->getId());
        $login->setUserName($user->getName());
        $login->setUserRoleName($user->getUserRole()->getName());
        $login->setUserRolePredefined($user->getUserRole()->getIsPredefined());
                
        $login->save();        
    }
    
    public function getState() {
        return null;
    }
}
