<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Lesson Details</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon.png">

    <!-- CSS
	============================================ -->
    <link rel="stylesheet" href="../assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/vendor/slick.css">
    <link rel="stylesheet" href="../assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="../assets/css/plugins/sal.css">
    <link rel="stylesheet" href="../assets/css/plugins/feather.css">
    <link rel="stylesheet" href="../assets/css/plugins/fontawesome.min.css">
    <link rel="stylesheet" href="../assets/css/plugins/euclid-circulara.css">
    <link rel="stylesheet" href="../assets/css/plugins/swiper.css">
    <link rel="stylesheet" href="../assets/css/plugins/odometer.css">
    <link rel="stylesheet" href="../assets/css/plugins/animation.css">
    <link rel="stylesheet" href="../assets/css/plugins/bootstrap-select.min.css">
    <link rel="stylesheet" href="../assets/css/plugins/jquery-ui.css">
    <link rel="stylesheet" href="../assets/css/plugins/magnigy-popup.min.css">
    <link rel="stylesheet" href="../assets/css/plugins/plyr.css">
    <link rel="stylesheet" href="../assets/css/style.css">
	<style>
	
	     #overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            display: none;
            justify-content: center;
            align-items: flex-start; /* Align to the top to allow scrolling */
            z-index: 2000; /* Ensure this value is higher than other overlays */
            overflow-y: auto; /* Enable vertical scrolling */
        }
		
		 #open-overlay {
            padding: 15px 25px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
        }
		
		
		.hidden-radio {
    display: none;
}

.option-bar {
    display: block;
    margin-bottom: 10px;
    cursor: pointer;
    overflow: hidden;
}

.bar {
    display: inline-block;
    background-color: #ccc;
    padding: 10px;
    width: 100%;
    transition: background-color 0.3s ease, color 0.3s ease; /* Smooth transition for background and text color */
    border-radius: 5px;
    box-sizing: border-box;
    font-weight: 600; /* Set a consistent font weight */
    color: black; /* Default text color */
}

.option-bar input:checked + .bar {
    background-color: #4CAF50;
    font-weight: 700; /* Make text bold when selected */
    color: white; /* Change text color to white when selected */
}





/* Gradient effect on Note and Question Cards */
#note-container, .question {
    margin-bottom: 20px;
    padding: 20px;
    background: linear-gradient(180deg, #ffffff, #e3e8f0);
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    animation: slideIn 0.7s ease-out;
}

#note-container:hover, .question:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
}

/* Question Text with Dynamic Gradient */
.question p {
    margin-bottom: 10px;
    font-weight: bold;
    font-size: 16px;
    color: #34495e;
    background: linear-gradient(90deg, #2c3e50, #2980b9, #2c3e50);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: gradientTextAnimation 5s ease infinite;
}

/* Multiple Choice Options */
.options {
    display: flex;
    flex-direction: column;
}

.option {
    padding: 15px;
    margin: 5px 0;
    background: linear-gradient(to right, #ecf0f1, #bdc3c7);
    border: 2px solid #bdc3c7;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.2s ease;
    animation: fadeIn 0.5s ease-in-out;
}

.option:hover {
    background: linear-gradient(to right, #dfe6e9, #b0bec5);
    border-color: #2980b9;
    transform: translateY(-3px);
}

.option.selected {
    background: linear-gradient(to right, #2980b9, #34495e);
    color: #fff;
    border-color: #2980b9;
    animation: pulse 0.5s ease-in-out;
}

/* Input Styling */
input[type="text"] {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ddd;
    border-radius: 8px;
    font-size: 14px;
    transition: border 0.3s ease, box-shadow 0.3s ease;
}

input[type="text"]:focus {
    border-color: #007BFF;
    outline: none;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}

/* Button Styling */
button {
    display: block;
    width: 100%;
    padding: 14px;
    background-color: #3498db;
    color: #fff;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 16px;
    font-weight: bold;
    transition: background-color 0.3s ease, transform 0.2s ease;
    margin-top: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    animation: buttonBounce 1s ease-in-out;
}

button:hover {
    background-color: #2980b9;
    transform: translateY(-3px);
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.15);
}

button:disabled {
    background-color: #bdc3c7;
    cursor: not-allowed;
}

/* Drag-and-Drop Styling */
.draggable {
    padding: 12px;
    margin-bottom: 10px;
    background: linear-gradient(to bottom, #ecf0f1, #d0d3d4);
    border: 1px solid #ddd;
    border-radius: 8px;
    cursor: grab;
    text-align: center;
    user-select: none;
    animation: fadeIn 0.5s ease-in-out;
    transition: transform 0.2s ease;
}

.draggable:hover {
    transform: scale(1.05);
}

.droppable {
    min-height: 50px;
    background: linear-gradient(to bottom, #f8f9fa, #dfe6e9);
    border: 2px dashed #ccc;
    border-radius: 8px;
    margin-bottom: 20px;
    padding: 15px;
    transition: background-color 0.3s ease;
}

/* Dragging Effects */
.droppable.over {
    background-color: #d1ecf1;
    border-color: #007BFF;
}

.draggable:active {
    cursor: grabbing;
}

/* Sortable List Styling */
.sortable-list li {
    padding: 12px;
    background: linear-gradient(to right, #ecf0f1, #d0d3d4);
    border: 1px solid #ddd;
    border-radius: 8px;
    cursor: move;
    animation: slideIn 0.5s ease-out;
    transition: transform 0.2s ease;
}

.sortable-list li:hover {
    transform: scale(1.05);
}

/* Alert Modal Styling */
.alert-modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background: rgba(0, 0, 0, 0.6);
    z-index: 1000;
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.3s ease, visibility 0.3s ease;
}

.alert-modal.show {
    opacity: 1;
    visibility: visible;
}

.alert-content {
    background: #fff;
    padding: 30px;
    border-radius: 10px;
    text-align: center;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    animation: zoomIn 0.5s ease-out;
}

.alert-content h3 {
    font-size: 20px;
    margin-bottom: 15px;
    color: #e74c3c;
}

.alert-content button {
    background-color: #e74c3c;
    margin-top: 10px;
}

.alert-content button:hover {
    background-color: #c0392b;
}

/* Animations */
@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes slideIn {
    from {
        opacity: 0;
        transform: translateX(-20px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes textPop {
    0% {
        transform: scale(0.8);
        opacity: 0;
    }
    100% {
        transform: scale(1);
        opacity: 1;
    }
}

@keyframes buttonBounce {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-5px);
    }
}

@keyframes gradientAnimation {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}

@keyframes gradientTextAnimation {
    0%, 100% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
}

@keyframes pulse {
    0% {
        transform: scale(1);
        box-shadow: 0 0 0 0 rgba(41, 128, 185, 0.7);
    }
    70% {
        transform: scale(1.05);
        box-shadow: 0 0 10px 5px rgba(41, 128, 185, 0);
    }
    100% {
        transform: scale(1);
        box-shadow: 0 0 0 0 rgba(41, 128, 185, 0);
    }
}

@keyframes zoomIn {
    0% {
        transform: scale(0.8);
        opacity: 0;
    }
    100% {
        transform: scale(1);
        opacity: 1;
    }
}


/* Alert container styling */
.custom-alert {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 3000;
}

/* Hidden class for alert */
.hidden {
    display: none;
}

/* Inner content styling with gradient background */
.custom-alert-content {
    background: linear-gradient(135deg, #6a11cb, #2575fc);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
    text-align: center;
    color: white;
    transition: all 0.4s ease-in-out;
}

/* OK button styling */
.custom-alert-content button {
    background-color: #007BFF;
    border: none;
    color: white;
    padding: 10px 20px;
    margin-top: 20px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

.custom-alert-content button:hover {
    background-color: #0056b3;
}

/* Fade and slide-in animation */
@keyframes slideIn {
    from {
        opacity: 0;
        transform: translateY(-20px); /* Slide up */
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Fade and slide-out animation */
@keyframes slideOut {
    from {
        opacity: 1;
        transform: translateY(0);
    }
    to {
        opacity: 0;
        transform: translateY(-20px); /* Slide up */
    }
}

/* Scale-in animation */
@keyframes scaleIn {
    from {
        opacity: 0;
        transform: scale(0.5); /* Start smaller */
    }
    to {
        opacity: 1;
        transform: scale(1); /* Full size */
    }
}

/* Scale-out animation */
@keyframes scaleOut {
    from {
        opacity: 1;
        transform: scale(1); /* Full size */
    }
    to {
        opacity: 0;
        transform: scale(0.5); /* Shrink smaller */
    }
}

/* Apply the animation when alert is shown */
.custom-alert-content {
    animation: scaleIn 0.5s ease-out forwards;
}

/* Hidden state */
.hidden .custom-alert-content {
    animation: scaleOut 0.5s ease-in forwards;
}



.progress-container {
  width: 100%;
  background-color: #e0e0df;
  border-radius: 25px;
  overflow: hidden;
  box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.2);
}

.progress-bar {
  width: 0%;
  height: 25px;
  background: linear-gradient(to right, #4caf50, #8bc34a);
  box-shadow: 0px 0px 10px rgba(76, 175, 80, 0.5), inset 0px 0px 5px rgba(255, 255, 255, 0.5);
  text-align: center;
  line-height: 25px;
  color: white;
  font-weight: bold;
  font-family: Arial, sans-serif;
  font-size: 14px;
  border-radius: 25px 0px 0px 25px;
  transition: width 0.5s ease-in-out;
}

#progressPercent {
  padding-right: 5px; /* Center the percentage text a bit inside the bar */
}









 /* Reset and Basic Styles */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }


        /* Flashcard Container */
        #flashcardContainer {
            width: 90%;
            max-width: 350px;
            height: 500px;
            position: relative;
            perspective: 1500px; /* Increased perspective for more depth */
        }

        /* Flashcard Stack */
        .flashcard-stack {
            position: relative;
            width: 100%;
            height: 100%;
        }

        /* Back Cards with Enhanced Gradient Styling */
        .back-card, .back-card2, .back-card3 {
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, opacity 0.3s ease;
        }

        .back-card.bg-gradient-1 {
            background: linear-gradient(145deg, #ff9a9e, #fad0c4);
            transform: translateY(30px) rotate(-3deg);
            z-index: 1;
        }

        .back-card.bg-gradient-2 {
            background: linear-gradient(135deg, #a18cd1, #fbc2eb);
            transform: translateY(60px) rotate(-6deg);
            z-index: 0;
        }

        .back-card2.bg-gradient-4 {
            background: linear-gradient(135deg, #f093fb, #f5576c);
            transform: translateY(30px) rotate(3deg);
            z-index: 2;
        }

        .back-card2.bg-gradient-5 {
            background: linear-gradient(150deg, #f093fb, #f5576c);
            transform: translateY(60px) rotate(6deg);
            z-index: 1;
        }

        .back-card3.bg-gradient-6 {
            background: linear-gradient(160deg, #cfd9df, #e2ebf0);
            transform: translateY(90px) rotate(-9deg);
            z-index: -1;
        }

        /* Flashcard Inner Container with Advanced Background Design */
        .flashcard-container-inner {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(145deg, #ffffff, #e0e0e0);
            border-radius: 15px;
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
            text-align: center;
            transition: transform 0.6s cubic-bezier(0.22, 1, 0.36, 1), box-shadow 0.6s ease;
            z-index: 5;
            overflow: hidden;
            /* Adding a subtle animated background pattern */
            background-image: 
                radial-gradient(circle at 20% 20%, rgba(255,255,255,0.3) 2px, transparent 2px),
                radial-gradient(circle at 80% 80%, rgba(255,255,255,0.3) 2px, transparent 2px);
            background-size: 50px 50px;
            animation: backgroundMove 10s linear infinite;
        }

        /* Animated Background Pattern */
        @keyframes backgroundMove {
            0% {
                background-position: 0 0, 0 0;
            }
            50% {
                background-position: 25px 25px, -25px -25px;
            }
            100% {
                background-position: 0 0, 0 0;
            }
        }

        .flashcard-container-inner:hover {
            box-shadow: 0 16px 32px rgba(0, 0, 0, 0.3);
            transform: scale(1.02);
        }

        .flashcard-container-inner.swiped-right,
        .flashcard-container-inner.swiped-left {
            opacity: 0;
            transform: translateX(1000px) rotate(30deg);
        }

        .flashcard-container-inner.success-swipe {
            border: 3px solid rgba(76, 175, 80, 0.8);
            box-shadow: 0 10px 30px rgba(76, 175, 80, 0.6);
        }

        .flashcard-container-inner.error-swipe {
            border: 3px solid rgba(244, 67, 54, 0.8);
            box-shadow: 0 10px 30px rgba(244, 67, 54, 0.6);
        }

        /* Flashcard Content */
        .flashcard {
            width: 90%;
            height: 80%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #333;
            position: relative;
            overflow: hidden;
        }

        /* Text Overlay to Prevent Color Interruption */
        .text-overlay {
            background: rgba(255, 255, 255, 0.6);
            padding: 15px;
            border-radius: 10px;
            position: relative;
            width: 100%;
            max-width: 90%;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Advanced shadow for overlay */
        }

        /* Advanced Gradient Text with Multi-Layer Animation */
        .flashcard h2 {
            font-size: 1.15em;
            margin-bottom: 20px;
            background: linear-gradient(120deg, #ff7e5f, #feb47b, #86a8e7, #91eae4);
            background-size: 800% 800%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation:  textPulse 2s infinite alternate;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            position: relative;
            z-index: 1;
            overflow: hidden;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); /* Advanced shadow for text */
        }

        /* Gradient Text Animation */
        @keyframes gradientText {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        /* Text Pulse Animation */
        @keyframes textPulse {
            from {
                transform: scale(1);
            }
            to {
                transform: scale(1.05);
            }
        }

        /* Adding an overlay to the text for a more complex effect */
        .flashcard h2::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: inherit;
            mix-blend-mode: overlay;
            animation: gradientOverlay 4s ease infinite;
            z-index: -1;
            border-radius: 10px;
        }

        @keyframes gradientOverlay {
            0% {
                background-position: 0% 0%;
            }
            50% {
                background-position: 100% 100%;
            }
            100% {
                background-position: 0% 0%;
            }
        }

        /* Advanced Styling for Reveal Text */
        .flashcard p {
            font-size: 1.2em;
            color: #555;
            opacity: 0;
            transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
            padding: 10px;
            line-height: 1.5;
            background: linear-gradient(90deg, #f3ec78, #af4261);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            transform: translateY(-10px);
            animation: revealMove 1s ease forwards;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2); /* Advanced shadow for reveal text */
        }

        .flashcard p.show {
            opacity: 1;
            transform: translateY(0);
            animation: revealFadeIn 1s ease forwards;
        }

        /* Reveal Text Animations */
        @keyframes revealMove {
            from {
                transform: translateY(-20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes revealFadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Reveal Button with Advanced Styling */
        .reveal-button {
            padding: 12px 24px;
            background: linear-gradient(45deg, #6a11cb, #2575fc);
            color: white;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 1em;
            margin-top: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease, background 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .reveal-button::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: rgba(255, 255, 255, 0.2);
            transform: rotate(45deg) scale(0);
            transition: transform 0.5s ease;
        }

        .reveal-button:hover::before {
            transform: rotate(45deg) scale(1);
        }

        .reveal-button:hover {
            background: linear-gradient(45deg, #2575fc, #6a11cb);
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        }

        /* Autoplay Control Button */
        

        #autoplayControl.stop {
            background: linear-gradient(45deg, #feb47b, #ff7e5f);
        }

        #autoplayControl:hover {
            transform:  scale(1.05);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        }

        /* Progress Bar */
        #progressBar2 {
            position: absolute;
            top: 10px;
            left: 10px;
            width: calc(100% - 20px);
            height: 5px;
            background: rgba(0, 0, 0, 0.1);
            border-radius: 3px;
            overflow: hidden;
            z-index: 10;
        }

        #progress2 {
            width: 0;
            height: 100%;
            background: linear-gradient(90deg, #6a11cb, #2575fc);
            transition: width 0.1s linear;
        }

        /* Responsive Design */
        @media (max-width: 600px) {
            #flashcardContainer {
                height: 400px;
            }

            .flashcard h2 {
                font-size: 1.2em;
            }

            .reveal-button, #autoplayControl {
                font-size: 0.9em;
                padding: 10px 20px;
            }

            .flashcard p {
                font-size: 0.9em;
            }
        }

        /* Additional Background Classes for Different Flashcards */
        .bg-gradient-1 {
            background: linear-gradient(145deg, #ff9a9e, #fad0c4);
        }

        .bg-gradient-2 {
            background: linear-gradient(135deg, #a18cd1, #fbc2eb);
        }

        .bg-gradient-3 {
            background: linear-gradient(150deg, #fbc2eb, #a6c1ee);
        }

        .bg-gradient-4 {
            background: linear-gradient(135deg, #f093fb, #f5576c);
        }

        .bg-gradient-5 {
            background: linear-gradient(150deg, #f093fb, #f5576c);
        }

        .bg-gradient-6 {
            background: linear-gradient(160deg, #cfd9df, #e2ebf0);
        }

        /* Moving Background Shapes */
        .shape {
            position: absolute;
            border-radius: 50%;
            opacity: 0.3;
            z-index: 0;
            animation: moveShape linear infinite;
        }

        /* Specific Shapes */
        .shape1 {
            width: 100px;
            height: 100px;
            background: rgba(255, 255, 255, 0.4);
            top: -20px;
            left: -20px;
            clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
            animation-duration: 20s;
            animation-delay: 0s;
        }

        .shape2 {
            width: 80px;
            height: 80px;
            background: rgba(255, 255, 255, 0.3);
            bottom: -30px;
            right: -30px;
            clip-path: ellipse(60% 40% at 50% 50%);
            animation-duration: 25s;
            animation-delay: 5s;
        }

        .shape3 {
            width: 120px;
            height: 120px;
            background: rgba(255, 255, 255, 0.2);
            top: 40%;
            left: 10%;
            clip-path: polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%);
            animation-duration: 30s;
            animation-delay: 10s;
        }

        .shape4 {
            width: 60px;
            height: 60px;
            background: rgba(255, 255, 255, 0.35);
            bottom: 20%;
            right: 15%;
            clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
            animation-duration: 18s;
            animation-delay: 3s;
        }
		
		.mflash {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 80vh;
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
            overflow: hidden;
        }

        /* Keyframes for Moving Shapes */
        @keyframes moveShape {
            from {
                transform: translate(0, 0) rotate(0deg);
            }
            to {
                transform: translate(200px, 200px) rotate(360deg);
            }
        }
		
		
		
		
		
		#rating-container {
    background-color: #fafafa;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.star-rating {
    display: flex;
    justify-content: center;
    margin-bottom: 10px;
}

.star {
    font-size: 2em;
    cursor: pointer;
    color: #ccc;
    transition: color 0.2s;
}

.star:hover,
.star.hovered,
.star.selected {
    color: gold;
}


 .image-viewer {
            width: 90%;
            max-width: 700px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.25);
            background-color: #fff;
            position: relative;
            transform: translateY(0);
            transition: transform 0.5s ease, box-shadow 0.5s ease;
        }

        .image-viewer:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
        }

        .image-container {
            max-height: 500px;
            overflow: hidden;
            position: relative;
            transition: max-height 0.5s ease, padding 0.5s ease;
        }

        .image-container img {
            width: 100%;
            height: auto;
            display: block;
            transition: opacity 0.3s ease, margin 0.5s ease, width 0.5s ease;
            opacity: 0;
        }

        .loader {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border: 6px solid #f3f3f3;
            border-radius: 50%;
            border-top: 6px solid #3498db;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .see-more {
            position: absolute;
            bottom: 0;
            width: 100%;
            text-align: center;
            padding: 15px;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0));
            color: #fff;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s ease;
            text-transform: uppercase;
        }

        .see-more:hover {
            background: rgba(0, 0, 0, 0.9);
        }

        .image-container.expanded {
            max-height: none;
			overflow-y: auto;
			 max-height: 10000px;
        }

        .image-container img.loaded {
            opacity: 1;
        }

        .imgbutton {
            position: absolute;
            bottom: 15px;
            right: 15px;
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            font-size: 14px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: none;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .image-container.expanded + button {
            display: block;
        }

        .imgbutton:hover {
            background-color: #2980b9;
            transform: translateY(-5px);
        }

        /* Slider styling */
        .zoom-slider {
            margin: 20px 0;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .zoom-slider input[type="range"] {
            width: 100%;
            max-width: 400px;
        }

        .zoom-label {
            margin-bottom: 10px;
            font-size: 16px;
            font-weight: bold;
            color: #3498db;
        }

        /* Mobile optimization */
        @media (max-width: 768px) {
            .image-viewer {
                width: 100%;
                max-width: none;
            }

            .image-container {
                max-height: 350px;
            }

            button {
                padding: 8px 16px;
                font-size: 12px;
            }
        }

        @media (max-width: 480px) {
            .image-container {
                max-height: 250px;
            }

            .see-more {
                font-size: 16px;
            }
        }


	
	</style>
</head>

<body>

<div id="overlay" >
    <div id="microlearning-container" class="rbt-counterup variation-01 rbt-hover-03 rbt-border-dashed bg-pink-opacity" style="margin-top:20px; margin-bottom:20px; justify-content: center;">
        <!-- Microlearning content will be placed here -->
    </div>
</div>

    <div id="my_switcher" class="my_switcher">
        <ul>
            <li>
                <a href="javascript: void(0);" data-theme="light" class="setColor light">
                    <img src="../assets/images/about/sun-01.svg" alt="Sun images"><span title="Light Mode"> Light</span>
                </a>
            </li>
            <li>
                <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
                    <img src="../assets/images/about/vector.svg" alt="Vector Images"><span title="Dark Mode"> Dark</span>
                </a>
            </li>
        </ul>
    </div>

    <!-- Start Header Area -->
    <header class="rbt-header rbt-header-10">
        <div class="rbt-sticky-placeholder"></div>

        <!-- Start Header Top  -->
        <!-- End Header Top  -->
        <div class="rbt-header-wrapper header-space-betwween header-sticky">
            <div class="container-fluid">
                <div class="mainbar-row rbt-navigation-center align-items-center">
                    <div class="header-left rbt-header-content">
                        <div class="header-info">
                            <div class="logo logo-dark">
                                <a href="#">
                                    <img src="../assets/images/logo/logo.jfif" alt="Education Logo Images">
                                </a>
                            </div>

                            <div class="logo d-none logo-light">
                                <a href="#">
                                    <img src="../assets/images/logo/logo.jfif" alt="Education Logo Images">
                                </a>
                            </div>
                        </div>
                        <div class="header-info">
                            <div class="rbt-category-menu-wrapper rbt-category-update">

                                <div class="rbt-category-btn">
                                    <div class="rbt-offcanvas-trigger md-size icon">
                                        <span class="d-none d-xl-block">
                                    <i class="feather-grid"></i>
                                </span>
                                        <i title="Category" class="feather-grid d-block d-xl-none"></i>
                                    </div>
                                    <span class="category-text d-none d-xl-block">Category</span>
                                </div>

                                <!-- Start category Area  -->
                                <!-- End category Area  -->

                            </div>
                        </div>
                    </div>

                    <div class="header-right">

                        <!-- Navbar Icons -->
						<ul class="quick-access">
						 <li class="account-access rbt-user-wrapper d-none d-xl-block">
                                <a href="../courses"><i class="feather-user"></i>Explore Courses</a>
                            </li>
                        </ul>
                       
                        <div class="rbt-btn-wrapper d-none d-xl-block">
                            <a class="rbt-btn rbt-marquee-btn marquee-auto btn-border-gradient radius-round btn-sm hover-transform-none" href="tel:+251923442133">
                                <span data-text="Enroll Now">Enroll Now</span>
                            </a>
                        </div>

                        <!-- Start Mobile-Menu-Bar -->
                        <div class="mobile-menu-bar d-block d-xl-none">
                            <div class="hamberger">
                                <button class="hamberger-button rbt-round-btn">
                                    <i class="feather-menu"></i>
                                </button>
                            </div>
                        </div>
                        <!-- Start Mobile-Menu-Bar -->

                    </div>
                </div>
            </div>
            <!-- Start Search Dropdown  -->
            <!-- End Search Dropdown  -->
        </div>
        <!-- Start Side Vav -->
        <div class="rbt-offcanvas-side-menu rbt-category-sidemenu">
            <div class="inner-wrapper">
                <div class="inner-top">
                    <div class="inner-title">
                        <h4 class="title">Course Category</h4>
                    </div>
                    <div class="rbt-btn-close">
                        <button class="rbt-close-offcanvas rbt-round-btn"><i class="feather-x"></i></button>
                    </div>
                </div>
               <div class="rbt-offcanvas-footer">

                </div>
            </div>
        </div>
        <!-- End Side Vav -->
        <a class="rbt-close_side_menu" href="javascript:void(0);"></a>

    </header>

    <!-- Mobile Menu Section -->
    <div class="popup-mobile-menu">
        <div class="inner-wrapper">
            <div class="inner-top">
                <div class="content">
                    <div class="logo">
                        <div class="logo logo-dark">
                            <a href="../explore">
                                <img src="../assets/images/logo/logo.jfif" alt="Education Logo Images">
                            </a>
                        </div>

                        
                    </div>
                    <div class="rbt-btn-close">
                        <button class="close-button rbt-round-btn"><i class="feather-x"></i></button>
                    </div>
                </div>
                
            </div>

            <nav class="mainmenu-nav">
            </nav>

            <div class="mobile-menu-bottom">
                <div class="rbt-btn-wrapper mb--20">
                    <a class="rbt-btn btn-border-gradient radius-round btn-sm hover-transform-none w-100 justify-content-center text-center" href="tel:+251923442133">
                        <span>Enroll Now</span>
                    </a>
                </div>

                <div class="social-share-wrapper">
                    <span class="rbt-short-title d-block">Find With Us</span>
                    <ul class="social-icon social-default transparent-with-border justify-content-start mt--20">
                       
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- Start Side Vav -->
    <!-- End Side Vav -->
    <a class="close_side_menu" href="javascript:void(0);"></a>

    <!-- Start breadcrumb Area -->
    <div class="rbt-breadcrumb-default rbt-breadcrumb-style-3">
        <div class="breadcrumb-inner breadcrumb-dark">
            <img src="../assets/images/bg/bg-image-10.jpg" alt="Education Images">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="content text-start">
					<div style="position: relative; z-index: 1;">
                        <ul class="page-list">
                            <li class="rbt-breadcrumb-item"><a href="#">Lesson</a></li>
                            <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li id="cat2" class="rbt-breadcrumb-item active"></li>
							
                        </ul>
						
                        <h2 id="tid1" class="title"></h2>
                        <p id="tid2" class="description"></p>
						</div>
						<br>
						 <div id="fr1" class="inner" style="position: relative; z-index: 2;">
                   
                </div>
				<br>
				
				

                        <div class="d-flex align-items-center mb--20 flex-wrap rbt-course-details-feature">

                            <div class="feature-sin best-seller-badge">
                                <span id="cats" class="rbt-badge-2">
                                    <span class="image"><img src="../assets/images/icons/card-icon-1.png"
                                            alt="Best Seller Icon"></span> 
                                </span>
                            </div>

                            <div id="stars" class="feature-sin rating">
                               
                            </div>
							
							
							

                            <div class="feature-sin total-rating">
                                <a id="rates" class="rbt-badge-4" href="#"></a>
                            </div>

                            <div class="feature-sin total-student">
                                <span id="attempts"></span>
                            </div>

                        </div>
						
				        
						 
						 <div class="buy-now-btn mt--15">
                                    <button id="quiz3" class="rbt-btn btn-border icon-hover w-100 d-block text-center" >
                                        <span class="btn-text">Start Lesson</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </button>
                                </div>
								<br><br>
                   

                        <ul class="rbt-meta">
                            <li id="updq"><i class="feather-calendar"></i></li>
                            <li><i class="feather-globe"></i>English</li>
                            <li><i class="feather-award"></i>Certified Lesson</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area -->

    <div class="rbt-course-details-area ptb--60">
        <div class="container">
            <div class="row g-5">

                <div class="col-lg-8">
                    <div class="course-details-content">
                        

                        <div class="rbt-inner-onepage-navigation sticky-top mt--30">
                            <nav class="mainmenu-nav onepagenav">
                                <ul class="mainmenu">
								    <li>
                                        <a href="#coursecontent">Topics</a>
                                    </li>
                                    <li class="current">
                                        <a href="#overview">Lesson Overview</a>
                                    </li>
                                    
                                    
                                    <li>
                                        <a href="#review">Reviews</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
						
						  <div class="course-content rbt-shadow-box coursecontent-wrapper mt--30" id="coursecontent">
                            <div class="rbt-course-feature-inner">
                                <div class="section-title">
                                    <h4 class="rbt-title-style-3">Topics covered in the Lesson</h4>
                                </div>
                                <div class="rbt-accordion-style rbt-accordion-02 accordion">
                                    <div class="accordion" id="topicss">

                                    </div>
                                </div>
                            </div>
                        </div>
						
						
						
						<audio id="revealSound" src="../pop.m4a" preload="auto"></audio>
    <audio id="swipeSound" src="../flip.mp3" preload="auto"></audio>
	<br><br><br><br>
<div id="flashc" >
    <h3 id="tin" ><strong class="theme-gradient">FlashCards </strong></h3><hr/>
    <!-- Flashcard Container -->
	<div class="mflash" >
       <div  id="flashcardContainer">
        <div class="flashcard-stack">
            <!-- Progress Bar -->
            <div id="progressBar2"><div id="progress2"></div></div>
            <!-- Back Cards (Stack) -->
            <div class="back-card bg-gradient-1"></div>
            <div class="back-card bg-gradient-2"></div>
            <div class="back-card2 bg-gradient-4"></div>
            <div class="back-card2 bg-gradient-5"></div>
            <div class="back-card3 bg-gradient-3"></div>
            <div class="back-card3 bg-gradient-6"></div>
            <!-- Moving Shapes -->
            <div class="shape shape1"></div>
            <div class="shape shape2"></div>
            <div class="shape shape3"></div>
            <div class="shape shape4"></div>
        </div>
      </div>
	  <br><br><br>
    </div>
     <button id="autoplayControl">Start Autoplay</button>
    <!-- Autoplay Control Button -->
    
	
</div>    
						

                        <!-- Start Course Feature Box  -->
                        <div class="rbt-course-feature-box overview-wrapper rbt-shadow-box mt--30 " id="overview">
						    <h4 id="tin" >Lesson overview and summary</h4><hr/>
							
							<div id="summaryimg" >
							
</div>

							
							
							
                            <div id="notes" class="rbt-course-feature-inner has-show-more-inner-content">
                               
                            </div>
                        </div>
                        <!-- End Course Feature Box  -->

                      

                        <!-- Start Course Feature Box  -->
                        <!-- End Course Feature Box  -->

                        <!-- Start Intructor Area  -->
                        
                        <!-- End Intructor Area  -->

                        <!-- Start Edu Review List  -->
                        <div class="rbt-review-wrapper rbt-shadow-box review-wrapper mt--30" id="review">
                            <div class="course-content">
                                <div class="section-title">
                                    <h4 class="rbt-title-style-3">Reviews</h4>
                                </div>
                                <div class="row g-5 align-items-center">
                                    <div class="col-lg-3">
                                        <div class="rating-box">
                                            <div id="ratenum" class="rating-number"></div>
                                            <div id="mrating" class="rating">
                                               
                                            </div>
                                            <span class="sub-title">Lesson Rating</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="review-wrapper">
                                            <div class="single-progress-bar">
                                                <div class="rating-text">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 63%" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="value-text">63%</span>
                                            </div>

                                            <div class="single-progress-bar">
                                                <div class="rating-text">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                    </svg>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 29%" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="value-text">29%</span>
                                            </div>

                                            <div class="single-progress-bar">
                                                <div class="rating-text">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                    </svg>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 6%" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="value-text">6%</span>
                                            </div>

                                            <div class="single-progress-bar">
                                                <div class="rating-text">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                    </svg>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="value-text">1%</span>
                                            </div>

                                            <div class="single-progress-bar">
                                                <div class="rating-text">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                    </svg>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="value-text">1%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Edu Review List  -->

                        <div class="about-author-list rbt-shadow-box featured-wrapper mt--30 ">
                            <div class="section-title">
                                <h4 class="rbt-title-style-3">Reviews by students who finished the lesson</h4>
                            </div>
                            <div id="comments-list" class="has-show-more-inner-content rbt-featured-review-list-wrapper">
                             </div>
                            
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="course-sidebar sticky-top rbt-shadow-box course-sidebar-top rbt-gradient-border">
                        <div class="inner">

                            <!-- Start Viedo Wrapper  -->
                            <a id="vchk" class="video-popup-with-text video-popup-wrapper text-center popup-video sidebar-video-hidden mb--15" href="#">
                                
                            </a>
                            <!-- End Viedo Wrapper  -->

                            <div class="content-item-content">
                                <div class="rbt-price-wrapper d-flex flex-wrap align-items-center justify-content-between">
                                    <div class="rbt-price">
                                        <span id="qstr" class="current-price"></span>
                                    </div>
                                    <div class="discount-time">
                                        <span id="timestr" class="rbt-badge color-danger bg-color-danger-opacity"> </span>
                                    </div>
                                </div>

                                <div class="add-to-card-button mt--15">
                                    <button id="quiz1" class="rbt-btn btn-gradient icon-hover w-100 d-block text-center" >
                                        <span class="btn-text">Start Lesson</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </button>
                                </div>

                                

                                <span id="exp" class="subtitle"> </span>


                                <div class="rbt-widget-details ">
                                    <ul class="has-show-more-inner-content rbt-course-details-list-wrapper">
                                        <li><span>Total attempts</span><span id="kj1" class="rbt-feature-value rbt-badge-5"></span>
                                        </li>
                                        <li><span>Passing rate</span><span id="kj2" class="rbt-feature-value rbt-badge-5"></span>
                                        </li>
                                        <li><span>Difficulty</span><span id="kj3" class="rbt-feature-value rbt-badge-5"></span>
                                        </li>
                                        <li><span>Language</span><span
                                                class="rbt-feature-value rbt-badge-5">English</span></li>
                                        <li><span>Certificate</span><span
                                                class="rbt-feature-value rbt-badge-5">Yes</span></li>
                                        
                                    </ul>
                                   
                                </div>

                                <div class="social-share-wrapper mt--30 text-center">
                                    <div class="rbt-post-share d-flex align-items-center justify-content-center">
                                        <ul class="social-icon social-default transparent-with-border justify-content-center">
                                            <li><a href="#">
                                                    <i class="feather-facebook"></i>
                                                </a>
                                            </li>
                                            <li><a href="#">
                                                    <i class="feather-twitter"></i>
                                                </a>
                                            </li>
                                            <li><a href="#">
                                                    <i class="feather-instagram"></i>
                                                </a>
                                            </li>
                                            <li><a href="#">
                                                    <i class="feather-linkedin"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <hr class="mt--20">
                                    <div class="contact-with-us text-center">
                                        <p>For details about the topic</p>
                                        <p class="rbt-badge-2 mt--10 justify-content-center w-100"><i
                                                class="feather-phone mr--5"></i> Call Us: <a href="tel:+251989285318" target="_blank"><strong>+251 989285318</strong></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>

    
    <!-- Start Course Action Bottom  -->
    <div class="rbt-course-action-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="section-title text-center text-md-start">
                        <h5 class="title mb--0">Are you ready to take the Lesson now?</h5>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mt_sm--15">
                    <div class="course-action-bottom-right rbt-single-group">
                        <div class="rbt-single-list rbt-price large-size justify-content-center">
                        </div>
                        <div class="rbt-single-list action-btn">
                            <button id="quiz2" class="rbt-btn btn-gradient hover-icon-reverse btn-md" >
                                <span class="icon-reverse-wrapper">
                                <span class="btn-text">Start Lesson</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Course Action Bottom  -->
    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>
    <!-- Start Footer aera -->
    <!-- End Footer aera -->
    <div class="rbt-progress-parent">
        <svg class="rbt-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
	
	<div id="customAlert" class="custom-alert hidden">
    <div class="custom-alert-content">
        <span id="alertMessage"></span>
        <button id="alertOkButton" onclick="closeCustomAlert()">OK</button>
    </div>
</div>


    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <script src="../assets/js/vendor/modernizr.min.js"></script>
    <!-- jQuery JS -->
    <script src="../assets/js/vendor/jquery.js"></script>
    <!-- Bootstrap JS -->
    <script src="../assets/js/vendor/bootstrap.min.js"></script>
    <!-- sal.js -->
    <script src="../assets/js/vendor/sal.js"></script>
    <!-- Dark Mode Switcher -->
    <script src="../assets/js/vendor/js.cookie.js"></script>
    <script src="../assets/js/vendor/jquery.style.switcher.js"></script>
    <script src="../assets/js/vendor/swiper.js"></script>
    <script src="../assets/js/vendor/jquery-appear.js"></script>
    <script src="../assets/js/vendor/odometer.js"></script>
    <script src="../assets/js/vendor/backtotop.js"></script>
    <script src="../assets/js/vendor/isotop.js"></script>
    <script src="../assets/js/vendor/imageloaded.js"></script>

    <script src="../assets/js/vendor/wow.js"></script>
    <script src="../assets/js/vendor/waypoint.min.js"></script>
    <script src="../assets/js/vendor/easypie.js"></script>
    <script src="../assets/js/vendor/text-type.js"></script>
    <script src="../assets/js/vendor/jquery-one-page-nav.js"></script>
    <script src="../assets/js/vendor/bootstrap-select.min.js"></script>
    <script src="../assets/js/vendor/jquery-ui.js"></script>
    <script src="../assets/js/vendor/magnify-popup.min.js"></script>
    <script src="../assets/js/vendor/paralax-scroll.js"></script>
    <script src="../assets/js/vendor/paralax.min.js"></script>
    <script src="../assets/js/vendor/countdown.js"></script>
    <script src="../assets/js/vendor/plyr.js"></script>
    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>
	<script src="./confetti.js"></script>

	<script>
	
	
		
		var token = localStorage.getItem('jwtToken');
		var data;
 const quizId = getQueryParameter('id');
 let selectedRating = 0;
 var stars;
 

 
 
async function fetchQuizQuestions() {
    // Get the quiz_id from the URL query parameters
   

    // Check if quiz_id is available
    if (!quizId) {
        console.error('Quiz ID not found in the URL');
		window.location.replace("../explore/");
        return;
    }
	
	
	
	document.getElementById('quiz1').onclick = function () {
		document.getElementById('overlay').style.display = 'flex';
		
		setTimeout(function(){
		   loadContent();
		},1000);
    };
	
	document.getElementById('quiz2').onclick = function () {
		document.getElementById('overlay').style.display = 'flex';
		setTimeout(function(){
		   loadContent();
		},1000);
    };
	
	document.getElementById('quiz3').onclick = function () {
		document.getElementById('overlay').style.display = 'flex';
		setTimeout(function(){
		   loadContent();
		},1000);
    };

    try {
        // Fetch quiz questions using the quiz_id
        const response = await fetch(`../api/?action=getCourselesson&quiz_id=${quizId}`, {
            method: 'GET',
            headers: {
                'Authorization': `Bearer ${token}`, // Replace with actual token
                'Content-Type': 'application/json'
            }
        });

        // Check if the response is ok
        if (!response.ok) {
			window.location.replace("../login/");
            throw new Error('Network response was not ok');
			
        }

        // Parse the JSON response
        const datam = await response.json();
            document.getElementById('qstr').innerHTML=countQuestionsByType(datam).total+" Questions";
			document.getElementById('timestr').innerHTML='<i class="feather-clock"></i> '+countQuestionsByType(datam).overall+' minutes';
        
           
            quizData=datam.questions;
			data=datam;
			console.log(data);
			lod(datam);
       
    } catch (error) {
        // Input is not valid JSON
		console.log(error);
		if(error.toString().includes("null")){
		 window.location.href = "../courses"; // Replace with the desired URL
		}
		else{
        // Redirect after 5 seconds
        setTimeout(function() {
           window.location.href = "../payment"; // Replace with the desired URL
        }, 1000);
		}
    }
}

function checkAndRedirect(input) {
    try {
		input=JSON.stringify(input);
        JSON.parse(input);
        // Input is valid JSON, no action needed
    } catch (e) {
        // Input is not valid JSON
        
        // Redirect after 5 seconds
        setTimeout(function() {
            window.location.href = "../payment"; // Replace with the desired URL
        }, 2000);
    }
}


fetchQuizQuestions();



function updateprogressmain(b,c){
	var progressData = {
     quiz_id: getQueryParameter('id'), // example quiz ID
     course_code: getQueryParameter('list'), // example course code
     completed: 1 // example completion status (0 or 1)
   };


fetch('../api/?action=updateUserProgress', {
    method: 'POST',
    headers: {
                'Authorization': `Bearer ${token}`, // Replace with actual token
                'Content-Type': 'application/json'
            },
    body: JSON.stringify(progressData)
})
.then(response => {
    if (response.status === 401) {
      // If the status is 401, redirect to the login page
      window.location.href = '../login/';  // Redirects to the login page
    } else if (response.ok) {
      // If the request is successful, parse the response
      return response.json();
    } else {
      // Handle other types of errors
      throw new Error('Something went wrong: ' + response.statusText);
    }
  })
.then(data => {
	if(data.course_completed==false){
	showCustomAlert('Congrats, You have completed the Lesson, Next lesson about '+data.next_quiz_title+' is now Unlocked!');
 
	  document.getElementById('nextlesson').onclick = function () {
		 window.location.href="./?id="+data.next_quiz_code+"&list="+getQueryParameter('list')+"";
      };
	
	
	}
	else{
	  showCustomAlert('Congratulations, You have completed the entire course, We will be preparing your Certificate!');
    setTimeout(function(){
		window.location.href="../courses";
	},10000);
	}
})
.catch(error => {
    console.error('Error:', error);
});
}

function shuffle(array) {
    for (let i = array.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]];
    }
    return array;
}


function lod(dat){
	document.title=dat.title+" Lesson";
	document.getElementById('tid1').innerHTML=dat.title;
	document.getElementById('tid2').innerHTML=dat.description;
	document.getElementById('exp').innerHTML= dat.expectation;
	document.getElementById('notes').innerHTML= dat.note;
	if(dat.hasOwnProperty("flashcards")){
		document.getElementById('flashc').style.display="block";
		cards=dat.flashcards;
		createFlashcard(cards[0]);
	}
	else{
		document.getElementById('flashc').style.display="none";
	}
	
	if(dat.hasOwnProperty("summary")){
		document.getElementById('summaryimg').innerHTML=`<div class="image-viewer" >
    <div class="image-container" id="imageContainer">
        <div class="loader" id="loader"></div>
        <img id="longImage" src="`+dat.summary+`" alt="Long Image">
        <div class="see-more" id="seeMore">See More</div>
    </div>
    <button class="imgbutton" id="zoomOut">Collapse</button>
</div>
<br>
<div class="zoom-slider">
    <label class="zoom-label" for="zoomRange">Zoom In</label>
    <input type="range" id="zoomRange" min="0" max="50" value="20">
</div>`;
		summary();
	}
	else{
		document.getElementById('summaryimg').style.display="none";
	}
	var tops=""
	for(var j=0;j<dat.topics.length;j++){
		tops+=`<div class="accordion-item card">
                                            <h2 class="accordion-header card-header" >
                                                <button class="accordion-button" >
                                                   ${dat.topics[j]} 
                                                </button>
                                            </h2>
                                        </div>`;
	}
	
	document.getElementById('topicss').innerHTML=tops;
}


function getQueryParameter(name) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(name);
}	

function fetchQuizDetails(quizId) {
    fetch(`../api/?action=getQuizDetails&quiz_id=${quizId}`, {
        method: 'GET',
        headers: {
            'Authorization': `Bearer ${token}`
        }
    })
    .then(response => {
    if (response.status === 401) {
      // If the status is 401, redirect to the login page
      window.location.href = '../login/';  // Redirects to the login page
    } else if (response.ok) {
      // If the request is successful, parse the response
      return response.json();
    } else {
      // Handle other types of errors
      throw new Error('Something went wrong: ' + response.statusText);
    }
  })
    .then(data => {
        if (data.success) {
            // Process and display the quiz details on the page
			var fgc=data.quiz;
			var time=Math.round(90*fgc.num_questions/60);
			
			document.getElementById('updq').innerHTML="Lesson Created in "+fgc.created_at;
			
			document.getElementById('cats').innerHTML=document.getElementById('cats').innerHTML+fgc.category;
			document.getElementById('cat2').innerHTML=fgc.category;
			
			//document.getElementById('stars').innerHTML=generateStars(fgc.average_rating)+'   <b>'+Math.round(fgc.average_rating)+" stars</b>";
			document.getElementById('ratenum').innerHTML= (Math.round(fgc.average_rating*10)/10).toFixed(1);
			document.getElementById('mrating').innerHTML= generateStars(fgc.average_rating);
			document.getElementById('kj1').innerHTML= fgc.total_attempts;
			document.getElementById('kj2').innerHTML= fgc.passing_rate;
			document.getElementById('kj3').innerHTML= fgc.difficulty;
			
			if(fgc.youtubeid!="" && fgc.youtubeid!=null){
				document.getElementById('vchk').href="https://www.youtube.com/watch?v="+fgc.youtubeid;
				document.getElementById('vchk').innerHTML=`<div class="video-content">
                                    <img id="mimg" class="w-100 rbt-radius" src="" alt="Video Images">
                                    <div class="position-to-top">
                                        <span class="rbt-btn rounded-player-2 with-animation">
                                            <span class="play-icon"></span>
                                        </span>
                                    </div>
                                    <span class="play-view-text d-block color-white"><i class="feather-eye"></i> Tutorial for
                                        this Lesson</span>
                                </div>`;
								
								
								document.getElementById('fr1').innerHTML =` <div class="plyr__video-embed rbtplayer">
                        <iframe src="https://www.youtube.com/embed/${fgc.youtubeid}" allowfullscreen allow="autoplay" width="100%" style="height: 100%;"></iframe>
                    </div>`;
								
								document.getElementById('mimg').src=fgc.img;
								document.getElementById('tin').innerHTML="Lesson Overview aided with video";
			}
			
			
        } else {
            console.error('Error:', data.message);
        }
    })
    .catch(error => {
        console.error('Error fetching quiz details:', error);
    });
}


fetchQuizDetails(quizId); // Replace 1 with the actual quiz ID
	


function generateStars(rating) {
    let starHtml = '';

    // Round rating to the nearest 0.5
    const roundedRating = Math.round(rating * 2) / 2;

    const fullStars = Math.floor(roundedRating);
    const halfStar = roundedRating % 1 !== 0;
    const emptyStars = 5 - fullStars - (halfStar ? 1 : 0);
    
    // Add full stars
    for (let i = 0; i < fullStars; i++) {
        starHtml += `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                </svg>`;
    }

    // Add half star if applicable
    if (halfStar) {
        starHtml += `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                </svg>`;;
    }

    // Add empty stars
    for (let i = 0; i < emptyStars; i++) {
        starHtml += `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"></path>
                                                    </svg>`;
    }
    
    return starHtml;
}


function generateStars2(rating) {
    let starHtml = '';

    // Round rating to the nearest 0.5
    const roundedRating = Math.round(rating * 2) / 2;

    const fullStars = Math.floor(roundedRating);
    const halfStar = roundedRating % 1 !== 0;
    const emptyStars = 5 - fullStars - (halfStar ? 1 : 0);
    
    // Add full stars
    for (let i = 0; i < fullStars; i++) {
        starHtml += `<a href="#"><i class="fa fa-star"></i></a>&nbsp;`;
    }

    // Add half star if applicable
    if (halfStar) {
        starHtml += `<a href="#"><i class="fa fa-star"></i></a>&nbsp;`;
    }

    // Add empty stars
    for (let i = 0; i < emptyStars; i++) {
        starHtml += `<a href="#"><i class="far fa-star star-yellow"></i></a>&nbsp;`;
    }
    
    return starHtml;
}
	
	
	
function countQuestionsByType(data) {
	data=data.lessons;
  // Initialize an object to store the question counts, total count, and overall
  const questionCount = {
    total: 0,
    overall: 0
  };

  // Loop through each section of the provided JSON
  data.forEach(section => {
    section.content.forEach(content => {
      content.questions.forEach(question => {
        // Get the question type and increment the count
        const type = question.type;
        if (questionCount[type]) {
          questionCount[type]++;
        } else {
          questionCount[type] = 1;
        }

        // Increment the total count of questions
        questionCount.total++;
      });
    });
  });

  // Calculate the overall score based on the weighted sum
  const mcqCount = questionCount["MCQ"] || 0;
  const fillInTheBlankCount = questionCount["Fill-in-the-Blank"] || 0;
  const orderTheStepsCount = questionCount["OrderTheSteps"] || 0;
  const dragAndDropCount = questionCount["DragAndDrop"] || 0;

  questionCount.overall = (mcqCount * 2) + (fillInTheBlankCount * 3) + (orderTheStepsCount * 2) + (dragAndDropCount * 3);

  return questionCount;
}






	
	
			
		
		
		
	///////////////////////

	
    const commentsListElement = document.getElementById('comments-list');
    const loadMoreButton = document.createElement('button');
    let offset = 0;
    const limit = 10;

    loadMoreButton.textContent = 'Load More Comments';
    loadMoreButton.addEventListener('click', () => loadCommentsAndRatings(offset += limit));

    // Fetch and display quiz comments and ratings
    function loadCommentsAndRatings(offset = 0) {
        fetch(`../api/?action=getQuizComments&quiz_id=${quizId}&limit=${limit}&offset=${offset}`, {
            method: 'GET',
            headers: {
                'Authorization': `Bearer ${token}`
            }
        })
        .then(response => {
    if (response.status === 401) {
      // If the status is 401, redirect to the login page
      window.location.href = '../login/';  // Redirects to the login page
    } else if (response.ok) {
      // If the request is successful, parse the response
      return response.json();
    } else {
      // Handle other types of errors
      throw new Error('Something went wrong: ' + response.statusText);
    }
  })
        .then(data => {
            if (data.success && data.comments.length > 0) {
                data.comments.forEach(comment => {
                    const commentElement = document.createElement('div');
                    commentElement.classList.add('rbt-course-review');
                    commentElement.classList.add('about-author');
                    
                    commentElement.innerHTML = `
                       
                                    <div class="media">
                                        <div class="thumbnail">
                                            <a href="#">
                                                <img src="../avatar.png" alt="Author Images">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="author-info">
                                                <h5 class="title">
                                                    <a class="hover-flip-item-wrapper" href="#">
                                                        ${comment.username}  (Completed Quizzes: ${comment.completed_quizzes})
                                                    </a>
                                                </h5>
                                                <div class="rating">
                                                `+generateStars2(comment.rating)+`
                                                </div>
												
                                            </div>
                                            <div class="content">
                                                <p class="description">${comment.comment}</p>
                                                <ul class="social-icon social-default transparent-with-border justify-content-start">
                                                    <li><a href="#">
                                                            <i class="feather-thumbs-up"></i>
                                                        </a>
                                                    </li>
                                                    <li><a href="#">
                                                            <i class="feather-thumbs-down"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                
						
						
						
                    `;
                    
                    commentsListElement.appendChild(commentElement);
                });

                // Append Load More button if there are more comments
                if (data.comments.length === limit) {
                    commentsListElement.appendChild(loadMoreButton);
                } else {
                    loadMoreButton.remove();
                }
            } else {
                if (offset === 0) {
                    commentsListElement.innerHTML = '<div class="no-comments">No comments available for this Lesson.</div>';
                }
                loadMoreButton.remove();
            }
        })
        .catch(error => {
            console.error('Error fetching comments:', error);
            if (offset === 0) {
                commentsListElement.innerHTML = '<div class="no-comments">Failed to load comments.</div>';
            }
            loadMoreButton.remove();
        });
    }

 
    loadCommentsAndRatings();
	
	

    // Function to close the overlay (triggered from inside the microlearning page)
    function closeOverlay() {
        document.getElementById('overlay').style.display = 'none';
    }

    // Load the microlearning content
    window.onload = function() {
        document.getElementById('microlearning-container').innerHTML = `



                                <div class="content" style="width:100%; display: flex; justify-content: center;">
                                    <div class="col-lg-10" >
                                   
                                    
                                        
										
                                             <div id="content">
											 <div class="section-title">
                                                <h4 id="lesson-title" class="rbt-title-style-3" style="color:white;"></h4>
                                            </div>
            <div id="note-container">
                <p id="note"></p>
                <button  id="show-questions-button" onclick="showQuestions()">Proceed to Questions</button>
            </div>
            <div id="question-container" style="display:none;"></div>
		
        </div>
		<div class="progress-container">
  <div class="progress-bar" id="progressBar">
    <span id="progressPercent">0%</span>
  </div>
</div>
        <button   id="next-button" style="display:none;" onclick="nextContent()">Next</button>

                                            <div class="load-more-btn text-center">
												<button  id="close-overlay" onclick="closeOverlay()">Exit</button>
                                            </div>
                                        
                                    

                                </div>
                          




        `;
    };
	
	
	
	
	///////
	


    let currentLesson = 0;
    let currentContent = 0;
	let index = 0;
	
	let totalContentItems = 0;
    let completedContentItems = 0;

    //document.getElementById('course-title').innerText = data.courseTitle;
	
	

// Calculate total notes and questions in the lesson
function calculateTotalItems2() {
    var totalNotes = data.lessons.reduce((acc, lesson) => acc + lesson.content.length, 0);
    var totalQuestions = data.lessons.reduce((acc, lesson) => {
        return lesson.content.reduce((qCount, content) => qCount + content.questions.length, 0);
    }, 0);
	totalContentItems=totalQuestions;
}

function calculateTotalItems() {
    let totalQuestions = 0;
	
	let noteCount = 0;

    // Iterate over each topic in the JSON array
    data.lessons.forEach(topic => {
        // Check if the topic has content
        if (topic.content && Array.isArray(topic.content)) {
            // Iterate over each content item
            topic.content.forEach(contentItem => {
                // Check if the content item has a note
                if (contentItem.note) {
                    noteCount++;
                }
            });
        }
    });

    data.lessons.forEach(section => {
        section.content.forEach(contentItem => {
            if (contentItem.questions && Array.isArray(contentItem.questions)) {
                totalQuestions += contentItem.questions.length;
            }
        });
    });

    totalContentItems=noteCount;
}

	
	
	function updateProgress() {
    const progressBar = document.getElementById('progressBar');
    const progressPercent = document.getElementById('progressPercent');
    
    const percentage = Math.floor((completedContentItems / totalContentItems) * 100);
    
    progressBar.style.width = percentage + '%';
    progressPercent.innerText = percentage + '%';
    
   
}

// Call this function after each question or note is completed
function completeItem() {
    completedContentItems++;
    updateProgress();
}

// Initialize total content items on page load
function initializeProgress() {
    const lesson = data.lessons[currentLesson];
    totalContentItems = lesson.content.length; // Total notes
	calculateTotalItems();
    

    updateProgress(); // Initialize progress bar
}

// Initialize progress when page loads

    
	
	function loadQuestion() {
    const questionContainer = document.getElementById('question-container');
    questionContainer.innerHTML = ''; // Clear previous question
    const lesson = data.lessons[currentLesson];
    const content = lesson.content[currentContent];
    const question = content.questions[index]; // Load current question

    const questionDiv = document.createElement('div');
    questionDiv.classList.add('question');

    const questionText = document.createElement('p');
    questionText.innerText = question.question;
    questionDiv.appendChild(questionText);
	
	   switch (question.type) {
                case "MCQ":
     shuffle(question.options).forEach((option, i) => {
        const label = document.createElement('label');
        label.classList.add('option-bar');
        label.dataset.value = option;

        const input = document.createElement('input');
        input.type = "radio";
        input.name = `question${index}`;
        input.value = option;
        input.classList.add('hidden-radio');

        const span = document.createElement('span');
        span.classList.add('bar');
        span.textContent = option;

        label.appendChild(input);
        label.appendChild(span);
        questionDiv.appendChild(label);

        // Add event listener to change the bar on click
        label.addEventListener('click', () => {
            document.querySelectorAll(`[name="question${index}"]`).forEach(el => {
                el.parentElement.querySelector('.bar').style.width = '100%';
                el.parentElement.querySelector('.bar').style.backgroundColor = '#ccc';
            });
            span.style.width = '100%';
            span.style.backgroundColor = '#4CAF50';
        });
    });
    break;

                case "Fill-in-the-Blank":
                    const input = document.createElement('input');
                    input.type = "text";
                    input.name = `question${index}`;
                    questionDiv.appendChild(input);
                    break;

                case "TrueFalse":
                    ["True", "False"].forEach(option => {
                        const label = document.createElement('label');
                        const input = document.createElement('input');
                        input.type = "radio";
                        input.name = `question${index}`;
                        input.value = option === "True";
                        label.appendChild(input);
                        label.appendChild(document.createTextNode(option));
                        questionDiv.appendChild(label);
                    });
                    break;

                case "OrderTheSteps":
                    const ul = document.createElement('ul');
                    ul.classList.add('sortable-list');
                    shuffle(question.steps).forEach(step => {
                        const li = document.createElement('li');
                        li.innerText = step;
                        li.setAttribute('draggable', 'true');
                        ul.appendChild(li);
                    });
                    questionDiv.appendChild(ul);
                    makeSortable(ul);
                    break;


	
	case "DragAndDrop":
    // Append any initial elements like a clicker, if needed
    const clicker = document.createElement('button');
    clicker.innerText = "Activate dragging";
    //questionDiv.appendChild(clicker);

    // Create droppable divs for each category found in the `categories` array
   shuffle(question.categories).forEach(category => {
        // Create a droppable div for each category
        const droppableDiv = document.createElement('div');
        droppableDiv.classList.add('droppable');
        droppableDiv.setAttribute('data-category', category.name); // Use the category name as the data attribute

        // Create and append a label for each category
        const categoryLabel = document.createElement('p');
        categoryLabel.innerText = category.name;
        questionDiv.appendChild(categoryLabel);
        questionDiv.appendChild(droppableDiv);
    });

    // Create draggable divs based on the items defined in the `items` array
    shuffle(question.items).forEach(item => {
        const draggableDiv = document.createElement('div');
        draggableDiv.classList.add('draggable');
        draggableDiv.setAttribute('data-category', item.category); // Set data attribute for matching logic
        draggableDiv.innerText = item.label; // Display the item name
        draggableDiv.setAttribute('draggable', 'true');
        questionDiv.appendChild(draggableDiv);
    });

    // Make droppable elements functional
    makeDroppable(questionDiv);
    break;




              
               

                default:
                    break;
            }
			 questionContainer.appendChild(questionDiv);
    document.getElementById('question-container').style.display = 'block';
	
	}

    function loadContent() {
    const lesson = data.lessons[currentLesson];
    const content = lesson.content[currentContent];
	initializeProgress();
    document.getElementById('lesson-title').innerText = lesson.title;
    document.getElementById('note').innerHTML = content.note;

    index = 0; // Reset question index
    document.getElementById('next-button').style.display = 'none';
    document.getElementById('note-container').style.display = 'block';
    document.getElementById('question-container').style.display = 'none';
}

    function showQuestions() {
           document.getElementById('note-container').style.display = 'none';
        loadQuestion(); // Load the first question
        document.getElementById('next-button').style.display = 'block';
    }

    function nextContent() {
        const lesson = data.lessons[currentLesson];
    const content = lesson.content[currentContent];
    const question = content.questions[index];
    const questionContainer = document.getElementById('question-container');
    let userAnswer;

    let allCorrect = true;

        
            switch (question.type) {
                case "MCQ":
                    userAnswer = questionContainer.querySelector(`input[name="question${index}"]:checked`);
                    if (!userAnswer || userAnswer.value !== question.correctAnswer) {
                        allCorrect = false;
                    }
                    break;

                case "Fill-in-the-Blank":
                    userAnswer = questionContainer.querySelector(`input[name="question${index}"]`).value.trim();
                    if (!question.correctAnswer.toLowerCase().includes(userAnswer.toLowerCase()) || userAnswer.replaceAll(" ","").split("").length<3 || userAnswer.toLowerCase()=="") {
                        allCorrect = false;
                    }
                    break;

                case "TrueFalse":
                    userAnswer = questionContainer.querySelector(`input[name="question${index}"]:checked`);
                    if (!userAnswer || userAnswer.value !== String(question.correctAnswer)) {
                        allCorrect = false;
                    }
                    break;

                case "OrderTheSteps":
                    const steps = Array.from(questionContainer.querySelectorAll('.sortable-list li')).map(li => li.innerText);
                    if (JSON.stringify(steps) !== JSON.stringify(question.correctOrder)) {
                        allCorrect = false;
                    }
                    break;

       case "DragAndDrop":
    // Loop through each draggable item to validate the user's submitted answers
    question.items.forEach(item => {
        // Find the expected category for the current draggable item from the `item.category`
        const expectedCategory = item.category;

        // Find all droppable elements that represent categories
        const droppables = Array.from(questionContainer.querySelectorAll(`.droppable[data-category]`));

        // Initialize a flag to check if the draggable item is correctly placed
        let itemCorrectlyPlaced = false;

        // Loop through each droppable to find where the draggable item is placed
        for (let drop of droppables) {
            // Get the category name from the droppable element's data attribute
            const categoryName = drop.getAttribute('data-category');

            // Get all draggable items within the current droppable
            const items = Array.from(drop.querySelectorAll('.draggable')).map(div => div.innerText);

            // Check if the draggable item is in this droppable and if it matches the expected category
            if (items.includes(item.label) && categoryName === expectedCategory) {
                itemCorrectlyPlaced = true;
                break;
            }
        }

        // If the draggable item is not placed correctly, mark the answer as incorrect
        if (!itemCorrectlyPlaced) {
            allCorrect = false;
        }
    });

    break;







                default:
                    break;
            }
        

       if (allCorrect) {
        index++;
		ultimateCelebration();
		
		if (index < content.questions.length) {
			playAudio('../aud/md1.m4a');
            loadQuestion(); // Load the next question
        } else {
            currentContent++;
			playAudio('../aud/md2.m4a');
			showCustomAlert('Great! onto the next topic!');
            if (currentContent < lesson.content.length) {
				
                loadContent(); // Move to the next note
				completeItem();
				
            } else {
                currentContent = 0;
                currentLesson++;
                if (currentLesson < data.lessons.length) {
                    loadContent(); // Move to the next lesson
					completeItem();
                } else {
					
					document.getElementById('note-container').innerHTML=`<div id="rating-container" >
			
            <h3>Lesson Completed!! Rate it</h3>
            <div class="star-rating">
                <span class="star" data-value="5">&#9733;</span>
                <span class="star" data-value="4">&#9733;</span>
                <span class="star" data-value="3">&#9733;</span>
                <span class="star" data-value="2">&#9733;</span>
                <span class="star" data-value="1">&#9733;</span>
            </div>
            <textarea id="review-comment" placeholder="Leave a comment (max 150 characters)" maxlength="150"></textarea>
            <button class="action-btn"  id="submit-rating-btn">Submit Rating</button>
        </div> <button class="action-btn"  id="nextlesson">Go to Next Lesson</button>`;
		
		const submitRatingButton = document.getElementById('submit-rating-btn');
	    stars = document.querySelectorAll('.star');
		
		stars.forEach((star, index) => {
    star.addEventListener('mouseover', () => {
        highlightStars(index + 1);
    });

    star.addEventListener('mouseout', () => {
        highlightStars(selectedRating);
    });

    star.addEventListener('click', () => {
        selectedRating = index + 1;
        highlightStars(selectedRating);
    });
});
		
		submitRatingButton.addEventListener('click', () => {
    const reviewComment = document.getElementById('review-comment').value;
    if (!selectedRating) {
        showCustomAlert('Please select a star rating.');
        return;
    }
    if (reviewComment.length > 150) {
        showCustomAlert('Comment is too long. Please keep it under 150 characters.');
        return;
    }

    // Replace this part with a call to the backend API to submit the rating and comment
    fetch('../api/?action=rateQuiz', {
        method: 'POST',
        headers: {
            'Authorization': localStorage.getItem('jwtToken'),
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            quiz_id: quizId, // Replace with the actual quiz ID
            rating: selectedRating,
            comment: reviewComment
        })
    })
    .then(response => {
    if (response.status === 401) {
      // If the status is 401, redirect to the login page
      window.location.href = '../login/';  // Redirects to the login page
    } else if (response.ok) {
      // If the request is successful, parse the response
      return response.json();
    } else {
      // Handle other types of errors
      throw new Error('Something went wrong: ' + response.statusText);
    }
  })
    .then(data => {
        
            showCustomAlert('Thank you for your feedback!');
			const ratingContainer = document.getElementById('rating-container');
			ratingContainer.style.display = 'none';
        // Hide the rating container and show a thank you message or something else
        
    });
});

       
          
					
					
					updateprogressmain(quizId,getQueryParameter('list'));
					 
					 document.getElementById('note-container').style.display = 'block';
                     document.getElementById('question-container').style.display = 'none';
                     document.getElementById('next-button').style.display = 'none';
                }
            }
        }
    } else {
        playAudio('../aud/md3.m4a');
		
       
        document.getElementById('note-container').style.display = 'block';
        document.getElementById('question-container').style.display = 'none';
        document.getElementById('next-button').style.display = 'none';
		showCustomAlert('Incorrect answer. Please review the note and try again');
		
    }
   }

  function makeSortable(ul) {
    let draggingElement;
    let placeholder;
    let isTouch = false;

    ul.addEventListener('dragstart', (e) => {
        startDragging(e);
    });

    ul.addEventListener('dragend', (e) => {
        endDragging(e);
    });

    ul.addEventListener('dragover', (e) => {
        e.preventDefault();
        movePlaceholder(e.clientY);
    });

    ul.addEventListener('drop', () => {
        ul.insertBefore(draggingElement, placeholder);
    });

    // Touch event listeners
    ul.addEventListener('touchstart', (e) => {
        isTouch = true;
        startDragging(e);
    });

    ul.addEventListener('touchend', (e) => {
        endDragging(e);
        isTouch = false;
    });

    ul.addEventListener('touchmove', (e) => {
        e.preventDefault(); // Prevent scrolling
        if (isTouch) {
            const touch = e.touches[0];
            movePlaceholder(touch.clientY);
            updateDraggingElementPosition(touch);
        }
    });

    function startDragging(e) {
        draggingElement = isTouch ? e.target.closest('li') : e.target;
        placeholder = document.createElement('li');
        placeholder.className = 'placeholder';
        ul.insertBefore(placeholder, draggingElement.nextSibling);
        if (isTouch) {
            draggingElement.style.position = 'absolute';
            draggingElement.style.zIndex = '1000';
        } else {
            setTimeout(() => draggingElement.style.display = 'none', 0);
        }
    }

    function endDragging(e) {
        draggingElement.style.display = 'block';
        draggingElement.style.position = '';
        draggingElement.style.zIndex = '';
        ul.insertBefore(draggingElement, placeholder);
        placeholder.remove();
    }

    function movePlaceholder(y) {
        const afterElement = getDragAfterElement(ul, y);
        if (afterElement == null) {
            ul.appendChild(placeholder);
        } else {
            ul.insertBefore(placeholder, afterElement);
        }
    }

    function updateDraggingElementPosition(touch) {
        draggingElement.style.top = `${touch.clientY - draggingElement.offsetHeight / 2}px`;
        draggingElement.style.left = `${touch.clientX - draggingElement.offsetWidth / 2}px`;
    }

    function getDragAfterElement(container, y) {
        const draggableElements = [...container.querySelectorAll('li:not(.placeholder):not([style*="display: none"])')];

        return draggableElements.reduce((closest, child) => {
            const box = child.getBoundingClientRect();
            const offset = y - box.top - box.height / 2;
            if (offset < 0 && offset > closest.offset) {
                return { offset: offset, element: child };
            } else {
                return closest;
            }
        }, { offset: Number.NEGATIVE_INFINITY }).element;
    }
}


function makeDroppable(container) {
    const draggables = container.querySelectorAll('.draggable');
    const droppables = container.querySelectorAll('.droppable');

    draggables.forEach(draggable => {
        draggable.addEventListener('dragstart', () => {
            draggable.classList.add('dragging');
        });

        draggable.addEventListener('dragend', () => {
            draggable.classList.remove('dragging');
        });

        // Touch event listeners
        draggable.addEventListener('touchstart', (e) => {
            draggable.classList.add('dragging');
            e.preventDefault(); // Prevent any default action like scrolling
        });

        draggable.addEventListener('touchmove', (e) => {
            e.preventDefault();
            const touch = e.touches[0];
            const elementUnderTouch = document.elementFromPoint(touch.clientX, touch.clientY);

            droppables.forEach(droppable => {
                if (droppable.contains(elementUnderTouch)) {
                    droppable.classList.add('over');
                } else {
                    droppable.classList.remove('over');
                }
            });
        });

        draggable.addEventListener('touchend', (e) => {
            const touch = e.changedTouches[0];
            const elementUnderTouch = document.elementFromPoint(touch.clientX, touch.clientY);
            const overDroppable = [...droppables].find(droppable => droppable.contains(elementUnderTouch));

            if (overDroppable) {
                overDroppable.appendChild(draggable);
                overDroppable.classList.remove('over');
            }

            draggable.classList.remove('dragging');
        });
    });

    droppables.forEach(droppable => {
        droppable.addEventListener('dragover', e => {
            e.preventDefault(); // Necessary to allow dropping
            droppable.classList.add('over');
        });

        droppable.addEventListener('dragleave', () => {
            droppable.classList.remove('over');
        });

        droppable.addEventListener('drop', () => {
            const dragging = document.querySelector('.dragging');
            droppable.appendChild(dragging);
            droppable.classList.remove('over');
        });

        // Optional: Clear the 'over' class when touch is not on a droppable
        droppable.addEventListener('touchmove', (e) => {
            e.preventDefault();
            const touch = e.touches[0];
            const elementUnderTouch = document.elementFromPoint(touch.clientX, touch.clientY);

            if (!droppable.contains(elementUnderTouch)) {
                droppable.classList.remove('over');
            }
        });

        droppable.addEventListener('touchend', () => {
            droppable.classList.remove('over');
        });
    });
}

function makeDroppable(container) {
    const draggables = container.querySelectorAll('.draggable');
    const droppables = container.querySelectorAll('.droppable');
    let draggingElement = null;

    draggables.forEach(draggable => {
        draggable.addEventListener('dragstart', () => {
            draggingElement = draggable;
            draggable.classList.add('dragging');
        });

        draggable.addEventListener('dragend', () => {
            draggable.classList.remove('dragging');
            draggingElement = null;
        });

        // Touch event listeners
        draggable.addEventListener('touchstart', (e) => {
            draggingElement = draggable;
            draggable.classList.add('dragging');
            draggable.style.position = 'absolute';
            draggable.style.zIndex = '1000';
            updateDraggingElementPosition(e.touches[0]);
            e.preventDefault(); // Prevent scrolling
        });

        draggable.addEventListener('touchmove', (e) => {
            e.preventDefault();
            updateDraggingElementPosition(e.touches[0]);

            const touch = e.touches[0];
            const elementUnderTouch = document.elementFromPoint(touch.clientX, touch.clientY);

            droppables.forEach(droppable => {
                if (droppable.contains(elementUnderTouch)) {
                    droppable.classList.add('over');
                } else {
                    droppable.classList.remove('over');
                }
            });
        });

        draggable.addEventListener('touchend', (e) => {
            const touch = e.changedTouches[0];
            const elementUnderTouch = document.elementFromPoint(touch.clientX, touch.clientY);
            const overDroppable = [...droppables].find(droppable => droppable.contains(elementUnderTouch));

            if (overDroppable) {
                overDroppable.appendChild(draggingElement);
                overDroppable.classList.remove('over');
            }

            draggingElement.style.position = '';
            draggingElement.style.zIndex = '';
            draggingElement.classList.remove('dragging');
            draggingElement = null;
        });
    });

    droppables.forEach(droppable => {
        droppable.addEventListener('dragover', e => {
            e.preventDefault(); // Necessary to allow dropping
            droppable.classList.add('over');
        });

        droppable.addEventListener('dragleave', () => {
            droppable.classList.remove('over');
        });

        droppable.addEventListener('drop', () => {
            if (draggingElement) {
                droppable.appendChild(draggingElement);
                droppable.classList.remove('over');
            }
        });

        // Optional: Clear the 'over' class when touch is not on a droppable
        droppable.addEventListener('touchmove', (e) => {
            e.preventDefault();
            const touch = e.touches[0];
            const elementUnderTouch = document.elementFromPoint(touch.clientX, touch.clientY);

            if (!droppable.contains(elementUnderTouch)) {
                droppable.classList.remove('over');
            }
        });

        droppable.addEventListener('touchend', () => {
            droppable.classList.remove('over');
        });
    });

      function updateDraggingElementPosition(touch) {
        if (draggingElement) {
            draggingElement.style.top = `${touch.clientY - draggingElement.offsetHeight / 2}px`;
            draggingElement.style.left = `${touch.clientX - draggingElement.offsetWidth / 2}px`;
        }
    }
}

// Function to display the custom alert with animations
function showCustomAlert(message) {
    document.getElementById('alertMessage').textContent = message;
    let alertBox = document.getElementById('customAlert');
    alertBox.classList.remove('hidden');
	 alertBox.style.display = '';
}

// Function to close the custom alert with a delay for animation
function closeCustomAlert() {
    let alertBox = document.getElementById('customAlert');
    alertBox.classList.add('hidden');
    
    // Add delay to fully hide the alert after animation
    setTimeout(function() {
        alertBox.style.display = 'none'; // Fully hide after animation completes
    }, 500); // Match with animation duration
}



// Advanced Confetti Effect
function showAdvancedConfetti() {
    // Base configuration for the confetti
    let confettiSettings = {
        particleCount: 100,  // number of particles
        angle: 60,           // angle of the confetti
        spread: 120,         // spread of particles
        origin: { x: Math.random(), y: Math.random() - 0.2 }, // random origin
        colors: ['#bb0000', '#ffffff', '#00bb00', '#ffbb00', '#0000bb'], // array of colors
        shapes: ['circle', 'square'], // types of shapes
        gravity: 1.2,        // makes confetti fall faster or slower
        ticks: 200,          // how long confetti lasts
        scalar: 1,           // size of particles
    };

    // Trigger multiple bursts of confetti at different angles and origins
    confetti(confettiSettings);

    // Add some more confetti bursts after a delay to simulate longer celebrations
    setTimeout(() => {
        confetti({
            ...confettiSettings,
            particleCount: 150, // increase particles
            angle: 120,         // angle the confetti in a different direction
            origin: { x: Math.random(), y: Math.random() - 0.3 }, // adjust origin slightly
        });
    }, 500); // delay before next burst

    setTimeout(() => {
        confetti({
            ...confettiSettings,
            particleCount: 200,
            angle: 90,
            spread: 180,
            origin: { x: 0.5, y: 0.5 }, // center burst
            scalar: 1.5,  // larger confetti particles
        });
    }, 1000); // another delay for final burst
}


function directionalConfetti() {
    // Left-side burst
    confetti({
        particleCount: 50,
        angle: 60,
        spread: 55,
        origin: { x: 0, y: 0.5 }, // from the left side
        colors: ['#f00', '#0f0', '#00f'],
        gravity: 1.5,
    });

    // Right-side burst
    confetti({
        particleCount: 50,
        angle: 120,
        spread: 55,
        origin: { x: 1, y: 0.5 }, // from the right side
        colors: ['#0ff', '#f0f', '#ff0'],
        gravity: 1.5,
    });
}



function cascadingConfetti() {
    let duration = 5 * 1000; // confetti lasts for 5 seconds
    let end = Date.now() + duration;

    (function frame() {
        confetti({
            particleCount: 3,  // fewer particles for a slower trickle effect
            angle: 60,
            spread: 55,
            origin: { x: Math.random(), y: 0 }, // randomize origin on the top edge
            colors: ['#ff6666', '#66ff66', '#6666ff'],
            gravity: 1.5,  // particles fall at moderate speed
            scalar: Math.random() * 1.2, // randomize size of particles
            ticks: 300,   // how long the particles stay visible
        });

        if (Date.now() < end) {
            requestAnimationFrame(frame); // continue until duration ends
        }
    })();
}



function explosiveConfetti() {
    // Explode confetti in a circular pattern
    confetti({
        particleCount: 200,   // lots of particles for a big explosion
        spread: 360,          // spread in a circular pattern
        startVelocity: 50,    // make it explode fast
        origin: {
            x: Math.random(),
            y: Math.random()
        },
        colors: ['#f39c12', '#8e44ad', '#2ecc71', '#e74c3c'], // vibrant colors
        gravity: 0.8,         // light gravity for a slow fall
        scalar: 1.2,          // slightly larger particles
    });
}


function setConfettiCanvasZIndex() {
    // Find the canvas element created by confetti and set its z-index
    const confettiCanvas = document.querySelector('canvas');
    if (confettiCanvas) {
        confettiCanvas.style.position = 'fixed';
        confettiCanvas.style.top = '0';
        confettiCanvas.style.left = '0';
        confettiCanvas.style.width = '100vw';
        confettiCanvas.style.height = '100vh';
        confettiCanvas.style.zIndex = '4000';
        confettiCanvas.style.pointerEvents = 'none'; // Prevents clicks from being blocked
    }
}



function ultimateCelebration() {
    showAdvancedConfetti();   // A large, multi-burst effect
    setTimeout(() => {
        directionalConfetti();  // Confetti from the left and right
    }, 800);
    
    setTimeout(() => {
        explosiveConfetti();  // A final explosive burst
    }, 1500);

    // Set z-index to make sure the confetti shows up on top
    setConfettiCanvasZIndex();
}


// Global cache for audio objects
var audioCache = {};

function playAudio(audioPath) {
    // Check if the audio object already exists in the cache
    let audio = audioCache[audioPath];
    
    if (!audio) {
        // Create a new audio object if it doesn't exist in the cache
        audio = new Audio(audioPath);
        audio.preload = 'auto'; // Preload the audio file
        audioCache[audioPath] = audio; // Store it in the cache
    }

    // Play the audio file
    audio.play().then(() => {
        console.log("Audio is playing.");
    }).catch(error => {
        console.error("Error playing audio:", error);
    });
}

// Usage Example


















let autoplayInterval, revealTimeout;
        let isAutoplayActive = false;

        // Load Audio Elements
        const revealSound = document.getElementById('revealSound');
        const swipeSound = document.getElementById('swipeSound');

        // Progress bar update
        function updateProgressBar(percentage) {
            const progress = document.getElementById('progress2');
            progress.style.width = `${percentage}%`;
        }

        function resetProgressBar() {
            updateProgressBar(0);
        }

        let startX, isDragging = false, currentX, isClick = true;
        let currentIndex = 0;
        let threshold = 50;  // Increased threshold for better swipe detection
        const cardWidth = 300; // Base card width for swipe calculations
        var cards = [];

        // Array of background classes for different flashcards
        const backgroundClasses = [
            'bg-gradient-1',
            'bg-gradient-2',
            'bg-gradient-3',
            'bg-gradient-4',
            'bg-gradient-5',
            'bg-gradient-6'
        ];

        // Autoplay logic
        function startAutoplay() {
            isAutoplayActive = true;
            document.getElementById('autoplayControl').textContent = "Stop Autoplay";
            document.getElementById('autoplayControl').classList.add('stop');
            
            // Start the initial progress bar
            resetProgressBar();
            startProgressBar(15);  // 15 seconds for the swipe

            autoplayInterval = setInterval(() => {
                swipeCardAnimation();
                setTimeout(function(){
                    showNextCard();
                    resetProgressBar();
                    startProgressBar(15); // Restart progress bar for the new card
                    startRevealTimer();
                }, 800); // Adjusted timeout to match animation duration
            }, 15000);  // 15 seconds to swipe to next card

            startRevealTimer();
        }

        function stopAutoplay() {
            isAutoplayActive = false;
            clearInterval(autoplayInterval);
            clearTimeout(revealTimeout);
            resetProgressBar();
            document.getElementById('autoplayControl').textContent = "Start Autoplay";
            document.getElementById('autoplayControl').classList.remove('stop');
        }

        function swipeCardAnimation() {
            const flashcardElement = document.querySelector('.flashcard-container-inner');
            if (flashcardElement) {
                flashcardElement.style.transition = 'transform 0.6s cubic-bezier(0.22, 1, 0.36, 1), opacity 0.6s ease';
                flashcardElement.style.transform = 'translateX(1000px) rotate(30deg)';  // Strong right swipe
                flashcardElement.style.opacity = '0';
                flashcardElement.classList.add('swiped-right');
                // Play swipe sound
                swipeSound.currentTime = 0;
                swipeSound.play();
                setTimeout(() => {
                    showNextCard();
                }, 600); // Match with transition duration
            }
        }

        function startRevealTimer() {
            revealTimeout = setTimeout(() => {
                revealText();
            }, 7000);  // 7 seconds to reveal the hidden text
        }

        function revealText() {
            const hiddenText = document.querySelector('.flashcard p');
            const hiddenButton = document.querySelector('.reveal-button');
            if (hiddenText) {
                hiddenText.classList.add('show');
				hiddenText.style.display = 'block';
                hiddenButton.style.display = 'none';
                // Play reveal sound
                revealSound.currentTime = 0;
                revealSound.play();
            }
        }

        // Progress bar logic
        function startProgressBar(duration) {
            let progress = 0;
            const interval = setInterval(() => {
                if (progress >= 100 || !isAutoplayActive) {
                    clearInterval(interval);
                    return;
                }
                progress += 100 / (duration * 10);  // Updates every 100ms
                updateProgressBar(progress);
            }, 100);
        }

        // Swipe event handler
        function addSwipeEvents(flashcardElement) {
            const container = document.getElementById('flashcardContainer');

            flashcardElement.addEventListener('mousedown', startDrag);
            flashcardElement.addEventListener('touchstart', startDrag);

            function startDrag(e) {
                isDragging = true;
                isClick = true;
                startX = (e.touches ? e.touches[0].clientX : e.clientX);
                flashcardElement.classList.add('swiping');
                document.addEventListener('mousemove', handleDrag);
                document.addEventListener('touchmove', handleDrag);
                document.addEventListener('mouseup', endDrag);
                document.addEventListener('touchend', endDrag);
            }

            function handleDrag(e) {
                if (!isDragging) return;
                isClick = false;  // It is no longer a simple click
                currentX = (e.touches ? e.touches[0].clientX : e.clientX);
                const deltaX = currentX - startX;

                // Prevent swipe on small movements
                if (Math.abs(deltaX) < threshold) return;

                const percentageSwiped = deltaX / container.offsetWidth;
                const opacityFactor = Math.max(0.6, 1 - Math.abs(percentageSwiped) * 0.5);
                const scaleFactor = Math.max(0.95, 1 - Math.abs(percentageSwiped) * 0.05);
                const rotateAngle = percentageSwiped * 20;

                flashcardElement.style.transform = `translateX(${deltaX}px) scale(${scaleFactor}) rotate(${rotateAngle}deg)`;
                flashcardElement.style.opacity = opacityFactor;

                if (deltaX > 0) {
                    flashcardElement.classList.add('success-swipe');
                    flashcardElement.classList.remove('error-swipe');
                } else {
                    flashcardElement.classList.add('error-swipe');
                    flashcardElement.classList.remove('success-swipe');
                }
            }

            function endDrag() {
                if (!isDragging) return;
                isDragging = false;

                const deltaX = currentX - startX;
                const swipeThreshold = container.offsetWidth / 3;

                if (isClick) {
                    // If it's a click, reset transformations and do nothing
                    flashcardElement.style.transform = '';
                    flashcardElement.style.opacity = '1';
                    flashcardElement.classList.remove('success-swipe', 'error-swipe');
                } else if (deltaX > swipeThreshold) {
                    flashcardElement.classList.add('swiped-right');
                    // Play swipe sound
                    swipeSound.currentTime = 0;
                    swipeSound.play();
                    setTimeout(() => {
                        if (isAutoplayActive) stopAutoplay();
                        showNextCard();
                    }, 300);
                } else if (deltaX < -swipeThreshold) {
                    flashcardElement.classList.add('swiped-left');
                    // Play swipe sound
                    swipeSound.currentTime = 0;
                    swipeSound.play();
                    setTimeout(() => {
                        if (isAutoplayActive) stopAutoplay();
                        showPrevCard();
                    }, 300);
                } else {
                    flashcardElement.style.transform = '';
                    flashcardElement.style.opacity = '1';
                    flashcardElement.classList.remove('success-swipe', 'error-swipe');
                }

                flashcardElement.classList.remove('swiping');
                document.removeEventListener('mousemove', handleDrag);
                document.removeEventListener('touchmove', handleDrag);
                document.removeEventListener('mouseup', endDrag);
                document.removeEventListener('touchend', endDrag);
            }
        }

        // Create a flashcard element
        function createFlashcard(cardData) {
            const stack = document.querySelector('.flashcard-stack');

            const flashcardElement = document.createElement('div');
            flashcardElement.className = 'flashcard-container-inner';

            // Assign a background class based on the current index
            const bgClass = backgroundClasses[currentIndex % backgroundClasses.length];
            flashcardElement.classList.add(bgClass);

            const flashcardContent = document.createElement('div');
            flashcardContent.className = 'flashcard';

            // Text Overlay
            const textOverlay = document.createElement('div');
            textOverlay.className = 'text-overlay';

            // Front Text with Advanced Gradient Animation
            const frontText = document.createElement('h2');
            frontText.textContent = cardData.front;

            // Reveal Button
            const revealButton = document.createElement('button');
            revealButton.className = 'reveal-button';
            revealButton.textContent = "Reveal";

            // Hidden Text
            const hiddenText = document.createElement('p');
            hiddenText.textContent = cardData.back;
            hiddenText.style.display = 'none';
            revealButton.addEventListener('click', (e) => {
                e.stopPropagation();  // Prevent propagation to parent swipe events
                hiddenText.classList.add('show');
                revealButton.style.display = 'none';
                hiddenText.style.display = 'block';
                // Play reveal sound
                revealSound.currentTime = 0;
                revealSound.play();
            });
			
			 const maxFontSizeQuestion = 24;
    const minFontSizeQuestion = 16;
    const maxFontSizeAnswer = 20;
    const minFontSizeAnswer = 14;

    adjustFontSizeByLength(frontText);
    adjustFontSizeByLength(hiddenText);


            textOverlay.appendChild(frontText);
            textOverlay.appendChild(revealButton);
            textOverlay.appendChild(hiddenText);

            flashcardContent.appendChild(textOverlay);
            flashcardElement.appendChild(flashcardContent);
            stack.appendChild(flashcardElement);

            addSwipeEvents(flashcardElement);
        }

        // Show the next card
        function showNextCard() {
            currentIndex = (currentIndex + 1) % cards.length;
            const currentFlashcard = document.querySelector('.flashcard-container-inner');
            if (currentFlashcard) {
                currentFlashcard.remove();
            }
            createFlashcard(cards[currentIndex]);

            if (isAutoplayActive) {
                resetProgressBar();
                startProgressBar(15);  // Restart progress bar for the new card
            }
        }

        // Show the previous card
        function showPrevCard() {
            currentIndex = (currentIndex - 1 + cards.length) % cards.length;
            const currentFlashcard = document.querySelector('.flashcard-container-inner');
            if (currentFlashcard) {
                currentFlashcard.remove();
            }
            createFlashcard(cards[currentIndex]);

            if (isAutoplayActive) {
                resetProgressBar();
                startProgressBar(15);  // Restart progress bar for the new card
            }
        }

        // Autoplay Control Button Event Listener
        document.getElementById('autoplayControl').addEventListener('click', () => {
            if (isAutoplayActive) {
                stopAutoplay();
            } else {
                startAutoplay();
            }
        });
		
		function adjustFontSizeByLength2(element, maxFontSize, minFontSize) {
    const textLength = element.textContent.length;
    let newFontSize;
  /*
    // Define font size thresholds
    if (textLength <= 20) {
        newFontSize = maxFontSize;
    } else if (textLength <= 40) {
        newFontSize = maxFontSize - 4;
    } else if (textLength <= 60) {
        newFontSize = maxFontSize - 8;
    } else {
        newFontSize = minFontSize;
    }
   */
    element.style.fontSize = newFontSize + 'px';
}


function adjustFontSizeByLength(inputText){
	const textLength = inputText.textContent.length;
const minFontSize = 12;    // Minimum font size (px)
const maxFontSize = 24;    // Maximum font size (px)
const optimalTextLength = 35;  // Text length at which font size starts decreasing noticeably
const maxTextLength = 70;  // Length at which the font size reaches the minimum

// Advanced formula to calculate the font size
let fontSize;

// Case 1: Short text
if (textLength <= optimalTextLength) {
    fontSize = maxFontSize;
} 
// Case 2: Moderately long text, gradual decrease
else if (textLength > optimalTextLength && textLength <= maxTextLength) {
    const decayFactor = (textLength - optimalTextLength) / (maxTextLength - optimalTextLength); // Ratio between optimal and max text length
    fontSize = maxFontSize - (decayFactor * (maxFontSize - minFontSize));
} 
// Case 3: Very long text
else {
    fontSize = minFontSize;
}

 inputText.style.fontSize = fontSize + 'px';

}


window.addEventListener('resize', () => {
    const flashcardElement = document.querySelector('.flashcard-container-inner');
    if (flashcardElement) {
        const frontText = flashcardElement.querySelector('h2');
        const hiddenText = flashcardElement.querySelector('p');
        // Define maximum and minimum font sizes
        const maxFontSizeQuestion = 24;
        const minFontSizeQuestion = 16;
        const maxFontSizeAnswer = 20;
        const minFontSizeAnswer = 14;

        adjustFontSizeByLength(frontText);
        adjustFontSizeByLength(hiddenText);
    }
});

        // Load the first card on page load
		
		


function highlightStars(count) {
    stars.forEach((star, index) => {
        if (index < count) {
            star.classList.add('hovered');
        } else {
            star.classList.remove('hovered');
        }
    });
}

function summary(){

 const seeMoreBtn = document.getElementById('seeMore');
    const zoomOutBtn = document.getElementById('zoomOut');
    const imageContainer = document.getElementById('imageContainer');
    const image = document.getElementById('longImage');
    const loader = document.getElementById('loader');
    const zoomSlider = document.getElementById('zoomRange');

    // Set the initial cropping margin
    let cropMargin = parseInt(zoomSlider.value);

    // Function to apply cropping via JavaScript
    const applyCropping = (cropValue) => {
		var cpk=(100+cropValue)/100;
		console.log(cpk);
		image.style = `transform: scaleX(`+cpk+`) scaleY(`+cpk+`);`
       // image.style.width = `calc(100% + ${2 * cropValue}px)`;
       // image.style.margin = `0 -${cropValue}px`;
        
    };

    // Show loader until the image is fully loaded
    if (image.complete) {
    loader.style.display = 'none'; // Hide the loader
    image.classList.add('loaded'); // Make image visible
    applyCropping(cropMargin); // Apply the initial cropping after the image is loaded
} else {
    image.addEventListener('load', () => {
        loader.style.display = 'none'; // Hide the loader
        image.classList.add('loaded'); // Make image visible
        applyCropping(cropMargin); // Apply the initial cropping after the image is loaded
    });
}


    // Handle the "See More" button click
    seeMoreBtn.addEventListener('click', () => {
        imageContainer.classList.add('expanded'); // Expand the container height
        applyCropping(cropMargin); // Apply cropping to the expanded image
        seeMoreBtn.style.display = 'none'; // Hide the "See More" button
    });

    // Handle the "Collapse" button click to revert the expanded state
    zoomOutBtn.addEventListener('click', () => {
        imageContainer.classList.remove('expanded');
        applyCropping(20); // Reapply cropping 
		zoomSlider.value=20;
	    seeMoreBtn.style.display = 'block'; // Show "See More" button again
		 setTimeout(() => {
            imageContainer.scrollTop = 0; // Scroll to top when collapsed
        }, 300);
    });

    // Handle slider input to dynamically adjust horizontal zoom
    zoomSlider.addEventListener('input', (event) => {
        cropMargin = parseInt(event.target.value); // Update the crop margin
        applyCropping(cropMargin); // Apply the new zoom level
    });
}


	</script>
</body>

</html>