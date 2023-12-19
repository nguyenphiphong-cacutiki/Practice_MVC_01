-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 19, 2023 lúc 05:37 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `practice_mvc_01`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `describes` text NOT NULL,
  `import` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`id`, `name`, `describes`, `import`) VALUES
(1, 'Chauna torquata', 'Supplement R Great Saphenous with Nonaut Sub, Open Approach', '2023-10-04'),
(2, 'Felis silvestris lybica', 'Revision of Infusion Device in Lum Jt, Extern Approach', '2023-08-06'),
(3, 'Gyps fulvus', 'Fluoroscopy of Splenic Arteries using Other Contrast', '2023-01-15'),
(4, 'Larus sp.', 'Inspection of Lumbosacral Disc, Perc Endo Approach', '2023-09-01'),
(5, 'Phoca vitulina', 'Removal of Drain Dev from L Shoulder Jt, Perc Endo Approach', '2023-10-08'),
(6, 'Philetairus socius', 'Bypass Stomach to Duodenum, Open Approach', '2023-05-06'),
(7, 'Axis axis', 'Excision of Minor Salivary Gland, Percutaneous Approach', '2023-09-13'),
(8, 'Ammospermophilus nelsoni', 'HDR Brachytherapy of Oropharynx using Californium 252', '2023-03-09'),
(9, 'Platalea leucordia', 'HDR Brachytherapy of Bone Marrow using Iridium 192', '2023-05-06'),
(10, 'unavailable', 'Bypass Right Fallopian Tube to Uterus, Open Approach', '2023-12-12'),
(11, 'Geochelone elegans', 'Occlusion of Right Cephalic Vein, Open Approach', '2023-10-15'),
(12, 'Varanus komodensis', 'Extirpation of Matter from Right Carpal, Perc Approach', '2023-02-19'),
(13, 'Theropithecus gelada', 'Resection of Mesenteric Lymphatic, Perc Endo Approach', '2023-05-25'),
(14, 'Graspus graspus', 'Dilation of R Peroneal Art, Bifurc, Perc Endo Approach', '2023-05-27'),
(15, 'Varanus albigularis', 'Release Left Innominate Vein, Percutaneous Approach', '2023-04-23'),
(16, 'Rhea americana', 'Replacement of Innom Art with Synth Sub, Perc Endo Approach', '2023-06-25'),
(17, 'Tayassu tajacu', 'Drainage of Left Fallopian Tube, Via Opening, Diagn', '2023-02-28'),
(18, 'Picoides pubescens', 'Release Lesser Omentum, Percutaneous Endoscopic Approach', '2023-02-01'),
(19, 'Felis caracal', 'Transfuse Autol Red Blood Cells in Central Vein, Open', '2023-09-11'),
(20, 'Tamandua tetradactyla', 'Reposition Stomach, Endo', '2023-05-17'),
(21, 'Hystrix cristata', 'Revision of Int Fix in R Ulna, Perc Endo Approach', '2023-12-06'),
(22, 'Rhea americana', 'Bypass Innominate Artery to R Low Leg Art, Open Approach', '2023-08-07'),
(23, 'Carphophis sp.', 'Removal of Ext Fix from R Ulna, Perc Endo Approach', '2023-06-26'),
(24, 'Eremophila alpestris', 'Supplement Left Acetabulum with Autol Sub, Perc Approach', '2023-03-30'),
(25, 'Orcinus orca', 'Resection of Head Lymphatic, Perc Endo Approach', '2023-05-21'),
(26, 'Speothos vanaticus', 'Restrict L Ext Jugular Vein w Intralum Dev, Open', '2023-07-14'),
(27, 'Petaurus norfolcensis', 'Removal of Spacer from Right Knee Joint, Open Approach', '2023-10-20'),
(28, 'Herpestes javanicus', 'Reposition Left Thorax Muscle, Perc Endo Approach', '2023-03-14'),
(29, 'Halcyon smyrnesis', 'Insertion of Ext Fix into R Tarsal, Open Approach', '2023-04-08'),
(30, 'Chamaelo sp.', 'Removal of Infusion Device from Penis, Endo', '2023-12-03'),
(31, 'Lemur fulvus', 'Extirpation of Matter from Gastric Artery, Open Approach', '2023-05-24'),
(32, 'Aegypius tracheliotus', 'Hepatobiliary System and Pancreas, Drainage', '2023-08-15'),
(33, 'Chelodina longicollis', 'Bypass Left Subclavian Artery to R Up Arm Art, Open Approach', '2023-08-06'),
(34, 'Coluber constrictor', 'Insertion of Infusion Dev into Splenic Vein, Open Approach', '2023-01-05'),
(35, 'Kobus leche robertsi', 'Removal of Drainage Device from Hepatobiliary Duct, Endo', '2023-10-27'),
(36, 'Cervus canadensis', 'Removal of Infusion Device from T-lum Disc, Open Approach', '2023-08-03'),
(37, 'Anastomus oscitans', 'Revision of Intralum Dev in Great Vessel, Open Approach', '2023-10-26'),
(38, 'Varanus sp.', 'Revision of Nonaut Sub in Mouth/Throat, Perc Approach', '2023-04-07'),
(39, 'Alcelaphus buselaphus caama', 'Removal of Radioact Elem from L Low Extrem, Perc Approach', '2023-11-24'),
(40, 'Geospiza sp.', 'Dilate R Thyroid Art, Bifurc, w 4+ Intralum Dev, Open', '2023-05-22'),
(41, 'Felis silvestris lybica', 'Coord/Dexterity Trmt Musculosk Up Back/UE w Prosthesis', '2023-06-29'),
(42, 'Chlamydosaurus kingii', 'Replace of L Ethmoid Bone with Autol Sub, Perc Endo Approach', '2023-08-02'),
(43, 'Spermophilus armatus', 'Excision of Sacrococcygeal Joint, Perc Approach, Diagn', '2023-03-31'),
(44, 'Fratercula corniculata', 'Excision of Right Lower Lobe Bronchus, Open Approach', '2023-07-31'),
(45, 'Eudyptula minor', 'Ultrasonography of Single Coronary Artery, Transesophageal', '2023-12-11'),
(46, 'Paradoxurus hermaphroditus', 'LDR Brachytherapy of Ureter using Iridium 192', '2023-02-04'),
(47, 'Merops bullockoides', 'Fusion Lum Jt w Intbd Fus Dev, Post Appr A Col, Open', '2023-12-11'),
(48, 'Actophilornis africanus', 'Release Right Ureter, Endo', '2023-05-30'),
(49, 'Macropus robustus', 'Fusion of R Shoulder Jt with Autol Sub, Perc Endo Approach', '2023-09-27'),
(50, 'Centrocercus urophasianus', 'Resection of Right Vocal Cord, Open Approach', '2023-07-28'),
(51, 'Canis aureus', 'Insertion of Monitor Dev into L Ventricle, Perc Approach', '2023-01-22'),
(52, 'Rhea americana', 'Reposition Inferior Mesenteric Vein, Percutaneous Approach', '2023-09-10'),
(53, 'Uraeginthus granatina', 'Drainage of Ileum, Endo', '2023-11-20'),
(54, 'Phascogale calura', 'Supplement Esophageal Vein with Nonaut Sub, Open Approach', '2023-08-11'),
(55, 'Cygnus buccinator', 'Fluoroscopy of Left Lower Extremity Veins using Oth Contrast', '2023-05-27'),
(56, 'Aonyx capensis', 'Restriction of Duodenum with Intralum Dev, Via Opening', '2023-01-05'),
(57, 'Pseudalopex gymnocercus', 'Destruction of Right Tympanic Membrane, Perc Approach', '2023-01-20'),
(58, 'Felis concolor', 'Bypass R Com Iliac Art to R Femor A w Nonaut Sub, Perc Endo', '2023-11-13'),
(59, 'Amphibolurus barbatus', 'Bypass Descend Colon to Sigm Colon w Autol Sub, Perc Endo', '2023-04-22'),
(60, 'Manouria emys', 'Extirpate matter from L Temporal Art, Bifurc, Perc', '2023-10-19'),
(61, 'Leptoptilus dubius', 'Extirpation of Matter from R Com Carotid, Perc Approach', '2023-11-30'),
(62, 'Papio ursinus', 'Bypass R Radial Art to Low Arm Vein w Nonaut Sub, Open', '2023-10-20'),
(63, 'Hystrix indica', 'Excision of Right Finger Phalanx, Perc Approach, Diagn', '2023-05-17'),
(64, 'Geospiza sp.', 'Planar Nucl Med Imag of Pelvic Lymph using Technetium 99m', '2023-03-28'),
(65, 'Struthio camelus', 'Irrigation of Genitourinary Tract using Irrigat, Endo, Diagn', '2023-03-24'),
(66, 'Manouria emys', 'Drainage of Bi Carotid Body with Drain Dev, Perc Approach', '2023-06-02'),
(67, 'Pelecans onocratalus', 'Restriction of Portal Vein with Extralum Dev, Perc Approach', '2023-05-21'),
(68, 'Bucephala clangula', 'Removal of Other Device from GU Tract, Via Opening', '2023-05-28'),
(69, 'Myrmecobius fasciatus', 'Repair R Hand Subcu/Fascia, Open Approach', '2023-05-14'),
(70, 'Neophoca cinerea', 'CT Scan of Larynx using H Osm Contrast, Unenh, Enhance', '2023-12-03'),
(71, 'Choriotis kori', 'Insert Radioact Elem in L Inguinal Region, Perc Endo', '2023-08-04'),
(72, 'Larus fuliginosus', 'Release Splenic Artery, Open Approach', '2023-10-28'),
(73, 'Tursiops truncatus', 'Fluoroscopy of Other Veins using Low Osmolar Contrast', '2023-02-26'),
(74, 'Loxodonta africana', 'Repair Right Temporal Artery, Percutaneous Approach', '2023-10-08'),
(75, 'Chordeiles minor', 'Occlusion of L Sperm Cord with Intralum Dev, Perc Approach', '2023-09-14'),
(76, 'Spermophilus richardsonii', 'Psychological Tests, Developmental', '2023-01-21'),
(77, 'Carphophis sp.', 'Repair Sigmoid Colon, Endo', '2023-08-04'),
(78, 'Coendou prehensilis', 'Transfusion of Autol Globulin into Periph Art, Perc Approach', '2023-06-26'),
(79, 'Trichosurus vulpecula', 'Insert Infusion Dev in R Pleural Cav, Perc Endo', '2023-06-11'),
(80, 'Upupa epops', 'PET Imag of Myocardium using Rubidium 82', '2023-03-22'),
(81, 'Chordeiles minor', 'Dilate R Ulnar Art, Bifurc, w 2 Intralum Dev, Perc Endo', '2023-10-17'),
(82, 'Isoodon obesulus', 'Drainage of Left Sphenoid Sinus, Open Approach', '2023-03-04'),
(83, 'Gopherus agassizii', 'Insert of Intralum Dev into L Cephalic Vein, Perc Approach', '2023-09-05'),
(84, 'Felis pardalis', 'Tomo Nucl Med Imag of Myocardium using Thallium 201', '2023-11-22'),
(85, 'Phalacrocorax niger', 'Drainage of L Thorax Bursa/Lig with Drain Dev, Perc Approach', '2023-06-25'),
(86, 'Platalea leucordia', 'Bypass Cecum to Trans Colon w Nonaut Sub, Perc Endo', '2023-10-02'),
(87, 'Terathopius ecaudatus', 'Remove Infusion Dev from Prostate/Seminal Ves, Extern', '2023-05-04'),
(88, 'Phalacrocorax carbo', 'Release Right Retina, Percutaneous Approach', '2023-02-26'),
(89, 'Macaca fuscata', 'Drainage of Right Testis, Percutaneous Approach', '2023-07-07'),
(90, 'Streptopelia decipiens', 'Division of Head and Neck Bursa and Ligament, Open Approach', '2023-07-06'),
(91, 'Eolophus roseicapillus', 'Revision of Ext Heart Assist in Heart, Perc Approach', '2023-03-16'),
(92, 'Coluber constrictor', 'Bypass Gallbladder to Cystic Duct, Perc Endo Approach', '2023-07-28'),
(93, 'unavailable', 'Drainage of Upper Gingiva, Percutaneous Approach', '2022-12-20'),
(94, 'Falco peregrinus', 'Dilate L Int Iliac Art w 4+ Intralum Dev, Open', '2023-08-30'),
(95, 'Oryx gazella callotis', 'Bypass L Int Iliac Art to R Int Ilia w Synth Sub, Perc Endo', '2023-07-18'),
(96, 'Panthera leo', 'Dilate L Int Carotid, Bifurc, w 3 Drug-elut, Perc Endo', '2023-07-21'),
(97, 'Rhabdomys pumilio', 'Occlusion of Superior Mesenteric Artery, Open Approach', '2023-05-25'),
(98, 'Sylvicapra grimma', 'Bypass Trans Colon to Desc Colon w Synth Sub, Open', '2023-10-07'),
(99, 'Boa constrictor mexicana', 'Fusion Lumsac Jt w Intbd Fus Dev, Post Appr A Col, Open', '2023-10-09'),
(100, 'Thamnolaea cinnmomeiventris', 'Plain Radiography of Bilateral Orbits', '2023-12-07'),
(102, 'Yêu được không', 'đường xa lá rơi đón mùa thu', '2023-12-10');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
