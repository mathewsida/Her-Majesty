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

</body>

</html>