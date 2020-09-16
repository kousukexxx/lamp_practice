<?php 
require_once MODEL_PATH . 'functions.php';
require_once MODEL_PATH . 'db.php';

function get_history($db, $user_id) {
    $sql = "
    SELECT
      history.history_id,
      history.created,
      SUM(detail.price * detail.amount) AS total
    FROM
      history 
    JOIN
      detail
    ON
      history.history_id = detail.history_id
    WHERE
      user_id = ?
    GROUP BY
      history.history_id
    ";
    return fetch_all_query($db, $sql, array($user_id));
}

function get_all_history($db) {
  $sql = "
  SELECT
    history.history_id,
    history.created,
    SUM(detail.price * detail.amount) AS total
  FROM
    history 
  JOIN
    detail
  ON
    history.history_id = detail.history_id
  GROUP BY
    history.history_id
  ";
  return fetch_all_query($db, $sql);
}


function get_detail($db, $history_id) {
    $sql = "
      SELECT
        detail.price,
        detail.amount,
        (detail.price * detail.amount) AS subtotal,
        items.name
      FROM
        detail
      JOIN
        items
      ON
        detail.item_id = items.item_id
      WHERE
        history_id = ?
    ";
    return fetch_all_query($db, $sql, array($history_id));
}

function get_all_detail($db) {
    $sql = "
      SELECT
        detail.price,
        detail.amount,
        (detail.price * detail.amount) AS subtotal,
        items.name
      FROM
        detail
      JOIN
        items
      ON
        detail.item_id = items.item_id
    ";
    return fetch_all_query($db, $sql);
}