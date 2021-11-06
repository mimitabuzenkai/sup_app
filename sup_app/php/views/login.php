<?php
namespace view\login;

function index() {

?>
<div class="sup_insert">
  <div class="sup_insert__inner">
    <div class="sup_insert__content">
      <form action="<?php echo CURRENT_URI; ?>" method="POST">
        <div class="sup_insert__item">
          <label for="">NAME</label>
          <input type="text" name="id">
        </div>
        <div class="sup_insert__item">
          <label for="">PASSWORD</label>
          <input type="text" name="pwd">
        </div>
        <button class="login__button">
          LOGIN
        </button>
      </form>
    </div>
  </div>
</div>

<?php
}
?>