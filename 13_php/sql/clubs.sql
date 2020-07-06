-- Delete Table If Exists
DROP TABLE IF EXISTS clubs ;

-- Create Table
CREATE TABLE clubs  (
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	title VARCHAR(255) NOT NULL,
	description VARCHAR(1000) NOT NULL,
	category_id INT,
	created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Insert clubs data
INSERT INTO clubs (
	title,
	description,
	category_id
) VALUES (
	'ชมรมว่ายน้ำ',
	'มาว่ายน้ำกัน เพื่อสุขภาพและความแข็งแรง',
	'301'
);

INSERT INTO clubs (
	title,
	description,
	category_id
) VALUES (
	'ชมรมดนตรีไทย',
	'อนุรักษ์ความเป็นไทย อนุรักษ์ศิลปวัฒนธรรมอันดีงาม',
	'302'
);

INSERT INTO clubs (
	title,
	description,
	category_id
) VALUES (
	'ชมรม Guitar Acoustic',
	'เพื่อความสุนทรีย์ของชีวิต',
	'302'
);