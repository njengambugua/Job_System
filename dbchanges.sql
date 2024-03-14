ALTER TABLE applicants ADD COLUMN resume_id INT;

ALTER TABLE applicants
ADD FOREIGN KEY (resume_id) REFERENCES resumes (id) ON DELETE CASCADE;

ALTER TABLE resumes DROP FOREIGN KEY resumes_ibfk_1;

ALTER TABLE job_applications DROP FOREIGN KEY job_applications_ibfk_2;