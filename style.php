<style>
*{
	margin: 0;
	padding: 0;
}
body{
	background: url(img/bg/02.jpg) fixed no-repeat;
    background-position: center;
    background-size: cover;
}
.main-table-heading {
    background: #0089ff;
    font-size: 15px;
    color: white;
}

.search-box-row {
    background: #b400ff;
}

tr.search-box-row {}

.search-box-row th {
    padding: 10px;
}

#tableid 
{
    margin: 20px 10px;
   	border: 2px solid gray;
   	background: white;
}
.country {
    font-weight:bold !important;
    padding: 10px;
    font-family: sans-serif;
    color: #088be8;

}
.main-table-heading th {
    padding: 10px;
    font-family: serif;
}
.table-data-row td {
    padding: 10px;
    font-weight: 500;
}
.table-data-row td:nth-child(3)
{
	background: #f3f369;
    color: rgba(0,0,0,.9);
}
.table-data-row td:nth-child(5)
{
	background: red;
	color: white ;
}
.table-data-row-world
{
	background: #4a9631 !important;
    color: white;
}
/*FOOTER*/
footer {
  background: black;
  color: white;
  min-width: 100%;
  font-family: monospace;
}

.copy {
  font-size: 14px;
  padding: 10px;
  border-top: 1px solid #FFFFFF;
}
footer span:nth-child(1)
{
    color: red;
    font-weight: bold;
}
footer span a
{
    font-weight: bold;
    color: skyblue;
}
footer span a:hover
{
    font-weight: bold;
    color: yellow;
}
@media only screen and (max-width: 845px) {
  footer span:nth-child(2)
{
    display: block;
}
}

/* Footer */

#bodyWapper
{
	width: 100%;
	min-height: 100vh;
}
.live-data-row
{
	margin: auto;
}
.live-data-sec
{
	
    padding: 50px 0px;
}

.banner-round img {
    animation: virus_round 20s linear infinite;
}
@keyframes virus_round {
  0% {
    transform: rotateZ(0deg);
    }
  100% {
    transform: rotateZ(359deg);
    } 
}


.banner-round img
{
	width:200px;
	display: block;
	margin: auto;
}
h3.live-heading {
    display: block;
    width: 100%;
    margin: 40px auto;
    color: white;
    font-family: 'Girassol', cursive;
    font-weight: bold;
    font-size: 40px;
}


.safe-item {
  padding: 20px;
  text-align: center;
  }
  .safe-item::before {
    position: absolute;
    z-index: 2;
    counter-increment: topx;
    content: counter(topx);
    top: 0px;
    left: 50%;
    width: 42px;
    height: 42px;
    text-align: center;
    line-height: 42px;
    font-weight: 700;
    color: #fff;
    background: #02c685;
    border: 3px solid #06264d;
    -webkit-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    transform: translateX(-50%);
    -webkit-border-radius: 100%;
    -moz-border-radius: 100%;
    border-radius: 100%; }
  .safe-item:hover .safe-thumb {
    animation: virus_round 2s linear infinite; }
  .safe-item .safe-thumb img {
    -webkit-border-radius: 100%;
    -moz-border-radius: 100%;
    /* border-radius: 100%; */
    }
  .safe-item .safe-content {
    margin-top: 20px; }
    .safe-item .safe-content h6 {
      color: #fff; }
      @media (min-width: 576px) {
        .safe-item .safe-content h6 {
          font-size: 18px; } }
  .safe-item.style-2 {
    padding: 10px;
    padding-top: 60px;
    margin: 5px;
    text-align: center;
    align-items: center;
    background: #fff;
    box-shadow: 0 0 10px rgba(136, 136, 136, 0.1);
    -webkit-border-radius: 6px;
    -moz-border-radius: 6px;
    border-radius: 6px;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    transition: all 0.3s ease; }
    @media (min-width: 576px) {
      .safe-item.style-2 {
        padding-top: 10px;
        padding-right: 40px;
        text-align: left;
        justify-content: space-between; } }
    .safe-item.style-2::before {
      position: absolute;
      z-index: 2;
      counter-increment: topx;
      content: counter(topx,upper-roman);
      top: 0;
      width: auto;
      height: auto;
      left: 50%;
      right: auto;
      text-align: center;
      font-size: 36px;
      font-weight: 300;
      color: #ff3372;
      border: none;
      background: transparent;
      -webkit-transform: translateX(-50%);
      -ms-transform: translateX(-50%);
      transform: translateX(-50%); }
      @media (min-width: 576px) {
        .safe-item.style-2::before {
          top: 50%;
          right: 10px;
          left: auto;
          -webkit-transform: translate(0%, -50%);
          -ms-transform: translate(0%, -50%);
          transform: translate(0%, -50%); } }
    .safe-item.style-2:hover {
      -webkit-transform: translateY(-5px);
      -ms-transform: translateY(-5px);
      transform: translateY(-5px); }
      .safe-item.style-2:hover .safe-thumb {
        animation: virus_round 2s linear infinite; }
    .safe-item.style-2 .safe-thumb {
      width: 100%; }
      @media (min-width: 576px) {
        .safe-item.style-2 .safe-thumb {
          width: 70px; } }
      .safe-item.style-2 .safe-thumb img {
        -webkit-border-radius: 100%;
        -moz-border-radius: 100%;
        border-radius: 100%; }
    .safe-item.style-2 .safe-content {
      margin-top: 20px;
      width: 100%; }
      @media (min-width: 576px) {
        .safe-item.style-2 .safe-content {
          margin-top: 0;
          width: calc(100% - 90px); } }
      .safe-item.style-2 .safe-content h6 {
        color: #000000; }
        @media (min-width: 576px) {
          .safe-item.style-2 .safe-content h6 {
            font-size: 18px;
            line-height: 1.3; } }
.how-to-wash {
    font-family: 'Girassol', cursive;
    color: white;
    text-align: center;
    margin: 50px auto;
    text-decoration: underline;
}

.to-top
	{
    display: block;
    width: 100%;
    margin: 20px auto;
    text-align: center;
    color: white;
    font-weight: bold;

}





























</style>