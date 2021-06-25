CREATE DATABASE wordpress DEFAULT CHARACTER SET utf8 collate utf8_unicode_ci;
GRANT ALL ON wordpress.* TO 'user42'@'slescure.42.fr' IDENTIFIED BY 'password';
FLUSH PRIVILEGES;
