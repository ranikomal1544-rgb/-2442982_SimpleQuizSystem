<?php
$questions = [
    [
        "question" => "PHP ka full form kya hai?",
        "options" => [
            "Personal Home Page",
            "Private Home Page",
            "Personal Hypertext Processor",
            "Programming Home Page"
        ],
        "answer" => 0
    ],
    [
        "question" => "PHP file ka extension kya hota hai?",
        "options" => [".html", ".css", ".php", ".js"],
        "answer" => 2
    ],
    [
        "question" => "PHP code kis tag ke andar likha jata hai?",
        "options" => [
            "<php>",
            "<?php ?>",
            "<PHP>",
            "<? ?>"
        ],
        "answer" => 1
    ],
    [
        "question" => "PHP mein variable kis symbol se start hota hai?",
        "options" => ["#", "$", "@", "&"],
        "answer" => 1
    ],
    [
        "question" => "PHP mein output dikhane ke liye commonly kya use hota hai?",
        "options" => ["print", "echo", "display", "show"],
        "answer" => 1
    ]
];

$score = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $score = 0;

    foreach ($questions as $i => $question) {
        if (
            isset($_POST["q$i"]) &&
            (int)$_POST["q$i"] === $question["answer"]
        ) {
            $score++;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MCQ Quiz</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            min-height: 100vh;
            padding: 30px 15px;
        }

        .quiz-container {
            max-width: 750px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.25);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 10px;
        }

        .subtitle {
            text-align: center;
            color: #777;
            margin-bottom: 30px;
        }

        .question {
            margin-bottom: 25px;
            padding: 20px;
            background: #f7f7f7;
            border-radius: 12px;
        }

        .question h3 {
            margin-top: 0;
            color: #333;
        }

        label {
            display: block;
            padding: 12px;
            margin: 8px 0;
            background: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.2s;
        }

        label:hover {
            background: #eee;
        }

        input[type="radio"] {
            margin-right: 10px;
        }

        button {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 10px;
            background: #667eea;
            color: white;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background: #5568d8;
        }

        .result {
            text-align: center;
            padding: 20px;
            margin-bottom: 25px;
            background: #e8f5e9;
            border-radius: 12px;
            color: #2e7d32;
        }
    </style>
</head>

<body>

<div class="quiz-container">

    <h1>PHP MCQ Quiz</h1>
    <p class="subtitle">Test your PHP knowledge</p>

    <?php if ($score !== null): ?>
        <div class="result">
            <h2>Your Score: <?php echo $score; ?> / <?php echo count($questions); ?></h2>

            <?php if ($score == count($questions)): ?>
                <p>🎉 Excellent! All answers are correct!</p>
            <?php elseif ($score >= 3): ?>
                <p>👍 Good job! Keep learning PHP.</p>
            <?php else: ?>
                <p>📚 Keep practicing and try again!</p>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <form method="POST">

        <?php foreach ($questions as $i => $question): ?>

            <div class="question">

                <h3>
                    <?php echo ($i + 1) . ". " . $question["question"]; ?>
                </h3>

                <?php foreach ($question["options"] as $j => $option): ?>

                    <label>
                        <input
                            type="radio"
                            name="q<?php echo $i; ?>"
                            value="<?php echo $j; ?>"
                            required
                        >
                        <?php echo htmlspecialchars($option); ?>
                    </label>

                <?php endforeach; ?>

            </div>

        <?php endforeach; ?>

        <button type="submit">Submit Quiz</button>

    </form>

</div>

</body>
</html>

