/* ----Katie Jones and Piranavie Thangasuthan---- */

/* ----BASIC FORMATTING --- */
body {
    background-color: #98EAFA;
    width:-moz-available;
    width:-webkit-fill-available;
    /* margin-top: 10%; */
    margin-left: 20px;
    margin-right: 20px;
    margin-bottom: 10%;
    vertical-align: middle;
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    top: 50%;
    position: absolute;
}
.top_buttons{
	text-align: center;
}

.title {
    font-family: Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", serif;
    font-size: xx-large;
    font-weight: bold;
    text-align: center;
    color: #00D7FF;
    background-color: #090909;
    height: 50px;
    width: 100%;
    display: block;
}
#pointsDisplayTag {
    font-family: Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", serif;
    font-size: large;
    font-weight: bold;
    height: 30px;
    width: 75px;
    position:static;
    border: thin solid #000000;
    text-align: center;
    border-radius: 50px;
    margin-right:auto;
    margin-left:auto;
    margin-top: 10px;
}


.container{
    background-color: #FCF8F8;
    position: static;
    height: 70%;
    width:-webkit-fill-available;
    width:-moz-available;
    margin: 10px;
    margin-bottom: 0;
}


/* ----SCOREBOARD---- */


#ScoreBoardButton, #homeButton, #helpButton, .QRButton {
  font-family: Constantia, "Lucida Bright", "DejaVu Serif", Georgia, serif;
  border: thin solid #000000;
  height: 30px;
  width: 100px;
  margin: 10px;
  background:    #0b5394;
  border-radius: 5px;
  color:         #ffffff;
  display:       inline-block;
  font:          normal bold;
  font-size: 0.9em;
  text-align:    center;
  float: left;
}

.QRButton{
  background-image: url(qrButton.jpg);
  background-size: cover;
  float:right;
  color:black;
  text-shadow: -7px 0px 3px white, 7px 0px 3px white, 0px 7px 3px white, 0px 7px 3px white;
  background-size: cover;
  font-size: 25px;
  background-repeat: no-repeat;
  background-position: 50% 50%;
  font-weight: 900;
}

#helpButton{
	float:right;
}
#loginButton {
  background-color: black;
  font-size: 1.1em;
  color: white;
  padding: 20px;
  border: none;
  cursor: pointer;
  width: -webkit-fill-available;
  width: -moz-available;
  margin-top: 20px;
}


#ScoreBoardButton:hover, #loginButton:hover {
  background-color: #0b17b1;
  color: white;
}

table{
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-top:100px;
  text-align: center;
}

td, th {
  border: 1px solid #000;
  padding: 20px;
  font-size:medium;
  text-align: center;
}

tr:nth-child(even){
  background-color: #f2f2f2;
}

tr:hover {
  background-color: #ddd;
}

th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #005c86;
  color: white;
  text-align: center;
}


/* ----QUIZ---- */

.unchecked{
	font-family: Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", serif;
	font-size: medium;
	text-align: center;
	background-color: #FCF8F8;
	color: #000000;
	border-color: #000000;
	padding: 30px;
}
#error{
	margin: 0px;
	padding: 33px;
	text-align: center;
	font-size: 1.1em;
}
.question{
	margin: 0px;
	text-align: center;
	font-size: 1.5em;
	padding: 20px;
}

#questionText {
    font-family: Constantia, "Lucida Bright", "DejaVu Serif", Georgia, serif;
    font-size: small;
    color: #000000;
    height: 20px;
    width: 470px;
    margin-left: 10px;
}


/* ----QR---- */



.container video{
  max-width: -webkit-fill-available;
  max-width: -moz-available;
}

/* ----MAP---- */
#fullMapDisplay{
  background-color:black;
      height: 590px;
}


/* ----HOMEPAGE---- */

.form-popup {
	display: none;
	position: fixed;
	border: 3px solid #f1f1f1;
	z-index: 9;
}
#usernameInput, #tutorList{
   width: -webkit-fill-available;
   width:-moz-available;
   width: -moz-available;
   padding: 15px;
   display: inline-block;
   border: 1px solid #ccc;
   box-sizing: border-box;
   margin-top: 10px;
}
input, select, label{
	font-size: 1.1em;
}



img.topImage, img.bottomImage{
  width: 35%;
  display: block;
  margin-left: auto;
  margin-right: auto;
  margin-top: 30%;
  padding-top: 0px;
  position: static;
}


/* ----FAQ PAGE---- */
#informationDisplay{
    overflow: scroll;
}


#informationText {
    font-family: Constantia, "Lucida Bright", "DejaVu Serif", Georgia, serif;
    font-size: small;
    color: #000000;
    height: 500px;
    width: -webkit-fill-available;
	width: -moz-available;
    padding: 10px;
    overflow-x:hide;
}
