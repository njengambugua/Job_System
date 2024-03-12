DROP TABLE IF EXISTS `companies`;

CREATE TABLE companies (
    id INT(11) AUTO_INCREMENT, name VARCHAR(255), industry VARCHAR(255), location VARCHAR(255), website VARCHAR(255), description TEXT, PRIMARY KEY (id)
);

DROP TABLE IF EXISTS `job_postings`;

CREATE TABLE job_postings (
    id INT(11) AUTO_INCREMENT, title VARCHAR(255), description TEXT, company_id INT(11), posted_date DATETIME, expiration_date DATETIME, location VARCHAR(255), salary VARCHAR(255), PRIMARY KEY (id), FOREIGN KEY (company_id) REFERENCES companies (id) ON DELETE CASCADE
);

DROP TABLE IF EXISTS `applicants`;

CREATE TABLE applicants (
    id INT(11) AUTO_INCREMENT, first_name VARCHAR(255), last_name VARCHAR(255), email VARCHAR(255) UNIQUE, phone VARCHAR(255), application_date DATETIME, PRIMARY KEY (id)
);

DROP TABLE IF EXISTS `resumes`;

CREATE TABLE resumes (
    id INT(11) AUTO_INCREMENT, applicant_id INT(11), file_path VARCHAR(255) NOT NULL, upload_date DATETIME, last_updated DATETIME, PRIMARY KEY (id), FOREIGN KEY (applicant_id) REFERENCES applicants (id) ON DELETE CASCADE
);

DROP TABLE IF EXISTS `job_applications`;

CREATE TABLE job_applications (
    id INT(11) AUTO_INCREMENT, job_id INT(11), applicant_id INT(11), status ENUM(
        'pending', 'rejected', 'hired'
    ) NOT NULL DEFAULT 'pending', application_date DATETIME, PRIMARY KEY (id), FOREIGN KEY (job_id) REFERENCES job_postings (id) ON DELETE CASCADE, FOREIGN KEY (applicant_id) REFERENCES applicants (id) ON DELETE CASCADE
);