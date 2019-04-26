<?php
session_start();
$conn = new mysqli('db', 'root', 'islab', 'sqli');
if($conn->errno) die('connect error');
$sql_create = <<<EOSQL
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('Aaron','ec6f2baa6939bc8ccf81aa7f3ff4c241b0a15637','50'),('Adam','c64d47f13d5591f1c460860aa01896bf093d1a8c','72'),('Adrian','0755ac420d0cb696ca3ccf3fad93e8e99d913c6f','56'),('Aidan','4457675eb781c4a8346009ef891b63cfc9735e75','59'),('Aiden','df00c978b75ee9d7d197a63c1c52930e4dddf2fe','16'),('Alex','f0c450be59436e84639afee1dae2b80af1e8af23','85'),('Alexander','994ad98c52bb7d221741def9181a748cecff1d5f','6'),('Andrew','54b45330d818e7142da6d36e322b131b4dc6a7a1','12'),('Angel','b0674d43babdc39e41c92b9cb279072d5e78a26e','36'),('Anthony','43f5f6718b7f283bc2481ff7a06f504ece75e621','7'),('Austin','76c2e8d06fedccb8a2c57ddda40475c106b523a6','55'),('Ayden','e83d97c9629095a34f1dc9c4bb6450b40185d8f7','91'),('Benjamin','df72a21ef12e4049162f26b0c22c4469a75f34c2','25'),('Blake','648b2c9423c6e4c5718aed771820ccbef24bd207','90'),('Brady','b2b4186d727ac047e9cf8750df43a9e298d47aad','94'),('Brandon','2052fc0a0aa4b17fda8637b4dddb06040367e2b3','33'),('Brayden','0d469d29dd47c50cb3a24834851bd9f31ccce48f','51'),('Brian','eb6796fb459b696226ccd52fc7b701c7cfad07cb','87'),('Brody','3e06a16b2bcd0f4490c872325bcaf8b27a43cb7d','70'),('Bryan','e3d39380f6af0f98852fe0c254999d639ea96952','82'),('Caden','2b9d640b4d2b7d03196b04ada09155d5a99490bf','95'),('Caleb','a31152eeb0c5ce8feb23841131041f35ff342a19','34'),('Cameron','43ca68bf55cc81455c5976e430bdfbc1ba901dc7','53'),('Carlos','0d837bbb1ff79649e92b4cae5fb574a3ad2ee0d3','73'),('Carson','cf565993f903de22180d7c74501d67f53eb29afd','89'),('Carter','9aa8fac4d64f2c3d05a792da3234d7348b1253ee','65'),('Charles','0932a2e7e4dda128b177a468ce7a43e61e35779d','63'),('Chase','2159de7d54fac1a921586b5fef804807b1d8fc2b','67'),('Christian','a24a27ba079df7bd6ed0e25cd05b8dd2fa89c966','23'),('Christopher','19115f6da561c0edd9ad3801c3ffb23443b47c08','9'),('Cole','f2325d399ffe9c6bff653ae1b5fcc0e62f9ce24f','84'),('Colton','5ea7483b822a81ad99e74dbee536c8c781c34be1','98'),('Connor','97738e1cb12bf89b8bab2b288688bec5d41996c8','57'),('Cooper','a5ca1bd76b8b3e43ba9bf726447df09d31297fb5','92'),('Daniel','3d4be6bf7bced541aaaf8113b5cc875341bf30ac','5'),('David','f6a26861c4f9f49b4ba89cda9c4d4b733b7bb4db','14'),('Diego','ba97b81c5dd59a1777d728b7e5a7f650a6516ba5','68'),('Dominic','881ba8901e14f0dcfc163ff4562acf1116f8b097','93'),('Dylan','4c5ddbc3ab021a9b7341ff32037c6928250da2c0','31'),('Eli','f646b9e1c80ffb486d017d48c2e3831236289e02','100'),('Elijah','fb42eb6ed0fc4bcc93ea3c3c537165b3750faf0f','22'),('Eric','3f39a7dbd1f4343eb4254e352261abfc174cb54e','86'),('Ethan','0baf99f46aaaefd01899a42be2ccc58dd15eb0cd','3'),('Evan','546ca27b29d0ce9af1e7d33c7f8e8737e580ff8a','38'),('flag',
'jian ge shen me shi hou tuo dan a','flag{s3c0nd-OD5red-Inj5cTIon}'),('Gabriel','fb49a5e5305eb81f6ae14561f8d3e7c9f2fe4276','24'),('Gavin','37c575d76db00bd646122868644be727ab275ee6','30'),('Hayden','deb37059e11300d9a877aa39317fd4ce27526018','76'),('Henry','578484609af67a9d9ee97407df93ce6be92def3e','78'),('Hunter','e16482bdac49d7bef18ea0931f928dca38e0221c','54'),('Ian','2fc6dbeb4290aa425ec686f12a8c20369e13d896','80'),('Isaac','172af84a8926ec2faeea36670b802d3820f70433','37'),('Isaiah','9ef9ef7721a5e158b2627d08761162280fe41f8c','42'),('Jack','4599d2a567077a06371948e246130103791907f2','39'),('Jackson','24fbe81585514816b7722168f138f4fad2d56bd1','32'),('Jacob','aaca9acfffcc8c0e1e1b45a995f153ca0aa308a6','1'),('Jaden','1033d5004d736bfb980696f156577ecf1e33566e','88'),('James','bf04740f221d9bb5c4efbe84adc3e29ed451ea6c','17'),('Jason','878752be211878d24865aa35d9933c3fc444f0c2','60'),('Jayden','d4dff20ac430ed2c84ff0c896e1075987ad1cc8b','11'),('Jeremiah','9e38e686d412577ef77287fe6f65d4db317ae1fe','69'),('Jesus','ae5acfac1e1a66615b033e078e82704cd56871af','79'),('John','f11d003221d0536add3e0b772dc9491d7e155ada','20'),('Jonathan','3bf84477de93fea77fa69769fdf5131c107c7813','26'),('Jordan','c73bdae2bc3b684388be2cd721775370ad97b0cc','48'),('Jose','e8b6600ba921eba21995751ecb9652af49dd3794','41'),('Joseph','b56039c2c25b4ce877d2c09cff3eff9e2d174d07','13'),('Joshua','d2a0f5ee423e47feaea5c3f0bd869b3851d8234c','4'),('Josiah','ab35f10ea070d02c6697723706db8d491f109484','96'),('Juan','00d587d068f5b12056d730f833d931f0c92bb2d2','66'),('Julian','0ef4d6996df6d8ef543e7b486cfadb242068830a','61'),('Justin','865dda95eb6b9c3b27af143b3943b6f78ddb67aa','45'),('Kaden','0ce416b0964b3b8548432552c6585b53887940ba','99'),('Kevin','85b5326be9046699ccc6b87ef34aa60ffb753d97','40'),('Kyle','ba1870b1eac3ce3c9bad21094b3d9356eda66a0d','97'),('Landon','97f365d77e04dce423f4f004f3b101c9c9724f7f','44'),('Liam','1e58aafc4ce7c015707c6b7fef99767036d2ac78','75'),('Logan','451fb17d83dbf86af87973aeb18073999cb5bbf1','19'),('Lucas','be8ebbd0509982573f12464dea9ad03ff67d5558','46'),('Luis','170be5f29a7924e3010312a62e7e63a6f2a4d931','64'),('Luke','b025a87be68970e8f8285a86fc9302b5b5fec432','43'),('Mason','afe1269d17fc5271626b5b1da99654a8bc7ef3b7','35'),('Matthew','3bc47ca662013dd6bb8782cfa9e04fcb1d96c7ba','10'),('Michael','740daac839b88ef65dc8be621f98254c08978204','2'),('Nathan','c6ca4b57f88b16111acf2bd7a3e8b5b3cb5de54c','21'),('Nathaniel','dbe47b620454982680b25f01a975a5132c194e17','77'),('Nicholas','3a115deeb295adfcbae73d3fde7786369ea7f918','29'),('Noah','050030183186de16ec9699e3a699025cce96e6d9','15'),('Owen','ae8b2662f09ca4b4132839b79ff997559e7c1a18','58'),('Robert','9f69a36122be7933666e27ba48befd744a3a00c8','49'),('Ryan','9ea15c1d0e8d9508b22a1fff73d6a687d1107810','18'),('Samuel','7debbfd71c608bce70f84d5a9f6c329edec07317','28'),('Sean','2b3ac260dfe95cb5448afcb703938f9555d1fa6e','83'),('Sebastian','c328d21cc294b8ff5613edb8de99e4d8bef6c67d','74'),('Thomas','b7fa3abf10371d15291f702415ba4738fd9555cd','52'),('Tristan','40ed62d0f41ef7b447f7570c34300cea4f4665cd','81'),('Tyler','70259f8e5e0c2912227bb8ef715f850222b309d5','27'),('William','643a893ffddb051b41058c79b9643f620b7f5154','8'),('Wyatt','6c9f8912a7c9a209fa16d57a93e4074c68168427','62'),('Xavier','fcaf7c61befa5fde0732cb4730285d094619e7d8','71'),('Zachary','2e265db91342e1b5a3484cdfea3cf6e04e3870d6','47');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-04-26  5:44:00
EOSQL;
if($conn->query("SHOW TABLES LIKE 'user'")->num_rows == 0){
	echo $conn->error;
	$conn->multi_query($sql_create);
	echo $conn->error;
}