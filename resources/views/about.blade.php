<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tulip Gardens - About</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background: #f9f9f9;
        }

        nav {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            gap: 3rem;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-size: 1.1rem;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
        }

        nav a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: white;
            transition: width 0.3s ease;
        }

        nav a:hover::after {
            width: 100%;
        }

        .page-header {
            margin-top: 60px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 4rem 2rem;
            text-align: center;
            animation: slideDown 0.8s ease-out;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .page-header h1 {
            font-size: 3rem;
            margin-bottom: 0.5rem;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 2rem;
        }

        .about-section {
            background: white;
            padding: 3rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            margin-bottom: 2rem;
            animation: fadeInUp 0.6s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .about-section h2 {
            color: #667eea;
            font-size: 2rem;
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 0.5rem;
        }

        .about-section h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background: #764ba2;
        }

        .about-section p {
            color: #666;
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 1rem;
        }

        .timeline {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .timeline-item {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            padding: 2rem;
            border-radius: 10px;
            position: relative;
            transition: transform 0.3s ease;
            animation: scaleIn 0.5s ease-out both;
        }

        .timeline-item:nth-child(1) { animation-delay: 0.1s; }
        .timeline-item:nth-child(2) { animation-delay: 0.2s; }
        .timeline-item:nth-child(3) { animation-delay: 0.3s; }

        @keyframes scaleIn {
            from {
                opacity: 0;
                transform: scale(0.8);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .timeline-item:hover {
            transform: translateY(-5px);
        }

        .timeline-item h3 {
            color: #667eea;
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
        }

        .timeline-item .year {
            color: #764ba2;
            font-weight: bold;
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }

        .timeline-item p {
            color: #555;
            font-size: 1rem;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="/home">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>

    <div class="page-header">
        <h1>About Tulip Gardens</h1>
        <p>Our Story, Our Passion</p>
    </div>

    <div class="container">
        <div class="about-section">
            <h2>Our History</h2>
            <p>Tulip Gardens was established with a vision to create a sanctuary where visitors can immerse themselves in the breathtaking beauty of tulips. What started as a small family garden has grown into one of the most spectacular tulip destinations in the region.</p>
            <p>Our journey began with a passion for horticulture and a deep appreciation for the elegance of tulips. Over the years, we have cultivated relationships with growers from around the world, bringing together an extraordinary collection of tulip varieties that bloom in harmony each spring.</p>
        </div>

        <div class="about-section">
            <h2>Our Mission</h2>
            <p>We are dedicated to preserving and celebrating the beauty of tulips while educating visitors about sustainable gardening practices. Our mission is to create memorable experiences that inspire people to connect with nature and appreciate the artistry of botanical cultivation.</p>
            <p>Through our gardens, educational programs, and community events, we strive to foster a deeper understanding of these magnificent flowers and their cultural significance throughout history.</p>
        </div>

        <div class="about-section">
            <h2>Our Journey</h2>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="year">2010</div>
                    <h3>Foundation</h3>
                    <p>Started with a modest collection of 20 tulip varieties on a 2-acre plot, welcoming our first visitors.</p>
                </div>
                <div class="timeline-item">
                    <div class="year">2015</div>
                    <h3>Expansion</h3>
                    <p>Expanded to 10 acres featuring over 100 varieties and introduced guided tours and educational programs.</p>
                </div>
                <div class="timeline-item">
                    <div class="year">2024</div>
                    <h3>Present Day</h3>
                    <p>Now showcasing 150+ varieties across 25 acres, welcoming thousands of visitors annually from around the world.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>