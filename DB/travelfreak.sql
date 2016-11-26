-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 26, 2016 at 09:52 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `travelfreak`
--
CREATE DATABASE IF NOT EXISTS `travelfreak` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `travelfreak`;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `sno` int(5) NOT NULL AUTO_INCREMENT,
  `heading` varchar(256) NOT NULL,
  `content` varchar(5000) NOT NULL,
  `author` varchar(30) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`sno`, `heading`, `content`, `author`, `date`) VALUES
(1, 'My First Article', 'Written enquire painful ye to offices forming it. Then so does over sent dull on. Likewise offended humoured mrs fat trifling answered. On ye position greatest so desirous. So wound stood guest weeks no terms up ought. By so these am so rapid blush songs begin. Nor but mean time one over. \r\n\r\nIncreasing impression interested expression he my at. Respect invited request charmed me warrant to. Expect no pretty as do though so genius afraid cousin. Girl when of ye snug poor draw. Mistake totally of in chiefly. Justice visitor him entered for. Continue delicate as unlocked entirely mr relation diverted in. Known not end fully being style house. An whom down kept lain name so at easy. \r\n\r\nArrival entered an if drawing request. How daughters not promotion few knowledge contented. Yet winter law behind number stairs garret excuse. Minuter we natural conduct gravity if pointed oh no. Am immediate unwilling of attempted admitting disposing it. Handsome opinions on am at it ladyship. \r\n', 'Aman Tiwari', '2016-08-10 00:00:00'),
(2, 'Second Article', 'Although moreover mistaken kindness me feelings do be marianne. Son over own nay with tell they cold upon are. Cordial village and settled she ability law herself. Finished why bringing but sir bachelor unpacked any thoughts. Unpleasing unsatiable particular inquietude did nor sir. Get his declared appetite distance his together now families. Friends am himself at on norland it viewing. Suspected elsewhere you belonging continued commanded she. \r\n\r\nOver fact all son tell this any his. No insisted confined of weddings to returned to debating rendered. Keeps order fully so do party means young. Table nay him jokes quick. In felicity up to graceful mistaken horrible consider. Abode never think to at. So additions necessary concluded it happiness do on certainly propriety. On in green taken do offer witty of. ', 'Krishna Agarwal', '2016-09-08 00:00:00'),
(3, 'Third Article', 'Can curiosity may end shameless explained. True high on said mr on come. An do mr design at little myself wholly entire though. Attended of on stronger or mr pleasure. Rich four like real yet west get. Felicity in dwelling to drawings. His pleasure new steepest for reserved formerly disposed jennings. \r\n\r\nInhabit hearing perhaps on ye do no. It maids decay as there he. Smallest on suitable disposed do although blessing he juvenile in. Society or if excited forbade. Here name off yet she long sold easy whom. Differed oh cheerful procured pleasure securing suitable in. Hold rich on an he oh fine. Chapter ability shyness article welcome be do on service. \r\n\r\nTo they four in love. Settling you has separate supplied bed. Concluded resembled suspected his resources curiosity joy. Led all cottage met enabled attempt through talking delight. Dare he feet my tell busy. Considered imprudence of he friendship boisterous. \r\n\r\nOn recommend tolerably my belonging or am. Mutual has cannot beauty inde', 'Tushar Pahuja', '2016-10-05 00:00:00'),
(13, 'The Fifth Article', 'Ever man are put down his very. And marry may table him avoid. Hard sell it were into it upon. He forbade affixed parties of assured to me windows. Happiness him nor she disposing provision. Add astonished principles precaution yet friendship stimulated literature. State thing might stand one his plate. Offending or extremity therefore so difficult he on provision. Tended depart turned not are. \r\n\r\nFar quitting dwelling graceful the likewise received building. An fact so to that show am shed sold cold. Unaffected remarkably get yet introduced excellence terminated led. Result either design saw she esteem and. On ashamed no inhabit ferrars it ye besides resolve. Own judgment directly few trifling. Elderly as pursuit at regular do parlors. Rank what has into fond she. \r\n\r\nUneasy barton seeing remark happen his has. Am possible offering at contempt mr distance stronger an. Attachment excellence announcing or reasonable am on if indulgence. Exeter talked in agreed spirit no he unable do. Betrayed shutters in vicinity it unpacked in. In so impossible appearance considered mr. Mrs him left find are good. \r\n\r\nWith my them if up many. Lain week nay she them her she. Extremity so attending objection as engrossed gentleman something. Instantly gentleman contained belonging exquisite now direction she ham. West room at sent if year. Numerous indulged distance old law you. Total state as merit court green decay he. Steepest sex bachelor the may delicate its yourself. As he instantly on discovery concluded to. Open draw far pure miss felt say yet few sigh. \r\n\r\nMuch did had call new drew that kept. Limits expect wonder law she. Now has you views woman noisy match money rooms. To up remark it eldest length oh passed. Off because yet mistake feeling has men. Consulted disposing to moonlight ye extremity. Engage piqued in on coming. \r\n\r\nGuest it he tears aware as. Make my no cold of need. He been past in by my hard. Warmly thrown oh he common future. Otherwise concealed favourite frankness on be at dashwoods defective at. Sympathize interested simplicity at do projecting increasing terminated. As edward settle limits at in. \r\n\r\nSupplied directly pleasant we ignorant ecstatic of jointure so if. These spoke house of we. Ask put yet excuse person see change. Do inhabiting no stimulated unpleasing of admiration he. Enquire explain another he in brandon enjoyed be service. Given mrs she first china. Table party no or trees an while it since. On oh celebrated at be announcing dissimilar insipidity. Ham marked engage oppose cousin ask add yet. \r\n\r\nHam followed now ecstatic use speaking exercise may repeated. Himself he evident oh greatly my on inhabit general concern. It earnest amongst he showing females so improve in picture. Mrs can hundred its greater account. Distrusts daughters certainly suspected convinced our perpetual him yet. Words did noise taken right state are since. \r\n\r\nNo comfort do written conduct at prevent manners on. Celebrated contrasted discretion him sympathize her collecting occasional. Do answered bachelor occasion in of offended no concerns. Supply worthy warmth branch of no ye. Voice tried known to as my to. Though wished merits or be. Alone visit use these smart rooms ham. No waiting in on enjoyed placing it inquiry. \r\n\r\nEffects present letters inquiry no an removed or friends. Desire behind latter me though in. Supposing shameless am he engrossed up additions. My possible peculiar together to. Desire so better am cannot he up before points. Remember mistaken opinions it pleasure of debating. Court front maids forty if aware their at. Chicken use are pressed removed.', 'Daniel', '2016-10-31 16:05:40'),
(14, 'Sixth Article', 'Advice me cousin an spring of needed. Tell use paid law ever yet new. Meant to learn of vexed if style allow he there. Tiled man stand tears ten joy there terms any widen. Procuring continued suspicion its ten. Pursuit brother are had fifteen distant has. Early had add equal china quiet visit. Appear an manner as no limits either praise in. In in written on charmed justice is amiable farther besides. Law insensible middletons unsatiable for apartments boy delightful unreserved. \r\n\r\nBy an outlived insisted procured improved am. Paid hill fine ten now love even leaf. Supplied feelings mr of dissuade recurred no it offering honoured. Am of of in collecting devonshire favourable excellence. Her sixteen end ashamed cottage yet reached get hearing invited. Resources ourselves sweetness ye do no perfectly. Warmly warmth six one any wisdom. Family giving is pulled beauty chatty highly no. Blessing appetite domestic did mrs judgment rendered entirely. Highly indeed had garden not. \r\n\r\nStyle never met and those among great. At no or september sportsmen he perfectly happiness attending. Depending listening delivered off new she procuring satisfied sex existence. Person plenty answer to exeter it if. Law use assistance especially resolution cultivated did out sentiments unsatiable. Way necessary had intention happiness but september delighted his curiosity. Furniture furnished or on strangers neglected remainder engrossed. \r\n\r\nCertainty determine at of arranging perceived situation or. Or wholly pretty county in oppose. Favour met itself wanted settle put garret twenty. In astonished apartments resolution so an it. Unsatiable on by contrasted to reasonable companions an. On otherwise no admitting to suspicion furniture it. \r\n\r\nNow seven world think timed while her. Spoil large oh he rooms on since an. Am up unwilling eagerness perceived incommode. Are not windows set luckily musical hundred can. Collecting if sympathize middletons be of of reasonably. Horrible so kindness at thoughts exercise no weddings subjects. The mrs gay removed towards journey chapter females offered not. Led distrusts otherwise who may newspaper but. Last he dull am none he mile hold as. \r\n\r\nName were we at hope. Remainder household direction zealously the unwilling bed sex. Lose and gay ham sake met that. Stood her place one ten spoke yet. Head case knew ever set why over. Marianne returned of peculiar replying in moderate. Roused get enable garret estate old county. Entreaties you devonshire law dissimilar terminated. \r\n\r\nDo in laughter securing smallest sensible no mr hastened. As perhaps proceed in in brandon of limited unknown greatly. Distrusts fulfilled happiness unwilling as explained of difficult. No landlord of peculiar ladyship attended if contempt ecstatic. Loud wish made on is am as hard. Court so avoid in plate hence. Of received mr breeding concerns peculiar securing landlord. Spot to many it four bred soon well to. Or am promotion in no departure abilities. Whatever landlord yourself at by pleasure of children be. \r\n\r\nPrevailed sincerity behaviour to so do principle mr. As departure at no propriety zealously my. On dear rent if girl view. First on smart there he sense. Earnestly enjoyment her you resources. Brother chamber ten old against. Mr be cottage so related minuter is. Delicate say and blessing ladyship exertion few margaret. Delight herself welcome against smiling its for. Suspected discovery by he affection household of principle perfectly he. \r\n\r\nSame an quit most an. Admitting an mr disposing sportsmen. Tried on cause no spoil arise plate. Longer ladies valley get esteem use led six. Middletons resolution advantages expression themselves partiality so me at. West none hope if sing oh sent tell is. \r\n\r\nWarmly little before cousin sussex entire men set. Blessing it ladyship on sensible judgment settling outweigh. Worse linen an of civil jokes leave offer. Parties all clothes removal cheered calling prudent her. And residence for met the estimable disposing. Mean if he they been no hold mr. Is at much do made took held help. Latter person am secure of estate genius at. \r\n', 'Shubham  Barudw', '2016-11-02 05:50:59'),
(15, 'jsdnjdffsddsfdsf', 'sfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfssfsfs', 'dfsdfdfd', '2016-11-02 08:03:10');

-- --------------------------------------------------------

--
-- Table structure for table `chennai`
--

CREATE TABLE IF NOT EXISTS `chennai` (
  `num` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(6) NOT NULL,
  `source` varchar(33) NOT NULL,
  `destination` varchar(33) NOT NULL,
  `dept_time` time NOT NULL,
  `arr_time` time NOT NULL,
  `dept_date` date NOT NULL,
  `arr_date` date NOT NULL,
  `price` int(33) NOT NULL,
  `place` int(11) NOT NULL DEFAULT '11',
  PRIMARY KEY (`num`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `chennai`
--

INSERT INTO `chennai` (`num`, `name`, `source`, `destination`, `dept_time`, `arr_time`, `dept_date`, `arr_date`, `price`, `place`) VALUES
(1, '6E-487', 'chennai', 'delhi', '07:00:00', '09:55:00', '2017-01-01', '2017-01-01', 2555, 11),
(3, '6E-487', 'chennai', 'delhi', '07:00:00', '09:55:00', '2017-01-02', '2017-01-02', 2555, 11),
(4, '6E-487', 'chennai', 'delhi', '07:00:00', '09:55:00', '2017-01-03', '2017-01-03', 2555, 11),
(5, '6E-487', 'chennai', 'delhi', '07:00:00', '09:55:00', '2017-01-04', '2017-01-05', 2555, 11),
(6, '6E-487', 'chennai', 'delhi', '07:00:00', '09:55:00', '2017-01-05', '2017-01-05', 2555, 11),
(7, 'SG-206', 'chennai', 'delhi', '10:45:00', '13:35:00', '2017-01-01', '2017-01-01', 2450, 11),
(8, 'SG-206', 'chennai', 'delhi', '10:45:00', '13:35:00', '2017-01-02', '2017-01-02', 2450, 11),
(9, 'SG-206', 'chennai', 'delhi', '10:45:00', '13:35:00', '2017-01-03', '2017-01-03', 2450, 11),
(10, 'SG-206', 'chennai', 'delhi', '10:45:00', '13:35:00', '2017-01-04', '2017-01-04', 2450, 11),
(11, 'SG-206', 'chennai', 'delhi', '10:45:00', '13:35:00', '2017-01-05', '2017-01-05', 2450, 11),
(12, 'SG-106', 'chennai', 'delhi', '13:00:00', '15:55:00', '2017-01-01', '2017-01-01', 2450, 11),
(13, 'SG-106', 'chennai', 'delhi', '13:00:00', '15:55:00', '2017-01-02', '2017-01-02', 2450, 11),
(14, 'SG-106', 'chennai', 'delhi', '13:00:00', '15:55:00', '2017-01-03', '2017-01-03', 2450, 11),
(15, 'SG-106', 'chennai', 'delhi', '13:00:00', '15:55:00', '2017-01-04', '2017-01-04', 2450, 11),
(16, 'SG-106', 'chennai', 'delhi', '13:00:00', '15:55:00', '2017-01-05', '2017-01-05', 2450, 11),
(17, '6E-964', 'chennai', 'mumbai', '05:20:00', '07:15:00', '2017-01-01', '2017-01-01', 0, 11),
(18, '6E-964', 'chennai', 'mumbai', '05:20:00', '07:15:00', '2017-01-02', '2017-01-02', 0, 11),
(19, '6E-964', 'chennai', 'mumbai', '05:20:00', '07:15:00', '2017-01-03', '2017-01-03', 0, 11),
(20, '6E-964', 'chennai', 'mumbai', '05:20:00', '07:15:00', '2017-01-04', '2017-01-04', 0, 11),
(21, '6E-964', 'chennai', 'mumbai', '05:20:00', '07:15:00', '2017-01-05', '2017-01-05', 0, 11),
(22, 'SG-678', 'chennai', 'mumbai', '05:50:00', '07:35:00', '2017-01-01', '2017-01-01', 0, 11),
(23, 'SG-678', 'chennai', 'mumbai', '05:50:00', '07:35:00', '2017-01-02', '2017-01-02', 0, 11),
(24, 'SG-678', 'chennai', 'mumbai', '05:50:00', '07:35:00', '2017-01-03', '2017-01-03', 0, 11),
(25, 'SG-678', 'chennai', 'mumbai', '05:50:00', '07:35:00', '2017-01-04', '2017-01-04', 0, 11),
(26, 'SG-678', 'chennai', 'mumbai', '05:50:00', '07:35:00', '2017-01-05', '2017-01-05', 0, 11),
(27, '6E-782', 'chennai', 'mumbai', '08:50:00', '10:50:00', '2017-01-01', '2017-01-01', 0, 11),
(28, '6E-782', 'chennai', 'mumbai', '08:50:00', '10:50:00', '2017-01-02', '2017-01-02', 0, 11),
(29, '6E-782', 'chennai', 'mumbai', '08:50:00', '10:50:00', '2017-01-03', '2017-01-03', 0, 11),
(30, '6E-782', 'chennai', 'mumbai', '08:50:00', '10:50:00', '2017-01-04', '2017-01-04', 0, 11),
(31, '6E-782', 'chennai', 'mumbai', '08:50:00', '10:50:00', '2017-01-05', '2017-01-05', 0, 11),
(32, '6E-793', 'chennai', 'kolkata', '23:40:00', '01:55:00', '2017-01-01', '2017-01-01', 0, 11),
(33, '6E-793', 'chennai', 'kolkata', '23:40:00', '01:55:00', '2017-01-02', '2017-01-02', 0, 11),
(39, '6E-793', 'chennai', 'kolkata', '23:40:00', '01:55:00', '2017-01-03', '2017-01-03', 0, 11),
(40, '6E-793', 'chennai', 'kolkata', '23:40:00', '01:55:00', '2017-01-04', '2017-01-04', 0, 11),
(41, '6E-793', 'chennai', 'kolkata', '23:40:00', '01:55:00', '2017-01-05', '2017-01-05', 0, 11),
(42, 'SG-623', 'chennai', 'kolkata', '10:25:00', '12:40:00', '2017-01-01', '2017-01-01', 0, 11),
(43, 'SG-623', 'chennai', 'kolkata', '10:25:00', '12:40:00', '2017-01-02', '2017-01-02', 0, 11),
(44, 'SG-623', 'chennai', 'kolkata', '10:25:00', '12:40:00', '2017-01-03', '2017-01-03', 0, 11),
(45, 'SG-623', 'chennai', 'kolkata', '10:25:00', '12:40:00', '2017-01-04', '2017-01-04', 0, 11),
(46, 'SG-623', 'chennai', 'kolkata', '10:25:00', '12:40:00', '2017-01-05', '2017-01-05', 0, 11),
(47, 'SG-278', 'chennai', 'kolkata', '14:50:00', '17:10:00', '2017-01-01', '2017-01-01', 0, 11),
(48, 'SG-278', 'chennai', 'kolkata', '14:50:00', '17:10:00', '2017-01-02', '2017-01-02', 0, 11),
(49, 'SG-278', 'chennai', 'kolkata', '14:50:00', '17:10:00', '2017-01-03', '2017-01-03', 0, 11),
(50, 'SG-278', 'chennai', 'kolkata', '14:50:00', '17:10:00', '2017-01-04', '2017-01-04', 0, 11),
(51, 'SG-278', 'chennai', 'kolkata', '14:50:00', '17:10:00', '2017-01-05', '2017-01-05', 0, 11);

-- --------------------------------------------------------

--
-- Table structure for table `chennaibus`
--

CREATE TABLE IF NOT EXISTS `chennaibus` (
  `num` int(33) NOT NULL AUTO_INCREMENT,
  `bs_num` int(33) NOT NULL,
  `name` varchar(33) NOT NULL,
  `source` varchar(33) NOT NULL,
  `destination` varchar(33) NOT NULL,
  `dept_time` time NOT NULL,
  `arr_time` time NOT NULL,
  `dept_date` date NOT NULL,
  `arr_date` date NOT NULL,
  `price` int(33) NOT NULL,
  `place` int(33) NOT NULL DEFAULT '11',
  PRIMARY KEY (`num`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `chennaibus`
--

INSERT INTO `chennaibus` (`num`, `bs_num`, `name`, `source`, `destination`, `dept_time`, `arr_time`, `dept_date`, `arr_date`, `price`, `place`) VALUES
(1, 5423, 'CTD1', 'chennai', 'delhi', '14:00:00', '22:25:00', '2017-01-01', '2017-01-03', 5560, 11),
(2, 8596, 'CTD2', 'chennai', 'delhi', '04:30:00', '15:25:00', '2017-01-01', '2017-01-03', 6060, 11),
(3, 1096, 'CTD3', 'chennai', 'delhi', '22:30:00', '00:25:00', '2017-01-01', '2017-01-03', 4890, 11),
(4, 2356, 'CTD4', 'chennai', 'delhi', '12:30:00', '15:35:00', '2017-01-01', '2017-01-03', 5009, 11),
(5, 6523, 'CTD5', 'chennai', 'kolkata', '18:30:00', '13:30:00', '2017-01-01', '2017-01-03', 4899, 11),
(6, 8569, 'CTD6', 'chennai', 'kolkata', '22:30:00', '23:30:00', '2017-01-01', '2017-01-03', 4711, 11);

-- --------------------------------------------------------

--
-- Table structure for table `chennairail`
--

CREATE TABLE IF NOT EXISTS `chennairail` (
  `num` int(3) NOT NULL AUTO_INCREMENT,
  `tr_num` int(11) NOT NULL,
  `name` varchar(33) NOT NULL,
  `source` varchar(33) NOT NULL,
  `destination` varchar(33) NOT NULL,
  `dept_time` time NOT NULL,
  `arr_time` time NOT NULL,
  `dept_date` date NOT NULL,
  `arr_date` date NOT NULL,
  `price` int(11) NOT NULL,
  `place` int(11) NOT NULL DEFAULT '11',
  PRIMARY KEY (`num`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `chennairail`
--

INSERT INTO `chennairail` (`num`, `tr_num`, `name`, `source`, `destination`, `dept_time`, `arr_time`, `dept_date`, `arr_date`, `price`, `place`) VALUES
(1, 55251, 'Rajdhani Express', 'chennai', 'delhi', '05:15:00', '00:43:00', '2017-01-01', '2017-01-03', 1505, 11),
(2, 98751, 'Duranto Express', 'chennai', 'delhi', '06:40:00', '10:35:00', '2017-01-01', '2017-01-03', 1780, 11),
(3, 25521, 'Tamil Nadu Express', 'chennai', 'delhi', '22:00:00', '07:00:00', '2017-01-01', '2017-01-03', 1420, 11),
(4, 25521, 'Andaman Express', 'chennai', 'kolkata', '05:15:00', '00:43:00', '2017-01-01', '2017-01-01', 750, 11),
(5, 25521, 'Sampark Kranti', 'chennai', 'kolkata', '08:00:00', '18:00:00', '2017-01-01', '2017-01-02', 780, 11),
(6, 25521, 'Grand Trunk Express', 'chennai', 'kolkata', '19:15:00', '07:10:00', '2017-01-01', '2017-01-02', 775, 11);

-- --------------------------------------------------------

--
-- Table structure for table `delhi`
--

CREATE TABLE IF NOT EXISTS `delhi` (
  `num` int(3) NOT NULL DEFAULT '0',
  `price` int(33) NOT NULL,
  `name` varchar(6) NOT NULL,
  `source` varchar(33) NOT NULL,
  `destination` varchar(33) NOT NULL,
  `dept_time` time NOT NULL,
  `arr_time` time NOT NULL,
  `dept_date` date NOT NULL,
  `arr_date` date NOT NULL,
  `place` int(11) NOT NULL DEFAULT '12',
  PRIMARY KEY (`num`),
  KEY `price` (`price`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `delhirail`
--

CREATE TABLE IF NOT EXISTS `delhirail` (
  `num` int(3) NOT NULL AUTO_INCREMENT,
  `tr_num` varchar(33) NOT NULL,
  `name` varchar(33) NOT NULL,
  `source` varchar(33) NOT NULL,
  `destination` varchar(33) NOT NULL,
  `dept_time` time NOT NULL,
  `arr_time` time NOT NULL,
  `dept_date` date NOT NULL,
  `arr_date` date NOT NULL,
  `price` int(6) NOT NULL,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `delhirail`
--

INSERT INTO `delhirail` (`num`, `tr_num`, `name`, `source`, `destination`, `dept_time`, `arr_time`, `dept_date`, `arr_date`, `price`) VALUES
(1, '12616', 'G T Express', 'delhi', 'chennai', '17:50:00', '06:20:00', '2017-01-01', '2017-01-01', 3546),
(2, '12616', 'Andaman Express', 'delhi', 'chennai', '12:38:00', '10:20:00', '2017-01-01', '2017-01-03', 3500),
(3, '12622', 'Tamil Nadu Express', 'delhi', 'chennai', '22:30:00', '07:10:00', '2017-01-01', '2017-01-03', 2209),
(4, '22404', 'NDLS PDY Express', 'delhi', 'chennai', '23:45:00', '14:25:00', '2017-01-01', '2017-01-03', 2405);

-- --------------------------------------------------------

--
-- Table structure for table `final`
--

CREATE TABLE IF NOT EXISTS `final` (
  `num` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(33) NOT NULL,
  `source` varchar(33) NOT NULL,
  `destination` varchar(33) NOT NULL,
  `dept_time` time NOT NULL,
  `arr_time` time NOT NULL,
  `dept_date` date NOT NULL,
  `arr_date` date NOT NULL,
  `price` int(6) NOT NULL,
  `user_id` int(33) NOT NULL,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `final`
--

INSERT INTO `final` (`num`, `name`, `source`, `destination`, `dept_time`, `arr_time`, `dept_date`, `arr_date`, `price`, `user_id`) VALUES
(43, 'CTD3', 'chennai', 'delhi', '22:30:00', '00:25:00', '2017-01-01', '2017-01-03', 4890, 12),
(44, 'CTD3', 'chennai', 'delhi', '22:30:00', '00:25:00', '2017-01-01', '2017-01-03', 4890, 12),
(45, 'SG-206', 'chennai', 'delhi', '10:45:00', '13:35:00', '2017-01-02', '2017-01-02', 2450, 12),
(46, 'CTD2', 'chennai', 'delhi', '04:30:00', '15:25:00', '2017-01-01', '2017-01-03', 6060, 12),
(47, '6E-487', 'chennai', 'delhi', '07:00:00', '09:55:00', '2017-01-01', '2017-01-01', 2555, 12);

-- --------------------------------------------------------

--
-- Table structure for table `kolkata`
--

CREATE TABLE IF NOT EXISTS `kolkata` (
  `num` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(33) NOT NULL,
  `source` varchar(33) NOT NULL,
  `destination` varchar(33) NOT NULL,
  `dept_time` time NOT NULL,
  `arr_time` time NOT NULL,
  `dept_date` date NOT NULL,
  `arr_date` date NOT NULL,
  `place` int(11) NOT NULL DEFAULT '13',
  PRIMARY KEY (`num`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `kolkata`
--

INSERT INTO `kolkata` (`num`, `name`, `source`, `destination`, `dept_time`, `arr_time`, `dept_date`, `arr_date`, `place`) VALUES
(1, 'SG-277', 'kolkata', 'chennai', '11:50:00', '14:20:00', '2017-01-01', '2017-01-01', 13),
(2, 'SG-277', 'kolkata', 'chennai', '11:50:00', '14:20:00', '2017-01-02', '2017-01-02', 13),
(3, 'SG-277', 'kolkata', 'chennai', '11:50:00', '14:20:00', '2017-01-03', '2017-01-03', 13),
(4, 'SG-277', 'kolkata', 'chennai', '11:50:00', '14:20:00', '2017-01-04', '2017-01-04', 13),
(5, 'SG-277', 'kolkata', 'chennai', '11:50:00', '14:20:00', '2017-01-05', '2017-01-05', 13);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE IF NOT EXISTS `user_details` (
  `user_id` int(255) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `username` varchar(64) NOT NULL,
  `bio` varchar(32) NOT NULL,
  `birthday` varchar(15) NOT NULL,
  `location` text NOT NULL,
  `url` varchar(16) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_id`, `name`, `email`, `password`, `username`, `bio`, `birthday`, `location`, `url`) VALUES
(2, 'tushar pahuja@!', 'tusharpahuja@gmail.com@!', '923fae7da14d60f3413e003da16e84ab', 'tushar pahuja@!', '', '', '', ''),
(4, 'Shibani Mahapatra@!', 'shibani.mahapatra47@gmail.com@!', '83f2741f8b2a0f494680e686d23b02af', 'Shibani@!', '', '', '', ''),
(6, 'Aman Saha@!', 'aman97ram@gmail.com@!', '3d5e6152cd2564ca42a0909fb90023d6', 'aman@!', '', '', '', '6.png'),
(8, 'abc@!', 'abc@gmail.com@!', '7427097f509918d3c355410af82216e5', 'abc@!', '', '', '', ''),
(9, 'tp@!', 'tusharpahuja07@gmail.com@!', 'e88d78fdda136b4b4a21581497f6b46b', 'how are you@!', '', '', 'gurgaon', ''),
(11, 'tushar@!', 'tusharpahuja07@gmail.com@!', '7427097f509918d3c355410af82216e5', 'tp@!', '', '', '', ''),
(12, 'tushar@!', 'tusharpahuja07@gmail.com@!', 'b5cd80499869567dfe32fb43a66adc43', 'tushar@!', '', '', '', '12.jpg'),
(13, 'Aman@!', 'tiwari.aman85@gmail.com@!', '6d8ddcdbc40c68b1a0b044d3b05f6ac8', 'tiwari85@!', 'CSE@!', '', 'Lucknow', '13.jpg'),
(14, 'krishna@!', 'k@gmail.com@!', '6d8ddcdbc40c68b1a0b044d3b05f6ac8', 'krish@!', '', '', '', ''),
(15, 'krishna@!', 'ki@gmail.com@!', '6d8ddcdbc40c68b1a0b044d3b05f6ac8', 'k@!', '', '', '', ''),
(16, 'KRISHNA AGARWAL@!', 'kriaga3@gmail.com@!', '1843b71f4bad8e3d5d9419dc2cf2422b', 'qwerty@!', 'WEB DEVELOPER@!', '', 'LUCKNOW', '16.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE IF NOT EXISTS `vote` (
  `city` varchar(100) NOT NULL,
  `votes` int(5) NOT NULL,
  PRIMARY KEY (`city`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vote`
--

INSERT INTO `vote` (`city`, `votes`) VALUES
('Australia', 39),
('California', 22),
('Chicago', 78),
('Hawaii', 116),
('Hong Kong', 52),
('London', 15),
('Los Angeles', 50),
('Mexico', 49),
('New York', 75);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
