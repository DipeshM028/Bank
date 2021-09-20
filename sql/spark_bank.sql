SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Shreyas', 'shreyas@gmail.com', 50000),
(2, 'Satyam', 'Satyam@gmail.com', 30000),
(3, 'Kritika', 'kritika@gmail.com', 40000),
(4, 'harshit', 'harshitraj@gmail.com', 50000),
(5, 'Shoham', 'shoham@gmail.com', 40000),
(6, 'Hrithik', 'Hrithik@gmail.com', 30000),
(7, 'Deep', 'deep@gmail.com', 50000),
(8, 'neha', 'neha@gmail.com', 40000),
(9, 'Ninja', 'hattori@gmail.com', 30000),
(10, 'Parth', 'parth@gmail.com', 50000);


ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);



  ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT;



  ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;
