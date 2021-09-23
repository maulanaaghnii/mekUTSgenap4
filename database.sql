/* Database dan Tabel */

create database tamuHotel_db;


use tamuHotel_db;

CREATE TABLE `users` (
 `id` int(11) NOT NULL auto_increment,
 `kontak_tamu` varchar(20),
 `nama_tamu` varchar(50),
 `no_kamar` varchar(20),
 PRIMARY KEY (`id`)
);

