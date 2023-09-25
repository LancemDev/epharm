// resources/js/feedback.js

// Function to display a feedback message
function showFeedback(message) {
    const feedbackContainer = document.getElementById('feedback-container');
    const feedbackMessage = document.createElement('div');
    feedbackMessage.className = 'feedback-message';
    feedbackMessage.textContent = message;
    feedbackContainer.appendChild(feedbackMessage);

    // Set a timeout to remove the message after a certain time (e.g., 5 seconds)
    setTimeout(() => {
        feedbackContainer.removeChild(feedbackMessage);
    }, 5000); // 5000 milliseconds (5 seconds)
}
