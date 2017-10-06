###################
codeigniter-login-logout-register
###################

A user login, logout, register start for Codeigniter 3

*******************
Notice
*******************

Codeigniter has not evolved as fast as modern php and php best practices.
It has become a very old framework, and I advise against using it, even for beginners.

**************************
Installation
**************************

Open /application/config/database.php and edit with your database settings
On your database, open a SQL terminal paste this and execute:

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


For Dummy user

INSERT INTO `member` (`id`, `firstName`, `lastName`, `email`, `password`, `created`) VALUES
(1, 'Fouzia', 'Chowdhury', 'fouabc@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2017-10-06')

*******************
Usage
*******************

It is just a starter for user login logout register functionalities.

Extend the user controller or keep it as it is and write your own application with Codeigniter.
