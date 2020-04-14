<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>COVID 19 LIVE - Sabbir Hossen Chowdhury</title>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		
	</head>
	<body onload="fetchData()">
		<!-- Live Data Section -->
		<div class="live-data-sec">
			<div class="container">
				<div class="row">
					<!-- Table Live Start -->
					<div class="table table-responsive">
						<table class="table-bordered table-striped text-center" id="tableid">
				<input type="text" id="search-box-name" class="form-control" onkeyup="findname()" placeholder="Enter Country Name (Total: )">

							<tr>
								<th>Country</th>
								<th>TotalConfirmed</th>
								<th>TotalRecovered</th>
								<th>TotalDeaths</th>
								<th>NewConfirmed</th>
								<th>NewRecovered</th>
								<th>NewDeaths</th>
							</tr>
						</table>
					</div>
					<!-- Table Live End -->
				</div>
			</div>
		</div>
		<!-- Live Data Section -->
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.4.1.min.js" ></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<!-- My Script -->
		<script>
				// Data Fetch Function Start
				function fetchData()
				{
					// Store Api data
					$.get("https://api.covid19api.com/summary",
						// Pass In a Function
						function(data)
						{
						// Get The Table Element
						var tableid = document.getElementById('tableid');
						// Loop For Table Cell & Row
						for (var i = 1 ; i <=(data['Countries'].length) ; i++)
						{
							// Insert New Rows
							var x = tableid.insertRow();
							// Pass Data
							// 1st Cell
							x.insertCell(0);
							tableid.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
							tableid.rows[i].cells[0].style.background = 'green' ;
							tableid.rows[i].cells[0].style.color = 'white' ;
							// 2nd Cell
							x.insertCell(1);
							tableid.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
							tableid.rows[i].cells[1].style.background = 'red' ;
							tableid.rows[i].cells[1].style.color = 'white' ;
							// 3rd Cell
							x.insertCell(2);
							tableid.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
							tableid.rows[i].cells[2].style.background = 'green' ;
							tableid.rows[i].cells[2].style.color = 'white' ;
							// 4th Cell
							x.insertCell(3);
							tableid.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
							tableid.rows[i].cells[3].style.background = 'red' ;
							tableid.rows[i].cells[3].style.color = 'white' ;
							// 5th Cell
							x.insertCell(4);
							tableid.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
							tableid.rows[i].cells[4].style.background = 'red' ;
							tableid.rows[i].cells[4].style.color = 'white' ;
							// 6th Cell
							x.insertCell(5);
							tableid.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
							tableid.rows[i].cells[5].style.background = 'green' ;
							tableid.rows[i].cells[5].style.color = 'white' ;
							// 7th Cell
							x.insertCell(6);
							tableid.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
							tableid.rows[i].cells[6].style.background = 'red' ;
							tableid.rows[i].cells[6].style.color = 'white' ;
						}
					})
				}
				// Data Fetch Function Start

				// Search Function
				// Find Name Start
function findname(){
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("search-box-name");
  filter = input.value.toUpperCase();
  table = document.getElementById("tableid");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
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
		</script>
	</body>
</html>