-- Delete Table If Exists
DROP TABLE IF EXISTS persons ;

-- Create Table
CREATE TABLE persons  (
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	firstname VARCHAR(255) NOT NULL,
	nickname VARCHAR(255) NOT NULL,
	dob DATE,
	gender_id INT,
	club_id INT,
	salary DECIMAL(15, 2),
	avatar VARCHAR(255),
	created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);


-- Insert persons data
INSERT INTO persons (
	firstname,
	nickname,
	dob,
	gender_id,
	club_id,
	salary
) VALUES (
	'นิตยา',
	'แป้งจัง',
	'1991-04-19',
	'203',
	'1',
	'45000.50'
);

INSERT INTO persons (
	firstname,
	nickname,
	dob,
	gender_id,
	club_id,
	salary
) VALUES (
	'มินตรา',
	'มินนี่',
	'1994-08-15',
	'203',
	'1',
	'33500'
);

INSERT INTO persons (
	firstname,
	nickname,
	dob,
	gender_id,
	club_id,
	salary
) VALUES (
	'วรินทร์พร',
	'ไก่จ๋า',
	'1985-12-01',
	'203',
	'2',
	'49000.50'
);

INSERT INTO persons (
	firstname,
	nickname,
	dob,
	gender_id,
	club_id,
	salary
) VALUES (
	'พรจิตต์',
	'แอ๊ะ',
	'1977-01-06',
	'203',
	'2',
	'48000.50'
);

INSERT INTO persons (
	firstname,
	nickname,
	dob,
	gender_id,
	club_id,
	salary
) VALUES (
	'จินตนา',
	'กาน',
	'1995-01-24',
	'203',
	'1',
	'7500.50'
);

INSERT INTO persons (
	firstname,
	nickname,
	dob,
	gender_id,
	club_id,
	salary
) VALUES (
	'วชิรวิชญ์',
	'วิชชี่',
	'1986-11-01',
	'202',
	'3',
	'35000'
);

INSERT INTO persons (
	firstname,
	nickname,
	dob,
	gender_id,
	club_id,
	salary
) VALUES (
	'วุฒิพงษ์',
	'วุฒิ',
	'1988-03-01',
	'202',
	'3',
	'34000'
);

INSERT INTO persons (
	firstname,
	nickname,
	dob,
	gender_id,
	club_id,
	salary
) VALUES (
	'ชานน',
	'โบ๊ท',
	'1992-10-18',
	'202',
	'1',
	'33000'
);

INSERT INTO persons (
	firstname,
	nickname,
	dob,
	gender_id,
	club_id,
	salary
) VALUES (
	'พระสุทธิพงษ์',
	'ลพ.ป๊อป',
	'1990-01-02',
	'201',
	'2',
	'100.25'
);