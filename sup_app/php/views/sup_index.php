<?php

namespace view\sup_index;

function index($items)
{

?>
  <div class="sup_index">
    <div class="sup_index__inner">
      <div class="sup_index__stock">
        <h2>【在庫】</h2>
        <table class="sup_index__table">
            <tr>
              <th>更新</th>
              <th>品名</th>
              <th>メーカー</th>
              <th>価格（円）</th>
              <th>在庫数（個）</th>
              <th>内容量</th>
              <th>主な効用</th>
              <th>在庫ナシへ移動</th>
              <th>　　</th>
            </tr>
              <?php
              foreach ($items as $index => $item) {
                \lists\sup_item_list\index($item, $index);
              }
              ?>
              </ul>
          </table>
        </div>
      </div>
    </div>
  </div>
<?php
}

function stock($lack_sups)
{

?>
  <div class="sup_index">
    <div class="sup_index__inner">
      <div class="sup_index__stock">
        <h2>【不足】</h2>
        <table class="sup_index__table">
          <tr>
            <th>更新</th>
            <th>品名</th>
            <th>メーカー</th>
            <th>価格（円）</th>
            <th>在庫数（個）</th>
            <th>内容量</th>
            <th>主な効用</th>
            <th>在庫ありへ移動</th>
            <th>　　</th>
          </tr>
          <?php
          foreach ($lack_sups as $index => $lack_sup) {
            \lists\sup_item_list\index($lack_sup, $index);
          }
          ?>
          <!-- 繰り返し -->
        </table>
      </div>
    </div>
  </div>
<?php
}
