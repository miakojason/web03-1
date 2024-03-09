<?php
for ($i = 0; $i < 9; $i++) {
    $seat = serialize([$i * 2, $i * 2 + 1]);
    $sql = "INSERT INTO `orders` (`id`, `no`, `movie`, `date`, `session`, `qt`, `seats`)
                         VALUES (NULL, '20240309000{$i}', '院線片0{$i}', '2024-03-09', '14:00~16:00', '2', '{$seat}')";

echo $sql;
echo "<br>";
}
// INSERT INTO `orders` (`id`, `no`, `movie`, `date`, `session`, `qt`, `seats`) VALUES (NULL, '', '', '', '', '', '')

// INSERT INTO `orders` (`id`, `no`, `movie`, `date`, `session`, `qt`, `seats`) VALUES (NULL, '202403090000', '院線片00', '2024-03-09', '14:00~16:00', '2', 'a:2:{i:0;i:0;i:1;i:1;}');
// INSERT INTO `orders` (`id`, `no`, `movie`, `date`, `session`, `qt`, `seats`) VALUES (NULL, '202403090001', '院線片01', '2024-03-09', '14:00~16:00', '2', 'a:2:{i:0;i:2;i:1;i:3;}');
// INSERT INTO `orders` (`id`, `no`, `movie`, `date`, `session`, `qt`, `seats`) VALUES (NULL, '202403090002', '院線片02', '2024-03-09', '14:00~16:00', '2', 'a:2:{i:0;i:4;i:1;i:5;}');
// INSERT INTO `orders` (`id`, `no`, `movie`, `date`, `session`, `qt`, `seats`) VALUES (NULL, '202403090003', '院線片03', '2024-03-09', '14:00~16:00', '2', 'a:2:{i:0;i:6;i:1;i:7;}');
// INSERT INTO `orders` (`id`, `no`, `movie`, `date`, `session`, `qt`, `seats`) VALUES (NULL, '202403090004', '院線片04', '2024-03-09', '14:00~16:00', '2', 'a:2:{i:0;i:8;i:1;i:9;}');
// INSERT INTO `orders` (`id`, `no`, `movie`, `date`, `session`, `qt`, `seats`) VALUES (NULL, '202403090005', '院線片05', '2024-03-09', '14:00~16:00', '2', 'a:2:{i:0;i:10;i:1;i:11;}');
// INSERT INTO `orders` (`id`, `no`, `movie`, `date`, `session`, `qt`, `seats`) VALUES (NULL, '202403090006', '院線片06', '2024-03-09', '14:00~16:00', '2', 'a:2:{i:0;i:12;i:1;i:13;}');
// INSERT INTO `orders` (`id`, `no`, `movie`, `date`, `session`, `qt`, `seats`) VALUES (NULL, '202403090007', '院線片07', '2024-03-09', '14:00~16:00', '2', 'a:2:{i:0;i:14;i:1;i:15;}');
// INSERT INTO `orders` (`id`, `no`, `movie`, `date`, `session`, `qt`, `seats`) VALUES (NULL, '202403090008', '院線片08', '2024-03-09', '14:00~16:00', '2', 'a:2:{i:0;i:16;i:1;i:17;}');