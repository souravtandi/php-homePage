<!-- news.php -->

<section class="newsBody">
        <div class="newsHeader py-3">
            <hr />
            <h3>Cater<span>Ninja</span> In News</h3>
            <hr />
        </div>
        <div class="container" id="slider-container">
            <div id="slider">

            </div>
        </div>
    <script>
        const News_Data = [
            {
                "image": "https://master--loquacious-eclair-9e40c1.netlify.app/home/news/news_1.png"
            },
            {
                "image": "https://master--loquacious-eclair-9e40c1.netlify.app/home/news/news_2.png"
            },
            {
                "image": "https://master--loquacious-eclair-9e40c1.netlify.app/home/news/news_3.png"
            },
            {
                "image": "https://master--loquacious-eclair-9e40c1.netlify.app/home/news/news_4.png"
            },
            {
                "image": "https://master--loquacious-eclair-9e40c1.netlify.app/home/news/news_5.png"
            },
            {
                "image": "https://master--loquacious-eclair-9e40c1.netlify.app/home/news/news_6.png"
            },
            {
                "image": "https://master--loquacious-eclair-9e40c1.netlify.app/home/news/news_7.png"
            }
        ];

        function generateImageHTML(imageData) {
            return `<img src="${imageData.image}" alt="News Image">`;
        }

        const sliderContainer = document.getElementById('slider');

        const imageHTML = News_Data.map(imageData => generateImageHTML(imageData)).join('');

        sliderContainer.innerHTML = imageHTML;
    </script>
</section>