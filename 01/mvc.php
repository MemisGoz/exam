<?php

// Model 
class UserModel {
    public function getUser($userId) {
      // Simulerer hentning af brugeroplysninger fra en database baseret på brugerens id
      $user = [
        'id' => $userId,
        'name' => 'John Doe',
        'email' => 'johndoe@example.com'
      ];
      return $user;
    }
  }
  
  // Controller 
  class UserController {
    public function showUser($userId) {
      $userModel = new UserModel();
      $user = $userModel->getUser($userId);
      
      // Visning: Sender data til visningstemplaten
      include 'view.php';
      return $user;
    }
  }


?>