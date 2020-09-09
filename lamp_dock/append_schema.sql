CREATE TABLE `history` (
 `history_id` int(11) NOT NULL AUTO_INCREMENT,
 `user_id` int(11) NOT NULL,
 `create_datetime` int(11) NOT NULL,
 PRIMARY KEY (`history_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `detail` (
 `detail_id` int(11) DEFAULT NULL,
 `item_id` int(11) NOT NULL,
 `cart_id` int(11) NOT NULL,
 `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
