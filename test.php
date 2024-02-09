<!-- test.php -->

<section>
    <h5>FILTER MENUS</h5>
<?php
$jsonData = file_get_contents('menuData.js');

function MenuFilter() {
    global $jsonData;
    $packages = $jsonData;
    $selectedType = 'ninjaBox';
    $showVeg = true;
    $selectedPackageType = '';


    $packagesData = $showVeg ? ($packages['veg'] ?? []) : ($packages['nonVeg'] ?? []);

    $filteredPackages = array_map(function($item) use ($selectedType) {
        return array_merge($item, ['price' => $selectedType === 'ninjaBuffet' ? $item['price'] * 3 + 4002 : $item['price']]);
    }, $packagesData);

    if ($selectedPackageType) {
        $filteredPackages = array_filter($filteredPackages, function($item) use ($selectedPackageType) {
            return $item['packageType'] === $selectedPackageType;
        });
    }

    usort($filteredPackages, function($a, $b) {
        return $a['price'] - $b['price'];
    });

    function setAllFilter() {
        $selectedPackageType = '';
        animateBtn();
        setBgColor("#FFC31A");
    }

    function setStarterFilter() {
        $selectedPackageType = 'starterHeavy';
        animateBtn();
        setBgColor("#C09E41");
    }

    function setMainsFilter() {
        $selectedPackageType = 'mains';
        animateBtn();
        setBgColor("#F54A4D");
    }

    function setNrFilter() {
        $selectedPackageType = 'northIndian';
        animateBtn();
        setBgColor("#14B8B2");
    }

    function setAsianFilter() {
        $selectedPackageType = 'asian';
        animateBtn();
        setBgColor("#FFC28C");
    }

    function setMcFilter() {
        $selectedPackageType = 'multiCusine';
        animateBtn();
        setBgColor("#F07200");
    }

    function ninjaboxType() {
        $selectedType = "ninjaBox";
    }

    function ninjabuffyType() {
        $selectedType = "ninjaBuffet";
    }

    ?>

    <div class="menuBody" id="packages">
        <div class="dropdownContainer">
            <h4>Choice Of Service -</h4>
            <div class="serviceToggle">
                <h6 style="background: <?= $selectedType !== "ninjaBox" ? "white" : "" ?>; color: <?= $selectedType !== "ninjaBox" ? "#A1A1A1" : "" ?>" onclick="ninjaboxType()">Ninja<span style="color: <?= $selectedType !== "ninjaBox" ? "#A1A1A1" : "" ?>">Box</span></h6>
                <h6 style="background: <?= $selectedType === "ninjaBox" ? "white" : "" ?>; color: <?= $selectedType === "ninjaBox" ? "#A1A1A1" : "" ?>" onclick="ninjabuffyType()">Ninja<span style="color: <?= $selectedType === "ninjaBox" ? "#A1A1A1" : "" ?>">Buffy</span></h6>
            </div>
        </div>
        <div class="mainFilterContainer">
            <div class='ms-3'>
                <div class="vegSwitch" style="border: <?= $showVeg == true ? "1px solid #60B044" : "" ?>; background: <?= $showVeg == true ? "#E8FFEA" : "" ?>">
                    <div>
                        <p>Veg Only</p>
                    </div>
                    <div>
                        <label class="switch">
                            <input type="checkbox" checked="<?= $showVeg ?>" onchange="setShowVeg(!<?= $showVeg ?>)" />
                            <span class="slider"></span>
                        </label>
                    </div>
                </div>
                <div class="filterBtns">
                    <button onclick="setAllFilter()" style="color: <?= $selectedPackageType === '' ? "white" : "black" ?>; background: <?= $selectedPackageType === '' ? "#FFC31A" : "white" ?>">All</button>
                    <button onclick="setStarterFilter()" style="color: <?= $selectedPackageType === 'starterHeavy' ? "white" : "black" ?>; background: <?= $selectedPackageType === 'starterHeavy' ? "#C09E41" : "white" ?>">Starter Heavy</button>
                    <button onclick="setMainsFilter()" style="color: <?= $selectedPackageType === 'mains' ? "white" : "black" ?>; background: <?= $selectedPackageType === 'mains' ? "#F54A4D" : "white" ?>">Mains Only</button>
                    <button onclick="setNrFilter()" style="color: <?= $selectedPackageType === 'northIndian' ? "white" : "black" ?>; background: <?= $selectedPackageType === 'northIndian' ? "#14B8B2" : "white" ?>">North Indian</button>
                    <button onclick="setAsianFilter()" style="color: <?= $selectedPackageType === 'asian' ? "white" : "black" ?>; background: <?= $selectedPackageType === 'asian' ? "#FFC28C" : "white" ?>">Asian</button>
                    <button onclick="setMcFilter()" style="color: <?= $selectedPackageType === 'multiCusine' ? "white" : "black" ?>; background: <?= $selectedPackageType === 'multiCusine' ? "#F07200" : "white" ?>">Multi Cuisine</button>
                </div>
            </div>
            <div class="pkgsContainer">
                <div class="cards">
                    <?php var_dump($filteredPackages) ?>
                    <?php foreach ($filteredPackages as $index => $item): ?>
                        <div class="mx-auto text-center">
                            <div class="card">
                                <h4><?= $item['name'] ?></h4>
                                <h5><?= $item['details'] ?></h5>
                                <h3>₹ <?= number_format($item['price']) ?> /-</h3>
                                <h6><?= $selectedType === "ninjaBox" ? "(For 10 Guests)" : "(For 30 Guests)" ?></h6>
                                <div class="smallimgTag">
                                    <img src="<?= $selectedType === "ninjaBox" ? "/ninja-box/packages/nbtag.png" : "/ninja-box/packages/tag2.png" ?>" width="43.289" height="28.859" />
                                </div>
                                <div class="pkgImage">
                                    <img src="<?= $item['img2'] ?>" width="137.436" height="108.223" />
                                </div>
                                <div class="viewButton">
                                    <button>View Details & Customize</button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

<?php } MenuFilter(); ?>
</section>

