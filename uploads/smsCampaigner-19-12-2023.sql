

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
INSERT INTO smsCampaigner_log VALUES ('BIWC2W3H3R', '', '1697901716', '', '103.244.178.36', '{\"print\":\"1\"}', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php?print=1');
INSERT INTO smsCampaigner_log VALUES ('D8ZNK3MZVC', '', '1697901729', '', '103.244.178.36', '{\"print\":\"1\"}', '[]', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner/employees.php?print=1');
INSERT INTO smsCampaigner_log VALUES ('Q0M3UOPRMF', '', '1697901730', '', '103.244.178.36', '{\"m\":\"Oops! Error occured\"}', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php?m=Oops!%20Error%20occured');
INSERT INTO smsCampaigner_log VALUES ('EAC27EJM4K', '', '1697901730', '', '103.244.178.36', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('QDI92V270T', '', '1697901730', '', '103.244.178.36', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('P8IJWMQ91M', '', '1697901738', '', '103.244.178.36', '{\"print\":\"1\"}', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php?print=1');
INSERT INTO smsCampaigner_log VALUES ('W9LW6H6L38', '', '1697902811', '', '47.128.44.198', '{\"view\":\"RQWTT5LAJL\"}', '[]', 'invoices.php', 'https://projects.anomoz.com/ke/smsCampaigner/invoices.php?view=RQWTT5LAJL');
INSERT INTO smsCampaigner_log VALUES ('T8WCA8Z4AQ', '', '1697902905', '', '47.128.61.178', '{\"view\":\"IS5ONU2NZG\"}', '[]', 'invoices.php', 'https://projects.anomoz.com/ke/smsCampaigner/invoices.php?view=IS5ONU2NZG');
INSERT INTO smsCampaigner_log VALUES ('DZH6GUX6FS', '', '1697902951', '', '74.125.215.13', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('EAJ9Y9HHXO', '', '1697902951', '', '74.125.215.11', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('YX0RNT4HTV', '', '1697902951', '', '74.125.215.12', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('1LJ2ZURD2M', '', '1697902953', '', '74.125.215.13', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('HKGR58GRPT', '', '1697902953', '', '74.125.215.11', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('DMUFHYFYBX', '', '1697902953', '', '74.125.215.13', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('0HJC2BZYW9', '', '1697902970', '', '74.125.215.13', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('8HG9DM8YJA', '', '1697908315', '', '58.65.223.229', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('4LY7PLM0IM', '', '1697908315', '', '58.65.223.229', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('PG7TCIEQOI', '', '1697913064', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('HDLACT3SHV', '', '1697913065', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('656VNFB4TG', '', '1697913793', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('BHHIPBENWZ', '', '1697913794', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('TSJ60C56YT', '', '1697913881', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('QS7W5LY15X', '', '1697913881', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('0IARDT94EU', '', '1697913881', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('FPIFG5PS6B', '', '1697913881', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('V7KRB1677B', '', '1697915027', '', '47.128.48.191', '{\"view\":\"MHE0I06DYE\"}', '[]', 'invoices.php', 'https://projects.anomoz.com/ke/smsCampaigner/invoices.php?view=MHE0I06DYE');
INSERT INTO smsCampaigner_log VALUES ('0P598MT8B4', '', '1697922828', 'admin', '119.152.236.163', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('6Y4KAD8JHP', '', '1697922828', 'admin', '119.152.236.163', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('0JHHWH1ADZ', '', '1697922828', 'admin', '119.152.236.163', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('SFULH3W2YQ', '', '1697922853', 'admin', '119.152.236.163', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('PQ0YLZ0B8W', '', '1697955058', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('CG3FUGKIDB', '', '1697955059', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('T6YZJGZ6QM', '', '1697956040', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('R4LQ1YXMZB', '', '1697956040', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('AWYRM9L4OA', '', '1697956329', '', '58.65.223.229', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('AR3920LY2R', '', '1697956329', '', '58.65.223.229', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('9GHGLSXSQA', '', '1697958215', '', '85.208.96.204', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('BSCAU9IIJI', '', '1697958216', '', '185.191.171.3', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('YH2BEXJN7S', '', '1697968877', '', '47.128.50.147', '{\"view\":\"Q8YEGJGAUB\"}', '[]', 'invoices.php', 'https://projects.anomoz.com/ke/smsCampaigner/invoices.php?view=Q8YEGJGAUB');
INSERT INTO smsCampaigner_log VALUES ('BSLQ86E08K', '', '1697975062', '', '58.65.223.229', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('HFPGX4OTO9', '', '1697975062', '', '58.65.223.229', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('XUPD37F6IU', '', '1697975862', '', '58.65.223.229', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('ZL1F4PANKJ', '', '1697975862', '', '58.65.223.229', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('LC2PO3R0IQ', '', '1697975862', '', '58.65.223.229', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('1XRJG8RPGL', '', '1697978054', '', '47.128.50.242', '{\"view\":\"ERQSTB27ZN\"}', '[]', 'invoices.php', 'https://projects.anomoz.com/ke/smsCampaigner/invoices.php?view=ERQSTB27ZN');
INSERT INTO smsCampaigner_log VALUES ('06ROTBBRVZ', '', '1697978118', '', '47.128.18.113', '{\"view\":\"LECQ7SAPCH\"}', '[]', 'invoices.php', 'https://projects.anomoz.com/ke/smsCampaigner/invoices.php?view=LECQ7SAPCH');
INSERT INTO smsCampaigner_log VALUES ('KN9QKU0AVX', '', '1697980088', '', '47.128.39.230', '{\"view\":\"F6JCXNJEYP\"}', '[]', 'invoices.php', 'https://projects.anomoz.com/ke/smsCampaigner/invoices.php?view=F6JCXNJEYP');
INSERT INTO smsCampaigner_log VALUES ('X2BK19CH08', '', '1697982612', 'admin', '119.152.232.112', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('9ESZHX5T8U', '', '1697986778', '', '58.65.223.229', '[]', '{\"email\":\"admin@portal.com\",\"password\":\"123\",\"login\":\"Sign In\"}', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('Y4C4ARAB5I', '', '1697986778', 'admin', '58.65.223.229', '{\"code\":\"1\",\"redir\":\"./home.php?\"}', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php?code=1&redir=.%2Fhome.php%3F');
INSERT INTO smsCampaigner_log VALUES ('F9K86Z6QGB', '', '1697986779', 'admin', '58.65.223.229', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('6NR614DQ22', '', '1697988867', '', '47.128.29.49', '{\"view\":\"ERQSTB27ZN\"}', '[]', 'invoices.php', 'https://projects.anomoz.com/ke/smsCampaigner/invoices.php?view=ERQSTB27ZN');
INSERT INTO smsCampaigner_log VALUES ('GJ2IPJDTE7', '', '1697994989', '', '47.128.57.145', '{\"view\":\"Y7LGJSSSU8\"}', '[]', 'invoices.php', 'https://projects.anomoz.com/ke/smsCampaigner/invoices.php?view=Y7LGJSSSU8');
INSERT INTO smsCampaigner_log VALUES ('FPS2R4SR8R', '', '1697999464', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('PCH7D76N8T', '', '1697999464', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('7Z0BYYUW22', '', '1698020858', '', '100.21.24.205', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('ZDSSQJX607', '', '1698020882', '', '52.25.208.208', '[]', '[]', 'signup.php', 'https://projects.anomoz.com/ke/smsCampaigner/signup.php');
INSERT INTO smsCampaigner_log VALUES ('7VA46L9KZH', '', '1698020946', '', '52.25.208.208', '{\"demo\":\"1\"}', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php?demo=1');
INSERT INTO smsCampaigner_log VALUES ('SU6W0JTPL7', '', '1698023751', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('86BPYVOR3Q', '', '1698023828', '', '100.21.24.205', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('IJ93ZEXPW0', '', '1698023833', '', '44.230.252.91', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('0L0TW9AYOI', '', '1698028768', '', '216.244.66.228', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('ZZPLTLKRGU', '', '1698034308', 'admin', '58.65.223.229', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('OSK4P3SADU', '', '1698034310', 'admin', '58.65.223.229', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('N23X1EKEWL', '', '1698034310', 'admin', '58.65.223.229', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('COE7EXMFWA', '', '1698035137', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('HWOFCZMX2O', '', '1698035138', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('OQ0QJFNQXW', '', '1698035579', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('OPGXLV8SSU', '', '1698035580', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('D90PDSV7MT', '', '1698035597', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('009WT2MU7U', '', '1698035597', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('FK013Y59S9', '', '1698035597', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('IG3FCL6V8N', '', '1698035598', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('3JXTXLM18H', '', '1698036359', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('UW116ULIU6', '', '1698036359', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('TGMQVBH0OE', '', '1698036369', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('PI0VT5LXVW', '', '1698036370', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('TMH0KCE8DG', '', '1698036370', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('X0VJB8FKQB', '', '1698036370', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('ZACFJQD07N', '', '1698036482', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('9LMCJK5O3E', '', '1698036482', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('7RGHE20VBY', '', '1698036491', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('U272B8J116', '', '1698036492', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('BMW7CWPMEF', '', '1698036492', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('IF2VF5L1LS', '', '1698036492', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('ZHCVP2HNHN', '', '1698039500', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('9Q8DWYW8WX', '', '1698039501', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('T4BRAJ56CH', '', '1698039512', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('S5C06ZJPHB', '', '1698039513', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('R8H6OXXGDG', '', '1698039513', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('MT1BU4YW9J', '', '1698039513', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('PSX1AI8HFS', '', '1698039921', 'admin', '43.242.178.94', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('CANYUVBBI9', '', '1698039922', 'admin', '43.242.178.94', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('UZ56SVPU5Q', '', '1698041514', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('VGVN1YKEYE', '', '1698041515', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('TWMMC90G89', '', '1698041525', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('U722LBFZX8', '', '1698041525', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('QQ35REQMCB', '', '1698041525', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('FD6M6I06M3', '', '1698041526', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('KK1OKBWJ6H', '', '1698041550', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('7D82O6FZKM', '', '1698041551', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('PIAV88MRCV', '', '1698041561', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('KXOYV7C37Y', '', '1698041562', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('D2XR1PA260', '', '1698041562', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('766U9XCRJK', '', '1698041563', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('JH0CVJEFR6', '', '1698045093', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('KB21ZFI1KJ', '', '1698045094', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('DTS5MO3AF8', '', '1698045104', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('XLZG46R3I2', '', '1698045104', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('SL8ANGCBER', '', '1698045104', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('OWHI2LR32M', '', '1698045104', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('IHVFFEXKYJ', '', '1698045856', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('66R56294GX', '', '1698045856', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('FDEL3VG3RW', '', '1698045866', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('JW8GGW4VP7', '', '1698045866', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('9R7GZIK0AJ', '', '1698045866', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('KAS59GIXWV', '', '1698045866', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('6VHP4GEUMC', '', '1698046583', '', '47.128.47.177', '{\"view\":\"Q8YEGJGAUB\"}', '[]', 'invoices.php', 'https://projects.anomoz.com/ke/smsCampaigner/invoices.php?view=Q8YEGJGAUB');
INSERT INTO smsCampaigner_log VALUES ('QON8SJXIEU', '', '1698047637', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('FBE652D4ES', '', '1698047638', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('QXS08IQXTD', '', '1698047653', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('82DMV5MFKZ', '', '1698047653', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('L33QUZ1PPB', '', '1698047653', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('E5FFELR6BT', '', '1698047653', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('U0U7IVMGCB', '', '1698048137', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('TEBJ2OU92Y', '', '1698048138', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('0CRV05F2AO', '', '1698048146', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('150PYC9O72', '', '1698048146', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('FAWEVY9QHL', '', '1698048147', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('K534DQYH87', '', '1698048147', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('FHDH2769JY', '', '1698048696', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('Z2438THBML', '', '1698048697', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('LJSP51CXN4', '', '1698048707', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('9MVV7BDBQN', '', '1698048707', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('ETSNJFHOFZ', '', '1698048707', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('8Y1UX33LH7', '', '1698048707', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('806AJWM56Y', '', '1698049656', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('KC79YGKQ9Y', '', '1698049657', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('57ERWG9L7Z', '', '1698049668', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('YFIQZZBAZ7', '', '1698049669', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('WW6E08OZC9', '', '1698049669', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('J9D6FNE3IS', '', '1698049669', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('R6XOL64JK0', '', '1698049692', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('LA3V3UYTYX', '', '1698049692', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('AOG1N6SJTE', '', '1698049705', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('1WLHFCG4GM', '', '1698049705', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('NJDY8H3IR3', '', '1698049705', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('L1PRACXQBW', '', '1698049705', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('P8OFUJY2NY', '', '1698049723', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('VVSLGENJHF', '', '1698049723', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('TDZJOSQMB0', '', '1698049733', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('3LPZ4DBSVV', '', '1698049733', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('2IAV5BUVJY', '', '1698049733', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('PFDAMXVZWV', '', '1698049734', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('X5ZR700HWV', '', '1698049768', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('RQ9ZVQSFG0', '', '1698049769', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('AZGL85G0QF', '', '1698049778', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('LXABK45FJ2', '', '1698049779', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('8SS0B1A8UW', '', '1698049779', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('EEHHGUY22Q', '', '1698049779', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('SXDR7VP4ZF', '', '1698052437', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('2W48JMPC01', '', '1698052437', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('2QFUVAOR02', '', '1698052452', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('A11V7C6Z9Y', '', '1698052452', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('T6LCLYP99Z', '', '1698052452', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('9FFQWINTG5', '', '1698052452', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('7JFFT9DS73', '', '1698054028', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('RDDDNHCL60', '', '1698054028', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('BNEQBTI15L', '', '1698054298', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('557W421UX4', '', '1698054299', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('K516TSUSW6', '', '1698055904', '', '47.128.40.243', '{\"view\":\"F6JCXNJEYP\"}', '[]', 'invoices.php', 'https://projects.anomoz.com/ke/smsCampaigner/invoices.php?view=F6JCXNJEYP');
INSERT INTO smsCampaigner_log VALUES ('I97EWVSM11', '', '1698056182', 'admin', '223.123.111.211', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('VFME3X74RG', '', '1698056183', 'admin', '223.123.111.211', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('LQYAB93VWT', '', '1698056183', 'admin', '223.123.111.211', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('RQMHZ7HXS1', '', '1698056227', 'admin', '223.123.111.211', '[]', '[]', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner/employees.php');
INSERT INTO smsCampaigner_log VALUES ('RXC7IHC9RC', '', '1698056231', 'admin', '223.123.111.211', '[]', '[]', 'files_storage.php', 'https://projects.anomoz.com/ke/smsCampaigner/files_storage.php');
INSERT INTO smsCampaigner_log VALUES ('V17ZXOYF1W', '', '1698056234', 'admin', '223.123.111.211', '[]', '[]', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner/employees.php');
INSERT INTO smsCampaigner_log VALUES ('9VMU3066XL', '', '1698057148', 'admin', '223.123.111.211', '[]', '[]', 'files_storage.php', 'https://projects.anomoz.com/ke/smsCampaigner/files_storage.php');
INSERT INTO smsCampaigner_log VALUES ('VPGN67IPMQ', '', '1698057149', 'admin', '223.123.111.211', '[]', '[]', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner/employees.php');
INSERT INTO smsCampaigner_log VALUES ('OQYJDCZDG6', '', '1698058892', '', '139.135.37.8', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('9VUHCJI9TL', '', '1698058892', '', '139.135.37.8', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('20KAYI2YM7', '', '1698058908', '', '139.135.37.8', '[]', '{\"email\":\"admin@portal.com\",\"password\":\"123\",\"login\":\"Sign In\"}', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('20P8PV6LAB', '', '1698058908', 'admin', '139.135.37.8', '{\"code\":\"1\",\"redir\":\"./home.php?\"}', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php?code=1&redir=.%2Fhome.php%3F');
INSERT INTO smsCampaigner_log VALUES ('SJJOA5I6YF', '', '1698058908', 'admin', '139.135.37.8', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('RKYHFBMZAJ', '', '1698058914', 'admin', '139.135.37.8', '[]', '[]', 'files_storage.php', 'https://projects.anomoz.com/ke/smsCampaigner/files_storage.php');
INSERT INTO smsCampaigner_log VALUES ('JG02KJJRS4', '', '1698058917', 'admin', '139.135.37.8', '[]', '[]', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner/employees.php');
INSERT INTO smsCampaigner_log VALUES ('J667A7SNP5', '', '1698058918', 'admin', '139.135.37.8', '[]', '[]', 'files_storage.php', 'https://projects.anomoz.com/ke/smsCampaigner/files_storage.php');
INSERT INTO smsCampaigner_log VALUES ('4BX2QR8D92', '', '1698058920', 'admin', '139.135.37.8', '[]', '[]', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner/employees.php');
INSERT INTO smsCampaigner_log VALUES ('28X3RWK09Q', '', '1698058923', 'admin', '139.135.37.8', '[]', '[]', 'files_storage.php', 'https://projects.anomoz.com/ke/smsCampaigner/files_storage.php');
INSERT INTO smsCampaigner_log VALUES ('R86OSEAQLC', '', '1698058956', 'admin', '139.135.37.8', '[]', '[]', 'knowledge_base.php', 'https://projects.anomoz.com/ke/smsCampaigner/knowledge_base.php');
INSERT INTO smsCampaigner_log VALUES ('J0OUNAO16Q', '', '1698069512', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('BXGQ2FSV97', '', '1698069513', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('VKHH5MS5A2', '', '1698071444', 'admin', '103.244.178.36', '[]', '[]', 'test.php', 'https://projects.anomoz.com/ke/smsCampaigner/test.php');
INSERT INTO smsCampaigner_log VALUES ('AQ0MEK9FUE', '', '1698071452', 'admin', '103.244.178.36', '[]', '[]', 'test.php', 'https://projects.anomoz.com/ke/smsCampaigner/test.php');
INSERT INTO smsCampaigner_log VALUES ('8BNXCYC8ZO', '', '1698071599', 'admin', '103.244.178.36', '[]', '[]', 'test.php', 'https://projects.anomoz.com/ke/smsCampaigner/test.php');
INSERT INTO smsCampaigner_log VALUES ('ALTYWQIQKF', '', '1698071925', 'admin', '182.178.48.175', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('QOO5W0ZKDG', '', '1698072732', 'admin', '103.244.178.36', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('H523KG0OZ0', '', '1698072732', 'admin', '103.244.178.36', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('86AXJ5EHPL', '', '1698072733', 'admin', '103.244.178.36', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('F06WQ3SUUW', '', '1698072736', 'admin', '103.244.178.36', '[]', '[]', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner/employees.php');
INSERT INTO smsCampaigner_log VALUES ('WKRFB1OJAL', '', '1698073660', 'admin', '58.65.223.229', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('V4RX6L7Q56', '', '1698073660', 'admin', '58.65.223.229', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('UHQHYBT2QE', '', '1698073661', 'admin', '58.65.223.229', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('5EUZKP93TF', '', '1698077745', 'admin', '119.152.232.112', '[]', '[]', 'test.php', 'https://projects.anomoz.com/ke/smsCampaigner/test.php');
INSERT INTO smsCampaigner_log VALUES ('H0G4QW20XH', '', '1698077767', 'admin', '119.152.232.112', '[]', '[]', 'test.php', 'https://projects.anomoz.com/ke/smsCampaigner/test.php');
INSERT INTO smsCampaigner_log VALUES ('DFS7THX8JG', '', '1698078191', 'admin', '58.65.223.229', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('SBWN8BOH5W', '', '1698079361', 'admin', '119.152.232.112', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('RKM8W3MLFD', '', '1698079361', 'admin', '119.152.232.112', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('LGW69TY8OF', '', '1698079361', 'admin', '119.152.232.112', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('9BG6UJCRIY', '', '1698079402', 'admin', '119.152.232.112', '[]', '[]', 'files_storage.php', 'https://projects.anomoz.com/ke/smsCampaigner/files_storage.php');
INSERT INTO smsCampaigner_log VALUES ('K1KLWK3ZVA', '', '1698079431', 'admin', '58.65.223.229', '[]', '[]', 'files_storage.php', 'https://projects.anomoz.com/ke/smsCampaigner/files_storage.php');
INSERT INTO smsCampaigner_log VALUES ('S6HCHSDABL', '', '1698079457', 'admin', '58.65.223.229', '[]', '[]', 'projects.php', 'https://projects.anomoz.com/ke/smsCampaigner/projects.php');
INSERT INTO smsCampaigner_log VALUES ('WRN7C39ZAV', '', '1698079457', 'admin', '58.65.223.229', '{\"m\":\"Oops! Error occured\"}', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php?m=Oops!%20Error%20occured');
INSERT INTO smsCampaigner_log VALUES ('HY5YZ1H4S2', '', '1698079467', 'admin', '58.65.223.229', '{\"m\":\"Oops! Error occured\"}', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php?m=Oops!%20Error%20occured');
INSERT INTO smsCampaigner_log VALUES ('SB6CZRKCA3', '', '1698079897', 'admin', '119.152.232.112', '[]', '[]', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner/employees.php');
INSERT INTO smsCampaigner_log VALUES ('Y2E7C89ZES', '', '1698080814', 'admin', '119.152.232.112', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('YULA81KTJL', '', '1698080814', 'admin', '119.152.232.112', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('TU5DI3TZI0', '', '1698080814', 'admin', '119.152.232.112', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('EJXPJE2FCQ', '', '1698080828', 'admin', '119.152.232.112', '[]', '[]', 'settings.php', 'https://projects.anomoz.com/ke/smsCampaigner/settings.php');
INSERT INTO smsCampaigner_log VALUES ('00D63FHCUQ', '', '1698080835', 'admin', '119.152.232.112', '[]', '[]', 'analytics.php', 'https://projects.anomoz.com/ke/smsCampaigner/analytics.php');
INSERT INTO smsCampaigner_log VALUES ('CJUBEG0KDX', '', '1698080870', 'admin', '119.152.232.112', '[]', '[]', 'analytics.php', 'https://projects.anomoz.com/ke/smsCampaigner/analytics.php');
INSERT INTO smsCampaigner_log VALUES ('LMLLX6WXOL', '', '1698080875', 'admin', '119.152.232.112', '[]', '[]', 'cruds.php', 'https://projects.anomoz.com/ke/smsCampaigner/cruds.php');
INSERT INTO smsCampaigner_log VALUES ('UDBQAJNAYK', '', '1698080904', '', '119.152.232.112', '[]', '[]', 'cruds.php', 'https://projects.anomoz.com/ke/smsCampaigner/cruds.php');
INSERT INTO smsCampaigner_log VALUES ('0333HN4ZNN', '', '1698080948', 'admin', '119.152.232.112', '[]', '[]', 'analytics.php', 'https://projects.anomoz.com/ke/smsCampaigner/analytics.php');
INSERT INTO smsCampaigner_log VALUES ('FL8QFT2RVF', '', '1698080960', 'admin', '119.152.232.112', '[]', '[]', 'analytics.php', 'https://projects.anomoz.com/ke/smsCampaigner/analytics.php');
INSERT INTO smsCampaigner_log VALUES ('XPF5BNEKMC', '', '1698080984', 'admin', '119.152.232.112', '[]', '[]', 'analytics.php', 'https://projects.anomoz.com/ke/smsCampaigner/analytics.php');
INSERT INTO smsCampaigner_log VALUES ('UEDSREBFGS', '', '1698081181', 'admin', '119.152.232.112', '[]', '[]', 'analytics.php', 'https://projects.anomoz.com/ke/smsCampaigner/analytics.php');
INSERT INTO smsCampaigner_log VALUES ('CI5YN23POP', '', '1698081193', 'admin', '119.152.232.112', '[]', '[]', 'analytics.php', 'https://projects.anomoz.com/ke/smsCampaigner/analytics.php');
INSERT INTO smsCampaigner_log VALUES ('V5AGTSHL0H', '', '1698081222', 'admin', '119.152.232.112', '[]', '[]', 'analytics.php', 'https://projects.anomoz.com/ke/smsCampaigner/analytics.php');
INSERT INTO smsCampaigner_log VALUES ('G3J0JLEY4O', '', '1698081237', 'admin', '119.152.232.112', '[]', '[]', 'analytics.php', 'https://projects.anomoz.com/ke/smsCampaigner/analytics.php');
INSERT INTO smsCampaigner_log VALUES ('YNE4MRN8CQ', '', '1698081286', 'admin', '119.152.232.112', '[]', '[]', 'analytics.php', 'https://projects.anomoz.com/ke/smsCampaigner/analytics.php');
INSERT INTO smsCampaigner_log VALUES ('Y334KVD85S', '', '1698081412', 'admin', '119.152.232.112', '[]', '[]', 'analytics.php', 'https://projects.anomoz.com/ke/smsCampaigner/analytics.php');
INSERT INTO smsCampaigner_log VALUES ('M2RK38VOOG', '', '1698081428', 'admin', '119.152.232.112', '[]', '[]', 'analytics.php', 'https://projects.anomoz.com/ke/smsCampaigner/analytics.php');
INSERT INTO smsCampaigner_log VALUES ('TBK8KTB6CJ', '', '1698081493', 'admin', '119.152.232.112', '[]', '[]', 'analytics.php', 'https://projects.anomoz.com/ke/smsCampaigner/analytics.php');
INSERT INTO smsCampaigner_log VALUES ('HRG6NWGVX9', '', '1698081566', 'admin', '119.152.232.112', '[]', '[]', 'analytics.php', 'https://projects.anomoz.com/ke/smsCampaigner/analytics.php');
INSERT INTO smsCampaigner_log VALUES ('SJ31KD0XZZ', '', '1698081627', 'admin', '119.152.232.112', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('S64KZVAVK0', '', '1698081674', '', '119.152.232.112', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('C7AODUD4LH', '', '1698081674', '', '119.152.232.112', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('J2I9KK3ZSU', '', '1698081674', '', '119.152.232.112', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('2Y1B9FKZN7', '', '1698081808', 'admin', '119.152.232.112', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('29ZCKY4FVB', '', '1698081829', 'admin', '119.152.232.112', '[]', '[]', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner/employees.php');
INSERT INTO smsCampaigner_log VALUES ('CQPD4L2E3L', '', '1698081849', 'admin', '119.152.232.112', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('AL337K8UED', '', '1698082009', 'admin', '119.152.232.112', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('66DX9RZOQV', '', '1698083161', 'admin', '119.152.232.112', '[]', '[]', 'files_storage.php', 'https://projects.anomoz.com/ke/smsCampaigner/files_storage.php');
INSERT INTO smsCampaigner_log VALUES ('G71ZZAM94H', '', '1698083163', 'admin', '119.152.232.112', '[]', '[]', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner/employees.php');
INSERT INTO smsCampaigner_log VALUES ('MQ70Q91SLX', '', '1698083167', 'admin', '119.152.232.112', '[]', '[]', 'view_pipeline.php', 'https://projects.anomoz.com/ke/smsCampaigner/view_pipeline');
INSERT INTO smsCampaigner_log VALUES ('3FHGXKBRBM', '', '1698083178', '', '119.152.232.112', '[]', '[]', 'view_pipeline.php', 'https://projects.anomoz.com/ke/smsCampaigner/view_pipeline');
INSERT INTO smsCampaigner_log VALUES ('C5WJ1360BC', '', '1698083178', '', '119.152.232.112', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('I5XBZBAMPG', '', '1698083179', '', '119.152.232.112', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('0Y6I0I4ZLX', '', '1698083223', 'admin', '119.152.232.112', '{\"userIds\":\"SZCQ17TS4A\",\"pipelineIds\":\"H6TTZI74YG\"}', '[]', 'view_pipeline.php', 'https://projects.anomoz.com/ke/smsCampaigner/view_pipeline?userIds=SZCQ17TS4A&pipelineIds=H6TTZI74YG');
INSERT INTO smsCampaigner_log VALUES ('23VE82K08Z', '', '1698083233', 'admin', '119.152.232.112', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('97R9WRXKEF', '', '1698083357', 'admin', '119.152.232.112', '[]', '[]', 'files_storage.php', 'https://projects.anomoz.com/ke/smsCampaigner/files_storage.php');
INSERT INTO smsCampaigner_log VALUES ('IR21U7L4U7', '', '1698083365', 'admin', '119.152.232.112', '[]', '[]', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner/employees.php');
INSERT INTO smsCampaigner_log VALUES ('1CGN0LDHNM', '', '1698083413', 'admin', '119.152.232.112', '[]', '[]', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner/employees.php');
INSERT INTO smsCampaigner_log VALUES ('L43Q3DHZU3', '', '1698083423', 'admin', '119.152.232.112', '[]', '[]', 'files_storage.php', 'https://projects.anomoz.com/ke/smsCampaigner/files_storage.php');
INSERT INTO smsCampaigner_log VALUES ('BAYY9M8CGW', '', '1698083454', 'admin', '119.152.232.112', '[]', '[]', 'files_storage.php', 'https://projects.anomoz.com/ke/smsCampaigner/files_storage.php');
INSERT INTO smsCampaigner_log VALUES ('B5ALRI8DXE', '', '1698083456', 'admin', '119.152.232.112', '[]', '[]', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner/employees.php');
INSERT INTO smsCampaigner_log VALUES ('PS5W0TDYPU', '', '1698083621', 'admin', '119.152.232.112', '[]', '[]', 'projects.php', 'https://projects.anomoz.com/ke/smsCampaigner/projects.php');
INSERT INTO smsCampaigner_log VALUES ('TN4T0TVZLN', '', '1698083621', 'admin', '119.152.232.112', '{\"m\":\"Oops! Error occured\"}', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php?m=Oops!%20Error%20occured');
INSERT INTO smsCampaigner_log VALUES ('S5UFVR1OW3', '', '1698083645', 'admin', '119.152.232.112', '{\"m\":\"Oops! Error occured\"}', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php?m=Oops!%20Error%20occured');
INSERT INTO smsCampaigner_log VALUES ('EOWUGPELAI', '', '1698083647', 'admin', '119.152.232.112', '[]', '[]', 'notifications.php', 'https://projects.anomoz.com/ke/smsCampaigner/notifications.php');
INSERT INTO smsCampaigner_log VALUES ('XB5MD2UAAY', '', '1698083659', 'admin', '119.152.232.112', '[]', '[]', 'notifications.php', 'https://projects.anomoz.com/ke/smsCampaigner/notifications.php');
INSERT INTO smsCampaigner_log VALUES ('7IXKWYLSUG', '', '1698083660', 'admin', '119.152.232.112', '{\"m\":\"Error occured\"}', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php?m=Error%20occured');
INSERT INTO smsCampaigner_log VALUES ('4VKKAZXJ8R', '', '1698083689', 'admin', '119.152.232.112', '{\"m\":\"Error occured\"}', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php?m=Error%20occured');
INSERT INTO smsCampaigner_log VALUES ('RWEMJJDE5K', '', '1698083690', 'admin', '119.152.232.112', '[]', '[]', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner/employees.php');
INSERT INTO smsCampaigner_log VALUES ('R4XVEHHUAL', '', '1698083800', 'admin', '119.152.232.112', '[]', '[]', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner/employees.php');
INSERT INTO smsCampaigner_log VALUES ('13GQ0VU6GK', '', '1698083838', 'admin', '119.152.232.112', '[]', '[]', 'files_storage.php', 'https://projects.anomoz.com/ke/smsCampaigner/files_storage.php');
INSERT INTO smsCampaigner_log VALUES ('C1MUX4E2KQ', '', '1698083840', 'admin', '119.152.232.112', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('OB4Y62B43D', '', '1698083967', 'admin', '119.152.232.112', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('THKENBNW1S', '', '1698083996', 'admin', '119.152.232.112', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('IX16AKRNKR', '', '1698084158', 'admin', '119.152.232.112', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('8XEESPQOZA', '', '1698110463', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('YXSDG5N80L', '', '1698119970', 'admin', '162.225.186.176', '{\"demo\":\"1\"}', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner//login.php?demo=1');
INSERT INTO smsCampaigner_log VALUES ('QFJ73J3LNR', '', '1698119970', 'admin', '162.225.186.176', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner//home.php');
INSERT INTO smsCampaigner_log VALUES ('WQNL9VL9Q6', '', '1698119973', 'admin', '162.225.186.176', '[]', '[]', 'customers.php', 'https://projects.anomoz.com/ke/smsCampaigner//customers.php');
INSERT INTO smsCampaigner_log VALUES ('F6555U8KKU', '', '1698119975', 'admin', '162.225.186.176', '[]', '[]', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner//employees.php');
INSERT INTO smsCampaigner_log VALUES ('X2932SJGD8', '', '1698119976', 'admin', '162.225.186.176', '[]', '[]', 'customers.php', 'https://projects.anomoz.com/ke/smsCampaigner//customers.php');
INSERT INTO smsCampaigner_log VALUES ('5SJNGNCJD0', '', '1698119981', 'admin', '162.225.186.176', '{\"id\":\"BJ61TKWEDL\"}', '[]', 'view_user.php', 'https://projects.anomoz.com/ke/smsCampaigner//view_user.php?id=BJ61TKWEDL');
INSERT INTO smsCampaigner_log VALUES ('LU0Z253QXG', '', '1698119985', 'admin', '162.225.186.176', '[]', '[]', 'tickets.php', 'https://projects.anomoz.com/ke/smsCampaigner//tickets.php');
INSERT INTO smsCampaigner_log VALUES ('S0CCMTVDWT', '', '1698119986', 'admin', '162.225.186.176', '[]', '[]', 'tickets.php', 'https://projects.anomoz.com/ke/smsCampaigner//tickets.php');
INSERT INTO smsCampaigner_log VALUES ('ZYXRYV66Q0', '', '1698120747', 'admin', '58.65.223.229', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('HI6UKF1MYR', '', '1698120747', 'admin', '58.65.223.229', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('IZPPQ0D2QS', '', '1698120748', 'admin', '58.65.223.229', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('ZBKS6OI9HG', '', '1698121537', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('W61OJDONLX', '', '1698121538', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('1TPT16EV50', '', '1698126978', 'admin', '182.178.111.158', '[]', '[]', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner/employees.php');
INSERT INTO smsCampaigner_log VALUES ('5W77OMHHDE', '', '1698127251', 'admin', '182.178.111.158', '[]', '[]', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner/employees.php');
INSERT INTO smsCampaigner_log VALUES ('MZZ244VSY5', '', '1698127855', 'admin', '182.178.111.158', '[]', '[]', 'files_storage.php', 'https://projects.anomoz.com/ke/smsCampaigner/files_storage.php');
INSERT INTO smsCampaigner_log VALUES ('661ND4V5O6', '', '1698127870', 'admin', '182.178.111.158', '[]', '[]', 'files_storage.php', 'https://projects.anomoz.com/ke/smsCampaigner/files_storage.php');
INSERT INTO smsCampaigner_log VALUES ('3RUIGSOWAN', '', '1698127934', 'admin', '182.178.111.158', '[]', '[]', 'calendar_reminders.php', 'https://projects.anomoz.com/ke/smsCampaigner/calendar_reminders.php');
INSERT INTO smsCampaigner_log VALUES ('9DH0M3S8DZ', '', '1698128383', 'admin', '182.178.111.158', '[]', '[]', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner/employees.php');
INSERT INTO smsCampaigner_log VALUES ('09I37J9HK1', '', '1698129074', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('FOGF1DUJ3F', '', '1698129074', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('R6A0DJ39HA', '', '1698129241', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('FDOEUBYAG4', '', '1698129241', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('A4PR5HQKEQ', '', '1698129287', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('ZZR9G7PFGE', '', '1698129287', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('7DMWU6X0JI', '', '1698129287', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('NTXIKU7FUD', '', '1698129287', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('7WNWTY9MK1', '', '1698129602', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('DSH8NOMUC1', '', '1698129603', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('3JYAY901TZ', '', '1698129623', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('XEX6953EXH', '', '1698129623', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('HUOIYP5IK0', '', '1698129623', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('4KKRDFB3N9', '', '1698129623', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('UC1V79NS5Y', '', '1698130058', 'admin', '182.178.111.158', '[]', '[]', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner/employees.php');
INSERT INTO smsCampaigner_log VALUES ('BF0ECTMLFO', '', '1698130473', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('PEPJ8E0JHC', '', '1698130474', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('H8MYWUBQ87', '', '1698130505', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('VPQDCVBV2B', '', '1698130505', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('VRFGSM35TS', '', '1698130505', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('Y4BNNGJLEE', '', '1698130505', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('P3RE5S3PEL', '', '1698130634', 'admin', '182.178.111.158', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('GT0ZUPFF0Y', '', '1698130935', 'admin', '103.244.178.36', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home');
INSERT INTO smsCampaigner_log VALUES ('HLZGNK2XNE', '', '1698131640', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('MH3WEE9L9P', '', '1698131641', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('M6JXEHN5F1', '', '1698131655', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('45FP8RASDM', '', '1698131655', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('AUWPL3GBVB', '', '1698131655', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('5AWGKVZDTO', '', '1698131655', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('ANUGLKL02S', '', '1698132584', 'admin', '182.178.111.158', '[]', '[]', 'calendar_reminders.php', 'https://projects.anomoz.com/ke/smsCampaigner/calendar_reminders.php');
INSERT INTO smsCampaigner_log VALUES ('LC77UWQAFJ', '', '1698163688', '', '75.74.36.5', '{\"demo\":\"1\"}', '{\"email\":\"admin@portal.com\",\"password\":\"123\",\"login\":\"Sign In\"}', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner//login.php?demo=1');
INSERT INTO smsCampaigner_log VALUES ('IHMCF8T8TL', '', '1698163688', 'admin', '75.74.36.5', '{\"code\":\"1\",\"redir\":\"./home.php?\"}', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner//login.php?code=1&redir=.%2Fhome.php%3F');
INSERT INTO smsCampaigner_log VALUES ('P33MLZYZ2B', '', '1698163688', 'admin', '75.74.36.5', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner//home.php');
INSERT INTO smsCampaigner_log VALUES ('IL7RG1PY70', '', '1698163698', 'admin', '75.74.36.5', '[]', '[]', 'customers.php', 'https://projects.anomoz.com/ke/smsCampaigner//customers.php');
INSERT INTO smsCampaigner_log VALUES ('NKEUAQRX3V', '', '1698163700', 'admin', '75.74.36.5', '[]', '[]', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner//employees.php');
INSERT INTO smsCampaigner_log VALUES ('LSHKNV5C69', '', '1698163705', 'admin', '75.74.36.5', '[]', '[]', 'calendar_reminders.php', 'https://projects.anomoz.com/ke/smsCampaigner//calendar_reminders.php');
INSERT INTO smsCampaigner_log VALUES ('76B61E6UM1', '', '1698163711', 'admin', '75.74.36.5', '[]', '[]', 'calendar_reminders.php', 'https://projects.anomoz.com/ke/smsCampaigner//calendar_reminders.php');
INSERT INTO smsCampaigner_log VALUES ('DO12QYT8LX', '', '1698163712', 'admin', '75.74.36.5', '[]', '[]', 'invoices.php', 'https://projects.anomoz.com/ke/smsCampaigner//invoices.php');
INSERT INTO smsCampaigner_log VALUES ('OAVUSGZ1XQ', '', '1698163716', 'admin', '75.74.36.5', '[]', '[]', 'files_storage.php', 'https://projects.anomoz.com/ke/smsCampaigner//files_storage.php');
INSERT INTO smsCampaigner_log VALUES ('A9ZIGIDX84', '', '1698163721', 'admin', '75.74.36.5', '[]', '[]', 'customer_fields.php', 'https://projects.anomoz.com/ke/smsCampaigner//customer_fields.php');
INSERT INTO smsCampaigner_log VALUES ('QWSIKW4VTM', '', '1698163724', 'admin', '75.74.36.5', '[]', '[]', 'leave_manager.php', 'https://projects.anomoz.com/ke/smsCampaigner//leave_manager.php');
INSERT INTO smsCampaigner_log VALUES ('H6FK4D4SVV', '', '1698164473', 'admin', '75.74.36.5', '{\"u\":\"https://projects.anomoz.com/ke/generate_project_requirements.php?iframe=1\"}', '[]', 'webview.php', 'https://projects.anomoz.com/ke/smsCampaigner//webview.php?u=https%3A%2F%2Fprojects.anomoz.com%2Fke%2Fgenerate_project_requirements.php%3Fiframe%3D1');
INSERT INTO smsCampaigner_log VALUES ('XB8KSMQG8G', '', '1698180019', 'admin', '89.34.198.154', '{\"demo\":\"1\"}', '{\"email\":\"admin@portal.com\",\"password\":\"123\",\"login\":\"Sign In\"}', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner//login.php?demo=1');
INSERT INTO smsCampaigner_log VALUES ('FOILJLRSO2', '', '1698180020', 'admin', '89.34.198.154', '{\"code\":\"1\",\"redir\":\"./home.php?\"}', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner//login.php?code=1&redir=.%2Fhome.php%3F');
INSERT INTO smsCampaigner_log VALUES ('0A45WZAKUI', '', '1698180020', 'admin', '89.34.198.154', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner//home.php');
INSERT INTO smsCampaigner_log VALUES ('HD4AX9BXLE', '', '1698180023', 'admin', '89.34.198.154', '[]', '[]', 'customers.php', 'https://projects.anomoz.com/ke/smsCampaigner//customers.php');
INSERT INTO smsCampaigner_log VALUES ('3OP3KFSP6T', '', '1698180028', 'admin', '89.34.198.154', '[]', '[]', 'customers.php', 'https://projects.anomoz.com/ke/smsCampaigner//customers.php');
INSERT INTO smsCampaigner_log VALUES ('YODUQYGBC2', '', '1698180047', 'admin', '89.34.198.154', '[]', '[]', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner//employees.php');
INSERT INTO smsCampaigner_log VALUES ('KV6V5EAE35', '', '1698180057', 'admin', '89.34.198.154', '[]', '[]', 'calendar_reminders.php', 'https://projects.anomoz.com/ke/smsCampaigner//calendar_reminders.php');
INSERT INTO smsCampaigner_log VALUES ('2F29VD7OJV', '', '1698180063', 'admin', '89.34.198.154', '[]', '[]', 'invoices.php', 'https://projects.anomoz.com/ke/smsCampaigner//invoices.php');
INSERT INTO smsCampaigner_log VALUES ('38ZHA9597A', '', '1698180077', 'admin', '89.34.198.154', '{\"invoiceIdDuplicate\":\"Q8YEGJGAUB\"}', '[]', 'invoices.php', 'https://projects.anomoz.com/ke/smsCampaigner//invoices.php?invoiceIdDuplicate=Q8YEGJGAUB');
INSERT INTO smsCampaigner_log VALUES ('SFSUHS4RCQ', '', '1698180077', 'admin', '89.34.198.154', '{\"m\":\"Invoice was duplicated successfully.\"}', '[]', 'invoices.php', 'https://projects.anomoz.com/ke/smsCampaigner//invoices.php?m=Invoice%20was%20duplicated%20successfully.');
INSERT INTO smsCampaigner_log VALUES ('8HFM9ZPD0F', '', '1698180082', 'admin', '89.34.198.154', '[]', '[]', 'analytics.php', 'https://projects.anomoz.com/ke/smsCampaigner//analytics.php');
INSERT INTO smsCampaigner_log VALUES ('OPU542XDJK', '', '1698180103', 'admin', '89.34.198.154', '[]', '[]', 'time_tracker.php', 'https://projects.anomoz.com/ke/smsCampaigner//time_tracker.php');
INSERT INTO smsCampaigner_log VALUES ('HYQKC188NO', '', '1698323613', '', '43.242.178.167', '{\"demo\":\"1\"}', '{\"email\":\"admin@portal.com\",\"password\":\"123\",\"login\":\"Sign In\"}', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php?demo=1');
INSERT INTO smsCampaigner_log VALUES ('8TZE5DGH18', '', '1698323613', 'admin', '43.242.178.167', '{\"code\":\"1\",\"redir\":\"./home.php?\"}', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php?code=1&redir=.%2Fhome.php%3F');
INSERT INTO smsCampaigner_log VALUES ('T7NVMY3XG0', '', '1698323614', 'admin', '43.242.178.167', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('AAMCHWM7BL', '', '1698323622', 'admin', '43.242.178.167', '[]', '[]', 'files_storage.php', 'https://projects.anomoz.com/ke/smsCampaigner/files_storage.php');
INSERT INTO smsCampaigner_log VALUES ('ZDEXZZHLU4', '', '1698323638', 'admin', '43.242.178.167', '[]', '[]', 'invoices.php', 'https://projects.anomoz.com/ke/smsCampaigner/invoices.php');
INSERT INTO smsCampaigner_log VALUES ('0DQJTUWT3A', '', '1698323647', 'admin', '43.242.178.167', '{\"view\":\"RIME3V9PYG\"}', '[]', 'invoices.php', 'https://projects.anomoz.com/ke/smsCampaigner/invoices.php?view=RIME3V9PYG');
INSERT INTO smsCampaigner_log VALUES ('HMMBSNEB5B', '', '1698325326', 'admin', '43.242.178.167', '[]', '[]', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner/employees.php');
INSERT INTO smsCampaigner_log VALUES ('U4BHHO7FUS', '', '1698325330', 'admin', '43.242.178.167', '[]', '[]', 'settings.php', 'https://projects.anomoz.com/ke/smsCampaigner/settings.php');
INSERT INTO smsCampaigner_log VALUES ('Z5EZBJW865', '', '1698325339', 'admin', '43.242.178.167', '[]', '[]', 'products.php', 'https://projects.anomoz.com/ke/smsCampaigner/products.php');
INSERT INTO smsCampaigner_log VALUES ('WTHKLCW2N5', '', '1698494719', 'admin', '154.198.94.226', '{\"demo\":\"1\"}', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php?demo=1');
INSERT INTO smsCampaigner_log VALUES ('IQNDQ4RGRE', '', '1698494720', 'admin', '154.198.94.226', '{\"demo\":\"1\"}', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php?demo=1');
INSERT INTO smsCampaigner_log VALUES ('YZM8Z9PTAK', '', '1698494721', 'admin', '154.198.94.226', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('LZDIR1MHSP', '', '1698494777', 'admin', '154.198.94.226', '[]', '[]', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner/employees.php');
INSERT INTO smsCampaigner_log VALUES ('3M3G9TWE9Q', '', '1698494890', 'admin', '154.198.94.226', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('4CFIMJ6RNR', '', '1698494906', 'admin', '154.198.94.226', '[]', '[]', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner/employees.php');
INSERT INTO smsCampaigner_log VALUES ('OOUF72S5PD', '', '1698588837', 'admin', '154.81.230.226', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('BSRIFY35CV', '', '1698588844', 'admin', '154.81.230.226', '[]', '[]', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner/employees.php');
INSERT INTO smsCampaigner_log VALUES ('MH8HBF1ZI2', '', '1698589158', 'admin', '154.81.230.226', '[]', '[]', 'customers.php', 'https://projects.anomoz.com/ke/smsCampaigner/customers.php');
INSERT INTO smsCampaigner_log VALUES ('Y0XHJ6RW7J', '', '1698589163', 'admin', '154.81.230.226', '[]', '[]', 'calendar_reminders.php', 'https://projects.anomoz.com/ke/smsCampaigner/calendar_reminders.php');
INSERT INTO smsCampaigner_log VALUES ('F089Q9CXG1', '', '1698589176', 'admin', '154.81.230.226', '[]', '[]', 'calendar_reminders.php', 'https://projects.anomoz.com/ke/smsCampaigner/calendar_reminders.php');
INSERT INTO smsCampaigner_log VALUES ('P5VNYZUY3P', '', '1698589183', 'admin', '154.81.230.226', '[]', '[]', 'invoices.php', 'https://projects.anomoz.com/ke/smsCampaigner/invoices.php');
INSERT INTO smsCampaigner_log VALUES ('NBEJVYD961', '', '1698589187', 'admin', '154.81.230.226', '[]', '[]', 'tasks.php', 'https://projects.anomoz.com/ke/smsCampaigner/tasks.php');
INSERT INTO smsCampaigner_log VALUES ('PTRZ3FS9N3', '', '1698589191', 'admin', '154.81.230.226', '[]', '[]', 'files_storage.php', 'https://projects.anomoz.com/ke/smsCampaigner/files_storage.php');
INSERT INTO smsCampaigner_log VALUES ('UKGU65DCOC', '', '1698589192', 'admin', '154.81.230.226', '{\"f\":\"/\"}', '[]', 'files_storage.php', 'https://projects.anomoz.com/ke/smsCampaigner/files_storage.php?f=/');
INSERT INTO smsCampaigner_log VALUES ('3KH2QH07J3', '', '1698589199', 'admin', '154.81.230.226', '{\"f\":\"/\"}', '[]', 'files_storage.php', 'https://projects.anomoz.com/ke/smsCampaigner/files_storage.php?f=/');
INSERT INTO smsCampaigner_log VALUES ('2SZYSM0PT0', '', '1698589202', 'admin', '154.81.230.226', '{\"f\":\"/newfolder\"}', '[]', 'files_storage.php', 'https://projects.anomoz.com/ke/smsCampaigner/files_storage.php?f=/newfolder');
INSERT INTO smsCampaigner_log VALUES ('KHUDKDZYX1', '', '1698589206', 'admin', '154.81.230.226', '{\"f\":\"/pictures\"}', '[]', 'files_storage.php', 'https://projects.anomoz.com/ke/smsCampaigner/files_storage.php?f=/pictures');
INSERT INTO smsCampaigner_log VALUES ('THOD2KTGQX', '', '1698589211', 'admin', '154.81.230.226', '[]', '[]', 'customer_fields.php', 'https://projects.anomoz.com/ke/smsCampaigner/customer_fields.php');
INSERT INTO smsCampaigner_log VALUES ('L8X74YV43R', '', '1698589215', 'admin', '154.81.230.226', '[]', '[]', 'leave_manager.php', 'https://projects.anomoz.com/ke/smsCampaigner/leave_manager.php');
INSERT INTO smsCampaigner_log VALUES ('B6PVP86KH8', '', '1698589218', 'admin', '154.81.230.226', '[]', '[]', 'assets.php', 'https://projects.anomoz.com/ke/smsCampaigner/assets.php');
INSERT INTO smsCampaigner_log VALUES ('F3N41I5QJ2', '', '1698589233', 'admin', '154.81.230.226', '[]', '[]', 'view_pipeline.php', 'https://projects.anomoz.com/ke/smsCampaigner/view_pipeline.php');
INSERT INTO smsCampaigner_log VALUES ('ZNGTUPJLQ3', '', '1698589242', 'admin', '154.81.230.226', '[]', '[]', 'assets.php', 'https://projects.anomoz.com/ke/smsCampaigner/assets.php');
INSERT INTO smsCampaigner_log VALUES ('OI0ALOWED9', '', '1698589253', 'admin', '154.81.230.226', '{\"u\":\"https://projects.anomoz.com/ke/generate_project_requirements.php?iframe=1\"}', '[]', 'webview.php', 'https://projects.anomoz.com/ke/smsCampaigner/webview.php?u=https%3A%2F%2Fprojects.anomoz.com%2Fke%2Fgenerate_project_requirements.php%3Fiframe%3D1');
INSERT INTO smsCampaigner_log VALUES ('67HY4QW93Z', '', '1698589267', 'admin', '154.81.230.226', '[]', '[]', 'settings.php', 'https://projects.anomoz.com/ke/smsCampaigner/settings.php');
INSERT INTO smsCampaigner_log VALUES ('IHMG9JBCAB', '', '1698589281', 'admin', '154.81.230.226', '[]', '[]', 'settings.php', 'https://projects.anomoz.com/ke/smsCampaigner/settings.php');
INSERT INTO smsCampaigner_log VALUES ('KN0FDK6BB7', '', '1698589299', 'admin', '154.81.230.226', '[]', '[]', 'settings.php', 'https://projects.anomoz.com/ke/smsCampaigner/settings.php');
INSERT INTO smsCampaigner_log VALUES ('7WN55BI70K', '', '1698589314', 'admin', '154.81.230.226', '[]', '[]', 'settings.php', 'https://projects.anomoz.com/ke/smsCampaigner/settings.php');
INSERT INTO smsCampaigner_log VALUES ('A3NTZMSJUE', '', '1698589317', 'admin', '154.81.230.226', '{\"logout\":\"1\"}', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/?logout=1');
INSERT INTO smsCampaigner_log VALUES ('UQEGRP53NZ', '', '1698861473', '', '43.252.15.67', '{\"demo\":\"1\"}', '{\"email\":\"admin@portal.com\",\"password\":\"123\",\"login\":\"Sign In\"}', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner//login.php?demo=1');
INSERT INTO smsCampaigner_log VALUES ('653TWGNQNQ', '', '1698861474', 'admin', '43.252.15.67', '{\"code\":\"1\",\"redir\":\"./home.php?\"}', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner//login.php?code=1&redir=.%2Fhome.php%3F');
INSERT INTO smsCampaigner_log VALUES ('G9XJ7C0672', '', '1698861474', 'admin', '43.252.15.67', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner//home.php');
INSERT INTO smsCampaigner_log VALUES ('U23KNCCHGD', '', '1698861488', 'admin', '43.252.15.67', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner//home.php');
INSERT INTO smsCampaigner_log VALUES ('8DQDRKQOCA', '', '1698861625', 'admin', '43.252.15.67', '[]', '[]', 'customers.php', 'https://projects.anomoz.com/ke/smsCampaigner//customers.php');
INSERT INTO smsCampaigner_log VALUES ('T6GB3ENS37', '', '1698861660', 'admin', '43.252.15.67', '{\"id\":\"BJ61TKWEDL\"}', '[]', 'view_user.php', 'https://projects.anomoz.com/ke/smsCampaigner//view_user.php?id=BJ61TKWEDL');
INSERT INTO smsCampaigner_log VALUES ('W2QRC873CD', '', '1698861666', 'admin', '43.252.15.67', '[]', '[]', 'time_tracker.php', 'https://projects.anomoz.com/ke/smsCampaigner//time_tracker.php');
INSERT INTO smsCampaigner_log VALUES ('NDYSV423RB', '', '1698861673', 'admin', '43.252.15.67', '{\"shift_id\":\"QF8ZL0HJFZ\"}', '[]', 'time_tracker.php', 'https://projects.anomoz.com/ke/smsCampaigner//time_tracker.php?shift_id=QF8ZL0HJFZ');
INSERT INTO smsCampaigner_log VALUES ('DMLCSA0ULM', '', '1698861681', 'admin', '43.252.15.67', '{\"u\":\"https://projects.anomoz.com/ke/generate_project_requirements.php?iframe=1\"}', '[]', 'webview.php', 'https://projects.anomoz.com/ke/smsCampaigner//webview.php?u=https%3A%2F%2Fprojects.anomoz.com%2Fke%2Fgenerate_project_requirements.php%3Fiframe%3D1');
INSERT INTO smsCampaigner_log VALUES ('8S6MT71RSY', '', '1698861696', 'admin', '43.252.15.67', '[]', '[]', 'tasks.php', 'https://projects.anomoz.com/ke/smsCampaigner//tasks.php');
INSERT INTO smsCampaigner_log VALUES ('RUN5186A55', '', '1698910126', '', '148.72.174.44', '{\"demo\":\"1\"}', '{\"email\":\"admin@portal.com\",\"password\":\"123\",\"login\":\"Sign In\"}', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner//login.php?demo=1');
INSERT INTO smsCampaigner_log VALUES ('WSQS898SU6', '', '1698910126', 'admin', '148.72.174.44', '{\"code\":\"1\",\"redir\":\"./home.php?\"}', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner//login.php?code=1&redir=.%2Fhome.php%3F');
INSERT INTO smsCampaigner_log VALUES ('Y889N5RCX0', '', '1698910126', 'admin', '148.72.174.44', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner//home.php');
INSERT INTO smsCampaigner_log VALUES ('THJ3H5EBDN', '', '1698910146', 'admin', '148.72.174.44', '[]', '[]', 'customers.php', 'https://projects.anomoz.com/ke/smsCampaigner//customers.php');
INSERT INTO smsCampaigner_log VALUES ('HEXGRUXB5D', '', '1698910158', 'admin', '148.72.174.44', '{\"id\":\"BJ61TKWEDL\"}', '[]', 'view_user.php', 'https://projects.anomoz.com/ke/smsCampaigner//view_user.php?id=BJ61TKWEDL');
INSERT INTO smsCampaigner_log VALUES ('53CD0LR0WH', '', '1698910170', 'admin', '148.72.174.44', '[]', '[]', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner//employees.php');
INSERT INTO smsCampaigner_log VALUES ('SOWB0L3MIM', '', '1698910198', 'admin', '148.72.174.44', '[]', '[]', 'calendar_reminders.php', 'https://projects.anomoz.com/ke/smsCampaigner//calendar_reminders.php');
INSERT INTO smsCampaigner_log VALUES ('RCU10F6RTN', '', '1698910206', 'admin', '148.72.174.44', '[]', '[]', 'calendar_reminders.php', 'https://projects.anomoz.com/ke/smsCampaigner//calendar_reminders.php');
INSERT INTO smsCampaigner_log VALUES ('JZKKAK1HSY', '', '1698910215', 'admin', '148.72.174.44', '[]', '[]', 'invoices.php', 'https://projects.anomoz.com/ke/smsCampaigner//invoices.php');
INSERT INTO smsCampaigner_log VALUES ('W84A3KV8VU', '', '1698910225', 'admin', '148.72.174.44', '{\"view\":\"RIME3V9PYG\"}', '[]', 'invoices.php', 'https://projects.anomoz.com/ke/smsCampaigner//invoices.php?view=RIME3V9PYG');
INSERT INTO smsCampaigner_log VALUES ('33FYP82XL6', '', '1698910235', 'admin', '148.72.174.44', '[]', '[]', 'tasks.php', 'https://projects.anomoz.com/ke/smsCampaigner//tasks.php');
INSERT INTO smsCampaigner_log VALUES ('O36HGKGV30', '', '1698910254', 'admin', '148.72.174.44', '[]', '[]', 'leave_manager.php', 'https://projects.anomoz.com/ke/smsCampaigner//leave_manager.php');
INSERT INTO smsCampaigner_log VALUES ('5OOYOT01OI', '', '1698910268', 'admin', '148.72.174.44', '[]', '[]', 'time_tracker.php', 'https://projects.anomoz.com/ke/smsCampaigner//time_tracker.php');
INSERT INTO smsCampaigner_log VALUES ('PYP9EIUXKW', '', '1698910282', 'admin', '148.72.174.44', '[]', '[]', 'analytics.php', 'https://projects.anomoz.com/ke/smsCampaigner//analytics.php');
INSERT INTO smsCampaigner_log VALUES ('Y9NM6QGMNR', '', '1698910309', 'admin', '148.72.174.44', '{\"u\":\"https://projects.anomoz.com/ke/generate_project_requirements.php?iframe=1\"}', '[]', 'webview.php', 'https://projects.anomoz.com/ke/smsCampaigner//webview.php?u=https%3A%2F%2Fprojects.anomoz.com%2Fke%2Fgenerate_project_requirements.php%3Fiframe%3D1');
INSERT INTO smsCampaigner_log VALUES ('31OQYM0VG4', '', '1698910406', 'admin', '148.72.174.44', '[]', '[]', 'settings.php', 'https://projects.anomoz.com/ke/smsCampaigner//settings.php');
INSERT INTO smsCampaigner_log VALUES ('21PEVG4GO4', '', '1699380524', 'admin', '75.81.186.254', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner//home.php');
INSERT INTO smsCampaigner_log VALUES ('NM3FKT01W9', '', '1699380527', 'admin', '75.81.186.254', '[]', '[]', 'customers.php', 'https://projects.anomoz.com/ke/smsCampaigner//customers.php');
INSERT INTO smsCampaigner_log VALUES ('SVL9DPO6RC', '', '1699380532', 'admin', '75.81.186.254', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner//home.php');
INSERT INTO smsCampaigner_log VALUES ('TZGPG28LK6', '', '1699381318', 'admin', '75.81.186.254', '{\"demo\":\"1\"}', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner//login.php?demo=1');
INSERT INTO smsCampaigner_log VALUES ('JOD18K58M7', '', '1699381318', 'admin', '75.81.186.254', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner//home.php');
INSERT INTO smsCampaigner_log VALUES ('FUQC4D1A4C', '', '1699437969', '', '103.244.178.36', '{\"demo\":\"1\"}', '{\"email\":\"admin@portal.com\",\"password\":\"123\",\"login\":\"Sign In\"}', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php?demo=1');
INSERT INTO smsCampaigner_log VALUES ('UZDT11IBL5', '', '1699437969', 'admin', '103.244.178.36', '{\"code\":\"1\",\"redir\":\"./home.php?\"}', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php?code=1&redir=.%2Fhome.php%3F');
INSERT INTO smsCampaigner_log VALUES ('HKOUAHTBFL', '', '1699437970', 'admin', '103.244.178.36', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('9TTXWFZ956', '', '1699437976', 'admin', '103.244.178.36', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('FMCTFL2JAI', '', '1699437991', 'admin', '103.244.178.36', '[]', '[]', 'forget_password.php', 'https://projects.anomoz.com/ke/smsCampaigner/forget_password.php');
INSERT INTO smsCampaigner_log VALUES ('LKYQEL05PH', '', '1699437995', 'admin', '103.244.178.36', '[]', '{\"email\":\"snahmed1998@gmail.com\",\"send_verification_email\":\"Send Email\"}', 'forget_password.php', 'https://projects.anomoz.com/ke/smsCampaigner/forget_password.php');
INSERT INTO smsCampaigner_log VALUES ('UFAYG3W23H', '', '1699437995', 'admin', '103.244.178.36', '{\"success\":\"1111\"}', '[]', 'forget_password.php', 'https://projects.anomoz.com/ke/smsCampaigner/forget_password.php?success=1111');
INSERT INTO smsCampaigner_log VALUES ('IQU8QWNFXH', '', '1699439823', 'admin', '103.244.178.36', '{\"logout\":\"1\"}', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/?logout=1');
INSERT INTO smsCampaigner_log VALUES ('YPEHB1FRS8', '', '1699728223', '', '35.229.81.124', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('NEIO8YSJR5', '', '1699728223', '', '35.229.81.124', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('V4RT5GQQOS', '', '1699765601', '', '34.77.156.178', '[]', '[]', 'signup.php', 'https://projects.anomoz.com/ke/smsCampaigner//signup.php');
INSERT INTO smsCampaigner_log VALUES ('YAIX6L7YTU', '', '1701094427', '', '84.104.53.44', '{\"demo\":\"1\"}', '{\"email\":\"admin@portal.com\",\"password\":\"123\",\"login\":\"Sign In\"}', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner//login.php?demo=1');
INSERT INTO smsCampaigner_log VALUES ('2MAZNW7QK8', '', '1701094427', 'admin', '84.104.53.44', '{\"code\":\"1\",\"redir\":\"./home.php?\"}', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner//login.php?code=1&redir=.%2Fhome.php%3F');
INSERT INTO smsCampaigner_log VALUES ('VDX23US6DK', '', '1701094427', 'admin', '84.104.53.44', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner//home.php');
INSERT INTO smsCampaigner_log VALUES ('ZMTM3QUF0G', '', '1701094431', 'admin', '84.104.53.44', '[]', '[]', 'time_tracker.php', 'https://projects.anomoz.com/ke/smsCampaigner//time_tracker.php');
INSERT INTO smsCampaigner_log VALUES ('PYM8IFHIET', '', '1701094436', 'admin', '84.104.53.44', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner//home.php');
INSERT INTO smsCampaigner_log VALUES ('Z0CG5T7MON', '', '1701094442', 'admin', '84.104.53.44', '[]', '[]', 'files_storage.php', 'https://projects.anomoz.com/ke/smsCampaigner//files_storage.php');
INSERT INTO smsCampaigner_log VALUES ('90RZR928KN', '', '1701094442', 'admin', '84.104.53.44', '{\"f\":\"/\"}', '[]', 'files_storage.php', 'https://projects.anomoz.com/ke/smsCampaigner//files_storage.php?f=/');
INSERT INTO smsCampaigner_log VALUES ('9G4R7MG11A', '', '1701094447', 'admin', '84.104.53.44', '{\"f\":\"/my folder\"}', '[]', 'files_storage.php', 'https://projects.anomoz.com/ke/smsCampaigner//files_storage.php?f=/my+folder');
INSERT INTO smsCampaigner_log VALUES ('TLB5K94A90', '', '1701094455', 'admin', '84.104.53.44', '{\"u\":\"https://projects.anomoz.com/ke/generate_project_requirements.php?iframe=1\"}', '[]', 'webview.php', 'https://projects.anomoz.com/ke/smsCampaigner//webview.php?u=https%3A%2F%2Fprojects.anomoz.com%2Fke%2Fgenerate_project_requirements.php%3Fiframe%3D1');
INSERT INTO smsCampaigner_log VALUES ('T4XEX4N1TB', '', '1701094466', 'admin', '84.104.53.44', '[]', '[]', 'analytics.php', 'https://projects.anomoz.com/ke/smsCampaigner//analytics.php');
INSERT INTO smsCampaigner_log VALUES ('4V1V9N63KI', '', '1701094471', 'admin', '84.104.53.44', '[]', '[]', 'calendar_reminders.php', 'https://projects.anomoz.com/ke/smsCampaigner//calendar_reminders.php');
INSERT INTO smsCampaigner_log VALUES ('WLQC4U0KF3', '', '1701183245', '', '119.73.96.2', '{\"demo\":\"1\"}', '{\"email\":\"admin@portal.com\",\"password\":\"123\",\"login\":\"Sign In\"}', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php?demo=1');
INSERT INTO smsCampaigner_log VALUES ('OJNZWY804B', '', '1701183245', 'admin', '119.73.96.2', '{\"code\":\"1\",\"redir\":\"./home.php?\"}', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php?code=1&redir=.%2Fhome.php%3F');
INSERT INTO smsCampaigner_log VALUES ('SP5S3SC11N', '', '1701183246', 'admin', '119.73.96.2', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('723Z3NZLS9', '', '1701183249', 'admin', '119.73.96.2', '[]', '[]', 'menu.php', 'https://projects.anomoz.com/ke/smsCampaigner/menu.php');
INSERT INTO smsCampaigner_log VALUES ('9G08BYWE1A', '', '1701183348', 'admin', '119.73.96.2', '[]', '[]', 'menu.php', 'https://projects.anomoz.com/ke/smsCampaigner/menu.php');
INSERT INTO smsCampaigner_log VALUES ('RBO3HGOHOE', '', '1701184192', 'admin', '119.73.96.2', '[]', '[]', 'menu.php', 'https://projects.anomoz.com/ke/smsCampaigner/menu.php');
INSERT INTO smsCampaigner_log VALUES ('SSD0VU1HAM', '', '1701269678', '', '172.59.221.70', '{\"demo\":\"1\"}', '{\"email\":\"admin@portal.com\",\"password\":\"123\",\"login\":\"Sign In\"}', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner//login.php?demo=1');
INSERT INTO smsCampaigner_log VALUES ('KSIKH6DYPW', '', '1701269678', 'admin', '172.59.221.70', '{\"code\":\"1\",\"redir\":\"./home.php?\"}', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner//login.php?code=1&redir=.%2Fhome.php%3F');
INSERT INTO smsCampaigner_log VALUES ('WSI2W4DJWM', '', '1701269679', 'admin', '172.59.221.70', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner//home.php');
INSERT INTO smsCampaigner_log VALUES ('RJVXUGOZV4', '', '1701269704', 'admin', '172.59.221.70', '[]', '[]', 'customers.php', 'https://projects.anomoz.com/ke/smsCampaigner//customers.php');
INSERT INTO smsCampaigner_log VALUES ('L08U2U09HR', '', '1701269721', 'admin', '172.59.221.70', '[]', '[]', 'calendar_reminders.php', 'https://projects.anomoz.com/ke/smsCampaigner//calendar_reminders.php');
INSERT INTO smsCampaigner_log VALUES ('CD7SRH192K', '', '1701269728', 'admin', '172.59.221.70', '[]', '[]', 'files_storage.php', 'https://projects.anomoz.com/ke/smsCampaigner//files_storage.php');
INSERT INTO smsCampaigner_log VALUES ('UAQMFFZQ04', '', '1701269728', 'admin', '172.59.221.70', '{\"f\":\"/\"}', '[]', 'files_storage.php', 'https://projects.anomoz.com/ke/smsCampaigner//files_storage.php?f=/');
INSERT INTO smsCampaigner_log VALUES ('5HIVDB0ESI', '', '1701269733', 'admin', '172.59.221.70', '[]', '[]', 'customer_fields.php', 'https://projects.anomoz.com/ke/smsCampaigner//customer_fields.php');
INSERT INTO smsCampaigner_log VALUES ('RKPY226VA7', '', '1701269750', 'admin', '172.59.221.70', '{\"u\":\"https://projects.anomoz.com/ke/generate_project_requirements.php?iframe=1\"}', '[]', 'webview.php', 'https://projects.anomoz.com/ke/smsCampaigner//webview.php?u=https%3A%2F%2Fprojects.anomoz.com%2Fke%2Fgenerate_project_requirements.php%3Fiframe%3D1');
INSERT INTO smsCampaigner_log VALUES ('M9BZGW1VCX', '', '1701269772', 'admin', '172.59.221.70', '[]', '[]', 'settings.php', 'https://projects.anomoz.com/ke/smsCampaigner//settings.php');
INSERT INTO smsCampaigner_log VALUES ('CIY1N64S49', '', '1701269779', 'admin', '172.59.221.70', '[]', '[]', 'analytics.php', 'https://projects.anomoz.com/ke/smsCampaigner//analytics.php');
INSERT INTO smsCampaigner_log VALUES ('IR21V7PFVB', '', '1701269806', 'admin', '172.59.221.70', '[]', '[]', 'settings.php', 'https://projects.anomoz.com/ke/smsCampaigner//settings.php');
INSERT INTO smsCampaigner_log VALUES ('SNF4CQEHEO', '', '1701269808', 'admin', '172.59.221.70', '{\"u\":\"https://projects.anomoz.com/ke/generate_project_requirements.php?iframe=1\"}', '[]', 'webview.php', 'https://projects.anomoz.com/ke/smsCampaigner//webview.php?u=https%3A%2F%2Fprojects.anomoz.com%2Fke%2Fgenerate_project_requirements.php%3Fiframe%3D1');
INSERT INTO smsCampaigner_log VALUES ('XXGF15U4S3', '', '1701269809', 'admin', '172.59.221.70', '[]', '[]', 'customer_fields.php', 'https://projects.anomoz.com/ke/smsCampaigner//customer_fields.php');
INSERT INTO smsCampaigner_log VALUES ('9J384GBYJL', '', '1701269810', 'admin', '172.59.221.70', '{\"f\":\"/\"}', '[]', 'files_storage.php', 'https://projects.anomoz.com/ke/smsCampaigner//files_storage.php?f=/');
INSERT INTO smsCampaigner_log VALUES ('9LWJM5V53B', '', '1701269811', 'admin', '172.59.221.70', '[]', '[]', 'calendar_reminders.php', 'https://projects.anomoz.com/ke/smsCampaigner//calendar_reminders.php');
INSERT INTO smsCampaigner_log VALUES ('GX889BDYD0', '', '1701269812', 'admin', '172.59.221.70', '[]', '[]', 'customers.php', 'https://projects.anomoz.com/ke/smsCampaigner//customers.php');
INSERT INTO smsCampaigner_log VALUES ('A5WFNVNF1P', '', '1701269813', 'admin', '172.59.221.70', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner//home.php');
INSERT INTO smsCampaigner_log VALUES ('WHNHLPX86L', '', '1701279686', 'admin', '172.59.221.70', '{\"demo\":\"1\"}', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner//login.php?demo=1');
INSERT INTO smsCampaigner_log VALUES ('YOAJZRR0SL', '', '1701279686', 'admin', '172.59.221.70', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner//home.php');
INSERT INTO smsCampaigner_log VALUES ('YDJJZHGNEI', '', '1701279862', 'admin', '172.59.221.70', '[]', '[]', 'leave_manager.php', 'https://projects.anomoz.com/ke/smsCampaigner//leave_manager.php');
INSERT INTO smsCampaigner_log VALUES ('NARCC1TF4D', '', '1701279866', 'admin', '172.59.221.70', '[]', '[]', 'invoices.php', 'https://projects.anomoz.com/ke/smsCampaigner//invoices.php');
INSERT INTO smsCampaigner_log VALUES ('SD4D9XWP91', '', '1701279871', 'admin', '172.59.221.70', '[]', '[]', 'view_pipeline.php', 'https://projects.anomoz.com/ke/smsCampaigner//view_pipeline.php');
INSERT INTO smsCampaigner_log VALUES ('JFXFNRCVM8', '', '1701279876', 'admin', '172.59.221.70', '{\"userIds\":\"BME7GVQE7C\",\"pipelineIds\":\"FAOBUFIKWY\"}', '[]', 'view_pipeline.php', 'https://projects.anomoz.com/ke/smsCampaigner//view_pipeline.php?userIds=BME7GVQE7C&pipelineIds=FAOBUFIKWY');
INSERT INTO smsCampaigner_log VALUES ('SI1U7NGYHB', '', '1701279878', 'admin', '172.59.221.70', '{\"userIds\":\"SZCQ17TS4A\",\"pipelineIds\":\"JFTPJW33A6\"}', '[]', 'view_pipeline.php', 'https://projects.anomoz.com/ke/smsCampaigner//view_pipeline.php?userIds=SZCQ17TS4A&pipelineIds=JFTPJW33A6');
INSERT INTO smsCampaigner_log VALUES ('EDTWE372RB', '', '1701279882', 'admin', '172.59.221.70', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner//home.php');
INSERT INTO smsCampaigner_log VALUES ('W07TKO53MP', '', '1701279885', 'admin', '172.59.221.70', '[]', '[]', 'settings.php', 'https://projects.anomoz.com/ke/smsCampaigner//settings.php');
INSERT INTO smsCampaigner_log VALUES ('C7ZB1CDP2I', '', '1701279897', 'admin', '172.59.221.70', '{\"u\":\"https://projects.anomoz.com/ke/generate_project_requirements.php?iframe=1\"}', '[]', 'webview.php', 'https://projects.anomoz.com/ke/smsCampaigner//webview.php?u=https%3A%2F%2Fprojects.anomoz.com%2Fke%2Fgenerate_project_requirements.php%3Fiframe%3D1');
INSERT INTO smsCampaigner_log VALUES ('TOUPBR2V8B', '', '1701279997', 'admin', '172.59.221.70', '[]', '[]', 'products.php', 'https://projects.anomoz.com/ke/smsCampaigner//products.php');
INSERT INTO smsCampaigner_log VALUES ('B9JVZ26ZQU', '', '1701280006', 'admin', '172.59.221.70', '[]', '[]', 'analytics.php', 'https://projects.anomoz.com/ke/smsCampaigner//analytics.php');
INSERT INTO smsCampaigner_log VALUES ('NR4P8UZJT4', '', '1701356764', '', '119.73.96.2', '{\"m\":\"Data was saved successfully!\"}', '[]', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner/employees.php?m=Data%20was%20saved%20successfully!');
INSERT INTO smsCampaigner_log VALUES ('UQL3Z8VG4K', '', '1701356765', '', '119.73.96.2', '[]', '[]', 'logs.php', 'https://projects.anomoz.com/ke/smsCampaigner/logs.php');
INSERT INTO smsCampaigner_log VALUES ('9G4W1XY8YC', '', '1701356785', '', '119.73.96.2', '[]', '[]', 'logs.php', 'https://projects.anomoz.com/ke/smsCampaigner/logs.php');
INSERT INTO smsCampaigner_log VALUES ('IIVF1P7SWS', '', '1701356802', '', '119.73.96.2', '{\"all\":\"\"}', '[]', 'logs.php', 'https://projects.anomoz.com/ke/smsCampaigner/logs.php?all');
INSERT INTO smsCampaigner_log VALUES ('1R0GQAU23W', '', '1701356984', 'admin', '119.73.96.2', '{\"all\":\"\"}', '[]', 'logs.php', 'https://projects.anomoz.com/ke/smsCampaigner/logs.php?all');
INSERT INTO smsCampaigner_log VALUES ('NSAFJLLM2G', '', '1701356987', 'admin', '119.73.96.2', '{\"m\":\"123123 was saved successfully!\"}', '[]', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner/employees.php?m=123123%20was%20saved%20successfully!');
INSERT INTO smsCampaigner_log VALUES ('Z28G6Y1RCY', '', '1701356988', 'admin', '119.73.96.2', '{\"all\":\"\"}', '[]', 'logs.php', 'https://projects.anomoz.com/ke/smsCampaigner/logs.php?all');
INSERT INTO smsCampaigner_log VALUES ('IHPJIVAS34', '', '1701356997', 'admin', '119.73.96.2', '{\"all\":\"\"}', '[]', 'logs.php', 'https://projects.anomoz.com/ke/smsCampaigner/logs.php?all');
INSERT INTO smsCampaigner_log VALUES ('VCZEP8HXMO', '', '1701357021', 'admin', '119.73.96.2', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('EU8VEYHLCC', '', '1701357021', 'admin', '119.73.96.2', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('FKZ3GMCGQC', '', '1701357021', 'admin', '119.73.96.2', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('OBUNP6GTP3', '', '1701357023', 'admin', '119.73.96.2', '{\"all\":\"\"}', '[]', 'logs.php', 'https://projects.anomoz.com/ke/smsCampaigner/logs.php?all');
INSERT INTO smsCampaigner_log VALUES ('WLG04IFH9H', '', '1701357025', 'admin', '119.73.96.2', '[]', '[]', 'logs.php', 'https://projects.anomoz.com/ke/smsCampaigner/logs.php');
INSERT INTO smsCampaigner_log VALUES ('BZ20D7KPKU', '', '1701357029', 'admin', '119.73.96.2', '[]', '[]', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner/employees.php');
INSERT INTO smsCampaigner_log VALUES ('IPKW16AQVP', '', '1701357034', 'admin', '119.73.96.2', '[]', '{\"name\":\"arsalan1\",\"email\":\"arsalan@projects.anomoz.com\",\"password\":\"\",\"phone\":\"03130323023\",\"address\":\"KARACHI\",\"role\":\"employee\",\"addedBy\":\"admin\",\"actionId\":\"AMPCX4T2J2\",\"create_package\":\"Submit\"}', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner/employees.php?');
INSERT INTO smsCampaigner_log VALUES ('3POOX83VWC', '', '1701357034', 'admin', '119.73.96.2', '{\"m\":\"Data was saved successfully!\"}', '[]', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner/employees.php?m=Data%20was%20saved%20successfully!');
INSERT INTO smsCampaigner_log VALUES ('NUD3TEEF0V', '', '1701357036', 'admin', '119.73.96.2', '[]', '[]', 'logs.php', 'https://projects.anomoz.com/ke/smsCampaigner/logs.php');
INSERT INTO smsCampaigner_log VALUES ('709TNP2EPY', '', '1701357041', 'admin', '119.73.96.2', '{\"all\":\"\"}', '[]', 'logs.php', 'https://projects.anomoz.com/ke/smsCampaigner/logs.php?all');
INSERT INTO smsCampaigner_log VALUES ('OVM7GNHSYW', '', '1701357102', 'admin', '119.73.96.2', '{\"all\":\"\"}', '[]', 'logs.php', 'https://projects.anomoz.com/ke/smsCampaigner/logs.php?all');
INSERT INTO smsCampaigner_log VALUES ('VXKQR839A2', '', '1701357150', 'admin', '119.73.96.2', '[]', '[]', 'logs.php', 'https://projects.anomoz.com/ke/smsCampaigner/logs.php');
INSERT INTO smsCampaigner_log VALUES ('BL57CDDMKG', '', '1701357177', '', '119.73.96.2', '[]', '[]', 'logs.php', 'https://projects.anomoz.com/ke/smsCampaigner/logs.php');
INSERT INTO smsCampaigner_log VALUES ('5LZIH4MHXF', '', '1701357178', '', '119.73.96.2', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('C7FMJZAYGB', '', '1701357178', '', '119.73.96.2', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('SQALJP9XNB', '', '1701357218', 'admin', '119.73.96.2', '[]', '[]', 'logs.php', 'https://projects.anomoz.com/ke/smsCampaigner/logs.php');
INSERT INTO smsCampaigner_log VALUES ('OWHDKZTFIR', '', '1701357250', 'admin', '119.73.96.2', '[]', '[]', 'logs.php', 'https://projects.anomoz.com/ke/smsCampaigner/logs.php');
INSERT INTO smsCampaigner_log VALUES ('1VLY8RXCAV', '', '1701357286', 'admin', '119.73.96.2', '[]', '[]', 'logs.php', 'https://projects.anomoz.com/ke/smsCampaigner/logs.php');
INSERT INTO smsCampaigner_log VALUES ('9YGBYF96GC', '', '1701357324', 'admin', '119.73.96.2', '[]', '[]', 'logs.php', 'https://projects.anomoz.com/ke/smsCampaigner/logs.php');
INSERT INTO smsCampaigner_log VALUES ('9JH772MKBS', '', '1701357327', 'admin', '119.73.96.2', '[]', '[]', 'logs.php', 'https://projects.anomoz.com/ke/smsCampaigner/logs.php');
INSERT INTO smsCampaigner_log VALUES ('UK0360RB10', '', '1701358410', 'admin', '119.73.96.2', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home');
INSERT INTO smsCampaigner_log VALUES ('OZ2GVEBCYZ', '', '1701364790', '', '52.167.144.219', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('FSZSSIALFX', '', '1701364791', '', '52.167.144.219', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('RNW0ZPXQEE', '', '1701364792', '', '52.167.144.219', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('6YH45P56C2', '', '1701389643', '', '216.244.66.228', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('TYGDYFRKHJ', '', '1701392834', '', '40.77.167.235', '[]', '[]', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner/employees.php');
INSERT INTO smsCampaigner_log VALUES ('O2JON0LUWC', '', '1701392835', '', '40.77.167.235', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('WHEJVKRQCI', '', '1701392836', '', '40.77.167.235', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('3CO7VME6Y0', '', '1701393685', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('OLX7UAVQTD', '', '1701396148', '', '52.167.144.175', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('7M3NV8FIN0', '', '1701396149', '', '52.167.144.175', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('R8ODKH6EJG', '', '1701396149', '', '52.167.144.175', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('3ZM6URPIAO', '', '1701404119', 'admin', '103.125.178.145', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('4JTMWQ426P', '', '1701404353', 'admin', '103.125.178.145', '[]', '[]', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner/employees.php');
INSERT INTO smsCampaigner_log VALUES ('13091M01VB', '', '1701404367', 'admin', '103.125.178.145', '[]', '{\"name\":\"arsalan1\",\"email\":\"arsalan@projects.anomoz.com\",\"password\":\"123\",\"phone\":\"03130323023\",\"address\":\"KARACHI\",\"role\":\"employee\",\"addedBy\":\"admin\",\"actionId\":\"AMPCX4T2J2\",\"create_package\":\"Submit\"}', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner/employees.php?');
INSERT INTO smsCampaigner_log VALUES ('VQGF7EOF8A', '', '1701404367', 'admin', '103.125.178.145', '{\"m\":\"Data was saved successfully!\"}', '[]', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner/employees.php?m=Data%20was%20saved%20successfully!');
INSERT INTO smsCampaigner_log VALUES ('CIATURRR6P', '', '1701404372', 'admin', '103.125.178.145', '{\"logout\":\"1\"}', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/?logout=1');
INSERT INTO smsCampaigner_log VALUES ('ICSE2MARDL', '', '1701404372', '', '103.125.178.145', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('V8ECL2MS12', '', '1701404377', '', '103.125.178.145', '[]', '{\"email\":\"arsalan@projects.anomoz.com\",\"password\":\"123\",\"login\":\"Sign In\"}', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('TP8IPD7JF6', '', '1701404377', 'AMPCX4T2J2', '103.125.178.145', '{\"code\":\"1\",\"redir\":\"./home.php?\"}', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php?code=1&redir=.%2Fhome.php%3F');
INSERT INTO smsCampaigner_log VALUES ('OR1LI06F5S', '', '1701404377', 'AMPCX4T2J2', '103.125.178.145', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('1M7VHIAJBO', '', '1701404413', 'AMPCX4T2J2', '103.125.178.145', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('M240BRAKTP', '', '1701404420', 'AMPCX4T2J2', '103.125.178.145', '{\"demo\":\"1\"}', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php?demo=1');
INSERT INTO smsCampaigner_log VALUES ('FVE1E3AXYH', '', '1701404434', 'AMPCX4T2J2', '103.125.178.145', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('3U0C95SCTV', '', '1701409778', 'admin', '39.61.57.10', '[]', '[]', 'cruds.php', 'https://projects.anomoz.com/ke/smsCampaigner/cruds.php');
INSERT INTO smsCampaigner_log VALUES ('2FI2QU6VOF', '', '1701412209', 'admin', '37.111.159.61', '[]', '[]', 'view_pipeline.php', 'https://projects.anomoz.com/ke/smsCampaigner/view_pipeline.php');
INSERT INTO smsCampaigner_log VALUES ('PSEE3QIVHS', '', '1701412231', 'admin', '37.111.159.61', '{\"userIds\":\"BJ61TKWEDL\",\"pipelineIds\":\"FAOBUFIKWY\"}', '[]', 'view_pipeline.php', 'https://projects.anomoz.com/ke/smsCampaigner/view_pipeline.php?userIds=BJ61TKWEDL&pipelineIds=FAOBUFIKWY');
INSERT INTO smsCampaigner_log VALUES ('CM9W5KDJ5E', '', '1701412233', 'admin', '37.111.159.61', '[]', '[]', 'view_pipeline.php', 'https://projects.anomoz.com/ke/smsCampaigner/view_pipeline.php');
INSERT INTO smsCampaigner_log VALUES ('65OB9J0U5J', '', '1701413420', 'admin', '37.111.159.61', '[]', '[]', 'invoices.php', 'https://projects.anomoz.com/ke/smsCampaigner/invoices.php');
INSERT INTO smsCampaigner_log VALUES ('EYRW0FDOXL', '', '1701413425', 'admin', '37.111.159.61', '{\"action\":\"add\",\"invoiceId\":\"VM4HVFDZZM\"}', '[]', 'invoices.php', 'https://projects.anomoz.com/ke/smsCampaigner/invoices.php?action=add&invoiceId=VM4HVFDZZM');
INSERT INTO smsCampaigner_log VALUES ('PH9EEPNVEE', '', '1701413428', 'admin', '37.111.159.61', '[]', '[]', 'invoices.php', 'https://projects.anomoz.com/ke/smsCampaigner/invoices.php?');
INSERT INTO smsCampaigner_log VALUES ('9OZEA6SRC4', '', '1701413432', 'admin', '37.111.159.61', '{\"action\":\"add\",\"invoiceId\":\"VM4HVFDZZM\"}', '[]', 'invoices.php', 'https://projects.anomoz.com/ke/smsCampaigner/invoices.php?action=add&invoiceId=VM4HVFDZZM');
INSERT INTO smsCampaigner_log VALUES ('XXWU2JK44M', '', '1701413434', 'admin', '37.111.159.61', '[]', '[]', 'invoices.php', 'https://projects.anomoz.com/ke/smsCampaigner/invoices.php?');
INSERT INTO smsCampaigner_log VALUES ('DVOU9QRHDP', '', '1701413438', 'admin', '37.111.159.61', '{\"view\":\"VM4HVFDZZM\"}', '[]', 'invoices.php', 'https://projects.anomoz.com/ke/smsCampaigner/invoices.php?view=VM4HVFDZZM');
INSERT INTO smsCampaigner_log VALUES ('LV24DACQCM', '', '1701413445', 'admin', '37.111.159.61', '[]', '[]', 'invoices.php', 'https://projects.anomoz.com/ke/smsCampaigner/invoices.php?');
INSERT INTO smsCampaigner_log VALUES ('0R0XQHEAUK', '', '1701413609', 'admin', '37.111.159.61', '{\"action\":\"add\"}', '[]', 'invoices.php', 'https://projects.anomoz.com/ke/smsCampaigner/invoices.php?action=add');
INSERT INTO smsCampaigner_log VALUES ('0VW44EMWDD', '', '1701413722', 'admin', '37.111.159.61', '[]', '[]', 'invoices.php', 'https://projects.anomoz.com/ke/smsCampaigner/invoices.php');
INSERT INTO smsCampaigner_log VALUES ('J500KGM212', '', '1701413771', 'admin', '37.111.159.61', '[]', '[]', 'invoices.php', 'https://projects.anomoz.com/ke/smsCampaigner/invoices.php?');
INSERT INTO smsCampaigner_log VALUES ('0U452QKCO1', '', '1701413776', 'admin', '37.111.159.61', '{\"view\":\"Q8YEGJGAUB\"}', '[]', 'invoices.php', 'https://projects.anomoz.com/ke/smsCampaigner/invoices.php?view=Q8YEGJGAUB');
INSERT INTO smsCampaigner_log VALUES ('M7TLCKGM9S', '', '1701413779', 'admin', '37.111.159.61', '[]', '[]', 'invoices.php', 'https://projects.anomoz.com/ke/smsCampaigner/invoices.php?');
INSERT INTO smsCampaigner_log VALUES ('5CUEORYO26', '', '1701413782', 'admin', '37.111.159.61', '{\"action\":\"add\",\"invoiceId\":\"YGOKF2G17Q\"}', '[]', 'invoices.php', 'https://projects.anomoz.com/ke/smsCampaigner/invoices.php?action=add&invoiceId=YGOKF2G17Q');
INSERT INTO smsCampaigner_log VALUES ('FO4KVYPGF3', '', '1701413878', 'admin', '37.111.159.61', '[]', '[]', 'invoices.php', 'https://projects.anomoz.com/ke/smsCampaigner/invoices.php?');
INSERT INTO smsCampaigner_log VALUES ('2FGUEP9LEA', '', '1701414216', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('XK2DZZ10JT', '', '1701414217', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('R70RX5DTFP', '', '1701414233', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('KWPT5OAI23', '', '1701414233', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('KDGQ6D5UKC', '', '1701414233', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('K4W04EA930', '', '1701414233', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('C84VHBCF33', '', '1701414331', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('OCYLOZZJFU', '', '1701414331', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('2WF1JH7971', '', '1701414338', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('YVY3NJAMTU', '', '1701414339', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('6YWLWBFIL1', '', '1701414339', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('02LH3IAMBA', '', '1701414339', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('LQ5P7MK2P1', '', '1701414919', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('SC2FA3O5C9', '', '1701414920', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('6IZ1VWHXB9', '', '1701414933', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('UYCZYPELNH', '', '1701414934', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('IR4V1FVFKB', '', '1701414934', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('X7IACAIU1R', '', '1701414934', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('NIN8QBA63Q', '', '1701415534', 'admin', '39.61.57.10', '[]', '[]', 'cruds.php', 'https://projects.anomoz.com/ke/smsCampaigner/cruds.php');
INSERT INTO smsCampaigner_log VALUES ('VVHWD13O82', '', '1701415551', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('QLDOMRTDTM', '', '1701415552', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('H83OB9L1Y9', '', '1701415571', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('V5MX6SOTLU', '', '1701415571', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('TO3DGRJ0I5', '', '1701415571', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('8WSIH03P5E', '', '1701415571', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('K0MED7LEZE', '', '1701420472', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('YFFXNB0P3C', '', '1701420472', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('3LRE3I53I0', '', '1701422539', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('82QRYA964W', '', '1701422873', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('84VO7AA67G', '', '1701422874', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('UDLN6RVBYX', '', '1701422897', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('77XYG4KVSY', '', '1701422898', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('NXIADQVNF1', '', '1701422898', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('QGCRZX2ZRS', '', '1701422898', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('EC21OF7DCK', '', '1701424078', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('Z35GH55OKD', '', '1701428538', 'admin', '119.73.96.2', '[]', '[]', 'email_templates.php', 'https://projects.anomoz.com/ke/smsCampaigner/email_templates.php');
INSERT INTO smsCampaigner_log VALUES ('QLM50U6LV3', '', '1701436003', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('EMBQ3FUAFM', '', '1701436003', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('TR7ZD2SWX2', '', '1701436013', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('S16X4ZXRDV', '', '1701436013', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('ML8N4V32BY', '', '1701436013', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('RV8QWIWHN0', '', '1701436014', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('P258QQSAMW', '', '1701444865', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('N5V1ZR7RH7', '', '1701446032', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('WG7XM14JGX', '', '1701448031', 'admin', '103.69.57.208', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner//home.php');
INSERT INTO smsCampaigner_log VALUES ('NRSHP8X5T8', '', '1701448075', 'admin', '103.69.57.208', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('S3AIO1UDK5', '', '1701448089', 'admin', '103.69.57.208', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('FWOADYHWP8', '', '1701448634', 'admin', '103.69.57.208', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('ACUIR783T0', '', '1701450278', '', '39.35.38.110', '{\"demo\":\"1\"}', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner//login.php?demo=1');
INSERT INTO smsCampaigner_log VALUES ('4RMVTM778K', '', '1701450285', '', '39.35.38.110', '{\"demo\":\"1\"}', '{\"email\":\"admin@portal.com\",\"password\":\"123\",\"login\":\"Sign In\"}', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner//login.php?demo=1');
INSERT INTO smsCampaigner_log VALUES ('VB0KQJSP7T', '', '1701450286', 'admin', '39.35.38.110', '{\"code\":\"1\",\"redir\":\"./home.php?\"}', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner//login.php?code=1&redir=.%2Fhome.php%3F');
INSERT INTO smsCampaigner_log VALUES ('0UY9IWMHBW', '', '1701450286', 'admin', '39.35.38.110', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner//home.php');
INSERT INTO smsCampaigner_log VALUES ('0XEA799PY1', '', '1701450302', 'admin', '39.35.38.110', '[]', '[]', 'customers.php', 'https://projects.anomoz.com/ke/smsCampaigner//customers.php');
INSERT INTO smsCampaigner_log VALUES ('9B4GLILAL2', '', '1701450306', 'admin', '39.35.38.110', '[]', '[]', 'customers.php', 'https://projects.anomoz.com/ke/smsCampaigner//customers.php');
INSERT INTO smsCampaigner_log VALUES ('13POK88J6Z', '', '1701450318', 'admin', '39.35.38.110', '{\"delete-record\":\"BME7GVQE7C\"}', '[]', 'customers.php', 'https://projects.anomoz.com/ke/smsCampaigner//customers.php?delete-record=BME7GVQE7C');
INSERT INTO smsCampaigner_log VALUES ('EZ08QN68XD', '', '1701450324', 'admin', '39.35.38.110', '{\"delete-record\":\"BME7GVQE7C\"}', '[]', 'customers.php', 'https://projects.anomoz.com/ke/smsCampaigner//customers.php?delete-record=BME7GVQE7C');
INSERT INTO smsCampaigner_log VALUES ('X301PCVMSW', '', '1701450331', 'admin', '39.35.38.110', '{\"delete-record\":\"BME7GVQE7C\"}', '{\"delete_bulk\":[\"T62I775FUF\",\"AXVOUWFEEJ\",\"44Q0JNA1ET\"]}', 'customers.php', 'https://projects.anomoz.com/ke/smsCampaigner//customers.php?delete-record=BME7GVQE7C');
INSERT INTO smsCampaigner_log VALUES ('YPBJN5S4EJ', '', '1701450338', 'admin', '39.35.38.110', '{\"delete-record\":\"BME7GVQE7C\"}', '{\"delete_bulk\":[\"ZGA6AJKRFS\",\"9J7E3ZHAUM\",\"S11GRXNWJ0\",\"KDWIYLHGGN\",\"FKHGRGQNV2\",\"BJ61TKWEDL\",\"SZCQ17TS4A\",\"QH1PR59X5O\",\"TMAE0W7T6C\"]}', 'customers.php', 'https://projects.anomoz.com/ke/smsCampaigner//customers.php?delete-record=BME7GVQE7C');
INSERT INTO smsCampaigner_log VALUES ('JNRBQOGKLU', '', '1701450351', 'admin', '39.35.38.110', '[]', '[]', 'customer_fields.php', 'https://projects.anomoz.com/ke/smsCampaigner//customer_fields.php');
INSERT INTO smsCampaigner_log VALUES ('FR6PGP2JGW', '', '1701450366', 'admin', '39.35.38.110', '[]', '[]', 'leave_manager.php', 'https://projects.anomoz.com/ke/smsCampaigner//leave_manager.php');
INSERT INTO smsCampaigner_log VALUES ('V296LDHTQ8', '', '1701450374', 'admin', '39.35.38.110', '{\"id\":\"NU3BS0RYQG\",\"action\":\"accept\"}', '[]', 'leave_manager.php', 'https://projects.anomoz.com/ke/smsCampaigner//leave_manager.php?id=NU3BS0RYQG&action=accept');
INSERT INTO smsCampaigner_log VALUES ('UBK9SWXTYL', '', '1701450374', 'admin', '39.35.38.110', '{\"m\":\"Data was saved successfully!\"}', '[]', 'leave_manager.php', 'https://projects.anomoz.com/ke/smsCampaigner//leave_manager.php?m=Data%20was%20saved%20successfully!');
INSERT INTO smsCampaigner_log VALUES ('1KIFNPCTTH', '', '1701450377', 'admin', '39.35.38.110', '{\"id\":\"NU3BS0RYQG\",\"action\":\"reject\"}', '[]', 'leave_manager.php', 'https://projects.anomoz.com/ke/smsCampaigner//leave_manager.php?id=NU3BS0RYQG&action=reject');
INSERT INTO smsCampaigner_log VALUES ('V44C34GRXU', '', '1701450377', 'admin', '39.35.38.110', '{\"m\":\"Data was saved successfully!\"}', '[]', 'leave_manager.php', 'https://projects.anomoz.com/ke/smsCampaigner//leave_manager.php?m=Data%20was%20saved%20successfully!');
INSERT INTO smsCampaigner_log VALUES ('WTX5HGF472', '', '1701450383', 'admin', '39.35.38.110', '[]', '[]', 'products.php', 'https://projects.anomoz.com/ke/smsCampaigner//products.php');
INSERT INTO smsCampaigner_log VALUES ('COHJUP6KVL', '', '1701462605', '', '40.77.167.8', '[]', '[]', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner/employees.php');
INSERT INTO smsCampaigner_log VALUES ('G9GWZC74TK', '', '1701465544', '', '103.174.81.54', '[]', '[]', 'xmlrpc.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php/xmlrpc.php');
INSERT INTO smsCampaigner_log VALUES ('RZQAY707JD', '', '1701465545', '', '160.155.107.193', '[]', '[]', 'xmlrpc.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php/xmlrpc.php');
INSERT INTO smsCampaigner_log VALUES ('M12KPNP6OH', '', '1701465546', '', '103.174.81.54', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php/');
INSERT INTO smsCampaigner_log VALUES ('9LVCP55HK9', '', '1701465547', '', '160.155.107.193', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php/');
INSERT INTO smsCampaigner_log VALUES ('TV55B0SKOV', '', '1701475772', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('VDSYTJY480', '', '1701494651', 'admin', '38.7.182.131', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('I5VU8BIQKE', '', '1701494651', 'admin', '38.7.182.131', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('OS1DQZUOK1', '', '1701494651', 'admin', '38.7.182.131', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('21GL2QL1UX', '', '1701494659', 'admin', '38.7.182.131', '[]', '[]', 'analytics.php', 'https://projects.anomoz.com/ke/smsCampaigner/analytics.php');
INSERT INTO smsCampaigner_log VALUES ('OQM7RCXEGV', '', '1701499276', 'admin', '103.69.57.154', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('ECJA9RCO83', '', '1701499277', 'admin', '103.69.57.154', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('56ZKVEI2Y9', '', '1701499277', 'admin', '103.69.57.154', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('VFTZFO35EX', '', '1701500227', 'admin', '103.69.57.154', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('2DVSPVP2ZQ', '', '1701502665', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('ETEJ733ZFM', '', '1701506360', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('8FYWBLUCFN', '', '1701506360', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('GM46G7Z5SO', '', '1701506366', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('QXN2JOT67M', '', '1701506366', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('F4Y3IC5R8R', '', '1701506377', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('5UF4XDZNLW', '', '1701506377', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('SSVK40C9AQ', '', '1701506377', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('B5P62VZ9ZC', '', '1701506377', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('0FLK3763C3', '', '1701509729', 'admin', '202.59.12.10', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('79K5LQXA19', '', '1701509729', 'admin', '202.59.12.10', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('UOXB116437', '', '1701509729', 'admin', '202.59.12.10', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('PV7OGNMZ3W', '', '1701509733', 'admin', '202.59.12.10', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('36874WPX8M', '', '1701511194', 'admin', '202.59.12.10', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('HQY332UDM7', '', '1701514770', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('G3URJV0VVX', '', '1701516531', 'admin', '124.29.239.131', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('7GBV5QEY68', '', '1701516554', 'admin', '124.29.239.131', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('D2RDAVZVIG', '', '1701516785', '', '52.167.144.219', '[]', '[]', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner/employees.php');
INSERT INTO smsCampaigner_log VALUES ('7CC8EB5VGG', '', '1701516786', '', '52.167.144.219', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('R7YH29PGA5', '', '1701516787', '', '52.167.144.219', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('09XH8SGAP1', '', '1701516883', 'admin', '124.29.239.131', '[]', '[]', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner/employees.php');
INSERT INTO smsCampaigner_log VALUES ('E5AIAX5BEI', '', '1701521392', 'admin', '202.59.12.10', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('5JS5LPSCB1', '', '1701526697', '', '216.244.66.228', '[]', '[]', 'signup.php', 'https://projects.anomoz.com/ke/smsCampaigner/signup.php');
INSERT INTO smsCampaigner_log VALUES ('WR138ILK3F', '', '1701540368', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('1N24AQ11JK', '', '1701540369', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('GEJ2TV8NLE', '', '1701540419', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('N2QBJMW8LC', '', '1701540419', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('XU1FFK0L4K', '', '1701540419', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('HZ7AEB4MXX', '', '1701540420', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('GM4WZPNFJO', '', '1701555592', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('N5KF8T619S', '', '1701556410', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('SGTU5D1TUT', '', '1701559922', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('IJ4Q6YACS0', '', '1701563733', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('MEXQZ0H33X', '', '1701589190', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('51KFZES95H', '', '1701592761', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('UAE1RCGJRR', '', '1701592761', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('N5Y94KCA6T', '', '1701594327', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('QYG4H4IBAZ', '', '1701619203', 'admin', '124.29.239.131', '[]', '[]', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner/employees.php');
INSERT INTO smsCampaigner_log VALUES ('GFAHZMA1LG', '', '1701619212', 'admin', '124.29.239.131', '{\"id\":\"5VMITU7EMO\"}', '[]', 'view_user.php', 'https://projects.anomoz.com/ke/smsCampaigner/view_user.php?id=5VMITU7EMO');
INSERT INTO smsCampaigner_log VALUES ('30YPL4B6UM', '', '1701619215', 'admin', '124.29.239.131', '[]', '[]', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner/employees.php');
INSERT INTO smsCampaigner_log VALUES ('OYEF6NPMG9', '', '1701619218', 'admin', '124.29.239.131', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('S2UM77OPE4', '', '1701619236', 'admin', '124.29.239.131', '[]', '[]', 'customers.php', 'https://projects.anomoz.com/ke/smsCampaigner/customers.php');
INSERT INTO smsCampaigner_log VALUES ('TVBCZ36ZFI', '', '1701619249', 'admin', '124.29.239.131', '[]', '{\"name\":\"j\",\"email\":\"j@j.com\",\"password\":\"123\",\"phone\":\"j\",\"address\":\"\r\n\r\n\",\"role\":\"customer\",\"actionId\":\"\",\"create_package\":\"Submit\"}', 'customers.php', 'https://projects.anomoz.com/ke/smsCampaigner/customers.php');
INSERT INTO smsCampaigner_log VALUES ('YOAVYXA5KJ', '', '1701619250', 'admin', '124.29.239.131', '{\"m\":\"Data was saved successfully!\"}', '[]', 'customers.php', 'https://projects.anomoz.com/ke/smsCampaigner/customers.php?m=Data%20was%20saved%20successfully!');
INSERT INTO smsCampaigner_log VALUES ('SN9PFGOCH8', '', '1701619254', 'admin', '124.29.239.131', '{\"delete-record\":\"2Q4HCVZPVX\"}', '[]', 'customers.php', 'https://projects.anomoz.com/ke/smsCampaigner/customers.php?delete-record=2Q4HCVZPVX');
INSERT INTO smsCampaigner_log VALUES ('MJ6KYXBGYO', '', '1701645204', '', '103.160.236.246', '[]', '[]', 'xmlrpc.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php/xmlrpc.php');
INSERT INTO smsCampaigner_log VALUES ('KJJRPB6267', '', '1701645206', '', '117.232.77.219', '[]', '[]', 'xmlrpc.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php/xmlrpc.php');
INSERT INTO smsCampaigner_log VALUES ('THSBQ73NYD', '', '1701645206', '', '103.160.236.246', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php/');
INSERT INTO smsCampaigner_log VALUES ('RR1622OQKZ', '', '1701645207', '', '117.232.77.219', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php/');
INSERT INTO smsCampaigner_log VALUES ('KVS1M7KWFC', '', '1701650273', '', '216.244.66.228', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('7EH1R1VIDW', '', '1701653276', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('TR2EAKU0NM', '', '1701661003', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('E29A4EGQ5U', '', '1701663844', '', '172.93.111.252', '[]', '[]', 'signup.php', 'https://projects.anomoz.com/ke/smsCampaigner//signup.php');
INSERT INTO smsCampaigner_log VALUES ('SUT60V3RPT', '', '1701663844', '', '172.93.111.252', '{\"demo\":\"1\"}', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner//login.php?demo=1');
INSERT INTO smsCampaigner_log VALUES ('D71RBI8FRZ', '', '1701663844', '', '172.93.111.252', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner//login.php');
INSERT INTO smsCampaigner_log VALUES ('S6PQXB6WTC', '', '1701669180', 'admin', '43.242.178.181', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('7MGY5RLLBI', '', '1701669188', 'admin', '43.242.178.181', '[]', '[]', 'settings.php', 'https://projects.anomoz.com/ke/smsCampaigner/settings.php');
INSERT INTO smsCampaigner_log VALUES ('Z4WJLAARRQ', '', '1701674266', 'admin', '182.190.216.118', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('Y0V1MB7C48', '', '1701674266', 'admin', '182.190.216.118', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('K1HG83LQGV', '', '1701674267', 'admin', '182.190.216.118', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('ZUZVJV7VPY', '', '1701676811', '', '47.184.31.250', '[]', '[]', 'signup.php', 'https://projects.anomoz.com/ke/smsCampaigner//signup.php');
INSERT INTO smsCampaigner_log VALUES ('ZXEB2SI63O', '', '1701679641', '', '40.77.167.32', '[]', '[]', 'signup.php', 'https://projects.anomoz.com/ke/smsCampaigner/signup');
INSERT INTO smsCampaigner_log VALUES ('3SPUMN3HAB', '', '1701680527', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('BF45Q90EEM', '', '1701680527', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('F474E56H9X', '', '1701680538', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('PDFPBH6OJN', '', '1701680538', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('KRLRNAZNZK', '', '1701680538', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('1N93SWGP9M', '', '1701680539', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('175ZHKW7EL', '', '1701683180', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('2U0PCJOVA4', '', '1701683181', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('RMVNSYDNHO', '', '1701683202', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('B5YLQQXVJA', '', '1701683202', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('MPEMF8A9TY', '', '1701683202', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('3CSMOWI5BH', '', '1701683202', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('O1725JNK3O', '', '1701687216', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('UZGPP94UFQ', '', '1701687217', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('JCPF2W05L3', '', '1701687237', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('GE66XHKIJ8', '', '1701687238', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('UVS0DAVP79', '', '1701687238', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('3FKVDU42QG', '', '1701687238', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('BL0KUW4YZT', '', '1701688971', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('9Z2BJO1W2K', '', '1701688972', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('GOFUIZ0EYL', '', '1701688988', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('UZWV2G7UE6', '', '1701688988', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('8NVUY3MM0Z', '', '1701688988', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('VMQY0F6RF6', '', '1701688988', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('J07QU3YADF', '', '1701693588', 'admin', '182.178.2.66', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('IL5SIP0P29', '', '1701693616', 'admin', '182.178.2.66', '[]', '[]', 'products.php', 'https://projects.anomoz.com/ke/smsCampaigner/products.php');
INSERT INTO smsCampaigner_log VALUES ('84ESLARX25', '', '1701693698', 'admin', '182.178.2.66', '[]', '[]', 'products.php', 'https://projects.anomoz.com/ke/smsCampaigner/products.php');
INSERT INTO smsCampaigner_log VALUES ('DH0ULPLL67', '', '1701696053', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('TD51TG3KXI', '', '1701696054', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('WB6X6GX4QU', '', '1701696081', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('VC3TUIRJW0', '', '1701696081', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('PB4F3GGJJZ', '', '1701696081', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('TZR87ZR314', '', '1701696081', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('OSJSE1IAF1', '', '1701696391', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('33CN1H2N9H', '', '1701696391', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('DO48NT3LVJ', '', '1701696406', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('3A1NI143A1', '', '1701696406', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('CB9PUW4OHO', '', '1701696407', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('SW57MFRIBN', '', '1701696407', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('56X61G9U8Q', '', '1701696607', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('0R4IR7OOG9', '', '1701696608', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('E9I4CIQACT', '', '1701696624', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('3ESYXO3TVG', '', '1701696624', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('XE8AM2PDFV', '', '1701696624', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('3IPIE1NHRZ', '', '1701696624', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('CYUPAZB85B', '', '1701697044', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('FPSZG2IOX9', '', '1701697044', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('6PMY72NFCV', '', '1701697058', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('VEW9XI5PRL', '', '1701697058', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('JZGR2ZLU77', '', '1701697059', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('0SS1GSM117', '', '1701697059', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('Q6WASKROS3', '', '1701697116', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('QJL6868MLB', '', '1701697117', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('T1LLZUOG4S', '', '1701697133', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('X925PA0E94', '', '1701697134', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('EYXSXE5AN3', '', '1701697134', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('OVZOHYYZ4L', '', '1701697134', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('VUEUJU1HH7', '', '1701697412', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('QF79BK0G5E', '', '1701697413', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('V0PHGEG116', '', '1701697428', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('Z5IDFQ3JXM', '', '1701697428', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('E1IBA49ZD5', '', '1701697428', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('0E3FKQPLO1', '', '1701697428', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('XBM87XGS82', '', '1701697603', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('LOQ0APLXMK', '', '1701697603', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('N3HBHD5MBD', '', '1701697617', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('S4VTM7V42G', '', '1701697618', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('4R37CQVWDQ', '', '1701697618', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('544Y34RH70', '', '1701697618', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('OTHT0LWDXL', '', '1701702443', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('3VLZZS87KB', '', '1701702444', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('MQEW072877', '', '1701702459', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('2AW02ULRN1', '', '1701702459', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('9VTDD1V24P', '', '1701702459', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('9LCMUGUJAG', '', '1701702460', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('LKPMCPRGOO', '', '1701740185', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('VBG2JNFV7R', '', '1701752545', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('SYZ52Q2SMB', '', '1701752546', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('Y5IEN0QMZN', '', '1701752573', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('DATW9VWISC', '', '1701752573', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('DOQS29SYME', '', '1701752573', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('YJGN0AAHCJ', '', '1701752573', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('C3FN0URDRE', '', '1701752607', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('JRP7GSVX27', '', '1701752608', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('0NE4EEO60Q', '', '1701752623', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('21Q5V9O7RX', '', '1701752623', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('TIJMK9HQ44', '', '1701752623', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('1AAF9Y0VLP', '', '1701752623', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('KDECG1XBQ2', '', '1701755794', '', '35.243.199.229', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('E5QATDNZF1', '', '1701756978', '', '34.75.7.172', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('61IC3PC77I', '', '1701759808', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('1BJYR43PR0', '', '1701759808', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('WBQI18JEY4', '', '1701759983', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('MJS19DIHG4', '', '1701759983', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('PFF7MS14RN', '', '1701760012', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('MV1BZGNZCV', '', '1701760012', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('V0970GZIYL', '', '1701760013', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('5V0FUEJSYE', '', '1701760013', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('4DF8PB8LW6', '', '1701760723', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('DMH1YAMN1E', '', '1701760724', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('NJ1Q4DUMTB', '', '1701760749', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('DAGZEKCMET', '', '1701760749', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('WIAHSNL2DJ', '', '1701760749', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('0MGF91CRVD', '', '1701760750', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('0CJYVJBFJD', '', '1701760866', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('N61AOX37BD', '', '1701760867', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('EAM75Q1RGJ', '', '1701761115', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('ZJLPTEHOPX', '', '1701761115', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('XCSJY91OFQ', '', '1701763327', '', '35.190.182.61', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('HDA9JBLIZY', '', '1701763327', '', '35.190.182.61', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('AN58TRT7CY', '', '1701765100', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('ETLW6B1H4T', '', '1701765101', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('815SKAIFUJ', '', '1701765125', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('1O69ZZ67YZ', '', '1701765125', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('0IJ2STMUIT', '', '1701765125', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('IT6AIFL307', '', '1701765125', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('GE6T4JC2KA', '', '1701768404', '', '34.138.31.210', '{\"demo\":\"1\"}', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php?demo=1');
INSERT INTO smsCampaigner_log VALUES ('3UNLRSUCOF', '', '1701769073', '', '34.138.31.210', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('2088J1164S', '', '1701769073', '', '34.138.31.210', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('MAVXV4D5L4', '', '1701769073', '', '34.138.31.210', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('T7DCK3XQAN', '', '1701770544', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('2A4ETQ8HA7', '', '1701770651', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('IJION0S85B', '', '1701770799', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('8LXF5R10WO', '', '1701770919', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('50DUMDJGOW', '', '1701771407', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('U307VYRD8Y', '', '1701771408', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('7RHJ0WHUOY', '', '1701771460', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('HKK6NAUUMR', '', '1701771461', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('OYGEZO077A', '', '1701771461', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('7ZY8I0U6IO', '', '1701771461', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('KTJTJFH7GE', '', '1701772197', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('G59SER4X16', '', '1701772198', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('ODI2JHZ9PM', '', '1701778781', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('MZ4UZ67VST', '', '1701778782', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('XJIJQMHMYX', '', '1701778809', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('L9GF8378B5', '', '1701778809', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('W7FT7UKYLR', '', '1701778809', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('R4E3CTHECG', '', '1701778809', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('UGPEAV5F2S', '', '1701780195', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('NGUCGW0FLH', '', '1701780195', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('QE6LU52N9D', '', '1701780247', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('E9JRCMMQO2', '', '1701780247', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('GAR07Q2MCH', '', '1701780247', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('PF3N3IXC4M', '', '1701780247', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('OKNJZB6636', '', '1701780414', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('PYVMMQ9U77', '', '1701780415', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('2E0S6O21U1', '', '1701780457', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('6U5MFZOL3F', '', '1701780458', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('3OF78YGRY0', '', '1701780458', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('NDIMSNYCGF', '', '1701780458', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('Q7MCGMFV3W', '', '1701781253', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('45ZSVCJGG3', '', '1701781254', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('QKZBICTKJ4', '', '1701781271', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('8A0QVGFFEP', '', '1701781271', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('RSE2YFAYRW', '', '1701781271', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('APLNUH9G9T', '', '1701781271', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('AYOCS3480Y', '', '1701782240', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('VD2H1ZMBC8', '', '1701782241', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('HSY9WKL754', '', '1701782275', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('07TPVDNMVE', '', '1701782275', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('B81YXFPK89', '', '1701782275', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('H4JUR8XMBZ', '', '1701782275', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('SA26PWIA59', '', '1701782604', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('IF6KQF3DIO', '', '1701782605', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('AVPYIHSTLW', '', '1701782631', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('CV0UETS5DI', '', '1701782631', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('MGBLBTGEHV', '', '1701782631', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('RZBXGWLV19', '', '1701782632', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('GIIM929RYZ', '', '1701799003', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('X0PWAMW3Q6', '', '1701799004', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('3OV3N6VHEN', '', '1701799062', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('YC9QRHKX41', '', '1701799063', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('PWXD4R6O83', '', '1701799119', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('JY8N4XFBR7', '', '1701799119', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('S8WRCRIOWJ', '', '1701799119', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('X5WUUBS0ZK', '', '1701799119', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('KTUX0SRJGY', '', '1701826477', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('YDG90NUCW1', '', '1701845859', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('IGE234CVPT', '', '1701845860', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('NNHVZCPWZL', '', '1701845870', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('5IOP67KY83', '', '1701845870', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('GODLWGN25Z', '', '1701845871', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('EMI5CO7WAZ', '', '1701845871', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('XGK9YD2FUU', '', '1701846209', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('MP3L7A19V2', '', '1701846209', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('AKRQUPAU8S', '', '1701847267', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('2XDAXVD9V9', '', '1701847267', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('USP3U3VN1Y', '', '1701847517', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('WUUST355IT', '', '1701847517', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('9KEPR71OPB', '', '1701852295', '', '157.55.39.53', '[]', '[]', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner/employees.php');
INSERT INTO smsCampaigner_log VALUES ('W9UZAE68YL', '', '1701852295', '', '157.55.39.53', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('6EQJX3RU8S', '', '1701852296', '', '157.55.39.53', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('Z30T2JDZ16', '', '1701852297', '', '157.55.39.53', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('S71645IL8E', '', '1701852297', '', '157.55.39.53', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('UFM6LYOVIO', '', '1701852305', '', '157.55.39.53', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('VMLPGA6GJA', '', '1701858597', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('LHBJM5XEPI', '', '1701858598', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('6YGGVRNIRE', '', '1701862614', 'admin', '182.178.9.218', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('H7RLZ5V2DL', '', '1701862620', 'admin', '182.178.9.218', '[]', '[]', 'invoices.php', 'https://projects.anomoz.com/ke/smsCampaigner/invoices.php');
INSERT INTO smsCampaigner_log VALUES ('OVMH9KNX7G', '', '1701862623', 'admin', '182.178.9.218', '{\"view\":\"VM4HVFDZZM\"}', '[]', 'invoices.php', 'https://projects.anomoz.com/ke/smsCampaigner/invoices.php?view=VM4HVFDZZM');
INSERT INTO smsCampaigner_log VALUES ('IQPB2LAZ4D', '', '1701865104', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('Y9JBJHV8LI', '', '1701865105', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('XK5EZUVLB2', '', '1701865121', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('RS6FVHW3A6', '', '1701865121', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('SJ15TLHDTF', '', '1701865121', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('TDA7B9FXJQ', '', '1701865121', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('BAD0TQJFVW', '', '1701865838', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('IZUQ07WS62', '', '1701865838', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('W1ANWFEH22', '', '1701865853', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('XQGRZBQBHP', '', '1701865853', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('8YD3FZJMO6', '', '1701865853', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('OEY3UCX7SM', '', '1701865853', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('QVEU4ZLS5H', '', '1701866348', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('WFHHBHL72D', '', '1701866349', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('MBPNZ348MI', '', '1701866368', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('68Q25QDO0Y', '', '1701866368', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('7911OTS3JJ', '', '1701866368', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('4UW0PNKVUM', '', '1701866368', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('QU9PVDILKJ', '', '1701867007', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('H6U7F21EBT', '', '1701867007', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('Y98W6J50GN', '', '1701867021', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('2OT0HCJRSB', '', '1701867021', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('JTBW3Q2A6M', '', '1701867021', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('HJQ79ARVGZ', '', '1701867022', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('6T3XDPUIII', '', '1701867101', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('520LVF10ZG', '', '1701867101', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('QIDYA4UFJE', '', '1701867117', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('KO235AJPGU', '', '1701867117', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('Y8P1HPUTD1', '', '1701867117', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('GT5DZBIDL6', '', '1701867117', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('1QQ0CKAJYW', '', '1701872694', 'admin', '119.73.96.69', '[]', '[]', 'analytics.php', 'https://projects.anomoz.com/ke/smsCampaigner/analytics.php');
INSERT INTO smsCampaigner_log VALUES ('ANX43BQ2IH', '', '1701875623', 'WE8HQFFNSE', '119.73.96.69', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('4DMKBULT95', '', '1701875623', 'WE8HQFFNSE', '119.73.96.69', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('GIP7U0FA2P', '', '1701875623', 'WE8HQFFNSE', '119.73.96.69', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('SBHNJLD4X4', '', '1701875740', 'WE8HQFFNSE', '119.73.96.69', '[]', '[]', 'settings.php', 'https://projects.anomoz.com/ke/smsCampaigner/settings.php');
INSERT INTO smsCampaigner_log VALUES ('Q713N0EGBE', '', '1701878678', 'admin', '124.29.239.131', '{\"delete-record\":\"2Q4HCVZPVX\"}', '[]', 'customers.php', 'https://projects.anomoz.com/ke/smsCampaigner/customers.php?delete-record=2Q4HCVZPVX');
INSERT INTO smsCampaigner_log VALUES ('N8EVXXAAPV', '', '1701878698', 'admin', '124.29.239.131', '[]', '[]', 'email_inbox.php', 'https://projects.anomoz.com/ke/smsCampaigner/email_inbox.php');
INSERT INTO smsCampaigner_log VALUES ('3GCIM63R8M', '', '1701878725', 'admin', '124.29.239.131', '[]', '[]', 'leads.php', 'https://projects.anomoz.com/ke/smsCampaigner/leads.php');
INSERT INTO smsCampaigner_log VALUES ('MVLS9VY4IJ', '', '1701878729', 'admin', '124.29.239.131', '{\"archived\":\"1\"}', '[]', 'leads.php', 'https://projects.anomoz.com/ke/smsCampaigner/leads.php?archived=1');
INSERT INTO smsCampaigner_log VALUES ('7IN6KPB7DN', '', '1701878837', 'admin', '124.29.239.131', '{\"archived\":\"1\"}', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php?archived=1');
INSERT INTO smsCampaigner_log VALUES ('6TDN0HOE53', '', '1701878837', 'admin', '124.29.239.131', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('TET2VCPJUD', '', '1701878840', 'admin', '124.29.239.131', '{\"logout\":\"1\"}', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/?logout=1');
INSERT INTO smsCampaigner_log VALUES ('Q51RD84AN7', '', '1701878840', '', '124.29.239.131', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('IAKJJH60LS', '', '1701878979', '', '124.29.239.131', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('4NMU0CMICM', '', '1701878983', '', '124.29.239.131', '[]', '[]', 'forget_password.php', 'https://projects.anomoz.com/ke/smsCampaigner/forget_password.php');
INSERT INTO smsCampaigner_log VALUES ('D99PJP6976', '', '1701878988', '', '124.29.239.131', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('6H9LZN55IJ', '', '1701879238', 'admin', '124.29.239.131', '[]', '{\"email\":\"admin@portal.com\",\"password\":\"123\",\"login\":\"Sign In\"}', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('3092V1N3QU', '', '1701879239', 'admin', '124.29.239.131', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('LOTHX9AKBM', '', '1701879263', 'admin', '124.29.239.131', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('A2RZ1HUJQ5', '', '1701879265', 'admin', '124.29.239.131', '[]', '[]', 'settings.php', 'https://projects.anomoz.com/ke/smsCampaigner/settings.php');
INSERT INTO smsCampaigner_log VALUES ('3OSF0HVDMB', '', '1701879586', 'admin', '124.29.239.131', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('LFRXYQ4S16', '', '1701879614', 'admin', '124.29.239.131', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('JUE8Y05TLJ', '', '1701879631', 'admin', '124.29.239.131', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('KKRS1ZDQOB', '', '1701879634', 'admin', '124.29.239.131', '[]', '[]', 'analytics.php', 'https://projects.anomoz.com/ke/smsCampaigner/analytics.php');
INSERT INTO smsCampaigner_log VALUES ('XEYG1BAN9E', '', '1701881710', 'admin', '124.29.239.131', '[]', '[]', 'analytics.php', 'https://projects.anomoz.com/ke/smsCampaigner/analytics.php');
INSERT INTO smsCampaigner_log VALUES ('THAD5Z0N5C', '', '1701881767', 'admin', '124.29.239.131', '[]', '[]', 'analytics.php', 'https://projects.anomoz.com/ke/smsCampaigner/analytics.php');
INSERT INTO smsCampaigner_log VALUES ('S52OS6SE3L', '', '1701882738', '', '124.29.239.131', '[]', '[]', 'analytics.php', 'https://projects.anomoz.com/ke/smsCampaigner/analytics.php');
INSERT INTO smsCampaigner_log VALUES ('3NC6OPLCOD', '', '1701882739', '', '124.29.239.131', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('I3H1K8G3LB', '', '1701882739', '', '124.29.239.131', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('Y94Y98FGGF', '', '1701882916', 'admin', '124.29.239.131', '[]', '[]', 'leads.php', 'https://projects.anomoz.com/ke/smsCampaigner/leads.php');
INSERT INTO smsCampaigner_log VALUES ('Y5A0TEGVTK', '', '1701882930', 'admin', '124.29.239.131', '[]', '{\"first_name\":\"ab\",\"last_name\":\"b\",\"email\":\"b\",\"phone\":\"b\",\"city\":\"b\",\"state\":\"bb\",\"address\":\"b\",\"notes\":\"b\",\"assign_employee\":\"admin\",\"assign_pipeline\":\"JFTPJW33A6\",\"actionId\":\"\",\"create_package\":\"Submit\"}', 'leads.php', 'https://projects.anomoz.com/ke/smsCampaigner/leads.php');
INSERT INTO smsCampaigner_log VALUES ('CI1PP4NOBI', '', '1701882936', 'admin', '124.29.239.131', '[]', '[]', 'leads.php', 'https://projects.anomoz.com/ke/smsCampaigner/leads.php');
INSERT INTO smsCampaigner_log VALUES ('22X468DVSO', '', '1701885405', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('WX1ALQIGRX', '', '1701885405', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('FC8JJPX3ES', '', '1701912181', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('Z73KYPEMUA', '', '1701928911', '', '40.77.167.54', '[]', '[]', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner/employees.php');
INSERT INTO smsCampaigner_log VALUES ('F58IBSJ1NA', '', '1701928912', '', '40.77.167.54', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('ZSZVCMGTHU', '', '1701928913', '', '40.77.167.54', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('FRMF0UR32M', '', '1701931204', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('FRKNCWRSO3', '', '1701931205', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('WNR4Q1T6ZX', '', '1701931281', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('NG4D7MYH70', '', '1701931281', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('QU4SNYST4A', '', '1701931281', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('TFD4V6KVER', '', '1701931281', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('M9LUE0TUQI', '', '1701932175', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('PYP2U4IM7J', '', '1701932176', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('AASHLG3AVA', '', '1701932195', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('LK268QFNQN', '', '1701932195', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('GGP9RQ55U9', '', '1701932210', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('7I67RGONNH', '', '1701932210', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('5FQ2X8E6MF', '', '1701932211', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('6TM0FHNSY5', '', '1701932211', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('9WUDIPKK7J', '', '1701932359', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('XFDDRDGOQ0', '', '1701932359', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('MNICYWHI3M', '', '1701932368', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('AWV3STTKGQ', '', '1701932368', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('RSBAXY9ON4', '', '1701932368', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('4CKMNV8J5T', '', '1701932369', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('ZW6EOUXSDM', '', '1701933031', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('C4GWBY8BN2', '', '1701933032', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('TBLIJ6L3DG', '', '1701933041', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('X0QC3QQC76', '', '1701933041', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('TJA3EP0TUX', '', '1701933041', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('S2FISAK5R7', '', '1701933041', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('45IT03Z8VH', '', '1701933405', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('RT82O6TAT4', '', '1701933405', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('Q8Y8EUB8CR', '', '1701933414', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('M51GZE5BOQ', '', '1701933415', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('H2F38CMWG9', '', '1701933415', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('1LXANCXDPO', '', '1701933415', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('D0GKF9KVZ3', '', '1701933672', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('94UZF4FKCS', '', '1701933672', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('9YIFR3ZR4W', '', '1701933689', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('BQE3QKD0RG', '', '1701933689', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('W6DJPU64QB', '', '1701933689', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('NVBGEQOZZN', '', '1701933689', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('1JK8R0WWD7', '', '1701944899', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('G6UTV373D6', '', '1701944900', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('4XMFITJE3V', '', '1701944937', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('J6N7UXMA00', '', '1701944937', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('ZAVZ26OV5B', '', '1701944937', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('MFAEXUKLG1', '', '1701944937', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('GYAOQHUQHE', '', '1701946207', 'admin', '103.244.178.36', '[]', '[]', 'email_templates.php', 'https://projects.anomoz.com/ke/smsCampaigner/email_templates.php');
INSERT INTO smsCampaigner_log VALUES ('WF2SPP1EDG', '', '1701948035', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('RN9ALTRBWD', '', '1701948036', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('ZUBPTVU394', '', '1701948071', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('J4GMLZZN41', '', '1701948071', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('F29I1JX9RA', '', '1701948071', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('TK3Y827ZD3', '', '1701948071', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('8BF7ZIN4XZ', '', '1701949644', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('VHKOCT2VI7', '', '1701949645', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('VQBCPE91OI', '', '1701949679', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('1AHTJJTKLS', '', '1701949680', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('1K3DLVPLAU', '', '1701949680', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('LQO7PZYQ21', '', '1701949680', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('RWBWFLIDVG', '', '1701950537', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('M0O2TKJR0H', '', '1701950538', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('S64V2574Y8', '', '1701950558', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('H50JV65AUD', '', '1701950559', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('HS6OU2X0G9', '', '1701950567', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('VJE66OYXKE', '', '1701950568', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('LF2ZD6ADBK', '', '1701950568', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('HPC3RR69Y4', '', '1701950568', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('2WD7FQHVMH', '', '1701950570', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('NFMNC65ZWX', '', '1701950571', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('GJUU0X6W9Y', '', '1701950827', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('S33S1B8460', '', '1701950860', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('BVMPA9IVXQ', '', '1701950867', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('WAVWQYDAPQ', '', '1701950878', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('NDC9LI2AJ5', '', '1701950914', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('JTZO3197B3', '', '1701950915', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('XQ1B6QAB5S', '', '1701950949', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('6OZCWGZ924', '', '1701950950', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('U9XWK7L53R', '', '1701951105', 'admin', '103.244.178.36', '[]', '[]', 'email_templates.php', 'https://projects.anomoz.com/ke/smsCampaigner/email_templates.php');
INSERT INTO smsCampaigner_log VALUES ('0VXNS3N4OC', '', '1701953012', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('2MH59LS1AH', '', '1701953013', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('RE9ZW1PAYJ', '', '1701953037', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('B5OWPAVP5R', '', '1701953038', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('N28D8FI6EW', '', '1701953073', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('ETLK905SD7', '', '1701953073', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('ERF40F6MEJ', '', '1701953157', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('2CA7AUSH88', '', '1701953158', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('NZ43J4Q16U', '', '1701955067', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('JR160A797E', '', '1701955067', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('8E86VZ8KUZ', '', '1701955067', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('HGO4M6OXL6', '', '1701955068', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('76S371RJMY', '', '1701955772', '', '182.178.9.218', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('LLS4C21A8F', '', '1701955777', '', '182.178.9.218', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('XL9YYGIB8W', '', '1701955777', '', '182.178.9.218', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('BSQFLB94QO', '', '1701955777', '', '182.178.9.218', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('74YRDYEQEB', '', '1701955789', '', '182.178.9.218', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('HD8X93XNTT', '', '1701955791', '', '182.178.9.218', '{\"logout\":\"1\"}', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/?logout=1');
INSERT INTO smsCampaigner_log VALUES ('PRUUSMXF3Y', '', '1701955792', '', '182.178.9.218', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('3LFPFBS9Q5', '', '1701955802', '', '182.178.9.218', '[]', '{\"email\":\"admin@portal.com\",\"password\":\"123\",\"login\":\"Sign In\"}', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('XM5RXOT5KG', '', '1701955806', 'admin', '182.178.9.218', '{\"code\":\"1\",\"redir\":\"./home.php?\"}', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php?code=1&redir=.%2Fhome.php%3F');
INSERT INTO smsCampaigner_log VALUES ('Q2FW8W57AX', '', '1701955806', 'admin', '182.178.9.218', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('80XSV91FZA', '', '1701956721', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('TI5XWP2TIH', '', '1701956722', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('999ZE8RF2L', '', '1701956776', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('Q28ER2I3BE', '', '1701956777', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('IQDB2NVHLC', '', '1701956777', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('0E1MAGWW17', '', '1701956777', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('4WEIM8S5AF', '', '1701956998', 'admin', '182.178.9.218', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('ZQFYWSBWPK', '', '1701957009', 'admin', '182.178.9.218', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('R50NMXPGLH', '', '1701965992', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('A12YPWV8UZ', '', '1701965993', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('PPM0NMEFEF', '', '1701966081', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('HCV2OXCHI8', '', '1701966081', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('7P73SEMFQX', '', '1701966081', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('ZKHH41CFUV', '', '1701966081', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('8UUQ4Z4JZZ', '', '1701980510', '', '52.167.144.179', '[]', '[]', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner/employees.php');
INSERT INTO smsCampaigner_log VALUES ('20GLOC7EV1', '', '1701980511', '', '52.167.144.179', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('841Z5V0RJX', '', '1701980513', '', '52.167.144.179', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('DBN7EWHWXE', '', '1701998513', '', '52.167.144.218', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('270HNA4DBA', '', '1701998514', '', '52.167.144.218', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('3RSQ3G04V5', '', '1701998515', '', '52.167.144.218', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('Y8RPFOQD7G', '', '1701998567', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('3THYUKGCOD', '', '1702010693', 'admin', '38.7.181.184', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('BSKEPBDCC5', '', '1702010694', 'admin', '38.7.181.184', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('0PWHWOLTY7', '', '1702010694', 'admin', '38.7.181.184', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('LI1DFDS631', '', '1702010704', 'admin', '38.7.181.184', '[]', '[]', 'campaigns.php', 'https://projects.anomoz.com/ke/smsCampaigner/campaigns.php');
INSERT INTO smsCampaigner_log VALUES ('O7AUFZBX7H', '', '1702010717', 'admin', '38.7.181.184', '{\"_camp\":\"QH5OP6HKYF\"}', '[]', 'campaignView.php', 'https://projects.anomoz.com/ke/smsCampaigner/campaignView.php?_camp=QH5OP6HKYF');
INSERT INTO smsCampaigner_log VALUES ('R4O44JYSDW', '', '1702011270', 'admin', '38.7.181.184', '[]', '[]', 'campaigns.php', 'https://projects.anomoz.com/ke/smsCampaigner/campaigns.php');
INSERT INTO smsCampaigner_log VALUES ('KRZNS82FIR', '', '1702011282', 'admin', '38.7.181.184', '[]', '{\"title\":\"test\",\"description\":\"123213\",\"emailSend\":\"\",\"actionId\":\"\",\"create_package\":\"Submit\"}', 'campaigns.php', 'https://projects.anomoz.com/ke/smsCampaigner/campaigns.php');
INSERT INTO smsCampaigner_log VALUES ('N0T0WKXPIY', '', '1702011282', 'admin', '38.7.181.184', '[]', '[]', 'campaigns.php', 'https://projects.anomoz.com/ke/smsCampaigner/campaigns.php?');
INSERT INTO smsCampaigner_log VALUES ('AC6LIPRPDP', '', '1702014974', '', '52.167.144.181', '[]', '[]', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner/employees.php');
INSERT INTO smsCampaigner_log VALUES ('59BO7KUQGE', '', '1702014975', '', '52.167.144.181', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('SIGDCDAM1C', '', '1702014976', '', '52.167.144.181', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('OC2AHMKUHA', '', '1702018499', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('GGR511BJ4T', '', '1702018500', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('AHLK8JN3JD', '', '1702018540', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('KY403O3LEP', '', '1702018540', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('GO6HODDUF1', '', '1702018540', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('4OJ5TPHKTQ', '', '1702018540', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('ZNFVN8CQC0', '', '1702018575', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('WT61GHJD2G', '', '1702018576', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('ZKQTDMQCHP', '', '1702019845', 'admin', '103.244.178.36', '[]', '[]', 'email_templates.php', 'https://projects.anomoz.com/ke/smsCampaigner/email_templates.php');
INSERT INTO smsCampaigner_log VALUES ('JORINKUL3L', '', '1702019894', 'admin', '103.244.178.36', '{\"id\":\"2\"}', '[]', 'email_templates.php', 'https://projects.anomoz.com/ke/smsCampaigner/email_templates.php?id=2');
INSERT INTO smsCampaigner_log VALUES ('15O9XQBHVR', '', '1702019918', 'admin', '103.244.178.36', '[]', '[]', 'email_templates.php', 'https://projects.anomoz.com/ke/smsCampaigner/email_templates.php');
INSERT INTO smsCampaigner_log VALUES ('YBWXVHYRWV', '', '1702019920', 'admin', '103.244.178.36', '{\"id\":\"2\"}', '[]', 'email_templates.php', 'https://projects.anomoz.com/ke/smsCampaigner/email_templates.php?id=2');
INSERT INTO smsCampaigner_log VALUES ('KMPZBYT63C', '', '1702027438', 'admin', '182.178.5.35', '[]', '[]', 'cruds.php', 'https://projects.anomoz.com/ke/smsCampaigner/cruds.php');
INSERT INTO smsCampaigner_log VALUES ('9GFYI7KY2O', '', '1702027890', 'admin', '182.178.5.35', '[]', '[]', 'cruds.php', 'https://projects.anomoz.com/ke/smsCampaigner/cruds.php');
INSERT INTO smsCampaigner_log VALUES ('MWSNANPZC6', '', '1702030309', 'admin', '103.244.178.36', '[]', '[]', 'email_inbox.php', 'https://projects.anomoz.com/ke/smsCampaigner/email_inbox.php');
INSERT INTO smsCampaigner_log VALUES ('X9ANKOHT8S', '', '1702030323', 'admin', '103.244.178.36', '[]', '[]', 'email_inbox.php', 'https://projects.anomoz.com/ke/smsCampaigner/email_inbox.php');
INSERT INTO smsCampaigner_log VALUES ('CM05TZDFEH', '', '1702030330', 'admin', '103.244.178.36', '{\"mail_id\":\"1ZSKEJLF37\"}', '[]', 'email_inbox.php', 'https://projects.anomoz.com/ke/smsCampaigner/email_inbox.php?mail_id=1ZSKEJLF37&');
INSERT INTO smsCampaigner_log VALUES ('5VKGYFWT2M', '', '1702030340', 'admin', '103.244.178.36', '{\"category\":\"sent\"}', '[]', 'email_inbox.php', 'https://projects.anomoz.com/ke/smsCampaigner/email_inbox.php?category=sent');
INSERT INTO smsCampaigner_log VALUES ('50KD2SY787', '', '1702030365', 'admin', '103.244.178.36', '[]', '[]', 'email_servers.php', 'https://projects.anomoz.com/ke/smsCampaigner/email_servers.php');
INSERT INTO smsCampaigner_log VALUES ('9BKYQZ83DO', '', '1702030367', 'admin', '103.244.178.36', '{\"category\":\"sent\"}', '[]', 'email_inbox.php', 'https://projects.anomoz.com/ke/smsCampaigner/email_inbox.php?category=sent');
INSERT INTO smsCampaigner_log VALUES ('0PUVY21LUK', '', '1702030372', 'admin', '103.244.178.36', '{\"category\":\"sent\",\"mail_id\":\"SOVGGFBEH9\"}', '[]', 'email_inbox.php', 'https://projects.anomoz.com/ke/smsCampaigner/email_inbox.php?category=sent&mail_id=SOVGGFBEH9&');
INSERT INTO smsCampaigner_log VALUES ('DJK4P6XJ1R', '', '1702030375', 'admin', '103.244.178.36', '{\"category\":\"inbox\"}', '[]', 'email_inbox.php', 'https://projects.anomoz.com/ke/smsCampaigner/email_inbox.php?category=inbox');
INSERT INTO smsCampaigner_log VALUES ('E6Q6Q8NKDW', '', '1702030378', 'admin', '103.244.178.36', '{\"category\":\"inbox\",\"mail_id\":\"1ZSKEJLF37\"}', '[]', 'email_inbox.php', 'https://projects.anomoz.com/ke/smsCampaigner/email_inbox.php?category=inbox&mail_id=1ZSKEJLF37&');
INSERT INTO smsCampaigner_log VALUES ('LWOPNNTFGF', '', '1702030380', 'admin', '103.244.178.36', '{\"category\":\"inbox\"}', '[]', 'email_inbox.php', 'https://projects.anomoz.com/ke/smsCampaigner/email_inbox.php?category=inbox');
INSERT INTO smsCampaigner_log VALUES ('QHWRSZ32MD', '', '1702030393', 'admin', '103.244.178.36', '{\"category\":\"inbox\"}', '[]', 'email_inbox.php', 'https://projects.anomoz.com/ke/smsCampaigner/email_inbox.php?category=inbox');
INSERT INTO smsCampaigner_log VALUES ('ILN7SHICCW', '', '1702030415', 'admin', '103.244.178.36', '{\"category\":\"inbox\",\"mail_id\":\"1ZSKEJLF37\"}', '[]', 'email_inbox.php', 'https://projects.anomoz.com/ke/smsCampaigner/email_inbox.php?category=inbox&mail_id=1ZSKEJLF37&');
INSERT INTO smsCampaigner_log VALUES ('UA5WZAF1ET', '', '1702030418', 'admin', '103.244.178.36', '{\"category\":\"inbox\"}', '[]', 'email_inbox.php', 'https://projects.anomoz.com/ke/smsCampaigner/email_inbox.php?category=inbox');
INSERT INTO smsCampaigner_log VALUES ('0BHUO98Y3N', '', '1702030430', 'admin', '103.244.178.36', '{\"category\":\"sent\"}', '[]', 'email_inbox.php', 'https://projects.anomoz.com/ke/smsCampaigner/email_inbox.php?category=sent');
INSERT INTO smsCampaigner_log VALUES ('7LNZL28J8H', '', '1702030436', 'admin', '103.244.178.36', '{\"category\":\"sent\"}', '[]', 'email_inbox.php', 'https://projects.anomoz.com/ke/smsCampaigner/email_inbox.php?category=sent');
INSERT INTO smsCampaigner_log VALUES ('VL7QWGO1L1', '', '1702030440', 'admin', '103.244.178.36', '{\"category\":\"sent\",\"mail_id\":\"1ZSKEJLF37\"}', '[]', 'email_inbox.php', 'https://projects.anomoz.com/ke/smsCampaigner/email_inbox.php?category=sent&mail_id=1ZSKEJLF37&');
INSERT INTO smsCampaigner_log VALUES ('QFOKQ6DSZ6', '', '1702030466', 'admin', '103.244.178.36', '[]', '[]', 'referrals.php', 'https://projects.anomoz.com/ke/smsCampaigner/referrals.php');
INSERT INTO smsCampaigner_log VALUES ('NF1KKL0CYW', '', '1702032628', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('MV2YLBMSHS', '', '1702032628', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('9NTCVHOOWE', '', '1702032647', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('OTB995OE3O', '', '1702032647', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('47C7MZCBDN', '', '1702032647', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('EKGQV4CP6I', '', '1702032647', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('IUD5MUP19N', '', '1702034935', 'admin', '182.178.5.35', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('FGNERVM3BM', '', '1702036938', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('ICTSEHO9BV', '', '1702036938', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('YFMTI5P33B', '', '1702036970', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('ZJJPKRWWUD', '', '1702036971', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('4WNDVYIZHK', '', '1702037314', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('FIKI81MOV8', '', '1702037314', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('FSTMGZJF3P', '', '1702037350', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('NOWLNHEMFY', '', '1702037350', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('G5M3J6A14L', '', '1702037529', 'admin', '37.111.177.158', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('P6I2PXGHP3', '', '1702037530', 'admin', '37.111.177.158', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('VNVXJ59RP7', '', '1702037530', 'admin', '37.111.177.158', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('QUE4LTZZ24', '', '1702037555', 'admin', '37.111.177.158', '[]', '[]', 'email_templates.php', 'https://projects.anomoz.com/ke/smsCampaigner/email_templates.php');
INSERT INTO smsCampaigner_log VALUES ('VS7K0RIZRB', '', '1702037973', 'admin', '182.178.5.35', '[]', '[]', 'analytics.php', 'https://projects.anomoz.com/ke/smsCampaigner/analytics.php');
INSERT INTO smsCampaigner_log VALUES ('5SS9WG6NVD', '', '1702038053', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('H2QHPCUGD0', '', '1702038054', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('18ED7QEJ7V', '', '1702038251', 'admin', '182.178.5.35', '[]', '[]', 'products.php', 'https://projects.anomoz.com/ke/smsCampaigner/products.php');
INSERT INTO smsCampaigner_log VALUES ('GHZ8ZLZN3H', '', '1702038257', 'admin', '182.178.5.35', '[]', '[]', 'analytics.php', 'https://projects.anomoz.com/ke/smsCampaigner/analytics.php');
INSERT INTO smsCampaigner_log VALUES ('ISYHO9HP0E', '', '1702038311', 'admin', '37.111.177.158', '{\"id\":\"1\"}', '[]', 'email_templates.php', 'https://projects.anomoz.com/ke/smsCampaigner/email_templates.php?id=1');
INSERT INTO smsCampaigner_log VALUES ('OKH47MTW76', '', '1702039412', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('KAFU67AUK7', '', '1702039412', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('NE0YM92Q0K', '', '1702039437', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('79UT5WFOCA', '', '1702039438', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('9QS8SQNYIL', '', '1702039473', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('BCBPXR452F', '', '1702039474', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('5KYXQCYDUV', '', '1702042632', 'admin', '124.29.239.131', '[]', '[]', 'leads.php', 'https://projects.anomoz.com/ke/smsCampaigner/leads.php');
INSERT INTO smsCampaigner_log VALUES ('YRWF7Z09DV', '', '1702042642', 'admin', '124.29.239.131', '[]', '[]', 'email_templates.php', 'https://projects.anomoz.com/ke/smsCampaigner/email_templates.php');
INSERT INTO smsCampaigner_log VALUES ('6NTCBG7LCB', '', '1702042655', 'admin', '124.29.239.131', '{\"id\":\"1\"}', '[]', 'email_templates.php', 'https://projects.anomoz.com/ke/smsCampaigner/email_templates.php?id=1');
INSERT INTO smsCampaigner_log VALUES ('A8MJPYLP35', '', '1702042739', 'admin', '124.29.239.131', '{\"id\":\"1\"}', '[]', 'email_templates.php', 'https://projects.anomoz.com/ke/smsCampaigner/email_templates.php?id=1');
INSERT INTO smsCampaigner_log VALUES ('M49Y50CZRL', '', '1702053967', 'admin', '202.59.13.114', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('JBNQ3AJXMP', '', '1702053971', 'admin', '202.59.13.114', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('2MVKM0TZV9', '', '1702053971', 'admin', '202.59.13.114', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('SM527BWI6F', '', '1702053971', 'admin', '202.59.13.114', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('SPQP28R7GG', '', '1702053971', 'admin', '202.59.13.114', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('VZ7PWR07AD', '', '1702053979', 'admin', '202.59.13.114', '[]', '[]', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner/employees.php');
INSERT INTO smsCampaigner_log VALUES ('MX06AYCWF1', '', '1702053980', 'admin', '202.59.13.114', '[]', '[]', 'products.php', 'https://projects.anomoz.com/ke/smsCampaigner/products.php');
INSERT INTO smsCampaigner_log VALUES ('CSHLVSUJXL', '', '1702053983', 'admin', '202.59.13.114', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('SG7KUY61TW', '', '1702057404', 'admin', '124.29.239.131', '{\"id\":\"1\"}', '[]', 'email_templates.php', 'https://projects.anomoz.com/ke/smsCampaigner/email_templates.php?id=1');
INSERT INTO smsCampaigner_log VALUES ('L088K258C8', '', '1702057436', 'admin', '124.29.239.131', '[]', '[]', 'email_templates.php', 'https://projects.anomoz.com/ke/smsCampaigner/email_templates.php');
INSERT INTO smsCampaigner_log VALUES ('V5OP7KFIZH', '', '1702057444', 'admin', '124.29.239.131', '{\"id\":\"1\"}', '[]', 'email_templates.php', 'https://projects.anomoz.com/ke/smsCampaigner/email_templates.php?id=1');
INSERT INTO smsCampaigner_log VALUES ('HK57ZXZMV1', '', '1702057450', 'admin', '124.29.239.131', '[]', '[]', 'email_templates.php', 'https://projects.anomoz.com/ke/smsCampaigner/email_templates.php');
INSERT INTO smsCampaigner_log VALUES ('L2FKCPDBOT', '', '1702057453', 'admin', '124.29.239.131', '{\"id\":\"8\"}', '[]', 'email_templates.php', 'https://projects.anomoz.com/ke/smsCampaigner/email_templates.php?id=8');
INSERT INTO smsCampaigner_log VALUES ('6D6FTZ8LJ6', '', '1702057590', 'admin', '124.29.239.131', '[]', '[]', 'view_user.php', 'https://projects.anomoz.com/ke/smsCampaigner/view_user.php');
INSERT INTO smsCampaigner_log VALUES ('8267N3ANJ1', '', '1702057632', 'admin', '124.29.239.131', '[]', '[]', 'view_user.php', 'https://projects.anomoz.com/ke/smsCampaigner/view_user.php');
INSERT INTO smsCampaigner_log VALUES ('8POGUI31S6', '', '1702059747', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('Q4LDSQFW96', '', '1702059748', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('WV9PZDRJM5', '', '1702059848', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('4TRGUI3N7E', '', '1702059848', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('U5WIQJZGWE', '', '1702059848', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('1J4SXD6RLF', '', '1702059848', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('W839GVZ4UC', '', '1702063244', '', '40.77.167.26', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('M3MXTMUW2K', '', '1702063245', '', '40.77.167.26', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('VHX61QBUHE', '', '1702063246', '', '40.77.167.26', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('UJZ97E5I5R', '', '1702063863', '', '41.103.49.59', '[]', '[]', 'xmlrpc.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php/xmlrpc.php');
INSERT INTO smsCampaigner_log VALUES ('VXQ3JWA6CM', '', '1702063863', '', '41.103.49.59', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php/');
INSERT INTO smsCampaigner_log VALUES ('LEURUPPQ35', '', '1702063866', '', '222.252.1.86', '[]', '[]', 'xmlrpc.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php/xmlrpc.php');
INSERT INTO smsCampaigner_log VALUES ('0IINL16OAP', '', '1702063869', '', '222.252.1.86', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php/');
INSERT INTO smsCampaigner_log VALUES ('KD2GQ9VS1Y', '', '1702063871', '', '190.43.252.159', '[]', '[]', 'xmlrpc.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php/xmlrpc.php');
INSERT INTO smsCampaigner_log VALUES ('T6UAA1B49G', '', '1702063873', '', '190.43.252.159', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php/');
INSERT INTO smsCampaigner_log VALUES ('QJRXZVK9UP', '', '1702071676', '', '52.167.144.235', '[]', '[]', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner/employees.php');
INSERT INTO smsCampaigner_log VALUES ('QL1JZOU8GZ', '', '1702071677', '', '52.167.144.235', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('M3I0U55MQG', '', '1702071677', '', '52.167.144.235', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('0MYI72NMG3', '', '1702080667', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('AI9ETRT093', '', '1702093496', '', '52.167.144.186', '[]', '[]', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner/employees.php');
INSERT INTO smsCampaigner_log VALUES ('MLYTDNPR9X', '', '1702093497', '', '52.167.144.186', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('45LBFH7SR1', '', '1702093498', '', '52.167.144.186', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('OOJ9PZBEMU', '', '1702096853', '', '52.167.144.181', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('8E2BNSHI9S', '', '1702096854', '', '52.167.144.181', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('TC8D5X8DUV', '', '1702096855', '', '52.167.144.181', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('N4SK3RVAMO', '', '1702103532', 'admin', '124.29.239.131', '[]', '[]', 'view_user.php', 'https://projects.anomoz.com/ke/smsCampaigner/view_user.php');
INSERT INTO smsCampaigner_log VALUES ('OA040G27H3', '', '1702103538', 'admin', '124.29.239.131', '[]', '[]', 'tasks.php', 'https://projects.anomoz.com/ke/smsCampaigner/tasks.php');
INSERT INTO smsCampaigner_log VALUES ('14GCAHN2AA', '', '1702105066', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('QK07UJGZQ8', '', '1702105067', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('NTZAR5C1PQ', '', '1702105091', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('M3CZV7ZX45', '', '1702105091', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('GRQ95NK5MA', '', '1702105091', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('NO41CGECFH', '', '1702105091', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('2QHSIO2MBP', '', '1702106784', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('QBIUE5LCZE', '', '1702106785', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('O0NEMZG35N', '', '1702106798', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('RDXVK26EYZ', '', '1702106798', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('D7XLWG4ZLR', '', '1702106798', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('S84WSURNBG', '', '1702106799', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('QY7UKMLHA5', '', '1702107925', 'admin', '43.242.178.252', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('DNZWD8O4GX', '', '1702107925', 'admin', '43.242.178.252', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('IL64VZUYIZ', '', '1702107926', 'admin', '43.242.178.252', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('YZ5UHK428L', '', '1702107935', 'admin', '43.242.178.252', '{\"demo\":\"\"}', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php?demo');
INSERT INTO smsCampaigner_log VALUES ('IBP1N62NLD', '', '1702107945', 'admin', '43.242.178.252', '{\"demo\":\"1\"}', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php?demo=1');
INSERT INTO smsCampaigner_log VALUES ('CYHWSR8SCI', '', '1702107948', 'admin', '43.242.178.252', '[]', '[]', 'products.php', 'https://projects.anomoz.com/ke/smsCampaigner/products.php');
INSERT INTO smsCampaigner_log VALUES ('SGYDUPAAXE', '', '1702107950', 'admin', '43.242.178.252', '[]', '[]', 'products.php', 'https://projects.anomoz.com/ke/smsCampaigner/products.php');
INSERT INTO smsCampaigner_log VALUES ('MNYXAF42D8', '', '1702107951', 'admin', '43.242.178.252', '[]', '[]', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner/employees.php');
INSERT INTO smsCampaigner_log VALUES ('ZEWYJ9F4PX', '', '1702107954', 'admin', '43.242.178.252', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('N1AVZKNAPK', '', '1702107958', 'admin', '43.242.178.252', '[]', '[]', 'products.php', 'https://projects.anomoz.com/ke/smsCampaigner/products.php');
INSERT INTO smsCampaigner_log VALUES ('N9AEYRN16V', '', '1702108004', 'admin', '43.242.178.252', '[]', '[]', 'calendar_reminders.php', 'https://projects.anomoz.com/ke/smsCampaigner/calendar_reminders.php');
INSERT INTO smsCampaigner_log VALUES ('E0YVZ05ZLV', '', '1702108052', 'admin', '43.242.178.252', '[]', '{\"action\":\"resize_event\",\"id\":\"2RZW6TK3TJ\",\"end\":\"2023-11-02T17:36:00.000Z\",\"start\":\"2023-11-02T14:36:00.000Z\"}', 'calendar_reminders.php', 'https://projects.anomoz.com/ke/smsCampaigner/calendar_reminders.php');
INSERT INTO smsCampaigner_log VALUES ('Q84T2RL311', '', '1702108056', 'admin', '43.242.178.252', '[]', '{\"action\":\"resize_event\",\"id\":\"2RZW6TK3TJ\",\"end\":\"2023-11-02T16:36:00.000Z\",\"start\":\"2023-11-02T14:36:00.000Z\"}', 'calendar_reminders.php', 'https://projects.anomoz.com/ke/smsCampaigner/calendar_reminders.php');
INSERT INTO smsCampaigner_log VALUES ('1VSLHXVKBP', '', '1702108061', 'admin', '43.242.178.252', '[]', '{\"action\":\"drop_event\",\"id\":\"2RZW6TK3TJ\",\"end\":\"2023-11-02T19:06:00.000Z\",\"start\":\"2023-11-02T17:06:00.000Z\"}', 'calendar_reminders.php', 'https://projects.anomoz.com/ke/smsCampaigner/calendar_reminders.php');
INSERT INTO smsCampaigner_log VALUES ('HM4FGD486V', '', '1702113520', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('KJXUYZ33GH', '', '1702113520', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('DU7KC5US11', '', '1702113701', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('2W1J274CGI', '', '1702113724', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('P5X6JANRMV', '', '1702113918', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('ZA8LCHQ3BB', '', '1702113996', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('M5F5RE7I4G', '', '1702114051', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('TZVWI8EOLX', '', '1702114101', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('1FR367Y075', '', '1702114138', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('D3TIOJOS83', '', '1702114211', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('4DR1234TJ6', '', '1702114259', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('WQ61YBG845', '', '1702114260', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('4LFPOEPCUF', '', '1702114434', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('QY1A4891LO', '', '1702114547', 'admin', '43.242.178.90', '[]', '{\"action\":\"drop_event\",\"id\":\"2RZW6TK3TJ\",\"end\":\"2023-10-31T17:36:00.000Z\",\"start\":\"2023-10-31T15:36:00.000Z\"}', 'calendar_reminders.php', 'https://projects.anomoz.com/ke/smsCampaigner/calendar_reminders.php');
INSERT INTO smsCampaigner_log VALUES ('PB4VCTTL79', '', '1702114975', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('K5HFXQQG6N', '', '1702114975', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('B9PT0CAEZQ', '', '1702115102', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('RHSQMPXX84', '', '1702115232', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('MGNP2CLCWY', '', '1702115247', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('GZG96427IM', '', '1702115248', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('X9T5YVZPAU', '', '1702115298', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('KFWZUSD0PP', '', '1702115334', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('CL1QDNP3FN', '', '1702115334', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('XXPDBAEXXR', '', '1702115368', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('WINTTN6KDI', '', '1702115560', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('MTAGRQXZIG', '', '1702115868', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('MIRFNNH7CW', '', '1702115892', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('9DQD36497V', '', '1702115893', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('34222Q5QRS', '', '1702117018', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('EPRNHUB2ID', '', '1702117061', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('QLHN2DMBOS', '', '1702117089', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('AEMHPTWV1A', '', '1702117130', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('CK6EWQXN1Z', '', '1702117187', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('2YV4CCW36C', '', '1702117188', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('794QL22YMH', '', '1702117268', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('4ZCCPF5J6F', '', '1702117268', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('K6COQ278WZ', '', '1702117292', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('T83NG926YD', '', '1702117381', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('9XKQDRQ92H', '', '1702117381', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('JE1HNQR24Y', '', '1702117413', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('7R66CMECU7', '', '1702117414', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('L8VFYQHWJZ', '', '1702117552', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('ILH89BS9BY', '', '1702117553', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('G9ZTLNOSR3', '', '1702117652', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('292MU4Z39H', '', '1702117707', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('WMKYC25A3U', '', '1702117707', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('QFO44D5DV6', '', '1702117745', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('ZLP12E7F5G', '', '1702117745', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('61P5Q7WWO2', '', '1702117783', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('G07NHC987Y', '', '1702117784', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('5PDGZC5J85', '', '1702117971', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('FHZNPY311G', '', '1702117972', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('CSCY1OTE2P', '', '1702118133', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('9RMO9W40K0', '', '1702118134', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('2SIKPLV10A', '', '1702118162', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('1WMEPW105Z', '', '1702118162', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('N6XCJE0FLY', '', '1702118163', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('T1RUSUME6W', '', '1702118163', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('E6DGSRJKGN', '', '1702119230', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('ORSNZDWEFQ', '', '1702119231', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('4E9ILR0FKP', '', '1702119249', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('X3AVUL14JO', '', '1702119249', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('CQXDU6EX0C', '', '1702119249', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('NB3Z54K6MD', '', '1702119249', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('E08W4KP7VB', '', '1702124454', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('VQSLGEUEGM', '', '1702124454', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('LAGIYJOC0H', '', '1702189074', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('BO2QSG3A4B', '', '1702189074', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('M88A9PXMA1', '', '1702189114', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('V11MDMSANX', '', '1702196262', '', '65.108.31.118', '[]', '[]', 'signup.php', 'https://projects.anomoz.com/ke/smsCampaigner//signup.php');
INSERT INTO smsCampaigner_log VALUES ('4HYCOE975U', '', '1702199920', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('VIFFLRCNB0', '', '1702199921', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('TBG6CZD64Z', '', '1702200659', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('AMOLCUOZ2B', '', '1702200659', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('EBUF2UA51Y', '', '1702201376', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('XI0BF168R5', '', '1702201376', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('TH6YVIZ77Y', '', '1702201647', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('DS6ZTGRGBL', '', '1702201648', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('NGJ8N0WEEP', '', '1702201737', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('PTEYB85B9C', '', '1702201737', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('13VERACK1D', '', '1702202292', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('DFF35JTCCQ', '', '1702202292', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('2HAG0U9DYD', '', '1702203588', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('AQMWU9Z14R', '', '1702203588', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('E2225DS58L', '', '1702203669', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('K1TD6TIGZH', '', '1702203669', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('PY4CW0K49N', '', '1702203782', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('K2YHXV4V72', '', '1702203782', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('7JJQMZMGYS', '', '1702203813', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('LKYYF7M287', '', '1702203814', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('ISCZIRE66P', '', '1702203952', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('360LFC74AH', '', '1702203952', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('RFVY8VBQ85', '', '1702204107', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('6LOLCM0TWC', '', '1702204107', '', '54.187.205.235', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('CTSR32OEJY', '', '1702204145', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('J10SKRD148', '', '1702204146', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('GRDH4VK8WL', '', '1702204183', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('GB29GZNZJK', '', '1702204184', '', '54.187.174.169', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('XXPLECGSZF', '', '1702204371', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('JHK3ON85NX', '', '1702204371', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');
INSERT INTO smsCampaigner_log VALUES ('M78HRYWOBD', '', '1702204551', '', '213.239.199.56', '{\"demo\":\"1\"}', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner//login.php?demo=1');
INSERT INTO smsCampaigner_log VALUES ('HJSVVMV19J', '', '1702223829', '', '65.109.155.162', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner//login.php');
INSERT INTO smsCampaigner_log VALUES ('PZ65JG84C4', '', '1702227095', '', '40.77.167.68', '[]', '[]', 'employees.php', 'https://projects.anomoz.com/ke/smsCampaigner/employees.php');
INSERT INTO smsCampaigner_log VALUES ('GDZEG1AS5J', '', '1702227096', '', '40.77.167.68', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('2YX7D5P0HB', '', '1702227097', '', '40.77.167.68', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('WS5EMIM43D', '', '1702228871', '', '52.167.144.215', '[]', '[]', 'home.php', 'https://projects.anomoz.com/ke/smsCampaigner/home.php');
INSERT INTO smsCampaigner_log VALUES ('YLGCLTN096', '', '1702228872', '', '52.167.144.215', '[]', '[]', 'index.php', 'https://projects.anomoz.com/ke/smsCampaigner/');
INSERT INTO smsCampaigner_log VALUES ('94BP5VUYHJ', '', '1702228873', '', '52.167.144.215', '[]', '[]', 'login.php', 'https://projects.anomoz.com/ke/smsCampaigner/login.php');
INSERT INTO smsCampaigner_log VALUES ('HLDR9H6NCL', '', '1702258041', '', '54.187.216.72', '[]', '[]', 'payment_webook.php', 'https://projects.anomoz.com/ke/smsCampaigner/payment_webook.php');


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


CREATE TABLE `smsCampaigner_email_templates` (
  `id` varchar(256) NOT NULL,
  `title` varchar(256) DEFAULT '',
  `template_type` varchar(256) NOT NULL,
  `content` longtext DEFAULT '',
  `subject` longtext DEFAULT '',
  `userId` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_email_templates VALUES ('1', 'Welcome Email', 'Welcome', 'Dear [UserName],\n\nThank you for joining our platform. We are excited to have you on board.', 'Welcome to Our Platform', 'admin');
INSERT INTO smsCampaigner_email_templates VALUES ('2', 'Promotional Email', 'Promotion', 'Exclusive offer just for you!\n\nUse code PROMO123 to get 20% off on your next purchase.', 'Exclusive Promo Inside!', 'admin');
INSERT INTO smsCampaigner_email_templates VALUES ('3', 'Newsletter', 'Newsletter', 'Dear subscribers,\n\nStay tuned for our latest updates and news. We have some exciting announcements to share with you!', 'Monthly Newsletter', 'admin');
INSERT INTO smsCampaigner_email_templates VALUES ('4', 'Feedback Request', 'Feedback', 'We value your opinion. Please take a moment to share your feedback with us. Your input is crucial in helping us improve.', 'Your Feedback Matters', 'admin');
INSERT INTO smsCampaigner_email_templates VALUES ('5', 'Event Invitation', 'Event', 'You are invited to our upcoming event:\n\nEvent Name: [EventName]\nDate: [EventDate]\nLocation: [EventLocation]', 'Invitation to Our Event', 'admin');
INSERT INTO smsCampaigner_email_templates VALUES ('6', 'Account Activation', 'Activation', 'Dear [UserName],\n\nTo activate your account, click on the following link: [ActivationLink]', 'Activate Your Account', 'admin');
INSERT INTO smsCampaigner_email_templates VALUES ('7', 'Holiday Greetings', 'Holiday', 'Wishing you a joyful holiday season and a Happy New Year! May the coming year bring you success and happiness.', 'Seasons Greetings', 'admin');
INSERT INTO smsCampaigner_email_templates VALUES ('8', 'Product Update', 'Update', 'Exciting news! We have launched a new version of our product with enhanced features and improvements. Check it out now.', 'Product Update', 'admin');


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


CREATE TABLE `smsCampaigner_workflow_details` (
  `id` varchar(256) NOT NULL,
  `wId` varchar(256) DEFAULT NULL,
  `task` varchar(256) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `wait` varchar(256) DEFAULT NULL,
  `flow` int(255) NOT NULL,
  `title` varchar(256) NOT NULL,
  `message` varchar(256) NOT NULL,
  `timeAdded` varchar(256) DEFAULT NULL,
  `userId` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_workflow_details VALUES ('2SGLGDZMV3', 'J95MHLUL08', '? Email', '20 ', '1', 'yes', 'i need also', '1699624055', 'admin');
INSERT INTO smsCampaigner_workflow_details VALUES ('9XZJMTQIMY', 'J95MHLUL08', '? SMS', '2    ', '8', '', '', '1699624055', 'admin');
INSERT INTO smsCampaigner_workflow_details VALUES ('ASB03I54VY', 'J95MHLUL08', '? SMS', '4  ', '5', '', 'hellooo', '1699624055', 'admin');
INSERT INTO smsCampaigner_workflow_details VALUES ('ENN4BMH44P', 'E6SHW28OU2', '? Email', '1 ', '0', 'test', 'test', '1699936258', 'admin');
INSERT INTO smsCampaigner_workflow_details VALUES ('FJK5LONHC5', 'J95MHLUL08', '? Email', '30 ', '2', 'yes', 'i need also for', '1699624055', 'admin');
INSERT INTO smsCampaigner_workflow_details VALUES ('H7RWHIFE7Z', 'J95MHLUL08', '? SMS', '30 ', '4', 'yes', 'i need also', '1699624055', 'admin');
INSERT INTO smsCampaigner_workflow_details VALUES ('JHA7W20UZ8', 'J95MHLUL08', '? Email', '1    ', '7', '', '', '1699624055', 'admin');
INSERT INTO smsCampaigner_workflow_details VALUES ('NA8QPML5IB', 'J95MHLUL08', '? SMS', '10 ', '0', '', 'i need', '1699624055', 'admin');
INSERT INTO smsCampaigner_workflow_details VALUES ('NO22G45YYZ', 'E6SHW28OU2', '? Email', '1  ', '1', 'test', 'test', '1699936258', 'admin');
INSERT INTO smsCampaigner_workflow_details VALUES ('XH74KKF45V', 'J95MHLUL08', '? Email', '40 ', '3', 'yes', 'i need also for this', '1699624055', 'admin');
INSERT INTO smsCampaigner_workflow_details VALUES ('YC8C9LEIR0', 'J95MHLUL08', '? Email', '1   ', '6', 'ok', 'hi', '1699624055', 'admin');


CREATE TABLE `smsCampaigner_workflow` (
  `id` varchar(200) NOT NULL,
  `title` varchar(256) DEFAULT '',
  `description` varchar(256) DEFAULT '',
  `timeAdded` varchar(256) DEFAULT NULL,
  `userId` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_workflow VALUES ('E6SHW28OU2', 'test', 'test', '1699869431', 'admin');
INSERT INTO smsCampaigner_workflow VALUES ('J95MHLUL08', 'New Customer', 'When customer is new, assign this workflow to it.', '1698315542', 'admin');


CREATE TABLE `smsCampaigner_files` (
  `id` varchar(200) NOT NULL,
  `name` varchar(256) DEFAULT '',
  `new_name` varchar(255) DEFAULT NULL,
  `timeAdded` varchar(256) DEFAULT NULL,
  `userId` varchar(256) DEFAULT NULL,
  `folder` varchar(256) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_files VALUES ('2016249AQW', 'Screenshot 2023-07-26 at 12.55.30 PM.png', '2707231690458151Screenshot 2023-07-26 at 12.55.30 PM.png', '1690458151', 'admin', '');
INSERT INTO smsCampaigner_files VALUES ('4KJAOOJUWX', 'leadely1.png', '2610231698341132leadely1.png', '1698341132', 'admin', '/myfolder');
INSERT INTO smsCampaigner_files VALUES ('4NJVJ496SR', 'leadely2.png', '2610231698341173leadely2.png', '1698341173', 'admin', '/myfolder');
INSERT INTO smsCampaigner_files VALUES ('5JM392DKTC', 'bandicam 2022-10-24 11-22-55-097.jpg', '2407231690183993bandicam 2022-10-24 11-22-55-097.jpg', '1690183993', 'admin', '');
INSERT INTO smsCampaigner_files VALUES ('5VMQR82615', 'home.jpg', '1010231696917255home.jpg', '1696917255', 'admin', '');
INSERT INTO smsCampaigner_files VALUES ('6R92BWTSMZ', 'home.jpg', '1010231696917256home.jpg', '1696917256', 'admin', '');
INSERT INTO smsCampaigner_files VALUES ('7CVEV4XQ7S', 'bandicam 2022-10-24 11-25-45-820.jpg', '2407231690185293bandicam 2022-10-24 11-25-45-820.jpg', '1690185293', 'admin', '');
INSERT INTO smsCampaigner_files VALUES ('ELZ25Y0NWP', 'leadely1.png', '2610231698341227leadely1.png', '1698341227', 'admin', '/myfolder');
INSERT INTO smsCampaigner_files VALUES ('GC4L87OYL2', 'Screenshot (174).png', '2610231698341262Screenshot (174).png', '1698341262', 'admin', '/myfolder');
INSERT INTO smsCampaigner_files VALUES ('GHA3M6TNW5', 'home.jpg', '1010231696917282home.jpg', '1696917282', 'admin', '');
INSERT INTO smsCampaigner_files VALUES ('N69AFHN2IF', 'new.xml', '0806221654650140new.xml', '1654650140', 'admin', '');
INSERT INTO smsCampaigner_files VALUES ('NJWR08D6QG', 'new.html', '0806221654650177new.html', '1654650177', 'admin', '');
INSERT INTO smsCampaigner_files VALUES ('NSTB8L0EXD', 'main.js', '0806221654650010main.js', '1654650010', 'admin', '');
INSERT INTO smsCampaigner_files VALUES ('PSHQ58QX87', 'cargurus-logo.png', '0706221654567157cargurus-logo.png', '1654567157', 'admin', '');
INSERT INTO smsCampaigner_files VALUES ('SLOK4QF3YX', 'Downloads.zip', '0806221654649815Downloads.zip', '1654649815', 'admin', '');
INSERT INTO smsCampaigner_files VALUES ('T87NUOQJCH', 'GreenEdge Analytics(1).docx', '0910231696871714GreenEdge Analytics(1).docx', '1696871714', 'admin', '');


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
INSERT INTO smsCampaigner_payments VALUES ('30HGBJPR3S', 'Payment of USD 10', '', '10', 'Paid', 'stripe', 'credit', '1', 'admin', '1644650003', 'onetime', '');
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
INSERT INTO smsCampaigner_payments VALUES ('DOYN8X1MNH', 'Payment of USD 23', '', '23', 'Paid', 'stripe', 'credit', '', 'admin', '1694687529', 'onetime', '');
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
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_password_resets VALUES ('18', 'user', '0TR0L9T9U4C6X6RMC181', '0', 'snahmed1998@gmail.com');
INSERT INTO smsCampaigner_password_resets VALUES ('19', 'user', 'M1KYKUXZU9BFH4LK9S2U', '0', 'snahmed1998@gmail.com');
INSERT INTO smsCampaigner_password_resets VALUES ('20', 'user', '5DOO1BOPUVI08GL2A125', '0', 'snahmed1998@gmail.com');
INSERT INTO smsCampaigner_password_resets VALUES ('21', 'user', 'BMVAQULW21W1L1DGSQ54', '0', 'snahmed1998@gmail.com');
INSERT INTO smsCampaigner_password_resets VALUES ('22', 'user', 'KBBOFYEOFN0EGBJ113FS', '0', 'snahmed1998@gmail.com');
INSERT INTO smsCampaigner_password_resets VALUES ('23', 'user', 'TMYAXD4166EFPIP8ZPX4', '0', 'snahmed1998@gmail.com');
INSERT INTO smsCampaigner_password_resets VALUES ('24', 'user', '8SOPEU5562XW19GBR15P', '0', 'snahmed1998@gmail.com');
INSERT INTO smsCampaigner_password_resets VALUES ('25', '1', 'Q3WUN2OTGK6Y6WZXEPVY', '0', 'snahmed1998@gmail.com');
INSERT INTO smsCampaigner_password_resets VALUES ('26', '1', '0RZU7T2JY8QI6XYPCZGX', '1680674825', 'usama.ninja1997@gmail.com');
INSERT INTO smsCampaigner_password_resets VALUES ('27', '1', 'Z8356JD00NNPS0UB88SS', '1699437995', 'snahmed1998@gmail.com');


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
INSERT INTO smsCampaigner_attendance VALUES ('AACLI3S7FH', '', '1701254874', 'admin', 'p');
INSERT INTO smsCampaigner_attendance VALUES ('MQDMTVG9WG', '', '1701156633', 'admin', 'p');
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
INSERT INTO smsCampaigner_notifications VALUES ('4UGCI2A2UX', '', ' has been assigned to your account', ' has been assigned to your account', 'https://projects.anomoz.com/ke/smsCampaigner/notifications.php', '2023-12-11 14:54:51', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('56705BNYXL', 'KCY5XK6UYU', 'New message from Admin', 'sad', 'https://projects.anomoz.com/ke/smsCampaigner/messages.php?u=admin', '2023-10-07 11:36:03', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('5HX6IM9RUR', 'KCY5XK6UYU', 'New message from Admin', '23', 'https://projects.anomoz.com/ke/smsCampaigner/messages.php?u=admin', '2023-11-27 09:05:19', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('6RD7J6NU4B', 'TMAE0W7T6C', 'Your Project board have been changed successfully.', 'Your Project board have been changed successfully.', 'https://projects.anomoz.com/ke/smsCampaigner/project_view.php?_projectId=C2VI6R28YV', '2023-04-27 13:23:03', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('7332K4Q71Z', 'KCY5XK6UYU', 'New message from Admin', 'd2', 'https://projects.anomoz.com/ke/smsCampaigner/messages.php?u=admin', '2023-10-07 11:36:23', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('7V3CYA19IE', '0UAGPL60I3', 'A project has been added to your account', 'A project has been added to your account', 'https://projects.anomoz.com/ke/smsCampaigner/project_view.php?_projectId=', '2022-01-01 07:28:59', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('95JVZG8NCL', 'admin', 'New message from Arsalan', 'a', 'https://projects.anomoz.com/ke/smsCampaigner/messages.php?u=AMPCX4T2J2', '2023-08-15 13:10:02', 'read');
INSERT INTO smsCampaigner_notifications VALUES ('AYZP1B1J7P', '', ' has been assigned to your account', ' has been assigned to your account', 'https://projects.anomoz.com/ke/smsCampaigner/notifications.php', '2023-12-11 14:54:25', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('B74D6GHGVX', 'KCY5XK6UYU', 'New message from Admin', 'ff3', 'https://projects.anomoz.com/ke/smsCampaigner/messages.php?u=admin', '2023-10-07 11:36:31', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('C741JYO6HR', 'KCY5XK6UYU', 'New message from Admin', 'sd', 'https://projects.anomoz.com/ke/smsCampaigner/messages.php?u=admin', '2023-10-07 11:33:19', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('DQNOZB5FHS', 'admin', 'New message from Arsalan', 'hi', 'https://projects.anomoz.com/ke/smsCampaigner/messages.php?u=AMPCX4T2J2', '2023-08-15 13:10:02', 'read');
INSERT INTO smsCampaigner_notifications VALUES ('EF1YNABHXR', 'SZCQ17TS4A', 'New message from Admin', 'nxnzn', 'https://projects.anomoz.com/ke/smsCampaigner/messages.php?u=admin', '2023-11-12 10:25:59', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('F7OPYFUSH9', 'KCY5XK6UYU', 'New message from Admin', 'aa', 'https://projects.anomoz.com/ke/smsCampaigner/messages.php?u=admin', '2023-11-27 09:05:13', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('FEX9HX86J6', '6MD1B8WC50', 'New message from Admin', 'hi', 'https://projects.anomoz.com/ke/smsCampaigner/messages.php?u=admin', '2022-07-26 10:08:58', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('GRCV1SA93D', 'admin', 'Est nihil in rerum c', 'Adipisicing sed sed ', 'https://projects.anomoz.com/ke/smsCampaigner/notifications.php?test=1', '2023-12-16 13:34:27', 'read');
INSERT INTO smsCampaigner_notifications VALUES ('GRL9U9B89H', 'KCY5XK6UYU', 'New message from Admin', 'asd', 'https://projects.anomoz.com/ke/smsCampaigner/messages.php?u=admin', '2023-10-07 11:36:18', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('H0FTELG02E', 'SZCQ17TS4A', 'New message from Admin', 'hi', 'https://projects.anomoz.com/ke/smsCampaigner/messages.php?u=admin', '2023-11-11 13:28:25', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('JYYSTWX695', '0UAGPL60I3', 'Your Project board have been changed successfully.', 'Your Project board have been changed successfully.', 'https://projects.anomoz.com/ke/smsCampaigner/project_view.php?_projectId=5TOP4NB4DH', '2022-01-01 07:38:40', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('LCGEIKRVKX', 'KCY5XK6UYU', 'New message from Admin', 'yes', 'https://projects.anomoz.com/ke/smsCampaigner/messages.php?u=admin', '2023-11-27 11:29:02', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('NEQ7M3LHKY', 'SZCQ17TS4A', 'New message from Admin', 'sada', 'https://projects.anomoz.com/ke/smsCampaigner/messages.php?u=admin', '2023-11-12 10:28:48', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('O4BD2FUIPP', 'admin', 'Est nihil in rerum c', 'Adipisicing sed sed ', 'https://projects.anomoz.com/ke/smsCampaigner/notifications.php?test=1', '2023-12-16 13:34:27', 'read');
INSERT INTO smsCampaigner_notifications VALUES ('O5ZFQUJWM0', 'TMAE0W7T6C', 'A project has been updated on your account', 'A project has been updated on your account', 'https://projects.anomoz.com/ke/smsCampaigner/project_view.php?_projectId=', '2023-04-28 11:57:31', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('ON0GUAJ3PC', '', ' has been assigned to your account', ' has been assigned to your account', 'https://projects.anomoz.com/ke/smsCampaigner/notifications.php?test_send=1', '2023-12-16 13:33:48', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('PF5V9MAGMZ', 'SZCQ17TS4A', 'New message from Admin', 'z', 'https://projects.anomoz.com/ke/smsCampaigner/messages.php?u=admin', '2023-11-12 10:28:49', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('PKP7AK3CVR', 'KCY5XK6UYU', 'New message from Admin', 'hlo', 'https://projects.anomoz.com/ke/smsCampaigner/messages.php?u=admin', '2023-08-15 13:44:41', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('QPSQGHL091', 'TMAE0W7T6C', 'A project has been added to your account', 'A project has been added to your account', 'https://projects.anomoz.com/ke/smsCampaigner/project_view.php?_projectId=', '2022-07-27 16:53:42', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('QPTJ16PFKW', 'TMAE0W7T6C', 'A project has been added to your account', 'A project has been added to your account', 'https://projects.anomoz.com/ke/smsCampaigner/project_view.php?_projectId=', '2022-09-21 09:18:48', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('QPW63WBRWX', 'admin', 'Autem sit eum nobis ', 'Est non enim omnis a', 'https://projects.anomoz.com/ke/smsCampaigner/notifications.php?test=1', '2023-12-16 13:47:52', 'read');
INSERT INTO smsCampaigner_notifications VALUES ('RKM7E1B1ER', '6MD1B8WC50', 'New message from Admin', 'hi', 'https://projects.anomoz.com/ke/smsCampaigner/messages.php?u=admin', '2022-07-26 10:08:50', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('SQLL5YJ58A', 'KCY5XK6UYU', 'New message from Admin', 'hello', 'https://projects.anomoz.com/ke/smsCampaigner/messages.php?u=admin', '2023-11-27 07:10:09', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('TO5XFFEOK1', 'SZCQ17TS4A', 'New message from Admin', 'klksd', 'https://projects.anomoz.com/ke/smsCampaigner/messages.php?u=admin', '2023-11-12 10:28:45', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('TY793QGWEH', 'AMPCX4T2J2', 'New message from Admin', 'ih', 'https://projects.anomoz.com/ke/smsCampaigner/messages.php?u=admin', '2023-06-28 14:22:13', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('UWZXPFC4PD', 'AMPCX4T2J2', 'New message from Admin', 'bvbv', 'https://projects.anomoz.com/ke/smsCampaigner/messages.php?u=admin', '2022-08-03 05:13:49', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('VIGZFK7Y7Y', 'KCY5XK6UYU', 'New message from Admin', '23', 'https://projects.anomoz.com/ke/smsCampaigner/messages.php?u=admin', '2023-10-07 11:34:49', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('VTYE44XJIT', '', 'New message from Admin', 'hi', 'https://projects.anomoz.com/ke/smsCampaigner/messages.php?u=admin', '2022-07-26 10:08:44', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('W0GNZQG8VL', '', 'New message from Admin', 'Hi', 'https://projects.anomoz.com/ke/smsCampaigner/messages.php?u=admin', '2023-03-04 05:29:23', 'new');
INSERT INTO smsCampaigner_notifications VALUES ('XJ6X8OY2CI', 'KCY5XK6UYU', 'New message from Admin', 'yes', 'https://projects.anomoz.com/ke/smsCampaigner/messages.php?u=admin', '2023-11-27 08:15:53', 'new');
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
INSERT INTO smsCampaigner_work_shifts VALUES ('HEUGDYXNBJ', '1698297949', '1698297960', 'Completed', 'admin', '1698297949');
INSERT INTO smsCampaigner_work_shifts VALUES ('K6DBLWRMH9', '1658789331', '1697892087', 'Completed', 'KJ54UNVJU9', '1658789331');
INSERT INTO smsCampaigner_work_shifts VALUES ('KIM0EZIM1J', '1663236270', '1697892087', 'Completed', 'admin', '1663236270');
INSERT INTO smsCampaigner_work_shifts VALUES ('KMEHK7XSZ3', '1663252797', '1697892087', 'Completed', 'admin', '1663252797');
INSERT INTO smsCampaigner_work_shifts VALUES ('MJVNE519K9', '1698484817', '1698484824', 'Completed', 'admin', '1698484817');
INSERT INTO smsCampaigner_work_shifts VALUES ('NQTKR4JCC9', '1681875335', '1697892087', 'Completed', 'admin', '1681875335');
INSERT INTO smsCampaigner_work_shifts VALUES ('OGMD96N9KR', '1662373075', '1697892087', 'Completed', 'admin', '1662373075');
INSERT INTO smsCampaigner_work_shifts VALUES ('OM0KZQHO98', '1658789107', '1697892087', 'Completed', 'admin', '1658789107');
INSERT INTO smsCampaigner_work_shifts VALUES ('QCSW1G2TBU', '1697892153', '1697892163', 'Completed', 'admin', '1697892153');
INSERT INTO smsCampaigner_work_shifts VALUES ('QF8ZL0HJFZ', '1698496479', '1698496483', 'Completed', 'admin', '1698496479');
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
INSERT INTO smsCampaigner_messages VALUES ('3XVLRYJK7C', 'SZCQ17TS4A', 'admin', 'hi', 'read', '1699709305');
INSERT INTO smsCampaigner_messages VALUES ('4A9QECHUCT', 'SZCQ17TS4A', 'admin', 'nxnzn', 'read', '1699784759');
INSERT INTO smsCampaigner_messages VALUES ('6MZKACDOP7', 'WJBPOZVLB9', 'admin', 'asd', 'read', '1640082922');
INSERT INTO smsCampaigner_messages VALUES ('7CKI5MYMKC', 'KCY5XK6UYU', 'admin', 'sad', 'read', '1696678563');
INSERT INTO smsCampaigner_messages VALUES ('7GMJODD6J2', 'AMPCX4T2J2', 'admin', 'b', 'read', '1659462528');
INSERT INTO smsCampaigner_messages VALUES ('9G8LZYQ97O', 'UJ50KX69MC', 'admin', 'from admin smsCampaigner', 'read', '1631863251');
INSERT INTO smsCampaigner_messages VALUES ('9YFIPES119', 'KCY5XK6UYU', 'admin', 'aa', 'read', '1701075913');
INSERT INTO smsCampaigner_messages VALUES ('B23MLJOXRW', '', 'admin', 'hi', 'new', '1658830124');
INSERT INTO smsCampaigner_messages VALUES ('BVKUUJPKPK', 'WJBPOZVLB9', 'admin', 'a', 'read', '1640082611');
INSERT INTO smsCampaigner_messages VALUES ('EZ4G23FV3G', '6MD1B8WC50', 'admin', 'hi', 'read', '1658830138');
INSERT INTO smsCampaigner_messages VALUES ('EZ630CXQC8', 'KCY5XK6UYU', 'admin', '23', 'read', '1696678489');
INSERT INTO smsCampaigner_messages VALUES ('F3BQ9MSY3V', 'KCY5XK6UYU', 'admin', 'd2', 'read', '1696678583');
INSERT INTO smsCampaigner_messages VALUES ('H0EBT3N12D', 'SZCQ17TS4A', 'admin', 'z', 'read', '1699784929');
INSERT INTO smsCampaigner_messages VALUES ('HQLG37O8JF', 'KCY5XK6UYU', 'admin', '23', 'read', '1701075919');
INSERT INTO smsCampaigner_messages VALUES ('HREBMJXCXW', 'KCY5XK6UYU', 'admin', 'yes', 'read', '1693981040');
INSERT INTO smsCampaigner_messages VALUES ('J55BTRHBU9', 'SZCQ17TS4A', 'admin', 'sada', 'read', '1699784928');
INSERT INTO smsCampaigner_messages VALUES ('JP2A6BWT9L', 'UJ50KX69MC', 'admin', 'second msg', 'read', '1631864459');
INSERT INTO smsCampaigner_messages VALUES ('LZXQXVATU8', 'WJBPOZVLB9', 'admin', 'hi ahsan', 'read', '1638290591');
INSERT INTO smsCampaigner_messages VALUES ('M2LLJWG37P', 'KCY5XK6UYU', 'admin', 'hello', 'read', '1701069009');
INSERT INTO smsCampaigner_messages VALUES ('MA0U76VGYG', 'admin', 'AMPCX4T2J2', 'a', 'read', '1687962221');
INSERT INTO smsCampaigner_messages VALUES ('MKUGASZ2P5', 'KCY5XK6UYU', 'admin', 'asd', 'read', '1696678578');
INSERT INTO smsCampaigner_messages VALUES ('NGUOCUP2PA', 'admin', 'AMPCX4T2J2', 'hi', 'read', '1687961642');
INSERT INTO smsCampaigner_messages VALUES ('NNGJAX6722', 'KCY5XK6UYU', 'admin', 'yes', 'read', '1701072953');
INSERT INTO smsCampaigner_messages VALUES ('O17XPYMX52', 'KCY5XK6UYU', 'admin', 'sd', 'read', '1696678399');
INSERT INTO smsCampaigner_messages VALUES ('R9PA458GT9', 'AMPCX4T2J2', 'admin', 'bvbv', 'read', '1659503629');
INSERT INTO smsCampaigner_messages VALUES ('SV83L0NICZ', 'KCY5XK6UYU', 'admin', 'yes', 'read', '1701084542');
INSERT INTO smsCampaigner_messages VALUES ('UACB54PHAV', 'SZCQ17TS4A', 'admin', 'klksd', 'read', '1699784925');
INSERT INTO smsCampaigner_messages VALUES ('VIMDCY77KK', 'KCY5XK6UYU', 'admin', 'hlo', 'read', '1692107081');
INSERT INTO smsCampaigner_messages VALUES ('WPICNKUXFB', 'KCY5XK6UYU', 'admin', 'aud_0KSCQC42JREmployeeLAYOUT1.png', 'read', '1695815749');
INSERT INTO smsCampaigner_messages VALUES ('Y7YJACQETE', 'KCY5XK6UYU', 'admin', 'ff3', 'read', '1696678591');
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
  `date` varchar(255) NOT NULL,
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
INSERT INTO smsCampaigner_users VALUES ('AMPCX4T2J2', 'arsalan1', 'arsalan@projects.anomoz.com', '3cce45bf21f047a954e1861c653a14ba', 'employee', '03130323023', '', '1646328381', '', '', '', 'KARACHI', '', '', '', '', '', '', '', '', 'admin', 'admin', '', 'profile_pic.png', 'subscribed', '', '5000000', '0', '', '', '', '2022-03-03', '', 'Inactive', 'Inactive', 'Inactive');
INSERT INTO smsCampaigner_users VALUES ('HLC3FFLLAH', 'Debra Mcgowan', 'bykic@mailinator.com', 'dc31878852f15caa822bcd8b3494299e', 'customer', '+1 (786) 568-7986', '', '1702912282', '', '', '', 'Quis laboris ullamco', '', '', '', '', '', '', '', '', 'VDLKMR6WQ0', 'admin', 'YGJ1W07JQI', 'profile_pic.png', 'subscribed', '', '', '0', '', '', '', '', '', 'Inactive', 'Inactive', 'Inactive');
INSERT INTO smsCampaigner_users VALUES ('GPV9RSTLAI', 'osama', 'osama@gmail.om12323i9d', '3cce45bf21f047a954e1861c653a14ba', 'user', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'profile_pic.png', 'subscribed', '', '', '0', '', '', '', '2022-09-25', '', 'Inactive', 'Inactive', 'Inactive');
INSERT INTO smsCampaigner_users VALUES ('WE8HQFFNSE', 'adsf', 'info@fellmedia.nl', 'd31e6cd3295fbea33e4c4aa6f0bdd3c9', 'user', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'profile_pic.png', 'subscribed', '', '', '0', '', '', '', '2022-11-17', '', 'Inactive', 'Inactive', 'Inactive');
INSERT INTO smsCampaigner_users VALUES ('qwertyu', 'qwert', '1234th', '1weghj', 'iug', '12346', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'profile_pic.png', 'subscribed', '', '', '0', '', '', '', '2023-03-08', '', 'Inactive', 'Inactive', 'Inactive');
INSERT INTO smsCampaigner_users VALUES ('GKGEOXPB64', 'islahudin', 'sall@gmail.com', '8bf69a07c7956a23941fa18711f200d8', 'user', '', '', '1689311684', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'profile_pic.png', 'subscribed', '', '', '0', '', '', '', '2023-07-14', '', 'Inactive', 'Inactive', 'Inactive');
INSERT INTO smsCampaigner_users VALUES ('123', '', '', '', 'student', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'profile_pic.png', 'subscribed', '', '', '0', '', '', '', '2023-07-20', '', 'Inactive', 'Inactive', 'Inactive');
INSERT INTO smsCampaigner_users VALUES ('M1QQ6JDCI8', 'Lois Puckett', 'bamixy@mailinator.com', 'dc31878852f15caa822bcd8b3494299e', 'customer', '+1 (997) 548-8008', '', '1702912274', '', '', '', 'Nihil possimus sed ', '', '', '', '', '', '', '', '', 'KCY5XK6UYU', 'admin', 'YGJ1W07JQI', 'profile_pic.png', 'subscribed', '', '', '0', '', '', '', '', '', 'Inactive', 'Inactive', 'Inactive');
INSERT INTO smsCampaigner_users VALUES ('CRRIRS52S9', 'boston', 'hello@pigeonmail.co.nz', '58a5342834c09c5a26b577c80b391b54', 'user', '', '', '1696965445', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'profile_pic.png', 'subscribed', '', '', '0', '', '', '', '2023-10-10', '', 'Inactive', 'Inactive', 'Inactive');
INSERT INTO smsCampaigner_users VALUES ('KD9C9QMFOF', 'Shoshana Blackwell', 'waxujaj@mailinator.com', 'dc31878852f15caa822bcd8b3494299e', 'customer', '+1 (121) 689-9694', '', '1702912229', '', '', '', 'Eiusmod est qui des', '', '', '', '', '', '', '', '', '', 'admin', 'JFTPJW33A6', 'profile_pic.png', 'subscribed', '', '', '0', '', '', '', '', '', 'Inactive', 'Inactive', 'Inactive');
INSERT INTO smsCampaigner_users VALUES ('55UZGXG6UK', 'tayyab', 'tayyab@gmail.com', '3cce45bf21f047a954e1861c653a14ba', 'user', '', '', '1702558878', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'profile_pic.png', 'subscribed', '', '', '0', '', '', '', '', '', 'Inactive', 'Inactive', 'Inactive');
INSERT INTO smsCampaigner_users VALUES ('U049YSCUJV', 'Muhammad Shayan Jani', 'mr.shayandev@gmail.com', '15b51beb58edad3a83237d05cb69c363', 'user', '', '', '1702877399', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'profile_pic.png', 'subscribed', '', '', '0', '', '', '', '', '', 'Inactive', 'Inactive', 'Inactive');


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
  `id` varchar(200) NOT NULL,
  `folder` varchar(256) DEFAULT '',
  `timeAdded` varchar(256) DEFAULT NULL,
  `userId` varchar(256) DEFAULT NULL,
  `parent_id` varchar(256) NOT NULL,
  `parentFolder` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_folders VALUES ('1H0YE9CEET', 'zar2', '2023-10-26 06:11:52', 'admin', '', '/zar');
INSERT INTO smsCampaigner_folders VALUES ('2P43O63BCR', 'newfolder', '2023-10-26 06:32:02', 'admin', '', '/');
INSERT INTO smsCampaigner_folders VALUES ('6ZWZIXIXD2', 'zzz', '2023-10-26 06:26:11', 'admin', '', '/');
INSERT INTO smsCampaigner_folders VALUES ('JQ5HE9269V', 'zzz', '2023-10-26 06:25:36', 'admin', '', '/');
INSERT INTO smsCampaigner_folders VALUES ('NCAAPQZJHH', 'pictures', '2023-10-26 06:35:21', 'admin', '', '/newfolder');
INSERT INTO smsCampaigner_folders VALUES ('NSXOJ3VMHV', 'zar1', '2023-10-26 06:11:29', 'admin', '', '/zar');
INSERT INTO smsCampaigner_folders VALUES ('P4CCY12QN0', 'zar', '2023-10-26 06:11:13', 'admin', '', '/');
INSERT INTO smsCampaigner_folders VALUES ('RHMCLCLEI5', 'new folder1', '2023-10-26 17:23:19', 'admin', '', '/myfolder');
INSERT INTO smsCampaigner_folders VALUES ('UYIDCB7PZH', 'zzz1', '2023-10-26 06:26:47', 'admin', '', '/zzz');
INSERT INTO smsCampaigner_folders VALUES ('W6V93T6POV', 'myfolder', '2023-10-26 06:31:16', 'admin', '', '/');
INSERT INTO smsCampaigner_folders VALUES ('XDCMGNWISQ', 'my folder', '2023-10-26 06:30:30', 'admin', '', '/');
INSERT INTO smsCampaigner_folders VALUES ('ZVCIIQQAKZ', 'pictures', '2023-10-26 06:35:05', 'admin', '', '/');


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
INSERT INTO smsCampaigner_calendar_reminders VALUES ('2RZW6TK3TJ', 'abc', '2023-10-31', 'god', '1699616202', '15:36', 'admin', '', '17:36', '#ffffff');
INSERT INTO smsCampaigner_calendar_reminders VALUES ('C8IQJYS1RO', 'my job', '', 'this is first complain', '1677734499', '01:21', 'KCY5XK6UYU', '', '', '#ffffff');
INSERT INTO smsCampaigner_calendar_reminders VALUES ('FU8BXHZK3V', 'test1', '', 'd', '1697822559', '00:00', 'admin', '', '00:03', '#ffffff');
INSERT INTO smsCampaigner_calendar_reminders VALUES ('GVKLMDIPA2', 'svsv', '', 'fgsr', '1690782589', '10:48', 'GPV9RSTLAI', '', '', '#ffffff');
INSERT INTO smsCampaigner_calendar_reminders VALUES ('HJM6JT2TOE', 'test1', '', 't', '1697735568', '00:00', 'admin', '', '12:03', '#ffffff');
INSERT INTO smsCampaigner_calendar_reminders VALUES ('HWAOZ3A5IY', 'new', '', 'verified ', '1657812082', '20:25', 'admin', '', '', '#ffffff');
INSERT INTO smsCampaigner_calendar_reminders VALUES ('IEPT2K0JHN', 'job1', '2023-10-07', 'Description', '1698669258', '17:33', 'admin', '', '20:33', '#FF8F8F');
INSERT INTO smsCampaigner_calendar_reminders VALUES ('J1MC9K6D0P', 'zzar', '2023-10-19', 'zzar', '1698399733', '00:00', 'admin', '', '00:00', '#FF8F8F');
INSERT INTO smsCampaigner_calendar_reminders VALUES ('MKXDG0UM16', 'dfjwdfjh', '', 'sjdfnjs', '1684755543', '19:38', 'admin', '', '', '#ffffff');
INSERT INTO smsCampaigner_calendar_reminders VALUES ('MTIF6PM4BI', 'f', '', 'c', '1656377610', '09:53', 'admin', '', '', '#ffffff');
INSERT INTO smsCampaigner_calendar_reminders VALUES ('NJZEMJFPAI', 'b', '2023-11-03', 'b', '1699515762', '00:00', 'admin', '', '00:00', '#FF8F8F');
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
INSERT INTO smsCampaigner_invoices VALUES ('RIME3V9PYG', 'admin', 'TMAE0W7T6C', 'asd', '0', '', '1698180077', 'asd - New', 'unpaid');
INSERT INTO smsCampaigner_invoices VALUES ('RQWTT5LAJL', 'admin', 'TMAE0W7T6C', 'wertyu', '0', '', '1665585672', 'DEmo twat', 'unpaid');
INSERT INTO smsCampaigner_invoices VALUES ('T7BCSGITGW', 'admin', 'TMAE0W7T6C', 'Notes test', '0', '', '1698990436', 'For test title', 'unpaid');
INSERT INTO smsCampaigner_invoices VALUES ('VM4HVFDZZM', 'admin', 'SZCQ17TS4A', '123', '0', '', '1699601679', '123', 'unpaid');
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

INSERT INTO smsCampaigner_campaigns VALUES ('QFRKUCJDU0', 'test', '123213', '', '', '', '', 'PENDING', 'admin', '1702011282', 'No', 'Yes', '');
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


CREATE TABLE `smsCampaigner_planes` (
  `id` varchar(200) NOT NULL,
  `name` varchar(256) DEFAULT '',
  `flight` varchar(256) DEFAULT '',
  `capacity` varchar(256) DEFAULT '',
  `milage` varchar(256) DEFAULT '',
  `timeAdded` varchar(256) DEFAULT NULL,
  `userId` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO smsCampaigner_planes VALUES ('ZGFKEW2HJP', '76', '767', '676', '76', '1699969638', 'admin');


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
