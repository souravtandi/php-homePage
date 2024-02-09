<!-- content.php -->

<section>
<div class="ourServicesBody">
    <div class="ourServiceMenuContainer">
        <div class="ourServiceHeader">
            <hr />
            <h3>Our Services</h3>
            <hr />
        </div>
        <div class="serviceFilterButtonContainer">
            <button class="all-button active" onclick="filterGallery('all');">All</button>
            <button class="do-button" onclick="filterGallery('do');">Delivery Only</button>
            <button class="wss-button" onclick="filterGallery('wss');">With Service & Setup</button>
        </div>
    </div>
    <div class="allServicesContainer">
        <div class="serviceCard" id="do">
            <div class="card">
                <div class="imgSection">
                    <h4>Bulk Food Specialist</h4>
                    <div>
                        <img id="backImg" src='https://master--loquacious-eclair-9e40c1.netlify.app/newHome/Group.svg' />
                    </div>
                    <div>
                        <img id="nbox" src='https://master--loquacious-eclair-9e40c1.netlify.app/newHome/ninjaBox.png' />
                    </div>
                </div>
                <div class="serviceDetails">
                    <img src='https://master--loquacious-eclair-9e40c1.netlify.app/CaterNinja%20logo/caterninja.webp' />
                    <h3 id="ninjabox">Ninja<span>Box</span></h3>
                    <div>
                        <h6>✅ <span>No Mess in Kitchen</span></h6>
                        <h6>✅ <span>No Cleaning Required</span></h6>
                        <h6>✅ <span>Includes</span> 🍃<span> Disposables</span></h6>
                    </div>
                    <h6 id="guestCount"><i class="fa-solid fa-users"></i> For <span>10+</span> Guests</h6>
                    <div>
                        <a href="/ninjabox"><button>See Packages</button></a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="imgSection">
                    <h4>Office Friendly</h4>
                    <div>
                        <img id="backImg" src='https://master--loquacious-eclair-9e40c1.netlify.app/newHome/Group.svg' />
                    </div>
                    <div>
                        <img id="mealboxImg" src='https://master--loquacious-eclair-9e40c1.netlify.app/newHome/mealbox.png' />
                    </div>
                </div>
                <div class="serviceDetails">
                    <img src='https://master--loquacious-eclair-9e40c1.netlify.app/CaterNinja%20logo/caterninja.webp' />
                    <h3 id="mealBox">Meal<span>Box</span></h3>
                    <div>
                        <h6>✅ <span>Huge Variety Of Menu</span></h6>
                        <h6>✅ <span>Unique Packeging</span></h6>
                        <h6>✅ <span>Hassle Free Catering</span></h6>
                        <h6>✅ <span>Disposable cutlery</span></h6>
                    </div>
                    <h6 id="guestCount"><i class="fa-solid fa-users"></i> For <span>15+</span> Guests</h6>
                    <div>
                        <a href="/mealbox"><button>See Packages</button></a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="imgSection">
                    <h4>Office Friendly</h4>
                    <div>
                        <img id="backImg" src='https://master--loquacious-eclair-9e40c1.netlify.app/newHome/Group.svg' />
                    </div>
                    <div>
                        <img id="snackboxImg" src='https://master--loquacious-eclair-9e40c1.netlify.app/newHome/snackbox.png' />
                    </div>
                </div>
                <div class="serviceDetails">
                    <img src='https://master--loquacious-eclair-9e40c1.netlify.app/CaterNinja%20logo/caterninja.webp' />
                    <h3 id="snackboxTitle">Snack<span>Box</span></h3>
                    <div>
                        <h6>✅ <span>No Cleaning Hassle</span></h6>
                        <h6>✅ <span>Doorstep delivery</span></h6>
                        <h6>✅ <span>Hot and Delicious Food</span></h6>
                        <h6>✅ <span>Huge variety menu</span></h6>
                    </div>
                    <h6 id="guestCount"><i class="fa-solid fa-users"></i> For <span>20+</span> Guests</h6>
                    <div>
                        <a href="/snackbox"><button>See Packages</button></a>
                    </div>
                </div>
            </div>
            <!-- Other service cards go here -->
        </div>
        <div class="serviceCard" id="wss">
            <div class="card">
                <div class="imgSection">
                    <h4>Next Gen Catering</h4>
                    <div>
                        <img id="backImg" src='https://master--loquacious-eclair-9e40c1.netlify.app/newHome/Group.svg' />
                    </div>
                    <div>
                        <img id="nbuffy" src='https://master--loquacious-eclair-9e40c1.netlify.app/newHome/nbuffy.png' />
                    </div>
                </div>
                <div class="serviceDetails">
                    <img src='https://master--loquacious-eclair-9e40c1.netlify.app/CaterNinja%20logo/caterninja.webp' />
                    <h3 id="buffyTitle">Ninja<span>Buffet</span></h3>
                    <div>
                        <h6>✅ <span>1-2 Trained Captains</span></h6>
                        <h6>✅ <span>Quick Setup - Clean up</span></h6>
                        <h6>✅ <span>Hassle Free Catering</span></h6>
                        <h6>✅ <span>Hot and Delicious Food</span></h6>
                    </div>
                    <h6 id="guestCount"><i class="fa-solid fa-users"></i> For <span>10+</span> Guests</h6>
                    <div>
                        <a href="/ninjabox"><button>See Packages</button></a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="imgSection">
                    <h4>Full Service Catering</h4>
                    <div>
                        <img id="backImg" src='https://master--loquacious-eclair-9e40c1.netlify.app/newHome/Group.svg' />
                    </div>
                    <div>
                        <img id="classicTitle" src='https://master--loquacious-eclair-9e40c1.netlify.app/newHome/classic.png' />
                    </div>
                </div>
                <div class="serviceDetails">
                    <img src='https://master--loquacious-eclair-9e40c1.netlify.app/CaterNinja%20logo/caterninja.webp' />
                    <h3 id="classicTitle">Ninja<span>Classic</span></h3>
                    <div>
                        <h6>✅ <span>1-2 Trained Captains</span></h6>
                        <h6>✅ <span>Quick Setup - Clean up</span></h6>
                        <h6>✅ <span>Hassle Free Catering</span></h6>
                        <h6>✅ <span>Hot and Delicious Food</span></h6>
                    </div>
                    <h6 id="guestCount"><i class="fa-solid fa-users"></i> For <span>50+</span> Guests</h6>
                    <div>
                        <a href="/ninjabox"><button>See Packages</button></a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="imgSection">
                    <h4>Premium Menu</h4>
                    <div>
                        <img id="backImg" src='https://master--loquacious-eclair-9e40c1.netlify.app/newHome/Group.svg' />
                    </div>
                    <div>
                        <img id="gourmetImg" src='https://master--loquacious-eclair-9e40c1.netlify.app/newHome/ngourmet.png' />
                    </div>
                </div>
                <div class="serviceDetails">
                    <img src='https://master--loquacious-eclair-9e40c1.netlify.app/CaterNinja%20logo/caterninja.webp' />
                    <h3 id="gourmetTitle">Ninja<span>Gourmet</span></h3>
                    <div>
                        <h6>✅ <span>1-2 Trained Captains</span></h6>
                        <h6>✅ <span>Quick Setup - Clean up</span></h6>
                        <h6>✅ <span>Hassle Free Catering</span></h6>
                        <h6>✅ <span>Hot and Delicious Food</span></h6>
                    </div>
                    <h6 id="guestCount"><i class="fa-solid fa-users"></i> For <span>50+</span> Guests</h6>
                    <div>
                        <a href="/ninjabox"><button>See Packages</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shadowBar"></div>
</div>
<?php
?>
</section>

<script>
    function filterGallery(data){
        if(data==='all'){
            $('#do').show();
            $('#wss').show();
            $('.all-button').addClass('active');
            $('.do-button').removeClass('active');
            $('.wss-button').removeClass('active');
        }
        if(data==='do'){
            $('#do').show();
            $('#wss').hide();
            $('.do-button').addClass('active');
            $('.wss-button').removeClass('active');
            $('.all-button').removeClass('active');
        }
        if(data==='wss'){
            $('#do').hide();
            $('#wss').show();
            $('.do-button').removeClass('active');
            $('.wss-button').addClass('active');
            $('.all-button').removeClass('active');
        }
    }
</script>
