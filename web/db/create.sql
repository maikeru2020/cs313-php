CREATE TABLE teachers (
    teacher_id INT PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL
);

CREATE TABLE subjects (
    subject_id INT PRIMARY KEY,
    subject_name VARCHAR(255) NOT NULL
);

CREATE TABLE terms (
    term_id INT PRIMARY KEY,
    term_name VARCHAR(255) NOT NULL
);

CREATE TABLE lesson_plans (
    lesson_plan_id INT PRIMARY KEY,
    teacher_id INT REFERENCES teachers,
    subject_id INT REFERENCES subjects,
    term_id INT REFERENCES terms,
    week_number INT NOT NULL,

    week_ending DATE, 
    reference VARCHAR(255),
    day_duration VARCHAR(255),
    topic VARCHAR(255),
    objectives TEXT,
    activities TEXT,
    materials VARCHAR(255),
    core_points TEXT,
    evaluation TEXT,

    is_approved BOOLEAN
);