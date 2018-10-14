CREATE DATABASE `burger_db`;

USE `burger_db`;

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `street` varchar(500) NOT NULL,
  `home` int(11) NOT NULL,
  `part` varchar(20) DEFAULT NULL,
  `appt` int(11) DEFAULT NULL,
  `floor` int(11) DEFAULT NULL,
  `order_comment` varchar(1000) DEFAULT NULL,
  `need_change` tinyint(1) DEFAULT NULL,
  `card_pay` tinyint(1) DEFAULT NULL,
  `callback` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD UNIQUE KEY `orders_order_id_uindex` (`order_id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_user_id_uindex` (`user_id`),
  ADD UNIQUE KEY `users_email_uindex` (`email`);

ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;