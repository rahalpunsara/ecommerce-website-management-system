


-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE `products` (
  `productID` varchar(20) NOT NULL PRIMARY KEY,
  `product` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--------------------------------------------------------------------------------------------------------

--
-- Dumping data for table `Products`
--

INSERT INTO `products`(`productID`, `product`, `description`, `price`) VALUES ('p15', 'Stigmata', 'Limited Edition of Stigmata Saints In White T-Shirt. This design will NOT be in print again. Contact us to place your order.', 'Rs.2500');
INSERT INTO `products`(`productID`, `product`, `description`, `price`) VALUES ('p2', 'SH3HARA', 'Dragon T-Shirts are back in stock from Black. Place your order soon.', 'Rs.2500');
INSERT INTO `products`(`productID`, `product`, `description`, `price`) VALUES ('p3', 'Sacrament', 'Sacrament - Rest In Chaos limited edition T-shirts now available. Worldwide Shipping. You can purchase the T-Shirts from Black Heaven.', 'Rs.2500');
INSERT INTO `products`(`productID`, `product`, `description`, `price`) VALUES ('p4', 'Dhishti', 'Dhishti Severn Serpent -Black color T-Shirt is now available', 'Rs.2500');
INSERT INTO `products`(`productID`, `product`, `description`, `price`) VALUES ('p5', 'Nefertem', 'Eucharistical Blasphemy album launch T-Shirt is out now. Get your goodie ASAP.', 'Rs.2500');
INSERT INTO `products`(`productID`, `product`, `description`, `price`) VALUES ('p6', 'Dhishti', 'Sooryawansha Kaala Sajjhayana White color T-Shirt is now available', 'Rs.2500');
INSERT INTO `products`(`productID`, `product`, `description`, `price`) VALUES ('p7', 'Paranoid Earthling', 'Limited Edition of Stigmata Saints In White T-Shirt. This design will NOT be in print again. Contact us to place your order.', 'Rs.2500');
INSERT INTO `products`(`productID`, `product`, `description`, `price`) VALUES ('p8', 'Dhishti', 'Rest In Chaos limited edition T-shirts now available. Worldwide Shipping. You can purchase the T-Shirts from Black Heaven.', 'Rs.2500');
INSERT INTO `products`(`productID`, `product`, `description`, `price`) VALUES ('p9', 'Unholy Sermon', 'T-Shirts are back in stock from Black. Place your order soon.', 'Rs.2500');
INSERT INTO `products`(`productID`, `product`, `description`, `price`) VALUES ('p10', 'Nefertem', 'Nefertem Rest In Chaos limited edition', 'Rs.2500');
INSERT INTO `products`(`productID`, `product`, `description`, `price`) VALUES ('p11', 'Soorya Ashta', 'Parikrama will be releasing new merch to celebrate the return of Independence Rock. With a message that each and every Rocker needs to give out to the world !!', 'Rs.2500');
INSERT INTO `products`(`productID`, `product`, `description`, `price`) VALUES ('p12', 'Maranaya', 'Shehara Dragon T-Shirts are back in stock from Black. Place your order soon.', 'Rs.2500');
INSERT INTO `products`(`productID`, `product`, `description`, `price`) VALUES ('p13', 'Konflict', 'Subjugation 1 & 2 (CD). Culmination of a collaboration between two of the most visceral forces in today extreme black metal/grind music scene. Featuring Sri Lankan cyber grind terrorists Konflict and the legendary Ryan Deathlord Förster on guitars and bass.', 'Rs.2500');
INSERT INTO `products`(`productID`, `product`, `description`, `price`) VALUES ('p14', 'Genecide Shrines', 'SCORN COALESCENCE (CD) ප්‍රහාරය ලාංකිකයන් අතර බෙදා හැරීමේ දැනුම්දීමයි! පලවන ඇනවුම් 20ට සීමිතයි. මෙය වලංගු වන්නේ ජූලි 14වනදාතෙක් පමණයි. අප ලග තිබෙන්නේ සීමිත පිටපත් සංඛ්‍යාවක් පමනක් බැවින් කිසිඳු වෙන් කර තබා ගැනීමක් සිදු කල නොහැකි බව කරුණාවෙන් දන්වා සිටිමු.', 'Rs.2500');
-- --------------------------------------------------------


--Create new table for users
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(20) NOT NULL PRIMARY KEY,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin', 'supplier') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `password`, `role`) VALUES (1, 'admin', 'admin123', 'admin');
INSERT INTO `users` (`userID`, `username`, `password`, `role`) VALUES (2, 'user', 'user123', 'user');
INSERT INTO `users` (`userID`, `username`, `password`, `role`) VALUES (3, 'supplier', 'supplier123', 'supplier');


