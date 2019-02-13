CREATE TABLE topics (
    topic_id SERIAL PRIMARY KEY,
    topic_name VARCHAR(255) NOT NULL
);

CREATE TABLE scriptures (
    scripture_id SERIAL PRIMARY KEY,
    book VARCHAR(255) NOT NULL,
    chapter INT NOT NULL,
    verse INT NOT NULL,
    content TEXT NOT NULL
);

CREATE TABLE scriptures_topics (
    scriptures_topics_id SERIAL PRIMARY KEY,
    scripture_id INT NOT NULL REFERENCES scriptures,
    topic_id INT NOT NULL REFERENCES topics
);

INSERT INTO topics (topic_name)
VALUES ('Faith'), ('Sacrifice'), ('Charity'), ('Prayer');

INSERT INTO scriptures (book, chapter, verse, content)
VALUES ('1 Nephi', 3, 7, 'And it came to pass that I, Nephi, said unto my father: I will go and do the things which the Lord hath commanded, for I know that the Lord giveth no commandments unto the children of men, save he shall prepare a way for them that they may accomplish the thing which he commandeth them.'),
       ('1 Samuel', 15, 22, 'And Samuel said, Hath the Lord as great delight in burnt offerings and sacrifices, as in obeying the voice of the Lord? Behold, to obey is better than sacrifice, and to hearken than the fat of rams.'),
       ('Moroni', 7, 46, 'Wherefore, my beloved brethren, if ye have not charity, ye are nothing, for charity never faileth. Wherefore, cleave unto charity, which is the greatest of all, for all things must fail—');

INSERT INTO scriptures_topics (scripture_id, topic_id)
VALUES (1, 1), (1, 2), (2, 2), (3, 3);