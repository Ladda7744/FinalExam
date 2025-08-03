CREATE TABLE IF NOT EXISTS reference (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  pdf_url TEXT NOT NULL
);

INSERT INTO reference (title, pdf_url)
VALUES
('IEEE Example Paper 1', 'https://example.com/paper1.pdf'),
('IEEE Example Paper 2', 'https://example.com/paper2.pdf');
