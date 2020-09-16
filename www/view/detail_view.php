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
        <?php if(is_admin($user)) { ?>
          <?php foreach($historys_all as $history_all) { ?>
            <tr>
              <td><?php print ($history_all['history_id']); ?></td>
              <td><?php print ($history_all['created']); ?></td>
              <td><?php print ($history_all['total']); ?></td>
              <td>
                <a href="detail.php?history_id=<?php print $history_all['history_id'];?>">購入明細</a>
              </td>
              </tr>
          <?php } ?>
        <?php } else if(is_admin($user) === false) { ?> 
        <?php foreach($historys as $history) { ?>
          <tr>
            <td><?php print ($history['history_id']); ?></td>
            <td><?php print ($history['created']); ?></td>
            <td><?php print ($history['total']); ?></td>
            <td>
              <a href="detail.php?history_id=<?php print $history['history_id'];?>">購入明細</a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
        <?php } else { ?>
    <p>購入履歴がありません</P>
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
        <?php foreach($details as $detail) { ?>
          <tr>
            <td><?php print ($detail['name']); ?></td>
            <td><?php print ($detail['price']); ?></td>
            <td><?php print ($detail['amount']); ?></td>
            <td><?php print ($detail['subtotal']); ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </body>
</html>