<html>
<head>
<title>Bond Web Service Demo</title>
<style>
body {font-family:georgia;}

  .film{
    border:1px solid #E77DC2;
    border-radius: 5px;
    padding: 5px;
    margin-bottom:5px;
    position:relative;   
  }
 
  .pic{
    position:absolute;
    right:10px;
    top:10px;
  }


   </style>
<script src="https://code.jquery.com/jquery-latest.js" type="text/javascript"></script>

<script type="text/javascript">

function bondTemplate(film){
  return `<div class="film">
  <b>Film: </b> ${film.Film}<br />
  <b>Title: </b> ${film.Title}<br />
  <b>Year: </b> ${film.Year}<br />
  <b>Director: </b> ${film.Director}<br />
  <b>Producers: </b> ${film.Producers}<br />
  <b>Writers: </b> ${film.Writers}<br />
  <b>Composer: </b> ${film.Composer}<br />
  <b>Bond: </b> ${film.Bond}<br />
  <b>Budget: </b> ${film.Budget}<br />
  <b>BoxOffice: </b> ${film.BoxOffice}<br />
  <div class="pic"><img src="thumbnails/${film.Image}" /></div>
</div>`;
}

$(document).ready(function() {  

	$('.category').click(function(e){
        e.preventDefault(); //stop default action of the link
		cat = $(this).attr("href");  //get category from URL
		
  var request = $.ajax({
    url: "api.php?cat=" + cat,
    method: "GET",
    dataType: "json"
  });
  request.done(function( data) {
    console.log(data);

    //Place the title of the webservice on page
    $("#filmtitle").html(data.title);

    //clear previous films
    $("#films").html("")

    //load each film via template into div
    $.each(data.films,function(key,value){
      let str = bondTemplate(value);
      $("<div></div>").html(str).appendTo("#films");
    });
    

	
 //load data on page so we can see it
    //$("#output").text(JSON.stringify(data));
    /*
    let myData = JSON.stringify(data,null,4);

    myData = "<pre>" + myData + "</pre>";
    $("#output").html(myData);
    */
</body>

</html>