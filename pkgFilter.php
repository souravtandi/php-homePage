<!-- pkgFilter.php -->
<?php
    $jsonData = file_get_contents('menuData.json');
    $data = json_decode($jsonData);
?>
<div id="jsonData" style="display: none;"><?php echo $jsonData;?></div>

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
        <select id="ninjaType" onchange="changeByNinjaType()">
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
                        <input type="checkbox" checked="<?php echo $showVeg ? 'checked' : ''; ?>" onchange="toggleVegNonVeg()" />
                        <span class="slider"></span>
                    </label>
                </div>
            </div>
            <div class="filterBtns">
                <button id="all" class="pktdummy" onclick="getFilteredData('all')">All</button>
                <button id="starterHeavy" class="pktdummy" onclick="getFilteredData('starterHeavy')">Starter Heavy</button>
                <button id="mains" class="pktdummy" onclick="getFilteredData('mains')">Mains Only</button>
                <button id="northIndian" class="pktdummy" onclick="getFilteredData('northIndian')">North Indian</button>
                <button id="asian" class="pktdummy" onclick="getFilteredData('asian')">Asian</button>
                <button id="multiCusine" class="pktdummy" onclick="getFilteredData('multiCusine')">Multi Cuisine</button>
            </div>
        </div>
        <div class="pkgsContainer">
                <div id="filteredHtmlOnLoad" class="owl-carousel owl-theme">
                </div>
                <div id="filteredHtmlNoLoad" class="owl-carousel owl-theme">
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
?>
</section>
<script>
    let filteredData = [];

    let filteredPackages = [];
    let showVeg = true;
    let packageType = '';
    let jsonData = JSON.parse(document.getElementById("jsonData").innerHTML);
    getFilteredData('all', jsonData);

    function changeByNinjaType(){
       let ninjaType = document.getElementById("ninjaType").value;
       jsonData = JSON.parse(document.getElementById("jsonData").innerHTML);

       let packagesData = filteredPackages.map(item => ({
            ...item,
            price: ninjaType === 'ninjaBuffet' ? item.price * 3 + 4002 : item.price,
        }));
       getFilteredData(packageType, packagesData);
    }

    function toggleVegNonVeg(){
        showVeg = !showVeg;
        getFilteredData(packageType, jsonData);
    }
    function getFilteredData(fil1, jsonData){
        if(!jsonData){
            jsonData = JSON.parse(document.getElementById("jsonData").innerHTML);
        }
        let collection = document.getElementsByClassName("pktdummy");
        for(let j=0; j<collection.length; j++){
            collection[j].classList.remove("packageTypeActive");
            document.getElementById(fil1).classList.add('packageTypeActive');
        }

        const packagesData = showVeg
        ? (jsonData?.veg || []).filter(item => item).sort((a, b) => a.price - b.price)
        : (jsonData?.nonVeg || []).filter(item => item).sort((a, b) => a.price - b.price);

        if(fil1 === '' || fil1 === 'all'){
            let filteredHtml = '';
            let cardsHtml = getCardsHtml(packagesData);
            filteredHtml = cardsHtml + '';
            console.log(filteredHtml);
            document.getElementById("filteredHtmlOnLoad").innerHTML = filteredHtml;
        }else if(fil1 !== '' && fil1 !== 'all'){
            packageType = fil1;
            filteredPackages = packagesData
            .filter(item => (fil1 ? item.packageType === fil1 : true))
            .sort((a, b) => a.price - b.price);
            let cardsHtml = getCardsHtml(filteredPackages);
            console.log(cardsHtml);
            document.getElementById("filteredHtmlOnLoad").innerHTML = cardsHtml + '';
        }
    }

    function getCardsHtml(filteredPackages){
        let cardsHtml = '';
            for(let i=0; i<filteredPackages.length; i++){
                cardsHtml = cardsHtml + 
                `
                        <div class="item">
                            <div class="flterPkgcard mt-3">
                                <h4>${filteredPackages[i].name}</h4>
                                <h5>${filteredPackages[i].description}</h5>
                                <h3>${filteredPackages[i].price}</h3>
                                <h6>${filteredPackages[i].img}</h6>
                                <div class="smallimgTag">
                                    <img src="" width="43.289" height="28.859" />
                                </div>
                                <div class="pkgImage">
                                    <img src="" width="137.436" height="108.223" />
                                </div>
                                <div class="viewButton">
                                    <button>View Details & Customize</button>
                                </div>
                        </div>
                    </div>
                
                `;
            }
            return cardsHtml;
    }
</script>
