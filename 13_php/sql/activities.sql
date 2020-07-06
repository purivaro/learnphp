-- Delete Table If Exists
DROP TABLE IF EXISTS activities ;

-- Create Table
CREATE TABLE activities  (
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	title VARCHAR(255) NOT NULL,
	start_date DATETIME,
	end_date DATETIME,
	category_id INT,
	created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Insert activities data
INSERT INTO activities (
	title,
	start_date,
	end_date,
	category_id
) VALUES (
	'อบรมพัฒนาทักษะการพูด',
	'2020-08-20 09:00:00',
	'2020-08-21 17:00:00',
	'401'
);

INSERT INTO activities (
	title,
	start_date,
	end_date,
	category_id
) VALUES (
	'อบรมการพัฒนา Mobile App',
	'2020-09-03 14:00:00',
	'2020-09-03 17:00:00',
	'401'
);

INSERT INTO activities (
	title,
	start_date,
	end_date,
	category_id
) VALUES (
	'ประชุมประจำสัปดาห์ของกอง',
	'2020-07-16 09:00:00',
	'2020-07-16 11:00:00',
	'402'
);