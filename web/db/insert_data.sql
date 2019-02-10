INSERT INTO teachers (username, first_name, last_name) VALUES ('fkouakou', 'Freddy', 'Kouakou');
INSERT INTO teachers (username, first_name, last_name) VALUES ('pSnyder', 'Paulie', 'Snyder');
INSERT INTO teachers (username, first_name, last_name) VALUES ('maikeru2020', 'Michael', 'Schmidt');

INSERT INTO subjects (subject_name) VALUES ('English Language');
INSERT INTO subjects (subject_name) VALUES ('Integrated Science');
INSERT INTO subjects (subject_name) VALUES ('Mathematics');
INSERT INTO subjects (subject_name) VALUES ('Social Studies');
INSERT INTO subjects (subject_name) VALUES ('R. M. E.');
INSERT INTO subjects (subject_name) VALUES ('Fante');
INSERT INTO subjects (subject_name) VALUES ('French');
INSERT INTO subjects (subject_name) VALUES ('B. D. T.');
INSERT INTO subjects (subject_name) VALUES ('I. C. T.');
INSERT INTO subjects (subject_name) VALUES ('Mathematics');
INSERT INTO subjects (subject_name) VALUES ('Citizenship');

INSERT INTO terms (season, academic_year) VALUES ('Winter', '2018-19');
INSERT INTO terms (season, academic_year) VALUES ('Spring', '2018-19');
INSERT INTO terms (season, academic_year) VALUES ('Fall', '2019-20');

INSERT INTO lesson_plans (teacher_id, subject_id, term_id, week_number, week_ending, reference, day_duration,
                            topic, objectives, activities, materials, core_points, evaluation, is_approved)
VALUES(1, 2, 1, 6, '2019-2-15',
        "Textbook (Ruben's Series)",
        CONCAT("Monday 02-11-2019\n11:00 to 12:10\n70mins.\n",
                "Tuesday 02-12-2019\n11:00 to 12:10\n70mins."),
        "Topic:\nMeasurement of Temperature",
        CONCAT("By the end of the lesson, the pupil will be able to\n",
                "1) Define what temperature is\n",
                "2) State the scales for measuring temperature\n\n",
                "R.P.K.\n",
                "Pupils have been experiencing hot and cold weather."
        ),
        CONCAT("Teacher revises previous lesson through questions and answers\n\n",
                "Teacher: Rusting makes iron weak: True or False.\n",
                "Pupils: True\n\n",
                "Activities:\n",
                "1) Teacher guides or assists pupils to come out with the meaning of temperature\n",
                "2) Teacher assists pupils to state the scales for measuring temperature"
        ),
        "Textbook",
        CONCAT("MEASUREMENT OF TEMPERATURE\n\n",
                "Meaning of temperature. We can define temperature as the degrees of hotness or coldness of a body or substance.",
                "We can also say that temperature is how hot or cold a body is.",
                "The instrument used to measure the temperature of a body is called the thermometer.\n\n",
                "The temperature of a body can be measured in different units depending on the type of temperature scale used.",
                "There are two main scales for measuring temperature. These are:\n",
                "i)Celsius scale\n",
                "ii)Fahrenheit scale"
        ),
        CONCAT("Answer the questions below:\n\n",
                "1) Define temperature\n",
                "2) Name the instrument used to measure temperature\n",
                "3) State the two scales used for measuring temperature"
        ),
        FALSE
);

INSERT INTO lesson_plans (teacher_id, subject_id, term_id, week_number, week_ending, reference, day_duration,
                            topic, objectives, activities, materials, core_points, evaluation, is_approved)
VALUES(2, 3, 1, 7, '2019-2-15',
        "Textbook (Ruben's Series)",
        CONCAT("Monday 02-11-2019\n11:00 to 12:10\n70mins.\n",
                "Tuesday 02-12-2019\n11:00 to 12:10\n70mins."),
        "Topic:\nMeasurement of Temperature",
        CONCAT("By the end of the lesson, the pupil will be able to\n",
                "1) Define what temperature is\n",
                "2) State the scales for measuring temperature\n\n",
                "R.P.K.\n",
                "Pupils have been experiencing hot and cold weather."
        ),
        CONCAT("Teacher revises previous lesson through questions and answers\n\n",
                "Teacher: Rusting makes iron weak: True or False.\n",
                "Pupils: True\n\n",
                "Activities:\n",
                "1) Teacher guides or assists pupils to come out with the meaning of temperature\n",
                "2) Teacher assists pupils to state the scales for measuring temperature"
        ),
        "Textbook",
        CONCAT("MEASUREMENT OF TEMPERATURE\n\n",
                "Meaning of temperature. We can define temperature as the degrees of hotness or coldness of a body or substance.",
                "We can also say that temperature is how hot or cold a body is.",
                "The instrument used to measure the temperature of a body is called the thermometer.\n\n",
                "The temperature of a body can be measured in different units depending on the type of temperature scale used.",
                "There are two main scales for measuring temperature. These are:\n",
                "i)Celsius scale\n",
                "ii)Fahrenheit scale"
        ),
        CONCAT("Answer the questions below:\n\n",
                "1) Define temperature\n",
                "2) Name the instrument used to measure temperature\n",
                "3) State the two scales used for measuring temperature"
        ),
        FALSE
);

INSERT INTO lesson_plans (teacher_id, subject_id, term_id, week_number, week_ending, reference, day_duration,
                            topic, objectives, activities, materials, core_points, evaluation, is_approved)
VALUES(3, 4, 1, 2, '2019-2-15',
        "Textbook (Ruben's Series)",
        CONCAT("Monday 02-11-2019\n11:00 to 12:10\n70mins.\n",
                "Tuesday 02-12-2019\n11:00 to 12:10\n70mins."),
        "Topic:\nMeasurement of Temperature",
        CONCAT("By the end of the lesson, the pupil will be able to\n",
                "1) Define what temperature is\n",
                "2) State the scales for measuring temperature\n\n",
                "R.P.K.\n",
                "Pupils have been experiencing hot and cold weather."
        ),
        CONCAT("Teacher revises previous lesson through questions and answers\n\n",
                "Teacher: Rusting makes iron weak: True or False.\n",
                "Pupils: True\n\n",
                "Activities:\n",
                "1) Teacher guides or assists pupils to come out with the meaning of temperature\n",
                "2) Teacher assists pupils to state the scales for measuring temperature"
        ),
        "Textbook",
        CONCAT("MEASUREMENT OF TEMPERATURE\n\n",
                "Meaning of temperature. We can define temperature as the degrees of hotness or coldness of a body or substance.",
                "We can also say that temperature is how hot or cold a body is.",
                "The instrument used to measure the temperature of a body is called the thermometer.\n\n",
                "The temperature of a body can be measured in different units depending on the type of temperature scale used.",
                "There are two main scales for measuring temperature. These are:\n",
                "i)Celsius scale\n",
                "ii)Fahrenheit scale"
        ),
        CONCAT("Answer the questions below:\n\n",
                "1) Define temperature\n",
                "2) Name the instrument used to measure temperature\n",
                "3) State the two scales used for measuring temperature"
        ),
        FALSE
);

INSERT INTO lesson_plans (teacher_id, subject_id, term_id, week_number, week_ending, reference, day_duration,
                            topic, objectives, activities, materials, core_points, evaluation, is_approved)
VALUES(1, 5, 2, 1, '2019-2-15',
        "Textbook (Ruben's Series)",
        CONCAT("Monday 02-11-2019\n11:00 to 12:10\n70mins.\n",
                "Tuesday 02-12-2019\n11:00 to 12:10\n70mins."),
        "Topic:\nMeasurement of Temperature",
        CONCAT("By the end of the lesson, the pupil will be able to\n",
                "1) Define what temperature is\n",
                "2) State the scales for measuring temperature\n\n",
                "R.P.K.\n",
                "Pupils have been experiencing hot and cold weather."
        ),
        CONCAT("Teacher revises previous lesson through questions and answers\n\n",
                "Teacher: Rusting makes iron weak: True or False.\n",
                "Pupils: True\n\n",
                "Activities:\n",
                "1) Teacher guides or assists pupils to come out with the meaning of temperature\n",
                "2) Teacher assists pupils to state the scales for measuring temperature"
        ),
        "Textbook",
        CONCAT("MEASUREMENT OF TEMPERATURE\n\n",
                "Meaning of temperature. We can define temperature as the degrees of hotness or coldness of a body or substance.",
                "We can also say that temperature is how hot or cold a body is.",
                "The instrument used to measure the temperature of a body is called the thermometer.\n\n",
                "The temperature of a body can be measured in different units depending on the type of temperature scale used.",
                "There are two main scales for measuring temperature. These are:\n",
                "i)Celsius scale\n",
                "ii)Fahrenheit scale"
        ),
        CONCAT("Answer the questions below:\n\n",
                "1) Define temperature\n",
                "2) Name the instrument used to measure temperature\n",
                "3) State the two scales used for measuring temperature"
        ),
        FALSE
);

INSERT INTO lesson_plans (teacher_id, subject_id, term_id, week_number, week_ending, reference, day_duration,
                            topic, objectives, activities, materials, core_points, evaluation, is_approved)
VALUES(2, 6, 2, 6, '2019-2-15',
        "Textbook (Ruben's Series)",
        CONCAT("Monday 02-11-2019\n11:00 to 12:10\n70mins.\n",
                "Tuesday 02-12-2019\n11:00 to 12:10\n70mins."),
        "Topic:\nMeasurement of Temperature",
        CONCAT("By the end of the lesson, the pupil will be able to\n",
                "1) Define what temperature is\n",
                "2) State the scales for measuring temperature\n\n",
                "R.P.K.\n",
                "Pupils have been experiencing hot and cold weather."
        ),
        CONCAT("Teacher revises previous lesson through questions and answers\n\n",
                "Teacher: Rusting makes iron weak: True or False.\n",
                "Pupils: True\n\n",
                "Activities:\n",
                "1) Teacher guides or assists pupils to come out with the meaning of temperature\n",
                "2) Teacher assists pupils to state the scales for measuring temperature"
        ),
        "Textbook",
        CONCAT("MEASUREMENT OF TEMPERATURE\n\n",
                "Meaning of temperature. We can define temperature as the degrees of hotness or coldness of a body or substance.",
                "We can also say that temperature is how hot or cold a body is.",
                "The instrument used to measure the temperature of a body is called the thermometer.\n\n",
                "The temperature of a body can be measured in different units depending on the type of temperature scale used.",
                "There are two main scales for measuring temperature. These are:\n",
                "i)Celsius scale\n",
                "ii)Fahrenheit scale"
        ),
        CONCAT("Answer the questions below:\n\n",
                "1) Define temperature\n",
                "2) Name the instrument used to measure temperature\n",
                "3) State the two scales used for measuring temperature"
        ),
        FALSE
);

INSERT INTO lesson_plans (teacher_id, subject_id, term_id, week_number, week_ending, reference, day_duration,
                            topic, objectives, activities, materials, core_points, evaluation, is_approved)
VALUES(3, 7, 3, 9, '2019-2-15',
        "Textbook (Ruben's Series)",
        CONCAT("Monday 02-11-2019\n11:00 to 12:10\n70mins.\n",
                "Tuesday 02-12-2019\n11:00 to 12:10\n70mins."),
        "Topic:\nMeasurement of Temperature",
        CONCAT("By the end of the lesson, the pupil will be able to\n",
                "1) Define what temperature is\n",
                "2) State the scales for measuring temperature\n\n",
                "R.P.K.\n",
                "Pupils have been experiencing hot and cold weather."
        ),
        CONCAT("Teacher revises previous lesson through questions and answers\n\n",
                "Teacher: Rusting makes iron weak: True or False.\n",
                "Pupils: True\n\n",
                "Activities:\n",
                "1) Teacher guides or assists pupils to come out with the meaning of temperature\n",
                "2) Teacher assists pupils to state the scales for measuring temperature"
        ),
        "Textbook",
        CONCAT("MEASUREMENT OF TEMPERATURE\n\n",
                "Meaning of temperature. We can define temperature as the degrees of hotness or coldness of a body or substance.",
                "We can also say that temperature is how hot or cold a body is.",
                "The instrument used to measure the temperature of a body is called the thermometer.\n\n",
                "The temperature of a body can be measured in different units depending on the type of temperature scale used.",
                "There are two main scales for measuring temperature. These are:\n",
                "i)Celsius scale\n",
                "ii)Fahrenheit scale"
        ),
        CONCAT("Answer the questions below:\n\n",
                "1) Define temperature\n",
                "2) Name the instrument used to measure temperature\n",
                "3) State the two scales used for measuring temperature"
        ),
        FALSE
);

INSERT INTO lesson_plans (teacher_id, subject_id, term_id, week_number, week_ending, reference, day_duration,
                            topic, objectives, activities, materials, core_points, evaluation, is_approved)
VALUES(2, 8, 3, 6, '2019-2-15',
        "Textbook (Ruben's Series)",
        CONCAT("Monday 02-11-2019\n11:00 to 12:10\n70mins.\n",
                "Tuesday 02-12-2019\n11:00 to 12:10\n70mins."),
        "Topic:\nMeasurement of Temperature",
        CONCAT("By the end of the lesson, the pupil will be able to\n",
                "1) Define what temperature is\n",
                "2) State the scales for measuring temperature\n\n",
                "R.P.K.\n",
                "Pupils have been experiencing hot and cold weather."
        ),
        CONCAT("Teacher revises previous lesson through questions and answers\n\n",
                "Teacher: Rusting makes iron weak: True or False.\n",
                "Pupils: True\n\n",
                "Activities:\n",
                "1) Teacher guides or assists pupils to come out with the meaning of temperature\n",
                "2) Teacher assists pupils to state the scales for measuring temperature"
        ),
        "Textbook",
        CONCAT("MEASUREMENT OF TEMPERATURE\n\n",
                "Meaning of temperature. We can define temperature as the degrees of hotness or coldness of a body or substance.",
                "We can also say that temperature is how hot or cold a body is.",
                "The instrument used to measure the temperature of a body is called the thermometer.\n\n",
                "The temperature of a body can be measured in different units depending on the type of temperature scale used.",
                "There are two main scales for measuring temperature. These are:\n",
                "i)Celsius scale\n",
                "ii)Fahrenheit scale"
        ),
        CONCAT("Answer the questions below:\n\n",
                "1) Define temperature\n",
                "2) Name the instrument used to measure temperature\n",
                "3) State the two scales used for measuring temperature"
        ),
        FALSE
);