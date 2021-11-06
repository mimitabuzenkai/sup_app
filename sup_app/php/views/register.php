<?php
namespace view\register;

function index() {

?>
<div class="register">
  <div class="register__inner">
    <div class="register__content">
      <form action="" method="POST">
        <div class="register__item">
          <label for="item">NAME</label>
          <input type="text" name="id">
        </div>
        <div class="register__item">
          <label for="">PASSWORD</label>
          <input type="text" name="pwd">
        </div>
        <button class="register__button">
          新規登録
        </button>
      </form>
    </div>
  </div>
</div>
<?php
}
?>