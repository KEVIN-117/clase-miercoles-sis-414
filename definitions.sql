CREATE TABLE student(
    id SERIAL PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    phone VARCHAR(50) NOT NULL,
    address VARCHAR(50) NOT NULL
);

CREATE TABLE course(
    id SERIAL PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    description VARCHAR(50) NOT NULL
);

CREATE TABLE student_course(
    id SERIAL PRIMARY KEY,
    student_id SERIAL NOT NULL,
    course_id SERIAL NOT NULL,
    FOREIGN KEY (student_id) REFERENCES student(id),
    FOREIGN KEY (course_id) REFERENCES course(id)
);



INSERT INTO student(name, email, phone, address) VALUES('John Doe', 'john@example.com', "123-456-7890", '123 Main St');
INSERT INTO student(name, email, phone, address) VALUES('Jane Doe', 'jane@example.com', "123-456-7890", '123 Main St');
INSERT INTO student(name, email, phone, address) VALUES('Jim Doe', 'jime@example.com', "123-456-7890", '123 Main St');
INSERT INTO student(name, email, phone, address) VALUES('Jill Doe', 'jill@example.com', "123-456-7890", '123 Main St');

INSERT INTO course(name, description) VALUES('Math', 'Mathematics');
INSERT INTO course(name, description) VALUES('Science', 'Science');
INSERT INTO course(name, description) VALUES('History', 'History');
INSERT INTO course(name, description) VALUES('English', 'English');


-- update

UPDATE student SET name = "John Smith", email = "newEamil@example.com" WHERE id = 1;

---
UPDATE student set %key = $value, %key = $value WHERE id = $id;
---