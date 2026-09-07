# PHP Skill Check - Simple Quiz System

## Student Details

- **Roll Number:** 2442982
- Name : Komal
- **Project Name:** PHP Skill Check - Simple Quiz System
- **Technology:** HTML, CSS, PHP

---

## Project Objective

The objective of this mini-project is to develop a simple 10-question multiple-choice quiz using PHP arrays.

The system displays PHP-related multiple-choice questions, accepts answers through an HTML form, checks the selected answers, calculates the total marks and percentage, and displays performance-based remarks.

---

## Features

- 10 multiple-choice questions
- Questions and options stored using PHP arrays
- Simple and professional user interface
- Radio-button based answer selection
- Automatic score calculation
- Marks calculation
- Percentage calculation
- Correct answer count
- Wrong answer count
- Attempted question count
- Skipped question count
- Grade calculation
- Performance-based remarks
- Try Again option
- Responsive CSS design
- No database required

---

## Algorithm / Flowchart

### Algorithm

1. Start the application.
2. Store 10 questions, options, and correct answers in a PHP array.
3. Display the questions and options using an HTML form.
4. Allow the user to select answers.
5. Submit the quiz form.
6. Retrieve the selected answers using PHP.
7. Compare each selected answer with the correct answer.
8. Increase the score for every correct answer.
9. Calculate the number of wrong and skipped answers.
10. Calculate the percentage using:

   `Percentage = (Score / Total Questions) × 100`

11. Assign a grade according to the percentage.
12. Display marks, percentage, correct answers, wrong answers, attempted questions, skipped questions, grade, and remarks.
13. Provide a Try Again option.
14. Stop.

### Flowchart

```text
START
  |
  v
Store Questions & Answers
in PHP Array
  |
  v
Display Quiz Form
  |
  v
User Selects Answers
  |
  v
Submit Quiz
  |
  v
Compare Selected Answers
with Correct Answers
  |
  v
Calculate Score
  |
  v
Calculate Percentage
  |
  v
Calculate Correct / Wrong /
Attempted / Skipped
  |
  v
Assign Grade & Remarks
  |
  v
Display Result
  |
  v
Try Again?
  |       |
 Yes      No
  |       |
  v       v
Quiz     END

Percentage	Grade	Remarks
80% - 100%	A	Excellent!
60% - 79%	B	Good job!
40% - 59%	C	Fair attempt.
Below 40%	D	Needs improvement.

Technologies Used
HTML5
CSS3
PHP
PHP Arrays
HTML Forms

PHP-Quiz/
│
├── index.php
└── README.md
index.php
Contains the complete quiz system including:

PHP question arrays
Quiz form
Answer checking
Score calculation
Percentage calculation
Grade calculation
Performance remarks
Result display
CSS styling
README.md
Contains project information, objective, features, algorithm, technologies, setup instructions, and output details.

Steps to Run
Using XAMPP
Install and open XAMPP.
Start Apache.
Create a folder named:
PHP-Quiz

Place the project folder inside:
C:\xampp\htdocs\

Make sure index.php is inside the project folder.

Open a web browser.

Visit:

http://localhost/PHP-Quiz/

Answer the questions.

Click Submit Quiz.

The result page will display the marks, percentage, and performance remarks.

Using PHP Built-in Server
Open the project folder in Command Prompt or Terminal and run:

php -S localhost:8000

Then open:

http://localhost:8000

Output Screenshots
Add the following screenshots to the GitHub repository:

Quiz page showing the 10 questions.
Quiz page with selected answers.
Result page showing marks and percentage.
Result page showing grade and performance remarks.
Example screenshot names:

quiz-page.png
selected-answers.png
result-page.png

Learning Outcomes
Through this project, the following PHP concepts are demonstrated:

PHP arrays
Multidimensional arrays
Variables
foreach loop
if-elseif-else conditions
HTML forms
POST method
Form data handling
Score calculation
Percentage calculation
Dynamic HTML output
Basic responsive CSS
Future Enhancements
The project can be improved by adding:

Student name input
Quiz timer
Random questions
Question navigation
Database integration
Login system
Admin panel
High-score system
Multiple quiz categories
Detailed answer review

Conclusion
The PHP Skill Check Quiz System is a simple mini-project that demonstrates how PHP can be used to create an interactive multiple-choice quiz.
The project uses PHP arrays to store questions and answers and uses PHP form handling to calculate the user's score. It also provides percentage, marks, grade, and performance-based remarks without requiring a database.

GitHub Repository
Project: 2442982_SimpleQuizSystem

Author
Name:Komal
Roll Number: 2442982

Project: PHP Skill Check - Simple Quiz System

Technology: HTML, CSS, PHP


