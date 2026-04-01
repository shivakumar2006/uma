-- DATABASE: UMA ADMIN PANEL

CREATE DATABASE IF NOT EXISTS uma;
USE uma;

-- TABLE: PROGRAMS
CREATE TABLE programs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NULL,
    description TEXT NULL,
    category VARCHAR(50) NULL,
    status VARCHAR(20) NULL,
    file_path VARCHAR(255) NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- TABLE: NOTICES
CREATE TABLE notices (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NULL,
    description TEXT NULL,
    category VARCHAR(50) NULL,
    priority VARCHAR(50) NULL,
    file_path VARCHAR(255) NULL,
    posted_by VARCHAR(100) NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- TABLE: JOBS
CREATE TABLE jobs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NULL,
    category VARCHAR(50) NULL,
    experience VARCHAR(50) NULL,
    file_path VARCHAR(255) NULL,
    status VARCHAR(20) DEFAULT 'reviewing',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- TABLE: DAILY DIARY
CREATE TABLE daily_diary (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NULL,
    description TEXT NULL,
    category VARCHAR(50) NULL,
    priority VARCHAR(20) NULL,
    class_range VARCHAR(50) NULL,
    staff_instruction TEXT NULL,
    event_date DATE NULL,
    event_time TIME NULL,
    file_path VARCHAR(255) NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- TABLE: SAMPLE PAPERS
CREATE TABLE sample_papers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    subject VARCHAR(100) NULL,
    class_name VARCHAR(50) NULL,
    year VARCHAR(10) NULL,
    file_path VARCHAR(255) NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- TABLE: SYLLABUS
CREATE TABLE syllabus (
    id INT AUTO_INCREMENT PRIMARY KEY,
    subject VARCHAR(100) NULL,
    class_name VARCHAR(50) NULL,
    year VARCHAR(10) NULL,
    file_path VARCHAR(255) NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- TABLE: TIMETABLE
CREATE TABLE timetable (
    id INT AUTO_INCREMENT PRIMARY KEY,
    class_name VARCHAR(50) NULL,
    file_path VARCHAR(255) NULL,
    uploaded_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- INDEXES (Performance Boost 🚀)
CREATE INDEX idx_program_status ON programs(status);
CREATE INDEX idx_job_status ON jobs(status);
CREATE INDEX idx_notice_category ON notices(category);
CREATE INDEX idx_diary_date ON daily_diary(event_date);