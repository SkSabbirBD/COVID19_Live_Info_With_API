<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>COVID 19 LIVE - Sabbir Hossen Chowdhury</title>
		<!-- Adsence Code -->
		<script data-ad-client="ca-pub-6479894171511291" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- Meta  -->
		<meta property="og:title" content="COVID-19 LIVE-CORONA INFO" />
		<meta property="og:description" content="Get Live Updates About Corona Virus COVID-19 " />
		<meta property="og:image" content="https://sabbir.xyz/wp-content/uploads/2020/04/meta.png" />
		<?php include_once "head_links.php" ?>
		<?php include_once 'style.php';  ?>
	</head>
	<body>
		<div id="bodyWapper">

					
		<!-- Banner Section End -->
		<!-- Live Data Section -->
		<div class="live-data-sec">
			<div class="container">
				<div class="row align-items-center justify-content-center">
						<div class="col-md-12">
                            <div class="banner-round">
                                <img src="img/01.png" alt="banner">
                            </div>
                        </div>
					</div>
				<div class="row text-center">
					<h3 class="live-heading">
						COVID-19 CORONAVIRUS LIVE PANDEMIC
					</h3>
				</div>
				<div class="row text-center justify-content-center">
					<a href="https://sabbir.xyz">
						<button type="button" class="btn btn-primary font-weight-bold">
							  Visit My Mian Website 
							  <span class="badge badge-light">Sabbir.xyz
							  </span>
						</button>
					</a>
				</div>
				<!--<div class="row">-->
				<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- Corona-site-1 -->
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-6479894171511291"
                     data-ad-slot="4997801653"
                     data-ad-format="auto"
                     data-full-width-responsive="true"></ins>
                <script>
                     (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
                <!--</div>-->
				<div class="row live-data-row table-responsive">
					<!-- Table Live Start -->
					<table class="table-bordered table-striped text-center" id="tableid">
						<thead class="head-row-show">
							<tr class="search-box-row">
							<th colspan="6" scope="col">
								<input type="text" id="search-box-name" class="form-control" onkeyup="findname()" placeholder="Enter Country Name">
							</th>
							<th colspan="6">
							
							</th>
						</tr>
							<tr class="main-table-heading">
								<th>Country</th>
								<th>Total Cases</th>
								<th>Today Cases</th>
								<th>Total Deaths</th>
								<th>Today Deaths</th>
								<th>Total Recovered</th>
								<th>Active Cases</th>
								<th>Critical Condition</th>
								<th>Cases Per Million</th>
								<th>Deaths Per Million</th>
								<th>Total Tests</th>
								<th>Tests Per Million</th>
							</tr>
						</thead>
						<tbody class="body-row-show" >
							<?php

	$data = file_get_contents('https://coronavirus-19-api.herokuapp.com/countries') ;
	$coronaData = json_decode($data);
					?>

				<tr class="table-data-row-world">
					<th style="color:white" class="country"><?php echo $coronaData[7]->country ; ?></th>
					<th><?php echo $coronaData[7]->cases ; ?></th>
					<th><?php echo $coronaData[7]->todayCases ; ?></th>
					<th><?php echo $coronaData[7]->deaths ; ?></th>
					<th><?php echo $coronaData[7]->todayDeaths ; ?></th>
					<th><?php echo $coronaData[7]->recovered ; ?></th>
					<th><?php echo $coronaData[7]->active ; ?></th>
					<th><?php echo $coronaData[7]->critical ; ?></th>
					<th><?php echo $coronaData[7]->casesPerOneMillion ; ?></th>
					<th><?php echo $coronaData[7]->deathsPerOneMillion ; ?></th>
					<th><?php echo $coronaData[7]->totalTests ; ?></th>
					<th><?php echo $coronaData[7]->testsPerOneMillion ; ?></th>
				</tr>





					<?php

		for ($i=8; $i <=219; $i++) 
			{ ?>
				<tr class="table-data-row">
					<td class="country"><?php echo $coronaData[$i]->country ; ?></td>
					<td><?php echo $coronaData[$i]->cases ; ?></td>
					<td><?php echo $coronaData[$i]->todayCases ; ?></td>
					<td><?php echo $coronaData[$i]->deaths ; ?></td>
					<td><?php echo $coronaData[$i]->todayDeaths ; ?></td>
					<td><?php echo $coronaData[$i]->recovered ; ?></td>
					<td><?php echo $coronaData[$i]->active ; ?></td>
					<td><?php echo $coronaData[$i]->critical ; ?></td>
					<td><?php echo $coronaData[$i]->casesPerOneMillion ; ?></td>
					<td><?php echo $coronaData[$i]->deathsPerOneMillion ; ?></td>
					<td><?php echo $coronaData[$i]->totalTests ; ?></td>
					<td><?php echo $coronaData[$i]->testsPerOneMillion ; ?></td>
				</tr>
			<?php }
				?>
						</tbody>
					</table>
				</div>
				<!-- Table Live End -->
			</div>
		</div>
	</div>
	<!-- Live Data Section -->
	<!--<div class="row">-->
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Corona-02 -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-6479894171511291"
             data-ad-slot="6431190870"
             data-ad-format="auto"
             data-full-width-responsive="true"></ins>
        <script>
             (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    <!--</div>-->
	<!-- Safe sec start -->
	<section class="safe-actions style-2 padding-tb bg-action">
			<div class="container">
                <div class="section-header wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
					<h2 class="how-to-wash">How to Wash Your Hands 
					( কিভাবে আপনি হাত ধুবেন )</h2>
				</div>
				<div class="row justify-content-center align-items-center" style=" counter-reset: topx;">
					<div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <div class="safe-item">
                            <div class="safe-thumb">
                                <img src="img/safe/01.jpg" alt="safe">
                            </div>
                            <div class="safe-content">
                                <h6>Wet Hands ( হাত পানিতে ভিজান )</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <div class="safe-item">
                            <div class="safe-thumb">
                                <img src="img/safe/02.jpg" alt="safe">
                            </div>
                            <div class="safe-content">
                                <h6>Apply Soap ( সাবান ব্যাবহার করুন )</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <div class="safe-item">
                            <div class="safe-thumb">
                                <img src="img/safe/03.jpg" alt="safe">
                            </div>
                            <div class="safe-content">
                                <h6>Rub Hands Palm to palm ( হাতের তালুতে তালুতে ঘষুন )</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <div class="safe-item">
                            <div class="safe-thumb">
                                <img src="img/safe/04.jpg" alt="safe">
                            </div>
                            <div class="safe-content">
                                <h6>Lather The Back of Both Hands ( উভয় হাতের পিছন দিক ঘষুন )</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <div class="safe-item">
                            <div class="safe-thumb">
                                <img src="img/safe/05.jpg" alt="safe">
                            </div>
                            <div class="safe-content">
                                <h6>Scrub Between Your Fingers ( আপনার আঙুলের মাঝে ঘষুন )</h6>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <div class="safe-item">
                            <div class="safe-thumb">
                                <img src="img/safe/08.jpg" alt="safe">
                            </div>
                            <div class="safe-content">
                                <h6>Wash Fingernails And Fingertips ( আঙুলের নখ এবং আঙুলের পাতা ধুয়ে নিন )</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <div class="safe-item">
                            <div class="safe-thumb">
                                <img src="img/safe/09.jpg" alt="safe">
                            </div>
                            <div class="safe-content">
                                <h6>Rinse Hands ( হাত ধুয়ে ফেলুন )</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <div class="safe-item">
                            <div class="safe-thumb">
                                <img src="img/safe/10.jpg" alt="safe">
                            </div>
                            <div class="safe-content">
                                <h6>Dry with a Single Use Towel ( তোয়ালে বা টিস্যু দিয়ে হাত মুছুন )</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <div class="safe-item">
                            <div class="safe-thumb">
                                <img src="img/safe/11.jpg" alt="safe">
                            </div>
                            <div class="safe-content">
                                <h6>Use The Towel to Rurn off The Foucet ( কলটি বন্ধ করতে তোয়ালে বা টিস্যু  ব্যবহার করুন )</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <div class="safe-item">
                            <div class="safe-thumb">
                                <img src="img/safe/12.jpg" alt="safe">
                            </div>
                            <div class="safe-content">
                                <h6>Your Hands Are Clean ( আপনার হাত পরিষ্কার হয়ে গেছে )</h6>
                            </div>
                        </div>
					</div>
				</div>
				<div class="section-header wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
					<h2 class="how-to-wash">STAY HOME STAY SAFE 
					( ঘরে থাকুন নিরাপদ থাকুন )</h2>
				</div>
				<a href="#" class="to-top" uk-totop uk-scroll></a>
			</div>
		</section>
		<!--<div class="row">-->
		<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- corona03 -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-6479894171511291"
             data-ad-slot="4019568383"
             data-ad-format="auto"
             data-full-width-responsive="true"></ins>
        <script>
             (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
        <!--</div>-->



	<!-- Safe section End -->








	<!-- Script Start -->

	<?php require_once "footer_script.php" ;?>
		<!-- Script Ends -->
	<!-- My Script -->
	<script>
		// Find Name Start
function findname(){
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("search-box-name");
  filter = input.value.toUpperCase();
  table = document.getElementById("tableid");
  tr = table.getElementsByTagName("tr");

  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0] ;
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
// Find Name End

// Blank Filter Start


 var table, tr, td, i, txtValue;
  table = document.getElementById("tableid");
  tr = table.getElementsByTagName("tr");

  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0] ;
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue <1) {
        tr[i].style.display ="none" ;
      } else {
        tr[i].style.display = "";
      }
    }
  }

  // Declare variables
 
// Blank Filter End

// Wow js
new WOW().init();
// Wow js
	</script>
</div>
	<footer class="mainfooter table-responsive">
			<div class="container">
				<div class="row">
					<div class="col-md-12 copy">
						<p class="text-center">&copy; Copyright 2020 - <span>SABBIR.XYZ</span> All rights reserved | <span>Developed By : <a href="https://sabbir.xyz/" target="_blank" title="Full Stack Web Developer" >Sabbir Hossen Chowdhury</a></span></p>
					</div>
				</div>
			</div>
	</footer>
</body>
</html>