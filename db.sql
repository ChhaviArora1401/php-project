CREATE TABLE `food_customer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `food_customer`
  ADD PRIMARY KEY (`id`);
  
ALTER TABLE `food_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

  INSERT INTO `food_customer` (`id`, `name`, `email`, `password`, `phone`, `address`) VALUES
(1, 'cafe', 'cafe@gmail.com', 'sunrisecafe', '1234567890', 'Pitampura, New Delhi, Delhi-110034');



CREATE TABLE `food_items` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `description` varchar(200) NOT NULL,
  `images` varchar(200) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'ENABLE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `food_items`
  ADD PRIMARY KEY (`id`);
  
ALTER TABLE `food_items`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

  INSERT INTO `food_items` (`id`, `name`, `price`, `description`, `images`, `status`) VALUES
(58, 'Masala Paneer Kathi Roll', 100, 'Yammi Masala Paneer Kathi Roll loaded with Masala Paneer chunks, onion & Mayo.', 'Masala_Paneer_Kathi_Roll.jpg', 'ENABLE'),
(59, 'Waffle', 90, 'Freshly Baked Crispy Belgian Waffle with Home Made Nutella & & crushed nuts served with Vanilla Ice Cream.', 'waffle.jpg', 'ENABLE'),
(60, 'Chocolate Hazelnut Truffle', 199, 'This very delicious chocolate hazelnut truffle.', 'Chocolate_Hazelnut_Truffle.jpg', 'ENABLE'),
(61, 'Choco Chip Shake', 97, 'Choco Chip Shake - a perfect party sweet treat.', 'Happy_Happy_Choco_Chip_Shake.jpg', 'ENABLE'),
(62, 'Spring Rolls', 55, 'Delicious Spring Rolls', 'spring_roll.jpg', 'ENABLE'),
(63, 'Deluxe Thali', 77, 'Deluxe Thali is accompanied by Kattapa Biriyani, Devasena Paratha, Bhalladeva Patiala Lassi', 'Baahubali_Thali.jpg', 'ENABLE'),
(65, 'Coffee', 35, 'concentrated coffee made by forcing pressurized water through finely ground coffee beans.', 'coffee.jpg', 'ENABLE'),
(66, 'Tea', 66, 'The simple elixir of tea is of our natural world.', 'tea.jpg', 'DISABLE'),
(67, 'Paneer Pakora', 44, 'Tasty paneer pakora', 'paneer pakora.jpg', 'ENABLE'),
(68, 'Samosa', 55, 'Masala Samosa..', 'samosa.jpg', 'ENABLE'),
(69, 'Puff', 33, 'Vegetable Puff, a snack with crisp-n-flaky outer layer and mixed vegetables stuffing', 'puff.jpg', 'ENABLE'),
(70, 'Pizza', 123, 'Good and Tasty Pizza', 'Pizza.jpg', 'DISABLE'),
(71, 'French Fries', 220, 'Pure Veg and Tasty.', 'frenchfries.jpg', 'DISABLE'),
(72, 'Pakora', 213, 'Pure Vegetable and Tasty.', 'Pakora.jpg', 'DISABLE'),
(73, 'Churros', 100, 'Crispy churros layered with milk, white and dark chocolate.', 'Churros.jpg', 'ENABLE'),
(74, 'cookies n cream', 150, 'smooth creamy and rich texture', 'oreoicecream.jpg', 'ENABLE'),
(75, 'Singapore-style Noodles', 190, 'healthy vegetarian noodles with white button mushrooms along with some carrots and capsicum', 'singapuri.jfif', 'ENABLE'),
(76, 'Pasta', 190, 'Spicy tomato sauce with fresh garden vegetables', 'pasta.jpg', 'ENABLE'),
(77, 'Garlic Bread', 150, 'Enriched with our authentic secret garlic spread, herbs and hot melting Mozzarella cheese', 'garlic.jpg', 'ENABLE'),
(78, 'Brownie', 80, 'Gooey fudgey chocolatey goodness', 'brownie.jpg', 'ENABLE');





CREATE TABLE `food_orders` (
  `id` int(30) NOT NULL,
  `item_id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `quantity` int(30) NOT NULL,
  `order_date` date NOT NULL,
  `order_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `food_orders`
  ADD PRIMARY KEY (`id`);
  
ALTER TABLE `food_orders`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

INSERT INTO `food_orders` (`id`, `item_id`, `name`, `price`, `quantity`, `order_date`, `order_id`) VALUES
(5, 60, 'Chocolate Hazelnut Truffle', 99, 1, '2021-03-19', '605008512657435925'),
(6, 61, 'Choco Chip Shake', 80, 1, '2021-03-19', '605008512657435925'),
(7, 63, 'Deluxe Thali', 75, 1, '2021-03-19', '605008512657435925'),
(8, 59, 'Grilled Fish', 90, 1, '2021-03-19', '102263523585917743');