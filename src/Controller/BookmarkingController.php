<?php

namespace Drupal\bookmarking\Controller;

use Drupal\Core\Controller\ControllerBase;


class BookmarkingController extends ControllerBase {

  public function content($node, $uid) {
    $user = \Drupal\user\Entity\User::load($uid);
    $user->field_user_bookmark[] = ['target_id' => $node];
    $user->save();
    return $this->redirect('user.page');
  }
}