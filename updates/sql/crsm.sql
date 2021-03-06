-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           5.7.24 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Listage des données de la table notilac.waka_crsm_clients : ~9 rows (environ)
/*!40000 ALTER TABLE `waka_crsm_clients` DISABLE KEYS */;
INSERT INTO `waka_crsm_clients` (`id`, `name`, `slug`, `sector_id`, `cloudi_ready`, `primary_color`, `secondary_color`, `description`, `nb_collab`, `address`, `cp`, `city`, `tel`, `email`, `country_id`, `is_ex`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 'London', 'london', 14, 0, '#D04437', NULL, NULL, NULL, '861 Enim Rd.', '90680', 'Shikarpur', '95557039', NULL, 74, 1, NULL, '2020-02-22 11:30:52', '2020-03-25 20:55:53'),
	(2, 'FHYSIQ', 'fhysiq', 6, 0, '#18012D', NULL, NULL, NULL, 'P.O. Box 218, 6340 Non, Street', '23412', 'Klagenfurt', '5353645', NULL, 74, 1, NULL, '2020-02-22 11:30:56', '2020-03-25 21:13:02'),
	(3, 'Isle_royale.png', 'isle-royale', 14, 0, '#033162', NULL, NULL, NULL, 'P.O. Box 613, 8584 Vel Ave', '66745', 'San Massimo', '55214051', NULL, 74, 1, NULL, '2020-02-22 11:30:59', '2020-03-25 21:12:24'),
	(4, 'Jungle', 'jungle', 10, 0, '#004C54', '#F94D2A', NULL, NULL, '882-9640 Diam Street', '78485', 'Capestrano', '19635118', NULL, 74, 1, NULL, '2020-02-22 11:31:15', '2020-03-25 21:12:05'),
	(5, 'Rapid', 'rapid', 17, 0, '#181066', '#0FC9F5', NULL, NULL, 'P.O. Box 847, 3407 Quisque Ave', '34982', 'Valledupar', '74289367', NULL, 74, 1, NULL, '2020-02-22 11:31:17', '2020-03-25 20:50:19'),
	(6, 'Alligator', 'alligator', 11, 0, '#456D00', NULL, NULL, NULL, '138-7014 Volutpat. Rd.', '18314', 'Mathura', '30457241', NULL, 74, 1, NULL, '2020-02-22 11:31:19', '2020-03-25 21:13:14'),
	(7, 'Goose_bakery', 'goose-bakery', 2, 0, '#312539', '#E29E48', NULL, NULL, '279-2233 Tellus Avenue', '00322', 'Buner', '785325', NULL, 74, 1, NULL, '2020-02-22 11:31:21', '2020-03-25 21:12:46'),
	(8, 'Synro', 'synro', 5, 0, '#F93122', '#292939', NULL, NULL, 'P.O. Box 430, 2988 Ante Rd.', '40849', 'Hamilton', '80069598', NULL, 74, 1, NULL, '2020-02-22 11:31:26', '2020-03-18 13:35:56'),
	(9, 'Immob', 'immob', 7, 0, '#8d2535', '#dca4ac', NULL, 75, '763-5092 Nascetur St.', '27791', 'Sangju', '75787343', NULL, 74, 1, NULL, '2020-02-22 11:31:28', '2020-05-01 16:48:09');
/*!40000 ALTER TABLE `waka_crsm_clients` ENABLE KEYS */;

-- Listage des données de la table notilac.waka_crsm_contacts : ~46 rows (environ)
/*!40000 ALTER TABLE `waka_crsm_contacts` DISABLE KEYS */;
INSERT INTO `waka_crsm_contacts` (`id`, `name`, `surname`, `email`, `tel`, `tel_perso`, `key`, `client_id`, `content_linkedin`, `content_email`, `content_word`, `content_lp`, `is_ex`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 'Steve', 'Wolf', 'inc@inc.com', NULL, NULL, 'YYtshfd9T4ZO1bC', 1, NULL, NULL, NULL, NULL, 1, NULL, '2020-02-22 11:31:30', '2020-02-22 11:31:30'),
	(2, 'Elif', 'Kamesoglu', 'inc@inc.com', NULL, NULL, 'bdDtDUZDcDo6jhn', 2, NULL, NULL, NULL, NULL, 1, NULL, '2020-02-22 11:31:30', '2020-02-22 11:31:30'),
	(3, 'Humginder', 'Sons', 'inc@inc.com', NULL, NULL, 'ynrExbFcb87ydw7', 3, NULL, NULL, NULL, NULL, 1, NULL, '2020-02-22 11:31:30', '2020-02-22 11:31:30'),
	(4, 'Milos', 'Djuric', 'inc@inc.com', NULL, NULL, 'Yyv5tIXGt8gaQim', 4, NULL, NULL, NULL, NULL, 1, NULL, '2020-02-22 11:31:30', '2020-02-22 11:31:30'),
	(5, 'Gurvinder', 'Deividas', 'inc@inc.com', NULL, NULL, 'OrjGyecCX27SI5r', 5, NULL, NULL, NULL, NULL, 1, NULL, '2020-02-22 11:31:30', '2020-02-22 11:31:30'),
	(6, 'Rilla', 'Logo', 'inc@inc.com', NULL, NULL, 'CTjMM4KZyCAvv5p', 6, NULL, NULL, NULL, NULL, 1, NULL, '2020-02-22 11:31:30', '2020-02-22 11:31:30'),
	(7, 'Badr', 'Edd (logorilla)', 'inc@inc.com', NULL, NULL, 'BRMK46RzR8M8FSk', 7, NULL, NULL, NULL, NULL, 1, NULL, '2020-02-22 11:31:30', '2020-02-22 11:31:30'),
	(8, 'Dimitri', 'Lepisov', 'inc@inc.com', NULL, NULL, 'BtITjmpKAAFvXGq', 8, NULL, NULL, NULL, NULL, 1, NULL, '2020-02-22 11:31:31', '2020-02-22 11:31:31'),
	(9, 'Pavlov', 'Plakhotia', 'inc@inc.com', NULL, NULL, 'LwzENkudsrq00S4', 9, NULL, NULL, NULL, NULL, 1, NULL, '2020-02-22 11:31:31', '2020-02-22 11:31:31'),
	(10, 'Joshua', 'Haynes', 'in@nibhlaciniaorci.net', NULL, NULL, 'SFHAekZZZuqiVWS', 3, NULL, NULL, NULL, NULL, 1, NULL, '2020-02-22 11:31:31', '2020-02-22 11:31:31'),
	(11, 'Georgia', 'Sweeney', 'a.magna@nuncinterdum.ca', NULL, NULL, 'I84ANgtNS4mUA1O', 6, NULL, NULL, NULL, NULL, 1, NULL, '2020-02-22 11:31:31', '2020-02-22 11:31:31'),
	(12, 'September', 'Cameron', 'eu.ligula.Aenean@venenatis.ca', NULL, NULL, 'q22sAYAb4eJOD9a', 1, NULL, NULL, NULL, NULL, 1, NULL, '2020-02-22 11:31:31', '2020-02-22 11:31:31'),
	(13, 'Ann', 'Allison', 'sit@non.edu', NULL, NULL, '91bRO5ttPkXkQe7', 7, NULL, NULL, NULL, NULL, 1, NULL, '2020-02-22 11:31:31', '2020-02-22 11:31:31'),
	(14, 'Maris', 'Reed', 'diam.dictum.sapien@purus.co.uk', NULL, NULL, 'QF1mpznlMIbkS2z', 3, NULL, NULL, NULL, NULL, 1, NULL, '2020-02-22 11:31:31', '2020-02-22 11:31:31'),
	(15, 'Thaddeus', 'Chang', 'arcu@semperpretiumneque.org', NULL, NULL, 'wyv9wkiEvk0tH2o', 4, NULL, NULL, NULL, NULL, 1, NULL, '2020-02-22 11:31:31', '2020-02-22 11:31:31'),
	(16, 'Zeus', 'Zimmerman', 'arcu.Vestibulum.ut@utcursusluctus.edu', NULL, NULL, 'hUjbwIc0d4Igo60', 8, NULL, NULL, NULL, NULL, 1, NULL, '2020-02-22 11:31:31', '2020-02-22 11:31:31'),
	(17, 'Emmanuel', 'Owen', 'eu@inconsequat.co.uk', NULL, NULL, 'Qi7NZ5Z6RB0umht', 2, NULL, NULL, NULL, NULL, 1, NULL, '2020-02-22 11:31:31', '2020-02-22 11:31:31'),
	(18, 'Uriel', 'Gould', 'magna@egetvariusultrices.ca', NULL, NULL, 'zbmkb42SI2rNqxm', 8, NULL, NULL, NULL, NULL, 1, NULL, '2020-02-22 11:31:31', '2020-02-22 11:31:31'),
	(19, 'Rajah', 'Webster', 'ut.cursus@ligula.com', NULL, NULL, 'HZ683FxZlvVICDV', 4, NULL, NULL, NULL, NULL, 1, NULL, '2020-02-22 11:31:31', '2020-02-22 11:31:31'),
	(20, 'Geraldine', 'Baldwin', 'Fusce.aliquam@semper.org', NULL, NULL, 'JQT9phVPhy9LLjU', 6, NULL, NULL, NULL, NULL, 1, NULL, '2020-02-22 11:31:31', '2020-02-22 11:31:31'),
	(21, 'Julie', 'Odom', 'accumsan.sed.facilisis@Vivamusnonlorem.ca', NULL, NULL, 'YE9YQUqW4zTjd1S', 9, NULL, NULL, NULL, NULL, 1, NULL, '2020-02-22 11:31:31', '2020-02-22 11:31:31'),
	(22, 'Keefe', 'Adams', 'Sed.id.risus@id.org', NULL, NULL, 'iz5Yu2hfe83Uz1w', 2, NULL, NULL, NULL, NULL, 1, NULL, '2020-02-22 11:31:31', '2020-02-22 11:31:31'),
	(23, 'Tamara', 'Greene', 'Nullam.scelerisque@diamPellentesque.edu', NULL, NULL, 'ZqwtQDHZEYl3qHB', 8, NULL, NULL, NULL, NULL, 1, NULL, '2020-02-22 11:31:31', '2020-02-22 11:31:31'),
	(24, 'Stephanie', 'Beck', 'faucibus@scelerisquescelerisquedui.org', NULL, NULL, 'utzo19FhCP4ygWT', 9, NULL, NULL, NULL, NULL, 1, NULL, '2020-02-22 11:31:31', '2020-02-22 11:31:31'),
	(25, 'Emi', 'Valencia', 'ligula@placerataugueSed.com', NULL, NULL, 'zvW3akCtiMK7gFU', 1, NULL, NULL, NULL, NULL, 1, NULL, '2020-02-22 11:31:31', '2020-02-22 11:31:31'),
	(26, 'Travis', 'Frank', 'mattis.semper.dui@Donectempuslorem.net', NULL, NULL, 'GUqeRcngRZle91R', 8, NULL, NULL, NULL, NULL, 1, NULL, '2020-02-22 11:31:31', '2020-02-22 11:31:31'),
	(27, 'Upton', 'Cannon', 'augue@arcuVestibulum.com', NULL, NULL, 'xp5FgcbYox3nTN0', 8, NULL, NULL, NULL, NULL, 1, NULL, '2020-02-22 11:31:31', '2020-02-22 11:31:31'),
	(28, 'Chadwick', 'Hensley', 'sociis.natoque.penatibus@famesacturpis.net', NULL, NULL, 'XA1trP8s6Q9iHgd', 4, NULL, NULL, NULL, NULL, 1, NULL, '2020-02-22 11:31:31', '2020-02-22 11:31:31'),
	(29, 'Noble', 'Sexton', 'a.malesuada@vitaesemper.ca', NULL, NULL, 'yR2S7I7bkOjlKuE', 2, NULL, NULL, NULL, NULL, 1, NULL, '2020-02-22 11:31:31', '2020-02-22 11:31:31'),
	(30, 'Gage', 'Mayer', 'felis.Nulla@consectetuermaurisid.ca', NULL, NULL, 'EhEVrH3jRwRhyQQ', 4, NULL, NULL, NULL, NULL, 1, NULL, '2020-02-22 11:31:31', '2020-02-22 11:31:31'),
	(31, 'Duncan', 'Dickson', 'risus.Morbi.metus@Fuscefeugiat.ca', NULL, NULL, '6mwisGFmIHZSaf2', 3, NULL, NULL, NULL, NULL, 1, NULL, '2020-02-22 11:31:32', '2020-02-22 11:31:32'),
	(32, 'Elvis', 'Steele', 'pharetra@ullamcorper.net', NULL, NULL, 'ZCwg21f7nEp7AmD', 9, NULL, NULL, NULL, NULL, 1, NULL, '2020-02-22 11:31:32', '2020-02-22 11:31:32'),
	(33, 'Patrick', 'Woods', 'erat.eget@Aliquamgravidamauris.org', NULL, NULL, '9pxCEv0oCNI8M2n', 1, NULL, NULL, NULL, NULL, 1, NULL, '2020-02-22 11:31:32', '2020-02-22 11:31:32'),
	(34, 'Tarik', 'Mcintosh', 'massa.Suspendisse@Aliquam.edu', NULL, NULL, 'P663Cf3fpaF5rRK', 8, NULL, NULL, NULL, NULL, 1, NULL, '2020-02-22 11:31:32', '2020-02-22 11:31:32'),
	(35, 'Gray', 'Henry', 'volutpat.nunc@dolorQuisquetincidunt.com', NULL, NULL, '8WpRQpGVEx1pgAJ', 4, NULL, NULL, NULL, NULL, 1, NULL, '2020-02-22 11:31:32', '2020-02-22 11:31:32'),
	(36, 'Martin', 'Sweet', 'commodo@Craseget.com', NULL, NULL, 'FAXUe2HlshUP0Ge', 3, NULL, NULL, NULL, NULL, 1, NULL, '2020-02-22 11:31:32', '2020-02-22 11:31:32'),
	(37, 'Signe', 'Small', 'diam.lorem@purus.com', NULL, NULL, '02XVeHCrBdCSRXO', 1, NULL, NULL, NULL, NULL, 1, NULL, '2020-02-22 11:31:32', '2020-02-22 11:31:32'),
	(38, 'Chantale', 'Dudley', 'est.mauris.rhoncus@libero.edu', NULL, NULL, '926RzlPPwqusRWq', 3, NULL, NULL, NULL, NULL, 1, NULL, '2020-02-22 11:31:32', '2020-02-22 11:31:32'),
	(39, 'Garrison', 'Garrison', 'est.Nunc@et.co.uk', NULL, NULL, 'PIc3h6AlVik6BXK', 5, NULL, NULL, NULL, NULL, 1, NULL, '2020-02-22 11:31:32', '2020-02-22 11:31:32'),
	(40, 'Harper', 'Rollins', 'Nam@sedsapien.ca', NULL, NULL, 'zaYxD2PpSiG5lvT', 6, NULL, NULL, NULL, NULL, 1, NULL, '2020-02-22 11:31:32', '2020-02-22 11:31:32'),
	(41, 'Chaim', 'Osborn', 'est.tempor@Nuncac.net', NULL, NULL, 'HmQE1ag27jTEOAN', 9, NULL, NULL, NULL, NULL, 1, NULL, '2020-02-22 11:31:32', '2020-02-22 11:31:32'),
	(42, 'Carolyn', 'Fuentes', 'elit.sed@risus.org', NULL, NULL, 'UmSdXuwVX93M9bc', 8, NULL, NULL, NULL, NULL, 1, NULL, '2020-02-22 11:31:32', '2020-02-22 11:31:32'),
	(43, 'test', 'Charles Saint-Olive', 'charles.stolive@gmail.com', NULL, NULL, 'l0O2dXBu8Ih8Ofn', 10, NULL, NULL, NULL, NULL, 1, '2020-03-27 14:31:04', '2020-03-27 14:26:03', '2020-03-27 14:31:04'),
	(44, 'Charles Saint-Olive', 'Charles Saint-Olive', 'charles.stolive@gmail.com', NULL, NULL, 'H8GwEBflh7dgeG8', 10, NULL, NULL, NULL, NULL, 1, '2020-03-27 14:36:26', '2020-03-27 14:35:58', '2020-03-27 14:36:26'),
	(45, 'qsdqsdqd', 'qdsqsd', 'qsdqsdqsd', NULL, NULL, 'jjixJzXGeFwrCgH', 10, NULL, NULL, NULL, NULL, 1, '2020-03-27 14:36:26', '2020-03-27 14:36:12', '2020-03-27 14:36:26'),
	(46, 'Charles Saint-Olive', 'Charles Saint-Olive', 'charles.stolive@gmail.com', NULL, NULL, 'ze7kpDwQtPsCfwU', 10, NULL, NULL, NULL, NULL, 1, NULL, '2020-03-27 14:39:23', '2020-03-27 14:39:23');
/*!40000 ALTER TABLE `waka_crsm_contacts` ENABLE KEYS */;

-- Listage des données de la table notilac.waka_crsm_countries : ~241 rows (environ)
/*!40000 ALTER TABLE `waka_crsm_countries` DISABLE KEYS */;
INSERT INTO `waka_crsm_countries` (`id`, `code`, `name`) VALUES
	(1, 'AF', 'Afghanistan'),
	(2, 'AL', 'Albania'),
	(3, 'DZ', 'Algeria'),
	(4, 'AS', 'American Samoa'),
	(5, 'AD', 'Andorra'),
	(6, 'AO', 'Angola'),
	(7, 'AI', 'Anguilla'),
	(8, 'AQ', 'Antarctica'),
	(9, 'AG', 'Antigua And Barbuda'),
	(10, 'AR', 'Argentina'),
	(11, 'AM', 'Armenia'),
	(12, 'AW', 'Aruba'),
	(13, 'AU', 'Australia'),
	(14, 'AT', 'Austria'),
	(15, 'AZ', 'Azerbaijan'),
	(16, 'BS', 'Bahamas'),
	(17, 'BH', 'Bahrain'),
	(18, 'BD', 'Bangladesh'),
	(19, 'BB', 'Barbados'),
	(20, 'BY', 'Belarus'),
	(21, 'BE', 'Belgium'),
	(22, 'BZ', 'Belize'),
	(23, 'BJ', 'Benin'),
	(24, 'BM', 'Bermuda'),
	(25, 'BT', 'Bhutan'),
	(26, 'BO', 'Bolivia'),
	(27, 'BA', 'Bosnia And Herzegovina'),
	(28, 'BW', 'Botswana'),
	(29, 'BV', 'Bouvet Island'),
	(30, 'BR', 'Brazil'),
	(31, 'IO', 'British Indian Ocean Territory'),
	(32, 'BN', 'Brunei Darussalam'),
	(33, 'BG', 'Bulgaria'),
	(34, 'BF', 'Burkina Faso'),
	(35, 'BI', 'Burundi'),
	(36, 'KH', 'Cambodia'),
	(37, 'CM', 'Cameroon'),
	(38, 'CA', 'Canada'),
	(39, 'CV', 'Cape Verde'),
	(40, 'KY', 'Cayman Islands'),
	(41, 'CF', 'Central African Republic'),
	(42, 'TD', 'Chad'),
	(43, 'CL', 'Chile'),
	(44, 'CN', 'China'),
	(45, 'CX', 'Christmas Island'),
	(46, 'CC', 'Cocos (keeling) Islands'),
	(47, 'CO', 'Colombia'),
	(48, 'KM', 'Comoros'),
	(49, 'CG', 'Congo'),
	(50, 'CD', 'Congo, The Democratic Republic Of The'),
	(51, 'CK', 'Cook Islands'),
	(52, 'CR', 'Costa Rica'),
	(53, 'CI', 'Cote D\'ivoire'),
	(54, 'HR', 'Croatia'),
	(55, 'CU', 'Cuba'),
	(56, 'CY', 'Cyprus'),
	(57, 'CZ', 'Czech Republic'),
	(58, 'DK', 'Denmark'),
	(59, 'DJ', 'Djibouti'),
	(60, 'DM', 'Dominica'),
	(61, 'DO', 'Dominican Republic'),
	(62, 'TP', 'East Timor'),
	(63, 'EC', 'Ecuador'),
	(64, 'EG', 'Egypt'),
	(65, 'SV', 'El Salvador'),
	(66, 'GQ', 'Equatorial Guinea'),
	(67, 'ER', 'Eritrea'),
	(68, 'EE', 'Estonia'),
	(69, 'ET', 'Ethiopia'),
	(70, 'FK', 'Falkland Islands (malvinas)'),
	(71, 'FO', 'Faroe Islands'),
	(72, 'FJ', 'Fiji'),
	(73, 'FI', 'Finland'),
	(74, 'FR', 'France'),
	(75, 'GF', 'French Guiana'),
	(76, 'PF', 'French Polynesia'),
	(77, 'TF', 'French Southern Territories'),
	(78, 'GA', 'Gabon'),
	(79, 'GM', 'Gambia'),
	(80, 'GE', 'Georgia'),
	(81, 'DE', 'Germany'),
	(82, 'GH', 'Ghana'),
	(83, 'GI', 'Gibraltar'),
	(84, 'GR', 'Greece'),
	(85, 'GL', 'Greenland'),
	(86, 'GD', 'Grenada'),
	(87, 'GP', 'Guadeloupe'),
	(88, 'GU', 'Guam'),
	(89, 'GT', 'Guatemala'),
	(90, 'GN', 'Guinea'),
	(91, 'GW', 'Guinea-bissau'),
	(92, 'GY', 'Guyana'),
	(93, 'HT', 'Haiti'),
	(94, 'HM', 'Heard Island And Mcdonald Islands'),
	(95, 'VA', 'Holy See (vatican City State)'),
	(96, 'HN', 'Honduras'),
	(97, 'HK', 'Hong Kong'),
	(98, 'HU', 'Hungary'),
	(99, 'IS', 'Iceland'),
	(100, 'IN', 'India'),
	(101, 'ID', 'Indonesia'),
	(102, 'IR', 'Iran, Islamic Republic Of'),
	(103, 'IQ', 'Iraq'),
	(104, 'IE', 'Ireland'),
	(105, 'IL', 'Israel'),
	(106, 'IT', 'Italy'),
	(107, 'JM', 'Jamaica'),
	(108, 'JP', 'Japan'),
	(109, 'JO', 'Jordan'),
	(110, 'KZ', 'Kazakstan'),
	(111, 'KE', 'Kenya'),
	(112, 'KI', 'Kiribati'),
	(113, 'KP', 'Korea, Democratic People\'s Republic Of'),
	(114, 'KR', 'Korea, Republic Of'),
	(115, 'KV', 'Kosovo'),
	(116, 'KW', 'Kuwait'),
	(117, 'KG', 'Kyrgyzstan'),
	(118, 'LA', 'Lao People\'s Democratic Republic'),
	(119, 'LV', 'Latvia'),
	(120, 'LB', 'Lebanon'),
	(121, 'LS', 'Lesotho'),
	(122, 'LR', 'Liberia'),
	(123, 'LY', 'Libyan Arab Jamahiriya'),
	(124, 'LI', 'Liechtenstein'),
	(125, 'LT', 'Lithuania'),
	(126, 'LU', 'Luxembourg'),
	(127, 'MO', 'Macau'),
	(128, 'MK', 'Macedonia, The Former Yugoslav Republic Of'),
	(129, 'MG', 'Madagascar'),
	(130, 'MW', 'Malawi'),
	(131, 'MY', 'Malaysia'),
	(132, 'MV', 'Maldives'),
	(133, 'ML', 'Mali'),
	(134, 'MT', 'Malta'),
	(135, 'MH', 'Marshall Islands'),
	(136, 'MQ', 'Martinique'),
	(137, 'MR', 'Mauritania'),
	(138, 'MU', 'Mauritius'),
	(139, 'YT', 'Mayotte'),
	(140, 'MX', 'Mexico'),
	(141, 'FM', 'Micronesia, Federated States Of'),
	(142, 'MD', 'Moldova, Republic Of'),
	(143, 'MC', 'Monaco'),
	(144, 'MN', 'Mongolia'),
	(145, 'MS', 'Montserrat'),
	(146, 'ME', 'Montenegro'),
	(147, 'MA', 'Morocco'),
	(148, 'MZ', 'Mozambique'),
	(149, 'MM', 'Myanmar'),
	(150, 'NA', 'Namibia'),
	(151, 'NR', 'Nauru'),
	(152, 'NP', 'Nepal'),
	(153, 'NL', 'Netherlands'),
	(154, 'AN', 'Netherlands Antilles'),
	(155, 'NC', 'New Caledonia'),
	(156, 'NZ', 'New Zealand'),
	(157, 'NI', 'Nicaragua'),
	(158, 'NE', 'Niger'),
	(159, 'NG', 'Nigeria'),
	(160, 'NU', 'Niue'),
	(161, 'NF', 'Norfolk Island'),
	(162, 'MP', 'Northern Mariana Islands'),
	(163, 'NO', 'Norway'),
	(164, 'OM', 'Oman'),
	(165, 'PK', 'Pakistan'),
	(166, 'PW', 'Palau'),
	(167, 'PS', 'Palestinian Territory, Occupied'),
	(168, 'PA', 'Panama'),
	(169, 'PG', 'Papua New Guinea'),
	(170, 'PY', 'Paraguay'),
	(171, 'PE', 'Peru'),
	(172, 'PH', 'Philippines'),
	(173, 'PN', 'Pitcairn'),
	(174, 'PL', 'Poland'),
	(175, 'PT', 'Portugal'),
	(176, 'PR', 'Puerto Rico'),
	(177, 'QA', 'Qatar'),
	(178, 'RE', 'Reunion'),
	(179, 'RO', 'Romania'),
	(180, 'RU', 'Russian Federation'),
	(181, 'RW', 'Rwanda'),
	(182, 'SH', 'Saint Helena'),
	(183, 'KN', 'Saint Kitts And Nevis'),
	(184, 'LC', 'Saint Lucia'),
	(185, 'PM', 'Saint Pierre And Miquelon'),
	(186, 'VC', 'Saint Vincent And The Grenadines'),
	(187, 'WS', 'Samoa'),
	(188, 'SM', 'San Marino'),
	(189, 'ST', 'Sao Tome And Principe'),
	(190, 'SA', 'Saudi Arabia'),
	(191, 'SN', 'Senegal'),
	(192, 'RS', 'Serbia'),
	(193, 'SC', 'Seychelles'),
	(194, 'SL', 'Sierra Leone'),
	(195, 'SG', 'Singapore'),
	(196, 'SK', 'Slovakia'),
	(197, 'SI', 'Slovenia'),
	(198, 'SB', 'Solomon Islands'),
	(199, 'SO', 'Somalia'),
	(200, 'ZA', 'South Africa'),
	(201, 'GS', 'South Georgia And The South Sandwich Islands'),
	(202, 'ES', 'Spain'),
	(203, 'LK', 'Sri Lanka'),
	(204, 'SD', 'Sudan'),
	(205, 'SR', 'Suriname'),
	(206, 'SJ', 'Svalbard And Jan Mayen'),
	(207, 'SZ', 'Swaziland'),
	(208, 'SE', 'Sweden'),
	(209, 'CH', 'Switzerland'),
	(210, 'SY', 'Syrian Arab Republic'),
	(211, 'TW', 'Taiwan, Province Of China'),
	(212, 'TJ', 'Tajikistan'),
	(213, 'TZ', 'Tanzania, United Republic Of'),
	(214, 'TH', 'Thailand'),
	(215, 'TG', 'Togo'),
	(216, 'TK', 'Tokelau'),
	(217, 'TO', 'Tonga'),
	(218, 'TT', 'Trinidad And Tobago'),
	(219, 'TN', 'Tunisia'),
	(220, 'TR', 'Turkey'),
	(221, 'TM', 'Turkmenistan'),
	(222, 'TC', 'Turks And Caicos Islands'),
	(223, 'TV', 'Tuvalu'),
	(224, 'UG', 'Uganda'),
	(225, 'UA', 'Ukraine'),
	(226, 'AE', 'United Arab Emirates'),
	(227, 'GB', 'United Kingdom'),
	(228, 'US', 'United States'),
	(229, 'UM', 'United States Minor Outlying Islands'),
	(230, 'UY', 'Uruguay'),
	(231, 'UZ', 'Uzbekistan'),
	(232, 'VU', 'Vanuatu'),
	(233, 'VE', 'Venezuela'),
	(234, 'VN', 'Viet Nam'),
	(235, 'VG', 'Virgin Islands, British'),
	(236, 'VI', 'Virgin Islands, U.s.'),
	(237, 'WF', 'Wallis And Futuna'),
	(238, 'EH', 'Western Sahara'),
	(239, 'YE', 'Yemen'),
	(240, 'ZM', 'Zambia'),
	(241, 'ZW', 'Zimbabwe');
/*!40000 ALTER TABLE `waka_crsm_countries` ENABLE KEYS */;

-- Listage des données de la table notilac.waka_crsm_missions : ~25 rows (environ)
/*!40000 ALTER TABLE `waka_crsm_missions` DISABLE KEYS */;
INSERT INTO `waka_crsm_missions` (`id`, `is_template`, `project_id`, `name`, `description`, `qty`, `amount`, `total`, `final_total`, `period_id`, `sort_order`) VALUES
	(1, 1, NULL, 'Mise en place de l\'application', '-Installation de l\'application\r\n-Création des droits utilsateurs\r\n-Rattachement NDD\r\n-Mise en place espace colorimetrique', 1.00, 3200.00, 3200.00, NULL, 1, 5),
	(2, 1, NULL, 'Levier', 'Levier \r\nSous leviers : \r\nNombre de fonctions\r\n- \r\n- \r\n- \r\nPhotos associés', 1.00, 1500.00, 1500.00, NULL, 1, 6),
	(3, 0, 1, 'Levier 2 : Lots', 'Sous leviers : contacts & BO users\r\nPas de fonctions\r\nPhotos : 4', 1.00, 1200.00, 1200.00, NULL, 1, 12),
	(4, 0, 1, 'Levier 3 : Contcts', 'Levier projets\r\nSous leviers : lots\r\nFonction : Liste des lots', 1.00, 1200.00, 1200.00, NULL, 1, 13),
	(5, 1, NULL, 'Maintenance système génération de document Word', 'Création de documents word depuis vos leviers', 1.00, 70.00, 70.00, NULL, 3, 10),
	(6, 1, NULL, 'Maintenance système génération de document PDF', 'Création de documents PDF depuis vos leviers', 1.00, 60.00, 60.00, NULL, 3, 11),
	(7, 1, NULL, 'Maintenance systhème génération de document Email', 'Création de mails depuis vos leviers', 1.00, 60.00, 60.00, NULL, 3, 12),
	(8, 1, NULL, 'Maintenance système génération de Mailto', 'Création de mailto depuis vos leviers', 1.00, 30.00, 30.00, NULL, 3, 13),
	(9, 1, NULL, 'Hébergement VPS normal', 'Hébergement sur VPS digital océan et admisinstration du serveur', 1.00, 70.00, 70.00, NULL, 3, 9),
	(10, 1, NULL, 'Maintenance de l\'application', 'Maintenance de l\'application\r\nMise à jours des composants\r\nSauvegarde des BDD et images', 1.00, 80.00, 80.00, NULL, 3, 14),
	(11, 1, NULL, 'Maintenance des lots', 'Calculé en fonction du nombres de fonctions', 3.00, 12.50, 37.50, NULL, 3, 15),
	(12, 0, 1, 'Mise en place de l\'application', '-Installation de l\'application\r\n-Création des droits utilsateurs\r\n-Rattachement NDD\r\n-Mise en place espace colorimetrique', 1.00, 3400.00, 3400.00, NULL, 1, 7),
	(13, 0, 1, 'Maintenance systhème génération de document Email', 'Création de mails depuis vos leviers', 1.00, 50.00, 50.00, NULL, 3, 16),
	(14, 0, 1, 'Maintenance système génération de Mailto', 'Création de mailto depuis vos leviers', 1.00, 30.00, 30.00, NULL, 3, 17),
	(15, 0, 1, 'Maintenance système génération de document Word', 'Création de documents word depuis vos leviers', 1.00, 70.00, 70.00, NULL, 3, 18),
	(16, 0, 1, 'Maintenance système génération de document PDF', 'Création de documents PDF depuis vos leviers', 1.00, 50.00, 50.00, NULL, 3, 19),
	(17, 0, 1, 'Maintenance des lots', 'Calculé en fonction du nombres de fonctions', 3.00, 15.00, 45.00, NULL, 3, 20),
	(18, 0, 1, 'Maintenance de l\'application', 'Maintenance de l\'application\r\nMise à jours des composants\r\nSauvegarde des BDD et images', 1.00, 80.00, 80.00, NULL, 3, 26),
	(19, 0, 1, 'Levier 1 : Projets', 'Levier projets\r\nSous leviers : lots & BO users\r\nFonction : 3 à 4 ( lister les lots par type, reservation)\r\nPhotos : 4', 1.00, 1800.00, 1800.00, NULL, 1, 8),
	(20, 0, 1, 'Hébergement VPS normal', 'Hébergement sur VPS digital océan et admisinstration du serveur', 1.00, 60.00, 60.00, NULL, 3, 27),
	(21, 1, NULL, 'Mise en production', 'Mise en production non planifié pour ajouter des élements à l\'application\r\n-Nouveaux arguments, \r\n-Nouveau module.\r\n-Nouvelles fonctions.', 1.00, 250.00, 250.00, NULL, 1, 21),
	(22, 1, NULL, 'Montage photo', 'Montage photo', 1.00, 150.00, 150.00, NULL, 1, 22),
	(23, 1, NULL, 'Création d\'une classe d\'import excel', 'Création d\'une classe import excel pour le lot :', 1.00, 120.00, 120.00, NULL, 1, 23),
	(24, 1, NULL, 'Maintenance système import export Excel', 'Maintenance système import export Excel', 1.00, 45.00, 45.00, NULL, 3, 24),
	(26, 0, 1, 'Création d\'un import excel pour les lots', 'Création d\'une classe import excel pour le lot :\r\n-Nom du projet identifié par le slug projet\r\n-Possibilité d\'ajouter des images en ligne\r\n-Update impossible\r\nLimites dimport : \r\n25 lots par feuille excel si utilisation d\'images\r\n10 000 lots  sans images', 1.00, 120.00, 120.00, NULL, 1, 15);
/*!40000 ALTER TABLE `waka_crsm_missions` ENABLE KEYS */;

-- Listage des données de la table notilac.waka_crsm_periods : ~3 rows (environ)
/*!40000 ALTER TABLE `waka_crsm_periods` DISABLE KEYS */;
INSERT INTO `waka_crsm_periods` (`id`, `name`, `slug`, `repeat`) VALUES
	(1, 'Projet', 'projet', 0),
	(2, 'Annuel', 'annuel', 1),
	(3, 'Mensuel', 'mensuel', 12);
/*!40000 ALTER TABLE `waka_crsm_periods` ENABLE KEYS */;

-- Listage des données de la table notilac.waka_crsm_projects : ~1 rows (environ)
/*!40000 ALTER TABLE `waka_crsm_projects` DISABLE KEYS */;
INSERT INTO `waka_crsm_projects` (`id`, `name`, `slug`, `client_id`, `contact_id`, `cp_id`, `project_state_id`, `total`, `description`, `nb_user_pot`, `closed_at`, `closed_presvision_at`, `is_ex`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 'Gestion projets immobiliers', 'gestion-projets-immobiliers', 9, 24, 1, 1, NULL, '<p>Presentation et brief</p>', 25, NULL, NULL, 1, NULL, '2020-05-01 16:42:08', '2020-05-03 15:37:13');
/*!40000 ALTER TABLE `waka_crsm_projects` ENABLE KEYS */;

-- Listage des données de la table notilac.waka_crsm_project_states : ~6 rows (environ)
/*!40000 ALTER TABLE `waka_crsm_project_states` DISABLE KEYS */;
INSERT INTO `waka_crsm_project_states` (`id`, `name`, `slug`, `is_running`, `sort_order`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 'Préparation offre', 'preparation-offre', 1, 1, NULL, '2020-02-22 11:33:31', '2020-02-22 11:33:31'),
	(2, 'En proposition', 'en-proposition', 1, 2, NULL, '2020-02-22 11:33:31', '2020-02-22 11:33:31'),
	(3, 'En cours de production', 'en-cours-de-production', 1, 3, NULL, '2020-02-22 11:33:31', '2020-02-22 11:33:31'),
	(4, 'Terminé ( vendu )', 'termine-vendu', 0, 4, NULL, '2020-02-22 11:33:31', '2020-02-22 11:33:31'),
	(5, 'Abandonné ( non vendu )', 'abandonne-non-vendu', 0, 5, NULL, '2020-02-22 11:33:31', '2020-02-22 11:33:31'),
	(6, 'Perdu', 'perdu', 0, 6, NULL, '2020-02-22 11:33:31', '2020-02-22 11:33:31');
/*!40000 ALTER TABLE `waka_crsm_project_states` ENABLE KEYS */;

-- Listage des données de la table notilac.waka_crsm_sectors : ~17 rows (environ)
/*!40000 ALTER TABLE `waka_crsm_sectors` DISABLE KEYS */;
INSERT INTO `waka_crsm_sectors` (`id`, `parent_id`, `nest_left`, `nest_right`, `nest_depth`, `name`, `slug`, `description`, `content`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, NULL, 1, 12, 0, 'Industrie', 'industrie', NULL, '[{"code":"intro","text":"Ceci est un texte d\'intro.","text_html":"<p>Ceci est un texte d\'intro en <strong>HTML<\\/strong><\\/p>\\r\\n\\r\\n<p><strong><em>Il permet de faire plus de chose.&nbsp;<\\/em><\\/strong><\\/p>\\r\\n"},{"code":"kpi","text":"Ici on traite des facteurs cl\\u00e9 de succ\\u00e8s !","text_html":"<blockquote>\\r\\n\\r\\n\\t<p>Ici on traite des facteurs cl\\u00e9 de succ\\u00e8s !<\\/p>\\r\\n<\\/blockquote>\\r\\n"}]', NULL, '2020-02-22 11:30:51', '2020-04-07 21:59:09'),
	(2, 1, 2, 7, 1, 'Industrie Agro Alimentaire', 'i-aa', NULL, '[{"code":"intro","text":"Ceci est un texte d\'intro.","text_html":"<p>Ceci est un texte d\'intro en <strong>HTML<\\/strong><\\/p>\\r\\n\\r\\n<p><strong><em>Il permet de faire plus de chose.&nbsp;<\\/em><\\/strong><\\/p>\\r\\n"},{"code":"kpi","text":"Ici on traite des facteurs cl\\u00e9 de succ\\u00e8s !","text_html":"<blockquote>\\r\\n\\r\\n\\t<p>Ici on traite des facteurs cl\\u00e9 de succ\\u00e8s !<\\/p>\\r\\n<\\/blockquote>\\r\\n"}]', NULL, '2020-02-22 11:30:51', '2020-02-22 11:30:51'),
	(3, 2, 3, 4, 2, 'Grand compte (i-aa)', 'i-aa-grdc', NULL, '[{"code":"intro","text":"Ceci est un texte d\'intro.","text_html":"<p>Ceci est un texte d\'intro en <strong>HTML<\\/strong><\\/p>\\r\\n\\r\\n<p><strong><em>Il permet de faire plus de chose.&nbsp;<\\/em><\\/strong><\\/p>\\r\\n"},{"code":"kpi","text":"Ici on traite des facteurs cl\\u00e9 de succ\\u00e8s !","text_html":"<blockquote>\\r\\n\\r\\n\\t<p>Ici on traite des facteurs cl\\u00e9 de succ\\u00e8s !<\\/p>\\r\\n<\\/blockquote>\\r\\n"}]', NULL, '2020-02-22 11:30:51', '2020-02-22 11:30:51'),
	(4, 2, 5, 6, 2, 'PME (i-aa)', 'i-aa-pme', NULL, '[{"code":"intro","text":"Ceci est un texte d\'intro.","text_html":"<p>Ceci est un texte d\'intro en <strong>HTML<\\/strong><\\/p>\\r\\n\\r\\n<p><strong><em>Il permet de faire plus de chose.&nbsp;<\\/em><\\/strong><\\/p>\\r\\n"},{"code":"kpi","text":"Ici on traite des facteurs cl\\u00e9 de succ\\u00e8s !","text_html":"<blockquote>\\r\\n\\r\\n\\t<p>Ici on traite des facteurs cl\\u00e9 de succ\\u00e8s !<\\/p>\\r\\n<\\/blockquote>\\r\\n"}]', NULL, '2020-02-22 11:30:51', '2020-02-22 11:30:51'),
	(5, 1, 8, 9, 1, 'Industrie lourde', 'i-lourde', NULL, '[{"code":"intro","text":"Ceci est un texte d\'intro.","text_html":"<p>Ceci est un texte d\'intro en <strong>HTML<\\/strong><\\/p>\\r\\n\\r\\n<p><strong><em>Il permet de faire plus de chose.&nbsp;<\\/em><\\/strong><\\/p>\\r\\n"},{"code":"kpi","text":"Ici on traite des facteurs cl\\u00e9 de succ\\u00e8s !","text_html":"<blockquote>\\r\\n\\r\\n\\t<p>Ici on traite des facteurs cl\\u00e9 de succ\\u00e8s !<\\/p>\\r\\n<\\/blockquote>\\r\\n"}]', NULL, '2020-02-22 11:30:51', '2020-02-22 11:30:51'),
	(6, 1, 10, 11, 1, 'ingénierie', 'i-ingenierie', NULL, '[{"code":"intro","text":"Ceci est un texte d\'intro.","text_html":"<p>Ceci est un texte d\'intro en <strong>HTML<\\/strong><\\/p>\\r\\n\\r\\n<p><strong><em>Il permet de faire plus de chose.&nbsp;<\\/em><\\/strong><\\/p>\\r\\n"},{"code":"kpi","text":"Ici on traite des facteurs cl\\u00e9 de succ\\u00e8s !","text_html":"<blockquote>\\r\\n\\r\\n\\t<p>Ici on traite des facteurs cl\\u00e9 de succ\\u00e8s !<\\/p>\\r\\n<\\/blockquote>\\r\\n"}]', NULL, '2020-02-22 11:30:51', '2020-02-22 11:30:51'),
	(7, NULL, 13, 14, 0, 'Immobilier', 'immobilier', NULL, '[{"code":"intro","text":"Ceci est un texte d\'intro.","text_html":"<p>Ceci est un texte d\'intro en <strong>HTML<\\/strong><\\/p>\\r\\n\\r\\n<p><strong><em>Il permet de faire plus de chose.&nbsp;<\\/em><\\/strong><\\/p>\\r\\n"},{"code":"kpi","text":"Ici on traite des facteurs cl\\u00e9 de succ\\u00e8s !","text_html":"<blockquote>\\r\\n\\r\\n\\t<p>Ici on traite des facteurs cl\\u00e9 de succ\\u00e8s !<\\/p>\\r\\n<\\/blockquote>\\r\\n"}]', NULL, '2020-02-22 11:30:51', '2020-02-22 11:30:51'),
	(8, NULL, 15, 16, 0, 'Pharmaceutique', 'pharma', NULL, '[{"code":"intro","text":"Ceci est un texte d\'intro.","text_html":"<p>Ceci est un texte d\'intro en <strong>HTML<\\/strong><\\/p>\\r\\n\\r\\n<p><strong><em>Il permet de faire plus de chose.&nbsp;<\\/em><\\/strong><\\/p>\\r\\n"},{"code":"kpi","text":"Ici on traite des facteurs cl\\u00e9 de succ\\u00e8s !","text_html":"<blockquote>\\r\\n\\r\\n\\t<p>Ici on traite des facteurs cl\\u00e9 de succ\\u00e8s !<\\/p>\\r\\n<\\/blockquote>\\r\\n"}]', NULL, '2020-02-22 11:30:51', '2020-02-22 11:30:51'),
	(9, NULL, 17, 24, 0, 'Conseil', 'conseil', NULL, '[{"code":"intro","text":"Ceci est un texte d\'intro.","text_html":"<p>Ceci est un texte d\'intro en <strong>HTML<\\/strong><\\/p>\\r\\n\\r\\n<p><strong><em>Il permet de faire plus de chose.&nbsp;<\\/em><\\/strong><\\/p>\\r\\n"},{"code":"kpi","text":"Ici on traite des facteurs cl\\u00e9 de succ\\u00e8s !","text_html":"<blockquote>\\r\\n\\r\\n\\t<p>Ici on traite des facteurs cl\\u00e9 de succ\\u00e8s !<\\/p>\\r\\n<\\/blockquote>\\r\\n"}]', NULL, '2020-02-22 11:30:51', '2020-02-22 11:30:52'),
	(10, 9, 18, 19, 1, 'Conseil RH', 'c-rh', NULL, '[{"code":"intro","text":"Ceci est un texte d\'intro.","text_html":"<p>Ceci est un texte d\'intro en <strong>HTML<\\/strong><\\/p>\\r\\n\\r\\n<p><strong><em>Il permet de faire plus de chose.&nbsp;<\\/em><\\/strong><\\/p>\\r\\n"},{"code":"kpi","text":"Ici on traite des facteurs cl\\u00e9 de succ\\u00e8s !","text_html":"<blockquote>\\r\\n\\r\\n\\t<p>Ici on traite des facteurs cl\\u00e9 de succ\\u00e8s !<\\/p>\\r\\n<\\/blockquote>\\r\\n"}]', NULL, '2020-02-22 11:30:51', '2020-02-22 11:30:51'),
	(11, 9, 20, 21, 1, 'Conseil Finance', 'c-finance', NULL, '[{"code":"intro","text":"Ceci est un texte d\'intro.","text_html":"<p>Ceci est un texte d\'intro en <strong>HTML<\\/strong><\\/p>\\r\\n\\r\\n<p><strong><em>Il permet de faire plus de chose.&nbsp;<\\/em><\\/strong><\\/p>\\r\\n"},{"code":"kpi","text":"Ici on traite des facteurs cl\\u00e9 de succ\\u00e8s !","text_html":"<blockquote>\\r\\n\\r\\n\\t<p>Ici on traite des facteurs cl\\u00e9 de succ\\u00e8s !<\\/p>\\r\\n<\\/blockquote>\\r\\n"}]', NULL, '2020-02-22 11:30:51', '2020-02-22 11:30:52'),
	(12, 9, 22, 23, 1, 'Conseil SI', 'c-si', NULL, '[{"code":"intro","text":"Ceci est un texte d\'intro.","text_html":"<p>Ceci est un texte d\'intro en <strong>HTML<\\/strong><\\/p>\\r\\n\\r\\n<p><strong><em>Il permet de faire plus de chose.&nbsp;<\\/em><\\/strong><\\/p>\\r\\n"},{"code":"kpi","text":"Ici on traite des facteurs cl\\u00e9 de succ\\u00e8s !","text_html":"<blockquote>\\r\\n\\r\\n\\t<p>Ici on traite des facteurs cl\\u00e9 de succ\\u00e8s !<\\/p>\\r\\n<\\/blockquote>\\r\\n"}]', NULL, '2020-02-22 11:30:52', '2020-02-22 11:30:52'),
	(13, NULL, 25, 30, 0, 'Secteur public', 'secteur-public', NULL, '[{"code":"intro","text":"Ceci est un texte d\'intro.","text_html":"<p>Ceci est un texte d\'intro en <strong>HTML<\\/strong><\\/p>\\r\\n\\r\\n<p><strong><em>Il permet de faire plus de chose.&nbsp;<\\/em><\\/strong><\\/p>\\r\\n"},{"code":"kpi","text":"Ici on traite des facteurs cl\\u00e9 de succ\\u00e8s !","text_html":"<blockquote>\\r\\n\\r\\n\\t<p>Ici on traite des facteurs cl\\u00e9 de succ\\u00e8s !<\\/p>\\r\\n<\\/blockquote>\\r\\n"}]', NULL, '2020-02-22 11:30:52', '2020-02-22 11:30:52'),
	(14, 13, 26, 27, 1, 'Collectivité', 'sp-collectivite', NULL, '[{"code":"intro","text":"Ceci est un texte d\'intro.","text_html":"<p>Ceci est un texte d\'intro en <strong>HTML<\\/strong><\\/p>\\r\\n\\r\\n<p><strong><em>Il permet de faire plus de chose.&nbsp;<\\/em><\\/strong><\\/p>\\r\\n"},{"code":"kpi","text":"Ici on traite des facteurs cl\\u00e9 de succ\\u00e8s !","text_html":"<blockquote>\\r\\n\\r\\n\\t<p>Ici on traite des facteurs cl\\u00e9 de succ\\u00e8s !<\\/p>\\r\\n<\\/blockquote>\\r\\n"}]', NULL, '2020-02-22 11:30:52', '2020-04-21 19:51:27'),
	(15, 13, 28, 29, 1, 'Entreprise Publique', 'sp-ent-public', NULL, '[{"code":"intro","text":"Ceci est un texte d\'intro.","text_html":"<p>Ceci est un texte d\'intro en <strong>HTML<\\/strong><\\/p>\\r\\n\\r\\n<p><strong><em>Il permet de faire plus de chose.&nbsp;<\\/em><\\/strong><\\/p>\\r\\n"},{"code":"kpi","text":"Ici on traite des facteurs cl\\u00e9 de succ\\u00e8s !","text_html":"<blockquote>\\r\\n\\r\\n\\t<p>Ici on traite des facteurs cl\\u00e9 de succ\\u00e8s !<\\/p>\\r\\n<\\/blockquote>\\r\\n"}]', NULL, '2020-02-22 11:30:52', '2020-02-22 11:30:52'),
	(16, NULL, 31, 34, 0, 'Service', 'service', NULL, '[{"code":"intro","text":"Ceci est un texte d\'intro.","text_html":"<p>Ceci est un texte d\'intro en <strong>HTML<\\/strong><\\/p>\\r\\n\\r\\n<p><strong><em>Il permet de faire plus de chose.&nbsp;<\\/em><\\/strong><\\/p>\\r\\n"},{"code":"kpi","text":"Ici on traite des facteurs cl\\u00e9 de succ\\u00e8s !","text_html":"<blockquote>\\r\\n\\r\\n\\t<p>Ici on traite des facteurs cl\\u00e9 de succ\\u00e8s !<\\/p>\\r\\n<\\/blockquote>\\r\\n"}]', NULL, '2020-02-22 11:30:52', '2020-02-22 11:30:52'),
	(17, 16, 32, 33, 1, 'Livraison', 's-livraison', NULL, '[{"code":"intro","text":"Ceci est un texte d\'intro.","text_html":"<p>Ceci est un texte d\'intro en <strong>HTML<\\/strong><\\/p>\\r\\n\\r\\n<p><strong><em>Il permet de faire plus de chose.&nbsp;<\\/em><\\/strong><\\/p>\\r\\n"},{"code":"kpi","text":"Ici on traite des facteurs cl\\u00e9 de succ\\u00e8s !","text_html":"<blockquote>\\r\\n\\r\\n\\t<p>Ici on traite des facteurs cl\\u00e9 de succ\\u00e8s !<\\/p>\\r\\n<\\/blockquote>\\r\\n"}]', NULL, '2020-02-22 11:30:52', '2020-02-22 11:30:52');
/*!40000 ALTER TABLE `waka_crsm_sectors` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
