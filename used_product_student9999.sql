/*
 Navicat MySQL Data Transfer

 Source Server         : localhost11111
 Source Server Type    : MySQL
 Source Server Version : 50726
 Source Host           : localhost:3306
 Source Schema         : used_product_student

 Target Server Type    : MySQL
 Target Server Version : 50726
 File Encoding         : 65001

 Date: 02/12/2021 14:32:36
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 27 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES (17, '애완동물', 1, '2021-12-01 18:34:50', '2021-12-01 18:34:50');
INSERT INTO `categories` VALUES (18, '교재', 1, '2021-12-01 18:35:06', '2021-12-01 18:35:06');
INSERT INTO `categories` VALUES (19, '가구', 1, '2021-12-01 18:35:17', '2021-12-01 18:35:17');
INSERT INTO `categories` VALUES (20, '생필품', 1, '2021-12-01 18:35:50', '2021-12-01 18:35:50');
INSERT INTO `categories` VALUES (21, '식품/식물', 1, '2021-12-01 18:36:05', '2021-12-01 21:32:27');
INSERT INTO `categories` VALUES (22, '디지털', 1, '2021-12-01 18:36:53', '2021-12-01 18:36:53');
INSERT INTO `categories` VALUES (23, '악기', 1, '2021-12-01 18:37:37', '2021-12-01 18:37:37');
INSERT INTO `categories` VALUES (24, '건강', 1, '2021-12-01 18:37:49', '2021-12-01 18:37:49');
INSERT INTO `categories` VALUES (25, '잡화', 1, '2021-12-01 18:38:16', '2021-12-01 18:38:16');
INSERT INTO `categories` VALUES (26, '패션의류', 1, '2021-12-01 18:38:35', '2021-12-01 18:38:35');

-- ----------------------------
-- Table structure for collections
-- ----------------------------
DROP TABLE IF EXISTS `collections`;
CREATE TABLE `collections`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(11) NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `phone_number` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 51 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of collections
-- ----------------------------
INSERT INTO `collections` VALUES (46, '78', '책', 26, 'buyer1@gmail.com', 'buyer1', '2021-12-02 14:03:42', '01000010001', '지금 언어교육관에 공부하고 있어서 한국어 1을 원합니다.\n감사합니다!', '2021-12-02 14:03:42');
INSERT INTO `collections` VALUES (47, '77', '플로어 스탠드', 26, 'buyer1@gmail.com', 'buyer1', '2021-12-02 14:06:11', '01000010001', '이사해서 스탠드 하나 필요하고 사진에 있는 이 스탠드 난 너무 좋아 한다!', '2021-12-02 14:06:11');
INSERT INTO `collections` VALUES (48, '75', '쌀', 27, 'buyer2@gmail.com', 'buyer2', '2021-12-02 14:09:02', '01000020002', '낭비하는 것도 좋지 않은 행위이다.\n아직 안 팔렸으면 내가 너를 찾아가서 살게', '2021-12-02 14:09:02');
INSERT INTO `collections` VALUES (49, '73', '감귤', 27, 'buyer2@gmail.com', 'buyer2', '2021-12-02 14:11:03', '01000020002', '나는 감귤을 아주 좋아한다！\n연락 주세요！', '2021-12-02 14:11:03');
INSERT INTO `collections` VALUES (50, '78', '책', 30, 'marry@khu.ac.kr', 'marry', '2021-12-02 14:21:21', '01099999999', '나는 다음 학기에 우사세 수업을 들을 것이다.\n이 책 좀 주시겠어요?\n감사합니다!', '2021-12-02 14:21:21');

-- ----------------------------
-- Table structure for configs
-- ----------------------------
DROP TABLE IF EXISTS `configs`;
CREATE TABLE `configs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `key` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of configs
-- ----------------------------

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for feedbacks
-- ----------------------------
DROP TABLE IF EXISTS `feedbacks`;
CREATE TABLE `feedbacks`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NULL DEFAULT NULL,
  `real_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 17 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of feedbacks
-- ----------------------------
INSERT INTO `feedbacks` VALUES (14, NULL, 'marry', 'marry@khu.ac.kr', '2021-12-02 14:19:37', '매우 좋은 플랫폼이다.\n학생들이 졸업 후 가구 등 유휴품이 처리되지 않는 문제를 많이 해결하였다.', '2021-12-02 14:19:37');
INSERT INTO `feedbacks` VALUES (15, NULL, 'gary', 'gary@khu.ac.kr', '2021-12-02 14:24:36', '상품의 종류가 좀 많았으면 좋겠다', '2021-12-02 14:24:36');
INSERT INTO `feedbacks` VALUES (16, NULL, 'faker', 'faker1@naver.com', '2021-12-02 14:27:34', '유학생 맞춤형 중고거래 플랫폼이 점점 더 좋아졌으면 좋겠다!', '2021-12-02 14:27:34');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2020_12_13_004919_create_orders_table', 1);
INSERT INTO `migrations` VALUES (5, '2020_12_13_004956_create_seats_table', 1);
INSERT INTO `migrations` VALUES (6, '2020_12_13_005115_create_categories_table', 1);
INSERT INTO `migrations` VALUES (7, '2020_12_13_005648_create_products_table', 1);
INSERT INTO `migrations` VALUES (8, '2020_12_13_005704_create_members_table', 1);
INSERT INTO `migrations` VALUES (9, '2020_12_13_005744_create_products_comments_table', 1);
INSERT INTO `migrations` VALUES (10, '2020_12_13_005837_create_orders_products_table', 1);
INSERT INTO `migrations` VALUES (11, '2020_12_13_012155_create_config_table', 1);
INSERT INTO `migrations` VALUES (12, '2020_12_20_152656_create_news_table', 1);
INSERT INTO `migrations` VALUES (13, '2021_01_30_211132_create_address_table', 1);

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(555) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `user_id` bigint(20) NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 16 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES (14, '유학생 맞춤형 중고거래 플랫폼이 오픈했다!', '<p><img src=\"http://localhost/lib/layui/images/face/47.gif\" alt=\"[心]\"><img src=\"http://localhost/lib/layui/images/face/47.gif\" alt=\"[心]\"><img src=\"http://localhost/lib/layui/images/face/47.gif\" alt=\"[心]\"><img src=\"http://localhost/lib/layui/images/face/47.gif\" alt=\"[心]\"><img src=\"http://localhost/lib/layui/images/face/47.gif\" alt=\"[心]\"></p><p><span>우리 팀원의 노력과 교수님의 도움으로&nbsp;</span>유학생 맞춤형 중고거래 플랫폼이 오픈했다!&nbsp;</p><p><img src=\"http://localhost/lib/layui/images/face/47.gif\" alt=\"[心]\"><img src=\"http://localhost/lib/layui/images/face/47.gif\" alt=\"[心]\"><img src=\"http://localhost/lib/layui/images/face/47.gif\" alt=\"[心]\"><img src=\"http://localhost/lib/layui/images/face/47.gif\" alt=\"[心]\"><img src=\"http://localhost/lib/layui/images/face/47.gif\" alt=\"[心]\"><br></p>', 1, '2021-12-02 13:56:48', '2021-12-02 13:56:48');
INSERT INTO `news` VALUES (15, '초저가 판매', '<p><span>졸업 때문에 팔아야 할 물건이 많다.</span></p><p><span>나는 이미 쇼핑몰에 많은 상품을 진열했다.</span></p><p><span>모두 아주 싸게 판다.</span></p><p><span>연락해 주세요!&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -seller1<img src=\"http://localhost/lib/layui/images/face/47.gif\" alt=\"[心]\"></span></p>', 20, '2021-12-02 14:30:16', '2021-12-02 14:30:16');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `pic` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `pic_3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `pic_2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `pic_1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `price` double(10, 2) NULL DEFAULT NULL,
  `origin_price` double(10, 2) NULL DEFAULT NULL,
  `categories_id` int(11) NOT NULL,
  `view_num` int(11) NULL DEFAULT 1,
  `tags_id` int(11) NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `uploader` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 80 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES (38, '소파', '<p><span>색상: 그레이</span></p><p><span>졸업 후 귀국해서 데리고 갈 수 없다.</span></p><p><span>2년 사용했더니 약간의 얼룩이 있다.</span></p><p><span>마음에 드시면 제 집에 와서 보시고 사셔도 됩니다.</span></p><p><span>언제든지 연락해 수세요~&nbsp;<img src=\"http://localhost/lib/layui/images/face/47.gif\" alt=\"[心]\"><img src=\"http://localhost/lib/layui/images/face/47.gif\" alt=\"[心]\"><img src=\"http://localhost/lib/layui/images/face/47.gif\" alt=\"[心]\"></span></p>', '/images/SEtKfXhfAWe6cYZ2.jpg', NULL, NULL, '/images/11XC9euD57Kua6kq.jpg', 30000.00, 98000.00, 19, 1, 10, '2021-12-01 18:51:40', '2021-12-01 18:51:40', 'admin');
INSERT INTO `products` VALUES (39, '기타', '<p><span>나는 경희대학교&nbsp;</span>PostModern음학학과에 다니다.&nbsp;<img src=\"http://localhost/lib/layui/images/face/51.gif\" alt=\"[兔子]\"></p><p><span>졸업이 다가와 자기용 기타를 판다.&nbsp;<img src=\"http://localhost/lib/layui/images/face/51.gif\" alt=\"[兔子]\"></span></p><p><span>1년 동안만 썼는데 아무런 손상이 없다.&nbsp;<img src=\"http://localhost/lib/layui/images/face/51.gif\" alt=\"[兔子]\"></span></p><p><span>필요하시면 빨리 연락해 주세요!!!&nbsp;<img src=\"http://localhost/lib/layui/images/face/51.gif\" alt=\"[兔子]\"></span></p>', '/images/kMJYwUJ4tRAeoeeZ.jpg', NULL, NULL, NULL, 15000.00, 60000.00, 23, 1, 8, '2021-12-01 18:57:59', '2021-12-01 18:57:59', 'admin');
INSERT INTO `products` VALUES (40, '책', '<p><span>졸업하기 때문에 대학 때 쓰던 책을 판다.&nbsp;<img src=\"http://localhost/lib/layui/images/face/1.gif\" alt=\"[嘻嘻]\"></span></p><p><span>모든 책은 5000원이다.</span></p><p><span>많이 사시면 싸게 살 수 있다.</span></p>', '/images/0ijdiUE9fLIEaYSb.jpg', NULL, NULL, '/images/mmsRt2skbxEIGOOJ.jpg', 5000.00, 45000.00, 18, 1, 8, '2021-12-01 19:00:30', '2021-12-01 19:00:30', 'admin');
INSERT INTO `products` VALUES (41, '걸상/의자', '<p><span>이사하기 때문에 가져가고 싶지 않다.</span></p><p><span>초저가 판매!!!&nbsp;<img src=\"http://localhost/lib/layui/images/face/39.gif\" alt=\"[鼓掌]\"><img src=\"http://localhost/lib/layui/images/face/39.gif\" alt=\"[鼓掌]\"><img src=\"http://localhost/lib/layui/images/face/39.gif\" alt=\"[鼓掌]\"></span></p><p><span>사고 싶으면 집에 와서 가져가라</span></p>', '/images/ROQCmtEUaUPlzB9N.jpg', NULL, NULL, NULL, 5000.00, 20000.00, 19, 1, 6, '2021-12-01 19:04:22', '2021-12-01 19:04:22', 'admin');
INSERT INTO `products` VALUES (42, '빨래건조대', '<p>빨래건조대</p><p><span>전혀 새로운 것과 사용해 본 적이 없다.</span></p><p><span>룸메이트도 하나 샀으니까 이걸 팔아야 한다.</span></p><p><span>필요하시면 빨리 연락해 주세요!&nbsp;<img src=\"http://localhost/lib/layui/images/face/47.gif\" alt=\"[心]\"><img src=\"http://localhost/lib/layui/images/face/47.gif\" alt=\"[心]\"><img src=\"http://localhost/lib/layui/images/face/47.gif\" alt=\"[心]\"></span></p>', '/images/7Q4GsoTWUBiNyJfg.jpg', NULL, NULL, NULL, 5000.00, 15010.00, 20, 1, 8, '2021-12-01 19:09:21', '2021-12-01 19:09:21', 'admin');
INSERT INTO `products` VALUES (43, '대걸레', '<p><span>졸업 후 귀국하기 때문에 자기 집에서 쓰던&nbsp;</span>대걸레를 판다.</p><p>언제든지 연락해 수세요~&nbsp;<img src=\"http://localhost/lib/layui/images/face/50.gif\" alt=\"[熊猫]\"></p>', '/images/zzmRLcAURDRaFRkB.jpg', NULL, NULL, NULL, 3000.00, 45000.00, 20, 1, 10, '2021-12-01 19:13:02', '2021-12-01 19:13:02', 'admin');
INSERT INTO `products` VALUES (44, '의자', '<p><span>컬러:블루、 화이트</span></p><p><span>자기 집에서 쓰는 의자</span></p><p><span>졸업하기 때문에 판다.&nbsp;<img src=\"http://localhost/lib/layui/images/face/29.gif\" alt=\"[拜拜]\"></span></p><p><span>의자 하나에 3000원, 둘 다 사시면 5000원.&nbsp;<img src=\"http://localhost/lib/layui/images/face/47.gif\" alt=\"[心]\"></span></p><p><span>필요하시면 빨리 연락해 주세요!!!</span></p>', '/images/W5CRisJRe9awr4eN.jpg', NULL, NULL, '/images/LPoEf3VTeai8rtxu.jpg', 3000.00, 12000.00, 19, 1, 6, '2021-12-01 19:26:11', '2021-12-01 19:26:11', 'seller1');
INSERT INTO `products` VALUES (45, '수납함', '<p><span>기숙사에서 쓰는 수납함이다.&nbsp;<img src=\"http://localhost/lib/layui/images/face/1.gif\" alt=\"[嘻嘻]\"></span></p><p><span>새것을 하나 샀기 때문에 이걸 팔려고 한다.&nbsp;<img src=\"http://localhost/lib/layui/images/face/1.gif\" alt=\"[嘻嘻]\"></span></p><p><span>필요하시면 빨리 연락해 주세요!&nbsp;<img src=\"http://localhost/lib/layui/images/face/1.gif\" alt=\"[嘻嘻]\"></span></p><p><span><br></span></p>', '/images/Ut6oQGekyl9fnJkT.jpg', NULL, NULL, NULL, 5000.00, 23000.00, 25, 1, 8, '2021-12-01 19:28:53', '2021-12-01 19:28:53', 'seller1');
INSERT INTO `products` VALUES (46, '책(경희대 한국어1)', '<p><span>언어 교육관에서 사용하는 교재&nbsp;<img src=\"http://localhost/lib/layui/images/face/51.gif\" alt=\"[兔子]\"></span></p><p><span>책 위에 나의 필기가 많이 있다.&nbsp;<img src=\"http://localhost/lib/layui/images/face/51.gif\" alt=\"[兔子]\"></span></p><p><span>곧&nbsp;</span>언어 교육관 다니실 분 어서 사세요.&nbsp;<img src=\"http://localhost/lib/layui/images/face/51.gif\" alt=\"[兔子]\"></p>', '/images/M6YXjGPNxa8IGlV1.jpg', NULL, NULL, NULL, 5000.00, 23000.00, 18, 1, 8, '2021-12-01 19:31:46', '2021-12-01 19:31:46', 'seller1');
INSERT INTO `products` VALUES (47, '책(언어 교육)', '<p>언어 교육관에서 사용하는 교재&nbsp;</p><p>책 위에 나의 필기가 많이 있다.&nbsp;</p><p>곧&nbsp;언어 교육관 다니실 분 어서 사세요~~~&nbsp;<img src=\"http://localhost/lib/layui/images/face/71.gif\" alt=\"[蛋糕]\"><img src=\"http://localhost/lib/layui/images/face/71.gif\" alt=\"[蛋糕]\"><img src=\"http://localhost/lib/layui/images/face/71.gif\" alt=\"[蛋糕]\"></p>', '/images/Fw5usHkJTKLXVj6n.jpg', NULL, NULL, NULL, 5000.00, 99999.00, 18, 1, 8, '2021-12-01 19:33:57', '2021-12-01 19:33:57', 'seller1');
INSERT INTO `products` VALUES (48, '라우터', '<p><span>새로 산 라우터.</span></p><p><span>셋방에는&nbsp;</span>라우터가 있어서 이 라우터는 필요 없다.</p><p><span>써 본 적이 없다.</span></p><p><span>필요하시면 언제든지 연락해 주세요.&nbsp;<img src=\"http://localhost/lib/layui/images/face/47.gif\" alt=\"[心]\"><img src=\"http://localhost/lib/layui/images/face/47.gif\" alt=\"[心]\"><img src=\"http://localhost/lib/layui/images/face/47.gif\" alt=\"[心]\"></span></p>', '/images/JJGBpLdwn8sMr65K.jpg', NULL, NULL, NULL, 10000.00, 23900.00, 22, 1, 10, '2021-12-01 19:38:07', '2021-12-01 19:38:07', 'seller1');
INSERT INTO `products` VALUES (49, '노트북', '<p><span>나는 경희대학교 컴퓨터공학과 학생이다.</span></p><p><span>자신이 쓰는 노트북을 판매하다.</span></p><p><span>가격은 상의할 수 있다.</span></p><p><span>학교에서 거래하고 싶다.</span></p><p><span>마음에 드시면&nbsp;</span>연락해 수세요.&nbsp;<img src=\"http://localhost/lib/layui/images/face/50.gif\" alt=\"[熊猫]\"><img src=\"http://localhost/lib/layui/images/face/50.gif\" alt=\"[熊猫]\"><img src=\"http://localhost/lib/layui/images/face/50.gif\" alt=\"[熊猫]\"></p>', '/images/MiXAg8qImaIXbgEy.jpg', NULL, NULL, NULL, 300000.00, 780000.00, 22, 1, 8, '2021-12-01 19:42:15', '2021-12-01 19:42:15', 'seller1');
INSERT INTO `products` VALUES (50, '책', '<p><span>졸업 때문에 대학교 때 쓰던 교재를 판다.</span></p><p><span>사진상으로는 일부분일 뿐이니 원하는 책이 있으면 물어보세요.&nbsp;<img src=\"http://localhost/lib/layui/images/face/51.gif\" alt=\"[兔子]\"></span></p>', '/images/reVZ6XSRXd5duLod.jpg', NULL, NULL, NULL, 5000.00, 60000.00, 18, 1, 8, '2021-12-01 20:27:24', '2021-12-01 20:27:24', 'seller2');
INSERT INTO `products` VALUES (51, '책(교양)', '<p><span>교양 과목의 일부 교재이다.</span></p><p><span>기본적으로 사용 흔적이 없다.</span></p><p><span>필요하시면 빨리 연락해 주세요!!!&nbsp;&nbsp;<img src=\"http://localhost/lib/layui/images/face/16.gif\" alt=\"[太开心]\"><img src=\"http://localhost/lib/layui/images/face/16.gif\" alt=\"[太开心]\"><img src=\"http://localhost/lib/layui/images/face/16.gif\" alt=\"[太开心]\"></span></p>', '/images/3MXM1dI04uY1aBIt.jpg', NULL, NULL, NULL, 6000.00, 50000.00, 18, 1, 8, '2021-12-01 20:29:24', '2021-12-01 20:29:24', 'seller2');
INSERT INTO `products` VALUES (52, '책상', '<p><span>사진 위와 같은 책상이다.</span></p><p><span>개인 사정으로 매각.</span></p><p><span>완전히 새로운, 미사용</span></p><p><span>스스로 조립해야 한다.</span></p><p><span>마음에 드시면 제 집에 와서 보시고 사셔도 됩니다.</span></p>', '/images/pBmzYfvPAuEjgJzO.jpg', NULL, NULL, NULL, 15000.00, 30000.00, 19, 1, 10, '2021-12-01 20:33:00', '2021-12-01 20:33:00', 'seller2');
INSERT INTO `products` VALUES (53, '중국 식품', '<p><span>중국에서 가져온 음식.</span></p><p><span>요리할 때 사용 가능.</span></p><p><span>필요하시면 빨리 연락해 주세요!!!&nbsp;<img src=\"http://localhost/lib/layui/images/face/71.gif\" alt=\"[蛋糕]\"><img src=\"http://localhost/lib/layui/images/face/71.gif\" alt=\"[蛋糕]\"><img src=\"http://localhost/lib/layui/images/face/71.gif\" alt=\"[蛋糕]\"></span></p>', '/images/ezVq4L6vpkTwKwsY.jpg', NULL, NULL, NULL, 2000.00, 9999.00, 21, 1, 8, '2021-12-01 20:35:27', '2021-12-01 20:35:27', 'seller2');
INSERT INTO `products` VALUES (54, '여행 트렁크', '<p><span>몇 번 쓰지 않은&nbsp;</span>여행 트렁크&nbsp;<img src=\"http://localhost/lib/layui/images/face/50.gif\" alt=\"[熊猫]\"></p><p><span>아무런 손상이 없다&nbsp;</span><img src=\"http://localhost/lib/layui/images/face/50.gif\" alt=\"[熊猫]\"></p><p><span>세 가지 사이즈가 있다&nbsp;</span><img src=\"http://localhost/lib/layui/images/face/50.gif\" alt=\"[熊猫]\"></p><p>마음에 드시면 제 집에 와서 보시고 사셔도 됩니다.</p>', '/images/XemEpKzCsZPO8fKg.jpg', NULL, NULL, NULL, 20000.00, 100000.00, 25, 1, 6, '2021-12-01 20:39:34', '2021-12-01 20:39:34', 'seller2');
INSERT INTO `products` VALUES (55, '옷걸이', '<p><span>집에는 쓸모없는 옷걸이가 많다.</span></p><p><span>집에서 사용해도 되고 기숙사에서 사용해도 되다.</span></p><p><span>많이 사면 싸게 살 수 있다.</span></p><p>필요하시면 빨리 연락해 주세요!!!&nbsp;<img src=\"http://localhost/lib/layui/images/face/47.gif\" alt=\"[心]\"></p>', '/images/x0IpNK1pmS5BrsAg.jpg', NULL, NULL, NULL, 500.00, 1000.00, 20, 1, 10, '2021-12-01 20:45:17', '2021-12-01 20:45:17', 'seller2');
INSERT INTO `products` VALUES (56, '기숙사용 작은 선풍기', '<p><span>기숙사에서 사용하는 작은 선풍기&nbsp;<img src=\"http://localhost/lib/layui/images/face/1.gif\" alt=\"[嘻嘻]\"></span></p><p><span>침대 머리맡에 끼울 수 있다&nbsp;</span><img src=\"http://localhost/lib/layui/images/face/1.gif\" alt=\"[嘻嘻]\"></p><p><span>졸업했기 때문에 필요 없다&nbsp;</span><img src=\"http://localhost/lib/layui/images/face/1.gif\" alt=\"[嘻嘻]\"></p><p><span>좋으면 빨리 사러 와&nbsp;</span><img src=\"http://localhost/lib/layui/images/face/1.gif\" alt=\"[嘻嘻]\"></p>', '/images/RXm8BsJOJJqgGWlS.jpg', NULL, NULL, NULL, 8000.00, 15000.00, 25, 1, 8, '2021-12-01 20:49:46', '2021-12-01 20:49:46', 'seller2');
INSERT INTO `products` VALUES (57, '교양 수업용 책', '<p>인간의 가치 탐색과 언어학 개론 전용 교재</p><p>책에 필기가 있다</p><p>필요하시면 연락해 주세요</p>', '/images/qqVA3EYemVzb46C7.jpg', NULL, NULL, NULL, 6000.00, 38000.00, 18, 1, 8, '2021-12-01 21:04:03', '2021-12-01 21:04:03', 'seller3');
INSERT INTO `products` VALUES (58, '침대', '<p><span>자가용 침대</span></p><p><span>이사갈때 가져가기 싫어서 판매한다.</span></p><p>옮길 때<span>&nbsp;스스로 이사업체를 찾아야 하기 때문에 아주 싸게 판다.</span></p><p><span>마음에 드시면 제 집에 와서 보시고 사셔도 됩니다.&nbsp;<img src=\"http://localhost/lib/layui/images/face/8.gif\" alt=\"[挤眼]\"></span></p>', '/images/76nrwbQzqnZTR5vS.jpg', NULL, NULL, NULL, 30000.00, 120000.00, 19, 1, 10, '2021-12-01 21:09:27', '2021-12-01 21:09:27', 'seller3');
INSERT INTO `products` VALUES (59, '선풍기', '<p>소형 선풍기&nbsp;<img src=\"http://localhost/lib/layui/images/face/47.gif\" alt=\"[心]\"></p><p>집이나 기숙사에서 사용할 수 있다.&nbsp;<img src=\"http://localhost/lib/layui/images/face/47.gif\" alt=\"[心]\"></p><p>필요하시면 빨리 연락해 주세요!!!&nbsp;<img src=\"http://localhost/lib/layui/images/face/47.gif\" alt=\"[心]\"></p>', '/images/7UqSdLix610EIMgR.jpg', NULL, NULL, NULL, 10000.00, 34000.00, 25, 1, 10, '2021-12-01 21:16:08', '2021-12-01 21:16:08', 'seller3');
INSERT INTO `products` VALUES (60, '라우터', '<p>기숙사에서 사용하는 라우터&nbsp;<img src=\"http://localhost/lib/layui/images/face/1.gif\" alt=\"[嘻嘻]\"></p><p>인터넷 속도가 매우 빠름&nbsp;<img src=\"http://localhost/lib/layui/images/face/1.gif\" alt=\"[嘻嘻]\"></p>', '/images/qzvUsMOm1UEUWH2a.jpg', NULL, NULL, NULL, 5000.00, 13000.00, 22, 1, 8, '2021-12-01 21:18:21', '2021-12-01 21:18:21', 'seller3');
INSERT INTO `products` VALUES (61, '디지털피아노', '<p>카시오 88건반&nbsp;디지털피아노 CDP-S90</p><p>집에 돌아와서 가지고 갈 수 없어서 판매합니다.</p><p>평소에 아주 조심스럽게 사용하니까&nbsp;흠집과 얼룩 없습나다.</p><p><span>마음에 들면 연락하세요.</span></p><p><span>미안하지만 평소에는 수업이 바빠서 답장이 느립니다.</span></p>', '/images/rhZlYagHzIR6qQ1T.jpg', NULL, NULL, NULL, 150000.00, 399000.00, 23, 1, 8, '2021-12-01 21:24:08', '2021-12-01 21:24:08', 'seller3');
INSERT INTO `products` VALUES (62, '책(교양 필수)', '<p><span>필수 교양 과목에 필요한 책.&nbsp;<img src=\"http://localhost/lib/layui/images/face/25.gif\" alt=\"[抱抱]\">&nbsp;</span></p><p><span>만약 세 권을 모두 원한다면 2만 원&nbsp;<img src=\"http://localhost/lib/layui/images/face/1.gif\" alt=\"[嘻嘻]\"></span></p><p><span>집까지 배달 가능&nbsp;<img src=\"http://localhost/lib/layui/images/face/36.gif\" alt=\"[酷]\"></span></p>', '/images/deqxzWFU9JpHrWtk.jpg', NULL, NULL, NULL, 6000.00, 32000.00, 18, 1, 8, '2021-12-01 21:27:49', '2021-12-01 21:27:49', 'seller3');
INSERT INTO `products` VALUES (63, '걸상', '<p><span>기숙사용 걸상&nbsp;<img src=\"http://localhost/lib/layui/images/face/3.gif\" alt=\"[可爱]\"></span></p><p><span>초저가 판매&nbsp;</span><img src=\"http://localhost/lib/layui/images/face/3.gif\" alt=\"[可爱]\"></p><p><span><br></span></p>', '/images/0qGaOw5jee6AW69K.jpg', NULL, NULL, NULL, 3000.00, 9999.00, 19, 1, 6, '2021-12-01 21:31:07', '2021-12-01 21:31:07', 'liang');
INSERT INTO `products` VALUES (64, '분재 식물', '<p><span>자기 집에서 기르는&nbsp;</span>분재 식물&nbsp;<img src=\"http://localhost/lib/layui/images/face/47.gif\" alt=\"[心]\"></p><p><span>창턱 위에 놓으니 아주 보기 좋다.&nbsp;</span><img src=\"http://localhost/lib/layui/images/face/47.gif\" alt=\"[心]\"></p><p>평소에는 자주 관리할 필요 없이 가끔 물만 주시면 된다.&nbsp;<img src=\"http://localhost/lib/layui/images/face/47.gif\" alt=\"[心]\"></p><p><span>마음에 드시면 나한테 연락해 주고 집에 와서 골라요.&nbsp;</span><img src=\"http://localhost/lib/layui/images/face/47.gif\" alt=\"[心]\"></p>', '/images/l84SQFEhaGCT5Nh1.png', NULL, NULL, '/images/Ui7lYkccHwTWg2uz.png', 8000.00, 20000.00, 21, 1, 10, '2021-12-01 21:37:53', '2021-12-01 21:37:53', 'liang');
INSERT INTO `products` VALUES (65, '카메라', '<p>여행할 때 사용하는 카메라&nbsp;</p><p><span>3년 걸렸기 때문에 약간의 사용 흔적이 있다.</span></p><p><span>하지만 아무런 고장이 없었다.</span></p><p><span>마음에 들면 연락해줘&nbsp;<img src=\"http://localhost/lib/layui/images/face/50.gif\" alt=\"[熊猫]\"></span></p><p><span>가격은 상의할 수 있다&nbsp;</span><img src=\"http://localhost/lib/layui/images/face/50.gif\" alt=\"[熊猫]\"></p>', '/images/7bEIfg8O0RdkwEiS.png', NULL, NULL, '/images/XiL3Y3TfDYvp2y5A.png', 220000.00, 500000.00, 22, 1, 11, '2021-12-01 21:44:59', '2021-12-01 21:44:59', 'liang');
INSERT INTO `products` VALUES (66, '두유 제조기', '<p>중국에서 가져온 두유 제조기&nbsp;<img src=\"http://localhost/lib/layui/images/face/8.gif\" alt=\"[挤眼]\"></p><p>집에서 두유등 기타 음료를 만들 수 있다.&nbsp;<img src=\"http://localhost/lib/layui/images/face/47.gif\" alt=\"[心]\"></p><p><span>졸업하기 때문에 헐값에 판다.</span></p>', '/images/uLanxLJUxai5pKf7.jpg', NULL, NULL, NULL, 12000.00, 30000.00, 22, 1, 10, '2021-12-01 21:57:12', '2021-12-01 21:57:12', 'liang');
INSERT INTO `products` VALUES (67, '전자레인지 / 전기 오븐', '<p><span>자가용 전자레인지와&nbsp;</span>전기 오븐</p><p><span>몇 번 쓰지 않았다</span></p><p>이사하기 때문에 가져가고 싶지 않다.</p><p>초저가 판매!!!</p><p>사고 싶으면 집에 와서 가져가라&nbsp;<img src=\"http://localhost/lib/layui/images/face/47.gif\" alt=\"[心]\"><img src=\"http://localhost/lib/layui/images/face/47.gif\" alt=\"[心]\"><img src=\"http://localhost/lib/layui/images/face/47.gif\" alt=\"[心]\"></p>', '/images/XX0DMdQIInX8gsMy.jpg', NULL, NULL, NULL, 20000.00, 70000.00, 22, 1, 10, '2021-12-01 22:00:33', '2021-12-01 22:00:33', 'liang');
INSERT INTO `products` VALUES (68, '소파', '<p>이사하기 때문에 가져가고 싶지 않다.</p><p>초저가 판매!!!</p><p>사고 싶으면 집에 와서 가져가라</p>', '/images/f1GODkVIx2GP7dij.jpg', NULL, NULL, NULL, 30000.00, 100000.00, 19, 1, 6, '2021-12-01 22:01:32', '2021-12-01 22:01:32', 'liang');
INSERT INTO `products` VALUES (69, '책상', '<p>이사하기 때문에 가져가고 싶지 않다.</p><p>초저가 판매!!!</p><p>사고 싶으면 집에 와서 가져가라</p>', '/images/F7yNnXBt5X2TnCKv.jpg', NULL, NULL, '/images/JZuQ0yWe1cK8WKj5.jpg', 13000.00, 35000.00, 19, 1, 10, '2021-12-01 22:03:29', '2021-12-01 22:03:29', 'liwenhao');
INSERT INTO `products` VALUES (70, '책', '<p><span>한국에서 산 책들&nbsp;<img src=\"http://localhost/lib/layui/images/face/3.gif\" alt=\"[可爱]\"></span></p><p><span>사진에 있는 책 말고도 아직 많이 있다.&nbsp;<img src=\"http://localhost/lib/layui/images/face/3.gif\" alt=\"[可爱]\"></span></p><p><span>필요하면 연락해 주세요&nbsp;</span><img src=\"http://localhost/lib/layui/images/face/3.gif\" alt=\"[可爱]\"></p>', '/images/P6tE27uF7HQEk8Da.jpg', NULL, NULL, NULL, 3000.00, 20000.00, 18, 1, 8, '2021-12-01 22:07:21', '2021-12-01 22:07:21', 'liwenhao');
INSERT INTO `products` VALUES (71, '의자', '<p><span>나는 기숙사에서 사용하는 의자이다.</span></p><p><span>집에서 사용하셔도 되고</span></p><p><span>빨리 사러 오세요~~~&nbsp;<img src=\"http://localhost/lib/layui/images/face/3.gif\" alt=\"[可爱]\"><img src=\"http://localhost/lib/layui/images/face/3.gif\" alt=\"[可爱]\"><img src=\"http://localhost/lib/layui/images/face/3.gif\" alt=\"[可爱]\"></span></p>', '/images/lCue1K7wiDf5BIzc.jpg', NULL, NULL, '/images/JiIjsT5kuW0Q5EWM.jpg', 5000.00, 18000.00, 25, 1, 8, '2021-12-01 22:10:30', '2021-12-01 22:10:30', 'liwenhao');
INSERT INTO `products` VALUES (72, '선풍기', '<p><span>색상: 화이트&nbsp;<img src=\"http://localhost/lib/layui/images/face/47.gif\" alt=\"[心]\"></span></p><p><span>착지 선풍기&nbsp;<img src=\"http://localhost/lib/layui/images/face/47.gif\" alt=\"[心]\"></span></p><p><span>사용한 적이 없다&nbsp;<img src=\"http://localhost/lib/layui/images/face/47.gif\" alt=\"[心]\"></span></p><p>필요하시면 빨리 연락해 주세요!!!&nbsp;<img src=\"http://localhost/lib/layui/images/face/47.gif\" alt=\"[心]\"></p><p><span><br></span></p>', '/images/OellEF1ljIZ2fUsa.jpg', NULL, NULL, '/images/LhbbdH9x2C8pdrP8.jpg', 22000.00, 42000.00, 22, 1, 10, '2021-12-01 22:13:12', '2021-12-01 22:13:12', 'liwenhao');
INSERT INTO `products` VALUES (73, '감귤', '<p><span>마트에서 물건을 사서 주는 감귤 한 상자!</span></p><p><span>하지만 나는 감귤을 좋아하지 않는다.&nbsp;<img src=\"http://localhost/lib/layui/images/face/12.gif\" alt=\"[泪]\"></span></p><p><span>지금은 싸게 팔고&nbsp;</span><span>감귤 좋아하시는 분 빨리 학교로 찾아와 주세요!&nbsp;<img src=\"http://localhost/lib/layui/images/face/51.gif\" alt=\"[兔子]\"></span></p>', '/images/lTx9qOLirLHTKNy7.png', NULL, NULL, NULL, 8000.00, 12000.00, 21, 1, 8, '2021-12-01 22:22:11', '2021-12-01 22:22:11', 'liwenhao');
INSERT INTO `products` VALUES (74, '책', '<p><span>학교용 교재</span></p><p><span>그림 속의 이 책들만이 남았다.</span></p><p><span>필요하시면 빨리 연락해 주세요!!!&nbsp;<img src=\"http://localhost/lib/layui/images/face/47.gif\" alt=\"[心]\"><img src=\"http://localhost/lib/layui/images/face/47.gif\" alt=\"[心]\"><img src=\"http://localhost/lib/layui/images/face/47.gif\" alt=\"[心]\"></span></p>', '/images/mLoJtB2tWsKIwGQD.jpg', NULL, NULL, NULL, 5000.00, 23000.00, 18, 1, 8, '2021-12-01 22:25:15', '2021-12-01 22:25:15', 'huxuyang');
INSERT INTO `products` VALUES (75, '쌀', '<p><span>졸업 때문에 산 쌀을 다 못 먹다.</span></p><p><span>원가 38800원으로 산 쌀이 아직 반 남짓 남았다.</span></p><p><span>버리는 게 아까워서 싸게 판다.</span></p><p><span>가격도 협상할 수 있다.&nbsp;<img src=\"http://localhost/lib/layui/images/face/1.gif\" alt=\"[嘻嘻]\"></span></p>', '/images/2UbL5C3AQjY4RtKg.jpg', NULL, NULL, NULL, 10000.00, 38800.00, 21, 1, 10, '2021-12-01 22:28:44', '2021-12-01 22:28:44', 'huxuyang');
INSERT INTO `products` VALUES (76, '수납함', '<p><span>기숙사에 쓰는 수납함</span></p><p><span>옷과 잡동사니를 담는 데 쓸 수 있다</span></p><p><span>언제든지 연락해 수세요~</span></p><p><span><img src=\"http://localhost/lib/layui/images/face/25.gif\" alt=\"[抱抱]\"><img src=\"http://localhost/lib/layui/images/face/25.gif\" alt=\"[抱抱]\"><img src=\"http://localhost/lib/layui/images/face/25.gif\" alt=\"[抱抱]\"><br></span></p>', '/images/IYsyN8wifPPwUKVj.png', NULL, NULL, '/images/TAZLtMm7ddehIEYA.jpg', 5000.00, 14000.00, 25, 1, 8, '2021-12-01 22:31:19', '2021-12-01 22:31:19', 'huxuyang');
INSERT INTO `products` VALUES (77, '플로어 스탠드', '<p><span>침실이나 거실에서 사용 가능&nbsp;</span><img src=\"http://localhost/lib/layui/images/face/47.gif\" alt=\"[心]\"></p><p>이사하기 때문에 가져가고 싶지 않다.&nbsp;<img src=\"http://localhost/lib/layui/images/face/47.gif\" alt=\"[心]\"></p><p>초저가 판매!!!&nbsp;<img src=\"http://localhost/lib/layui/images/face/47.gif\" alt=\"[心]\"></p><p>마음에 드시면 제 집에 와서 보시고 사셔도 됩니다.&nbsp;<img src=\"http://localhost/lib/layui/images/face/47.gif\" alt=\"[心]\"></p>', '/images/D1MsArXqVgx99Co0.jpg', NULL, NULL, '/images/RCKZvjAXEpiYUWb5.jpg', 20000.00, 45000.00, 19, 1, 10, '2021-12-01 22:33:34', '2021-12-01 22:33:34', 'huxuyang');
INSERT INTO `products` VALUES (78, '책', '<p><span>나는 졸업했어&nbsp;<img src=\"http://localhost/lib/layui/images/face/71.gif\" alt=\"[蛋糕]\"><img src=\"http://localhost/lib/layui/images/face/71.gif\" alt=\"[蛋糕]\"><img src=\"http://localhost/lib/layui/images/face/71.gif\" alt=\"[蛋糕]\"></span></p><p><span>많은 책이 친구에게 보내졌는데, 집에 이렇게 몇 권의 책이 남아 있다.&nbsp;<img src=\"http://localhost/lib/layui/images/face/1.gif\" alt=\"[嘻嘻]\"></span></p><p><span>필요하면 연락 주세요~&nbsp;<img src=\"http://localhost/lib/layui/images/face/1.gif\" alt=\"[嘻嘻]\"></span></p><p><span>무료로 보내다!&nbsp;<img src=\"http://localhost/lib/layui/images/face/47.gif\" alt=\"[心]\"></span></p>', '/images/rrtV6XOCySe1gmIu.png', NULL, NULL, NULL, 0.00, 39999.00, 18, 1, 8, '2021-12-01 22:42:25', '2021-12-01 22:42:25', 'huxuyang');
INSERT INTO `products` VALUES (79, '연습용 기타', '<p><span>자신이 평소에 연습해서 사용하는 기타~&nbsp;<img src=\"http://localhost/lib/layui/images/face/51.gif\" alt=\"[兔子]\"></span></p><p><span>아주 조심스럽게 사용해서 전혀 파손되지 않다&nbsp;<img src=\"http://localhost/lib/layui/images/face/51.gif\" alt=\"[兔子]\"></span></p><p><span>졸업 때문에 싸게 판다&nbsp;</span><img src=\"http://localhost/lib/layui/images/face/51.gif\" alt=\"[兔子]\"></p><p>사고 싶으면 집에 와서 가져가라&nbsp;<img src=\"http://localhost/lib/layui/images/face/51.gif\" alt=\"[兔子]\"></p><p>언제든지 연락해 주세요~&nbsp;<img src=\"http://localhost/lib/layui/images/face/51.gif\" alt=\"[兔子]\"></p>', '/images/ycSaVipqc1t6wcBW.png', NULL, NULL, '/images/tbHuGe0rkojc4dFL.png', 20000.00, 80000.00, 23, 1, 6, '2021-12-01 22:46:27', '2021-12-01 22:46:27', 'huxuyang');

-- ----------------------------
-- Table structure for products_comments
-- ----------------------------
DROP TABLE IF EXISTS `products_comments`;
CREATE TABLE `products_comments`  (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NULL DEFAULT NULL,
  `product_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `phone` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `user_id` int(11) NULL DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `reply` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  INDEX `id`(`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of products_comments
-- ----------------------------
INSERT INTO `products_comments` VALUES (4, 78, '책', NULL, 32, 'uzi', NULL, '이 판매자는 대단히 좋아!\n내가  필요할 책도 많이 주고, 노트도 많이 줬어!', '감사합니다!', '2021-12-02 14:14:43', '2021-12-02 14:17:21');
INSERT INTO `products_comments` VALUES (5, 79, '연습용 기타', NULL, 32, 'uzi', NULL, '기타는 받았어요. 아주 깨끗하고 흠잡을 데가 없어요！', '사랑해~&nbsp;<img src=\"http://localhost/lib/layui/images/face/47.gif\" alt=\"[心]\">', '2021-12-02 14:16:11', '2021-12-02 14:17:09');
INSERT INTO `products_comments` VALUES (6, 78, '책', NULL, 30, 'marry', NULL, '판매자에게 메모를 남긴 후에 그는 바로 나에게 연락을 했다.', NULL, '2021-12-02 14:23:21', '2021-12-02 14:23:21');
INSERT INTO `products_comments` VALUES (7, 46, '책(경희대 한국어1)', NULL, 31, 'gary', NULL, '마침 이 책이 필요하군요!', NULL, '2021-12-02 14:25:40', '2021-12-02 14:25:40');

-- ----------------------------
-- Table structure for tags
-- ----------------------------
DROP TABLE IF EXISTS `tags`;
CREATE TABLE `tags`  (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `user_id` bigint(20) NULL DEFAULT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tags
-- ----------------------------
INSERT INTO `tags` VALUES (6, '파격가', 1, '2021-12-01 18:28:07', '2021-12-01 18:28:07');
INSERT INTO `tags` VALUES (8, '학교 생활', 1, '2021-12-01 18:28:42', '2021-12-01 18:28:42');
INSERT INTO `tags` VALUES (10, '가정 필수', 1, '2021-12-01 18:33:07', '2021-12-01 18:33:07');
INSERT INTO `tags` VALUES (11, '사무 필수', 1, '2021-12-01 18:33:51', '2021-12-01 18:33:51');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_status` tinyint(1) NULL DEFAULT 1,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 34 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'admin', 'admin@qq.com', NULL, '$2y$10$M3R/J7lBdsL2ZQXf.u9ZGO/BJR.8GdSMMwlUN7aWgbAKC/aZv4zlu', NULL, '2021-10-30 21:46:41', '2021-11-18 16:18:21', 1, '34343', '可以管理所有平台');
INSERT INTO `users` VALUES (22, 'seller3', 'seller3@gmail.com', NULL, '$2y$10$Mz4sdgJ3MbbOEy6gv6C8I.5Byogoh4I.Woplpa5PvUZvcf3FYHFFK', NULL, '2021-12-01 18:19:25', '2021-12-01 18:19:25', 1, NULL, NULL);
INSERT INTO `users` VALUES (21, 'seller2', 'seller2@gmail.com', NULL, '$2y$10$QWmuYfqEyfWz2MCfaZf9YehojdYs0zl5.cpSqAlb27T1knAMnXtrC', NULL, '2021-12-01 18:19:09', '2021-12-01 18:19:09', 1, NULL, NULL);
INSERT INTO `users` VALUES (20, 'seller1', 'seller1@gmail.com', NULL, '$2y$10$30rZAYeWwGVpeJDM5qfJjOcg5IrLUnvAZq/21dAtJPcw3VS.pZ6ya', NULL, '2021-12-01 18:18:44', '2021-12-01 18:18:44', 1, NULL, NULL);
INSERT INTO `users` VALUES (23, 'liwenhao', 'liwenhao@qq.com', NULL, '$2y$10$Om0jkTUUIdtAHSoDs10wieHsM4VjV4a2ZSzseyKMMbxf7Q9uaKnri', NULL, '2021-12-01 18:19:58', '2021-12-01 18:19:58', 1, NULL, NULL);
INSERT INTO `users` VALUES (24, 'liang', 'liang@gmail.com', NULL, '$2y$10$MDv14Nai0PBu0jTFIl7PiuXV4q4tccEqKdiu8cPWWzRggzfCbsG4G', NULL, '2021-12-01 18:20:14', '2021-12-01 18:20:14', 1, NULL, NULL);
INSERT INTO `users` VALUES (25, 'huxuyang', 'hu@khu.ac.kr', NULL, '$2y$10$ZsQGrN5u/0BF/lhuUh0e1u8YeJ3q33Yw8NOT2YeLfFEUJrwoIWJv6', NULL, '2021-12-01 18:20:38', '2021-12-01 18:20:38', 1, NULL, NULL);
INSERT INTO `users` VALUES (26, 'buyer1', 'buyer1@gmail.com', NULL, '$2y$10$IlQ3UFJglzSwPeAr4usFfO/oWuU0d/BaqFsY.GNsnF3xd2nVWyA.m', NULL, '2021-12-01 18:40:51', '2021-12-01 18:40:51', 2, NULL, NULL);
INSERT INTO `users` VALUES (27, 'buyer2', 'buyer2@gmail.com', NULL, '$2y$10$tmWzmdQFPJTkdEvpB1NgpOv7Zs8o4UpUpAo3LI8laSkd0M28f2tHm', NULL, '2021-12-01 18:41:12', '2021-12-01 18:41:12', 2, NULL, NULL);
INSERT INTO `users` VALUES (28, 'buyer3', 'buyer3@gmail.com', NULL, '$2y$10$WBH.AJyeLeGNk1ogROViVu98e0b0DyFVFlomyC0ASj.fXPOTe.HlO', NULL, '2021-12-01 18:41:39', '2021-12-01 18:41:39', 2, NULL, NULL);
INSERT INTO `users` VALUES (29, 'Bob', 'bob@khu.ac.kr', NULL, '$2y$10$JgSTeV.zevQKPRXmq8l8jeCdPq2hz4lmRUJCUr.qC6lIGdIJQ/Nka', NULL, '2021-12-01 18:42:11', '2021-12-01 18:42:11', 2, NULL, NULL);
INSERT INTO `users` VALUES (30, 'marry', 'marry@khu.ac.kr', NULL, '$2y$10$UQDFnPv143fUAnx1I9C3G.MgOiJc0rkgrMmAfqv2iAqAAqYz.OyHi', NULL, '2021-12-01 18:43:36', '2021-12-01 18:43:36', 2, NULL, NULL);
INSERT INTO `users` VALUES (31, 'gary', 'gary@khu.ac.kr', NULL, '$2y$10$rsu3Ejcl/5IluMZpenhfD.KVzww.nX6MAL186I75oEYj0EZ4P1Adq', NULL, '2021-12-01 18:44:01', '2021-12-01 18:44:01', 2, NULL, NULL);
INSERT INTO `users` VALUES (32, 'uzi', 'uzi666@163.com', NULL, '$2y$10$MAm0g7iChJJ.Vf7tGantxOQeclKy12EttgUapEIkjMYY7awgYBuDi', NULL, '2021-12-01 18:44:21', '2021-12-01 18:44:21', 2, NULL, NULL);
INSERT INTO `users` VALUES (33, 'faker', 'faker1@naver.com', NULL, '$2y$10$B5eZ7bOsqT/NdGxz/px2qOIGA30MS4L0yBxvkWywosLog40M2t7Xi', NULL, '2021-12-01 18:44:55', '2021-12-01 18:44:55', 2, NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
