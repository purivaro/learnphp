-- Delete Table If Exists
DROP TABLE IF EXISTS registers ;

-- Create Table
CREATE TABLE registers  (
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	activity_id INT NOT NULL,
	person_id INT NOT NULL,
	paid INT,
	created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Insert registers data
INSERT INTO registers (
	activity_id,
	person_id
) VALUES (
	'1',
	'1'
);

INSERT INTO registers (
	activity_id,
	person_id
) VALUES (
	'1',
	'2'
);

INSERT INTO registers (
	activity_id,
	person_id
) VALUES (
	'1',
	'4'
);

INSERT INTO registers (
	activity_id,
	person_id
) VALUES (
	'1',
	'5'
);

INSERT INTO registers (
	activity_id,
	person_id
) VALUES (
	'1',
	'8'
);

INSERT INTO registers (
	activity_id,
	person_id
) VALUES (
	'1',
	'9'
);

INSERT INTO registers (
	activity_id,
	person_id
) VALUES (
	'2',
	'1'
);

INSERT INTO registers (
	activity_id,
	person_id
) VALUES (
	'2',
	'2'
);

INSERT INTO registers (
	activity_id,
	person_id
) VALUES (
	'2',
	'3'
);

INSERT INTO registers (
	activity_id,
	person_id
) VALUES (
	'2',
	'6'
);

INSERT INTO registers (
	activity_id,
	person_id
) VALUES (
	'2',
	'8'
);

INSERT INTO registers (
	activity_id,
	person_id
) VALUES (
	'2',
	'9'
);

INSERT INTO registers (
	activity_id,
	person_id
) VALUES (
	'3',
	'2'
);

INSERT INTO registers (
	activity_id,
	person_id
) VALUES (
	'3',
	'3'
);

INSERT INTO registers (
	activity_id,
	person_id
) VALUES (
	'3',
	'4'
);

INSERT INTO registers (
	activity_id,
	person_id
) VALUES (
	'3',
	'5'
);

INSERT INTO registers (
	activity_id,
	person_id
) VALUES (
	'3',
	'6'
);

INSERT INTO registers (
	activity_id,
	person_id
) VALUES (
	'3',
	'7'
);

INSERT INTO registers (
	activity_id,
	person_id
) VALUES (
	'3',
	'8'
);

INSERT INTO registers (
	activity_id,
	person_id
) VALUES (
	'3',
	'9'
);
