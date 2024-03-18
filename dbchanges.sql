ALTER TABLE applicants ADD COLUMN resume_id INT;

ALTER TABLE applicants
ADD FOREIGN KEY (resume_id) REFERENCES resumes (id) ON DELETE CASCADE;

ALTER TABLE resumes DROP FOREIGN KEY resumes_ibfk_1;

USE jobs;

ALTER TABLE job_applications DROP FOREIGN KEY job_applications_ibfk_2;

ALTER TABLE applicant DROP COLUMN username;

ALTER TABLE applicant DROP COLUMN password;

ALTER TABLE users DROP FOREIGN KEY users_ibfk_1;

ALTER TABLE users DROP COLUMN applicant_id;

ALTER TABLE applicant ADD COLUMN user_id INT(11);

ALTER TABLE applicant ADD FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE;

ALTER TABLE companies ADD COLUMN company_email VARCHAR(255);

ALTER TABLE companies ADD COLUMN password VARCHAR(255);