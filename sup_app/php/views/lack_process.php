<?php
namespace view\lack_process;

function index($items) {

?>
<div class="sup_index">
  <div class="sup_index__inner">
    <div class="sup_index__stock">
      <h2>【不足】</h2>
      <table class="sup_index__table">
        <tr>
          <th>品名</th>
          <th>メーカー</th>
          <th>価格</th>
          <th>在庫数（個）</th>
          <th>内容量</th>
          <th>主な効用</th>
        </tr>
        <?php
        foreach($items as $item) {
  
          \lists\lack_item_list\index($item);
        }
        ?>
        <!-- 繰り返し -->
      </table>
    </div>
  </div>
</div>
<?php
}

