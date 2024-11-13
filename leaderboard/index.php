<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tibeb Leaderboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(120deg, #e0c3fc 0%, #f9a8d4 25%, #fbc2eb 50%, #a6c1ee 75%, #8ec5fc 100%);
            font-family: 'Roboto', sans-serif;
            color: #333;
        }

        .leaderboard-container {
            max-width: 900px;
            margin: 2rem auto;
            background: #fff;
            border-radius: 15px;
            box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.2);
            padding: 2rem;
            transition: transform 0.3s ease-in-out;
            animation: slide-in 0.6s ease-out;
        }

        @keyframes slide-in {
            from {
                transform: translateY(50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .leaderboard-title {
            text-align: center;
            margin-bottom: 1.5rem;
            font-size: 2.2rem;
            color: #333;
            letter-spacing: 1px;
            position: relative;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .leaderboard-title::after {
            content: '';
            display: block;
            width: 60px;
            height: 4px;
            background: #fda085;
            margin: 0.5rem auto;
            border-radius: 10px;
        }

        .rank-card {
            display: flex;
            align-items: center;
            padding: 0.75rem 1rem;
            margin-bottom: 0.5rem;
            background: #f8f9fa;
            border-radius: 10px;
            transition: transform 0.2s ease-in-out, background 0.3s ease;
            cursor: pointer;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .rank-card:hover {
            background: #e9ecef;
            transform: translateY(-5px);
        }

        .rank-card.special {
            background: #ffd700; /* Gold for top 1 */
            color: #333;
            animation: pulse 1.5s infinite;
        }

        .rank-card.special:nth-child(2) {
            background: #c0c0c0; /* Silver */
            animation: pulse 2s infinite;
        }

        .rank-card.special:nth-child(3) {
            background: #cd7f32; /* Bronze */
            animation: pulse 2.5s infinite;
        }

        .rank-card.highlight {
            background: #b2f5ea;
            color: #055c5c;
            border: 2px solid #38b2ac;
            animation: bounce 1.5s ease-in-out infinite;
        }

        .rank {
            width: 60px;
            text-align: center;
            font-weight: bold;
            font-size: 1.3rem;
            transition: font-size 0.3s;
        }

        .username {
            flex: 1;
            font-size: 1.1rem;
            font-weight: bold;
        }

        .points {
            font-weight: bold;
            font-size: 1rem;
            background: #38b2ac;
            color: white;
            padding: 0.3rem 0.7rem;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .points:hover {
            background: #2c7a7b;
        }

        .time-until-reset {
            margin: 1.5rem 0;
            font-weight: bold;
            text-align: center;
            color: #555;
            background: #ffecd1;
            padding: 0.75rem;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .history-section {
            margin-top: 2rem;
        }

        .history-card {
            background: #e9ecef;
            padding: 0.75rem;
            border-radius: 5px;
            margin-bottom: 0.5rem;
            transition: background 0.3s ease, transform 0.3s ease;
            cursor: pointer;
            box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
        }

        .history-card:hover {
            background: #d1d5db;
            transform: translateY(-3px);
        }

        @keyframes pulse {
            0%, 100% {
                box-shadow: 0 0 15px rgba(255, 215, 0, 0.5);
            }
            50% {
                box-shadow: 0 0 30px rgba(255, 215, 0, 1);
            }
        }

        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        @media (max-width: 768px) {
            .leaderboard-container {
                padding: 1rem;
                margin: 1rem;
            }

            .rank-card {
                align-items: center;
                padding: 1rem;
            }

            .rank {
                width: auto;
                font-size: 1.2rem;
            }

            .username {
				flex: 1;
                font-size: 1rem;
            }

            .points {
                font-size: 0.9rem;
                padding: 0.3rem 0.5rem;
            }

            .time-until-reset {
                font-size: 0.9rem;
                padding: 0.5rem;
            }

            .leaderboard-title {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>
    <div class="leaderboard-container">
        <h2 class="leaderboard-title">🏆 Leaderboard</h2>
        <div id="leaderboard-list"></div>
        <div class="time-until-reset" id="time-until-reset"></div>
        <div id="user-ranking" class="text-center mt-4"></div>
        <div class="history-section">
            <h4>📅 Previous Leaderboard History</h4>
            <div id="leaderboard-history"></div>
        </div>
    </div>

    <script>
        var token = localStorage.getItem('jwtToken');
		fetch('../api/?action=getLeaderboard',{
    method: 'GET',
    headers: {
        'Authorization': `Bearer ${token}`
    }
}) // Replace with your actual endpoint
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
                    const leaderboardList = document.getElementById('leaderboard-list');
                    const timeUntilReset = document.getElementById('time-until-reset');
                    const userRanking = document.getElementById('user-ranking');
                    const leaderboardHistory = document.getElementById('leaderboard-history');

                    // Populate the leaderboard
                    data.leaderboard.forEach((user, index) => {
                        const rankCard = document.createElement('div');
                        rankCard.className = 'rank-card';

                        if (index < 3) rankCard.classList.add('special');
                        if (user.username === data.user_rank.username) rankCard.classList.add('highlight');

                        rankCard.innerHTML = `
                            <div class="rank">#${index + 1}</div>
                            <div class="username">&nbsp;&nbsp;&nbsp;${user.username}</div>
                            <div class="points">${user.total_points} pts</div>
                        `;
                        leaderboardList.appendChild(rankCard);
                    });

                    // Show time until next reset
                    timeUntilReset.textContent = `Time until next reset: ${data.time_until_reset}`;

                    // Show logged-in user's rank and points
                    if (data.user_rank) {
                        userRanking.innerHTML = `
                            <p>Your Rank: <strong>${data.user_rank.rank}</strong></p>
                            <p>Your Points: <strong>${data.user_rank.points}</strong> pts</p>
                        `;
                    }

                    // Populate leaderboard history
                    data.history.forEach(historyItem => {
                        const historyCard = document.createElement('div');
                        historyCard.className = 'history-card';
                        historyCard.innerHTML = `
                            <p><strong>${historyItem.date_range}</strong></p>
                            <p>Top User: ${historyItem.top_user} - ${historyItem.top_points} pts</p>
                        `;
                        leaderboardHistory.appendChild(historyCard);
                    });
                })
                .catch(error => console.error('Error fetching leaderboard data:', error));
       
    </script>
</body>
</html>
