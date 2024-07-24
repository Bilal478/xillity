

CREATE TABLE `smsCampaigner_log` (
  `id` varchar(200) NOT NULL,
  `title` varchar(256) DEFAULT '',
  `timeAdded` varchar(256) DEFAULT NULL,
  `userId` varchar(256) DEFAULT NULL,
  `ip` varchar(255) NOT NULL,
  `get_method` varchar(255) NOT NULL,
  `post_method` varchar(255) NOT NULL,
  `page` varchar(256) DEFAULT '',
  `url` varchar(256) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_log VALUES ('ANFEHSLYFW', 'businesses was created', '1681452583', 'admin', '119.152.240.15', '[]', '{\"business_name\":\"test log\",\"email\":\"hello@gmail.com\",\"phone\":\"3081845139\",\"address\":\"Islamabad\",\"actionId\":\"\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('LT6VBLIYRK', 'customers was created', '1681546249', 'admin', '119.73.96.11', '[]', '{\"first_name\":\"Ahsan\",\"last_name\":\"cust\",\"name\":\"Ahsan cust\",\"phone\":\"123\",\"phone2\":\"\",\"address\":\"Karachi, Pakistan\",\"address2\":\"Lahore, Pakistan\",\"email\":\"\",\"password\":\"dc31878852f15caa822bcd8b3494299e\",\"role\":\"customer\",\"addedBy\":\"admin\",\"actionId\":\"\",\"', '', '');
INSERT INTO smsCampaigner_log VALUES ('NRFRXKVO1T', 'Employee was updated', '1681771969', 'admin', '98.147.140.106', '[]', '{\"name\":\"Test\",\"email\":\"admin@portal.com2\",\"password\":\"3cce45bf21f047a954e1861c653a14ba\",\"phone\":\"\",\"address\":\"\",\"role\":\"employee\",\"addedBy\":\"admin\",\"business\":\"U44AM4V4DM\",\"actionId\":\"9JY05NZ55G\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('XHRFEPI4W3', 'Employee was updated', '1681772138', 'admin', '98.147.140.106', '[]', '{\"name\":\"Test\",\"email\":\"admin@portal.com2\",\"password\":\"dc31878852f15caa822bcd8b3494299e\",\"phone\":\"\",\"address\":\"\",\"role\":\"employee\",\"addedBy\":\"admin\",\"business\":\"WY0P35OAEG\",\"actionId\":\"9JY05NZ55G\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('J2SMAB1SVB', 'Employee was updated', '1681772157', 'admin', '98.147.140.106', '{\"m\":\"Data was saved successfully!\"}', '{\"name\":\"Test\",\"email\":\"admin@portal.com2\",\"password\":\"3cce45bf21f047a954e1861c653a14ba\",\"phone\":\"\",\"address\":\"\",\"role\":\"employee\",\"addedBy\":\"admin\",\"business\":\"WY0P35OAEG\",\"actionId\":\"9JY05NZ55G\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('O132NI54J4', 'businesses was deleted', '1681772247', 'admin', '98.147.140.106', '{\"delete-record\":\"PNYATA0I14\"}', '[]', '', '');
INSERT INTO smsCampaigner_log VALUES ('66WE2ONVBY', 'businesses was deleted', '1681772250', 'admin', '98.147.140.106', '{\"delete-record\":\"WY0P35OAEG\"}', '[]', '', '');
INSERT INTO smsCampaigner_log VALUES ('EHC1V945PN', 'businesses was deleted', '1681772255', 'admin', '98.147.140.106', '{\"delete-record\":\"U44AM4V4DM\"}', '[]', '', '');
INSERT INTO smsCampaigner_log VALUES ('DR4D86QB9P', 'Employee was deleted', '1681772262', 'admin', '98.147.140.106', '{\"delete-record\":\"QWARKSH0RX\"}', '[]', '', '');
INSERT INTO smsCampaigner_log VALUES ('5IMX4EMD4P', 'Employee was deleted', '1681772265', 'admin', '98.147.140.106', '{\"delete-record\":\"9JY05NZ55G\"}', '[]', '', '');
INSERT INTO smsCampaigner_log VALUES ('J8FLBUE4NA', 'Employee was created', '1682809215', 'admin', '98.147.140.106', '[]', '{\"name\":\"test\",\"email\":\"test@ggmail.com\",\"password\":\"39c3a5dca68ea2715afa59e1bfaa88e8\",\"phone\":\"\",\"address\":\"\",\"role\":\"employee\",\"addedBy\":\"admin\",\"business\":\"6UJ62S3L09\",\"actionId\":\"\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('3W8CGV67V5', 'Calendar Reminders was Created', '1683693702', 'admin', '38.10.172.55', '[]', '{\"title\":\"asdsad\",\"description\":\"213\",\"date\":\"2023-05-10\",\"apptTime\":\"12:43\",\"actionId\":\"\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('KFCB6C49RJ', 'Employee was updated', '1683889190', 'admin', '43.242.178.80', '[]', '{\"name\":\"Employee\",\"email\":\"employee@gmail.com\",\"password\":\"fee7e03bb7d77842221417760d35357a\",\"phone\":\"\",\"address\":\"\",\"role\":\"employee\",\"addedBy\":\"admin\",\"business\":\"6UJ62S3L09\",\"actionId\":\"RI82I7EMBY\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('EERE32QAN9', 'Employee was created', '1683889851', 'admin', '43.242.178.80', '[]', '{\"name\":\"arsalan khan\",\"email\":\"bluefiredeveloper@gmail.com\",\"password\":\"7ce9eda66fc798bf6b5466a5af544019\",\"phone\":\"992000420204\",\"address\":\"\",\"role\":\"employee\",\"addedBy\":\"admin\",\"business\":\"6UJ62S3L09\",\"actionId\":\"\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('3LJQB32YIL', 'Invoices was Deleted', '1684553149', 'admin', '202.47.55.58', '{\"delete-record\":\"8XO99VLJVF\"}', '[]', '', '');
INSERT INTO smsCampaigner_log VALUES ('QP1QTDPNKI', 'Invoices was Deleted', '1684553157', 'admin', '202.47.55.58', '{\"delete-record\":\"38ZLB585GE\"}', '[]', '', '');
INSERT INTO smsCampaigner_log VALUES ('YVFTHLLHFN', 'Invoices was Deleted', '1684569562', 'admin', '202.47.55.58', '{\"delete-record\":\"8WT1B45PQU\"}', '[]', '', '');
INSERT INTO smsCampaigner_log VALUES ('K2ANLIXBDI', 'Invoices was Deleted', '1684569570', 'admin', '202.47.55.58', '{\"delete-record\":\"BYQHF00VYB\"}', '[]', '', '');
INSERT INTO smsCampaigner_log VALUES ('L48VEY2X3P', 'Invoices was Deleted', '1684569574', 'admin', '202.47.55.58', '{\"delete-record\":\"YBEM83EKR1\"}', '[]', '', '');
INSERT INTO smsCampaigner_log VALUES ('YJSJB7YAUL', 'Invoices was Deleted', '1684569971', 'admin', '202.47.55.58', '{\"delete-record\":\"B7Q5T4K61V\"}', '[]', '', '');
INSERT INTO smsCampaigner_log VALUES ('0HS9JRZXSN', 'Invoices was Deleted', '1684608259', 'admin', '202.47.55.58', '{\"delete-record\":\"O1WLAXO1ZL\"}', '[]', '', '');
INSERT INTO smsCampaigner_log VALUES ('CJNO27YKKI', 'Invoices was Deleted', '1684609180', 'admin', '202.47.55.58', '{\"delete-record\":\"HQ2YM4BFXX\"}', '[]', '', '');
INSERT INTO smsCampaigner_log VALUES ('FR49IV9FCI', 'Invoices was Deleted', '1684612593', 'admin', '202.47.55.58', '{\"delete-record\":\"VK9V78H35H\"}', '[]', '', '');
INSERT INTO smsCampaigner_log VALUES ('Q9Q7A9PQRW', 'Invoices was Deleted', '1684612647', 'admin', '202.47.55.58', '{\"delete-record\":\"6XS6K4NA5M\"}', '[]', '', '');
INSERT INTO smsCampaigner_log VALUES ('K6DUKHEF72', 'Invoices was Deleted', '1684612653', 'admin', '202.47.55.58', '{\"delete-record\":\"KH712QLPKK\"}', '[]', '', '');
INSERT INTO smsCampaigner_log VALUES ('B9SO19JDDH', 'Invoices was Deleted', '1684612656', 'admin', '202.47.55.58', '{\"delete-record\":\"NMSJZB4NZH\"}', '[]', '', '');
INSERT INTO smsCampaigner_log VALUES ('K6A4I7XIE0', 'Invoices was Deleted', '1684612659', 'admin', '202.47.55.58', '{\"delete-record\":\"XEHFMK2XLC\"}', '[]', '', '');
INSERT INTO smsCampaigner_log VALUES ('PLOBTLA1FE', 'Invoices was Deleted', '1684612772', 'admin', '202.47.55.58', '{\"delete-record\":\"416EL0V90N\"}', '[]', '', '');
INSERT INTO smsCampaigner_log VALUES ('OY07APSUKX', 'Invoices was Deleted', '1684613327', 'admin', '202.47.55.58', '{\"delete-record\":\"416EL0V90N\"}', '[]', '', '');
INSERT INTO smsCampaigner_log VALUES ('ZC9CUKOQAZ', 'Invoices was Deleted', '1684613337', 'admin', '202.47.55.58', '{\"delete-record\":\"416EL0V90N\"}', '{\"invoice_id\":\"8VK7BLVZ4V\",\"payment\":\"10\",\"credit\":\"0\",\"total\":\"200\",\"payment_type\":\"\",\"client_id\":\"BPEHZ88M1J\",\"note\":\"\",\"payment_date\":\"\",\"total_payment\":\"200\",\"actionId\":\"\",\"create_package1\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('K5ULW3KCTJ', 'Invoices was Deleted', '1684614980', 'admin', '202.47.55.58', '{\"delete-record\":\"8VK7BLVZ4V\"}', '[]', '', '');
INSERT INTO smsCampaigner_log VALUES ('TO4F8U00ZY', 'Invoices was Deleted', '1684616381', 'admin', '202.47.55.58', '{\"delete-record\":\"E4CFOLIAJJ\"}', '[]', '', '');
INSERT INTO smsCampaigner_log VALUES ('TSARCMPRDN', 'Invoices was Deleted', '1684657227', 'admin', '202.47.55.58', '{\"delete-record\":\"1JSB4L9OTQ\"}', '[]', '', '');
INSERT INTO smsCampaigner_log VALUES ('KK3GOGUIUH', 'Invoices was Deleted', '1684657229', 'admin', '202.47.55.58', '{\"delete-record\":\"40ZZW77GCU\"}', '[]', '', '');
INSERT INTO smsCampaigner_log VALUES ('SJ6LCC6KB7', 'Invoices was Deleted', '1684657230', 'admin', '202.47.55.58', '{\"delete-record\":\"A52V02CRTO\"}', '[]', '', '');
INSERT INTO smsCampaigner_log VALUES ('CAZB1HU1JR', 'Invoices was Deleted', '1684657232', 'admin', '202.47.55.58', '{\"delete-record\":\"HQA83QFBGS\"}', '[]', '', '');
INSERT INTO smsCampaigner_log VALUES ('6RBO2TXW8U', 'Invoices was Deleted', '1684657233', 'admin', '202.47.55.58', '{\"delete-record\":\"MDBN4M6CMG\"}', '[]', '', '');
INSERT INTO smsCampaigner_log VALUES ('I97TDR5WT2', 'Invoices was Deleted', '1684657236', 'admin', '202.47.55.58', '{\"delete-record\":\"OS36QMXIUS\"}', '[]', '', '');
INSERT INTO smsCampaigner_log VALUES ('QWHEB1EL51', 'Invoices was Deleted', '1684657238', 'admin', '202.47.55.58', '{\"delete-record\":\"T04A40D627\"}', '[]', '', '');
INSERT INTO smsCampaigner_log VALUES ('6J7WV0VIRC', 'Product was updated', '1684821140', 'admin', '202.47.45.197', '[]', '{\"title\":\"asdasdsadd7\",\"description\":\"ad\",\"options\":\"sad\",\"upcharges\":\"sad\",\"qty\":\"214\",\"price\":\"213\",\"mac_address\":\"213\",\"serial_number\":\"23\",\"actionId\":\"4B5CP0CFRA\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('R6Z1IJYRJK', 'Product was updated', '1684843339', 'admin', '38.7.190.38', '[]', '{\"title\":\"test\",\"description\":\"box\",\"options\":\"\",\"upcharges\":\"\",\"qty\":\"110\",\"price\":\"\",\"mac_address\":\"\",\"serial_number\":\"\",\"actionId\":\"OTNOU913MG\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('37BHPOVE3M', 'Product was updated', '1684915161', 'admin', '38.10.172.69', '[]', '{\"title\":\"product1\",\"description\":\"product1\",\"options\":\"product1\",\"upcharges\":\"product1\",\"qty\":\"23\",\"price\":\"\",\"mac_address\":\"\",\"serial_number\":\"\",\"actionId\":\"VM1FIQIR5R\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('G8QZPK2JRI', 'Product was updated', '1684915279', 'admin', '38.10.172.69', '{\"m\":\"Data was saved successfully!\"}', '{\"title\":\"asdasdsadd\",\"description\":\"ad\",\"options\":\"sadd\",\"upcharges\":\"sad\",\"qty\":\"214\",\"price\":\"213\",\"mac_address\":\"aaa11\",\"serial_number\":\"23\",\"category\":\"XQDENVFJAY\",\"actionId\":\"EF4WR2R10L\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('HHP28R3RNA', 'Product was updated', '1684915297', 'admin', '38.10.172.69', '{\"m\":\"Data was saved successfully!\"}', '{\"title\":\"asdasdsadd\",\"description\":\"ad\",\"options\":\"sadd\",\"upcharges\":\"sads\",\"qty\":\"214\",\"price\":\"213\",\"mac_address\":\"aaa11\",\"serial_number\":\"23\",\"category\":\"XQDENVFJAY\",\"actionId\":\"EF4WR2R10L\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('9NYHMKI79Y', 'Product was updated', '1684915772', 'admin', '38.10.172.69', '[]', '{\"title\":\"asdasdsadd\",\"description\":\"ad\",\"options\":\"sadd\",\"upcharges\":\"sads\",\"qty\":\"214\",\"price\":\"213\",\"mac_address\":\"aaa11\",\"serial_number\":\"23\",\"category\":\"XQDENVFJAY\",\"actionId\":\"EF4WR2R10L\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('ZJEWSRTIGM', 'Product was updated', '1684915784', 'admin', '38.10.172.69', '{\"m\":\"Data was saved successfully!\"}', '{\"title\":\"asdasdsadd\",\"description\":\"ad\",\"options\":\"sadds\",\"upcharges\":\"sads\",\"qty\":\"214\",\"price\":\"213\",\"mac_address\":\"aaa11\",\"serial_number\":\"23\",\"category\":\"XQDENVFJAY\",\"actionId\":\"EF4WR2R10L\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('IS20GC2EER', 'Product was created', '1684918805', 'admin', '38.10.172.69', '[]', '{\"title\":\"zzz\",\"description\":\"12321\",\"options\":\"\",\"upcharges\":\"\",\"qty\":\"\",\"price\":\"\",\"mac_address\":\"\",\"serial_number\":\"\",\"actionId\":\"\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('KA68K48GAK', 'Product was deleted', '1684918911', 'admin', '38.10.172.69', '{\"delete-record\":\"TBDPZJXI2Z\"}', '[]', '', '');
INSERT INTO smsCampaigner_log VALUES ('9RUQ4M374M', 'Product was updated', '1684919572', 'admin', '38.10.172.69', '[]', '{\"title\":\"asdasdsadd\",\"description\":\"ad\",\"options\":\"sadds\",\"upcharges\":\"sads\",\"qty\":\"214\",\"price\":\"213\",\"mac_address\":\"aaa11\",\"serial_number\":\"23\",\"category\":\"XQDENVFJAY\",\"actionId\":\"EF4WR2R10L\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('7QT03HT2E2', 'Product was updated', '1684919587', 'admin', '38.10.172.69', '{\"m\":\"Data was saved successfully!\"}', '{\"title\":\"asdasdsadd\",\"description\":\"ads\",\"options\":\"sadds\",\"upcharges\":\"sads\",\"qty\":\"214\",\"price\":\"213\",\"mac_address\":\"aaa11\",\"serial_number\":\"23\",\"category\":\"XQDENVFJAY\",\"actionId\":\"EF4WR2R10L\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('JQMTA00S8Y', 'Product was updated', '1685777203', 'admin', '202.47.45.197', '[]', '{\"title\":\"asdasdsadd\",\"description\":\"ads\",\"options\":\"sadds\",\"upcharges\":\"sads\",\"qty\":\"214\",\"price\":\"213\",\"mac_address\":\"aaa11\",\"serial_number\":\"23\",\"category\":\"XQDENVFJAY\",\"actionId\":\"EF4WR2R10L\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('TD9VYPGFU6', 'Product was updated', '1685777208', 'admin', '202.47.45.197', '{\"m\":\"Data was saved successfully!\"}', '{\"title\":\"asdasdsadd\",\"description\":\"ads\",\"options\":\"sadds\",\"upcharges\":\"sads\",\"qty\":\"214\",\"price\":\"213\",\"mac_address\":\"aaa11\",\"serial_number\":\"23\",\"category\":\"XQDENVFJAY\",\"actionId\":\"EF4WR2R10L\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('I2VHGFA8RO', 'Product was updated', '1685777247', 'admin', '202.47.45.197', '{\"m\":\"Data was saved successfully!\"}', '{\"title\":\"asdasdsadd\",\"description\":\"ads\",\"options\":\"sadds\",\"upcharges\":\"sads\",\"qty\":\"214\",\"price\":\"213\",\"mac_address\":\"aaa11\",\"serial_number\":\"23\",\"category\":\"XQDENVFJAY\",\"actionId\":\"EF4WR2R10L\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('T64Y20CTND', 'Product was updated', '1685777255', 'admin', '202.47.45.197', '{\"m\":\"Data was saved successfully!\"}', '{\"title\":\"asdasdsadd\",\"description\":\"ads\",\"options\":\"sadds6\",\"upcharges\":\"sads\",\"qty\":\"214\",\"price\":\"213\",\"mac_address\":\"aaa11\",\"serial_number\":\"23\",\"category\":\"XQDENVFJAY\",\"actionId\":\"EF4WR2R10L\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('SLZ9BRU9CW', 'Product was updated', '1685778753', 'admin', '43.242.178.57', '[]', '{\"title\":\"asdasdsadd\",\"description\":\"ads\",\"options\":\"sadds6\",\"upcharges\":\"sads\",\"qty\":\"214\",\"price\":\"213\",\"mac_address\":\"aaa11\",\"serial_number\":\"23\",\"category\":\"XQDENVFJAY\",\"actionId\":\"EF4WR2R10L\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('S27RZUP2VE', 'Product was updated', '1685783934', 'admin', '43.242.178.124', '[]', '{\"title\":\"asdasdsadd\",\"description\":\"ads\",\"options\":\"sadds6\",\"upcharges\":\"sads\",\"qty\":\"214\",\"price\":\"213\",\"mac_address\":\"aaa11\",\"serial_number\":\"23\",\"category\":\"XQDENVFJAY\",\"actionId\":\"EF4WR2R10L\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('T3ZFYOXRXG', 'Product was updated', '1685783949', 'admin', '43.242.178.124', '{\"m\":\"Data was saved successfully!\"}', '{\"title\":\"asdasdsadd\",\"description\":\"ads\",\"options\":\"sadds6\",\"upcharges\":\"sads\",\"qty\":\"214\",\"price\":\"213\",\"mac_address\":\"aaa11\",\"serial_number\":\"23\",\"category\":\"XQDENVFJAY\",\"actionId\":\"EF4WR2R10L\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('VDD8SCJXD6', 'Product was updated', '1685783971', 'admin', '43.242.178.124', '{\"m\":\"Data was saved successfully!\"}', '{\"title\":\"asdasdsadd\",\"description\":\"ads\",\"options\":\"sadds6\",\"upcharges\":\"sads\",\"qty\":\"214\",\"price\":\"213\",\"mac_address\":\"aaa11\",\"serial_number\":\"23\",\"category\":\"XQDENVFJAY\",\"actionId\":\"EF4WR2R10L\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('OI8GZWMORT', 'Product was updated', '1685784169', 'admin', '43.242.178.124', '[]', '{\"title\":\"asdasdsadd\",\"description\":\"ads\",\"options\":\"sadds6\",\"upcharges\":\"sads\",\"qty\":\"214\",\"price\":\"213\",\"mac_address\":\"aaa11\",\"serial_number\":\"23\",\"category\":\"XQDENVFJAY\",\"actionId\":\"EF4WR2R10L\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('9P86YH8Y5H', 'Product was updated', '1685784180', 'admin', '43.242.178.124', '{\"m\":\"Data was saved successfully!\"}', '{\"title\":\"asdasdsadd\",\"description\":\"ads\",\"options\":\"sadds6\",\"upcharges\":\"sads\",\"qty\":\"214\",\"price\":\"213\",\"mac_address\":\"aaa11\",\"serial_number\":\"23\",\"category\":\"XQDENVFJAY\",\"actionId\":\"EF4WR2R10L\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('HMC32FV53I', 'Product was updated', '1685784192', 'admin', '43.242.178.124', '{\"m\":\"Data was saved successfully!\"}', '{\"title\":\"asdasdsadd\",\"description\":\"ads\",\"options\":\"sadds6\",\"upcharges\":\"sads\",\"qty\":\"214\",\"price\":\"213\",\"mac_address\":\"aaa11\",\"serial_number\":\"23\",\"category\":\"XQDENVFJAY\",\"actionId\":\"EF4WR2R10L\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('FVI53RCEKM', 'Product was updated', '1685784207', 'admin', '43.242.178.124', '{\"m\":\"Data was saved successfully!\"}', '{\"title\":\"asdasdsadd\",\"description\":\"ads\",\"options\":\"sadds6\",\"upcharges\":\"sads\",\"qty\":\"214\",\"price\":\"213\",\"mac_address\":\"aaa11\",\"serial_number\":\"23\",\"category\":\"XQDENVFJAY\",\"actionId\":\"EF4WR2R10L\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('WGP6CUDKG6', 'Product was updated', '1685784276', 'admin', '43.242.178.124', '{\"m\":\"Data was saved successfully!\"}', '{\"title\":\"asdasdsadd\",\"description\":\"ads\",\"options\":\"sadds6\",\"upcharges\":\"sads\",\"qty\":\"214\",\"price\":\"213\",\"mac_address\":\"aaa11\",\"serial_number\":\"23\",\"category\":\"XQDENVFJAY\",\"actionId\":\"EF4WR2R10L\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('HMSOECEWH5', 'Product was updated', '1685784290', 'admin', '43.242.178.124', '{\"m\":\"Data was saved successfully!\"}', '{\"title\":\"abc\",\"description\":\"ads\",\"options\":\"sadds6\",\"upcharges\":\"sads\",\"qty\":\"214\",\"price\":\"213\",\"mac_address\":\"aaa11\",\"serial_number\":\"23\",\"category\":\"XQDENVFJAY\",\"actionId\":\"EF4WR2R10L\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('YZ0NP6C5US', 'Product was updated', '1685784304', 'admin', '43.242.178.124', '{\"m\":\"Data was saved successfully!\"}', '{\"title\":\"abc\",\"description\":\"ads\",\"options\":\"sadds6\",\"upcharges\":\"sads\",\"qty\":\"214\",\"price\":\"213\",\"mac_address\":\"aaa11\",\"serial_number\":\"23\",\"category\":\"XQDENVFJAY\",\"actionId\":\"EF4WR2R10L\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('ZZN8G32F9G', 'Product was updated', '1685784394', 'admin', '43.242.178.124', '{\"m\":\"Data was saved successfully!\"}', '{\"title\":\"abc\",\"description\":\"ads\",\"options\":\"sadds6\",\"upcharges\":\"sads\",\"qty\":\"214\",\"price\":\"213\",\"mac_address\":\"aaa11\",\"serial_number\":\"23\",\"category\":\"XQDENVFJAY\",\"actionId\":\"EF4WR2R10L\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('1H2SOQMMBO', 'Product was updated', '1685784402', 'admin', '43.242.178.124', '{\"m\":\"Data was saved successfully!\"}', '{\"title\":\"abc\",\"description\":\"ads\",\"options\":\"sadds6\",\"upcharges\":\"sads\",\"qty\":\"214\",\"price\":\"213\",\"mac_address\":\"aaa11\",\"serial_number\":\"23\",\"category\":\"XQDENVFJAY\",\"actionId\":\"EF4WR2R10L\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('XU12JQI0BG', 'Product was updated', '1685784452', 'admin', '43.242.178.124', '{\"m\":\"Data was saved successfully!\"}', '{\"title\":\"abc\",\"description\":\"ads\",\"options\":\"sadds6\",\"upcharges\":\"sads\",\"qty\":\"214\",\"price\":\"213\",\"mac_address\":\"aaa11\",\"serial_number\":\"23\",\"category\":\"XQDENVFJAY\",\"actionId\":\"EF4WR2R10L\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('M6D3ZTXD9C', 'Product was updated', '1685784463', 'admin', '43.242.178.124', '{\"m\":\"Data was saved successfully!\"}', '{\"title\":\"abc\",\"description\":\"ads\",\"options\":\"sadds6\",\"upcharges\":\"sads\",\"qty\":\"214\",\"price\":\"213\",\"mac_address\":\"aaa11\",\"serial_number\":\"23\",\"category\":\"XQDENVFJAY\",\"actionId\":\"EF4WR2R10L\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('XGFWEFARD1', 'Product was updated', '1685784557', 'admin', '43.242.178.124', '{\"m\":\"Data was saved successfully!\"}', '{\"title\":\"abc\",\"description\":\"ads\",\"options\":\"sadds6\",\"upcharges\":\"sads\",\"qty\":\"214\",\"price\":\"213\",\"mac_address\":\"aaa11\",\"serial_number\":\"23\",\"category\":\"XQDENVFJAY\",\"actionId\":\"EF4WR2R10L\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('2MHNX0SF0F', 'Product was updated', '1685784571', 'admin', '43.242.178.124', '{\"m\":\"Data was saved successfully!\"}', '{\"title\":\"abc\",\"description\":\"ads\",\"options\":\"sadds6\",\"upcharges\":\"sads\",\"qty\":\"214\",\"price\":\"213\",\"mac_address\":\"aaa11\",\"serial_number\":\"23\",\"category\":\"XQDENVFJAY\",\"actionId\":\"EF4WR2R10L\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('SRFE50AF7X', 'Product was updated', '1685784585', 'admin', '43.242.178.124', '{\"m\":\"Data was saved successfully!\"}', '{\"title\":\"abc\",\"description\":\"ads\",\"options\":\"sadds6\",\"upcharges\":\"sads\",\"qty\":\"214\",\"price\":\"213\",\"mac_address\":\"aaa11\",\"serial_number\":\"23\",\"category\":\"XQDENVFJAY\",\"actionId\":\"EF4WR2R10L\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('9ME75J4EHU', 'Product was updated', '1685784602', 'admin', '43.242.178.124', '{\"m\":\"Data was saved successfully!\"}', '{\"title\":\"asdasdsadd\",\"description\":\"ad\",\"options\":\"sad\",\"upcharges\":\"sad\",\"qty\":\"214\",\"price\":\"213\",\"mac_address\":\"aaa11\",\"serial_number\":\"23\",\"actionId\":\"O5YT6N6N1T\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('4JJSIZY9CM', 'Product was updated', '1685784750', 'admin', '43.242.178.124', '{\"m\":\"Data was saved successfully!\"}', '{\"title\":\"abc\",\"description\":\"ads\",\"options\":\"sadds6\",\"upcharges\":\"sads\",\"qty\":\"214\",\"price\":\"213\",\"mac_address\":\"aaa11\",\"serial_number\":\"23\",\"category\":\"XQDENVFJAY\",\"actionId\":\"EF4WR2R10L\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('KJZ8XY9FCC', 'Product was updated', '1685784804', 'admin', '43.242.178.124', '{\"m\":\"Data was saved successfully!\"}', '{\"title\":\"abc\",\"description\":\"ads\",\"options\":\"sadds6\",\"upcharges\":\"sads\",\"qty\":\"214\",\"price\":\"213\",\"mac_address\":\"aaa11\",\"serial_number\":\"23\",\"category\":\"XQDENVFJAY\",\"actionId\":\"EF4WR2R10L\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('6J4JUE16Z1', 'Product was updated', '1685784819', 'admin', '43.242.178.124', '{\"m\":\"Data was saved successfully!\"}', '{\"title\":\"abc\",\"description\":\"ads\",\"options\":\"sadds6\",\"upcharges\":\"sads\",\"qty\":\"214\",\"price\":\"213\",\"mac_address\":\"aaa11\",\"serial_number\":\"23\",\"category\":\"YW7YDF7QEI\",\"actionId\":\"EF4WR2R10L\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('K6JFDRXZR9', 'Product was updated', '1686352653', 'admin', '98.147.140.106', '[]', '{\"title\":\"yealink\",\"description\":\"phone\r\n\",\"options\":\"\",\"upcharges\":\"\",\"qty\":\"\",\"price\":\"100\",\"mac_address\":\"805E0C48EF0B\",\"serial_number\":\"301081D081232298\",\"actionId\":\"6RIP9LSPAU\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('QCJKX4PLOY', 'Product was updated', '1686352664', 'admin', '98.147.140.106', '{\"m\":\"Data was saved successfully!\"}', '{\"title\":\"yealink\",\"description\":\"phone\r\n\",\"options\":\"\",\"upcharges\":\"\",\"qty\":\"\",\"price\":\"99\",\"mac_address\":\"805E0C48EF0B\",\"serial_number\":\"301081D081232298\",\"actionId\":\"6RIP9LSPAU\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('ZBMFFD1CAS', 'customers was updated', '1686809319', 'admin', '98.147.140.106', '[]', '{\"first_name\":\"Aram\",\"last_name\":\"Khachatryan\",\"name\":\"Aram Khachatryan\",\"phone\":\"8186361853\",\"phone2\":\"\",\"address\":\"7403 irvine ave\",\"address2\":\"7403 Irvine Avenue, North Hollywood, CA, USA\",\"email\":\"aram272@ymail.com\",\"password\":\"dc31878852f15caa822bcd8', '', '');
INSERT INTO smsCampaigner_log VALUES ('PJ4ZDJC9YJ', 'customers was created', '1686978076', 'admin', '38.7.190.118', '[]', '{\"first_name\":\"saad\",\"last_name\":\"sajid\",\"name\":\"saad sajid\",\"phone\":\"\",\"phone2\":\"\",\"address\":\"\",\"address2\":\"\",\"email\":\"saadprogrammer786@gmail.com\",\"password\":\"8426ce7448b012ba839b360e29a572af\",\"sent_automatic_invoice\":\"no\",\"role\":\"customer\",\"addedBy\":\"a', '', '');
INSERT INTO smsCampaigner_log VALUES ('6SF0YHP4NB', 'customers was updated', '1686978384', 'admin', '38.7.190.118', '[]', '{\"first_name\":\"saad\",\"last_name\":\"sajid\",\"name\":\"saad sajid\",\"phone\":\"\",\"phone2\":\"\",\"address\":\"\",\"address2\":\"\",\"email\":\"saadprogrammer786@gmail.com\",\"password\":\"dc31878852f15caa822bcd8b3494299e\",\"sent_automatic_invoice\":\"no\",\"sent_automatic_postal\":\"yes\",', '', '');
INSERT INTO smsCampaigner_log VALUES ('ACG9OVEQ4F', 'customers was updated', '1686978629', 'admin', '38.7.190.118', '[]', '{\"first_name\":\"saad\",\"last_name\":\"sajid\",\"name\":\"saad sajid\",\"phone\":\"\",\"phone2\":\"\",\"address\":\"\",\"address2\":\"\",\"email\":\"saadprogrammer786@gmail.com\",\"password\":\"dc31878852f15caa822bcd8b3494299e\",\"sent_automatic_invoice\":\"no\",\"sent_automatic_postal\":\"no\",\"', '', '');
INSERT INTO smsCampaigner_log VALUES ('XU8G8U2HW7', 'Invoices was Deleted', '1687456481', 'admin', '98.147.140.106', '{\"delete-record\":\"2QU5PPI8TG\"}', '[]', '', '');
INSERT INTO smsCampaigner_log VALUES ('CCH3MHMC5K', 'Tasks was Created', '1687599510', 'admin', '119.152.240.15', '[]', '{\"title\":\"test\",\"description\":\"test\",\"assigned_to\":\"GPV9RSTLAI\",\"status\":\"In-Progress\",\"actionId\":\"\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('OZT3E4SVCO', 'Invoices was Deleted', '1687600907', 'admin', '119.152.240.15', '{\"delete-record\":\"J2G9ML1AR8\"}', '[]', '', '');
INSERT INTO smsCampaigner_log VALUES ('PHBGYBK7Z7', 'Invoices was Deleted', '1687601552', 'admin', '119.152.240.15', '{\"delete-record\":\"EG8B506WL4\"}', '[]', '', '');
INSERT INTO smsCampaigner_log VALUES ('S052K3RPCQ', 'Invoices was Created', '1687601697', 'admin', '119.152.240.15', '{\"action\":\"add\"}', '{\"client_id\":\"I1SQ6NYJR5\",\"title\":\"dkglsdkg\",\"start_date\":\"2023-06-24\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"R4FG7Q72DL\"},\"unit_cost\":{\"1\":\"213\"},\"category\":{\"1\":\"product\"},\"qty\":{\"1\":\"13\"},\"total\":{\"1\":\"2769\"},\"notes\":\"\",\"addInvoice\":\"addSubmit\"', '', '');
INSERT INTO smsCampaigner_log VALUES ('J5YEQ4V9NZ', 'Invoices was Deleted', '1687601770', 'admin', '119.152.240.15', '{\"delete-record\":\"ESBOQHJ35T\"}', '[]', '', '');
INSERT INTO smsCampaigner_log VALUES ('G1MGIFP8K2', 'Invoices was Created', '1688240476', 'admin', '98.147.140.106', '{\"action\":\"add\",\"clientId\":\"XOG3RQ5GH5\"}', '{\"client_id\":\"XOG3RQ5GH5\",\"title\":\"\",\"start_date\":\"2023-07-01\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"9071VSRP55\"},\"unit_cost\":{\"1\":\"100\"},\"category\":{\"1\":\"product\"},\"qty\":{\"1\":\"1\"},\"total\":{\"1\":\"100\"},\"notes\":\"\",\"addInvoice\":\"addSubmit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('DW5MDBPBRK', 'Invoices was Created', '1688240546', 'admin', '98.147.140.106', '{\"action\":\"add\",\"clientId\":\"XOG3RQ5GH5\"}', '{\"client_id\":\"XOG3RQ5GH5\",\"title\":\"\",\"start_date\":\"2023-07-01\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"9071VSRP55\"},\"unit_cost\":{\"1\":\"100\"},\"category\":{\"1\":\"product\"},\"qty\":{\"1\":\"1\"},\"total\":{\"1\":\"100\"},\"notes\":\"\",\"addInvoice\":\"addSubmit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('GM8VT5AH17', 'Invoices was Created', '1688240697', 'admin', '98.147.140.106', '{\"action\":\"add\",\"clientId\":\"BPEHZ88M1J\"}', '{\"client_id\":\"BPEHZ88M1J\",\"title\":\"\",\"start_date\":\"2023-07-01\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"9071VSRP55\"},\"unit_cost\":{\"1\":\"100\"},\"category\":{\"1\":\"product\"},\"qty\":{\"1\":\"1\"},\"total\":{\"1\":\"100\"},\"notes\":\"\",\"addInvoice\":\"addSubmit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('34CSTSOI4N', 'Invoices was Created', '1688240763', 'admin', '98.147.140.106', '{\"action\":\"add\",\"clientId\":\"BPEHZ88M1J\"}', '{\"client_id\":\"BPEHZ88M1J\",\"title\":\"\",\"start_date\":\"2023-07-01\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"9071VSRP55\"},\"unit_cost\":{\"1\":\"100\"},\"category\":{\"1\":\"product\"},\"qty\":{\"1\":\"1\"},\"total\":{\"1\":\"100\"},\"notes\":\"\",\"addInvoice\":\"addSubmit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('JUM4SB0DU2', 'Invoices was Created', '1688384339', 'admin', '119.73.96.71', '{\"action\":\"add\"}', '{\"client_id\":\"I1SQ6NYJR5\",\"title\":\"test\",\"start_date\":\"2023-07-03\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"\"},\"unit_cost\":{\"1\":\"1\"},\"category\":{\"1\":\"product\"},\"qty\":{\"1\":\"1\"},\"total\":{\"1\":\"1\"},\"notes\":\"\",\"addInvoice\":\"addSubmit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('Z8OFA8FLSB', 'Invoices was Created', '1688629338', 'admin', '98.147.140.106', '{\"action\":\"add\",\"clientId\":\"75NLSNY5I0\"}', '{\"client_id\":\"75NLSNY5I0\",\"title\":\"\",\"start_date\":\"2023-07-06\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"9071VSRP55\"},\"unit_cost\":{\"1\":\"100\"},\"category\":{\"1\":\"product\"},\"qty\":{\"1\":\"1\"},\"total\":{\"1\":\"100\"},\"notes\":\"\",\"addInvoice\":\"addSubmit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('KMPLUD015G', 'Invoices was Created', '1688709093', 'admin', '172.56.120.155', '{\"action\":\"add\",\"clientId\":\"2GRU2PEIQN\"}', '{\"client_id\":\"2GRU2PEIQN\",\"title\":\"\",\"start_date\":\"2023-07-07\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"9071VSRP55\"},\"unit_cost\":{\"1\":\"100\"},\"category\":{\"1\":\"product\"},\"qty\":{\"1\":\"1\"},\"total\":{\"1\":\"100\"},\"notes\":\"\",\"addInvoice\":\"addSubmit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('QGNDNHJMCN', 'Invoices was Created', '1688709369', 'admin', '172.56.120.155', '{\"action\":\"add\",\"clientId\":\"2GRU2PEIQN\"}', '{\"client_id\":\"2GRU2PEIQN\",\"title\":\"\",\"start_date\":\"2023-07-07\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"9071VSRP55\"},\"unit_cost\":{\"1\":\"100\"},\"category\":{\"1\":\"product\"},\"qty\":{\"1\":\"1\"},\"total\":{\"1\":\"100\"},\"notes\":\"\",\"addInvoice\":\"addSubmit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('ZHQPQMA9L5', 'Invoices was Created', '1688710155', 'admin', '172.56.120.155', '{\"action\":\"add\",\"clientId\":\"2GRU2PEIQN\"}', '{\"client_id\":\"2GRU2PEIQN\",\"title\":\"\",\"start_date\":\"2023-07-07\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"9071VSRP55\"},\"unit_cost\":{\"1\":\"100\"},\"category\":{\"1\":\"product\"},\"qty\":{\"1\":\"1\"},\"total\":{\"1\":\"100\"},\"notes\":\"\",\"addInvoice\":\"addSubmit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('615RBQPIM8', 'businesses was updated', '1688807594', 'admin', '206.0.197.207', '[]', '{\"business_name\":\"AllNet Communications\",\"email\":\"billing@allnetcom.com\",\"phone\":\"747-900-0002\",\"address\":\"\",\"hours\":\"12:am\",\"actionId\":\"6UJ62S3L09\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('NU53ZJ8C3L', 'businesses was updated', '1688807692', 'admin', '206.0.197.207', '[]', '{\"business_name\":\"AllNet Communications\",\"email\":\"billing@allnetcom.com\",\"phone\":\"747-900-0002\",\"address\":\"\",\"hours\":\"12:am\",\"actionId\":\"6UJ62S3L09\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('5RJRCCI4RJ', 'businesses was updated', '1688807705', 'admin', '206.0.197.207', '{\"m\":\"Data was saved successfully!\"}', '{\"business_name\":\"AllNet Communications\",\"email\":\"billing@allnetcom.com\",\"phone\":\"747-900-0002\",\"address\":\"tower 8 unit#39 Bahria town Karachi Pakistan\",\"hours\":\"12:am\",\"actionId\":\"6UJ62S3L09\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('8LTVORV51P', 'Messages was Updated', '1688808245', 'admin', '206.0.197.207', '{\"u\":\"IO070VI8ER\"}', '[]', '', '');
INSERT INTO smsCampaigner_log VALUES ('AEX3TRGDAP', 'Messages was Updated', '1688808248', 'admin', '206.0.197.207', '{\"u\":\"RI82I7EMBY\"}', '[]', '', '');
INSERT INTO smsCampaigner_log VALUES ('A9N1BMV3O9', 'Product was created', '1689074370', 'admin', '119.152.240.15', '[]', '{\"title\":\"dfhdfhd\",\"description\":\"sdgsasasdg\",\"options\":\"sga\",\"upcharges\":\"\",\"qty\":\"\",\"price\":\"\",\"mac_address\":\"\",\"serial_number\":\"\",\"actionId\":\"\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('OAYVPN78ZS', 'Product was deleted', '1689074379', 'admin', '119.152.240.15', '{\"delete-record\":\"98L1Z86MMZ\"}', '[]', '', '');
INSERT INTO smsCampaigner_log VALUES ('UIF0OD4207', 'Invoices was Created', '1689230746', 'admin', '202.47.38.226', '{\"action\":\"add\"}', '{\"client_id\":\"I1SQ6NYJR5\",\"title\":\"sd\",\"start_date\":\"2023-07-13\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"R4FG7Q72DL\"},\"unit_cost\":{\"1\":\"213\"},\"category\":{\"1\":\"product\"},\"qty\":{\"1\":\"3\"},\"total\":{\"1\":\"639\"},\"serial_number\":{\"1\":\"23\"},\"mac_address\":{\"', '', '');
INSERT INTO smsCampaigner_log VALUES ('6X569D1NZO', 'Invoices was Created', '1689230822', 'admin', '202.47.38.226', '{\"action\":\"add\"}', '{\"client_id\":\"I1SQ6NYJR5\",\"title\":\"hh\",\"start_date\":\"2023-07-13\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"R4FG7Q72DL\"},\"unit_cost\":{\"1\":\"213\"},\"category\":{\"1\":\"product\"},\"qty\":{\"1\":\"2\"},\"total\":{\"1\":\"426\"},\"serial_number\":{\"1\":\"23\"},\"mac_address\":{\"', '', '');
INSERT INTO smsCampaigner_log VALUES ('9CCCPF2JZZ', 'Invoices was Created', '1689230923', 'admin', '202.47.38.226', '{\"action\":\"add\"}', '{\"client_id\":\"I1SQ6NYJR5\",\"title\":\"5\",\"start_date\":\"2023-07-13\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"R4FG7Q72DL\"},\"unit_cost\":{\"1\":\"213\"},\"category\":{\"1\":\"product\"},\"qty\":{\"1\":\"2\"},\"total\":{\"1\":\"426\"},\"serial_number\":{\"1\":\"23\"},\"mac_address\":{\"1', '', '');
INSERT INTO smsCampaigner_log VALUES ('KBLUXH1M6P', 'businesses was updated', '1689231871', 'admin', '202.47.38.226', '[]', '{\"business_name\":\"AllNet Communications\",\"email\":\"billing@allnetcom.com\",\"phone\":\"747-900-0002\",\"address\":\"tower 8 unit#39 Bahria town Karachi Pakistan\",\"hours\":\"12 - 3\",\"actionId\":\"6UJ62S3L09\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('OMG4PH7LKU', 'Invoices was Created', '1689233369', 'admin', '202.47.38.226', '{\"action\":\"add\"}', '{\"client_id\":\"I1SQ6NYJR5\",\"title\":\"23\",\"start_date\":\"2023-07-13\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"R4FG7Q72DL\"},\"unit_cost\":{\"1\":\"213\"},\"category\":{\"1\":\"product\"},\"qty\":{\"1\":\"3\"},\"total\":{\"1\":\"639\"},\"serial_number\":{\"1\":\"23\"},\"mac_address\":{\"', '', '');
INSERT INTO smsCampaigner_log VALUES ('XHEXLK8CAW', 'Invoices was Created', '1689235096', 'admin', '38.7.178.251', '{\"action\":\"add\"}', '{\"client_id\":\"I1SQ6NYJR5\",\"title\":\"34243\",\"start_date\":\"2023-07-13\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"6RIP9LSPAU\"},\"unit_cost\":{\"1\":\"99\"},\"category\":{\"1\":\"product\"},\"qty\":{\"1\":\"2\"},\"total\":{\"1\":\"198\"},\"serial_number\":{\"1\":\"301081D081232298\"},', '', '');
INSERT INTO smsCampaigner_log VALUES ('LLZQBFU0LY', 'Invoices was Created', '1689239419', 'admin', '38.7.178.251', '{\"action\":\"add\"}', '{\"client_id\":\"XOG3RQ5GH5\",\"title\":\"2113\",\"start_date\":\"2023-07-13\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"4B5CP0CFRA\"},\"unit_cost\":{\"1\":\"213\"},\"category\":{\"1\":\"product\"},\"qty\":{\"1\":\"2\"},\"total\":{\"1\":\"426\"},\"serial_number\":{\"1\":\"23\"},\"mac_address\":', '', '');
INSERT INTO smsCampaigner_log VALUES ('RBGK017WUY', 'Invoices was Created', '1689239468', 'admin', '38.7.178.251', '{\"action\":\"add\"}', '{\"client_id\":\"XOG3RQ5GH5\",\"title\":\"23123\",\"start_date\":\"2023-07-13\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"4B5CP0CFRA\"},\"unit_cost\":{\"1\":\"213\"},\"category\":{\"1\":\"product\"},\"qty\":{\"1\":\"2\"},\"total\":{\"1\":\"426\"},\"serial_number\":{\"1\":\"23\"},\"mac_address\"', '', '');
INSERT INTO smsCampaigner_log VALUES ('RRYOXPHN3Q', 'Invoices was Created', '1689239552', 'admin', '38.7.178.251', '{\"action\":\"add\"}', '{\"client_id\":\"XOG3RQ5GH5\",\"title\":\"321132\",\"start_date\":\"2023-07-13\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"6RIP9LSPAU\"},\"unit_cost\":{\"1\":\"99\"},\"category\":{\"1\":\"product\"},\"qty\":{\"1\":\"1\"},\"total\":{\"1\":\"99\"},\"serial_number\":{\"1\":\"301081D081232298\"},', '', '');
INSERT INTO smsCampaigner_log VALUES ('4YPM2UTMTH', 'Invoices was Created', '1689239744', 'admin', '38.7.178.251', '{\"action\":\"add\"}', '{\"client_id\":\"L3M59LNJW2\",\"title\":\"saddsa\",\"start_date\":\"2023-07-13\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"6RIP9LSPAU\"},\"unit_cost\":{\"1\":\"99\"},\"category\":{\"1\":\"product\"},\"qty\":{\"1\":\"2\"},\"total\":{\"1\":\"198\"},\"serial_number\":{\"1\":\"301081D081232298\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('QGVXML6199', 'Invoices was Created', '1689239790', 'admin', '38.7.178.251', '{\"action\":\"add\"}', '{\"client_id\":\"XOG3RQ5GH5\",\"title\":\"\",\"start_date\":\"2023-07-13\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"6RIP9LSPAU\"},\"unit_cost\":{\"1\":\"99\"},\"category\":{\"1\":\"product\"},\"qty\":{\"1\":\"2\"},\"total\":{\"1\":\"198\"},\"serial_number\":{\"1\":\"301081D081232298\"},\"mac_', '', '');
INSERT INTO smsCampaigner_log VALUES ('7LZHGAOG9N', 'Invoices was Created', '1689240284', 'admin', '38.7.178.251', '{\"action\":\"add\"}', '{\"client_id\":\"L3M59LNJW2\",\"title\":\"\",\"start_date\":\"2023-07-13\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"4B5CP0CFRA\",\"VNYG4YGTDF\":\"6RIP9LSPAU\"},\"unit_cost\":{\"1\":\"213\",\"VNYG4YGTDF\":\"99\"},\"category\":{\"1\":\"product\",\"VNYG4YGTDF\":\"product\"},\"qty\":{\"1\":\"2\"', '', '');
INSERT INTO smsCampaigner_log VALUES ('I0D0J201DQ', 'Invoices was Created', '1689240411', 'admin', '38.7.178.251', '{\"action\":\"add\"}', '{\"client_id\":\"XOG3RQ5GH5\",\"title\":\"\",\"start_date\":\"2023-07-13\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"6RIP9LSPAU\"},\"unit_cost\":{\"1\":\"99\"},\"category\":{\"1\":\"product\"},\"qty\":{\"1\":\"1\"},\"total\":{\"1\":\"99\"},\"serial_number\":{\"1\":\"301081D081232298\"},\"mac_a', '', '');
INSERT INTO smsCampaigner_log VALUES ('WVOP3UNFO8', 'Invoices was Created', '1689240467', 'admin', '38.7.178.251', '{\"action\":\"add\"}', '{\"client_id\":\"XOG3RQ5GH5\",\"title\":\"\",\"start_date\":\"2023-07-13\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"6RIP9LSPAU\"},\"unit_cost\":{\"1\":\"99\"},\"category\":{\"1\":\"product\"},\"qty\":{\"1\":\"2\"},\"total\":{\"1\":\"198\"},\"serial_number\":{\"1\":\"301081D081232298\"},\"mac_', '', '');
INSERT INTO smsCampaigner_log VALUES ('PRTJ7JF86R', 'Invoices was Created', '1689240517', 'admin', '38.7.178.251', '{\"action\":\"add\"}', '{\"client_id\":\"L3M59LNJW2\",\"title\":\"\",\"start_date\":\"2023-07-13\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"6RIP9LSPAU\"},\"unit_cost\":{\"1\":\"99\"},\"category\":{\"1\":\"product\"},\"qty\":{\"1\":\"2\"},\"total\":{\"1\":\"198\"},\"serial_number\":{\"1\":\"301081D081232298\"},\"mac_', '', '');
INSERT INTO smsCampaigner_log VALUES ('RZOJMXW5CY', 'Invoices was Created', '1689240551', 'admin', '38.7.178.251', '{\"action\":\"add\"}', '{\"client_id\":\"XOG3RQ5GH5\",\"title\":\"\",\"start_date\":\"2023-07-13\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"6RIP9LSPAU\"},\"unit_cost\":{\"1\":\"99\"},\"category\":{\"1\":\"product\"},\"qty\":{\"1\":\"2\"},\"total\":{\"1\":\"198\"},\"serial_number\":{\"1\":\"301081D081232298\"},\"mac_', '', '');
INSERT INTO smsCampaigner_log VALUES ('IUOYZEKZFX', 'Invoices was Created', '1689240648', 'admin', '38.7.178.251', '{\"action\":\"add\"}', '{\"client_id\":\"L3M59LNJW2\",\"title\":\"\",\"start_date\":\"2023-07-13\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"6RIP9LSPAU\"},\"unit_cost\":{\"1\":\"99\"},\"category\":{\"1\":\"product\"},\"qty\":{\"1\":\"2\"},\"total\":{\"1\":\"198\"},\"serial_number\":{\"1\":\"301081D081232298\"},\"mac_', '', '');
INSERT INTO smsCampaigner_log VALUES ('HFVJECSM5C', 'Invoices was Created', '1689240688', 'admin', '38.7.178.251', '{\"action\":\"add\"}', '{\"client_id\":\"XOG3RQ5GH5\",\"title\":\"\",\"start_date\":\"2023-07-13\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"6RIP9LSPAU\"},\"unit_cost\":{\"1\":\"99\"},\"category\":{\"1\":\"product\"},\"qty\":{\"1\":\"2\"},\"total\":{\"1\":\"198\"},\"serial_number\":{\"1\":\"301081D081232298\"},\"mac_', '', '');
INSERT INTO smsCampaigner_log VALUES ('CC7SBYXUKA', 'Invoices was Created', '1689240783', 'admin', '38.7.178.251', '{\"action\":\"add\"}', '{\"client_id\":\"L3M59LNJW2\",\"title\":\"\",\"start_date\":\"2023-07-13\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"6RIP9LSPAU\",\"USIVTTTCGM\":\"4B5CP0CFRA\"},\"unit_cost\":{\"1\":\"99\",\"USIVTTTCGM\":\"213\"},\"category\":{\"1\":\"product\",\"USIVTTTCGM\":\"product\"},\"qty\":{\"1\":\"2\"', '', '');
INSERT INTO smsCampaigner_log VALUES ('BIO1IEM299', 'Invoices was Created', '1689240870', 'admin', '38.7.178.251', '{\"action\":\"add\"}', '{\"client_id\":\"XOG3RQ5GH5\",\"title\":\"\",\"start_date\":\"2023-07-13\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"6RIP9LSPAU\"},\"unit_cost\":{\"1\":\"99\"},\"category\":{\"1\":\"product\"},\"qty\":{\"1\":\"2\"},\"total\":{\"1\":\"198\"},\"serial_number\":{\"1\":\"301081D081232298\"},\"mac_', '', '');
INSERT INTO smsCampaigner_log VALUES ('9HN2CD76D5', 'Invoices was Created', '1689241145', 'admin', '38.7.178.251', '{\"action\":\"add\"}', '{\"client_id\":\"XOG3RQ5GH5\",\"title\":\"2222222222\",\"start_date\":\"2023-07-13\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"4B5CP0CFRA\",\"AATCUGVE7X\":\"9071VSRP55\"},\"unit_cost\":{\"1\":\"213\",\"AATCUGVE7X\":\"100\"},\"category\":{\"1\":\"product\",\"AATCUGVE7X\":\"product\"},\"qt', '', '');
INSERT INTO smsCampaigner_log VALUES ('UI5XXWT86O', 'Invoices was Created', '1689241220', 'admin', '38.7.178.251', '{\"action\":\"add\"}', '{\"client_id\":\"XOG3RQ5GH5\",\"title\":\"222\",\"start_date\":\"2023-07-13\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"6RIP9LSPAU\"},\"unit_cost\":{\"1\":\"99\"},\"category\":{\"1\":\"product\"},\"qty\":{\"1\":\"2\"},\"total\":{\"1\":\"198\"},\"serial_number\":{\"1\":\"301081D081232298\"},\"m', '', '');
INSERT INTO smsCampaigner_log VALUES ('9RR9P3MM5S', 'Invoices was Created', '1689241290', 'admin', '38.7.178.251', '{\"action\":\"add\"}', '{\"client_id\":\"I1SQ6NYJR5\",\"title\":\"\",\"start_date\":\"2023-07-13\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"6RIP9LSPAU\"},\"unit_cost\":{\"1\":\"99\"},\"category\":{\"1\":\"product\"},\"qty\":{\"1\":\"2\"},\"total\":{\"1\":\"198\"},\"serial_number\":{\"1\":\"301081D081232298\"},\"mac_', '', '');
INSERT INTO smsCampaigner_log VALUES ('MJVJEZF0W3', 'Invoices was Created', '1689241449', 'admin', '38.7.178.251', '{\"action\":\"add\"}', '{\"client_id\":\"XOG3RQ5GH5\",\"title\":\"\",\"start_date\":\"2023-07-13\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"6RIP9LSPAU\"},\"unit_cost\":{\"1\":\"99\"},\"category\":{\"1\":\"product\"},\"qty\":{\"1\":\"\"},\"total\":{\"1\":\"\"},\"serial_number\":{\"1\":\"301081D081232298\"},\"mac_addr', '', '');
INSERT INTO smsCampaigner_log VALUES ('OD9VLRPIEV', 'Invoices was Created', '1689241467', 'admin', '38.7.178.251', '{\"action\":\"add\"}', '{\"client_id\":\"XOG3RQ5GH5\",\"title\":\"\",\"start_date\":\"2023-07-13\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"6RIP9LSPAU\"},\"unit_cost\":{\"1\":\"99\"},\"category\":{\"1\":\"product\"},\"qty\":{\"1\":\"2\"},\"total\":{\"1\":\"198\"},\"serial_number\":{\"1\":\"301081D081232298\"},\"mac_', '', '');
INSERT INTO smsCampaigner_log VALUES ('UGVDEAV3NL', 'Invoices was Created', '1689241556', 'admin', '38.7.178.251', '{\"action\":\"add\"}', '{\"client_id\":\"XOG3RQ5GH5\",\"title\":\"\",\"start_date\":\"2023-07-13\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"6RIP9LSPAU\"},\"unit_cost\":{\"1\":\"99\"},\"category\":{\"1\":\"product\"},\"qty\":{\"1\":\"2\"},\"total\":{\"1\":\"198\"},\"serial_number\":{\"1\":\"301081D081232298\"},\"mac_', '', '');
INSERT INTO smsCampaigner_log VALUES ('PIGCLHJKUH', 'Invoices was Created', '1689241579', 'admin', '38.7.178.251', '{\"action\":\"add\"}', '{\"client_id\":\"L3M59LNJW2\",\"title\":\"\",\"start_date\":\"2023-07-13\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"6RIP9LSPAU\"},\"unit_cost\":{\"1\":\"99\"},\"category\":{\"1\":\"product\"},\"qty\":{\"1\":\"2\"},\"total\":{\"1\":\"198\"},\"serial_number\":{\"1\":\"301081D081232298\"},\"mac_', '', '');
INSERT INTO smsCampaigner_log VALUES ('YFZZKJMUK8', 'Invoices was Created', '1689241653', 'admin', '38.7.178.251', '{\"action\":\"add\"}', '{\"client_id\":\"XOG3RQ5GH5\",\"title\":\"\",\"start_date\":\"2023-07-13\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"4B5CP0CFRA\"},\"unit_cost\":{\"1\":\"213\"},\"category\":{\"1\":\"product\"},\"qty\":{\"1\":\"2\"},\"total\":{\"1\":\"426\"},\"serial_number\":{\"1\":\"23\"},\"mac_address\":{\"1\"', '', '');
INSERT INTO smsCampaigner_log VALUES ('7BIRWNX9DY', 'Invoices was Created', '1689241711', 'admin', '38.7.178.251', '{\"action\":\"add\"}', '{\"client_id\":\"XOG3RQ5GH5\",\"title\":\"\",\"start_date\":\"2023-07-13\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"6RIP9LSPAU\"},\"unit_cost\":{\"1\":\"99\"},\"category\":{\"1\":\"product\"},\"qty\":{\"1\":\"2\"},\"total\":{\"1\":\"198\"},\"serial_number\":{\"1\":\"301081D081232298\"},\"mac_', '', '');
INSERT INTO smsCampaigner_log VALUES ('DT7DOC78CO', 'Invoices was Created', '1689241751', 'admin', '38.7.178.251', '{\"action\":\"add\"}', '{\"client_id\":\"I1SQ6NYJR5\",\"title\":\"\",\"start_date\":\"2023-07-13\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"6RIP9LSPAU\"},\"unit_cost\":{\"1\":\"99\"},\"category\":{\"1\":\"product\"},\"qty\":{\"1\":\"2\"},\"total\":{\"1\":\"198\"},\"serial_number\":{\"1\":\"301081D081232298\"},\"mac_', '', '');
INSERT INTO smsCampaigner_log VALUES ('5ARLX6JKDJ', 'Invoices was Created', '1689241854', 'admin', '38.7.178.251', '{\"action\":\"add\"}', '{\"client_id\":\"XOG3RQ5GH5\",\"title\":\"\",\"start_date\":\"2023-07-13\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"6RIP9LSPAU\",\"5ZIIVCRUG0\":\"4B5CP0CFRA\"},\"unit_cost\":{\"1\":\"99\",\"5ZIIVCRUG0\":\"213\"},\"category\":{\"1\":\"product\",\"5ZIIVCRUG0\":\"product\"},\"qty\":{\"1\":\"2\"', '', '');
INSERT INTO smsCampaigner_log VALUES ('8WL9U2JVK7', 'Invoices was Created', '1689241854', 'admin', '38.7.178.251', '{\"action\":\"add\"}', '{\"client_id\":\"XOG3RQ5GH5\",\"title\":\"\",\"start_date\":\"2023-07-13\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"6RIP9LSPAU\",\"5ZIIVCRUG0\":\"4B5CP0CFRA\"},\"unit_cost\":{\"1\":\"99\",\"5ZIIVCRUG0\":\"213\"},\"category\":{\"1\":\"product\",\"5ZIIVCRUG0\":\"product\"},\"qty\":{\"1\":\"2\"', '', '');
INSERT INTO smsCampaigner_log VALUES ('4GGVNSMK2L', 'Invoices was Created', '1689242094', 'admin', '38.7.178.251', '{\"action\":\"add\"}', '{\"client_id\":\"2GRU2PEIQN\",\"title\":\"\",\"start_date\":\"2023-07-13\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"4B5CP0CFRA\"},\"unit_cost\":{\"1\":\"213\"},\"category\":{\"1\":\"product\"},\"qty\":{\"1\":\"2\"},\"total\":{\"1\":\"426\"},\"serial_number\":{\"1\":\"23\"},\"mac_address\":{\"1\"', '', '');
INSERT INTO smsCampaigner_log VALUES ('7VGBH5CLTK', 'Invoices was Created', '1689242162', 'admin', '38.7.178.251', '{\"action\":\"add\"}', '{\"client_id\":\"I1SQ6NYJR5\",\"title\":\"\",\"start_date\":\"2023-07-13\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"R4FG7Q72DL\"},\"unit_cost\":{\"1\":\"213\"},\"category\":{\"1\":\"product\"},\"qty\":{\"1\":\"2\"},\"total\":{\"1\":\"426\"},\"serial_number\":{\"1\":\"23\"},\"mac_address\":{\"1\"', '', '');
INSERT INTO smsCampaigner_log VALUES ('EAEQU53QIM', 'Invoices was Created', '1689242195', 'admin', '38.7.178.251', '{\"action\":\"add\"}', '{\"client_id\":\"XOG3RQ5GH5\",\"title\":\"\",\"start_date\":\"2023-07-13\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"R4FG7Q72DL\",\"PUZCBKSU4O\":\"6RIP9LSPAU\"},\"unit_cost\":{\"1\":\"213\",\"PUZCBKSU4O\":\"99\"},\"category\":{\"1\":\"product\",\"PUZCBKSU4O\":\"product\"},\"qty\":{\"1\":\"2\"', '', '');
INSERT INTO smsCampaigner_log VALUES ('QUBCA5ZLYE', 'Invoices was Created', '1689242195', 'admin', '38.7.178.251', '{\"action\":\"add\"}', '{\"client_id\":\"XOG3RQ5GH5\",\"title\":\"\",\"start_date\":\"2023-07-13\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"R4FG7Q72DL\",\"PUZCBKSU4O\":\"6RIP9LSPAU\"},\"unit_cost\":{\"1\":\"213\",\"PUZCBKSU4O\":\"99\"},\"category\":{\"1\":\"product\",\"PUZCBKSU4O\":\"product\"},\"qty\":{\"1\":\"2\"', '', '');
INSERT INTO smsCampaigner_log VALUES ('7LEXXGOD0B', 'Invoices was Created', '1689310185', 'admin', '38.7.183.206', '{\"action\":\"add\"}', '{\"client_id\":\"I1SQ6NYJR5\",\"title\":\"\",\"start_date\":\"2023-07-14\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"4B5CP0CFRA\",\"ZLDOGOJD6M\":\"6RIP9LSPAU\",\"CPYOVXFLG3\":\"9071VSRP55\"},\"unit_cost\":{\"1\":\"213\",\"ZLDOGOJD6M\":\"99\",\"CPYOVXFLG3\":\"100\"},\"category\":{\"1\":\"pr', '', '');
INSERT INTO smsCampaigner_log VALUES ('90B82QP2DK', 'Invoices was Created', '1689310276', 'admin', '38.7.183.206', '{\"action\":\"add\"}', '{\"client_id\":\"L3M59LNJW2\",\"title\":\"\",\"start_date\":\"2023-07-14\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"4B5CP0CFRA\",\"CTHVNJ4JJC\":\"6RIP9LSPAU\"},\"unit_cost\":{\"1\":\"213\",\"CTHVNJ4JJC\":\"99\"},\"category\":{\"1\":\"product\",\"CTHVNJ4JJC\":\"product\"},\"qty\":{\"1\":\"2\"', '', '');
INSERT INTO smsCampaigner_log VALUES ('BQI8Z835JA', 'Invoices was Created', '1689310375', 'admin', '38.7.183.206', '{\"action\":\"add\"}', '{\"client_id\":\"L3M59LNJW2\",\"title\":\"\",\"start_date\":\"2023-07-14\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"4B5CP0CFRA\",\"U9NQ799WGQ\":\"9071VSRP55\"},\"unit_cost\":{\"1\":\"213\",\"U9NQ799WGQ\":\"100\"},\"category\":{\"1\":\"product\",\"U9NQ799WGQ\":\"product\"},\"qty\":{\"1\":\"2', '', '');
INSERT INTO smsCampaigner_log VALUES ('IGRBZL86OZ', 'Invoices was Created', '1689311821', 'admin', '38.7.183.206', '{\"action\":\"add\"}', '{\"client_id\":\"I1SQ6NYJR5\",\"title\":\"\",\"start_date\":\"2023-07-14\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"4B5CP0CFRA\",\"7U7VKJCN1T\":\"6RIP9LSPAU\"},\"unit_cost\":{\"1\":\"213\",\"7U7VKJCN1T\":\"99\"},\"category\":{\"1\":\"product\",\"7U7VKJCN1T\":\"product\"},\"qty\":{\"1\":\"2\"', '', '');
INSERT INTO smsCampaigner_log VALUES ('O1CTFKGKXW', 'Invoices was Created', '1689336262', 'admin', '202.47.55.58', '{\"action\":\"add\"}', '{\"client_id\":\"L3M59LNJW2\",\"title\":\"abcfg\",\"start_date\":\"2023-07-14\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"R4FG7Q72DL\"},\"unit_cost\":{\"1\":\"213\"},\"category\":{\"1\":\"product\"},\"qty\":{\"1\":\"3\"},\"total\":{\"1\":\"639\"},\"serial_number\":{\"1\":\"23\"},\"mac_address\"', '', '');
INSERT INTO smsCampaigner_log VALUES ('1UE3O61F45', 'Invoices was Created', '1689337173', 'admin', '119.73.96.5', '{\"action\":\"add\"}', '{\"client_id\":\"I1SQ6NYJR5\",\"title\":\"\",\"start_date\":\"2023-07-14\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"R4FG7Q72DL\"},\"unit_cost\":{\"1\":\"213\"},\"category\":{\"1\":\"product\"},\"qty\":{\"1\":\"7\"},\"total\":{\"1\":\"1491\"},\"serial_number\":{\"1\":\"23\"},\"mac_address\":{\"1', '', '');
INSERT INTO smsCampaigner_log VALUES ('ZJFLPCAODW', 'Invoices was Created', '1689337244', 'admin', '119.73.96.5', '{\"action\":\"add\"}', '{\"client_id\":\"I1SQ6NYJR5\",\"title\":\"\",\"start_date\":\"2023-07-14\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"R4FG7Q72DL\",\"GPJRLUDTGN\":\"9J3RC19L4D\"},\"unit_cost\":{\"1\":\"213\",\"GPJRLUDTGN\":\"\"},\"category\":{\"1\":\"product\",\"GPJRLUDTGN\":\"product\"},\"qty\":{\"1\":\"1\",\"', '', '');
INSERT INTO smsCampaigner_log VALUES ('ZC247I4LLL', 'Invoices was Created', '1689337244', 'admin', '119.73.96.5', '{\"action\":\"add\"}', '{\"client_id\":\"I1SQ6NYJR5\",\"title\":\"\",\"start_date\":\"2023-07-14\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"R4FG7Q72DL\",\"GPJRLUDTGN\":\"9J3RC19L4D\"},\"unit_cost\":{\"1\":\"213\",\"GPJRLUDTGN\":\"\"},\"category\":{\"1\":\"product\",\"GPJRLUDTGN\":\"product\"},\"qty\":{\"1\":\"1\",\"', '', '');
INSERT INTO smsCampaigner_log VALUES ('AW59A880O2', 'Product was updated', '1689341062', 'admin', '119.73.96.5', '[]', '{\"title\":\"asdasdsadd3\",\"description\":\"ad\",\"options\":\"sad\",\"upcharges\":\"sad\",\"qty\":\"199\",\"price\":\"213\",\"mac_address\":\"m1\",\"serial_number\":\"s1\",\"category\":\"XQDENVFJAY\",\"actionId\":\"R4FG7Q72DL\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('6Q87J8VT13', 'Invoices was Created', '1689341088', 'admin', '119.73.96.5', '{\"action\":\"add\",\"clientId\":\"2GRU2PEIQN\"}', '{\"client_id\":\"2GRU2PEIQN\",\"title\":\"t1\",\"start_date\":\"2023-07-14\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"R4FG7Q72DL\"},\"unit_cost\":{\"1\":\"90\"},\"category\":{\"1\":\"product\"},\"qty\":{\"1\":\"1\"},\"total\":{\"1\":\"90\"},\"serial_number\":{\"1\":\"s1\"},\"mac_address\":{\"1\"', '', '');
INSERT INTO smsCampaigner_log VALUES ('876BLTPHUY', 'Invoices was Created', '1689341686', 'admin', '119.73.96.5', '{\"action\":\"add\",\"clientId\":\"2GRU2PEIQN\"}', '{\"client_id\":\"2GRU2PEIQN\",\"title\":\"\",\"start_date\":\"2023-07-14\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"4B5CP0CFRA\"},\"unit_cost\":{\"1\":\"200\"},\"category\":{\"1\":\"product\"},\"qty\":{\"1\":\"1\"},\"total\":{\"1\":\"200\"},\"serial_number\":{\"1\":\"23\"},\"mac_address\":{\"1\"', '', '');
INSERT INTO smsCampaigner_log VALUES ('JO1PWE7KVP', 'Invoices was Created', '1689380401', 'admin', '23.241.248.57', '{\"action\":\"add\",\"clientId\":\"VG9G8OFI9Y\"}', '{\"client_id\":\"VG9G8OFI9Y\",\"title\":\"\",\"start_date\":\"2023-07-15\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"9071VSRP55\"},\"unit_cost\":{\"1\":\"100\"},\"category\":{\"1\":\"product\"},\"qty\":{\"1\":\"1\"},\"total\":{\"1\":\"100\"},\"serial_number\":{\"1\":\"301081D081232298\"},\"mac', '', '');
INSERT INTO smsCampaigner_log VALUES ('3G4WLD336I', 'Invoices was Created', '1689380642', 'admin', '23.241.248.57', '{\"action\":\"add\",\"clientId\":\"SM9Q4VQM7V\"}', '{\"client_id\":\"SM9Q4VQM7V\",\"title\":\"\",\"start_date\":\"2023-07-15\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"9071VSRP55\"},\"unit_cost\":{\"1\":\"100\"},\"category\":{\"1\":\"product\"},\"qty\":{\"1\":\"\"},\"total\":{\"1\":\"\"},\"serial_number\":{\"1\":\"301081D081232298\"},\"mac_add', '', '');
INSERT INTO smsCampaigner_log VALUES ('M6LGJ0VNPM', 'Invoices was Created', '1689380645', 'admin', '23.241.248.57', '{\"action\":\"add\",\"clientId\":\"SM9Q4VQM7V\"}', '{\"client_id\":\"SM9Q4VQM7V\",\"title\":\"\",\"start_date\":\"2023-07-15\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"9071VSRP55\"},\"unit_cost\":{\"1\":\"100\"},\"category\":{\"1\":\"product\"},\"qty\":{\"1\":\"1\"},\"total\":{\"1\":\"100\"},\"serial_number\":{\"1\":\"301081D081232298\"},\"mac', '', '');
INSERT INTO smsCampaigner_log VALUES ('8A7RNE8K5N', 'Invoices was Created', '1689415626', 'admin', '119.73.96.5', '{\"action\":\"add\"}', '{\"client_id\":\"L3M59LNJW2\",\"title\":\"7\",\"start_date\":\"2023-07-15\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"4B5CP0CFRA\"},\"unit_cost\":{\"1\":\"100\"},\"category\":{\"1\":\"product\"},\"qty\":{\"1\":\"1\"},\"total\":{\"1\":\"100\"},\"serial_number\":{\"1\":\"23\"},\"mac_address\":{\"1', '', '');
INSERT INTO smsCampaigner_log VALUES ('ZKM1DTD4HS', 'Invoices was Created', '1689415991', 'admin', '119.73.96.5', '{\"action\":\"add\"}', '{\"client_id\":\"L3M59LNJW2\",\"title\":\"sd\",\"start_date\":\"2023-07-15\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"4B5CP0CFRA\"},\"unit_cost\":{\"1\":\"200\"},\"category\":{\"1\":\"product\"},\"qty\":{\"1\":\"1\"},\"total\":{\"1\":\"200\"},\"serial_number\":{\"1\":\"23\"},\"mac_address\":{\"', '', '');
INSERT INTO smsCampaigner_log VALUES ('WJEWC6JI9X', 'Invoices was Created', '1689416116', 'admin', '119.73.96.5', '{\"action\":\"add\"}', '{\"client_id\":\"L3M59LNJW2\",\"title\":\"3\",\"start_date\":\"2023-07-15\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"4B5CP0CFRA\"},\"unit_cost\":{\"1\":\"100\"},\"category\":{\"1\":\"product\"},\"qty\":{\"1\":\"1\"},\"total\":{\"1\":\"100\"},\"serial_number\":{\"1\":\"23\"},\"mac_address\":{\"1', '', '');
INSERT INTO smsCampaigner_log VALUES ('UME4HVOGBW', 'Invoices was Created', '1689416208', 'admin', '119.73.96.5', '{\"action\":\"add\"}', '{\"client_id\":\"L3M59LNJW2\",\"title\":\"sd\",\"start_date\":\"2023-07-15\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"4B5CP0CFRA\"},\"unit_cost\":{\"1\":\"200\"},\"category\":{\"1\":\"product\"},\"qty\":{\"1\":\"1\"},\"total\":{\"1\":\"200\"},\"serial_number\":{\"1\":\"23\"},\"mac_address\":{\"', '', '');
INSERT INTO smsCampaigner_log VALUES ('0USDTKUEU0', 'Invoices was Created', '1690176500', 'admin', '23.241.253.197', '{\"action\":\"add\",\"clientId\":\"75NLSNY5I0\"}', '{\"client_id\":\"75NLSNY5I0\",\"title\":\"\",\"start_date\":\"2023-07-24\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"9071VSRP55\"},\"unit_cost\":{\"1\":\"100\"},\"category\":{\"1\":\"product\"},\"qty\":{\"1\":\"1\"},\"total\":{\"1\":\"100\"},\"serial_number\":{\"1\":\"301081D081232298\"},\"mac', '', '');
INSERT INTO smsCampaigner_log VALUES ('GWB168UN0O', 'Invoices was Created', '1690176563', 'admin', '23.241.253.197', '{\"action\":\"add\",\"clientId\":\"75NLSNY5I0\"}', '{\"client_id\":\"75NLSNY5I0\",\"title\":\"\",\"start_date\":\"2023-07-24\",\"recurring_type\":\"One-Time\",\"product_id\":{\"1\":\"9071VSRP55\"},\"unit_cost\":{\"1\":\"100\"},\"category\":{\"1\":\"product\"},\"qty\":{\"1\":\"1\"},\"total\":{\"1\":\"100\"},\"serial_number\":{\"1\":\"301081D081232298\"},\"mac', '', '');
INSERT INTO smsCampaigner_log VALUES ('IA0HUW533W', 'Product was created', '1692251926', 'admin', '119.152.240.15', '[]', '{\"title\":\"fnsndfj\",\"description\":\"xcmnaj\",\"options\":\"asmfn\",\"upcharges\":\"xmcna\",\"qty\":\"10\",\"price\":\"10\",\"mac_address\":\"\",\"serial_number\":\"\",\"actionId\":\"\",\"create_package\":\"Submit\"}', '', '');
INSERT INTO smsCampaigner_log VALUES ('TXBD42H5BZ', '', '1697895844', '', '103.244.178.36', '[]', '[]', 'logs.php', '');
INSERT INTO smsCampaigner_log VALUES ('GJ89BM90UC', '', '1697895846', '', '103.244.178.36', '[]', '[]', 'logs.php', '');
INSERT INTO smsCampaigner_log VALUES ('WLYVB0JR70', '', '1697895941', 'admin', '103.244.178.36', '[]', '[]', 'logs.php', '');
INSERT INTO smsCampaigner_log VALUES ('ZJCLLOUYKX', '', '1697895942', 'admin', '103.244.178.36', '[]', '[]', 'logs.php', '');
INSERT INTO smsCampaigner_log VALUES ('FB4PCGPNST', '', '1697896466', 'admin', '103.244.178.36', '[]', '[]', 'logs.php', 'https://projects.anomoz.com/ke/smsCampaigner/logs.php');
INSERT INTO smsCampaigner_log VALUES ('2OH93SWPS3', '', '1697896568', 'admin', '103.244.178.36', '[]', '[]', 'logs.php', 'https://projects.anomoz.com/ke/smsCampaigner/logs.php');
INSERT INTO smsCampaigner_log VALUES ('XHBOP5DHTB', '', '1697896581', 'admin', '103.244.178.36', '[]', '[]', 'logs.php', 'https://projects.anomoz.com/ke/smsCampaigner/logs.php');
INSERT INTO smsCampaigner_log VALUES ('00XFQP6JW4', '', '1697896605', 'admin', '103.244.178.36', '[]', '[]', 'files_storage.php', 'https://projects.anomoz.com/ke/smsCampaigner/files_storage.php');
INSERT INTO smsCampaigner_log VALUES ('E3RAJDBOF3', '', '1697896606', 'admin', '103.244.178.36', '[]', '[]', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner/employees.php');
INSERT INTO smsCampaigner_log VALUES ('6DN858MPL9', '', '1697896608', 'admin', '103.244.178.36', '[]', '[]', 'files_storage.php', 'https://projects.anomoz.com/ke/smsCampaigner/files_storage.php');
INSERT INTO smsCampaigner_log VALUES ('OGGFE1HHSB', '', '1697896681', 'admin', '103.244.178.36', '[]', '[]', 'files_storage.php', 'https://projects.anomoz.com/ke/smsCampaigner/files_storage.php');
INSERT INTO smsCampaigner_log VALUES ('KLBTH4FCY9', '', '1697896694', 'admin', '103.244.178.36', '[]', '[]', 'files_storage.php', 'https://projects.anomoz.com/ke/smsCampaigner/files_storage.php');
INSERT INTO smsCampaigner_log VALUES ('9D4DW8B8E9', '', '1697896772', 'admin', '103.244.178.36', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('GM02F8HAZD', '', '1697896815', 'admin', '103.244.178.36', '[]', '[]', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner/employees.php');
INSERT INTO smsCampaigner_log VALUES ('HVYFPKX4R4', '', '1697896826', 'admin', '103.244.178.36', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('LOZFOA1D6S', '', '1697896860', 'admin', '103.244.178.36', '[]', '[]', 'tasks.php', 'https://projects.anomoz.com/ke/smsCampaigner/tasks.php');
INSERT INTO smsCampaigner_log VALUES ('YS36XVR2F6', '', '1697896860', 'admin', '103.244.178.36', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('1YBUM1RLO6', '', '1697896860', 'admin', '103.244.178.36', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('VCU3D7WYTV', '', '1697896860', 'admin', '103.244.178.36', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('YVKCKJVN39', '', '1697896872', 'admin', '103.244.178.36', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('WR1ACHVHUQ', '', '1697896874', 'admin', '103.244.178.36', '[]', '[]', 'tasks.php', 'https://projects.anomoz.com/ke/smsCampaigner/tasks.php');
INSERT INTO smsCampaigner_log VALUES ('35ZD7BRWHV', '', '1697897037', '', '103.244.178.36', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('WVE0J1OMV2', '', '1697897037', '', '103.244.178.36', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('91U5SWO0HG', '', '1697897225', '', '103.244.178.36', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('Z7DD1JM68Q', '', '1697897250', 'admin', '103.244.178.36', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('OXEJ8CE3JF', '', '1697897250', 'admin', '103.244.178.36', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('2ZYJJ3E12A', '', '1697897255', '', '58.65.223.229', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('8HC9WECX26', '', '1697897255', '', '58.65.223.229', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('WYU5MIYB2S', '', '1697897255', '', '58.65.223.229', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('LALHTCVUIP', '', '1697897256', 'admin', '103.244.178.36', '{\"logout\":\"1\"}', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/?logout=1');
INSERT INTO smsCampaigner_log VALUES ('AJOZ0CSPQK', '', '1697897256', '', '103.244.178.36', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('2YN5AGNRFK', '', '1697897260', '', '103.244.178.36', '[]', '{\"email\":\"admin@portal.com\",\"password\":\"123\",\"login\":\"Sign In\"}', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('UYC2EY5ULQ', '', '1697897260', 'admin', '103.244.178.36', '{\"code\":\"1\",\"redir\":\"./home.php?\"}', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php?code=1&redir=.%2Fhome.php%3F');
INSERT INTO smsCampaigner_log VALUES ('4HEYJ4PV2E', '', '1697897261', 'admin', '103.244.178.36', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('4WEGNBX4H0', '', '1697897288', 'admin', '103.244.178.36', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('EU6P6BXEN5', '', '1697898099', 'admin', '103.244.178.36', '[]', '[]', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner/employees.php');
INSERT INTO smsCampaigner_log VALUES ('JLI9Z7V5TS', '', '1697898101', 'admin', '103.244.178.36', '[]', '[]', 'files_storage.php', 'https://projects.anomoz.com/ke/smsCampaigner/files_storage.php');


CREATE TABLE `smsCampaigner_products` (
  `id` varchar(200) NOT NULL,
  `title` varchar(256) DEFAULT '',
  `image` varchar(256) DEFAULT '',
  `description` varchar(256) DEFAULT '',
  `options` varchar(256) DEFAULT '',
  `upcharges` varchar(256) DEFAULT '',
  `timeAdded` varchar(256) DEFAULT NULL,
  `userId` varchar(256) DEFAULT NULL,
  `qty` varchar(225) NOT NULL,
  `unit_cost` int(11) DEFAULT NULL,
  `price` varchar(256) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_products VALUES ('1YLQ4KO670', 'product 1', 'aud_DVRLED3T09Screenshot 2021-12-06 at 23-29-00 Marlin Crm Dashboard.png', 'hello1 hello1hello1 hello1hello1 hello1hello1 hello1hello1 hello1hello1 hello1hello1 hello1hello1 hello1hello1 hello1hello1 hello1hello1 hello1hello1 hello1hello1 hello1hello1 hello1', 'hello1', 'hello1', '1638424569', 'admin', '279', '10', '');
INSERT INTO smsCampaigner_products VALUES ('9J3RC19L4D', 'product 2', 'aud_77VXSEKGSBScreenshot 2021-12-06 at 23-29-00 Marlin Crm Dashboard.png', 'product 2product 2product 2product 2product 2product 2product 2product 2product 2product 2product 2', 'product 2product 2product 2', 'product 2product 2', '1638815353', 'admin', '198', '20', '200');


CREATE TABLE `smsCampaigner_tags` (
  `id` varchar(200) NOT NULL,
  `tagname` varchar(256) DEFAULT NULL,
  `ticket_id` varchar(256) DEFAULT NULL,
  `color` varchar(256) DEFAULT '#3f6ad8',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_tags VALUES ('DU43GNW3SG', 'Test2', 'OPIVCYDE0M', '#0000FF');
INSERT INTO smsCampaigner_tags VALUES ('E10PQAACZQ', 'yellow', 'OPIVCYDE0M', '#FFFF00');
INSERT INTO smsCampaigner_tags VALUES ('EL66V155US', '11', 'OPIVCYDE0M', '#0000FF');
INSERT INTO smsCampaigner_tags VALUES ('P360P6QPQD', '122', 'OPIVCYDE0M', '#0000FF');
INSERT INTO smsCampaigner_tags VALUES ('T5GW45PEPU', '111', 'OPIVCYDE0M', '#0000FF');
INSERT INTO smsCampaigner_tags VALUES ('XJLP0MD706', 'as', 'OPIVCYDE0M', '#ccc');


CREATE TABLE `smsCampaigner_module` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `module_url` varchar(225) DEFAULT NULL,
  `module_name` varchar(255) DEFAULT NULL,
  `view` varchar(225) NOT NULL,
  `inserts` varchar(225) NOT NULL,
  `updates` varchar(225) NOT NULL,
  `deletes` varchar(225) NOT NULL,
  `action` varchar(225) DEFAULT NULL,
  `userId` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=192 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_module VALUES ('106', '', 'invoice', 'Y', 'Y', 'N', 'Y', '', '0UAGPL60I3');
INSERT INTO smsCampaigner_module VALUES ('107', '', 'product', 'N', 'Y', 'Y', 'N', '', '0UAGPL60I3');
INSERT INTO smsCampaigner_module VALUES ('108', '', 'customers', 'N', 'Y', 'N', 'Y', '', '0UAGPL60I3');
INSERT INTO smsCampaigner_module VALUES ('149', '', 'invoice', 'Y', 'Y', 'N', 'N', '', 'WJBPOZVLB9');
INSERT INTO smsCampaigner_module VALUES ('150', '', 'product', 'N', 'N', 'N', 'N', '', 'WJBPOZVLB9');
INSERT INTO smsCampaigner_module VALUES ('151', '', 'customers', 'N', 'N', 'Y', 'N', '', 'WJBPOZVLB9');
INSERT INTO smsCampaigner_module VALUES ('184', '', 'invoice', 'N', 'N', 'N', 'N', '', 'AMPCX4T2J2');
INSERT INTO smsCampaigner_module VALUES ('185', '', 'product', 'N', 'N', 'N', 'N', '', 'AMPCX4T2J2');
INSERT INTO smsCampaigner_module VALUES ('186', '', 'customers', 'N', 'N', 'N', 'N', '', 'AMPCX4T2J2');
INSERT INTO smsCampaigner_module VALUES ('187', '', 'employees', 'N', 'N', 'N', 'N', '', 'AMPCX4T2J2');
INSERT INTO smsCampaigner_module VALUES ('188', '', 'invoice', 'Y', 'Y', 'N', 'N', '', '');
INSERT INTO smsCampaigner_module VALUES ('189', '', 'product', 'N', 'N', 'N', 'N', '', '');
INSERT INTO smsCampaigner_module VALUES ('190', '', 'customers', 'N', 'N', 'N', 'N', '', '');
INSERT INTO smsCampaigner_module VALUES ('191', '', 'employees', 'N', 'N', 'N', 'N', '', '');


CREATE TABLE `smsCampaigner_project_files` (
  `id` varchar(200) NOT NULL,
  `description` varchar(256) DEFAULT '',
  `projectId` varchar(256) DEFAULT '',
  `userId` varchar(256) DEFAULT '',
  `timeAdded` varchar(256) DEFAULT '',
  `file` varchar(256) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_project_files VALUES ('4ON1RP4S3F', '2', 'C2VI6R28YV', 'admin', '1682602214', '');
INSERT INTO smsCampaigner_project_files VALUES ('5TMUB0Y6A7', 'sdsd', 'C2VI6R28YV', 'admin', '1682602046', '');
INSERT INTO smsCampaigner_project_files VALUES ('7FXQDDOQWJ', '2', 'C2VI6R28YV', 'admin', '1682602251', 'aud_QQLXCDIRY5B2C9603B-EFE4-42CE-AEC1-423ADF011876.png');
INSERT INTO smsCampaigner_project_files VALUES ('7WP2HYIR05', '2', 'C2VI6R28YV', 'admin', '1682602101', '');
INSERT INTO smsCampaigner_project_files VALUES ('9HHH12AGLN', '2', 'C2VI6R28YV', 'admin', '1682602135', '');
INSERT INTO smsCampaigner_project_files VALUES ('DV8CW6GAEO', 'sdsd', 'C2VI6R28YV', 'admin', '1682602078', '');
INSERT INTO smsCampaigner_project_files VALUES ('GBWUNIZ1Q4', 'sdsd', 'C2VI6R28YV', 'admin', '1682602050', '');
INSERT INTO smsCampaigner_project_files VALUES ('TEMHT9UCX9', '2', 'C2VI6R28YV', 'admin', '1682602211', '');


CREATE TABLE `smsCampaigner_orders` (
  `id` varchar(200) NOT NULL,
  `title` varchar(256) DEFAULT '',
  `description` varchar(256) DEFAULT '',
  `client_id` varchar(256) DEFAULT '',
  `status` varchar(256) DEFAULT '',
  `shipping_address` varchar(256) DEFAULT '',
  `billing_address` varchar(256) DEFAULT '',
  `timeAdded` varchar(256) DEFAULT NULL,
  `userId` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_orders VALUES ('3S4XM025U8', 'title', 'des', 'SRZFNKPJ03', 'Pending', 'hjkhjkghkjhkjhjk', 'jhjkhjkhkjhjk', '1684398609', 'admin');
INSERT INTO smsCampaigner_orders VALUES ('AQM1HKE3KN', 'Order1', '', '', '', '', '', '1684241416', 'admin');
INSERT INTO smsCampaigner_orders VALUES ('J2TK6DVZBQ', 'Order4', '', 'admin', 'Complete', '', '', '1684249756', 'KCY5XK6UYU');
INSERT INTO smsCampaigner_orders VALUES ('OKEWKTI5D1', 'Order2', 'Lahore', 'TMAE0W7T6C', 'Complete', 'Abc', '56', '1684249896', 'admin');
INSERT INTO smsCampaigner_orders VALUES ('UXFCFR4GBV', 'uu', 'khkjhkjhui', 'TMAE0W7T6C', 'Pending', 'kjhjkhjkh', 'khjkhkjhjkh', '1684392567', 'admin');
INSERT INTO smsCampaigner_orders VALUES ('WCR9PJ23I5', 'aaa', 'sss', 'TMAE0W7T6C', 'Complete', 'Abc', '', '1684252997', 'admin');


CREATE TABLE `smsCampaigner_tickets` (
  `id` varchar(200) NOT NULL,
  `title` varchar(256) DEFAULT '',
  `assigned_to` varchar(256) DEFAULT '',
  `description` longtext DEFAULT '',
  `files` longtext DEFAULT '',
  `timeAdded` varchar(256) DEFAULT NULL,
  `userId` varchar(256) DEFAULT NULL,
  `closed_at` varchar(256) DEFAULT '',
  `customer_id` varchar(256) DEFAULT '',
  `status` varchar(256) DEFAULT 'Open',
  `ticket_number` int(32) NOT NULL AUTO_INCREMENT,
  `tags` varchar(256) DEFAULT '',
  `notes` longtext DEFAULT '',
  PRIMARY KEY (`ticket_number`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_tickets VALUES ('3112CYESE4', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum ', '[\"WJBPOZVLB9\"]', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum ', '[null]', '1641021332', 'admin', '', '', 'In-Progress', '1', '', '');
INSERT INTO smsCampaigner_tickets VALUES ('7B9V3W7QG0', 'jh', 'WJBPOZVLB9', 'jhj', '[\"aud_H3JNI7PBG8Screenshot 2021-12-31 at 10-20-00 Neon Commerce.png\",\"aud_UB1MGNI68D58443c96a6515b1e0ad75b78.png\"]', '1641019970', 'admin', '', '', 'Open', '2', '', '');
INSERT INTO smsCampaigner_tickets VALUES ('M6FU03JUO9', 'In publishing and graphic design, Lorem ipsum is a pla', 'WJBPOZVLB9', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available. WikipediaIn publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available. WikipediaIn publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available. Wikipedia', '[null]', '1641021096', 'admin', '', '0UAGPL60I3', 'Open', '3', '', '');
INSERT INTO smsCampaigner_tickets VALUES ('T6RHB4AL4S', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate t', '', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate t', '[null]', '1641021214', 'admin', '', '', 'Open', '4', '', '');
INSERT INTO smsCampaigner_tickets VALUES ('XWKKX27B5T', 'kjkk', 'WJBPOZVLB9', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available. WikipediaIn publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available. WikipediaIn publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available. WikipediaIn publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available. WikipediaIn publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available. Wikipedia', '[null]', '1641015805', 'admin', '1641281828', '', 'Closed', '5', '', '');
INSERT INTO smsCampaigner_tickets VALUES ('YA4P0HCW52', 'Lorem ipsum1', '[\"admin\",\"WJBPOZVLB9\"]', 'Lorem ipsum1', '[null]', '1641021417', 'admin', '', '9I2LPWITT5', 'In-Progress', '6', 'hello, 123', 'asdasd');
INSERT INTO smsCampaigner_tickets VALUES ('ZN01KX5PV6', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate t', 'WJBPOZVLB9', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate tIn publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate tIn publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate tIn publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate tIn publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate tIn publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate t', '[null]', '1641021182', 'admin', '', '0UAGPL60I3', 'Open', '7', '', '');
INSERT INTO smsCampaigner_tickets VALUES ('5V0B7GZEQ4', '', 'null', '', '', '1641629584', 'admin', '', '', 'Open', '12', '', '');
INSERT INTO smsCampaigner_tickets VALUES ('PMWHBPUWQ5', '', 'null', '', '', '1641629591', 'admin', '', '', 'Open', '13', '', '');
INSERT INTO smsCampaigner_tickets VALUES ('43QNZYWJYC', 'My Title', '[\"admin\",\"WJBPOZVLB9\"]', 'My Description', '[null]', '1641714932', 'admin', '', '9I2LPWITT5', 'Open', '14', '', '');
INSERT INTO smsCampaigner_tickets VALUES ('MFF8GNLP8D', 'Hamza', '[\"admin\"]', 'dcsdv', '[\"aud_IWKQBVFS4Jdata_for_customer.xlsx\"]', '1642103021', 'admin', '', '0UAGPL60I3', 'Open', '15', '', '');
INSERT INTO smsCampaigner_tickets VALUES ('490ZF35I48', 'Hamza', '[\"admin\"]', 'dcsdv', '[\"aud_1K8F13OWJIdata_for_customer.xlsx\"]', '1642103024', 'admin', '', '0UAGPL60I3', 'Open', '16', '', '');
INSERT INTO smsCampaigner_tickets VALUES ('OPIVCYDE0M', 'vdfvdfvdf', 'null', 'fvdfvsdffvd1\r\n', '[null]', '1642138343', 'admin', '1658666640', 'TMAE0W7T6C', 'Open', '17', '', '');
INSERT INTO smsCampaigner_tickets VALUES ('ITM4FRO1C5', 'hhh', '[\"6MD1B8WC50\"]', 'hhh', '[null]', '1658667018', 'admin', '', 'TMAE0W7T6C', 'In-Progress', '18', '', '');


CREATE TABLE `smsCampaigner_application` (
  `id` varchar(200) NOT NULL,
  `payment_date` varchar(256) DEFAULT '',
  `student_id` longtext DEFAULT '',
  `apply_date` longtext DEFAULT '',
  `status` longtext DEFAULT '',
  `requirments` longtext DEFAULT '',
  `current_stage` varchar(256) DEFAULT '',
  `timeAdded` varchar(256) DEFAULT NULL,
  `userId` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_application VALUES ('647G1DO5M3', '', '4', '2023-09-07', 'Not Paid', '', 'Pre-Payment', '1694078240', 'admin');
INSERT INTO smsCampaigner_application VALUES ('FBRMJN6QFQ', '', '4', '2023-09-07', 'Not Paid', '', 'Pre-Payment', '1694078340', 'admin');
INSERT INTO smsCampaigner_application VALUES ('IBM6G3G06U', '', 'GGBTO83B2V', '2023-09-06', 'Not Paid', '', 'Pre-Payment', '1694010157', 'admin');
INSERT INTO smsCampaigner_application VALUES ('PH6E76YMLT', '', '2', '2023-09-06', 'Not Paid', '', 'Pre-Payment', '1694010063', 'admin');
INSERT INTO smsCampaigner_application VALUES ('WGBXI3KM3Q', '', '2', '2023-09-07', 'Not Paid', '', 'Pre-Payment', '1694066884', 'admin');


CREATE TABLE `smsCampaigner_martinLeadFormGenerator_answers` (
  `id` varchar(200) NOT NULL,
  `question_id` varchar(256) DEFAULT '',
  `answer` longtext DEFAULT '',
  `questionnaire_id` varchar(256) DEFAULT '',
  `timeAdded` varchar(256) DEFAULT NULL,
  `userId` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;



CREATE TABLE `smsCampaigner_faq` (
  `id` varchar(200) NOT NULL,
  `title` varchar(256) DEFAULT '',
  `description` varchar(256) DEFAULT '',
  `name` varchar(256) NOT NULL,
  `size` varchar(256) NOT NULL,
  `type` varchar(256) NOT NULL,
  `myfiles` longtext DEFAULT '',
  `timeAdded` varchar(256) DEFAULT NULL,
  `userId` varchar(256) DEFAULT NULL,
  `thumbnail` varchar(256) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_faq VALUES ('00WTJOKBGF', '2131233', 'do not cover hiim', '', '', '', '', '1682057775', 'admin', '');
INSERT INTO smsCampaigner_faq VALUES ('8SUI0BP49F', 'pelvis', 'pelvis', '', '', '', '[\"aud_ES9J4XEUDSpelvic space.mp4\"]', '1682414878', 'admin', '');
INSERT INTO smsCampaigner_faq VALUES ('9IEFQH7R12', 'saddsaa', 'sadsad', '', '', '', '[]', '1682486512', 'admin', '');
INSERT INTO smsCampaigner_faq VALUES ('ECT7BAI9TN', 'Video Test 1', 'Video Test 1', 'null', '', '', '[\"aud_E1TCFSHK5Cstory-1_U9Hznklz.mp4\"]', '1682508039', 'admin', 'aud_B3VBWBUBXZScreenshot 2023-04-28 at 2.34.44 .png');
INSERT INTO smsCampaigner_faq VALUES ('H0ZXT7SKUG', 'sss', 'I distinguish three main text objecttives.First your objective could be merely', '', '', '', '[\"aud_S8UMRHQI5HScreenshot (175).png\",\"aud_FSW23L9JN9Screenshot (176).png\"]', '1682056828', 'admin', '');
INSERT INTO smsCampaigner_faq VALUES ('HBBLFOX9RI', 'check', 'sss', 'Screenshot (176).png', '189907', 'image/png', '[]', '1682506730', 'admin', '');
INSERT INTO smsCampaigner_faq VALUES ('L8IQBZGIUM', 'tesing blog', 't', '', '', '', '[]', '1682505974', 'admin', '');
INSERT INTO smsCampaigner_faq VALUES ('U9L19BLPLO', 'Updates and bug fixes are included in the cost of ALL items.', 'orem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an ', '', '', '', '', '1682056745', 'admin', '');


CREATE TABLE `smsCampaigner_files` (
  `id` varchar(200) NOT NULL,
  `name` varchar(256) DEFAULT '',
  `new_name` varchar(255) DEFAULT NULL,
  `timeAdded` varchar(256) DEFAULT NULL,
  `userId` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_files VALUES ('2016249AQW', 'Screenshot 2023-07-26 at 12.55.30 PM.png', '2707231690458151Screenshot 2023-07-26 at 12.55.30 PM.png', '1690458151', 'admin');
INSERT INTO smsCampaigner_files VALUES ('5JM392DKTC', 'bandicam 2022-10-24 11-22-55-097.jpg', '2407231690183993bandicam 2022-10-24 11-22-55-097.jpg', '1690183993', 'admin');
INSERT INTO smsCampaigner_files VALUES ('5VMQR82615', 'home.jpg', '1010231696917255home.jpg', '1696917255', 'admin');
INSERT INTO smsCampaigner_files VALUES ('6R92BWTSMZ', 'home.jpg', '1010231696917256home.jpg', '1696917256', 'admin');
INSERT INTO smsCampaigner_files VALUES ('7CVEV4XQ7S', 'bandicam 2022-10-24 11-25-45-820.jpg', '2407231690185293bandicam 2022-10-24 11-25-45-820.jpg', '1690185293', 'admin');
INSERT INTO smsCampaigner_files VALUES ('GHA3M6TNW5', 'home.jpg', '1010231696917282home.jpg', '1696917282', 'admin');
INSERT INTO smsCampaigner_files VALUES ('N69AFHN2IF', 'new.xml', '0806221654650140new.xml', '1654650140', 'admin');
INSERT INTO smsCampaigner_files VALUES ('NJWR08D6QG', 'new.html', '0806221654650177new.html', '1654650177', 'admin');
INSERT INTO smsCampaigner_files VALUES ('NSTB8L0EXD', 'main.js', '0806221654650010main.js', '1654650010', 'admin');
INSERT INTO smsCampaigner_files VALUES ('PSHQ58QX87', 'cargurus-logo.png', '0706221654567157cargurus-logo.png', '1654567157', 'admin');
INSERT INTO smsCampaigner_files VALUES ('SLOK4QF3YX', 'Downloads.zip', '0806221654649815Downloads.zip', '1654649815', 'admin');
INSERT INTO smsCampaigner_files VALUES ('T87NUOQJCH', 'GreenEdge Analytics(1).docx', '0910231696871714GreenEdge Analytics(1).docx', '1696871714', 'admin');


CREATE TABLE `smsCampaigner_data_entries` (
  `id` varchar(256) NOT NULL,
  `formId` varchar(256) DEFAULT '',
  `companyName` varchar(256) DEFAULT '',
  `organizationType` varchar(256) DEFAULT '',
  `question` varchar(256) DEFAULT '',
  `questionType` varchar(256) DEFAULT '',
  `answer` varchar(256) DEFAULT '',
  `timeAdded` int(128) DEFAULT NULL,
  `submissionId` varchar(256) DEFAULT '',
  `userId` varchar(256) DEFAULT '',
  `orderNo` int(128) NOT NULL,
  `html` varchar(256) DEFAULT '',
  `full_submission_id` varchar(256) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_data_entries VALUES ('4WTC4E9TCU', 'JUKWM46OG6', '', '', 'AG2NHK7BWW', 'Yes No Question', 'Yes', '1679902997', 'U6Z94Y5I3X', 'admin', '0', '', 'K7ITAH4OQD');
INSERT INTO smsCampaigner_data_entries VALUES ('7U5PNB3J2O', 'JUKWM46OG6', '', '', 'IL2DASKT42', 'Short Answer', '24', '1679902996', 'HOLG52NT1A', 'admin', '0', '', 'K7ITAH4OQD');
INSERT INTO smsCampaigner_data_entries VALUES ('RFNIGAKCI6', 'JUKWM46OG6', '', '', 'KEHJ7KPV2C', 'Short Answer', 'Ahsan', '1679902995', '6EEJB0D7HA', 'admin', '0', '', 'K7ITAH4OQD');
INSERT INTO smsCampaigner_data_entries VALUES ('XRZ96AV5BJ', 'JUKWM46OG6', '', '', 'K2G9R3LB9X', 'Long Answer', 'I am a developer', '1679902998', 'S4UZOH46IF', 'admin', '0', '', 'K7ITAH4OQD');


CREATE TABLE `smsCampaigner_notes` (
  `id` varchar(200) NOT NULL,
  `note` varchar(256) DEFAULT '',
  `customerId` varchar(256) DEFAULT '',
  `document` varchar(256) DEFAULT '',
  `timeAdded` varchar(256) DEFAULT NULL,
  `userId` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_notes VALUES ('48YBC0SJDK', 'asdasd', 'WDED2LFF3T', '', '1638345670', 'admin');
INSERT INTO smsCampaigner_notes VALUES ('CS3F50S29D', 'asd', '6NA9DLOCOZ', '', '1638345577', 'admin');


CREATE TABLE `smsCampaigner_payments` (
  `id` varchar(200) NOT NULL,
  `title` varchar(256) DEFAULT NULL,
  `description` varchar(256) DEFAULT NULL,
  `amount` varchar(256) DEFAULT NULL,
  `status` varchar(256) DEFAULT NULL,
  `method` varchar(256) DEFAULT NULL,
  `debitcredit` varchar(256) DEFAULT NULL,
  `devnote` varchar(256) DEFAULT NULL,
  `userId` varchar(256) DEFAULT NULL,
  `timeAdded` varchar(256) DEFAULT NULL,
  `payment_type` varchar(256) DEFAULT 'onetime',
  `subscription_id` varchar(256) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_payments VALUES ('0', 'The credit card has expired.', '', '151.51', 'Error', '', '', '', '', '', 'onetime', '');
INSERT INTO smsCampaigner_payments VALUES ('236UI1UPUS', 'Payment of USD 10', '', '10', 'Pending', 'stripe', 'credit', 'deposit_to_wallet', 'admin', '1666273563', 'onetime', '');
INSERT INTO smsCampaigner_payments VALUES ('30HGBJPR3S', 'Payment of USD 10', '', '10', 'Pending', '', 'credit', '1', 'admin', '1644650003', 'onetime', '');
INSERT INTO smsCampaigner_payments VALUES ('3CEL3USO94', 'Payment of USD 10', '', '10', 'Paid', 'authorizenet', 'credit', '1', 'admin', '1650955878', 'onetime', '');
INSERT INTO smsCampaigner_payments VALUES ('3CNRKRYGZ9', 'Payment of USD 100', '', '100', 'Pending', '', 'credit', '', 'admin', '1694191716', 'onetime', '');
INSERT INTO smsCampaigner_payments VALUES ('3YDXMV9T1P', 'Payment of USD 10', '', '10', 'Pending', '', 'credit', '', 'admin', '1644562485', 'onetime', '');
INSERT INTO smsCampaigner_payments VALUES ('49M67Q0YET', 'Payment of USD 10', '', '10', 'Pending', 'stripe', 'credit', '1', 'admin', '1644648907', 'onetime', '');
INSERT INTO smsCampaigner_payments VALUES ('4DP85HAPBU', 'Payment of USD 100', '', '100', 'Pending', '', 'credit', 'deposit_to_wallet', 'admin', '1656557351', 'onetime', '');
INSERT INTO smsCampaigner_payments VALUES ('60191775824', 'This transaction has been approved.', '', '151.51', 'Approved', '', '', '', '', '', 'onetime', '');
INSERT INTO smsCampaigner_payments VALUES ('60191775971', 'This transaction has been approved.', '', '151.51', 'Approved', '', '', '', '', '', 'onetime', '');
INSERT INTO smsCampaigner_payments VALUES ('6ABRNHWY8W', 'Payment of USD 12', '', '12', 'Paid', 'stripe', 'credit', 'deposit_to_wallet', 'admin', '1644565068', 'onetime', '');
INSERT INTO smsCampaigner_payments VALUES ('7ZB18LUKHS', 'Payment of USD 1', '', '1', 'Pending', '', 'credit', '', 'admin', '1662009244', 'onetime', '');
INSERT INTO smsCampaigner_payments VALUES ('BAXE063JZ7', 'Payment of USD 10', '', '10', 'Paid', 'paypal', 'credit', '', 'admin', '1644562929', 'onetime', '');
INSERT INTO smsCampaigner_payments VALUES ('DOYN8X1MNH', 'Payment of USD 23', '', '23', 'Pending', '', 'credit', '', 'admin', '1694687529', 'onetime', '');
INSERT INTO smsCampaigner_payments VALUES ('E1QY24TGTN', 'Payment of USD 766', '', '766', 'Paid', 'stripe', 'credit', '1', 'admin', '1674891081', 'subscription', 'sub_1MV8tqHQjkfG1DwO6NJ4cRZz');
INSERT INTO smsCampaigner_payments VALUES ('E5M9O7GXMY', 'Payment of USD 12', '', '12', 'Pending', '', 'credit', '', 'admin', '1644565033', 'onetime', '');
INSERT INTO smsCampaigner_payments VALUES ('N6DFS1MVN1', 'Payment of USD 10', '', '10', 'Pending', 'stripe', 'credit', '1', 'admin', '1644655180', 'onetime', '');
INSERT INTO smsCampaigner_payments VALUES ('N9ICTFVAZ7', 'Payment of USD ', '', '', 'Pending', '', 'credit', '1', 'admin', '1644574854', 'onetime', '');
INSERT INTO smsCampaigner_payments VALUES ('NSDPRF6QL1', 'Payment of USD 10', '', '10', 'Pending', 'ewallet', 'credit', '', 'admin', '1644564699', 'onetime', '');
INSERT INTO smsCampaigner_payments VALUES ('OPI3QKV5R8', 'Payment of USD 10', '', '10', 'Pending', 'stripe', 'credit', 'deposit_to_wallet', 'admin', '1666273798', 'onetime', '');
INSERT INTO smsCampaigner_payments VALUES ('P9X83WNZY4', 'Payment of USD 12', '', '12', 'Pending', 'stripe', 'credit', '1', 'admin', '1644574757', 'onetime', '');
INSERT INTO smsCampaigner_payments VALUES ('U63KNZ7U36', 'Payment of USD 10', '', '10', 'Pending', '', 'credit', '', '', '', 'onetime', '');
INSERT INTO smsCampaigner_payments VALUES ('UALIDUV3XG', 'Payment of USD 10', '', '10', 'Pending', '', 'credit', '', 'admin', '1644562088', 'onetime', '');
INSERT INTO smsCampaigner_payments VALUES ('V7G937LGSK', 'Payment of USD 12', '', '12', 'Paid', 'authorizenet', 'credit', '1', 'admin', '1650958608', 'onetime', '');
INSERT INTO smsCampaigner_payments VALUES ('VATXO2FJZO', 'Payment of USD 100', '', '100', 'cancelled', 'paypal', 'credit', '1', 'admin', '1661837913', 'subscription', 'sub_1LcO6mHQjkfG1DwORmnWVNW6');
INSERT INTO smsCampaigner_payments VALUES ('VOSS1HMP1M', 'Payment of USD ', '', '', 'Pending', 'stripe', 'credit', '1', 'admin', '1644648723', 'onetime', '');


CREATE TABLE `smsCampaigner_campaign_users` (
  `id` varchar(200) NOT NULL,
  `campaignId` varchar(256) DEFAULT NULL,
  `userId` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_campaign_users VALUES ('0V0TLADDD3', '5RIBUW42M0', 'VDLKMR6WQ0');
INSERT INTO smsCampaigner_campaign_users VALUES ('0Y8VMBYGQN', 'KED60TPOCG', 'K41I4AP25Q');
INSERT INTO smsCampaigner_campaign_users VALUES ('2OXZWK7PW7', '5RIBUW42M0', 'TMAE0W7T6C');
INSERT INTO smsCampaigner_campaign_users VALUES ('3LWNM5AZNE', 'HODPSQAEAW', 'K41I4AP25Q');
INSERT INTO smsCampaigner_campaign_users VALUES ('5HDMZT4BKH', '5RIBUW42M0', '5XAZW1GHKA');
INSERT INTO smsCampaigner_campaign_users VALUES ('5THOV8DFID', 'KED60TPOCG', 'WQCZGY0EAO');
INSERT INTO smsCampaigner_campaign_users VALUES ('70RWMYWJ2G', 'KED60TPOCG', 'X4KKLLYUI9');
INSERT INTO smsCampaigner_campaign_users VALUES ('7KRB0PT8MS', 'KED60TPOCG', 'ZANIMFPVDD');
INSERT INTO smsCampaigner_campaign_users VALUES ('9HVT66GE08', 'HODPSQAEAW', 'KCY5XK6UYU');
INSERT INTO smsCampaigner_campaign_users VALUES ('9ZWE0BJZLE', 'KED60TPOCG', '4XSQFC12IY');
INSERT INTO smsCampaigner_campaign_users VALUES ('A35GWGDP0I', '5RIBUW42M0', 'AQGGRTO4W1');
INSERT INTO smsCampaigner_campaign_users VALUES ('BSFRGNQVOT', 'HODPSQAEAW', 'YPBTZUCA6W');
INSERT INTO smsCampaigner_campaign_users VALUES ('DS7IVK6VTU', 'UMUVFQKV8V', 'BFV5HYXAS9');
INSERT INTO smsCampaigner_campaign_users VALUES ('DY2DYLHNOS', 'KED60TPOCG', '87E5HFUC5Z');
INSERT INTO smsCampaigner_campaign_users VALUES ('EAWUJ40DOA', 'KED60TPOCG', 'TMAE0W7T6D');
INSERT INTO smsCampaigner_campaign_users VALUES ('EXGIIDEZ3G', 'KED60TPOCG', 'XS9A3RQV6E');
INSERT INTO smsCampaigner_campaign_users VALUES ('GQEQNL4I42', 'KED60TPOCG', '105130643909555210013');
INSERT INTO smsCampaigner_campaign_users VALUES ('HHXV0R9WPX', 'UMUVFQKV8V', '6MD1B8WC50');
INSERT INTO smsCampaigner_campaign_users VALUES ('IC7OXESFNW', 'KED60TPOCG', '37YHW0ZM2B');
INSERT INTO smsCampaigner_campaign_users VALUES ('ITUCYVQQSJ', 'UMUVFQKV8V', 'INO1IRF9E8');
INSERT INTO smsCampaigner_campaign_users VALUES ('IUTLCXV31J', '5RIBUW42M0', 'JKPFOEUN9V');
INSERT INTO smsCampaigner_campaign_users VALUES ('J2QQVT2MHB', 'KED60TPOCG', 'AMPCX4T2J2');
INSERT INTO smsCampaigner_campaign_users VALUES ('JN1ALH14EW', '5RIBUW42M0', 'AMPCX4T2J2');
INSERT INTO smsCampaigner_campaign_users VALUES ('JZKOK8TPNL', 'UMUVFQKV8V', 'admin');
INSERT INTO smsCampaigner_campaign_users VALUES ('KG2OXAULH1', 'KED60TPOCG', 'QH1PR59X5O');
INSERT INTO smsCampaigner_campaign_users VALUES ('KHLL07DYDZ', 'KED60TPOCG', 'EPXVO95EG1');
INSERT INTO smsCampaigner_campaign_users VALUES ('KJYC5UVG3Y', 'KED60TPOCG', 'KHB9NQ20FH');
INSERT INTO smsCampaigner_campaign_users VALUES ('LTMBYKTNJB', 'UMUVFQKV8V', 'TMAE0W7T6C');
INSERT INTO smsCampaigner_campaign_users VALUES ('LZ5057PO7W', 'KED60TPOCG', 'GH7BPI4YF6');
INSERT INTO smsCampaigner_campaign_users VALUES ('MNDPYMUSBO', 'HODPSQAEAW', '6KEDG6CHZ2');
INSERT INTO smsCampaigner_campaign_users VALUES ('MQN4W1AYEP', 'KED60TPOCG', 'MFUG1Y2Q38');
INSERT INTO smsCampaigner_campaign_users VALUES ('NB67ZR9G0P', 'KED60TPOCG', '6MD1B8WC50');
INSERT INTO smsCampaigner_campaign_users VALUES ('NNA6I3K8G9', 'KED60TPOCG', '2RMHWEAOD5');
INSERT INTO smsCampaigner_campaign_users VALUES ('OECC0UZS7M', 'UMUVFQKV8V', 'AMPCX4T2J2');
INSERT INTO smsCampaigner_campaign_users VALUES ('OH4I1SHSAM', 'UMUVFQKV8V', 'VDLKMR6WQ0');
INSERT INTO smsCampaigner_campaign_users VALUES ('OLP266XFB4', 'KED60TPOCG', 'WHGR6C7WPJ');
INSERT INTO smsCampaigner_campaign_users VALUES ('OQARNP8T65', 'HODPSQAEAW', 'AMPCX4T2J2');
INSERT INTO smsCampaigner_campaign_users VALUES ('PXNLYL1XNO', 'IHLTL8NWKG', '8BY550LOCT');
INSERT INTO smsCampaigner_campaign_users VALUES ('QLB9H0OFNK', 'KED60TPOCG', 'JKPFOEUN9V');
INSERT INTO smsCampaigner_campaign_users VALUES ('RFV9JF781N', 'HODPSQAEAW', 'ITMTY1TWGC');
INSERT INTO smsCampaigner_campaign_users VALUES ('RKPP00IS11', 'SFJTYVSPTZ', 'SUER7V1UBC');
INSERT INTO smsCampaigner_campaign_users VALUES ('SLLGXG0H2B', 'HODPSQAEAW', 'SUER7V1UBC');
INSERT INTO smsCampaigner_campaign_users VALUES ('STYFZ06RLU', '5RIBUW42M0', 'QH1PR59X5O');
INSERT INTO smsCampaigner_campaign_users VALUES ('TNL4NBFG88', 'UMUVFQKV8V', 'G75ZJWWB55');
INSERT INTO smsCampaigner_campaign_users VALUES ('UT9U2RWRQE', 'IHLTL8NWKG', 'WKTLOQQ9RP');
INSERT INTO smsCampaigner_campaign_users VALUES ('UZ8ZLKU6U1', 'KED60TPOCG', '106482865197431586573');
INSERT INTO smsCampaigner_campaign_users VALUES ('V56A2WH47V', 'KED60TPOCG', 'ZX8CTA9QBR');
INSERT INTO smsCampaigner_campaign_users VALUES ('V61ECMEE91', 'F045Y8FCV4', 'KCY5XK6UYU');
INSERT INTO smsCampaigner_campaign_users VALUES ('VOGYXTYVVJ', 'VVLYY99CWZ', '8BY550LOCT');
INSERT INTO smsCampaigner_campaign_users VALUES ('VQNID63KLT', 'UMUVFQKV8V', 'LS3ZSENVOY');
INSERT INTO smsCampaigner_campaign_users VALUES ('W0WGAJFO5N', 'KED60TPOCG', 'TMAE0W7T6C');
INSERT INTO smsCampaigner_campaign_users VALUES ('W6BNU774F3', '5RIBUW42M0', 'K41I4AP25Q');
INSERT INTO smsCampaigner_campaign_users VALUES ('WCJN456YLV', 'SFJTYVSPTZ', 'QPOYY7IR7G');
INSERT INTO smsCampaigner_campaign_users VALUES ('WEL5G8TZI7', 'KED60TPOCG', '105174433658161826534');
INSERT INTO smsCampaigner_campaign_users VALUES ('Y3825607N5', 'KED60TPOCG', 'LE95PFYHHO');
INSERT INTO smsCampaigner_campaign_users VALUES ('Z7OKH3S05E', 'HODPSQAEAW', 'VDLKMR6WQ0');


CREATE TABLE `smsCampaigner_ticket_replies` (
  `id` varchar(200) NOT NULL,
  `reply` varchar(256) DEFAULT '',
  `files` longtext DEFAULT '',
  `ticketId` varchar(256) DEFAULT '',
  `timeAdded` varchar(256) DEFAULT NULL,
  `userId` varchar(256) DEFAULT NULL,
  `category` varchar(256) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_ticket_replies VALUES ('2V4DQSQDIL', '<p>a replt</p>', '[null]', '43QNZYWJYC', '1641918958', 'admin', 'notes');
INSERT INTO smsCampaigner_ticket_replies VALUES ('34HYXMVTE7', 'asdasd', '[\"aud_GS7GZ64O1Lhouse-1867187__480.jpg\"]', 'XWKKX27B5T', '1641018271', 'admin', '');
INSERT INTO smsCampaigner_ticket_replies VALUES ('5MXDIQOO9V', '<p>a ote</p>', '[null]', '43QNZYWJYC', '1641919117', 'admin', 'notes');
INSERT INTO smsCampaigner_ticket_replies VALUES ('6FG0MN21I5', '<p>hj</p>', '[null]', 'ITM4FRO1C5', '1658667906', '6MD1B8WC50', 'notes');
INSERT INTO smsCampaigner_ticket_replies VALUES ('6Q0958F36Z', '<p>asdasd</p>', '[null]', '43QNZYWJYC', '1641918781', 'admin', 'notes');
INSERT INTO smsCampaigner_ticket_replies VALUES ('8BQ4BQ6EQQ', '<p>bvbb</p>', '[null]', 'OPIVCYDE0M', '1658660597', 'admin', 'reply');
INSERT INTO smsCampaigner_ticket_replies VALUES ('9AS3HZZGRG', '86 Lee Avenue, Washington, PA, USA', '[null]', '3112CYESE4', '1641076900', 'admin', '');
INSERT INTO smsCampaigner_ticket_replies VALUES ('9XT4BCHX3Y', '<p>ghhgghgh</p>', '[null]', 'ITM4FRO1C5', '1658667895', '6MD1B8WC50', 'reply');
INSERT INTO smsCampaigner_ticket_replies VALUES ('B7SL94R5M4', '<p>a replty</p>', '[null]', '43QNZYWJYC', '1641919112', 'admin', 'reply');
INSERT INTO smsCampaigner_ticket_replies VALUES ('CS575RLJ4V', '<p>b</p>', '[null]', 'ITM4FRO1C5', '1658716985', '6MD1B8WC50', 'reply');
INSERT INTO smsCampaigner_ticket_replies VALUES ('DHGPSH3KC5', '<p>demo</p>', '[null]', '490ZF35I48', '1658730396', 'admin', 'reply');
INSERT INTO smsCampaigner_ticket_replies VALUES ('DK13AIAUZX', '<p>asdasd</p>', '[null]', '43QNZYWJYC', '1641789711', 'admin', 'reply');
INSERT INTO smsCampaigner_ticket_replies VALUES ('DVOGH60VRW', '<p>Testing</p>', '[null]', '43QNZYWJYC', '1641920461', 'admin', 'reply');
INSERT INTO smsCampaigner_ticket_replies VALUES ('JQ62VY644E', 'this si anote', '[null]', 'YA4P0HCW52', '1641644260', 'admin', '');
INSERT INTO smsCampaigner_ticket_replies VALUES ('LGKMUV9FKM', '<p>repl</p>', '[null]', '43QNZYWJYC', '1641789719', 'admin', 'notes');
INSERT INTO smsCampaigner_ticket_replies VALUES ('MTSCBQ8O4H', '<p>asd</p>', '[null]', 'OPIVCYDE0M', '1647330053', 'admin', 'reply');
INSERT INTO smsCampaigner_ticket_replies VALUES ('N3XCKPMBJ2', 'asdasd', '[\"aud_CWMS2BF075house-1867187__480.jpg\"]', 'XWKKX27B5T', '1641018394', 'admin', '');
INSERT INTO smsCampaigner_ticket_replies VALUES ('NK72RFK1LN', '<p>scsdvfvfv</p>', '[null]', '43QNZYWJYC', '1641750159', 'admin', 'notes');
INSERT INTO smsCampaigner_ticket_replies VALUES ('O69WPU6AAD', '<p>jbkjb</p>', '[null]', '490ZF35I48', '1658730386', 'admin', 'reply');
INSERT INTO smsCampaigner_ticket_replies VALUES ('Q6O47OB9RY', '<p>n</p><p>&nbsp;</p>', '[null]', 'OPIVCYDE0M', '1658660621', 'admin', 'notes');
INSERT INTO smsCampaigner_ticket_replies VALUES ('RCXM71CV40', 'asdasd', '[\"aud_4HPMDVDSRVhouse-1867187__480.jpg\"]', 'XWKKX27B5T', '1641018314', 'admin', '');
INSERT INTO smsCampaigner_ticket_replies VALUES ('SYLCFZK4GQ', '<p><em><strong>My Note</strong></em></p>', '[\"aud_E53SCD6SNAred.png\"]', '43QNZYWJYC', '1641749219', 'admin', 'reply');
INSERT INTO smsCampaigner_ticket_replies VALUES ('U6S35LPQMW', '<p>this is a note.</p>', '[null]', '43QNZYWJYC', '1641918691', 'admin', 'reply');
INSERT INTO smsCampaigner_ticket_replies VALUES ('YAJ1XLKNFQ', '<p>bnmnmb</p>', '[null]', 'OPIVCYDE0M', '1658660589', 'admin', 'reply');
INSERT INTO smsCampaigner_ticket_replies VALUES ('ZJN8NFVSP1', 'note1', '[null]', 'YA4P0HCW52', '1641644389', 'admin', 'reply');


CREATE TABLE `smsCampaigner_customer_fields` (
  `id` varchar(200) NOT NULL,
  `field_name` varchar(256) DEFAULT '',
  `timeAdded` varchar(256) DEFAULT NULL,
  `userId` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_customer_fields VALUES ('1XVDNEVTID', 'Cellphone', '1640081671', 'admin');
INSERT INTO smsCampaigner_customer_fields VALUES ('8VM3BF5OTX', 'Address', '1640081676', 'admin');


CREATE TABLE `smsCampaigner_order_items` (
  `id` varchar(200) NOT NULL,
  `title` varchar(256) DEFAULT '',
  `description` varchar(255) NOT NULL,
  `order_id` varchar(256) DEFAULT '',
  `timeAdded` varchar(256) DEFAULT NULL,
  `userId` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_order_items VALUES ('6YFFMN8JEY', 'Mobiles ', 'Oppo', 'J2TK6DVZBQ', '1684249776', 'KCY5XK6UYU');
INSERT INTO smsCampaigner_order_items VALUES ('WS433K8K4Z', '12312323', '23', '3S4XM025U8', '1684403160', 'admin');
INSERT INTO smsCampaigner_order_items VALUES ('XEEPDAK5W3', '232', '32233', 'OKEWKTI5D1', '1684404832', 'admin');


CREATE TABLE `smsCampaigner_leaves` (
  `id` varchar(200) NOT NULL,
  `name` varchar(256) DEFAULT '',
  `start_date` varchar(256) DEFAULT '',
  `end_date` varchar(256) DEFAULT '',
  `description` varchar(256) DEFAULT '',
  `admin_remarks` varchar(256) DEFAULT '',
  `status` varchar(255) DEFAULT NULL,
  `timeAdded` varchar(256) DEFAULT NULL,
  `userId` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_leaves VALUES ('NU3BS0RYQG', 'ccxzc', '2022-06-17', '2022-06-24', 'cxc', 'acep', '0', '1655215602', '6MD1B8WC50');
INSERT INTO smsCampaigner_leaves VALUES ('VPGLXR6PDO', 'vvv', '2022-06-24', '2022-06-09', 'verified ', '', '1', '1655214883', '6MD1B8WC50');


CREATE TABLE `smsCampaigner_assets` (
  `id` varchar(200) NOT NULL,
  `name` varchar(256) DEFAULT '',
  `model` varchar(256) DEFAULT '',
  `classification` varchar(256) DEFAULT '',
  `location` varchar(256) DEFAULT '',
  `value` varchar(256) DEFAULT '',
  `maintenance_date` varchar(256) DEFAULT '',
  `maintenance_provider` varchar(256) DEFAULT '',
  `Service_Records` varchar(256) DEFAULT '',
  `addedBy` varchar(256) DEFAULT '',
  `timeAdded` varchar(256) DEFAULT NULL,
  `userId` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_assets VALUES ('E15RQ0X6NL', 'nt', 'n@g.com1', '231', 'n', '121', '2022-06-17', '2022-07-02', 'aud_JMJTSPH1PKcolleb_1.PNG', 'admin', '1655547950', 'admin');
INSERT INTO smsCampaigner_assets VALUES ('KKCWG1O8R4', 'vvv', 'vv@gg.com', 'b', 'xcx', '12121', '2022-06-23', '2022-06-29', 'aud_LF99DSU22Zcolleb_1.PNG', 'admin', '1655539731', 'admin');
INSERT INTO smsCampaigner_assets VALUES ('XZWL7L67TS', 'v', 'c@g.ccom', 't', 'c', '2', '2022-06-23', '2022-06-30', 'aud_V09ULS482Gcolleb_1.PNG', 'admin', '1655546084', 'admin');


CREATE TABLE `smsCampaigner_password_resets` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `userId` varchar(256) NOT NULL,
  `passwordResetId` varchar(256) NOT NULL,
  `resetlinktimestamp` varchar(256) NOT NULL,
  `email` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_password_resets VALUES ('18', 'user', '0TR0L9T9U4C6X6RMC181', '0', 'snahmed1998@gmail.com');
INSERT INTO smsCampaigner_password_resets VALUES ('19', 'user', 'M1KYKUXZU9BFH4LK9S2U', '0', 'snahmed1998@gmail.com');
INSERT INTO smsCampaigner_password_resets VALUES ('20', 'user', '5DOO1BOPUVI08GL2A125', '0', 'snahmed1998@gmail.com');
INSERT INTO smsCampaigner_password_resets VALUES ('21', 'user', 'BMVAQULW21W1L1DGSQ54', '0', 'snahmed1998@gmail.com');
INSERT INTO smsCampaigner_password_resets VALUES ('22', 'user', 'KBBOFYEOFN0EGBJ113FS', '0', 'snahmed1998@gmail.com');
INSERT INTO smsCampaigner_password_resets VALUES ('23', 'user', 'TMYAXD4166EFPIP8ZPX4', '0', 'snahmed1998@gmail.com');
INSERT INTO smsCampaigner_password_resets VALUES ('24', 'user', '8SOPEU5562XW19GBR15P', '0', 'snahmed1998@gmail.com');
INSERT INTO smsCampaigner_password_resets VALUES ('25', '1', 'Q3WUN2OTGK6Y6WZXEPVY', '1624294915', 'snahmed1998@gmail.com');
INSERT INTO smsCampaigner_password_resets VALUES ('26', '1', '0RZU7T2JY8QI6XYPCZGX', '1680674825', 'usama.ninja1997@gmail.com');


CREATE TABLE `smsCampaigner_emails` (
  `id` varchar(200) NOT NULL,
  `subject` varchar(256) DEFAULT NULL,
  `message` varchar(256) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `date` varchar(256) DEFAULT NULL,
  `from_email` varchar(256) DEFAULT NULL,
  `server_id` varchar(256) DEFAULT '',
  `email_uid` varchar(256) DEFAULT '',
  `category` varchar(255) DEFAULT NULL,
  `userId` varchar(256) DEFAULT 'admin',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_emails VALUES ('1ZSKEJLF37', 'abc', 'aa', 'usama.ninja1997@gmail.com', '1672411551', 'dev.email.sender2@anomoz.com', '', '', 'sent', 'admin');
INSERT INTO smsCampaigner_emails VALUES ('6ZGEKYOR18', 'test gmail 1', '<div dir=\"ltr\">123<br></div>\r\n', 'test@anomoz.com', 'Mon, 6 Mar 2023 15:31:52 +0500', 'Syed Ahsan Ahmed <snahmed1998@gmail.com>', 'YYRBIWOK79', '9', '', 'admin');
INSERT INTO smsCampaigner_emails VALUES ('9C633WJ7RU', 'ttt1', '<div dir=\"ltr\">ttt1ttt1ttt1ttt1ttt1ttt1</div>\r\n', 'test@anomoz.com', 'Mon, 6 Mar 2023 17:32:46 +0500', 'Syed Ahsan Ahmed <snahmed1998@gmail.com>', 'YYRBIWOK79', '11', '', 'admin');
INSERT INTO smsCampaigner_emails VALUES ('B6VMHSS0YW', 'emailManager2', '<div dir=\"ltr\">emailManager2222</div>\r\n', 'test@anomoz.com', 'Fri, 12 Aug 2022 16:39:59 +0500', 'Syed Ahsan Ahmed <snahmed1998@gmail.com>', 'YYRBIWOK79', '7', '', 'admin');
INSERT INTO smsCampaigner_emails VALUES ('GZQ4VM3510', '187', '<div dir=\"ltr\">187</div>\r\n', 'test@anomoz.com', 'Fri, 22 Oct 2021 21:08:56 +0200', 'RealSpike_ <simonlederer04@gmail.com>', 'YYRBIWOK79', '6', '', 'admin');
INSERT INTO smsCampaigner_emails VALUES ('K8LJ62R06P', 'test subject', '<div dir=\"ltr\">test body</div>\r\n', 'test@anomoz.com', 'Fri, 8 Oct 2021 12:00:23 +0500', 'HASSAAN SAGHIR <hassaan.sagheer5@gmail.com>', 'YYRBIWOK79', '3', '', 'admin');
INSERT INTO smsCampaigner_emails VALUES ('KOKO5PKPDB', 'dddd', 'aaaaaaaaaassssssssss', 'waleed5151294@gmail.com', '1690452942', 'dev.email.sender2@anomoz.com', '', '', 'sent', 'admin');
INSERT INTO smsCampaigner_emails VALUES ('PX0218D6P7', 'hello testing', '<div dir=\"ltr\">this is a test message<br></div>\r\n', 'test@anomoz.com', 'Tue, 5 Oct 2021 21:58:28 +0500', 'Syed Ahsan Ahmed <snahmed1998@gmail.com>', 'YYRBIWOK79', '2', '', 'admin');
INSERT INTO smsCampaigner_emails VALUES ('R3776CTNLJ', 'new issue 1', '<div dir=\"ltr\">new issue 1new issue 1new issue 1new issue 1new issue 1</div>\r\n', 'test@anomoz.com', 'Mon, 6 Mar 2023 18:17:48 +0500', 'Tabla Carga <tablacarga.co@gmail.com>', 'YYRBIWOK79', '12', '', 'admin');
INSERT INTO smsCampaigner_emails VALUES ('S8IV0KSU9Q', 'check', '<div dir=3D\"ltr\">hello=C2=A0</div>\r\n', 'test@anomoz.com', 'Tue, 23 Aug 2022 09:39:18 +0500', 'CODE RANK <ua220743@gmail.com>', 'YYRBIWOK79', '8', '', 'admin');
INSERT INTO smsCampaigner_emails VALUES ('SE69VJLH0A', 'ticket 2 01', '<div dir=\"ltr\">ticket 2 01ticket 2 01ticket 2 01ticket 2 01ticket 2 01ticket 2 01ticket 2 01</div>\r\n', 'test@anomoz.com', 'Mon, 6 Mar 2023 18:21:08 +0500', 'Tabla Carga <tablacarga.co@gmail.com>', 'YYRBIWOK79', '13', '', 'admin');
INSERT INTO smsCampaigner_emails VALUES ('SHGDMPDAH4', 'working', '<div dir=\"ltr\">hello</div>\r\n', 'test@anomoz.com', 'Mon, 6 Mar 2023 16:04:02 +0500', 'Hassan Mushtaq <hassan.mushtaq@hosterpk.com>', 'YYRBIWOK79', '10', '', 'admin');
INSERT INTO smsCampaigner_emails VALUES ('SOVGGFBEH9', 'new', 'vcbcvb', 'ua220743@gmail.com', '1663211051', 'dev.email.sender2@anomoz.com', '', '', 'sent', 'admin');
INSERT INTO smsCampaigner_emails VALUES ('UVPT6CJ3V8', 'Test', '<div dir=\"ltr\">Test</div>\r\n', 'test@anomoz.com', 'Fri, 22 Oct 2021 20:51:37 +0200', 'RealSpike_ <simonlederer04@gmail.com>', 'YYRBIWOK79', '5', '', 'admin');
INSERT INTO smsCampaigner_emails VALUES ('XV0EUO75HM', 'cx', '', 'waleed5151294@gmail.com', '1690456162', 'dev.email.sender2@anomoz.com', '', '', 'sent', 'admin');
INSERT INTO smsCampaigner_emails VALUES ('YCE0NOJ9HW', 't', '<div dir=\"ltr\">t</div>\r\n', 'test@anomoz.com', 'Sun, 17 Oct 2021 11:45:45 +0200', 'Simon Lederer <simon.lederer2004@gmail.com>', 'YYRBIWOK79', '4', '', 'admin');
INSERT INTO smsCampaigner_emails VALUES ('ZB2S72UYW9', 'sssswww', '', 'waleed5151294@gmail.com', '1690452659', 'dev.email.sender2@anomoz.com', '', '', 'sent', 'admin');


CREATE TABLE `smsCampaigner_reservations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) DEFAULT '',
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `status` varchar(256) DEFAULT '',
  `paid` varchar(256) DEFAULT '',
  `addedOn` varchar(256) DEFAULT '',
  `employee_id` varchar(256) DEFAULT '',
  `note` varchar(256) DEFAULT '',
  `address` varchar(256) DEFAULT '',
  `Company` varchar(256) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_reservations VALUES ('2', 'test101', '2022-05-23 05:00:00', '2022-05-23 09:30:00', 'New', '0', '1653299951', 'JRFJPXTJLA', 'test', '111 West 57th Street, New York, NY, USA', '');
INSERT INTO smsCampaigner_reservations VALUES ('3', 'tsting 101', '2022-05-23 01:00:00', '2022-05-23 04:30:00', 'New', '0', '1653300227', 'DCB4ZWO0GE', '122334', 'Aaaa Road, Howard Springs NT, Australia', '');
INSERT INTO smsCampaigner_reservations VALUES ('5', '', '2022-05-23 03:30:00', '2022-05-23 04:30:00', 'New', '0', '1653306759', 'XGMZ6SR7WM', 'testing101', '', '');
INSERT INTO smsCampaigner_reservations VALUES ('6', '', '2022-05-23 03:00:00', '2022-05-23 04:00:00', 'New', '0', '1653306820', 'XDLY481Q09', 'tsstt', '', '');
INSERT INTO smsCampaigner_reservations VALUES ('7', '', '2022-05-23 01:30:00', '2022-05-23 03:15:00', 'New', '0', '1653310219', '2M22PMN0UF', 'testing101', '', '');
INSERT INTO smsCampaigner_reservations VALUES ('8', '', '2022-05-24 00:30:00', '2022-05-24 03:00:00', 'New', '0', '1653383336', 'DCB4ZWO0GE', 'test1', '', '');
INSERT INTO smsCampaigner_reservations VALUES ('9', '', '2022-05-24 02:00:00', '2022-05-24 05:00:00', 'New', '0', '1653383342', '2M22PMN0UF', 'test2', '', '');
INSERT INTO smsCampaigner_reservations VALUES ('11', '', '2022-05-24 02:30:00', '2022-05-24 06:30:00', 'New', '0', '1653398013', 'XGMZ6SR7WM', '', '', '');
INSERT INTO smsCampaigner_reservations VALUES ('12', '', '2022-05-25 02:00:00', '2022-05-25 03:00:00', 'New', '0', '1653398035', 'XGMZ6SR7WM', '', '', '');
INSERT INTO smsCampaigner_reservations VALUES ('13', '', '2022-05-27 03:00:00', '2022-05-27 06:00:00', 'New', '0', '1653398459', '', '', '', '');
INSERT INTO smsCampaigner_reservations VALUES ('14', '', '2022-05-25 05:00:00', '2022-05-25 06:00:00', 'New', '0', '1653472661', 'DCB4ZWO0GE', 'test', '', '');
INSERT INTO smsCampaigner_reservations VALUES ('15', '', '2022-05-29 00:00:00', '2022-05-30 00:00:00', 'New', '0', '1653476682', 'DCB4ZWO0GE', 'testing101', '', '');
INSERT INTO smsCampaigner_reservations VALUES ('17', '', '2022-05-26 00:00:00', '2022-05-26 03:00:00', 'New', '0', '1653542615', '', '45', '', '');
INSERT INTO smsCampaigner_reservations VALUES ('18', '', '2022-05-26 02:00:00', '2022-05-26 04:30:00', 'New', '0', '1653543798', 'XGMZ6SR7WM', '456', '', '');
INSERT INTO smsCampaigner_reservations VALUES ('19', '', '2022-05-26 02:30:00', '2022-05-25 05:00:00', 'New', '0', '1653543833', 'ZSBXN4NKZU', '', '', '');
INSERT INTO smsCampaigner_reservations VALUES ('20', '', '2022-05-25 02:00:00', '2022-05-25 06:00:00', 'New', '0', '1653543838', 'JRFJPXTJLA', '', '', '');
INSERT INTO smsCampaigner_reservations VALUES ('23', '', '2022-05-26 02:00:00', '2022-05-26 04:30:00', 'New', '0', '1653544156', 'ZSBXN4NKZU', '11', '', '');
INSERT INTO smsCampaigner_reservations VALUES ('24', '', '2022-05-26 04:30:00', '2022-05-26 06:30:00', 'New', '0', '1653544170', 'ZSBXN4NKZU', '221', '', '');
INSERT INTO smsCampaigner_reservations VALUES ('25', '', '2022-05-26 05:00:00', '2022-05-26 05:30:00', 'New', '0', '1653559547', 'XGMZ6SR7WM', '', '', '');
INSERT INTO smsCampaigner_reservations VALUES ('26', '', '2022-05-27 03:30:00', '2022-05-27 04:00:00', 'New', '0', '1653590523', 'XGMZ6SR7WM', '', '', '');
INSERT INTO smsCampaigner_reservations VALUES ('27', '', '2022-05-30 02:30:00', '2022-05-30 05:30:00', 'New', '0', '1653901523', 'ZSBXN4NKZU', '', '', '');
INSERT INTO smsCampaigner_reservations VALUES ('31', '', '2022-08-15 02:00:00', '2022-08-15 07:00:00', 'New', '0', '1660829873', 'DCB4ZWO0GE', '', '', '');
INSERT INTO smsCampaigner_reservations VALUES ('32', '', '2022-08-19 00:30:00', '2022-08-19 04:30:00', 'New', '0', '1660892657', '2M22PMN0UF', 'asd', '', '');
INSERT INTO smsCampaigner_reservations VALUES ('33', '', '2022-08-24 01:30:00', '2022-08-24 06:30:00', 'New', '0', '1661319556', 'DCB4ZWO0GE', 'asd', '', '');
INSERT INTO smsCampaigner_reservations VALUES ('34', '', '2022-09-08 03:00:00', '2022-09-08 05:00:00', 'New', '0', '1662650317', 'KCY5XK6UYU', 'sad', '', '');


CREATE TABLE `smsCampaigner_newsletters` (
  `id` varchar(200) NOT NULL,
  `title` varchar(256) DEFAULT '',
  `description` varchar(256) DEFAULT '',
  `cta` varchar(256) DEFAULT '',
  `timeAdded` varchar(256) DEFAULT NULL,
  `userId` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_newsletters VALUES ('05MR3E4TJE', 'cta', 'cta', 'https://web.whatsapp.com/', '1642420833', 'admin');
INSERT INTO smsCampaigner_newsletters VALUES ('3T2B3CK1LC', 'cta', 'cta', 'https://web.whatsapp.com/', '1642422007', 'admin');
INSERT INTO smsCampaigner_newsletters VALUES ('42QU931J8D', 'cta', 'cta', 'cta', '1642435166', 'admin');
INSERT INTO smsCampaigner_newsletters VALUES ('4FTPEYCEV2', 'cta', 'cta', 'https://web.whatsapp.com/', '1642421111', 'admin');
INSERT INTO smsCampaigner_newsletters VALUES ('8MP5NBI9PZ', 'cta', 'cta', 'cta', '1642434644', 'admin');
INSERT INTO smsCampaigner_newsletters VALUES ('BVFKIEWVIB', 'cta', 'cta', 'cta', '1642434082', 'admin');
INSERT INTO smsCampaigner_newsletters VALUES ('F3E2H9W0Q8', 'cta', 'cta', 'https://web.whatsapp.com/', '1642421087', 'admin');
INSERT INTO smsCampaigner_newsletters VALUES ('I12BRNYXOU', 'cta', 'cta', 'cta', '1642434932', 'admin');
INSERT INTO smsCampaigner_newsletters VALUES ('KPJHJYNC69', 'title', 'description', 'https://binary-signal.com/en/chart/', '1642422270', 'admin');
INSERT INTO smsCampaigner_newsletters VALUES ('NDHBT8JKE2', 'cta', 'cta', 'cta', '1642435029', 'admin');
INSERT INTO smsCampaigner_newsletters VALUES ('OFFLNFKAUJ', 'ahsan1', 'ahsan1', 'ahsan1', '1642435315', 'admin');
INSERT INTO smsCampaigner_newsletters VALUES ('Q5ZIJW2065', 'cta', 'cta', 'https://web.whatsapp.com/', '1642421130', 'admin');
INSERT INTO smsCampaigner_newsletters VALUES ('R535G0PZ8Q', 'title', 'description', 'https://binary-signal.com/en/chart/', '1642422320', 'admin');
INSERT INTO smsCampaigner_newsletters VALUES ('STPX009VZ8', 'cta', 'cta', 'https://web.whatsapp.com/', '1642421193', 'admin');
INSERT INTO smsCampaigner_newsletters VALUES ('T4BNQNP1M3', 'cta', 'cta', 'https://web.whatsapp.com/', '1642421198', 'admin');
INSERT INTO smsCampaigner_newsletters VALUES ('WDZEM2LVWT', 'cta', 'cta', 'https://web.whatsapp.com/', '1642421259', 'admin');
INSERT INTO smsCampaigner_newsletters VALUES ('Y69HK4XEM2', 'cta', 'cta', 'https://web.whatsapp.com/', '1642421320', 'admin');
INSERT INTO smsCampaigner_newsletters VALUES ('YBSIZ6UPNZ', 'test title', 'titlewith cta', 'https://web.whatsapp.com/', '1642420756', 'admin');
INSERT INTO smsCampaigner_newsletters VALUES ('Z7P9PPLBZJ', 'cta', 'cta', 'cta', '1642434372', 'admin');


CREATE TABLE `smsCampaigner_attendance` (
  `id` varchar(200) NOT NULL,
  `employees_id` varchar(256) DEFAULT '',
  `timeAdded` varchar(256) DEFAULT NULL,
  `userId` varchar(256) DEFAULT NULL,
  `attendance` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_attendance VALUES ('06O17Y60G7', '', '1681278535', 'admin', 'p');
INSERT INTO smsCampaigner_attendance VALUES ('MYRTFC2XH5', '', '1697892246', 'admin', 'p');
INSERT INTO smsCampaigner_attendance VALUES ('YAHB43ZCKJ', '', '1681292236', 'KCY5XK6UYU', 'p');


CREATE TABLE `smsCampaigner_questionnaires` (
  `id` varchar(200) NOT NULL,
  `form_name` varchar(256) DEFAULT '',
  `description` varchar(256) DEFAULT '',
  `timeAdded` varchar(256) DEFAULT NULL,
  `userId` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_questionnaires VALUES ('JUKWM46OG6', 'Vitals', 'Vitals', '1643393883', 'admin');


CREATE TABLE `smsCampaigner_notifications` (
  `notification_id` varchar(191) NOT NULL,
  `to_user_id` varchar(191) NOT NULL,
  `title` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `redirect_url` varchar(191) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(256) DEFAULT 'new',
  PRIMARY KEY (`notification_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_notifications VALUES ('1BUBFNO1PR', 'KCY5XK6UYU', 'New message from Admin', 'aud_0KSCQC42JREmployeeLAYOUT1.png', 'https://projects.anomoz.com/ke/smsCampaigner/messages.php?u=admin', '2023-09-27 11:55:49', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('328T28QW90', 'AMPCX4T2J2', 'New message from Admin', 'hi', 'https://projects.anomoz.com/ke/smsCampaigner/messages.php?u=admin', '2023-06-28 14:22:31', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('56705BNYXL', 'KCY5XK6UYU', 'New message from Admin', 'sad', 'https://projects.anomoz.com/ke/smsCampaigner/messages.php?u=admin', '2023-10-07 11:36:03', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('6RD7J6NU4B', 'TMAE0W7T6C', 'Your Project board have been changed successfully.', 'Your Project board have been changed successfully.', 'https://projects.anomoz.com/ke/smsCampaigner/project_view.php?_projectId=C2VI6R28YV', '2023-04-27 13:23:03', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('7332K4Q71Z', 'KCY5XK6UYU', 'New message from Admin', 'd2', 'https://projects.anomoz.com/ke/smsCampaigner/messages.php?u=admin', '2023-10-07 11:36:23', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('7V3CYA19IE', '0UAGPL60I3', 'A project has been added to your account', 'A project has been added to your account', 'https://projects.anomoz.com/ke/smsCampaigner/project_view.php?_projectId=', '2022-01-01 07:28:59', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('95JVZG8NCL', 'admin', 'New message from Arsalan', 'a', 'https://projects.anomoz.com/ke/smsCampaigner/messages.php?u=AMPCX4T2J2', '2023-08-15 13:10:02', 'read');
INSERT INTO smsCampaigner_notifications VALUES ('B74D6GHGVX', 'KCY5XK6UYU', 'New message from Admin', 'ff3', 'https://projects.anomoz.com/ke/smsCampaigner/messages.php?u=admin', '2023-10-07 11:36:31', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('C741JYO6HR', 'KCY5XK6UYU', 'New message from Admin', 'sd', 'https://projects.anomoz.com/ke/smsCampaigner/messages.php?u=admin', '2023-10-07 11:33:19', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('DQNOZB5FHS', 'admin', 'New message from Arsalan', 'hi', 'https://projects.anomoz.com/ke/smsCampaigner/messages.php?u=AMPCX4T2J2', '2023-08-15 13:10:02', 'read');
INSERT INTO smsCampaigner_notifications VALUES ('FEX9HX86J6', '6MD1B8WC50', 'New message from Admin', 'hi', 'https://projects.anomoz.com/ke/smsCampaigner/messages.php?u=admin', '2022-07-26 10:08:58', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('GRL9U9B89H', 'KCY5XK6UYU', 'New message from Admin', 'asd', 'https://projects.anomoz.com/ke/smsCampaigner/messages.php?u=admin', '2023-10-07 11:36:18', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('JYYSTWX695', '0UAGPL60I3', 'Your Project board have been changed successfully.', 'Your Project board have been changed successfully.', 'https://projects.anomoz.com/ke/smsCampaigner/project_view.php?_projectId=5TOP4NB4DH', '2022-01-01 07:38:40', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('O5ZFQUJWM0', 'TMAE0W7T6C', 'A project has been updated on your account', 'A project has been updated on your account', 'https://projects.anomoz.com/ke/smsCampaigner/project_view.php?_projectId=', '2023-04-28 11:57:31', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('PKP7AK3CVR', 'KCY5XK6UYU', 'New message from Admin', 'hlo', 'https://projects.anomoz.com/ke/smsCampaigner/messages.php?u=admin', '2023-08-15 13:44:41', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('QPSQGHL091', 'TMAE0W7T6C', 'A project has been added to your account', 'A project has been added to your account', 'https://projects.anomoz.com/ke/smsCampaigner/project_view.php?_projectId=', '2022-07-27 16:53:42', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('QPTJ16PFKW', 'TMAE0W7T6C', 'A project has been added to your account', 'A project has been added to your account', 'https://projects.anomoz.com/ke/smsCampaigner/project_view.php?_projectId=', '2022-09-21 09:18:48', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('RKM7E1B1ER', '6MD1B8WC50', 'New message from Admin', 'hi', 'https://projects.anomoz.com/ke/smsCampaigner/messages.php?u=admin', '2022-07-26 10:08:50', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('TY793QGWEH', 'AMPCX4T2J2', 'New message from Admin', 'ih', 'https://projects.anomoz.com/ke/smsCampaigner/messages.php?u=admin', '2023-06-28 14:22:13', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('UWZXPFC4PD', 'AMPCX4T2J2', 'New message from Admin', 'bvbv', 'https://projects.anomoz.com/ke/smsCampaigner/messages.php?u=admin', '2022-08-03 05:13:49', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('VIGZFK7Y7Y', 'KCY5XK6UYU', 'New message from Admin', '23', 'https://projects.anomoz.com/ke/smsCampaigner/messages.php?u=admin', '2023-10-07 11:34:49', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('VTYE44XJIT', '', 'New message from Admin', 'hi', 'https://projects.anomoz.com/ke/smsCampaigner/messages.php?u=admin', '2022-07-26 10:08:44', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('W0GNZQG8VL', '', 'New message from Admin', 'Hi', 'https://projects.anomoz.com/ke/smsCampaigner/messages.php?u=admin', '2023-03-04 05:29:23', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('Y4CCBLOSS4', 'AMPCX4T2J2', 'New message from Admin', 'b', 'https://projects.anomoz.com/ke/smsCampaigner/messages.php?u=admin', '2022-08-02 17:48:48', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('YUXL6LZS7E', 'KCY5XK6UYU', 'New message from Admin', 'yes', 'https://projects.anomoz.com/ke/smsCampaigner/messages.php?u=admin', '2023-09-06 06:17:20', 'new');


CREATE TABLE `smsCampaigner_email_servers` (
  `id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `port_no` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `userId` varchar(256) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_email_servers VALUES ('YYRBIWOK79', 'test@anomoz.com', 'testtestr213123213', '993', 'mail.anomoz.com', 'admin');


CREATE TABLE `smsCampaigner_questionnaires_answers` (
  `id` varchar(200) NOT NULL,
  `question_id` varchar(256) DEFAULT '',
  `answer` longtext DEFAULT '',
  `questionnaire_id` varchar(256) DEFAULT '',
  `timeAdded` varchar(256) DEFAULT NULL,
  `userId` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;



CREATE TABLE `smsCampaigner_inventory_history` (
  `id` varchar(225) NOT NULL,
  `product_id` varchar(256) DEFAULT '',
  `product_name` varchar(256) DEFAULT '',
  `quantity` varchar(256) DEFAULT '',
  `timeAdded` varchar(256) DEFAULT NULL,
  `userId` varchar(256) DEFAULT NULL,
  `action` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_inventory_history VALUES ('3IN1ZZQ02G', '1YLQ4KO670', 'product 1', '5', '1641135267', 'admin', '');
INSERT INTO smsCampaigner_inventory_history VALUES ('3UINL4Q7AW', '9J3RC19L4D', '', '5', '1695186597', 'admin', 'add');
INSERT INTO smsCampaigner_inventory_history VALUES ('4K2Q7MUQAA', '1YLQ4KO670', 'product 1', '10', '1641222555', 'admin', 'remove');
INSERT INTO smsCampaigner_inventory_history VALUES ('59YBIE8QDB', '1YLQ4KO670', 'product 1', '5', '1641135705', 'admin', '');
INSERT INTO smsCampaigner_inventory_history VALUES ('5K8I9ZR6J8', '1YLQ4KO670', 'product 1', '4', '1641135122', 'admin', '');
INSERT INTO smsCampaigner_inventory_history VALUES ('75RGG9VJYJ', '', '', '', '1641125817', 'admin', '');
INSERT INTO smsCampaigner_inventory_history VALUES ('79V21JAVY3', '1YLQ4KO670', 'product 1', '100', '1641068193', '', '');
INSERT INTO smsCampaigner_inventory_history VALUES ('7AJRJU6PUS', '1YLQ4KO670', '', '12', '1662389808', 'admin', 'add');
INSERT INTO smsCampaigner_inventory_history VALUES ('8BMTIK7SYU', '1YLQ4KO670', 'product 1', '4', '1641137111', 'admin', '');
INSERT INTO smsCampaigner_inventory_history VALUES ('A901YVBDKQ', '9J3RC19L4D', 'product 2', '200', '1641068193', '', '');
INSERT INTO smsCampaigner_inventory_history VALUES ('E9OFJ755B9', '1YLQ4KO670', 'product 1', '10', '1641223002', 'admin', 'remove');
INSERT INTO smsCampaigner_inventory_history VALUES ('F5CCINO29O', '1YLQ4KO670', 'product 1', '5', '1641135463', 'admin', '');
INSERT INTO smsCampaigner_inventory_history VALUES ('FBKBRYDT1X', 'product_id', 'product_name', 'quantity', '1641068193', '', '');
INSERT INTO smsCampaigner_inventory_history VALUES ('GXEC5EASU7', '1YLQ4KO670', '', '10', '1697545711', 'admin', 'add');
INSERT INTO smsCampaigner_inventory_history VALUES ('HCYGILCUWF', '1YLQ4KO670', 'product 1', '7', '1641135122', 'admin', '');
INSERT INTO smsCampaigner_inventory_history VALUES ('HVMRE0VDJO', '9J3RC19L4D', '', '10', '1662389850', 'admin', 'remove');
INSERT INTO smsCampaigner_inventory_history VALUES ('ITR8PIC2BB', '1YLQ4KO670', 'product 1', '7', '1641138636', 'admin', '');
INSERT INTO smsCampaigner_inventory_history VALUES ('K97VUB0THG', '1YLQ4KO670', 'product 1', '2', '1641125817', 'admin', '');
INSERT INTO smsCampaigner_inventory_history VALUES ('LJK5830YD3', '1YLQ4KO670', 'product 1', '5', '1641138558', 'admin', '');
INSERT INTO smsCampaigner_inventory_history VALUES ('NJ4LXYWFM1', '1YLQ4KO670', 'product 1', '10', '1641222416', 'admin', '');
INSERT INTO smsCampaigner_inventory_history VALUES ('O32I4XDBSQ', '1YLQ4KO670', '', '33', '1662389808', 'admin', 'add');
INSERT INTO smsCampaigner_inventory_history VALUES ('PBZQVNNPVX', '1YLQ4KO670', '', '3', '1695186597', 'admin', 'add');
INSERT INTO smsCampaigner_inventory_history VALUES ('RMK0M3RR9W', '9J3RC19L4D', 'product 2', '3', '1641135122', 'admin', '');
INSERT INTO smsCampaigner_inventory_history VALUES ('TCIEAPB67D', '1YLQ4KO670', 'product 1', '7', '1641139818', 'admin', '');
INSERT INTO smsCampaigner_inventory_history VALUES ('TPVHDL76QY', '1YLQ4KO670', '', '100', '1662389808', 'admin', 'add');


CREATE TABLE `smsCampaigner_tree_nodes` (
  `id` varchar(255) NOT NULL,
  `name` text DEFAULT '',
  `parent_id` varchar(255) DEFAULT '',
  `folder_id` varchar(255) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_tree_nodes VALUES ('1', 'Node 1', '', '1');
INSERT INTO smsCampaigner_tree_nodes VALUES ('2', 'Node 2', '1', '');
INSERT INTO smsCampaigner_tree_nodes VALUES ('3', 'Node 3', '1', '');
INSERT INTO smsCampaigner_tree_nodes VALUES ('4', 'Node 4', '', '2');
INSERT INTO smsCampaigner_tree_nodes VALUES ('5', 'Node 5', '', '2');
INSERT INTO smsCampaigner_tree_nodes VALUES ('6', 'Node 6', '5', '');
INSERT INTO smsCampaigner_tree_nodes VALUES ('7', 'Node 7', '', '3');
INSERT INTO smsCampaigner_tree_nodes VALUES ('8', 'Node 8', '7', '');
INSERT INTO smsCampaigner_tree_nodes VALUES ('9', 'Node 9', '7', '');


CREATE TABLE `smsCampaigner_invoices_products` (
  `id` varchar(255) NOT NULL,
  `invoice_id` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `items` varchar(255) NOT NULL,
  `category` varchar(256) DEFAULT '',
  `cost` varchar(256) DEFAULT '',
  `quantity` varchar(256) DEFAULT '',
  `subtotal` varchar(256) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_invoices_products VALUES ('0E67R38PXR', 'RQWTT5LAJL', '', '', '', '', '', '');
INSERT INTO smsCampaigner_invoices_products VALUES ('0L9ZX0FGU9', 'F23EQOBG1H', '1YLQ4KO670', '', '', '', '', '');
INSERT INTO smsCampaigner_invoices_products VALUES ('18YNMJFZG0', 'D65L0KGFWF', 'item1', '', 'item', '', '', '12');
INSERT INTO smsCampaigner_invoices_products VALUES ('1JNP7AXLZJ', 'QSNXXJPP1F', '1YLQ4KO670', '', '', '', '', '');
INSERT INTO smsCampaigner_invoices_products VALUES ('282TMZ68OC', 'KDV9NF41ZH', '9J3RC19L4D', '', 'product', '', '', '');
INSERT INTO smsCampaigner_invoices_products VALUES ('2GJMOYY93J', 'DEKK8A8A4B', '1YLQ4KO670', '', '', '', '', '');
INSERT INTO smsCampaigner_invoices_products VALUES ('2P3GWFC4HI', 'D0Y41RJ7IT', 'asd', '', 'item', '', '', '22');
INSERT INTO smsCampaigner_invoices_products VALUES ('3ANS6A1FSD', 'RD17XNVBE8', '1YLQ4KO670', '', '', '', '', '');
INSERT INTO smsCampaigner_invoices_products VALUES ('3SL6W903V6', 'G0325ENDWA', '1YLQ4KO670', '', '', '', '', '');
INSERT INTO smsCampaigner_invoices_products VALUES ('3ZT0DJNMPF', 'KDV9NF41ZH', '1YLQ4KO670', '', '', '', '', '');
INSERT INTO smsCampaigner_invoices_products VALUES ('4P9LHV10MT', 'WXPEHQJF18', '1YLQ4KO670', '', '', '', '', '');
INSERT INTO smsCampaigner_invoices_products VALUES ('4R10ZD6GZF', 'DEKK8A8A4B', '9J3RC19L4D', '', 'product', '', '', '');
INSERT INTO smsCampaigner_invoices_products VALUES ('4TWRC76D4R', 'L6H370BWGC', '1YLQ4KO670', '', '', '', '', '');
INSERT INTO smsCampaigner_invoices_products VALUES ('4UDGEH1PJF', 'D65L0KGFWF', 'item2', '', 'item', '', '', '1');
INSERT INTO smsCampaigner_invoices_products VALUES ('6BYFAMQKKU', 'TR4S35DIPW', '1YLQ4KO670', '', '', '', '', '');
INSERT INTO smsCampaigner_invoices_products VALUES ('6JHGL0NI31', 'ERQSTB27ZN', '1YLQ4KO670', '', 'product', '3', '99', '297');
INSERT INTO smsCampaigner_invoices_products VALUES ('6YQ7D7JCRH', '8311ORDQJI', '1YLQ4KO670', '', '', '', '', '');
INSERT INTO smsCampaigner_invoices_products VALUES ('97N5XURNSL', 'LECQ7SAPCH', 'asdasd', '', 'item', '', '', '23');
INSERT INTO smsCampaigner_invoices_products VALUES ('9KA1A3WSY8', 'WCPKBUSTDI', '1YLQ4KO670', '', '', '', '', '');
INSERT INTO smsCampaigner_invoices_products VALUES ('9SYP7POMK7', 'RD17XNVBE8', '1YLQ4KO670', '', 'product', '', '', '');
INSERT INTO smsCampaigner_invoices_products VALUES ('9T4PSPBNRR', 'RQWTT5LAJL', '', '', '', '', '', '');
INSERT INTO smsCampaigner_invoices_products VALUES ('9UIVDOXZ7K', 'LECQ7SAPCH', 'sadasasdasd', '', 'item', '', '', '22');
INSERT INTO smsCampaigner_invoices_products VALUES ('BI0GECMOJK', 'RQWTT5LAJL', '', '', '', '', '', '');
INSERT INTO smsCampaigner_invoices_products VALUES ('CB4OM6U6BE', 'RQWTT5LAJL', '', '', '', '', '', '');
INSERT INTO smsCampaigner_invoices_products VALUES ('CKR57AV96M', 'RQWTT5LAJL', '', '', '', '', '', '');
INSERT INTO smsCampaigner_invoices_products VALUES ('DDWYO2Z986', 'F6JCXNJEYP', '1YLQ4KO670', '', '', '', '', '');
INSERT INTO smsCampaigner_invoices_products VALUES ('DVZS96Q0CP', '2SOKIUPCXH', '1YLQ4KO670', '', 'product', '23', '3', '3');
INSERT INTO smsCampaigner_invoices_products VALUES ('FI6GR1N4FM', 'YGOKF2G17Q', '9J3RC19L4D', '', 'product', '320000', '555', '177600000');
INSERT INTO smsCampaigner_invoices_products VALUES ('FS2QYO9RJB', '6TF08TQM6D', '1YLQ4KO670', '', '', '', '', '');
INSERT INTO smsCampaigner_invoices_products VALUES ('GIDFCOCZO9', '2SOKIUPCXH', '9J3RC19L4D', '', 'product', '3', '83', '23');
INSERT INTO smsCampaigner_invoices_products VALUES ('GPB9XNT9YF', 'RQWTT5LAJL', '', '', '', '', '', '');
INSERT INTO smsCampaigner_invoices_products VALUES ('H94KQNDPS3', 'CLFVEUTEIM', '1YLQ4KO670', '', '', '', '', '');
INSERT INTO smsCampaigner_invoices_products VALUES ('HE5WZDKDTH', 'ERQSTB27ZN', '1YLQ4KO670', '', 'product', '3', '2', '3');
INSERT INTO smsCampaigner_invoices_products VALUES ('KDCLOKPD5Z', 'MHE0I06DYE', '9J3RC19L4D', '', '', '', '', '');
INSERT INTO smsCampaigner_invoices_products VALUES ('L0DTNYNG3F', '4T2GM87HJK', '1YLQ4KO670', '', '', '', '', '');
INSERT INTO smsCampaigner_invoices_products VALUES ('LLFGZQL97U', 'UU4KU78B7C', '9J3RC19L4D', '', 'product', '', '', '');
INSERT INTO smsCampaigner_invoices_products VALUES ('LNM0491ZM9', 'RQWTT5LAJL', '9J3RC19L4D', '', '', '', '', '');
INSERT INTO smsCampaigner_invoices_products VALUES ('LS48AUBD6T', 'UU4KU78B7C', '1YLQ4KO670', '', '', '', '', '');
INSERT INTO smsCampaigner_invoices_products VALUES ('MRQNJB41S8', 'RQWTT5LAJL', '', '', '', '', '', '');
INSERT INTO smsCampaigner_invoices_products VALUES ('MUU1L5NWUI', 'RQWTT5LAJL', '1YLQ4KO670', '', '', '', '', '');
INSERT INTO smsCampaigner_invoices_products VALUES ('OI02R3NBDK', 'L6H370BWGC', '9J3RC19L4D', '', 'product', '', '', '');
INSERT INTO smsCampaigner_invoices_products VALUES ('P7O41KEA2J', 'RQWTT5LAJL', '', '', '', '', '', '');
INSERT INTO smsCampaigner_invoices_products VALUES ('Q1AHKFERAW', 'G484B6U79X', '1YLQ4KO670', '', '', '', '', '');
INSERT INTO smsCampaigner_invoices_products VALUES ('Q5ENX7FL23', 'RQWTT5LAJL', '', '', '', '', '', '');
INSERT INTO smsCampaigner_invoices_products VALUES ('SJSF419DKT', 'G0325ENDWA', '9J3RC19L4D', '', 'product', '', '', '');
INSERT INTO smsCampaigner_invoices_products VALUES ('T8IKNPMWXQ', '8311ORDQJI', '1YLQ4KO670', '', 'product', '', '', '');
INSERT INTO smsCampaigner_invoices_products VALUES ('UQ4C7OQBBC', 'WCPKBUSTDI', '9J3RC19L4D', '', 'product', '', '', '');
INSERT INTO smsCampaigner_invoices_products VALUES ('W6L36AGXFS', 'IT7QO67CW5', '9J3RC19L4D', '', 'product', '', '', '');
INSERT INTO smsCampaigner_invoices_products VALUES ('W9DD37M3WO', 'D65L0KGFWF', 'ite4', '', 'item', '', '', '3');
INSERT INTO smsCampaigner_invoices_products VALUES ('WECC5H7NPQ', 'RQWTT5LAJL', '', '', '', '', '', '');
INSERT INTO smsCampaigner_invoices_products VALUES ('WFIH5UVJHE', 'IT7QO67CW5', '1YLQ4KO670', '', '', '', '', '');
INSERT INTO smsCampaigner_invoices_products VALUES ('WGKOVFSMEE', 'TNUGHVWQPA', '9J3RC19L4D', '', 'product', '', '', '');
INSERT INTO smsCampaigner_invoices_products VALUES ('XIDSR4LDT1', 'RQWTT5LAJL', '', '', 'product', '', '', '');
INSERT INTO smsCampaigner_invoices_products VALUES ('XLIZARUSO3', 'FVHX3G0J6V', '1YLQ4KO670', '', '', '', '', '');
INSERT INTO smsCampaigner_invoices_products VALUES ('XOW568JOFV', 'LC9MC8VSOL', '1YLQ4KO670', '', '', '', '', '');
INSERT INTO smsCampaigner_invoices_products VALUES ('Y1XFYHCFAA', 'TNUGHVWQPA', '1YLQ4KO670', '', '', '', '', '');
INSERT INTO smsCampaigner_invoices_products VALUES ('YA3V305D10', 'D65L0KGFWF', 'item3', '', 'item', '', '', '2');
INSERT INTO smsCampaigner_invoices_products VALUES ('YEWFLU6IMZ', 'WTSJ7R1ZAE', '1YLQ4KO670', '', '', '', '', '');


CREATE TABLE `smsCampaigner_work_shifts` (
  `id` varchar(256) NOT NULL,
  `start_time` varchar(256) DEFAULT '',
  `end_time` varchar(256) DEFAULT '',
  `status` varchar(256) DEFAULT '',
  `userId` varchar(256) DEFAULT '',
  `timeAdded` varchar(256) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_work_shifts VALUES ('2O1JUQCX7B', '1663237274', '1697892087', 'Completed', 'admin', '1663237274');
INSERT INTO smsCampaigner_work_shifts VALUES ('3Q7RP72Z09', '1658744665', '1697892087', 'Completed', 'admin', '1658744665');
INSERT INTO smsCampaigner_work_shifts VALUES ('4FHUJDSH5F', '1658789170', '1697892087', 'Completed', 'admin', '1658789170');
INSERT INTO smsCampaigner_work_shifts VALUES ('72MOC4E6DF', '1662372961', '1697892087', 'Completed', 'admin', '1662372961');
INSERT INTO smsCampaigner_work_shifts VALUES ('8VTBZ4YFNF', '1658746199', '1697892087', 'Completed', 'admin', '1658746199');
INSERT INTO smsCampaigner_work_shifts VALUES ('EBPIJXP8JQ', '1681876273', '1697892087', 'Completed', 'admin', '1681876273');
INSERT INTO smsCampaigner_work_shifts VALUES ('EWU0YUFHCZ', '1679916631', '1697892087', 'Completed', 'admin', '1679916631');
INSERT INTO smsCampaigner_work_shifts VALUES ('FI2KQKCFNO', '1697892141', '1697892143', 'Completed', 'admin', '1697892141');
INSERT INTO smsCampaigner_work_shifts VALUES ('FTPLNC1UDB', '1662371765', '1697892087', 'Completed', 'admin', '1662371765');
INSERT INTO smsCampaigner_work_shifts VALUES ('K6DBLWRMH9', '1658789331', '1697892087', 'Completed', 'KJ54UNVJU9', '1658789331');
INSERT INTO smsCampaigner_work_shifts VALUES ('KIM0EZIM1J', '1663236270', '1697892087', 'Completed', 'admin', '1663236270');
INSERT INTO smsCampaigner_work_shifts VALUES ('KMEHK7XSZ3', '1663252797', '1697892087', 'Completed', 'admin', '1663252797');
INSERT INTO smsCampaigner_work_shifts VALUES ('NQTKR4JCC9', '1681875335', '1697892087', 'Completed', 'admin', '1681875335');
INSERT INTO smsCampaigner_work_shifts VALUES ('OGMD96N9KR', '1662373075', '1697892087', 'Completed', 'admin', '1662373075');
INSERT INTO smsCampaigner_work_shifts VALUES ('OM0KZQHO98', '1658789107', '1697892087', 'Completed', 'admin', '1658789107');
INSERT INTO smsCampaigner_work_shifts VALUES ('QCSW1G2TBU', '1697892153', '1697892163', 'Completed', 'admin', '1697892153');
INSERT INTO smsCampaigner_work_shifts VALUES ('QQONPP9ZLA', '1662389744', '1697892087', 'Completed', 'admin', '1662389744');
INSERT INTO smsCampaigner_work_shifts VALUES ('V5CDCWOG27', '1681874826', '1697892087', 'Completed', 'admin', '1681874826');
INSERT INTO smsCampaigner_work_shifts VALUES ('W8B0MRIB4F', '1662373132', '1697892087', 'Completed', 'admin', '1662373132');
INSERT INTO smsCampaigner_work_shifts VALUES ('XM92J8CFQM', '1662136378', '1697892087', 'Completed', 'admin', '1662136378');
INSERT INTO smsCampaigner_work_shifts VALUES ('XTZTGCWH2O', '1663222854', '1697892087', 'Completed', 'admin', '1663222854');
INSERT INTO smsCampaigner_work_shifts VALUES ('Y0H1S50H7T', '1697892082', '1697892087', 'Completed', 'admin', '1697892082');
INSERT INTO smsCampaigner_work_shifts VALUES ('ZG015YHVVI', '1658789145', '1697892087', 'Completed', 'admin', '1658789145');
INSERT INTO smsCampaigner_work_shifts VALUES ('ZME77G5855', '1697892146', '1697892148', 'Completed', 'admin', '1697892146');


CREATE TABLE `smsCampaigner_tasks` (
  `id` varchar(200) NOT NULL,
  `title` varchar(256) DEFAULT '',
  `description` varchar(256) DEFAULT '',
  `assigned_to` varchar(256) DEFAULT '',
  `status` varchar(256) DEFAULT '',
  `timeAdded` varchar(256) DEFAULT NULL,
  `userId` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_tasks VALUES ('3CYBA5BCPG', '', '', '', 'Mohsin', '1645592405', 'admin');
INSERT INTO smsCampaigner_tasks VALUES ('AWY5LDWBB4', 'Arsalan', 'None', 'Q6RYXYO4ID', 'Completed', '1644864844', 'admin');
INSERT INTO smsCampaigner_tasks VALUES ('D0F9BW72AF', 'mkm', 'km', 'AMPCX4T2J2', 'In-Progress', '1697381846', 'admin');
INSERT INTO smsCampaigner_tasks VALUES ('DTS29Y30DA', 'kjk', 'jkj', '6MD1B8WC50', 'Completed', '1647589243', 'admin');
INSERT INTO smsCampaigner_tasks VALUES ('ECOIPA6XUP', '', '', '', '', '1645598313', 'admin');
INSERT INTO smsCampaigner_tasks VALUES ('HB6THA2JI2', '', '', '', 'Admin', '1645592389', 'admin');
INSERT INTO smsCampaigner_tasks VALUES ('JP9XWYGGPU', 's', 'w', '', 'Completed', '1644865166', 'admin');
INSERT INTO smsCampaigner_tasks VALUES ('QWAC302BB0', '', '', '', '', '1645596012', 'admin');
INSERT INTO smsCampaigner_tasks VALUES ('R6C4AKG3E2', '', '', '', '', '1645597953', 'admin');
INSERT INTO smsCampaigner_tasks VALUES ('WBQ91KKDQ2', 's', 'w', '', 'Completed', '1644865166', 'admin');
INSERT INTO smsCampaigner_tasks VALUES ('WNN5UZD7QX', 's', 'w', '', 'Completed', '1644865166', 'admin');
INSERT INTO smsCampaigner_tasks VALUES ('X9KZQVPYY8', '', '', '', 'Admin', '1645592390', 'admin');
INSERT INTO smsCampaigner_tasks VALUES ('XG4SY53N2V', '', '', '', '', '1645594399', 'admin');


CREATE TABLE `smsCampaigner_messages` (
  `id` varchar(200) NOT NULL,
  `toUser` varchar(256) DEFAULT NULL,
  `fromUser` varchar(256) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `status` varchar(256) DEFAULT NULL,
  `timeAdded` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_messages VALUES ('11A2XB7KEV', 'AMPCX4T2J2', 'admin', 'hi', 'read', '1687962151');
INSERT INTO smsCampaigner_messages VALUES ('1CORDAPWOS', 'AMPCX4T2J2', 'admin', 'ih', 'read', '1687962133');
INSERT INTO smsCampaigner_messages VALUES ('2KRLSHTJW2', '', 'admin', 'Hi', 'new', '1677907763');
INSERT INTO smsCampaigner_messages VALUES ('6MZKACDOP7', 'WJBPOZVLB9', 'admin', 'asd', 'read', '1640082922');
INSERT INTO smsCampaigner_messages VALUES ('7CKI5MYMKC', 'KCY5XK6UYU', 'admin', 'sad', 'read', '1696678563');
INSERT INTO smsCampaigner_messages VALUES ('7GMJODD6J2', 'AMPCX4T2J2', 'admin', 'b', 'read', '1659462528');
INSERT INTO smsCampaigner_messages VALUES ('9G8LZYQ97O', 'UJ50KX69MC', 'admin', 'from admin smsCampaigner', 'read', '1631863251');
INSERT INTO smsCampaigner_messages VALUES ('B23MLJOXRW', '', 'admin', 'hi', 'new', '1658830124');
INSERT INTO smsCampaigner_messages VALUES ('BVKUUJPKPK', 'WJBPOZVLB9', 'admin', 'a', 'read', '1640082611');
INSERT INTO smsCampaigner_messages VALUES ('EZ4G23FV3G', '6MD1B8WC50', 'admin', 'hi', 'read', '1658830138');
INSERT INTO smsCampaigner_messages VALUES ('EZ630CXQC8', 'KCY5XK6UYU', 'admin', '23', 'read', '1696678489');
INSERT INTO smsCampaigner_messages VALUES ('F3BQ9MSY3V', 'KCY5XK6UYU', 'admin', 'd2', 'new', '1696678583');
INSERT INTO smsCampaigner_messages VALUES ('HREBMJXCXW', 'KCY5XK6UYU', 'admin', 'yes', 'read', '1693981040');
INSERT INTO smsCampaigner_messages VALUES ('JP2A6BWT9L', 'UJ50KX69MC', 'admin', 'second msg', 'read', '1631864459');
INSERT INTO smsCampaigner_messages VALUES ('LZXQXVATU8', 'WJBPOZVLB9', 'admin', 'hi ahsan', 'read', '1638290591');
INSERT INTO smsCampaigner_messages VALUES ('MA0U76VGYG', 'admin', 'AMPCX4T2J2', 'a', 'read', '1687962221');
INSERT INTO smsCampaigner_messages VALUES ('MKUGASZ2P5', 'KCY5XK6UYU', 'admin', 'asd', 'read', '1696678578');
INSERT INTO smsCampaigner_messages VALUES ('NGUOCUP2PA', 'admin', 'AMPCX4T2J2', 'hi', 'read', '1687961642');
INSERT INTO smsCampaigner_messages VALUES ('O17XPYMX52', 'KCY5XK6UYU', 'admin', 'sd', 'read', '1696678399');
INSERT INTO smsCampaigner_messages VALUES ('R9PA458GT9', 'AMPCX4T2J2', 'admin', 'bvbv', 'read', '1659503629');
INSERT INTO smsCampaigner_messages VALUES ('VIMDCY77KK', 'KCY5XK6UYU', 'admin', 'hlo', 'read', '1692107081');
INSERT INTO smsCampaigner_messages VALUES ('WPICNKUXFB', 'KCY5XK6UYU', 'admin', 'aud_0KSCQC42JREmployeeLAYOUT1.png', 'read', '1695815749');
INSERT INTO smsCampaigner_messages VALUES ('Y7YJACQETE', 'KCY5XK6UYU', 'admin', 'ff3', 'new', '1696678591');
INSERT INTO smsCampaigner_messages VALUES ('YXW007B9KC', 'NSP1181FX1', 'admin', 'hello ahsan', 'read', '1628315514');
INSERT INTO smsCampaigner_messages VALUES ('ZI055KO8CT', 'WJBPOZVLB9', 'admin', 'aud_02SPUBQOKGScreenshot 2021-12-21 at 15-33-20 Dashboard HostGator Billing Support System.png', 'read', '1640083005');
INSERT INTO smsCampaigner_messages VALUES ('ZVOC3TCK3J', '6MD1B8WC50', 'admin', 'hi', 'read', '1658830130');


CREATE TABLE `smsCampaigner_users` (
  `id` varchar(256) NOT NULL,
  `name` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `role` varchar(128) NOT NULL DEFAULT 'student',
  `phone` varchar(256) DEFAULT NULL,
  `usernumber` varchar(256) DEFAULT '',
  `timeAdded` varchar(256) DEFAULT '',
  `businessName` varchar(256) DEFAULT '',
  `mobilePhone` varchar(256) DEFAULT '',
  `homePhone` varchar(256) DEFAULT '',
  `address` varchar(256) DEFAULT '',
  `city` varchar(256) DEFAULT '',
  `state` varchar(256) DEFAULT '',
  `zip` varchar(256) DEFAULT '',
  `website` varchar(256) DEFAULT '',
  `company` varchar(256) DEFAULT '',
  `location` varchar(256) DEFAULT NULL,
  `post` varchar(256) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `addedBy` varchar(256) DEFAULT '',
  `userId` varchar(256) DEFAULT '',
  `current_pipeline_stage` varchar(256) DEFAULT '',
  `profile_pic` varchar(256) DEFAULT 'profile_pic.png',
  `isSubscribed` varchar(256) DEFAULT 'subscribed',
  `hourly_rate` varchar(65) DEFAULT NULL,
  `salary` varchar(225) DEFAULT NULL,
  `e_wallet_balance` varchar(256) DEFAULT '0',
  `monthlysalary` varchar(225) NOT NULL,
  `otime` varchar(225) NOT NULL,
  `allow` varchar(225) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `loginAuth` varchar(10) DEFAULT NULL,
  `work_shift_status` varchar(256) DEFAULT 'Inactive',
  `lunch_status` varchar(256) DEFAULT 'Inactive',
  `break_status` varchar(256) DEFAULT 'Inactive',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_users VALUES ('admin', 'Admin', 'admin@portal.com', '3cce45bf21f047a954e1861c653a14ba', 'admin', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'admin', '', '', 'profile_pic.png', 'subscribed', '', '300', '0', '0', '', '', '0000-00-00', '6361', 'Inactive', 'Inactive', 'Inactive');
INSERT INTO smsCampaigner_users VALUES ('E4TP889U52', 'usergmailcom', 'user12@gmail.com', 'c71361ab2d0bfb76fa8464a71ff2f4cb', 'user', '', '', '1696575966', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'profile_pic.png', 'subscribed', '', '', '0', '', '', '', '2023-10-06', '', 'Inactive', 'Inactive', 'Inactive');
INSERT INTO smsCampaigner_users VALUES ('KCY5XK6UYU', 'toseef', 'snahmed1998@gmail.com', '3cce45bf21f047a954e1861c653a14ba', 'employee', '0314', '', '1645369657', '', '', '', 'gULSHAN', '', '', '', '', '', '', '', '', 'admin', 'admin', '', 'profile_pic.png', 'subscribed', '', '20000', '0', '0', '', '', '0000-00-00', '6806', 'Inactive', 'Inactive', 'Inactive');
INSERT INTO smsCampaigner_users VALUES ('VDLKMR6WQ0', 'Muhammad Gul', 'Gul123@gmail.com', '3cce45bf21f047a954e1861c653a14ba', 'employee', '0332-4349439', '', '1645117323', '', '', '', 'Baldia Town', '', '', '', '', '', '', '', '', 'admin', 'admin', '', 'profile_pic.png', 'subscribed', '', '1400000', '0', '0', '', '', '0000-00-00', '', 'Inactive', 'Inactive', 'Inactive');
INSERT INTO smsCampaigner_users VALUES ('AMPCX4T2J2', 'arsalan', 'arsalan@projects.anomoz.com', 'dc31878852f15caa822bcd8b3494299e', 'employee', '03130323023', '', '1646328381', '', '', '', 'KARACHI', '', '', '', '', '', '', '', '', 'admin', 'admin', '', 'profile_pic.png', 'subscribed', '', '5000000', '0', '', '', '', '2022-03-03', '', 'Inactive', 'Inactive', 'Inactive');
INSERT INTO smsCampaigner_users VALUES ('TMAE0W7T6C', 'usama asif', 'usama.ninja1997@gmail.com', 'dc31878852f15caa822bcd8b3494299e', 'customer', '+923367163110', '', '1646891055', '', '', '', 'n/a', '', '', '', '', '', '', '', '', 'admin', 'admin', '', 'profile_pic.png', 'subscribed', '', '', '0', '', '', '', '2022-03-10', '', 'Inactive', 'Inactive', 'Inactive');
INSERT INTO smsCampaigner_users VALUES ('SZCQ17TS4A', 'hello', 'fhx@gmail.com', 'dc31878852f15caa822bcd8b3494299e', 'customer', '3081845139', '', '1678769269', '', '', '', 'gdjdgj', '', '', '', '', '', '', '', '', 'admin', 'admin', 'FAOBUFIKWY', 'profile_pic.png', 'subscribed', '', '', '0', '', '', '', '2023-03-14', '', 'Inactive', 'Inactive', 'Inactive');
INSERT INTO smsCampaigner_users VALUES ('QH1PR59X5O', 'Rene', 'renews01@aol.com', 'dc31878852f15caa822bcd8b3494299e', 'customer', '3214443739', '', '1657027719', '', '', '', 'fafafa', '', '', '', '', '', '', '', '', 'admin', 'admin', 'N26NP485EA', 'profile_pic.png', 'subscribed', '', '', '0', '', '', '', '2022-07-05', '', 'Inactive', 'Inactive', 'Inactive');
INSERT INTO smsCampaigner_users VALUES ('GPV9RSTLAI', 'osama', 'osama@gmail.om12323i9d', '3cce45bf21f047a954e1861c653a14ba', 'user', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'profile_pic.png', 'subscribed', '', '', '0', '', '', '', '2022-09-25', '', 'Inactive', 'Inactive', 'Inactive');
INSERT INTO smsCampaigner_users VALUES ('WE8HQFFNSE', 'adsf', 'info@fellmedia.nl', 'd31e6cd3295fbea33e4c4aa6f0bdd3c9', 'user', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'profile_pic.png', 'subscribed', '', '', '0', '', '', '', '2022-11-17', '', 'Inactive', 'Inactive', 'Inactive');
INSERT INTO smsCampaigner_users VALUES ('qwertyu', 'qwert', '1234th', '1weghj', 'iug', '12346', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'profile_pic.png', 'subscribed', '', '', '0', '', '', '', '2023-03-08', '', 'Inactive', 'Inactive', 'Inactive');
INSERT INTO smsCampaigner_users VALUES ('BME7GVQE7C', 'sadad', 'saad@portal.com', 'dc31878852f15caa822bcd8b3494299e', 'customer', '12', '', '1684568812', '', '', '', 'wqe', '', '', '', '', '', '', '', '', 'VDLKMR6WQ0', 'admin', 'EJ8FN3GCEW', 'profile_pic.png', 'subscribed', '', '', '0', '', '', '', '2023-05-20', '', 'Inactive', 'Inactive', 'Inactive');
INSERT INTO smsCampaigner_users VALUES ('GKGEOXPB64', 'islahudin', 'sall@gmail.com', '8bf69a07c7956a23941fa18711f200d8', 'user', '', '', '1689311684', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'profile_pic.png', 'subscribed', '', '', '0', '', '', '', '2023-07-14', '', 'Inactive', 'Inactive', 'Inactive');
INSERT INTO smsCampaigner_users VALUES ('123', '', '', '', 'student', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'profile_pic.png', 'subscribed', '', '', '0', '', '', '', '2023-07-20', '', 'Inactive', 'Inactive', 'Inactive');
INSERT INTO smsCampaigner_users VALUES ('BJ61TKWEDL', 'kjkj', 'kj@asd', 'dc31878852f15caa822bcd8b3494299e', 'customer', 'kjk', '', '1696784351', '', '', '', 'jkj', '', '', '', '', '', '', '', '', 'KCY5XK6UYU', 'admin', 'EJ8FN3GCEW', 'profile_pic.png', 'subscribed', '', '', '0', '', '', '', '2023-10-08', '', 'Inactive', 'Inactive', 'Inactive');
INSERT INTO smsCampaigner_users VALUES ('CRRIRS52S9', 'boston', 'hello@pigeonmail.co.nz', '58a5342834c09c5a26b577c80b391b54', 'user', '', '', '1696965445', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'profile_pic.png', 'subscribed', '', '', '0', '', '', '', '2023-10-10', '', 'Inactive', 'Inactive', 'Inactive');


CREATE TABLE `smsCampaigner_shift_details` (
  `id` varchar(256) NOT NULL,
  `shift_id` varchar(256) DEFAULT '',
  `type` varchar(256) DEFAULT '',
  `start_time` varchar(256) DEFAULT '',
  `status` varchar(256) DEFAULT '',
  `userId` varchar(256) DEFAULT '',
  `end_time` varchar(256) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_shift_details VALUES ('5B2RQ6L1NY', 'OGMD96N9KR', 'Lunch', '1662373080', 'Completed', 'admin', '1662373082');
INSERT INTO smsCampaigner_shift_details VALUES ('6GLWPDHDPB', '4FHUJDSH5F', 'Lunch', '1658789173', 'Completed', 'admin', '1658789184');
INSERT INTO smsCampaigner_shift_details VALUES ('807NROBB7U', '8VTBZ4YFNF', 'Lunch', '1658746205', 'Completed', 'admin', '1658746217');
INSERT INTO smsCampaigner_shift_details VALUES ('91299NP66G', '4FHUJDSH5F', 'Break', '1658789190', 'Completed', 'admin', '1658789257');
INSERT INTO smsCampaigner_shift_details VALUES ('EJ15G4UZVP', 'EBPIJXP8JQ', 'Break', '1681876276', 'Completed', 'admin', '1681876282');
INSERT INTO smsCampaigner_shift_details VALUES ('GNZPHEF91O', 'OGMD96N9KR', 'Break', '1662373089', 'Completed', 'admin', '1662373091');
INSERT INTO smsCampaigner_shift_details VALUES ('GSAQU87NM1', 'KMEHK7XSZ3', 'Break', '1663253144', 'Completed', 'admin', '1663253153');
INSERT INTO smsCampaigner_shift_details VALUES ('GT3Y6JHU1N', 'XTZTGCWH2O', 'Break', '1663222857', 'Completed', 'admin', '1663222861');
INSERT INTO smsCampaigner_shift_details VALUES ('I8B7WY2BP0', 'W8B0MRIB4F', 'Break', '1662373147', 'Completed', 'admin', '1662373148');
INSERT INTO smsCampaigner_shift_details VALUES ('M7GFT2X5WZ', 'KMEHK7XSZ3', 'Break', '1663253151', 'Completed', 'admin', '1663253153');
INSERT INTO smsCampaigner_shift_details VALUES ('N9UFGF9AVS', '3Q7RP72Z09', 'Lunch', '1658744671', 'Completed', 'admin', '1658745086');
INSERT INTO smsCampaigner_shift_details VALUES ('NZTRKKHXCC', 'KIM0EZIM1J', 'Break', '1663236285', 'Completed', 'admin', '1663236290');
INSERT INTO smsCampaigner_shift_details VALUES ('W735ZXGOMY', 'QCSW1G2TBU', 'Break', '1697892155', 'Completed', 'admin', '1697892156');
INSERT INTO smsCampaigner_shift_details VALUES ('XV5BGT8RE1', '72MOC4E6DF', 'Lunch', '1662372997', 'Completed', 'admin', '1662372999');
INSERT INTO smsCampaigner_shift_details VALUES ('YGY9ZBTVVF', '3Q7RP72Z09', 'Break', '1658745092', 'Completed', 'admin', '1658745172');
INSERT INTO smsCampaigner_shift_details VALUES ('Z2UGZZKJ96', 'XM92J8CFQM', 'Lunch', '1662136388', 'Completed', 'admin', '1662136393');


CREATE TABLE `smsCampaigner_pipelines` (
  `id` varchar(200) NOT NULL,
  `pipeline_name` varchar(256) DEFAULT '',
  `description` varchar(256) DEFAULT '',
  `color` varchar(256) DEFAULT '',
  `timeAdded` varchar(256) DEFAULT NULL,
  `userId` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_pipelines VALUES ('EJ8FN3GCEW', 'Pending', 'Found a property or buyer for property and in the option/inspection period.', '#cbb106', '1689838797', 'admin');
INSERT INTO smsCampaigner_pipelines VALUES ('FAOBUFIKWY', 'Sphere', 'This is for contacts in the general or vendors category. You want to keep in touch for referrals but they are not a current or former client.', '#0050d1', '1690203448', 'admin');
INSERT INTO smsCampaigner_pipelines VALUES ('H6TTZI74YG', 'Closed', 'Client has closed on the purchase or sale of their property in the last 2 weeks', '#ffdd00', '1690203182', 'admin');
INSERT INTO smsCampaigner_pipelines VALUES ('JFTPJW33A6', 'Client', 'Signed buyer representation agreement or listing agreement', '#5072fb', '1689839851', 'admin');
INSERT INTO smsCampaigner_pipelines VALUES ('N26NP485EA', 'Bad Contact', 'Lead info needs to be verified, unable to reach because of wrong contact info.', '#509ef2', '1690203345', 'admin');
INSERT INTO smsCampaigner_pipelines VALUES ('RI5BMADWF0', 'Contacted', 'New Warm Leads who have been contacted but not yet a client.', '#f0c800', '1689847788', 'admin');
INSERT INTO smsCampaigner_pipelines VALUES ('YGJ1W07JQI', 'New Leads', 'New Cold Leads who have not been contacted yet.', '#ccddff', '1689847823', 'admin');
INSERT INTO smsCampaigner_pipelines VALUES ('YV01CA1VDD', 'Nurture', 'Client moves to this category 30+ days after purchase to maintain touch', '#0f14f0', '1690203269', 'admin');


CREATE TABLE `smsCampaigner_share_file` (
  `id` varchar(200) NOT NULL,
  `shared_with` varchar(256) DEFAULT '',
  `shared_from` varchar(256) DEFAULT '',
  `file_id` varchar(256) DEFAULT '',
  `timeAdded` varchar(256) DEFAULT NULL,
  `userId` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_share_file VALUES ('7VCJRNTLYK', '6MD1B8WC50', 'admin', 'NJWR08D6QG', '1655207138', 'admin');
INSERT INTO smsCampaigner_share_file VALUES ('BE02TGLJX4', 'K41I4AP25Q', 'admin', 'N69AFHN2IF', '1654931167', 'admin');
INSERT INTO smsCampaigner_share_file VALUES ('DAU3TOGFN3', 'VDLKMR6WQ0', 'admin', 'NJWR08D6QG', '1655207138', 'admin');
INSERT INTO smsCampaigner_share_file VALUES ('F4UCY3EDF2', 'TMAE0W7T6C', 'admin', 'N69AFHN2IF', '1654931167', 'admin');
INSERT INTO smsCampaigner_share_file VALUES ('J3J839C6ID', 'admin', 'admin', 'NJWR08D6QG', '1655207138', 'admin');
INSERT INTO smsCampaigner_share_file VALUES ('JDNZ5QKHP7', '6MD1B8WC50', 'admin', 'N69AFHN2IF', '1654931167', 'admin');
INSERT INTO smsCampaigner_share_file VALUES ('KF0PAPRJXF', 'KCY5XK6UYU', 'admin', 'N69AFHN2IF', '1654931167', 'admin');
INSERT INTO smsCampaigner_share_file VALUES ('LQISFND4P2', 'admin', 'admin', 'N69AFHN2IF', '1654931167', 'admin');
INSERT INTO smsCampaigner_share_file VALUES ('SPWG6Y8GJY', 'KCY5XK6UYU', 'admin', 'NJWR08D6QG', '1655207138', 'admin');
INSERT INTO smsCampaigner_share_file VALUES ('ULT7LHEC8V', 'VDLKMR6WQ0', 'admin', 'N69AFHN2IF', '1654931167', 'admin');
INSERT INTO smsCampaigner_share_file VALUES ('Z8865SV2VZ', 'AMPCX4T2J2', 'admin', 'N69AFHN2IF', '1654931167', 'admin');


CREATE TABLE `smsCampaigner_customer_field_values` (
  `id` varchar(200) NOT NULL,
  `field_id` varchar(256) DEFAULT '',
  `value` longtext DEFAULT '',
  `timeAdded` varchar(256) DEFAULT NULL,
  `userId` varchar(256) DEFAULT NULL,
  `customer_id` varchar(256) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_customer_field_values VALUES ('7IV3LFVUNI', '8VM3BF5OTX', '', '1640081688', 'admin', 'WDED2LFF3T');
INSERT INTO smsCampaigner_customer_field_values VALUES ('LENUV1023B', '1XVDNEVTID', 'asd12', '1640081688', 'admin', 'WDED2LFF3T');


CREATE TABLE `smsCampaigner_folders` (
  `id` varchar(255) NOT NULL,
  `name` text DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_folders VALUES ('1', 'Folder 1');
INSERT INTO smsCampaigner_folders VALUES ('2', 'Folder 2');
INSERT INTO smsCampaigner_folders VALUES ('3', 'Folder 3');


CREATE TABLE `smsCampaigner_calendar_reminders` (
  `id` varchar(200) NOT NULL,
  `title` varchar(256) DEFAULT NULL,
  `apptDate` varchar(256) DEFAULT NULL,
  `description` varchar(256) DEFAULT NULL,
  `timeAdded` varchar(256) DEFAULT NULL,
  `apptTime` varchar(256) DEFAULT '',
  `userId` varchar(256) DEFAULT '',
  `customer_id` varchar(256) DEFAULT '',
  `endTime` varchar(256) DEFAULT '',
  `color` varchar(256) DEFAULT '#ffffff',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_calendar_reminders VALUES ('085MDEMVUN', 'asd', '2023-10-20', 'das', '1697828643', '08:03', 'admin', '', '13:03', '#8F8FFF');
INSERT INTO smsCampaigner_calendar_reminders VALUES ('C8IQJYS1RO', 'my job', '', 'this is first complain', '1677734499', '01:21', 'KCY5XK6UYU', '', '', '#ffffff');
INSERT INTO smsCampaigner_calendar_reminders VALUES ('FU8BXHZK3V', 'test1', '', 'd', '1697822559', '00:00', 'admin', '', '00:03', '#ffffff');
INSERT INTO smsCampaigner_calendar_reminders VALUES ('GVKLMDIPA2', 'svsv', '', 'fgsr', '1690782589', '10:48', 'GPV9RSTLAI', '', '', '#ffffff');
INSERT INTO smsCampaigner_calendar_reminders VALUES ('HJM6JT2TOE', 'test1', '', 't', '1697735568', '00:00', 'admin', '', '12:03', '#ffffff');
INSERT INTO smsCampaigner_calendar_reminders VALUES ('HWAOZ3A5IY', 'new', '', 'verified ', '1657812082', '20:25', 'admin', '', '', '#ffffff');
INSERT INTO smsCampaigner_calendar_reminders VALUES ('MKXDG0UM16', 'dfjwdfjh', '', 'sjdfnjs', '1684755543', '19:38', 'admin', '', '', '#ffffff');
INSERT INTO smsCampaigner_calendar_reminders VALUES ('MTIF6PM4BI', 'f', '', 'c', '1656377610', '09:53', 'admin', '', '', '#ffffff');
INSERT INTO smsCampaigner_calendar_reminders VALUES ('WQM44L0VQY', 'kkjkj', '', 'kj', '1641020670', '', '', '', '', '#ffffff');


CREATE TABLE `smsCampaigner_authPayments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `transaction_id` varchar(255) NOT NULL,
  `amount` float(10,2) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `captured_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;



CREATE TABLE `smsCampaigner_coupons` (
  `id` varchar(200) NOT NULL,
  `coupon_code` varchar(256) DEFAULT '',
  `description` varchar(256) DEFAULT '',
  `is_used` varchar(256) DEFAULT '',
  `used_by` varchar(256) DEFAULT '',
  `used_on` varchar(256) DEFAULT '',
  `discount` varchar(256) DEFAULT '',
  `timeAdded` varchar(256) DEFAULT NULL,
  `userId` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;



CREATE TABLE `smsCampaigner_customers` (
  `id` varchar(200) NOT NULL,
  `first_name` varchar(256) DEFAULT '',
  `last_name` varchar(256) DEFAULT '',
  `email` varchar(256) DEFAULT '',
  `phone` varchar(256) DEFAULT '',
  `address` varchar(256) DEFAULT '',
  `timeAdded` varchar(256) DEFAULT NULL,
  `userId` varchar(256) DEFAULT NULL,
  `current_pipeline_stage` varchar(256) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_customers VALUES ('WDED2LFF3T', 'ahsan', 'ahmed', 'snahmed1998@gmail.com', '123', '1234\r\n', '1638340764', 'admin', 'Z2JKBT8HSV');


CREATE TABLE `smsCampaigner_martinLeadFormGenerator` (
  `id` varchar(200) NOT NULL,
  `form_name` varchar(256) DEFAULT '',
  `description` varchar(256) DEFAULT '',
  `timeAdded` varchar(256) DEFAULT NULL,
  `userId` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_martinLeadFormGenerator VALUES ('JUKWM46OG6', 'Arsalan', 'HUSSAIN', '1643393883', 'admin');


CREATE TABLE `smsCampaigner_martinLeadFormGenerator_questions` (
  `id` varchar(200) NOT NULL,
  `question` varchar(256) DEFAULT '',
  `type` varchar(256) DEFAULT '',
  `questionnaire_id` varchar(256) DEFAULT '',
  `html` longtext DEFAULT '',
  `timeAdded` varchar(256) DEFAULT NULL,
  `userId` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_martinLeadFormGenerator_questions VALUES ('5XVWLYNU3X', 'Question 1', 'Short Answer', '6S3XELKNZG', '', '1642527500', 'admin');
INSERT INTO smsCampaigner_martinLeadFormGenerator_questions VALUES ('7PF5SBS6NB', 'Question 2', 'Long Answer', '6S3XELKNZG', '', '1642527528', 'admin');
INSERT INTO smsCampaigner_martinLeadFormGenerator_questions VALUES ('IEXZZRGXGG', 'Question 3', 'File Upload Answers', '6S3XELKNZG', '', '1642527538', 'admin');


CREATE TABLE `smsCampaigner_invoices` (
  `id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `client_id` varchar(255) NOT NULL,
  `custom_description` varchar(255) NOT NULL,
  `total` int(255) NOT NULL,
  `attachment` varchar(255) NOT NULL,
  `timeAdded` int(255) NOT NULL,
  `title` varchar(256) DEFAULT '',
  `status` varchar(256) DEFAULT 'unpaid',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_invoices VALUES ('2SOKIUPCXH', 'admin', 'TMAE0W7T6C', '', '26', '', '1695663899', 'jkjh', 'unpaid');
INSERT INTO smsCampaigner_invoices VALUES ('77XBQNM00Y', 'admin', '9BA2QN0XN1', '', '0', '', '1645767240', '', 'unpaid');
INSERT INTO smsCampaigner_invoices VALUES ('AGZ5DEE272', 'admin', '9BA2QN0XN1', 'asd', '0', '', '1645767586', 'asdasd', 'unpaid');
INSERT INTO smsCampaigner_invoices VALUES ('D0Y41RJ7IT', 'admin', '9BA2QN0XN1', '', '0', '', '1645768348', 'asd', 'unpaid');
INSERT INTO smsCampaigner_invoices VALUES ('D65L0KGFWF', 'admin', '9BA2QN0XN1', '', '0', '', '1645768674', 'asd', 'unpaid');
INSERT INTO smsCampaigner_invoices VALUES ('ERQSTB27ZN', 'admin', 'TMAE0W7T6C', '', '300', '', '1682055019', 'this is titiel22', 'unpaid');
INSERT INTO smsCampaigner_invoices VALUES ('F6JCXNJEYP', 'admin', 'TMAE0W7T6C', '', '0', '', '1665586795', 'Invoice #F6JCXNJEYP', 'unpaid');
INSERT INTO smsCampaigner_invoices VALUES ('IS5ONU2NZG', 'admin', 'TMAE0W7T6C', '', '0', '', '1665582126', 'Invoice #IS5ONU2NZG', 'unpaid');
INSERT INTO smsCampaigner_invoices VALUES ('LECQ7SAPCH', 'admin', '9BA2QN0XN1', '', '45', '', '1645769931', 'this is titiel', 'unpaid');
INSERT INTO smsCampaigner_invoices VALUES ('MHE0I06DYE', 'admin', 'TMAE0W7T6C', '', '0', '', '1665585956', 'test', 'unpaid');
INSERT INTO smsCampaigner_invoices VALUES ('Q8YEGJGAUB', 'admin', 'TMAE0W7T6C', 'asd', '0', '', '1696876350', 'asd', 'unpaid');
INSERT INTO smsCampaigner_invoices VALUES ('RQWTT5LAJL', 'admin', 'TMAE0W7T6C', 'wertyu', '0', '', '1665585672', 'DEmo twat', 'unpaid');
INSERT INTO smsCampaigner_invoices VALUES ('Y7LGJSSSU8', 'admin', 'SZCQ17TS4A', '', '0', '', '1696876167', 'hdhdjgh', 'unpaid');
INSERT INTO smsCampaigner_invoices VALUES ('YGOKF2G17Q', 'admin', 'QH1PR59X5O', 'test', '177600000', '', '1676628951', 'test', 'unpaid');


CREATE TABLE `smsCampaigner_history` (
  `history_id` varchar(191) NOT NULL,
  `campaign_id` varchar(191) NOT NULL,
  `lead_id` varchar(191) NOT NULL,
  `created_at` varchar(191) NOT NULL,
  `campaignEmailId` varchar(256) DEFAULT '',
  `order_number` varchar(256) DEFAULT '',
  PRIMARY KEY (`history_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_history VALUES ('0D71SANYL0', 'UMUVFQKV8V', 'INO1IRF9E8', '1675319870', '3OCLT8LV05', '1');
INSERT INTO smsCampaigner_history VALUES ('0LUWD7B976', 'SFJTYVSPTZ', 'SUER7V1UBC', '1673353086', '', '');
INSERT INTO smsCampaigner_history VALUES ('0QE21T2AUG', 'KED60TPOCG', 'WJBPOZVLB9', '1643468048', 'BW0D6H2B0Q', '3');
INSERT INTO smsCampaigner_history VALUES ('0XP328VO8O', 'UMUVFQKV8V', '6MD1B8WC50', '1675907402', 'H4QCWNOONA', '2');
INSERT INTO smsCampaigner_history VALUES ('1AMAKRM85M', 'KED60TPOCG', 'V87B7W4O8H', '1643381586', 'W7BPGTEWD5', '2');
INSERT INTO smsCampaigner_history VALUES ('1ES9MUMBWB', 'UMUVFQKV8V', 'TMAE0W7T6C', '1675492682', 'H4QCWNOONA', '2');
INSERT INTO smsCampaigner_history VALUES ('1Z40I9P98Z', 'KED60TPOCG', 'V87B7W4O8H', '1643468047', 'BW0D6H2B0Q', '3');
INSERT INTO smsCampaigner_history VALUES ('2WV5URMXW4', 'SFJTYVSPTZ', 'SUER7V1UBC', '1673279314', '', '');
INSERT INTO smsCampaigner_history VALUES ('2XOX7TEV4J', 'SFJTYVSPTZ', 'QPOYY7IR7G', '1673281359', '', '');
INSERT INTO smsCampaigner_history VALUES ('3H7FUL2QNC', 'SFJTYVSPTZ', 'SUER7V1UBC', '1673279292', '', '');
INSERT INTO smsCampaigner_history VALUES ('3Y6Y79T5FW', 'KED60TPOCG', 'WKTLOQQ9RP', '1643468045', 'BW0D6H2B0Q', '3');
INSERT INTO smsCampaigner_history VALUES ('5FR495R0DC', 'KED60TPOCG', 'N06NVVNO9I', '1643468050', 'BW0D6H2B0Q', '3');
INSERT INTO smsCampaigner_history VALUES ('5NDKDVN0FK', 'UMUVFQKV8V', 'KCY5XK6UYU', '1675319936', '', '');
INSERT INTO smsCampaigner_history VALUES ('621G9802RC', 'UMUVFQKV8V', 'VDLKMR6WQ0', '1675492682', 'H4QCWNOONA', '2');
INSERT INTO smsCampaigner_history VALUES ('6RRXM2ROBH', 'SFJTYVSPTZ', 'QPOYY7IR7G', '1673279644', '', '');
INSERT INTO smsCampaigner_history VALUES ('6XEZJSU3BI', 'IHLTL8NWKG', 'WKTLOQQ9RP', '1643298662', 'PP54RN0GSM', '1');
INSERT INTO smsCampaigner_history VALUES ('7KSBVEUI58', 'UMUVFQKV8V', 'admin', '1675734601', '3OCLT8LV05', '1');
INSERT INTO smsCampaigner_history VALUES ('88UQJ0U860', 'UMUVFQKV8V', 'LS3ZSENVOY', '1675734601', '3OCLT8LV05', '1');
INSERT INTO smsCampaigner_history VALUES ('90AHR1PCW2', 'SFJTYVSPTZ', 'QPOYY7IR7G', '1673352044', '', '');
INSERT INTO smsCampaigner_history VALUES ('92QHW9XS40', 'UMUVFQKV8V', 'KCY5XK6UYU', '1675492682', 'H4QCWNOONA', '2');
INSERT INTO smsCampaigner_history VALUES ('97ARQLKIWX', 'HODPSQAEAW', '6KEDG6CHZ2', '1673272395', '', '');
INSERT INTO smsCampaigner_history VALUES ('9YJHDE3T3Y', 'HODPSQAEAW', 'VDLKMR6WQ0', '1673272397', '', '');
INSERT INTO smsCampaigner_history VALUES ('AMUXWPNKNL', 'SFJTYVSPTZ', 'SUER7V1UBC', '1673352044', '', '');
INSERT INTO smsCampaigner_history VALUES ('CLWNW6T8PZ', 'UMUVFQKV8V', 'AMPCX4T2J2', '1675319935', '', '');
INSERT INTO smsCampaigner_history VALUES ('CSYYY4G2RV', 'UMUVFQKV8V', 'G75ZJWWB55', '1675620602', '3OCLT8LV05', '1');
INSERT INTO smsCampaigner_history VALUES ('DC4Z46M9WA', 'SFJTYVSPTZ', 'QPOYY7IR7G', '1673352743', '', '');
INSERT INTO smsCampaigner_history VALUES ('DRDXZWI1AL', 'KED60TPOCG', 'RSSPM86Y8V', '1643468043', 'BW0D6H2B0Q', '3');
INSERT INTO smsCampaigner_history VALUES ('DS2AZZZQBR', 'IHLTL8NWKG', 'WKTLOQQ9RP', '1643385122', 'A0PWTWOZ4P', '2');
INSERT INTO smsCampaigner_history VALUES ('DVMQDYY5XR', 'UMUVFQKV8V', 'G75ZJWWB55', '1675793461', 'H4QCWNOONA', '2');
INSERT INTO smsCampaigner_history VALUES ('DX4XN9KGBD', 'SFJTYVSPTZ', 'SUER7V1UBC', '1673352743', '', '');
INSERT INTO smsCampaigner_history VALUES ('DYZULK4MKZ', 'KED60TPOCG', 'WKTLOQQ9RP', '1643381585', 'W7BPGTEWD5', '2');
INSERT INTO smsCampaigner_history VALUES ('EFPXNE8YJZ', 'UMUVFQKV8V', 'VDLKMR6WQ0', '1675319870', '3OCLT8LV05', '1');
INSERT INTO smsCampaigner_history VALUES ('EQNIY7823Q', 'IHLTL8NWKG', '8BY550LOCT', '1643299023', 'A0PWTWOZ4P', '2');
INSERT INTO smsCampaigner_history VALUES ('FIEZVEMNEG', 'UMUVFQKV8V', 'TMAE0W7T6C', '1675319937', '', '');
INSERT INTO smsCampaigner_history VALUES ('GAUXDRH3ZK', 'HODPSQAEAW', 'ITMTY1TWGC', '1673272396', '', '');
INSERT INTO smsCampaigner_history VALUES ('GZZ7W83MA3', 'UMUVFQKV8V', 'TMAE0W7T6C', '1675319870', '3OCLT8LV05', '1');
INSERT INTO smsCampaigner_history VALUES ('HQS33LIJPH', 'SFJTYVSPTZ', 'QPOYY7IR7G', '1673353087', '', '');
INSERT INTO smsCampaigner_history VALUES ('HRF6PDETYH', 'SFJTYVSPTZ', 'SUER7V1UBC', '1673279388', '', '');
INSERT INTO smsCampaigner_history VALUES ('HUDVZUEZFL', 'SFJTYVSPTZ', 'SUER7V1UBC', '1673279161', '14YWER4QYH', '001');
INSERT INTO smsCampaigner_history VALUES ('HYGSSZCKNB', 'UMUVFQKV8V', 'G75ZJWWB55', '1675534182', '', '');
INSERT INTO smsCampaigner_history VALUES ('JW42QYR7NY', 'HODPSQAEAW', 'KCY5XK6UYU', '1673272394', '', '');
INSERT INTO smsCampaigner_history VALUES ('LPULG6AOMJ', 'KED60TPOCG', '5FQGWQNYSF', '1643381591', 'W7BPGTEWD5', '2');
INSERT INTO smsCampaigner_history VALUES ('M0X8CYV8VK', 'HODPSQAEAW', 'SUER7V1UBC', '1673272397', '', '');
INSERT INTO smsCampaigner_history VALUES ('M59X5PITZT', 'KED60TPOCG', 'WKTLOQQ9RP', '1643295166', '02WG9MJE4M', '1');
INSERT INTO smsCampaigner_history VALUES ('MF888XBI1C', 'KED60TPOCG', 'WJBPOZVLB9', '1643295170', '02WG9MJE4M', '1');
INSERT INTO smsCampaigner_history VALUES ('MXBGMTERHH', 'UMUVFQKV8V', '6MD1B8WC50', '1675734601', '3OCLT8LV05', '1');
INSERT INTO smsCampaigner_history VALUES ('MYL7VH6BQT', 'VVLYY99CWZ', '8BY550LOCT', '1643386262', 'P7YFJCL5FO', '2');
INSERT INTO smsCampaigner_history VALUES ('N1VVYJCD8N', 'HODPSQAEAW', 'YPBTZUCA6W', '1673272394', '', '');
INSERT INTO smsCampaigner_history VALUES ('N3358S9JJM', 'KED60TPOCG', 'N06NVVNO9I', '1643295171', '02WG9MJE4M', '1');
INSERT INTO smsCampaigner_history VALUES ('NM708L4U5D', 'SFJTYVSPTZ', 'SUER7V1UBC', '1673279173', '', '');
INSERT INTO smsCampaigner_history VALUES ('NSSQ8CC4LX', 'KED60TPOCG', 'RSSPM86Y8V', '1643381583', 'W7BPGTEWD5', '2');
INSERT INTO smsCampaigner_history VALUES ('OVWYHZMJCN', 'HODPSQAEAW', 'AMPCX4T2J2', '1673272396', '', '');
INSERT INTO smsCampaigner_history VALUES ('PQ6NG4EJ7D', 'SFJTYVSPTZ', 'QPOYY7IR7G', '1673351954', '', '');
INSERT INTO smsCampaigner_history VALUES ('PRS0ZQ87YW', 'UMUVFQKV8V', 'INO1IRF9E8', '1675492682', 'H4QCWNOONA', '2');
INSERT INTO smsCampaigner_history VALUES ('Q8U9L45FJE', 'SFJTYVSPTZ', 'SUER7V1UBC', '1673295666', '', '');
INSERT INTO smsCampaigner_history VALUES ('QPWM9U2LUW', 'UMUVFQKV8V', 'VDLKMR6WQ0', '1675319936', '', '');
INSERT INTO smsCampaigner_history VALUES ('QSZR644K0V', 'UMUVFQKV8V', 'INO1IRF9E8', '1675319936', '', '');
INSERT INTO smsCampaigner_history VALUES ('R0BKLZOKBK', 'SFJTYVSPTZ', 'SUER7V1UBC', '1673352602', '', '');
INSERT INTO smsCampaigner_history VALUES ('R64ZZ8ET1O', 'SFJTYVSPTZ', 'SUER7V1UBC', '1673281359', '', '');
INSERT INTO smsCampaigner_history VALUES ('RP0XA2GCXM', 'KED60TPOCG', 'N06NVVNO9I', '1643381590', 'W7BPGTEWD5', '2');
INSERT INTO smsCampaigner_history VALUES ('RU6BYHYHW7', 'KED60TPOCG', 'V87B7W4O8H', '1643295168', '02WG9MJE4M', '1');
INSERT INTO smsCampaigner_history VALUES ('SH0UGGXNCI', 'SFJTYVSPTZ', 'QPOYY7IR7G', '1673352603', '', '');
INSERT INTO smsCampaigner_history VALUES ('SYEADPAGPW', 'KED60TPOCG', '5FQGWQNYSF', '1643468052', 'BW0D6H2B0Q', '3');
INSERT INTO smsCampaigner_history VALUES ('T8UUZ1TNVQ', 'UMUVFQKV8V', 'KCY5XK6UYU', '1675319870', '3OCLT8LV05', '1');
INSERT INTO smsCampaigner_history VALUES ('T93L8UCF15', 'UMUVFQKV8V', 'AMPCX4T2J2', '1675319870', '3OCLT8LV05', '1');
INSERT INTO smsCampaigner_history VALUES ('TH35SQAAII', 'UMUVFQKV8V', 'BFV5HYXAS9', '1675734601', '3OCLT8LV05', '1');
INSERT INTO smsCampaigner_history VALUES ('TWEUZWLFAB', 'SFJTYVSPTZ', 'QPOYY7IR7G', '1673279641', '14YWER4QYH', '001');
INSERT INTO smsCampaigner_history VALUES ('TZ7RHWPLNX', 'I8285NHZ79', 'SUER7V1UBC', '1673445046', '', '');
INSERT INTO smsCampaigner_history VALUES ('U709SML5WC', 'KED60TPOCG', 'WJBPOZVLB9', '1643381588', 'W7BPGTEWD5', '2');
INSERT INTO smsCampaigner_history VALUES ('UEKW5UDGFY', 'SFJTYVSPTZ', 'SUER7V1UBC', '1673279644', '', '');
INSERT INTO smsCampaigner_history VALUES ('UUWKDL0LLG', 'KED60TPOCG', '5FQGWQNYSF', '1643295173', '02WG9MJE4M', '1');
INSERT INTO smsCampaigner_history VALUES ('VPORBEXT52', 'SFJTYVSPTZ', 'SUER7V1UBC', '1673351954', '', '');
INSERT INTO smsCampaigner_history VALUES ('VYIECL61FT', 'UMUVFQKV8V', 'AMPCX4T2J2', '1675492682', 'H4QCWNOONA', '2');
INSERT INTO smsCampaigner_history VALUES ('WKETGWE33R', 'UMUVFQKV8V', 'admin', '1675907402', 'H4QCWNOONA', '2');
INSERT INTO smsCampaigner_history VALUES ('XHJ3NRD8S2', 'HODPSQAEAW', 'K41I4AP25Q', '1673272393', '', '');
INSERT INTO smsCampaigner_history VALUES ('Y305OKW1C0', 'SFJTYVSPTZ', 'QPOYY7IR7G', '1673295667', '', '');
INSERT INTO smsCampaigner_history VALUES ('YE6VW32GNT', 'UMUVFQKV8V', 'LS3ZSENVOY', '1675907402', 'H4QCWNOONA', '2');
INSERT INTO smsCampaigner_history VALUES ('YFLDTA7YNS', 'UMUVFQKV8V', 'BFV5HYXAS9', '1675907402', 'H4QCWNOONA', '2');
INSERT INTO smsCampaigner_history VALUES ('YH5O9DPG92', 'VVLYY99CWZ', '8BY550LOCT', '1643299803', 'KA9WVWP2BZ', '1');
INSERT INTO smsCampaigner_history VALUES ('YJPHBCT3MD', 'KED60TPOCG', 'RSSPM86Y8V', '1643295165', '02WG9MJE4M', '1');


CREATE TABLE `smsCampaigner_ticket_tags` (
  `id` varchar(200) NOT NULL,
  `ticketId` varchar(256) DEFAULT NULL,
  `tagId` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_ticket_tags VALUES ('1', 'XWKKX27B5T', '1');
INSERT INTO smsCampaigner_ticket_tags VALUES ('2I5C1EUW5L', 'OPIVCYDE0M', 'XJLP0MD706');
INSERT INTO smsCampaigner_ticket_tags VALUES ('8K2B6CUIFM', 'OPIVCYDE0M', 'E10PQAACZQ');


CREATE TABLE `smsCampaigner_crud` (
  `id` varchar(200) NOT NULL,
  `name` varchar(256) DEFAULT '',
  `tesd` varchar(256) DEFAULT '',
  `names` longtext DEFAULT '',
  `myfiles` longtext DEFAULT '',
  `myfile` varchar(256) DEFAULT '',
  `isFriend` longtext DEFAULT '',
  `isFriendselect` varchar(256) DEFAULT '',
  `customerId` varchar(256) DEFAULT '',
  `document` varchar(256) DEFAULT '',
  `timeAdded` varchar(256) DEFAULT NULL,
  `userId` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_crud VALUES ('3973IJJ827', '', '', '', '', '', '', '', '', '', '1696356869', 'admin');
INSERT INTO smsCampaigner_crud VALUES ('4X82C2TXU2', '', '', '', '', '', '', '', '', '', '1696357117', 'admin');
INSERT INTO smsCampaigner_crud VALUES ('9UXI1E8P7I', '', '', '', '', '', '', '', '', '', '1696356955', 'admin');
INSERT INTO smsCampaigner_crud VALUES ('L572AGPMOO', '', '', '', '', '', '', '', '', '', '1696357095', 'admin');
INSERT INTO smsCampaigner_crud VALUES ('PLZGPCEXMO', '', '', '', '', '', '', '', '', '', '1696356895', 'admin');
INSERT INTO smsCampaigner_crud VALUES ('QIAHUC0GDW', '', '', '', '', '', '', '', '', '', '1696356886', 'admin');
INSERT INTO smsCampaigner_crud VALUES ('YEISTTJ226', 'kj', 'kjjkj', '[\"[\"\"]\"]', '', 'aud_0OSCLZHOX2Screenshot (173).png', '[\"Yes\"]', 'Yes', '', '', '1680984311', 'admin');


CREATE TABLE `smsCampaigner_campaignEmails` (
  `id` varchar(256) NOT NULL,
  `title` varchar(256) DEFAULT NULL,
  `description` longtext NOT NULL,
  `days` varchar(256) DEFAULT NULL,
  `campaignId` varchar(256) DEFAULT '',
  `timeAdded` varchar(256) DEFAULT '',
  `order_number` varchar(256) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_campaignEmails VALUES ('02WG9MJE4M', 'First email', 'First email First email', '1', 'KED60TPOCG', '', '1');
INSERT INTO smsCampaigner_campaignEmails VALUES ('14YWER4QYH', 'HAPPY TAX SEASON!', 'HI WERE READY TO GO', '1', 'SFJTYVSPTZ', '1673279158', '001');
INSERT INTO smsCampaigner_campaignEmails VALUES ('3OCLT8LV05', 'Send First', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available. WikipediaIn publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available. Wikipedia', '1', 'UMUVFQKV8V', '1675319612', '1');
INSERT INTO smsCampaigner_campaignEmails VALUES ('8KKJLVAIGH', 'HI', 'THIS IS TEST', '1', 'HODPSQAEAW', '1673266742', '1');
INSERT INTO smsCampaigner_campaignEmails VALUES ('A0PWTWOZ4P', 'Checking in', 'Checking in', '1', 'IHLTL8NWKG', '1643298712', '2');
INSERT INTO smsCampaigner_campaignEmails VALUES ('BW0D6H2B0Q', 'a thord email', 'a third email', '1', 'KED60TPOCG', '1643269685', '3');
INSERT INTO smsCampaigner_campaignEmails VALUES ('C55O5U0FRE', 'HI', 'THIS IS TEST', '3', 'HODPSQAEAW', '1673266715', '2');
INSERT INTO smsCampaigner_campaignEmails VALUES ('DTW97KYHRF', 'saddsa', 'sad', 'wdsa', '', '', '');
INSERT INTO smsCampaigner_campaignEmails VALUES ('H4QCWNOONA', 'Send 2nd after 2 days', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available. WikipediaIn publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available. Wikipedia', '2', 'UMUVFQKV8V', '1675319626', '2');
INSERT INTO smsCampaigner_campaignEmails VALUES ('KA9WVWP2BZ', 'Hello do you like any apartments?', 'Hello do you like any apartments?', '0', 'VVLYY99CWZ', '1643299580', '1');
INSERT INTO smsCampaigner_campaignEmails VALUES ('P7YFJCL5FO', 'Checking in on search', 'Greetings!\r\n\r\nHow is search going?\r\n\r\nBest Regards,\r\nLea Simpkins\r\nTexas Apartment Locating', '1', 'VVLYY99CWZ', '1643299648', '2');
INSERT INTO smsCampaigner_campaignEmails VALUES ('PP54RN0GSM', 'Greetings! Do you like any apartments on your list?', 'Checking in!', '1', 'IHLTL8NWKG', '1643298630', '1');
INSERT INTO smsCampaigner_campaignEmails VALUES ('W7BPGTEWD5', 'second email', 'second emailsecond email', '1', 'KED60TPOCG', '1643269669', '2');


CREATE TABLE `smsCampaigner_documents` (
  `id` varchar(200) NOT NULL,
  `title` varchar(256) DEFAULT '',
  `customerId` varchar(256) DEFAULT '',
  `document` varchar(256) DEFAULT '',
  `timeAdded` varchar(256) DEFAULT NULL,
  `userId` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_documents VALUES ('NXDL9H9ATM', 'test1', 'WDED2LFF3T', 'aud_94O4W4OE7JY-Ulogo.png', '1638345041', 'admin');


CREATE TABLE `smsCampaigner_projects` (
  `id` varchar(200) NOT NULL,
  `title` varchar(256) DEFAULT '',
  `description` varchar(256) DEFAULT '',
  `customerId` varchar(256) DEFAULT '',
  `long_description` longtext DEFAULT '',
  `timeAdded` varchar(256) DEFAULT NULL,
  `userId` varchar(256) DEFAULT NULL,
  `status` varchar(256) DEFAULT '',
  `kanban_board_contents` longtext DEFAULT '[\r\n						{\r\n							\'id\' : \'_board1\',\r\n							\'title\'  : \'Main\',\r\n							\'item\'  : []\r\n						}\r\n						]',
  `cover_photo` varchar(256) DEFAULT '',
  `start_date` varchar(256) DEFAULT '',
  `due_date` varchar(256) DEFAULT '',
  `tagline` varchar(256) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_projects VALUES ('5TOP4NB4DH', 'Project 1', 'Project 1Project 1Project 1Project 1Project 1Project 1Project 1Project 1Project 1Project 1Project 1Project 1', 'TMAE0W7T6C', '<p>asdasd</p>', '1641022139', 'admin', 'In-Progress', '[\r\n						{\r\n							\'id\' : \'_board1\',\r\n							\'title\'  : \'Main\',\r\n							\'item\'  : []\r\n						}\r\n						]', 'aud_9GQT8L1RWIupload (1).png', '', '', '');
INSERT INTO smsCampaigner_projects VALUES ('C2VI6R28YV', 'sasad', 'sadsad', 'TMAE0W7T6C', '<p>asdsad</p>', '1663751928', 'admin', 'In-Progress', '[{\"id\":\"_board1\",\"title\":\"Main\",\"item\":[{\"title\":\"sd\"}]},{\"id\":\"_saas\",\"title\":\"saas\",\"item\":[]},{\"id\":\"_saas\",\"title\":\"saas\",\"item\":[]},{\"id\":\"_saas2\",\"title\":\"saas2\",\"item\":[]}]', 'aud_IYSEG9WJGDqapter-logo-black-orange.png', '2022-09-15', '2022-09-16', 'asdasddsa');
INSERT INTO smsCampaigner_projects VALUES ('OCSWVF8REL', 'test1', 'asd', 'TMAE0W7T6C', '', '1658940822', 'admin', 'In-Progress', '[{\"id\":\"_board1\",\"title\":\"Main\",\"item\":[{\"title\":\"kjk\"},{\"title\":\"lk\"}]},{\"id\":\"_new\",\"title\":\"new\",\"item\":[]},{\"id\":\"_kjk\",\"title\":\"kjk\",\"item\":[]}]', '', '', '', '');
INSERT INTO smsCampaigner_projects VALUES ('rand112', 'rand112', 'rand112', '', '', '', '', '', '[\r\n						{\r\n							\'id\' : \'_board1\',\r\n							\'title\'  : \'Main\',\r\n							\'item\'  : []\r\n						}\r\n						]', '', '', '', '');


CREATE TABLE `smsCampaigner_campaigns` (
  `camp_id` varchar(191) NOT NULL,
  `title` varchar(191) NOT NULL,
  `description` longtext NOT NULL,
  `is_weekly` varchar(191) NOT NULL,
  `camp_date` varchar(191) DEFAULT NULL,
  `camp_time` varchar(191) NOT NULL,
  `camp_day` varchar(191) DEFAULT NULL,
  `status` varchar(191) NOT NULL,
  `user_id` varchar(191) DEFAULT NULL,
  `created_at` varchar(191) NOT NULL,
  `smsSend` varchar(256) DEFAULT '',
  `emailSend` varchar(256) DEFAULT '',
  `callSend` varchar(256) DEFAULT '',
  PRIMARY KEY (`camp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_campaigns VALUES ('QH5OP6HKYF', 'tsd', 'sd', '', '', '', '', 'PENDING', 'admin', '1681283339', 'No', 'No', '');
INSERT INTO smsCampaigner_campaigns VALUES ('UMUVFQKV8V', 'My Campaign 1', '<p>Hello, Im Ahsan, the Founder of Gello, a mission driven staffing firm that partners with various company in multiple diverse industries helping them fill there most difficult roles on a direct or temporary/contract basis. Weve built an extensive network and expertise in placing both the most difficult and quick hires for companys, schools, &amp; Universitys throughout the South East. Id love to chat about the talent acquisition and recruiting solutions we can create for your hiring needs, are you available to connect this Friday or early next week? Best, Ahsan.</p>', '', '', '', '', 'PENDING', 'admin', '1675319575', '', 'Yes', '');


CREATE TABLE `smsCampaigner_daily_attendence` (
  `id` varchar(200) NOT NULL,
  `name` varchar(32) NOT NULL,
  `start_time` varchar(256) DEFAULT '',
  `end_time` varchar(256) DEFAULT '',
  `working_hrs` varchar(256) DEFAULT '',
  `timeAdded` varchar(256) DEFAULT NULL,
  `userId` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_daily_attendence VALUES ('32WE8TP1ET', 'Muhammad Gul', '09:44', '11:44', '2', '1648053893', 'VDLKMR6WQ0');
INSERT INTO smsCampaigner_daily_attendence VALUES ('5PT90R9Y4Z', 'arsalan', '08:00', '11:00', '3', '1648044282', 'AMPCX4T2J2');
INSERT INTO smsCampaigner_daily_attendence VALUES ('7E21EM415L', 'Muhammad Gul', '01:00', '04:00', '3', '1648053965', 'VDLKMR6WQ0');
INSERT INTO smsCampaigner_daily_attendence VALUES ('8JXH1G5P57', 'Muhammad Gul', '01:19', '02:20', '1', '1648055824', 'VDLKMR6WQ0');
INSERT INTO smsCampaigner_daily_attendence VALUES ('IES934FXUL', 'Muhammad Gul', '22:44', '23:45', '1', '1648053909', 'VDLKMR6WQ0');
INSERT INTO smsCampaigner_daily_attendence VALUES ('IM69P0VFGY', 'Muhammad Gul', '00:49', '15:49', '15', '1648054173', 'VDLKMR6WQ0');
INSERT INTO smsCampaigner_daily_attendence VALUES ('VXU04FOD58', 'arsalan', '00:00', '04:00', '4', '1647966885', 'AMPCX4T2J2');
INSERT INTO smsCampaigner_daily_attendence VALUES ('X1URRQVPRR', 'arsalan', '22:14', '23:00', '1', '1647972513', 'AMPCX4T2J2');


CREATE TABLE `smsCampaigner_transaction` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` int(11) NOT NULL,
  `transaction_type` varchar(250) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;



CREATE TABLE `smsCampaigner_salary` (
  `id` varchar(256) NOT NULL,
  `salary` varchar(256) DEFAULT '',
  `month` varchar(256) DEFAULT '',
  `timeAdded` varchar(256) DEFAULT NULL,
  `userId` varchar(256) DEFAULT NULL,
  `username` varchar(256) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_salary VALUES ('03UWIWMSVW', '', '', '1648229089', 'admin', '');
INSERT INTO smsCampaigner_salary VALUES ('3TDQT3UFQY', '', '', '1648842631', 'admin', '');
INSERT INTO smsCampaigner_salary VALUES ('6KJ7RR96VO', '', '', '1648229203', 'admin', '');
INSERT INTO smsCampaigner_salary VALUES ('GOFZYKIQ0J', '200', 'March', '1647361028', 'admin', 'arsalan');
INSERT INTO smsCampaigner_salary VALUES ('RHN0DL1PDH', '100', 'January', '1647360497', 'admin', 'arsalan');
INSERT INTO smsCampaigner_salary VALUES ('Z5CRCYBE05', '100', 'February', '1647360512', 'admin', 'arsalan');


CREATE TABLE `smsCampaigner_userform` (
  `id` varchar(200) NOT NULL,
  `username` varchar(256) DEFAULT '',
  `email` varchar(256) DEFAULT '',
  `phone` varchar(256) DEFAULT '',
  `company` varchar(256) DEFAULT '',
  `timeAdded` varchar(256) DEFAULT NULL,
  `userId` varchar(256) DEFAULT NULL,
  `status` tinyint(22) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;



CREATE TABLE `smsCampaigner_questionnaires_questions` (
  `id` varchar(200) NOT NULL,
  `question` varchar(256) DEFAULT '',
  `type` varchar(256) DEFAULT '',
  `questionnaire_id` varchar(256) DEFAULT '',
  `html` longtext DEFAULT '',
  `timeAdded` varchar(256) DEFAULT NULL,
  `userId` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_questionnaires_questions VALUES ('5XVWLYNU3X', 'Question 1', 'Short Answer', '6S3XELKNZG', '', '1642527500', 'admin');
INSERT INTO smsCampaigner_questionnaires_questions VALUES ('7PF5SBS6NB', 'Question 2', 'Long Answer', '6S3XELKNZG', '', '1642527528', 'admin');
INSERT INTO smsCampaigner_questionnaires_questions VALUES ('AG2NHK7BWW', 'Are you a human?', 'Yes No Question', 'JUKWM46OG6', '', '1679900693', 'admin');
INSERT INTO smsCampaigner_questionnaires_questions VALUES ('IEXZZRGXGG', 'Question 3', 'File Upload Answers', '6S3XELKNZG', '', '1642527538', 'admin');
INSERT INTO smsCampaigner_questionnaires_questions VALUES ('IL2DASKT42', 'What is your age?', 'Short Answer', 'JUKWM46OG6', '', '1679900675', 'admin');
INSERT INTO smsCampaigner_questionnaires_questions VALUES ('K2G9R3LB9X', 'Tell about yourself', 'Long Answer', 'JUKWM46OG6', '', '1679900709', 'admin');
INSERT INTO smsCampaigner_questionnaires_questions VALUES ('KEHJ7KPV2C', 'What is your name?', 'Short Answer', 'JUKWM46OG6', '', '1679900666', 'admin');


CREATE TABLE `smsCampaigner_order_payments` (
  `id` varchar(200) NOT NULL,
  `order_id` varchar(256) DEFAULT '',
  `payment_status` varchar(256) DEFAULT '',
  `timeAdded` varchar(256) DEFAULT NULL,
  `userId` varchar(256) DEFAULT NULL,
  `payment_amount` varchar(256) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_order_payments VALUES ('38772UMYPX', '3S4XM025U8', 'paid', '1684402789', 'admin', '');
INSERT INTO smsCampaigner_order_payments VALUES ('IROONHOLNQ', 'BRIB9QGDJG', '600000', '1684252731', 'admin', '');
INSERT INTO smsCampaigner_order_payments VALUES ('JH685L21MZ', 'OKEWKTI5D1', 'paid', '1684404826', 'admin', '23');
INSERT INTO smsCampaigner_order_payments VALUES ('POBS6UE7P1', '3S4XM025U8', 'paid', '1684403353', 'admin', '23');
INSERT INTO smsCampaigner_order_payments VALUES ('RKP3MJUJYH', 'BRIB9QGDJG', '20000', '1684247719', 'admin', '');
INSERT INTO smsCampaigner_order_payments VALUES ('WLHZVJ8VCS', '', '20000', '1684247619', 'admin', '');


CREATE TABLE `smsCampaigner_permissions` (
  `id` varchar(200) NOT NULL,
  `userId` varchar(256) DEFAULT NULL,
  `permission` varchar(256) DEFAULT NULL,
  `module` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_permissions VALUES ('3EIKDYILC8', 'admin', 'enable', 'invoice');
INSERT INTO smsCampaigner_permissions VALUES ('6S7ACC3V1X', 'AMPCX4T2J2', 'enable', 'notifications');
INSERT INTO smsCampaigner_permissions VALUES ('R7Q53QW5MZ', 'AMPCX4T2J2', 'enable', 'invoice');
INSERT INTO smsCampaigner_permissions VALUES ('W9AWTU86DR', 'AMPCX4T2J2', 'enable', 'product');
INSERT INTO smsCampaigner_permissions VALUES ('ZW3HNX1D94', 'WJBPOZVLB9', 'Read', 'Customers');
