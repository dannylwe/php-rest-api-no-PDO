CREATE TABLE `biodata` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `nama` varchar(65) NOT NULL,
    `kelas` varchar(35) NOT NULL,
    `alamat` varchar(105) NOT NULL,
    `jurusan` varchar(65) NOT NULL,
    `pangkat` varchar(35) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=25;
