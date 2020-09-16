CREATE TABLE `history` (
 `history_id` int(11) NOT NULL AUTO_INCREMENT,
 `user_id` int(11) NOT NULL,
 `created` int(11) NOT NULL,
 PRIMARY KEY (`history_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `detail` (
 `history_id` int(11) NOT NULL,
 `item_id` int(11) NOT NULL,
 `amount` int(11) NOT NULL,
 `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
