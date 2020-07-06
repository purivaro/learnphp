-- Delete Table If Exists
DROP TABLE IF EXISTS refs ;

-- Create Table
CREATE TABLE refs  (
	id INT PRIMARY KEY,
	title VARCHAR(255) NOT NULL,
	color VARCHAR(255) NOT NULL,
	ref_group_id INT,
	created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Insert clubs data
INSERT INTO refs (
	id,
	title,
	color,
	ref_group_id
) VALUES (
	'101',
	'นาย',
	'primary',
	'1'
);

INSERT INTO refs (
	id,
	title,
	color,
	ref_group_id
) VALUES (
	'102',
	'นาง',
	'info',
	'1'
);

INSERT INTO refs (
	id,
	title,
	color,
	ref_group_id
) VALUES (
	'103',
	'นางสาว',
	'danger',
	'1'
);

INSERT INTO refs (
	id,
	title,
	color,
	ref_group_id
) VALUES (
	'104',
	'อื่น ๆ',
	'warning',
	'1'
);

INSERT INTO refs (
	id,
	title,
	color,
	ref_group_id
) VALUES (
	'201',
	'บรรพชิต',
	'warning',
	'2'
);

INSERT INTO refs (
	id,
	title,
	color,
	ref_group_id
) VALUES (
	'202',
	'ชาย',
	'info',
	'2'
);

INSERT INTO refs (
	id,
	title,
	color,
	ref_group_id
) VALUES (
	'203',
	'หญิง',
	'danger',
	'2'
);

INSERT INTO refs (
	id,
	title,
	color,
	ref_group_id
) VALUES (
	'301',
	'กีฬา',
	'primary',
	'3'
);

INSERT INTO refs (
	id,
	title,
	color,
	ref_group_id
) VALUES (
	'302',
	'ดนตรี',
	'info',
	'3'
);

INSERT INTO refs (
	id,
	title,
	color,
	ref_group_id
) VALUES (
	'303',
	'DIY',
	'warning',
	'3'
);

INSERT INTO refs (
	id,
	title,
	color,
	ref_group_id
) VALUES (
	'401',
	'Training',
	'primary',
	'4'
);

INSERT INTO refs (
	id,
	title,
	color,
	ref_group_id
) VALUES (
	'402',
	'Meeting',
	'info',
	'4'
);