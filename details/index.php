<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Quiz Details</title>
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
		
		#autoplayControl{
			padding: 12px 24px;
            background: linear-gradient(45deg, #e81c1c, #31a34f);
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












/* Container Styling */
    #container {
      width: 100%;
      max-width: 900px;
      padding: 20px;
      position: relative; /* For fullscreen positioning */
      transition: transform 0.3s ease-in-out;
    }

    h1 {
      text-align: center;
      margin-bottom: 20px;
      font-size: 1.8rem;
      color: #333;
    }

    /* Video Container Styling */
    .video-container {
      width: 100%;
      position: relative;
      padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
      border-radius: 15px;
      overflow: hidden;
      background: #000;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
      margin-bottom: 20px;
    }

    .video-container iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border: none;
      opacity: 0;
      visibility: hidden;
      transition: opacity 0.5s ease-in-out, visibility 0.5s ease-in-out;
    }

    .video-container iframe.visible {
      opacity: 1;
      visibility: visible;
    }

    /* Play Button Styling */
    .play-button {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background: linear-gradient(135deg, #ff7e5f, #feb47b);
      border: none;
      border-radius: 50%;
      width: 80px;
      height: 80px;
      cursor: pointer;
      transition: transform 0.3s ease, background 0.3s ease, box-shadow 0.3s ease;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .play-button:hover {
      background: linear-gradient(135deg, #ff512f, #dd2476);
      transform: translate(-50%, -50%) scale(1.1);
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.4);
    }

    .play-button i {
      color: #fff;
      font-size: 2rem;
    }

    /* Loading Spinner Styling */
    .spinner {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 50px;
      height: 50px;
      border: 5px solid rgba(255, 255, 255, 0.3);
      border-top: 5px solid #ff512f;
      border-right: 5px solid #dd2476;
      border-radius: 50%;
      animation: spin 1s linear infinite;
      display: none; /* Hidden by default */
    }

    @keyframes spin {
      0% { transform: translate(-50%, -50%) rotate(0deg); }
      100% { transform: translate(-50%, -50%) rotate(360deg); }
    }

    /* Subtitle Container Styling */
    #subtitles {
      margin-top: 20px;
      padding: 15px;
      max-height: 200px;
      overflow-y: auto;
      background: #fff;
      border-radius: 10px;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
      transition: background 0.3s ease-in-out;
      scroll-behavior: smooth;
      position: relative;
    }

    /* Subtitle Styling */
    .subtitle {
      padding: 10px;
      cursor: pointer;
      transition: transform 0.3s ease, background 0.3s ease;
      text-align: center;
      font-size: 1.3rem;
      font-weight: 500;
      background-clip: text;
      color: transparent;
      background-image: linear-gradient(to right, #fd0e0e, #3d3131);
      -webkit-background-clip: text;
      margin-bottom: 5px;
      border-radius: 5px;
    }

    /* Active Subtitle Styling */
    .active {
      font-weight: 600;
      background-image: linear-gradient(to right, #0b29f8, #f80b2e);
      transform: scale(1.05);
      font-size: 1.6rem;
      background-clip: text;
      -webkit-background-clip: text;
      color: transparent;
    }

    /* Highlighted Keyword Styling */
    .highlight-keyword {
      background-color: yellow;
      color: black;
      font-weight: bold;
      border-radius: 3px;
      padding: 2px 4px;
    }

    /* Hover Effect for Subtitles */
    .subtitle:hover {
      transform: scale(1.02);
      background-image: linear-gradient(to right, #0b29f8, #f80b2e);
    }

    /* Controls Styling */
    #controls {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 10px;
      margin-top: 20px;
    }

    .control-button {
      background: linear-gradient(135deg, #6e8efb, #a777e3);
      border: none;
      border-radius: 8px;
      color: #fff;
      padding: 10px 15px;
      font-size: 1rem;
      cursor: pointer;
      display: flex;
      align-items: center;
      transition: background 0.3s, transform 0.2s, box-shadow 0.3s;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      flex: 1 1 150px;
      justify-content: center;
    }

    .control-button:hover {
      background: linear-gradient(135deg, #a777e3, #6e8efb);
      transform: translateY(-2px);
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    }

    .control-button:active {
      transform: translateY(0);
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .control-button i {
      margin-right: 8px;
      font-size: 1.2rem;
    }

    /* Input Elements Styling */
    #controls input[type="range"],
    #controls select,
    #controls input[type="text"],
    #controls input[type="color"] {
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 1rem;
      flex: 1 1 150px;
    }

    #controls label {
      display: flex;
      align-items: center;
      gap: 8px;
      flex: 1 1 150px;
    }

    /* Search Input Styling */
    #searchInput {
      width: 100%;
      padding: 8px 12px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 1rem;
    }

    /* Navigation Buttons for Search Results */
    .search-navigation {
      position: absolute;
      top: 50%;
      width: 100%;
      display: flex;
      justify-content: space-between;
      transform: translateY(-50%);
      padding: 0 10px;
      pointer-events: none; /* Allow clicks to pass through if not visible */
    }

    .search-navigation button {
      background: rgba(0, 0, 0, 0.5);
      border: none;
      border-radius: 50%;
      color: #fff;
      width: 40px;
      height: 40px;
      cursor: pointer;
      pointer-events: auto; /* Enable clicks */
      display: flex;
      justify-content: center;
      align-items: center;
      transition: background 0.3s, transform 0.2s;
    }

    .search-navigation button:hover {
      background: rgba(0, 0, 0, 0.7);
      transform: scale(1.1);
    }

    .search-navigation button:disabled {
      background: rgba(0, 0, 0, 0.3);
      cursor: not-allowed;
      transform: scale(1);
    }

    /* No Match Message Styling */
    .no-match {
      text-align: center;
      font-size: 1.1rem;
      color: #ff0000;
      padding: 10px;
    }

    /* Fullscreen Styles */
    .fullscreen {
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      background: #000;
      z-index: 1000;
      display: flex;
      flex-direction: column;
      padding: 20px;
      overflow: hidden;
    }

    .fullscreen .video-container {
      padding-bottom: 56.25%; /* Maintain aspect ratio */
      flex: 1 1 auto;
    }

    .fullscreen #subtitles {
      max-height: 30%; /* Adjust as needed */
      overflow-y: auto;
    }

    /* Fullscreen Button Styling */
    .fullscreen-button {
      background: linear-gradient(135deg, #6e8efb, #a777e3);
      border: none;
      border-radius: 8px;
      color: #fff;
      padding: 8px 12px;
      font-size: 1rem;
      cursor: pointer;
      display: flex;
      align-items: center;
      transition: background 0.3s, transform 0.2s, box-shadow 0.3s;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      position: absolute;
      top: 20px;
      right: 20px;
      z-index: 1001;
    }

    .fullscreen-button:hover {
      background: linear-gradient(135deg, #a777e3, #6e8efb);
      transform: translateY(-2px);
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    }

    .fullscreen-button:active {
      transform: translateY(0);
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .fullscreen-button i {
      margin-right: 5px;
      font-size: 1.2rem;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      h1 {
        font-size: 1.5rem;
      }

      .control-button {
        flex: 1 1 100%;
      }

      #controls label,
      .extra-controls label {
        flex: 1 1 100%;
      }

      .search-navigation button {
        width: 35px;
        height: 35px;
      }

      /* Adjust fullscreen max-height for subtitles on smaller screens */
      .fullscreen #subtitles {
        max-height: 40%;
      }
    }

    @media (max-width: 480px) {
      .play-button {
        width: 60px;
        height: 60px;
      }

      .play-button i {
        font-size: 1.5rem;
      }

      .control-button {
        padding: 8px 12px;
        font-size: 0.9rem;
      }

      #controls input[type="range"],
      #controls select,
      #controls input[type="text"],
      #controls input[type="color"] {
        flex: 1 1 100%;
      }

      .subtitle {
        font-size: 0.9rem;
        padding: 8px;
      }

      .active {
        font-size: 1rem;
      }

      /* Adjust fullscreen max-height for subtitles on very small screens */
      .fullscreen #subtitles {
        max-height: 50%;
      }

      /* Adjust fullscreen button size on small screens */
      .fullscreen-button {
        padding: 6px 10px;
        font-size: 0.9rem;
      }

      .fullscreen-button i {
        font-size: 1rem;
      }
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
                                <a href="../explore"><i class="feather-user"></i>Explore Quizzes</a>
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
                            <li class="rbt-breadcrumb-item"><a href="#">Home</a></li>
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
                                    <a id="quiz3" class="rbt-btn btn-border icon-hover w-100 d-block text-center" href="#">
                                        <span class="btn-text">Take the Quiz</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </a>
                                </div>
								<br><br>
                   

                        <ul class="rbt-meta">
                            <li id="updq"><i class="feather-calendar"></i></li>
                            <li><i class="feather-globe"></i>English</li>
                            <li><i class="feather-award"></i>Certified Quiz</li>
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
                                        <a href="#coursecontent">Quiz Topics</a>
                                    </li>
                                    <li class="current">
                                        <a href="#overview">Notes</a>
                                    </li>
                                    
                                    
                                    <li>
                                        <a href="#review">Review</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
						
						  <div class="course-content rbt-shadow-box coursecontent-wrapper mt--30" id="coursecontent">
                            <div class="rbt-course-feature-inner">
                                <div class="section-title">
                                    <h4 class="rbt-title-style-3">Topics covered in the Quiz</h4>
                                </div>
                                <div class="rbt-accordion-style rbt-accordion-02 accordion">
                                    <div class="accordion" id="topicss">

                                    </div>
                                </div>
                            </div>
                        </div>
						
						
									
						<audio id="revealSound" src="../pop.m4a" preload="auto"></audio>
    <audio id="swipeSound" src="../flip.mp3" preload="auto"></audio>
<div id="flashc" style="display:none;" >
    <h4 id="tin" >FlashCards</h4><hr/>
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
	<div style="text-align: center;">
    <button id="autoplayControl">Start Autoplay</button>
   </div>
    <!-- Autoplay Control Button -->
    
	
</div>  

                        <!-- Start Course Feature Box  -->
                        <div class="rbt-course-feature-box overview-wrapper rbt-shadow-box mt--30 " id="overview">
						    <h4 id="tin" >Read the Notes before taking the quiz</h4><hr/>
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
                                    <h4 class="rbt-title-style-3">Review</h4>
                                </div>
                                <div class="row g-5 align-items-center">
                                    <div class="col-lg-3">
                                        <div class="rating-box">
                                            <div id="ratenum" class="rating-number"></div>
                                            <div id="mrating" class="rating">
                                               
                                            </div>
                                            <span class="sub-title">Quiz Rating</span>
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
                                <h4 class="rbt-title-style-3">Reviews by quiz takers</h4>
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
                                    <a id="quiz1" class="rbt-btn btn-gradient icon-hover w-100 d-block text-center" href="#">
                                        <span class="btn-text">Take the Quiz</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </a>
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
                                                class="feather-phone mr--5"></i> Call Us: <a href="#"><strong>+251 989285318</strong></a></p>
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
                        <h5 class="title mb--0">Are you ready to take the Quiz now?</h5>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mt_sm--15">
                    <div class="course-action-bottom-right rbt-single-group">
                        <div class="rbt-single-list rbt-price large-size justify-content-center">
                        </div>
                        <div class="rbt-single-list action-btn">
                            <a id="quiz2" class="rbt-btn btn-gradient hover-icon-reverse btn-md" href="#">
                                <span class="icon-reverse-wrapper">
                                <span class="btn-text">Take the Quiz</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </a>
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
	
	<script>
	
	
		
		var token = localStorage.getItem('jwtToken');
 const quizId = getQueryParameter('id');
 

 
 
async function fetchQuizQuestions() {
    // Get the quiz_id from the URL query parameters
   

    // Check if quiz_id is available
    if (!quizId) {
        console.error('Quiz ID not found in the URL');
		window.location.replace("../explore/");
        return;
    }
	
	document.getElementById('quiz1').href="../quiz/?id="+quizId;
	document.getElementById('quiz2').href="../quiz/?id="+quizId;
	document.getElementById('quiz3').href="../quiz/?id="+quizId;

    try {
        // Fetch quiz questions using the quiz_id
        const response = await fetch(`../api/?action=getQuizQuestions&quiz_id=${quizId}`, {
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
        const data = await response.json();

        
           
            quizData=data.questions;
			lod(data);
       
    } catch (error) {
        // Input is not valid JSON
		if(error.toString().includes("quizid")){
			window.location.href = "../explore"; 
		}
			
		else{
        // Redirect after 5 seconds
        setTimeout(function() {
            //window.location.href = "../payment"; // Replace with the desired URL
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

function lod(dat){
	document.title=dat.title+" quiz";
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
		document.getElementById('summaryimg').innerHTML=`<br><br>
						<br><br><div class="image-viewer" >
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
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo1" aria-expanded="true" aria-controls="collapseTwo1">
                                                  &nbsp;&nbsp; ${dat.topics[j]} 
                                                </button>
                                            </h2>
                                        </div>`;
	}
	
	document.getElementById('topicss').innerHTML=tops;
	
	if(dat.hasOwnProperty("subtitles")){
		subtitles=dat.subtitles;
		displaySubtitles();
	}
	
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
			
			document.getElementById('updq').innerHTML="Quiz Created in "+fgc.created_at;
			document.getElementById('qstr').innerHTML=fgc.num_questions+" Questions";
			document.getElementById('cats').innerHTML=document.getElementById('cats').innerHTML+fgc.category;
			document.getElementById('cat2').innerHTML=fgc.category;
			document.getElementById('timestr').innerHTML='<i class="feather-clock"></i> '+time+' minutes';
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
                                        this quiz</span>
                                </div>`;
								
								
								document.getElementById('fr1').innerHTML =`
					 <div id="container">
  <br><br><hr/>
    <!-- Embed YouTube Video -->
    <div class="video-container">
      <div class="spinner"></div>
      <iframe 
        id="video" 
        src="https://www.youtube.com/embed/${fgc.youtubeid}/?enablejsapi=1&rel=0&showinfo=0&controls=0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen>
      </iframe>
      <button class="play-button" id="play-btn">
        <i class="fas fa-play"></i>
      </button>
      
      <!-- Search Navigation Buttons -->
      <div class="search-navigation" id="searchNavigation" style="display: none;">
        <button id="prevMatchBtn" aria-label="Previous Match"><i class="fas fa-chevron-left"></i></button>
        <button id="nextMatchBtn" aria-label="Next Match"><i class="fas fa-chevron-right"></i></button>
      </div>
    </div>
    
    <!-- Subtitles Container -->
    <div id="subtitles"></div>

    <!-- Fullscreen Button -->
    <button class="fullscreen-button" id="fullscreenBtn">
      <i class="fas fa-expand"></i> Fullscreen
    </button>

    <!-- Video Controls -->
    <div id="controls">
      <!-- Play/Pause Button -->
      <button class="control-button" id="playPauseBtn">
        <i class="fas fa-play"></i> Play
      </button>
      
     
      <!-- Mute/Unmute Button -->
      <button class="control-button" onclick="ytControls.toggleMute()">
        <i class="fas fa-volume-up"></i> Mute
      </button>
	  
	  
      <!-- Volume Control -->
      
	  
	   
      <!-- Playback Speed Control -->
      <label for="playbackSpeed">
        <i class="fas fa-tachometer-alt"></i>
        <select id="playbackSpeed" onchange="ytControls.setPlaybackSpeed(this.value)">
          <option value="0.5">0.5x</option>
          <option value="1" selected>1x</option>
          <option value="1.5">1.5x</option>
          <option value="2">2x</option>
        </select>
      </label>
	  
	  <label for="volumeControl">
        <i class="fas fa-volume-down"></i>
        <input id="volumeControl" type="range" min="0" max="100" value="100" onchange="ytControls.setVolume(this.value)" />
      </label>
	  
	  
	 <div style="display: none;">
	 
	 <!-- Search Subtitles Input -->
     
      <input type="text" id="searchInput" placeholder="Search subtitles..." oninput="ytControls.searchSubtitles()">
      
      
      <!-- Download Subtitles Button -->
      <button class="control-button" onclick="downloadSubtitles()">
        <i class="fas fa-download"></i> Download
      </button>
      
      
      
      <!-- Speak Current Subtitle Button -->
      <button class="control-button" onclick="speakCurrentSubtitle()">
        <i class="fas fa-volume-up"></i> Speak
      </button>
	  
	   <!-- Toggle Subtitles Button -->
      <button class="control-button" onclick="toggleSubtitles()">
        <i class="fas fa-closed-captioning"></i> Subtitles
      </button>
      
      
      <!-- Upload Subtitles Button -->
      <button class="control-button" onclick="uploadSubtitles()">
        <i class="fas fa-upload"></i> Upload
      </button>
      
      <!-- Translate Subtitles Dropdown -->
      <select id="translateLanguage" onchange="translateSubtitles(this.value)">
        <option value="">Translate Subtitles</option>
        <option value="es">Spanish</option>
        <option value="fr">French</option>
        <option value="de">German</option>
      </select>
      
      <!-- Subtitle Color Picker -->
      <label for="subtitleColor">
        <i class="fas fa-paint-brush"></i>
        <input type="color" id="subtitleColor" value="#000000" onchange="setSubtitleColor(this.value)">
      </label>
      
      <!-- Subtitle Size Control -->
      <label for="subtitleSize">
        <i class="fas fa-text-height"></i>
        <input type="range" id="subtitleSize" min="10" max="30" value="14" onchange="setSubtitleSize(this.value)">
      </label>
    </div>

    <!-- Hidden File Input for Uploading Subtitles -->
    <input type="file" id="uploadFile" accept=".srt" onchange="handleFileUpload(event)" style="display: none;">
	
	</div>

  </div>
					
					`; 
								
								document.getElementById('mimg').src=fgc.img;
								document.getElementById('tin').innerHTML="Watch the video above before taking the quiz";
								setTimeout(function(){
								loadyt(); },1000);
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
                    commentsListElement.innerHTML = '<div class="no-comments">No comments available for this quiz.</div>';
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
       
            
			
			
			
			
			
			
			
			
			
			
let player;	
let isPlaying = false;	
var subtitles = [];	
let ytControls = {}; 
			
			
			
function loadyt(){			
			
			
			
const playPauseBtn = document.getElementById('playPauseBtn');
    const playButton = document.getElementById('play-btn');
    const videoIframe = document.getElementById('video');
    const spinner = document.querySelector('.spinner');
    const uploadFileInput = document.getElementById('uploadFile');
    const searchInput = document.getElementById('searchInput');
    const searchNavigation = document.getElementById('searchNavigation');
    const prevMatchBtn = document.getElementById('prevMatchBtn');
    const nextMatchBtn = document.getElementById('nextMatchBtn');
    const fullscreenBtn = document.getElementById('fullscreenBtn');
    

    // Load YouTube iframe API
    var tag = document.createElement('script');
    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    var intervalId;

    

    window.onYouTubeIframeAPIReady = function () {
        player = new YT.Player('video', {
            events: {
                'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
            }
        });
    };

    function onPlayerReady(event) {
      displaySubtitles();
      updateSubtitleHighlight();
      
      // Play Button Click Event
      playButton.addEventListener('click', function () {
        // Hide the play button and show the spinner
        playButton.style.display = 'none';
        spinner.style.display = 'block';

        // Play video after a short delay
        setTimeout(() => {
          videoIframe.classList.add('visible');
          player.playVideo();
          spinner.style.display = 'none';
          isPlaying = true;
          updatePlayPauseButton();
        }, 500); // Simulating loading time
      });
    }

    function onPlayerStateChange(event) {
      if (event.data == YT.PlayerState.PLAYING) {
        isPlaying = true;
      } else {
        isPlaying = false;
      }
      updatePlayPauseButton();
      
      if (event.data == YT.PlayerState.PLAYING) {
        updateSubtitleHighlight();
      } else if (event.data == YT.PlayerState.PAUSED || event.data == YT.PlayerState.ENDED) {
        clearInterval(intervalId);
      }
    }

    // Play/Pause Button Functionality
    playPauseBtn.addEventListener('click', function () {
      if (isPlaying) {
        player.pauseVideo();
      } else {
        player.playVideo();
      }
      // The state will be updated in onPlayerStateChange
    });

    function updatePlayPauseButton() {
      const icon = playPauseBtn.querySelector('i');
      if (isPlaying) {
        playPauseBtn.innerHTML = '<i class="fas fa-pause"></i> Pause';
      } else {
        playPauseBtn.innerHTML = '<i class="fas fa-play"></i> Play';
      }
    }

    // Initial button state
    updatePlayPauseButton();

    // Display and update subtitles
    function displaySubtitles() {
      const subtitleContainer = document.getElementById('subtitles');
      subtitleContainer.innerHTML = '';
      subtitles.forEach((subtitle, index) => {
        const subtitleElement = document.createElement('div');
        subtitleElement.classList.add('subtitle');
        subtitleElement.setAttribute('data-start', subtitle.start);
        subtitleElement.innerHTML = escapeHtml(subtitle.text);
        subtitleElement.addEventListener('click', () => {
          player.seekTo(subtitle.start);
        });
        subtitleContainer.appendChild(subtitleElement);
      });
    }

    // Escape HTML to prevent XSS
    function escapeHtml(text) {
      const map = {
        '&': '&amp;',
        '<': '&lt;',
        '>': '&gt;',
        '"': '&quot;',
        "'": '&#039;'
      };
      return text.replace(/[&<>"']/g, function(m) { return map[m]; });
    }

    // Highlight the current subtitle and center it in the container
    function updateSubtitleHighlight() {
      // Ensure any previous interval is cleared to avoid multiple intervals running
      clearInterval(intervalId);

      // Set an interval to continuously check the video time and update subtitles
      intervalId = setInterval(() => {
        const currentTime = player.getCurrentTime();
        const subtitleContainer = document.getElementById('subtitles');
        
        subtitles.forEach((subtitle, index) => {
          const subtitleElements = document.getElementsByClassName('subtitle');
          const element = subtitleElements[index];
          element.classList.remove('active');
		  
          if (currentTime >= subtitle.start && currentTime <= subtitle.end) {
            element.classList.add('active');
            
            // Center the active subtitle vertically in the container
            const containerHeight = subtitleContainer.clientHeight;
            const elementHeight = element.clientHeight;
            const elementOffsetTop = element.offsetTop;

            // Calculate scroll position to center the element
            subtitleContainer.scrollTop = elementOffsetTop - (containerHeight / 2) + (elementHeight / 2);

          } else {
            element.classList.remove('active');
          }
        });
      }, 500); // Adjust the interval if needed for smoother updates
    }

    // Set volume and mute/unmute
    function setVolume(volume) {
      player.setVolume(volume);
    }

    function toggleMute() {
      if (player.isMuted()) {
        player.unMute();
      } else {
        player.mute();
      }
    }

    // Change playback speed
    function setPlaybackSpeed(speed) {
      player.setPlaybackRate(parseFloat(speed));
    }

    // Search subtitles
    let searchResults = [];
    let currentSearchIndex = 0;
    let debounceTimeout;

    function searchSubtitles() {
      clearTimeout(debounceTimeout);
      debounceTimeout = setTimeout(() => {
        const query = searchInput.value.trim().toLowerCase();
        const subtitleElements = document.getElementsByClassName('subtitle');
        searchResults = [];
        currentSearchIndex = 0;
        console.log(subtitles);
        // Remove existing highlights and active classes
        for (let i = 0; i < subtitleElements.length; i++) {
          const text = subtitles[i].text;
          subtitleElements[i].innerHTML = escapeHtml(text);
          subtitleElements[i].classList.remove('active');
        }

        if (query === "") {
          searchNavigation.style.display = 'none';
          return;
        }

        // Find matching subtitles
        for (let i = 0; i < subtitles.length; i++) {
          if (subtitles[i].text.toLowerCase().includes(query)) {
            searchResults.push(i);
          }
        }

        const subtitleContainer = document.getElementById('subtitles');
        subtitleContainer.innerHTML = '';

        if (searchResults.length === 0) {
          subtitleContainer.innerHTML = '<div class="no-match">No match found.</div>';
          searchNavigation.style.display = 'none';
          return;
        }

        // Highlight matches and display the first match
        highlightAndDisplaySearchResult(currentSearchIndex, query);

        if (searchResults.length > 1) {
          searchNavigation.style.display = 'flex';
          updateSearchNavigationButtons();
        } else {
          searchNavigation.style.display = 'none';
        }
      }, 300); // Debounce delay of 300ms
    }

    function highlightAndDisplaySearchResult(index, query) {
      if (index < 0 || index >= searchResults.length) {
        console.error('Invalid search index:', index);
        return;
      }

      const matchedIndex = searchResults[index];
      const subtitleElements = document.getElementsByClassName('subtitle');
      
      if (matchedIndex >= subtitleElements.length) {
        console.error('Matched index is out of bounds:', matchedIndex);
        return;
      }

      const subtitleElement = subtitleElements[matchedIndex];
      if (!subtitleElement) {
        console.error('Subtitle element not found for index:', matchedIndex);
        return;
      }

      const text = subtitles[matchedIndex].text;
      const regex = new RegExp(`(${escapeRegExp(query)})`, 'gi');
      const highlightedText = escapeHtml(text).replace(regex, '<span class="highlight-keyword">$1</span>');
      subtitleElement.innerHTML = highlightedText;

      // Scroll to the matched subtitle
      const subtitleContainer = document.getElementById('subtitles');
      const containerHeight = subtitleContainer.clientHeight;
      const elementHeight = subtitleElement.clientHeight;
      const elementOffsetTop = subtitleElement.offsetTop;

      subtitleContainer.scrollTop = elementOffsetTop - (containerHeight / 2) + (elementHeight / 2);

      // Highlight the subtitle element itself
      subtitleElement.classList.add('active');
    }

    function updateSearchNavigationButtons() {
      prevMatchBtn.disabled = currentSearchIndex === 0;
      nextMatchBtn.disabled = currentSearchIndex === searchResults.length - 1;
    }

    // Handle Next Match
    nextMatchBtn.addEventListener('click', function() {
      if (currentSearchIndex < searchResults.length - 1) {
        // Remove highlight from current
        const currentIndex = searchResults[currentSearchIndex];
        const currentElement = document.getElementsByClassName('subtitle')[currentIndex];
        currentElement.classList.remove('active');
        currentElement.innerHTML = escapeHtml(subtitles[currentIndex].text);

        currentSearchIndex++;
        const query = searchInput.value.trim().toLowerCase();
        highlightAndDisplaySearchResult(currentSearchIndex, query);
        updateSearchNavigationButtons();
      }
    });

    // Handle Previous Match
    prevMatchBtn.addEventListener('click', function() {
      if (currentSearchIndex > 0) {
        // Remove highlight from current
        const currentIndex = searchResults[currentSearchIndex];
        const currentElement = document.getElementsByClassName('subtitle')[currentIndex];
        currentElement.classList.remove('active');
        currentElement.innerHTML = escapeHtml(subtitles[currentIndex].text);

        currentSearchIndex--;
        const query = searchInput.value.trim().toLowerCase();
        highlightAndDisplaySearchResult(currentSearchIndex, query);
        updateSearchNavigationButtons();
      }
    });

    // Helper function to escape RegExp special characters
    function escapeRegExp(string) {
      return string.replace(/[.*+?^${}()|[\]\\]/g, '\\$&');
    }

    // Subtitle customization
    function setSubtitleColor(color) {
      document.getElementById('subtitles').style.color = color;
    }

    function setSubtitleSize(size) {
      document.getElementById('subtitles').style.fontSize = `${size}px`;
    }

    // Download subtitles as .srt file
    function downloadSubtitles() {
      let srtContent = "";
      subtitles.forEach((subtitle, index) => {
        const start = formatTime(subtitle.start);
        const end = formatTime(subtitle.end);
        srtContent += `${index + 1}\n${start} --> ${end}\n${subtitle.text}\n\n`;
      });

      const blob = new Blob([srtContent], { type: 'text/plain' });
      const url = URL.createObjectURL(blob);
      const link = document.createElement('a');
      link.href = url;
      link.download = 'subtitles.srt';
      link.click();
    }

    // Format time for .srt (e.g., 00:00:01,000)
    function formatTime(seconds) {
      const date = new Date(seconds * 1000);
      const hours = date.getUTCHours().toString().padStart(2, '0');
      const minutes = date.getUTCMinutes().toString().padStart(2, '0');
      const secs = date.getUTCSeconds().toString().padStart(2, '0');
      const millis = date.getUTCMilliseconds().toString().padStart(3, '0');
      return `${hours}:${minutes}:${secs},${millis}`;
    }

    // Text-to-Speech for current subtitle
    function speakCurrentSubtitle() {
      const currentTime = player.getCurrentTime();
      const currentSubtitle = subtitles.find(subtitle => currentTime >= subtitle.start && currentTime <= subtitle.end);
      if (currentSubtitle) {
        const speech = new SpeechSynthesisUtterance(currentSubtitle.text);
        speech.lang = 'en-US';
        window.speechSynthesis.speak(speech);
      }
    }

    // Upload custom subtitles
    function uploadSubtitles() {
      uploadFileInput.click();
    }

    // Handle subtitle file upload
    function handleFileUpload(event) {
      const file = event.target.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
          const contents = e.target.result;
          subtitles = parseSrt(contents);
          displaySubtitles();
        };
        reader.readAsText(file);
      }
    }

    // Parse .srt file content
    function parseSrt(srt) {
      const srtArray = srt.split('\n\n');  // Split the SRT file into blocks
      const jsonOutput = [];

      srtArray.forEach(block => {
          const lines = block.split('\n');  // Split each block into lines
          if (lines.length >= 3) {  // Check if the block has at least 3 lines (index, time, and text)
              const timeString = lines[1];
              const text = lines.slice(2).join(' ');  // Combine text lines

              const timeParts = timeString.split(' --> ');
              if (timeParts.length !== 2) {
                console.warn('Invalid time format in SRT:', timeString);
                return; // Skip invalid blocks
              }
              const startTime = convertToSeconds(timeParts[0].trim());
              const endTime = convertToSeconds(timeParts[1].trim());

              jsonOutput.push({
                  start: startTime,
                  end: endTime,
                  text: text.trim()
              });
          }
      });

      return jsonOutput;
    }

    // Helper function to convert "HH:MM:SS,MS" to seconds
    function convertToSeconds(timeString) {
      const parts = timeString.split(':');
      if (parts.length !== 3) {
        console.warn('Invalid time format:', timeString);
        return 0;
      }
      const hours = parseInt(parts[0], 10);
      const minutes = parseInt(parts[1], 10);
      const secondsParts = parts[2].split(',');
      if (secondsParts.length !== 2) {
        console.warn('Invalid seconds format:', parts[2]);
        return hours * 3600 + minutes * 60;
      }
      const seconds = parseInt(secondsParts[0], 10);
      const milliseconds = parseInt(secondsParts[1], 10);

      return hours * 3600 + minutes * 60 + seconds + milliseconds / 1000;
    }

    // Subtitle translation (dummy function)
    function translateSubtitles(language) {
      alert('Translation feature coming soon!');
      // You can use an API like Google Translate to translate subtitle texts here
    }
	
	
	
	function toggleFullscreen() {
    const iframe = document.getElementById('video');
    if (iframe.requestFullscreen) {
        iframe.requestFullscreen();
    } else if (iframe.mozRequestFullScreen) { // Firefox
        iframe.mozRequestFullScreen();
    } else if (iframe.webkitRequestFullscreen) { // Chrome, Safari and Opera
        iframe.webkitRequestFullscreen();
    } else if (iframe.msRequestFullscreen) { // IE/Edge
        iframe.msRequestFullscreen();
    }
}

    // Sample subtitles data
  

    // Fullscreen Functionality
    fullscreenBtn.addEventListener('click', function() {
      const container = document.getElementById('container');
	  toggleFullscreen();
      if (!document.fullscreenElement) {
        container.requestFullscreen().catch(err => {
          alert(`Error attempting to enable full-screen mode: ${err.message} (${err.name})`);
        });
      } else {
        document.exitFullscreen();
      }
    });

    // Listen for fullscreen change to update button icon and text
    document.addEventListener('fullscreenchange', () => {
      const container = document.getElementById('container');
      if (document.fullscreenElement) {
        fullscreenBtn.innerHTML = '<i class="fas fa-compress"></i> Exit Fullscreen';
        container.classList.add('fullscreen');
		container.style.backgroundColor = "lightblue";
      } else {
        fullscreenBtn.innerHTML = '<i class="fas fa-expand"></i> Fullscreen';
        container.classList.remove('fullscreen');
		container.style.backgroundColor = "";
      }
    });
	
  ytControls.setVolume = setVolume;
  ytControls.toggleMute = toggleMute;
  ytControls.setSubtitleColor = setSubtitleColor;
  ytControls.setSubtitleSize = setSubtitleSize;
  ytControls.searchSubtitles = searchSubtitles;
  ytControls.setPlaybackSpeed = setPlaybackSpeed;
	
	
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