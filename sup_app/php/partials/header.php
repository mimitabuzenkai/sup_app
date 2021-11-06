<?php

namespace partials\header;

use db\SupQuery;
use lib\Msg;
use model\SupModel;
use model\UserModel;

// var_dump($_SESSION);

function index()
{

?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
  </head>

  <body>
    <div class="header">
      <div class="all_width header__inner">
        <h1 class="header__logo"><a href="<?php the_url('/'); ?>">SUPAPP</a></h1>
        <nav>
          <ul class="header__ul">
            <li class="header__li"><a href="<?php the_url('status'); ?>">ステータス</a></li>
            <li class="header__li"><a href="<?php the_url('register'); ?>">新規登録</a></li>
            <li class="header__li"><a href="<?php the_url('login'); ?>">ログイン</a></li>
          </ul>
        </nav>
      </div>
    </div>
    <main>
  <?php
  Msg::flush();
}
  ?>