INSERT INTO user_profiles (username, email, password)
VALUES ('Clint', 'clint.devilla@example.com', 'password123')
WHERE NOT EXISTS (
SELECT email FROM user_profiles
WHERE email = 'clint.devilla@example.com'
);