
<body>
<div>
<img id="slider" src="images/wellness-yoga1280.jpg"/>
<script>
var imgArray = [
	"images/wellness-yoga1280.jpg",
	"images/acu1280.jpg",
	"images/mass1280.jpg",
	"images/well1280.jpg", 
	"images/reiki1280.jpg", 
	"images/chiro1280.jpg", 
	"images/cranio1280.jpg",
	"images/spa-herbs1280.jpg",
	],
    curIndex = 0;
    imgDuration = 6000;

function slideShow() {
    document.getElementById('slider').className += "fadeOut";
    setTimeout(function() {
        document.getElementById('slider').src = imgArray[curIndex];
        document.getElementById('slider').className = "";
    },1200);
    curIndex++;
    if (curIndex == imgArray.length) { curIndex = 0; }
    setTimeout(slideShow, imgDuration);
}
slideShow();
</script>

<div id="search">
	<form action="" method="post">                
    <p> 
		<label>Find natural relief near you. <br> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp What is your pain type?</label>
		<br>
        <input id="symptoms" name="Symptoms" placeholder="i.e. back pain, migraines or any other condition(s)" type="text" size="80">
        <input id="submit" value=" Submit" type="">    
   </p>                
   </form>
</div>
			<div id="front-text">
				<h3>Over a third of people in the United States use Complementary and Alternative Medicine for wellness or relief from chronic pain (including many traditional medical professionals) - why not find your relief today?</h3>
			</div>
</div>

</body>
