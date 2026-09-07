# PHP Skill Check - MCQ Quiz

A simple and interactive 10-question multiple-choice quiz developed using PHP arrays, HTML and CSS.

The project tests basic PHP knowledge and automatically calculates the user's marks, percentage, attempted questions, wrong answers and performance grade.

---

## Project Information

| Field | Details |
|---|---|
| Project Name | PHP Skill Check |
| Project Type | PHP Mini Project |
| Technology | HTML5, CSS3, PHP |
| Questions | 10 MCQs |
| Database | Not Required |
| Data Storage | PHP Arrays |

---

## Project Objective

The objective of this project is to create a 10-question multiple-choice quiz using PHP arrays.

The application displays questions and multiple-choice options through an HTML form. After submitting the quiz, PHP compares the selected answers with the correct answers and calculates the final score.

The result page displays:

- Total questions
- Marks obtained
- Percentage
- Correct answers
- Wrong answers
- Attempted questions
- Unattempted questions
- Performance grade
- Performance remarks

---

## Main Features

- 10 PHP multiple-choice questions
- Questions stored inside PHP arrays
- Four options for every question
- Radio-button based answer selection
- Automatic score calculation
- Percentage calculation
- Attempted question count
- Wrong answer count
- Unattempted question count
- Performance-based grade
- Performance-based remarks
- Separate result page
- Try Again option
- Responsive design
- No database required
- Mobile-friendly interface

---

## Performance Criteria

The application calculates the percentage using:

Percentage = (Score / Total Questions) × 100

The performance remarks are based on the following criteria:

| Percentage | Grade | Remarks |
|---|---|---|
| 80% - 100% | A | Excellent performance |
| 60% - 79% | B | Good performance |
| 40% - 59% | C | Fair attempt |
| Below 40% | D | Needs more practice |

---

## Quiz Flow

```text
START
  |
  v
Create PHP Question Array
  |
  v
Display 10 MCQs
  |
  v
User Selects Answers
  |
  v
Submit Quiz
  |
  v
Compare Selected Answers
  |
  v
Calculate Score
  |
  v
Calculate Percentage
  |
  v
Calculate Attempted/Wrong/Skipped
  |
  v
Generate Grade & Remarks
  |
  v
Display Result Page
  |
  v
Try Again
  |
  v
END

