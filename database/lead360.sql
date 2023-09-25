-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2022 at 02:22 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lead360`
--

-- --------------------------------------------------------

--
-- Table structure for table `advert`
--

CREATE TABLE `advert` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advert`
--

INSERT INTO `advert` (`id`, `title`, `description`, `image`, `created`) VALUES
(3, 'we now sell bit coin', '&lt;div class=&quot;user-panel mt-3 pb-3 mb-3 d-flex&quot; style=&quot;border-bottom: 1px solid rgb(79, 89, 98); background-color: rgb(52, 58, 64);&quot;&gt;&lt;div class=&quot;image&quot;&gt;&lt;img src=&quot;http://localhost/lead360/lead360_Admin/uploads/6248487813adc5.54916529.jpg&quot; class=&quot;img-circle elevation-2&quot; alt=&quot;User Image&quot;&gt;&lt;/div&gt;&lt;div class=&quot;info&quot; style=&quot;transition: margin-left 0.3s linear 0s, opacity 0.3s ease 0s, visibility 0.3s ease 0s;&quot;&gt;&lt;a href=&quot;http://localhost/lead360/lead360_Admin/add_advert.php#&quot; class=&quot;d-block&quot; style=&quot;color: rgb(194, 199, 208);&quot;&gt;idahjohnpaul&lt;/a&gt;&lt;/div&gt;&lt;/div&gt;&lt;nav class=&quot;mt-2&quot; style=&quot;background-color: rgb(52, 58, 64);&quot;&gt;&lt;ul class=&quot;nav nav-pills nav-sidebar flex-column&quot; data-widget=&quot;treeview&quot; role=&quot;menu&quot; data-accordion=&quot;false&quot; style=&quot;overflow: visible;&quot;&gt;&lt;li class=&quot;nav-item menu-open&quot;&gt;&lt;a href=&quot;http://localhost/lead360/lead360_Admin/index.php&quot; class=&quot;nav-link&quot; style=&quot;color: rgb(255, 255, 255); background-color: rgba(255, 255, 255, 0.1); width: calc(250px - 1rem); transition: width 0.3s ease-in-out 0s;&quot;&gt;&lt;span class=&quot;nav-icon fas fa-tachometer-alt&quot;&gt;&lt;/span&gt;&amp;nbsp;&lt;p style=&quot;transition: margin-left 0.3s linear 0s, opacity 0.3s ease 0s, visibility 0.3s ease 0s;&quot;&gt;Dashboard&lt;/p&gt;&lt;/a&gt;&lt;/li&gt;&lt;li class=&quot;nav-item&quot;&gt;&lt;a href=&quot;http://localhost/lead360/lead360_Admin/add_advert.php#&quot; class=&quot;nav-link&quot; style=&quot;color: rgb(194, 199, 208); width: calc(250px - 1rem); transition: width 0.3s ease-in-out 0s;&quot;&gt;&lt;span class=&quot;nav-icon fas fa-copy&quot;&gt;&lt;/span&gt;&amp;nbsp;&lt;p style=&quot;transition: margin-left 0.3s linear 0s, opacity 0.3s ease 0s, visibility 0.3s ease 0s;&quot;&gt;Category&lt;span class=&quot;fas fa-angle-left right&quot;&gt;&lt;/span&gt;&lt;/p&gt;&lt;/a&gt;&lt;/li&gt;&lt;li class=&quot;nav-item&quot;&gt;&lt;a href=&quot;http://localhost/lead360/lead360_Admin/add_advert.php#&quot; class=&quot;nav-link&quot; style=&quot;color: rgb(255, 255, 255); background-color: rgba(255, 255, 255, 0.1); width: calc(250px - 1rem); transition: width 0.3s ease-in-out 0s;&quot;&gt;&lt;span class=&quot;nav-icon fas fa-user&quot;&gt;&lt;/span&gt;&amp;nbsp;&lt;p style=&quot;transition: margin-left 0.3s linear 0s, opacity 0.3s ease 0s, visibility 0.3s ease 0s;&quot;&gt;Accounts&lt;/p&gt;&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;&lt;/nav&gt;                                   \r\n                                  ', '62508c43177335.99117592.jpg', '2022-04-08 21:25:55');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(255) DEFAULT NULL,
  `creator` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`, `creator`, `img`, `created`) VALUES
(1, 'Sport', 'idahjohnpaul', NULL, '2022-04-02 00:00:00'),
(2, 'Culture', 'idahjohnpaul', NULL, '2022-04-02 00:00:00'),
(3, 'Entertainment', 'idahjohnpaul', NULL, '2022-04-02 00:00:00'),
(4, 'music', 'idahjohnpaul', NULL, '2022-04-02 00:00:00'),
(5, 'Health', 'admin', '6250c9797b9674.59245051.jpg', '2022-04-09 00:00:00'),
(6, 'Foriegn', 'admin', '626011c030c8d6.71569351.jpg', '2022-04-20 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `comment_table`
--

CREATE TABLE `comment_table` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `comment` text,
  `post_id` int(20) DEFAULT NULL,
  `comment_time` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment_table`
--

INSERT INTO `comment_table` (`id`, `full_name`, `email`, `comment`, `post_id`, `comment_time`) VALUES
(1, 'john', 'idahjohnpaul@gmail.co', 'wow this is really wonderful you dey wyn?', 2, '0000-00-00 00:00:00'),
(2, 'john paul', 'a@gma.com', 'oh no now why this by this time', 2, '08-April-2022:22-09-22'),
(3, 'john paul', 'a@gma.com', 'oh no now why this by this time', 2, '08 April 2022 : 22-10-40'),
(4, 'john paul', 'a@gma.com', 'oh no now why this by this time', 2, '08 April 2022 -22-11-16 PM'),
(5, 'john paul', 'a@gma.com', 'oh no now why this by this time', 2, '08 April 2022 22-11-52 PM'),
(6, 'john', 'idahjohnpaul@gmail.com', 'wow', 4, '23 April 2022 18-18-15 PM');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `cat_id` int(20) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `summary` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `cat_id`, `author`, `description`, `image`, `created_on`, `summary`) VALUES
(2, 'nigeria won', 1, 'john', '&lt;div class=&quot;user-panel mt-3 pb-3 mb-3 d-flex&quot; style=&quot;border-bottom: 1px solid rgb(79, 89, 98); background-color: rgb(52, 58, 64);&quot;&gt;&lt;div class=&quot;image&quot;&gt;&lt;img src=&quot;http://localhost/lead360/lead360_Admin/uploads/6248487813adc5.54916529.jpg&quot; class=&quot;img-circle elevation-2&quot; alt=&quot;User Image&quot;&gt;&lt;/div&gt;&lt;div class=&quot;info&quot; style=&quot;transition: margin-left 0.3s linear 0s, opacity 0.3s ease 0s, visibility 0.3s ease 0s;&quot;&gt;&lt;a href=&quot;http://localhost/lead360/lead360_Admin/add_post.php#&quot; class=&quot;d-block&quot; style=&quot;color: rgb(194, 199, 208);&quot;&gt;idahjohnpaul&lt;/a&gt;&lt;/div&gt;&lt;/div&gt;&lt;nav class=&quot;mt-2&quot; style=&quot;background-color: rgb(52, 58, 64);&quot;&gt;&lt;ul class=&quot;nav nav-pills nav-sidebar flex-column&quot; data-widget=&quot;treeview&quot; role=&quot;menu&quot; data-accordion=&quot;false&quot;&gt;&lt;li class=&quot;nav-item menu-open&quot;&gt;&lt;a href=&quot;http://localhost/lead360/lead360_Admin/index.php&quot; class=&quot;nav-link&quot; style=&quot;color: rgb(255, 255, 255); background-color: rgba(255, 255, 255, 0.1); width: calc(250px - 1rem); transition: width 0.3s ease-in-out 0s;&quot;&gt;&lt;span class=&quot;nav-icon fas fa-tachometer-alt&quot;&gt;&lt;/span&gt;&amp;nbsp;&lt;p style=&quot;transition: margin-left 0.3s linear 0s, opacity 0.3s ease 0s, visibility 0.3s ease 0s;&quot;&gt;Dashboard&lt;/p&gt;&lt;/a&gt;&lt;/li&gt;&lt;li class=&quot;nav-item&quot;&gt;&lt;a href=&quot;http://localhost/lead360/lead360_Admin/add_post.php#&quot; class=&quot;nav-link&quot; style=&quot;color: rgb(194, 199, 208); width: calc(250px - 1rem); transition: width 0.3s ease-in-out 0s;&quot;&gt;&lt;span class=&quot;nav-icon fas fa-copy&quot;&gt;&lt;/span&gt;&amp;nbsp;&lt;p style=&quot;transition: margin-left 0.3s linear 0s, opacity 0.3s ease 0s, visibility 0.3s ease 0s;&quot;&gt;Category&lt;span class=&quot;fas fa-angle-left right&quot;&gt;&lt;/span&gt;&lt;/p&gt;&lt;/a&gt;&lt;/li&gt;&lt;li class=&quot;nav-item&quot;&gt;&lt;a href=&quot;http://localhost/lead360/lead360_Admin/add_post.php#&quot; class=&quot;nav-link&quot; style=&quot;color: rgb(194, 199, 208); width: calc(250px - 1rem); transition: width 0.3s ease-in-out 0s;&quot;&gt;&lt;span class=&quot;nav-icon fas fa-user&quot;&gt;&lt;/span&gt;&amp;nbsp;&lt;p style=&quot;transition: margin-left 0.3s linear 0s, opacity 0.3s ease 0s, visibility 0.3s ease 0s;&quot;&gt;Accounts&lt;span class=&quot;fas fa-angle-left right&quot;&gt;&lt;/span&gt;&lt;/p&gt;&lt;/a&gt;&lt;/li&gt;&lt;li class=&quot;nav-item&quot;&gt;&lt;a href=&quot;http://localhost/lead360/lead360_Admin/add_post.php#&quot; class=&quot;nav-link&quot; style=&quot;color: rgb(194, 199, 208); width: calc(250px - 1rem); transition: width 0.3s ease-in-out 0s;&quot;&gt;&lt;span class=&quot;nav-icon fas fa-paste&quot;&gt;&lt;/span&gt;&amp;nbsp;&lt;p style=&quot;transition: margin-left 0.3s linear 0s, opacity 0.3s ease 0s, visibility 0.3s ease 0s;&quot;&gt;Posts&lt;span class=&quot;right fas fa-angle-left&quot;&gt;&lt;/span&gt;&lt;/p&gt;&lt;/a&gt;&lt;/li&gt;&lt;li class=&quot;nav-item&quot;&gt;&lt;a href=&quot;http://localhost/lead360/lead360_Admin/add_post.php#&quot; class=&quot;nav-link&quot; style=&quot;color: rgb(194, 199, 208); width: calc(250px - 1rem); transition: width 0.3s ease-in-out 0s;&quot;&gt;&lt;span class=&quot;nav-icon fas fa-chart-pie&quot;&gt;&lt;/span&gt;&amp;nbsp;&lt;p style=&quot;transition: margin-left 0.3s linear 0s, opacity 0.3s ease 0s, visibility 0.3s ease 0s;&quot;&gt;Slider&lt;span class=&quot;right fas fa-angle-left&quot;&gt;&lt;/span&gt;&lt;/p&gt;&lt;/a&gt;&lt;/li&gt;&lt;li class=&quot;nav-item&quot;&gt;&lt;a href=&quot;http://localhost/lead360/lead360_Admin/add_post.php#&quot; class=&quot;nav-link&quot; style=&quot;color: rgb(194, 199, 208); width: calc(250px - 1rem); transition: width 0.3s ease-in-out 0s;&quot;&gt;&lt;span class=&quot;nav-icon fas fa-chart-pie&quot;&gt;&lt;/span&gt;&amp;nbsp;&lt;p style=&quot;transition: margin-left 0.3s linear 0s, opacity 0.3s ease 0s, visibility 0.3s ease 0s;&quot;&gt;Adverts&lt;/p&gt;&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;&lt;/nav&gt;                                   \r\n                                  ', '6248589b54e996.35140036.jpg', '2022-04-02 16:07:23', 'due to the fact that the presidential election is coming soon we will be...'),
(4, 'god to plannnnn', 1, 'john andy', '&lt;div class=&quot;card-header&quot; style=&quot;background-color: rgb(0, 123, 255); color: rgb(255, 255, 255);&quot;&gt;&lt;h3 class=&quot;card-title&quot;&gt;Add Post&lt;/h3&gt;&lt;/div&gt;&lt;form method=&quot;post&quot; enctype=&quot;multipart/form-data&quot;&gt;&lt;div class=&quot;card-body&quot;&gt;&lt;div class=&quot;row&quot;&gt;&lt;div class=&quot;form-group col-md-7&quot; style=&quot;width: 450.469px; flex-basis: 58.3333%; max-width: 58.3333%;&quot;&gt;&lt;label for=&quot;exampleInputEmail1&quot;&gt;Post Title&lt;/label&gt;&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;exampleInputEmail1&quot; name=&quot;title&quot; placeholder=&quot;Enter post title here...&quot; style=&quot;width: 435.469px;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;form-group col-md-5&quot; style=&quot;width: 321.766px; flex-basis: 41.6667%; max-width: 41.6667%;&quot;&gt;&lt;label for=&quot;exampleInputPassword1&quot;&gt;Category&lt;/label&gt;&lt;select type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;exampleInputPassword1&quot; name=&quot;category&quot; style=&quot;width: 306.766px;&quot;&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&lt;option value=&quot;&quot;&gt;...&lt;/option&gt;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&lt;option value=&quot;1&quot;&gt;Sport&lt;/option&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&lt;option value=&quot;2&quot;&gt;Culture&lt;/option&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&lt;option value=&quot;3&quot;&gt;Entertainment&lt;/option&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&lt;option value=&quot;4&quot;&gt;music&lt;/option&gt;&amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&lt;/select&gt;&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;form-group&quot;&gt;&lt;label for=&quot;exampleInputEmail1&quot;&gt;Author&lt;/label&gt;&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;exampleInputEmail1&quot; name=&quot;author&quot; placeholder=&quot;Enter Name of Author&quot; style=&quot;width: 757.25px;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;custom-file mt-3&quot; style=&quot;width: 757.25px;&quot;&gt;&lt;input type=&quot;file&quot; name=&quot;image&quot; class=&quot;custom-file-input&quot; id=&quot;customFile&quot; style=&quot;width: 757.25px;&quot;&gt;&lt;label class=&quot;custom-file-label&quot; for=&quot;customFile&quot;&gt;Choose file&lt;/label&gt;&lt;/div&gt;&lt;div class=&quot;form-group mt-3&quot;&gt;&lt;label for=&quot;exampleInputEmail1&quot;&gt;News Summary&lt;/label&gt;&lt;/div&gt;&lt;/div&gt;&lt;/form&gt;                                   \r\n                                  ', '62509853514b93.47574620.jpg', '2022-04-08 22:17:23', 'due to the fact that the presidential election is coming soon we will be...');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `slider_title` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `news_summary` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slider_title`, `category`, `author`, `image`, `created_on`, `news_summary`) VALUES
(1, 'Election coming soon as everyone prepares', 'Culture', 'adeyemi Odun', '62484eecd1b009.62384908.jpg', '2022-04-02 15:26:04', 'due to the fact that the presidential election is coming soon we will be annou...'),
(2, 'welcome to lead360 home page', 'Entertainment', 'john andy', '62485c40904885.54482497.jpg', '2022-04-02 16:22:56', 'due to the fact that the presidential election is coming soon we will be annou...');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `created` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `username`, `phone`, `password`, `img`, `created`) VALUES
(2, 'idahjohnpaul@gmail.com', 'idahjohnpaul', '09090344667', '827ccb0eea8a706c4c34a16891f84e7b', '6248487813adc5.54916529.jpg', '2022-04-02'),
(3, 'admin@admin.com', 'admin', '09090344667', '5f4dcc3b5aa765d61d8327deb882cf99', '625097d9317668.45774369.jpg', '2022-04-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advert`
--
ALTER TABLE `advert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment_table`
--
ALTER TABLE `comment_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advert`
--
ALTER TABLE `advert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comment_table`
--
ALTER TABLE `comment_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
