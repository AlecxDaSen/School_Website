<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/hrccbadgeicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/gallery.css">
    <title>Gallery | HRCC</title>
</head>

<style>
    .transition-fade {
    opacity: 0;
    }

    img.show {
    opacity: 1 !important;
    }

    .nav-arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    font-size: 2rem;
    color: #fff;
    padding: 10px;
    border-radius: 50%;
    cursor: pointer;
    z-index: 1051;
    }

    .nav-left {
    left: 20px;
    }

    .nav-right {
    right: 20px;
    }

</style>

<body style="background-image: url('images/redBackground.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center;background-color: #eff2f1;">
    <?php include("loadingScreen.php"); ?>
    <?php include("header.php"); ?>
    <div class="col-12">
        <div class="col-12">

            <!-- Gallery -->
            <div class="scrollblock container fade-in2">
                <div class="container-fluid pt-10">
                    <div class="row justify-content-md-center ">
                    <div class="col-md-10 col-sm-12">
                        <div class="card-columns" style="margin-top: 100px; margin-bottom: 25px;">

                            <div class="card card-hover h-100" >
                                <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-image="images/gallery1.jpg">
                                    <img src="images/gallery1.jpg" class="gallery-img img-fluid" data-caption="Image 1" alt="Gallery Image" />

                                </a>
                            </div>
                            
                            <div class="card card-hover h-100" >
                               
                                <a href="index.html">
                                    <img src="images/gallery2.jpg" class="gallery-img img-fluid" data-caption="Image 2" alt="Gallery Image" />
                                  
                                </a>
                              
                            </div>
                            <div class="card card-hover h-100">
                               
                                <a href="index.html">
                                    <img src="images/gallery4.jpg" class="gallery-img img-fluid" data-caption="Image 4" alt="Gallery Image" />
                                   
                                </a>
                                
                            </div>
                            <div class="card card-hover h-100">
                               
                                <a href="index.html">
                                    <img src="images/gallery5.jpg" class="gallery-img img-fluid" data-caption="Image 5" alt="Gallery Image" />
                                  
                                </a>
                             
                            </div>
                            <div class="card card-hover h-100">
                               
                                <a href="index.html">
                                    <img src="images/gallery6.jpg" class="gallery-img img-fluid" data-caption="Image 2" alt="Gallery Image" />
                                    
                                </a>
                              
                            </div>
                            <div class="card card-hover h-100">
                             
                                <a href="index.html">
                                    <img src="images/gallery7.jpg" class="gallery-img img-fluid" data-caption="Image 2" alt="Gallery Image" />

                                </a>
                              
                            </div>
                            <div class="card card-hover h-100">
                                
                                <a href="index.html">
                                    <img src="images/1111.jpg" class="gallery-img img-fluid" data-caption="Image 2" alt="Gallery Image" />
          
                                </a>
                                
                            </div>
                            <div class="card card-hover h-100">
                              
                                <a href="index.html">
                                    <img src="images/3332.jpg" class="gallery-img img-fluid" data-caption="Image 2" alt="Gallery Image" />
                                   
                                </a>
                             
                            </div>
                            <div class="card card-hover h-100">
                               
                                <a href="index.html">
                                    <img src="images/cadets.png" class="gallery-img img-fluid" data-caption="Image 2" alt="Gallery Image" />

                                </a>
                              
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <!-- End Gallery -->
        
        </div>

    </div>



    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" >
    Launch static backdrop modal
    </button> -->


    <!-- Image Preview Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content bg-dark text-white position-relative">

        <div class="modal-header border-0">
            <button type="button" class="btn btn-sm btn-light me-2" id="downloadBtn" title="Download">
            <i class="bi bi-download"></i>
            </button>
            <button type="button" class="btn btn-sm btn-light me-2" id="fullscreenBtn" title="Fullscreen">
            <i class="bi bi-arrows-fullscreen"></i>
            </button>
            <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body text-center position-relative">
            <i class="bi bi-chevron-left nav-arrow nav-left" id="prevImage"></i>
            <i class="bi bi-chevron-right nav-arrow nav-right" id="nextImage"></i>

            <img src="" id="modalImage" class="img-fluid rounded transition-fade" alt="Preview" style="max-height: 75vh; transition: opacity 0.5s ease;" />
            <div class="modal-caption mt-2" id="modalCaption"></div>
        </div>
        </div>
    </div>
    </div>




    <?php include("footer.php"); ?>


    <script>
        const imageElements = document.querySelectorAll('.gallery-img');
        const images = Array.from(imageElements).map(img => ({
            file: img.getAttribute('src'),
            caption: img.getAttribute('data-caption') || ''
        }));

        let currentIndex = 0;

        const modal = new bootstrap.Modal(document.getElementById('imageModal'));
        const modalImage = document.getElementById('modalImage');
        const modalCaption = document.getElementById('modalCaption');
        const downloadBtn = document.getElementById('downloadBtn');
        const fullscreenBtn = document.getElementById('fullscreenBtn');

        function showImage(index) {
            currentIndex = index;
            const newSrc = images[index].file;

            modalImage.classList.remove('show');
            setTimeout(() => {
            modalImage.src = newSrc;
            modalCaption.textContent = images[index].caption;
            modalImage.onload = () => {
                modalImage.classList.add('show');
            };
            }, 150);

            // Set download attributes
            downloadBtn.setAttribute('href', newSrc);
            downloadBtn.setAttribute('download', newSrc.split('/').pop());
        }

        imageElements.forEach((img, i) => {
            img.addEventListener('click', () => {
            showImage(i);
            modal.show();
            });
        });

        document.getElementById('prevImage').addEventListener('click', () => {
            showImage((currentIndex - 1 + images.length) % images.length);
        });

        document.getElementById('nextImage').addEventListener('click', () => {
            showImage((currentIndex + 1) % images.length);
        });

        downloadBtn.addEventListener('click', e => {
            e.stopPropagation(); // prevent modal close
        });

        fullscreenBtn.addEventListener('click', () => {
            if (!document.fullscreenElement) {
            modalImage.requestFullscreen().catch(err => alert("Fullscreen failed"));
            } else {
            document.exitFullscreen();
            }
        });
    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.10.2/lottie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
</body>

</html>
