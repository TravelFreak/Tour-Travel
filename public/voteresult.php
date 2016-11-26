<?php include("header.php"); ?>

<div class="vote" style="background-image:url(images/black.jpg)">
		<div>
			<h2 style="font-size: 60px; margin-bottom: 0%; margin-top: 0%; text-align: center;color: white; ">User's Votes</h2>
		</div>
<!-- Supply the fetched data to the chart using javascript -->
	<script type="text/javascript" src="js/loader.js"></script>
	<script type="text/javascript">
		
		google.charts.load('current', {'packages':['corechart']});
      	google.charts.setOnLoadCallback(drawChart);
     	 function drawChart() {
     	 	
        var data = google.visualization.arrayToDataTable([
          ['City', 'Votes', { role: "style" }]

		    <?php
				$con=mysql_connect("localhost","root","");
				if(!$con){
					echo "Database is not connected";
				}
				else{
					mysql_select_db("travelfreak");
					$sql=mysql_query("select * from vote;");
					// $row=mysql_fetch_array($sql);
					while ($row=mysql_fetch_array($sql)) {
						$x=$row['city'];
					$y=$row['votes'];
					$one=(string)$x;
					$one='"'.$one.'"';
					$two=(int)$y;
					echo ",[$one,$two,'lightblue']";
					} 
				}
			?>
          // ["<?php echo $one; ?>",<?php echo $two; ?>, "gold"]
        ]);

          var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

       var options = {
        width: 850,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
      }
	</script>

	<center>
    	<div id="columnchart_values" style=" margin-bottom:0%;"></div>
    </center>
    <br><br>

</div>
<?php include("footer.php"); ?>