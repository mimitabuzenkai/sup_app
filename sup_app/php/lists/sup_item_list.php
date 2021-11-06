<?php

namespace lists\sup_item_list;

function index($item, $index)
{

  $lack_process_url = get_url('lack_process?sup_id=' . $item->id);
  $lack_process_url = str_replace(BASE_CONTEXT_PATH, '', $lack_process_url);

  $item_delete_url = get_url('item_delete?sup_id=' . $item->id);
  $item_delete_url = str_replace(BASE_CONTEXT_PATH, '', $item_delete_url);

  $icon = $item->del_flg === 0 ? '✅' : '✅';

?>
  <?php if ($index % 2 == 0) : ?>
    <form action="<?php echo the_url('item_chenge'); ?>" method="POST">
      <tr>
        <input type="hidden" name="id" value="<?php echo $item->id; ?>">
        <td class="sup_index__input2"><button>　　更新　　</button></td>
      <td class="sup_index__input2">
        <input type="text" value="<?php echo $item->item; ?>" name="item">
      </td>
      <td class="sup_index__input2">
        <input type="text" value="<?php echo $item->maker; ?>" name="maker">
      </td>
      <td class="sup_index__input2"><input type="text" value="<?php echo $item->price; ?>" name="price"></td>
      <td class="sup_index__input2"><input type="text" value="<?php echo $item->stock; ?>" name="stock"></td>
      <td class="sup_index__input2"><input type="text" value="<?php echo $item->capacity; ?>" name="capacity"></td>
      <td class="sup_index__input2"><input type="text" value="<?php echo $item->utility; ?>" name="utility"></td>
      <td class="sup_index__input2"><a class="icon" href="<?php the_url($lack_process_url); ?>"><?php echo $icon; ?></a></td>
      <td class="sup_index__input2"><a href="<?php the_url($item_delete_url); ?>">　　削除　　</a></td>
      </tr>
    </form>
  <?php else : ?>
    <form action="<?php echo the_url('item_chenge'); ?>" method="POST">
      <tr>
        <input type="hidden" name="id" value="<?php echo $item->id; ?>">
        <td class="sup_index__input"><button>　　更新　　</button></td>
        <td class="sup_index__input"><input type="text" value="<?php echo $item->item; ?>" name="item"></td>
        <td class="sup_index__input"><input type="text" value="<?php echo $item->maker; ?>" name="maker"></td>
        <td class="sup_index__input"><input type="text" value="<?php echo $item->price; ?>" name="price"></td>
        <td class="sup_index__input"><input type="text" value="<?php echo $item->stock; ?>" name="stock"></td>
        <td class="sup_index__input"><input type="text" value="<?php echo $item->capacity; ?>" name="capacity"></td>
        <td class="sup_index__input"><input type="text" value="<?php echo $item->utility; ?>" name="utility"></td>
        <td class="sup_index__input"><a class="icon" href="<?php the_url($lack_process_url); ?>"><?php echo $icon; ?></a></td>
        <td class="sup_index__input2"><a href="<?php the_url($item_delete_url); ?>">　　削除　　</a></td>
      </tr>
    </form>
  <?php endif; ?>
<?php
}

?>