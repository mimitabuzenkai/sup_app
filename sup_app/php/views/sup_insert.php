<?php
namespace view\sup_insert;

function index($sups) {

?>
<div class="sup_insert">
  <div class="sup_insert__inner">
    <div class="sup_insert__content">
      <form action="<?php echo CURRENT_URI; ?>" method="POST">
        <div class="sup_insert__item">
          <label for="item">商品名</label>
          <input type="text" name="item">
        </div>
        <div class="sup_insert__item">
          <label for="">メーカー</label>
          <input type="text" name="maker">
        </div>
        <div class="sup_insert__item">
          <label for="">価格</label>
          <input type="text" name="price">
        </div>
        <div class="sup_insert__item">
          <label for="">内容量</label>
          <input type="text" name="capacity">
        </div>
        <div class="sup_insert__item">
          <label for="">在庫</label>
          <input type="text" name="stock">
        </div>
        <div class="sup_insert__item">
          <label for="">主な効用</label>
          <input type="text" name="utility">
        </div>
        <button class="sup_insert__button">
          サプリメントを登録する
        </button>
      </form>
    </div>
  </div>
</div>
<?php
}

function stock() {

  \view\sup_insert\index();
  ?>

  <?php
}
?>