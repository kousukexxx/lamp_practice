<!DOCTYPE>
<html lang= "ja">
  <head>
    <meta charset="utf-8">
    <title>購入明細</title>
      <?php include VIEW_PATH . 'templates/head.php'; ?>
  </head>

  <body>
  
    <?php include VIEW_PATH . 'templates/header_logined.php'; ?>
    <h1>購入明細</h1>

    <?php include VIEW_PATH. 'templates/messages.php'; ?>

    <table>
      <thead>
        <tr>
          <th>注文番号</th>
          <th>購入日時</th>
          <th>合計金額</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach($historys as $history) { ?>
        <tr>
          <td><?php print($history['history_id']); ?></th>
          <td><?php print($history['created']); ?></th>
          <td><?php print($history['total']); ?></th>
          <td>
            <form method="post" action="detail.php">
              <input type="submit" value="購入明細">
              <input type="hidden" name="history_id" value="<?php print($history['history_id']); ?>">
            </form>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>

    <table>
      <thead>
        <tr>
          <th>商品名</th>
          <th>価格</th>
          <th>購入数</th>
          <th>小計</th>
        </tr>
      </thead>
      <tbody>
      <?php if(is_admin($user)) { ?>
        <?php foreach($details_all as $detail_all) { ?>
          <tr>
            <td><?php print ($detail_all['name']); ?></td>
            <td><?php print ($detail_all['price']); ?></td>
            <td><?php print ($detail_all['amount']); ?></td>
            <td><?php print ($detail_all['subtotal']); ?></td>
          </tr>
        <?php } ?>
      <?php } else { ?>
        <?php foreach($details as $detail) { ?>
          <tr>
            <td><?php print ($detail['name']); ?></td>
            <td><?php print ($detail['price']); ?></td>
            <td><?php print ($detail['amount']); ?></td>
            <td><?php print ($detail['subtotal']); ?></td>
          </tr>
        <?php } ?>
      <?php } ?>
      </tbody>
    </table>
  </body>
</html>