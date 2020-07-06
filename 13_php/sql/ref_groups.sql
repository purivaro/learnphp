-- Delete Table If Exists
DROP TABLE IF EXISTS ref_groups ;

-- Create Table
CREATE TABLE ref_groups  (
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	title VARCHAR(255) NOT NULL,
	created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Insert ref_groups data
INSERT INTO ref_groups (
	title
) VALUES (
	'คำนำหน้า'
);

INSERT INTO ref_groups (
	title
) VALUES (
	'เพศ'
);

INSERT INTO ref_groups (
	title
) VALUES (
	'ประเภทชมรม'
);

INSERT INTO ref_groups (
	title
) VALUES (
	'ประเภทกิจกรรม'
);