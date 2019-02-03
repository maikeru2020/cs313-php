CREATE TABLE teachers (
    teacher_id SERIAL PRIMARY KEY,
    username VARCHAR(255) NOT NULL UNIQUE,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL
);

CREATE TABLE subjects (
    subject_id SERIAL PRIMARY KEY,
    subject_name VARCHAR(255) NOT NULL
);

CREATE TABLE terms (
    term_id SERIAL PRIMARY KEY,
    term_name VARCHAR(255) NOT NULL
);

CREATE TABLE lesson_plans (
    lesson_plan_id SERIAL PRIMARY KEY,
    teacher_id INT NOT NULL REFERENCES teachers,  -- foreign keys
    subject_id INT NOT NULL REFERENCES subjects,
    term_id INT NOT NULL REFERENCES terms,
    
    week_number INT NOT NULL,   -- lesson plan data fields
    week_ending DATE NOT NULL, 
    reference VARCHAR(255) NOT NULL,
    day_duration VARCHAR(255) NOT NULL,
    topic VARCHAR(255) NOT NULL,
    objectives TEXT NOT NULL,
    activities TEXT NOT NULL,
    materials TEXT NOT NULL,
    core_points TEXT NOT NULL,
    evaluation TEXT NOT NULL,

    is_approved BOOLEAN NOT NULL -- headmaster's approval
);