<!-- index.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caterninja.com</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="styles/mnavbar.css?<?php echo time(); ?>" />
    <link rel="stylesheet" type="text/css" href="styles/hero.css?<?php echo time(); ?>" />
    <link rel="stylesheet" type="text/css" href="styles/service.css?<?php echo time(); ?>" />
    <link rel="stylesheet" type="text/css" href="styles/pkgFilter.css?<?php echo time(); ?>" />
    <link rel="stylesheet" type="text/css" href="styles/createYourOwn.css?<?php echo time(); ?>" />
    <link rel="stylesheet" type="text/css" href="styles/testimonials.css?<?php echo time(); ?>" />
    <link rel="stylesheet" type="text/css" href="styles/ourPromise.css?<?php echo time(); ?>" />
    <link rel="stylesheet" type="text/css" href="styles/news.css?<?php echo time(); ?>" />
    <link rel="stylesheet" type="text/css" href="styles/categories.css?<?php echo time(); ?>" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
</head>
<body>
    <header>
        <?php include 'navbarMobile.php'; ?>
    </header>
    
    <main>
        <?php include 'hero.php'; ?>
        <?php include 'ourServices.php'; ?>
        <?php include 'pkgFilter.php'; ?>
        <?php include 'createYourOwn.php'; ?>
        <?php include 'testimonials.php'; ?>
        <?php include 'ourPromise.php'; ?>
        <?php include 'news.php'; ?>
        <?php include 'categories.php'; ?>
    </main>

    <footer>
        <!-- Footer content -->
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- <script src="jquery.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        autoplay: true,
        autoplayTimeout: 3000, 
        autoplayHoverPause: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:3
            }
        }
    })
    </script>
    <script>
    $(document).ready(function(){
        var owl = $('.owl-carousel');
        owl.owlCarousel();

        $('.customNextBtn').click(function() {
            owl.trigger('next.owl.carousel');
        });

        $('.customPrevBtn').click(function() {
            owl.trigger('prev.owl.carousel', [300]);
        });
    });
</script>
</body>
</html>
