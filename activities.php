<?php include 'includes/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sectors</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <style>
        main {
            padding: 20px;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 15px;
        }

        .gallery-item {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        .gallery-item:hover {
            transform: scale(1.05);
        }

        .gallery-item img {
            width: 100%;
            height: 200px; /* Fixed height for uniformity */
            object-fit: cover; /* Ensures images cover the space without distortion */
            display: block;
        }

        .description {
            padding: 15px;
        }

        .description h2 {
            font-size: 1.5rem; /* Uniform heading size */
            margin: 0 0 0.5rem 0; /* Remove extra margin */
            text-align: center; /* Center align headings */
        }

        .description p {
            font-size: 0.9rem;
            line-height: 1.5;
            text-align: justify; /* Justify text for better readability */
        }

        .container {
            max-width: 1200px; /* Max width for container */
            margin: 0 auto; /* Center the container */
            padding: 0 15px; /* Add padding */
        }
        .description p {
    margin-bottom: 10px; /* Add space between paragraph and bullet points */
        }
    </style>
</head>
<body>
<main>
    <div class="container my-5">
        <h2>Sectors</h2>
        <p>
        TDP is a community development organization, have fully involved its efforts for the achievement for the basic rights for the common peoples. Its efforts are directed to provide basic amenities of life to the common people living in the remote areas and san basic necessities of life. 
TDP working boundaries were embarrassed to very limited areas and target groups in its initial phase. As time passed on the, scope of working increased with leaps and bounds, and so increased its target groups. At the instant TDP is one of the wellrecognized organizations working in development sector aiming & addressing the issues of common people in multi sector Spheres and facilitating people in the restoration of their livelihood, economic development, quality health and education facilities, access to pure drinking water, human and institutional development, environmental mitigation and coping the disasters. The women emancipation and vocational development sector has ushered as platform for women development having highly prolific program for the women. 

        </p>
    </div>
    <section class="gallery">
        <div class="gallery-item">
        <a href="health.php" style="text-decoration:none">
            <img src="assets/images/activites/activity1.jpg" alt="Activity 1">
            <div class="description">
                <h2>Health</h2>
                <p>Female the majorities of our population is amongst the deprived & neglected sector in our rural areas & are exposed to coercions & atrocities... 
</p>
            </div>
            </a>
        </div>

        <div class="gallery-item">
        <a href="humanrights.php" style="text-decoration:none">
            <img src="assets/images/activites/activity3.jpg" alt="Activity 2">
            <div class="description">
                <h2>THE HUMAN RIGHTS & WOMEN EMANCIPATION SECTOR</h2>
                <p>TDP champions human rights and human values as the core agenda of the vision & mission of the organization. Keeping in view the importance of the issue....,</p> 
            </div>
        </a>
        </div>

        <div class="gallery-item">
        <a href="socialdevelopment.php" style="text-decoration:none">
            <img src="assets/images/activites/activity4.png" alt="Activity 3">
            <div class="description">
                <h2>THE SOCIAL DEVELOPMENT SECTOR (SDS)</h2>
                <p>The social development sector is commonly known as SDS, is broadly doing the work community mobilization among the rural people far away from the initiative.... </p>
            </div>
        </a>
        </div>

        <div class="gallery-item">
        <a href="disastermanagement.php" style="text-decoration:none">
            <img src="assets/images/activites/disaster.jpg" alt="Activity 4">
            <div class="description">
                <h2>DISASTER MANAGEMENT SECTOR (DMS)</h2>
                <p>TDP has established the above sector to work on natural resources & adopt coping measures to face emergencies including Floods, monsoon, and tremors....</p>
            </div>
        </a>
        </div>

        <div class="gallery-item">
        <a href="community.php" style="text-decoration:none">
            <img src="assets/images/activites/community.png" alt="Activity 5">
            <div class="description">
                <h2>THE COMMUNITY PHYSICAL INFRASTRUCTURE SECTOR (CPI)</h2>
                <p>Developed picture of community physical infra-structure is one of the prominent indicators of the socio economic prosperity of any community...</p>
            </div>
        </a>
        </div>

        <div class="gallery-item">
        <a href="emergency.php" style="text-decoration:none">
            <img src="assets/images/activites/emergency.jpg" alt="Activity 6">
            <div class="description">
                <h2>EMERGENCY RESPONSE</h2>
                <p>Millions of families in Pakistan are vulnerable to the climate crisis and many have already suffered repeated extreme weather events this year...</p>
            </div>
        </a>
        </div>

        <div class="gallery-item">
        <a href="poverty.php" style="text-decoration:none">
            <img src="assets/images/activites/poverty.png" alt="Activity 7">
            <div class="description">
                <h2>POVERTY ALLEVIATION SECTOR (PAS)</h2>
                <p>Rampant poverty, lack on income generation sources & unemployment has brought sense of deprivation among the youth in SINDH province...</p>
            </div>
        </a>
        </div>
        </
    </section>
</main>
</body>
</html>

<?php include 'includes/footer.php'; ?>
