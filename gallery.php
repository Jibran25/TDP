<?php include 'includes/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gallery</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 15px;
        }

        .gallery-item img {
            width: 100%;
            height: auto;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
            cursor: pointer;
        }

        .gallery-item img:hover {
            transform: scale(1.05);
        }

        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.8);
        }

        .modal-content {
            margin: 15% auto;
            display: block;
            max-width: 700px;
        }

        .close {
            position: absolute;
            top: 20px;
            right: 35px;
            color: white;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
        }
    </style>
</head>
<body>

<div class="container my-5">
    <h2 style="text-align:center">Gallery</h2>
    <div class="gallery">
        <div class="gallery-item">
            <img src="assets/images/gallery/image.jpeg" alt="Gallery Image 1" onclick="openModal(this.src)">
        </div>
        <div class="gallery-item">
            <img src="assets/images/gallery/image2.jpeg" alt="Gallery Image 2" onclick="openModal(this.src)">
        </div>
        <div class="gallery-item">
            <img src="assets/images/gallery/image3.jpeg" alt="Gallery Image 3" onclick="openModal(this.src)">
        </div>
        <div class="gallery-item">
            <img src="assets/images/gallery/image4.jpeg" alt="Gallery Image 4" onclick="openModal(this.src)">
        </div>
        <div class="gallery-item">
            <img src="assets/images/gallery/image5.jpeg" alt="Gallery Image 5" onclick="openModal(this.src)">
        </div>
        <div class="gallery-item">
            <img src="assets/images/gallery/image6.jpeg" alt="Gallery Image 6" onclick="openModal(this.src)">
        </div>
        <div class="gallery-item">
            <img src="assets/images/gallery/image7.jpeg" alt="Gallery Image 7" onclick="openModal(this.src)">
        </div>
        <div class="gallery-item">
            <img src="assets/images/gallery/image8.jpeg" alt="Gallery Image 8" onclick="openModal(this.src)">
        </div>
        <div class="gallery-item">
            <img src="assets/images/gallery/image9.jpeg" alt="Gallery Image 9" onclick="openModal(this.src)">
        </div>
        <div class="gallery-item">
            <img src="assets/images/gallery/image10.jpeg" alt="Gallery Image 10" onclick="openModal(this.src)">
        </div>
        <div class="gallery-item">
            <img src="assets/images/gallery/image11.jpeg" alt="Gallery Image 11" onclick="openModal(this.src)">
        </div>
        <div class="gallery-item">
            <img src="assets/images/gallery/image12.jpeg" alt="Gallery Image 12" onclick="openModal(this.src)">
        </div>
        <div class="gallery-item">
            <img src="assets/images/gallery/image13.jpeg" alt="Gallery Image 13" onclick="openModal(this.src)">
        </div>
        <div class="gallery-item">
            <img src="assets/images/gallery/image14.jpeg" alt="Gallery Image 14" onclick="openModal(this.src)">
        </div>
        <div class="gallery-item">
            <img src="assets/images/gallery/image15.jpeg" alt="Gallery Image 15" onclick="openModal(this.src)">
        </div>
        <div class="gallery-item">
            <img src="assets/images/gallery/image16.jpeg" alt="Gallery Image 16" onclick="openModal(this.src)">
        </div>
        <div class="gallery-item">
            <img src="assets/images/gallery/image17.jpeg" alt="Gallery Image 17" onclick="openModal(this.src)">
        </div>
        <div class="gallery-item">
            <img src="assets/images/gallery/image18.jpeg" alt="Gallery Image 18" onclick="openModal(this.src)">
        </div>
        <div class="gallery-item">
            <img src="assets/images/gallery/image19.jpeg" alt="Gallery Image 19" onclick="openModal(this.src)">
        </div>
        <div class="gallery-item">
            <img src="assets/images/gallery/image20.jpeg" alt="Gallery Image 20" onclick="openModal(this.src)">
        </div>
    </div>
</div>

<!-- Modal -->
<div id="myModal" class="modal">
    <span class="close" onclick="closeModal()">&times;</span>
    <img class="modal-content" id="modalImage" alt="">
</div>

<script>
    function openModal(src) {
        document.getElementById("modalImage").src = src;
        document.getElementById("myModal").style.display = "block";
    }

    function closeModal() {
        document.getElementById("myModal").style.display = "none";
    }

    // Close modal when clicking outside the image
    window.onclick = function(event) {
        const modal = document.getElementById("myModal");
        if (event.target === modal) {
            closeModal();
        }
    }
</script>

<?php include 'includes/footer.php'; ?>
</body>
</html>
