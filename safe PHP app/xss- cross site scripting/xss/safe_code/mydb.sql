
--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE `table1` (
  `id` bigint(240) NOT NULL,
  `name` varchar(240) NOT NULL,
  `username` varchar(240) NOT NULL,
  `passd` varchar(240) NOT NULL
);

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`id`, `name`, `username`, `passd`) VALUES
(1, '&lt;script&gt;alert(&quot;Hello! I am an alert box!!&quot;);&lt;/script&gt;', 'hacker', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table1`
--
ALTER TABLE `table1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table1`
--
ALTER TABLE `table1`
  MODIFY `id` bigint(240) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
