<?php

$questions = array(
    array(
        "question" => "What does PHP stand for?",
        "options" => array(
            "A" => "Personal Home Page",
            "B" => "PHP: Hypertext Preprocessor",
            "C" => "Private Home Page",
            "D" => "Personal Hypertext Processor"
        ),
        "answer" => "B"
    ),

    array(
        "question" => "Which symbol is used before a variable in PHP?",
        "options" => array(
            "A" => "#",
            "B" => "@",
            "C" => "$",
            "D" => "%"
        ),
        "answer" => "C"
    ),

    array(
        "question" => "Which extension is used for PHP files?",
        "options" => array(
            "A" => ".html",
            "B" => ".css",
            "C" => ".php",
            "D" => ".js"
        ),
        "answer" => "C"
    ),

    array(
        "question" => "Which command is used to display output in PHP?",
        "options" => array(
            "A" => "echo",
            "B" => "printscreen",
            "C" => "display",
            "D" => "show"
        ),
        "answer" => "A"
    ),

    array(
        "question" => "Which function is used to count array elements?",
        "options" => array(
            "A" => "length()",
            "B" => "count()",
            "C" => "size()",
            "D" => "total()"
        ),
        "answer" => "B"
    ),

    array(
        "question" => "Which operator is used to concatenate strings in PHP?",
        "options" => array(
            "A" => "+",
            "B" => "&",
            "C" => ".",
            "D" => "*"
        ),
        "answer" => "C"
    ),

    array(
        "question" => "Which keyword is used to define a function in PHP?",
        "options" => array(
            "A" => "function",
            "B" => "define",
            "C" => "method",
            "D" => "func"
        ),
        "answer" => "A"
    ),

    array(
        "question" => "Which method is commonly used to send form data?",
        "options" => array(
            "A" => "GET",
            "B" => "POST",
            "C" => "SEND",
            "D" => "FORM"
        ),
        "answer" => "B"
    ),

    array(
        "question" => "Which statement is used for decision making in PHP?",
        "options" => array(
            "A" => "if",
            "B" => "when",
            "C" => "check",
            "D" => "condition"
        ),
        "answer" => "A"
    ),

    array(
        "question" => "Which symbol ends a PHP statement?",
        "options" => array(
            "A" => ":",
            "B" => ".",
            "C" => ";",
            "D" => ","
        ),
        "answer" => "C"
    )
);

$submitted = false;
$score = 0;
$attempted = 0;
$wrong = 0;
$skipped = 0;
$percentage = 0;
$grade = "";
$remarks = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $submitted = true;

    $totalQuestions = count($questions);

    foreach ($questions as $index => $question) {

        $fieldName = "question_" . $index;

        if (isset($_POST[$fieldName])) {

            $userAnswer = $_POST[$fieldName];

            $attempted++;

            if ($userAnswer === $question["answer"]) {
                $score++;
            }
        }
    }

    $wrong = $attempted - $score;

    $skipped = $totalQuestions - $attempted;

    $percentage = ($score / $totalQuestions) * 100;

    if ($percentage >= 80) {

        $grade = "A";
        $remarks = "Excellent! You have a very good understanding of PHP.";

    } elseif ($percentage >= 60) {

        $grade = "B";
        $remarks = "Good job! Keep practicing to improve your PHP skills.";

    } elseif ($percentage >= 40) {

        $grade = "C";
        $remarks = "Fair attempt. You need some more practice.";

    } else {

        $grade = "D";
        $remarks = "Needs improvement. Please revise PHP basics and try again.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PHP Quiz System</title>

    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            color: #1e293b;
        }

        .container {
            width: 90%;
            max-width: 850px;
            margin: 40px auto;
        }

        /* Header */

        .header {
            background: #1e293b;
            color: white;
            padding: 25px;
            border-radius: 10px;
            margin-bottom: 25px;
        }

        .header h1 {
            font-size: 28px;
            margin-bottom: 6px;
        }

        .header p {
            color: #cbd5e1;
        }

        /* Questions */

        .question {
            background: white;
            padding: 22px;
            margin-bottom: 18px;
            border-radius: 10px;
            border: 1px solid #e2e8f0;
        }

        .question h3 {
            font-size: 17px;
            margin-bottom: 15px;
        }

        .option {
            display: block;
            padding: 12px 15px;
            margin-bottom: 9px;
            border: 1px solid #cbd5e1;
            border-radius: 7px;
            cursor: pointer;
            background: white;
        }

        .option:hover {
            background: #f8fafc;
            border-color: #2563eb;
        }

        .option input {
            margin-right: 10px;
        }

        /* Button */

        .submit-btn {
            width: 100%;
            padding: 14px;
            border: none;
            border-radius: 8px;
            background: #2563eb;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        .submit-btn:hover {
            background: #1d4ed8;
        }

        /* Result */

        .result {
            background: white;
            padding: 30px;
            border-radius: 12px;
            text-align: center;
            margin-bottom: 25px;
            border-top: 5px solid #2563eb;
        }

        .result h2 {
            margin-bottom: 15px;
        }

        .marks {
            font-size: 38px;
            font-weight: bold;
            color: #2563eb;
        }

        .percentage {
            font-size: 24px;
            font-weight: bold;
            color: #16a34a;
            margin: 8px 0 20px;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
            margin-bottom: 20px;
        }

        .stat {
            background: #f8fafc;
            padding: 15px 5px;
            border-radius: 8px;
        }

        .stat strong {
            display: block;
            font-size: 22px;
        }

        .stat span {
            color: #64748b;
            font-size: 13px;
        }

        .remarks {
            background: #eff6ff;
            color: #1e40af;
            padding: 15px;
            border-radius: 8px;
            line-height: 1.6;
        }

        .retry {
            display: inline-block;
            margin-top: 20px;
            padding: 11px 25px;
            background: #2563eb;
            color: white;
            text-decoration: none;
            border-radius: 7px;
        }

        .retry:hover {
            background: #1d4ed8;
        }

        .footer {
            text-align: center;
            color: #64748b;
            font-size: 13px;
            margin: 25px 0;
        }

        /* Mobile */

        @media (max-width: 600px) {

            .container {
                width: 94%;
                margin: 20px auto;
            }

            .header h1 {
                font-size: 23px;
            }

            .stats {
                grid-template-columns: repeat(2, 1fr);
            }

            .question {
                padding: 18px;
            }
        }

    </style>

</head>

<body>

<div class="container">

    <div class="header">

        <h1>PHP Quiz System</h1>

        <p>Test your knowledge of PHP fundamentals</p>

    </div>


    <?php if ($submitted): ?>

        <!-- RESULT PAGE -->

        <div class="result">

            <h2>Quiz Completed</h2>

            <div class="marks">

                <?php echo $score; ?>

                /

                <?php echo count($questions); ?>

            </div>

            <div class="percentage">

                <?php echo round($percentage); ?>%

            </div>


            <div class="stats">

                <div class="stat">

                    <strong><?php echo $score; ?></strong>

                    <span>Correct</span>

                </div>

                <div class="stat">

                    <strong><?php echo $wrong; ?></strong>

                    <span>Wrong</span>

                </div>

                <div class="stat">

                    <strong><?php echo $attempted; ?></strong>

                    <span>Attempted</span>

                </div>

                <div class="stat">

                    <strong><?php echo $skipped; ?></strong>

                    <span>Skipped</span>

                </div>

            </div>


            <div class="remarks">

                <strong>
                    Grade: <?php echo $grade; ?>
                </strong>

                <br>

                <?php echo $remarks; ?>

            </div>


            <a href="index.php" class="retry">
                Try Again
            </a>

        </div>

    <?php endif; ?>


    <!-- QUIZ FORM -->

    <form method="POST" action="">

        <?php foreach ($questions as $index => $question): ?>

            <div class="question">

                <h3>

                    <?php echo ($index + 1) . ". " . $question["question"]; ?>

                </h3>


                <?php foreach ($question["options"] as $key => $option): ?>

                    <label class="option">

                        <input
                            type="radio"
                            name="question_<?php echo $index; ?>"
                            value="<?php echo $key; ?>"
                        >

                        <?php echo $key . ". " . $option; ?>

                    </label>

                <?php endforeach; ?>

            </div>

        <?php endforeach; ?>


        <button type="submit" class="submit-btn">

            Submit Quiz

        </button>

    </form>


    <div class="footer">

        PHP Quiz System | 10 Multiple Choice Questions

    </div>

</div>

</body>

</html>
