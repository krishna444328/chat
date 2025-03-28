<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userMessage = strtolower(trim($_POST["message"])); // यूज़र का मैसेज लोअरकेस में कन्वर्ट करें

    // प्री-डिफाइंड सवाल और जवाब
    $responses = [
        "hello" => "Hi! How can I help you?",
        "how are you" => "I'm just a bot, but I'm doing great! What about you?",
        "your name" => "I'm a simple AI chatbot.",
        "who create you" => "I Give Tips For Free Fire Gaming!",
        "best player in free fire" => "Raistar,Krishna444!",
        "bye" => "Goodbye! Have a great day!"
    ];

    // जवाब ढूंढें
    $botResponse = "Sorry, I don't understand that.";
    foreach ($responses as $question => $answer) {
        if (strpos($userMessage, $question) !== false) {
            $botResponse = $answer;
            break;
        }
    }

    echo $botResponse;
}
?>
