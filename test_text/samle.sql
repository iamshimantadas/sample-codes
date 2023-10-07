
--
-- Database: `texttest`
--

-- --------------------------------------------------------

--
-- Table structure for table `samle`
--

CREATE TABLE `samle` (
  `id` bigint(250) NOT NULL,
  `para` mediumtext NOT NULL
);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `samle`
--
ALTER TABLE `samle`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `samle`
--
ALTER TABLE `samle`
  MODIFY `id` bigint(250) NOT NULL AUTO_INCREMENT;
