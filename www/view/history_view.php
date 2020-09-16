<!DOCTYPE html>
<html lang="ja">
<head>
  <title>購入履歴</title>
  <?php include VIEW_PATH . 'templates/head.php'; ?>
  </head>
<body>
<?php include VIEW_PATH . 'templates/header_logined.php'; ?>
  <h1>購入履歴</h1>

    <?php include VIEW_PATH . 'templates/messages.php'; ?>

    <?php if(!empty($historys)){ ?>
      <table>
        <thead>
           <tr>
             <th>注文番号</th>
             <th>購入日時</th>
             <th>合計金額</th>
          </tr>
        <thead>
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
        <?php } ?>
    <?php } else { ?>
    <p>購入履歴がありません</P>
    <?php } ?>
</body>
</html>