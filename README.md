<h1>AngularJs With Php Web Services Basic CRUD</h1>

<h3><strong>Step1</strong></h3>

<blockquote>
<p>frontend/templates/admin/angularjs/js/config.js &nbsp;--&gt; $rootScope.serviceEndPoint services parameter</p>
</blockquote>

<h3>&nbsp;</h3>

<h3><strong>Step2</strong></h3>

<p><strong>Web Services Config</strong></p>

<blockquote>
<p>service/config.php --&gt; mysql&nbsp;config settings</p>
</blockquote>

<pre>
<code class="language-sql">CREATE TABLE `admin_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');


--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);
</code></pre>

<p>&nbsp;</p>

<p><img alt="" src="https://i.hizliresim.com/y3r2Pa.png" /></p>

<p><img alt="" src="https://i.hizliresim.com/6XLYZW.png" /></p>

<p><img alt="" src="https://i.hizliresim.com/WQLWVL.png" /></p>

<p><img alt="" src="https://i.hizliresim.com/3qn294.png" /></p>
