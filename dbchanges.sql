ALTER TABLE applicants ADD COLUMN resume_id INT;

ALTER TABLE applicants
ADD FOREIGN KEY (resume_id) REFERENCES resumes (id) ON DELETE CASCADE;