<?php

namespace lists\status_item_list;

function index($sup)
{

  // $lack_process_url = get_url('lack_process?sup_id=' . $item->id);
  // $lack_process_url = str_replace(BASE_CONTEXT_PATH, '', $lack_process_url);

  // $item_delete_url = get_url('item_delete?sup_id=' . $item->id);
  // $item_delete_url = str_replace(BASE_CONTEXT_PATH, '', $item_delete_url);

  // $icon = $item->del_flg === 0 ? '✅' : '✅';

?>
    <form action="<?php echo the_url('item_chenge'); ?>" method="POST">
      <tr>
        <input type="hidden" name="id" value="<?php echo $sup->id; ?>">
        <td class="sup_index__input"><input type="text" value="<?php echo $sup->item; ?>" name="item"></td>
        <td class="sup_index__input"><input type="text" value="<?php echo $sup->purchase; ?>" name="purchase"></td>
        <td class="sup_index__input"><input type="text" value="<?php echo $sup->total_billing_amount; ?>" name="purchase"></td>
      </tr>
    </form>
<?php
}

?>