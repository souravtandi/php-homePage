<?php
    $jsonData = file_get_contents('menuData.json');
    $data = json_decode($jsonData);
?>
<div id="jsonData" style="display: none;"><?php echo $jsonData;?></div>
<div style="display: flex;">
    <div class="leftFilterSection" style="display: flex; flex-direction: column;">
        <button onclick="getFilteredData('')">Veg/NonVeg</button>
        <button onclick="getFilteredData('asian')">Get Veg Data</button>
        <button onclick="getFilteredData('mains')">Get Non veg Data</button>
    </div>
    <div id="filteredHtml" class="container"></div>
</div>

    <script>
        let filteredData = [];
        let showVeg = true;
        getFilteredData('');

        function getFilteredData(fil1){
            let jsonData = JSON.parse(document.getElementById("jsonData").innerHTML);
            showVeg = !showVeg;
            if(showVeg){
                filteredData = jsonData['veg'];
            }else{
                filteredData = jsonData['nonVeg'];
            }
            if(fil1 !== ''){
                filteredData = filteredData.filter((data)=>data.packageType===fil1);
            }
            let filteredHtml = '<div class="container">';
            let cardsHtml = '';
            for(let i=0; i<filteredData.length; i++){
                cardsHtml = cardsHtml + 
                `
                <div class="card">
                    <p>ID: ${i+1}</p>
                    <label>Name: ${filteredData[i].name}</label>
                    <img src="http://localhost/html/frontend/homePage${filteredData[i].img}"/>
                    <p>Price: ${filteredData[i].price}</p>
                </div>
                    
                `;
            }

            filteredHtml = cardsHtml + '</div>';
            document.getElementById("filteredHtml").innerHTML = filteredHtml;
        }
    </script>