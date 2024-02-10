<!-- pkgFilter.php -->

<section>
<div class="menuBody" id="packages">
    <div class="menuTitle">
        <h3>MENU THAT ALWAYS MAKES YOU</h3>
        <div class="menuTitleTwo">
            <hr />
            <h3>FALL IN LOVE</h3>
            <hr />
        </div>
    </div>
    <div class="dropdownContainer">
        <h4>Choice Of Service -</h4>
        <select>
            <option value="ninjaBox">NinjaBox (Self Service - Mini Buffet)</option>
            <option value="ninjaBuffet">NinjaBuffet (Setup + Service)</option>
        </select>
    </div>
    <div class="mainFilterContainer">
        <div class='ms-3'>
            <div class="vegSwitch">
                <div>
                    <p>Veg Only</p>
                </div>
                <div>
                    <label class="switch">
                        <input type="checkbox" checked="<?php echo $showVeg ? 'checked' : ''; ?>" onChange="toggleVeg();" />
                        <span class="slider"></span>
                    </label>
                </div>
            </div>
            <div class="filterBtns">
                <button>All</button>
                <button>Starter Heavy</button>
                <button>Mains Only</button>
                <button>North Indian</button>
                <button>Asian</button>
                <button>Multi Cuisine</button>
            </div>
        </div>
        <div class="pkgsContainer">
            <div class="cards">
                <div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel">
                    <div class="owl-carousel owl-theme">
                    <?php
                    // Read the JSON file
                    $jsonData = file_get_contents('packages.json');

                    // Decode the JSON data into a PHP array
                    $packages = json_decode($jsonData, true);

                    // Define a function to generate HTML for each package
                    function generatePackageHTML($package) {
                        return '
                        <div class="item">
                        <div class="FilterPkgcard mt-3">
                            <h4>'.$package['name'].'</h4>
                            <h5>'.$package['description'].'</h5>
                            <h3>'.$package['price'].'</h3>
                            <h6>'.$package['guests'].'</h6>
                            <div class="smallimgTag">
                                <img src="'.$package['imgTagSrc'].'" width="43.289" height="28.859" />
                            </div>
                            <div class="pkgImage">
                                <img src="'.$package['pkgImgSrc'].'" width="137.436" height="108.223" />
                            </div>
                            <div class="viewButton">
                                <button>View Details & Customize</button>
                            </div>
                        </div>
                        </div>
                        ';
                    }

                    // Initialize an empty array to store generated HTML for each package
                    $carouselItems = array();

                    // Iterate over each package and generate HTML dynamically
                    foreach ($packages['packages'] as $package) {
                        // Generate HTML for each package and add it to the $carouselItems array
                        $carouselItems[] = generatePackageHTML($package);
                    }

                    // Implode the generated carousel items to create the final HTML
                    echo implode("\n", $carouselItems);
                    ?>
                    </div>
                </div>
            </div>
            <div class="visitPageContainer">
                <h6>Visit Page <FontAwesomeIcon icon="<?php echo $faArrowUpRightFromSquare; ?>" /></h6>
                <div class="leftRigthBtn">
                    <button><i class="fa-solid fa-angle-left"></i></button>
                    <button style="color: white; background: #FFC31A;"><i class="fa-solid fa-angle-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>

    <?php
    // PHP logic for dynamic content generation
    ?>
</section>
