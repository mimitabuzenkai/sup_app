<?php

namespace view\status;

function index($sups)
{
?>
ステータス
<div class="sup_index">
    <div class="sup_index__inner">
      <div class="sup_index__stock">
        <h2>【詳細情報】</h2>
        <table class="sup_index__table">
            <tr>
              <th>品名</th>
              <th>購入回数</th>
              <th>合計課金額</th>
            </tr>
              <?php
              foreach($sups as $sup) {

                \lists\status_item_list\index($sup);
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
?>