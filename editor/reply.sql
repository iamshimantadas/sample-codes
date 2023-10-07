
--
-- Database: `mydb1`
--

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE `reply` (
  `id` bigint(240) NOT NULL,
  `reply` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`id`, `reply`) VALUES
(1, '<p>PHP is a server side scripting language. PHP is widely used all over the internet for build web-pages and many web-applications including banking/financial, CMS (Content Management System) and others.<br />\r\nPHP known as &lsquo;hypertext pre-processor&rsquo;. It&rsquo;s mostly used for creating dynamic web-pages. It handles HTTP requests between client-side (browser) and server-side.</p>\r\n\r\n<ul>\r\n	<li><strong>How does PHP works?</strong></li>\r\n</ul>\r\n\r\n<p>PHP code generally executes on the server-side.Using PHP we can achieve many thingslike getting users form data from client-side. After rendering code on server side it sends a response as HTML text to the client-side. PHP handles each I/O requests at a time. After execution of one task it&rsquo;s moved into another in the queue. That&rsquo;s why PHP also said to &lsquo;synchronous&rsquo; nature.</p>\r\n\r\n<p><strong>Remember</strong>: a file &lsquo;.html&rsquo; can&rsquo;t containany PHP code. But a &lsquo;.php&rsquo; file can contain HTML code. All the PHP files save with an extension &lsquo;.php&rsquo; file.</p>\r\n\r\n<p>learn more:&nbsp;<a href=\"https://php.microcodes.in/index.php/basics/introduction-to-php/\">click here</a></p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reply`
--
ALTER TABLE `reply`
  MODIFY `id` bigint(240) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
