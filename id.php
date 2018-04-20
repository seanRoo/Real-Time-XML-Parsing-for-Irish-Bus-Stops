<DOCTYPE html>
<html>

<head>
	<div>
		<button id="back" onclick="location.href='parallelAssignment.php';">Back</button>
	</div>
</head>

<?php
include 'startPage.php';

if($_POST['formSubmit'] == "Submit"){
	$id = $_POST['id'];

}

$urlfirst = "https://data.dublinked.ie/cgi-bin/rtpi/realtimebusinformation?stopid=";
$urllast="&format=xml";
$urlfull = $urlfirst.$id.$urllast;
$urlencode = rawurldecode($urlfull);

$_SESSION['urlfull'] = $urlencode;
?>

<script>

	$.ajax({
    type: "GET",
    url: "IAD_proxy.php",
    dataType: "xml",
    success: function (data) {
        //document.getElementById("demo").innerHTML = 
       var thisOne = "<table><tr><th>Route Number </th><th>Arrival Time </th><th>Origin </th><th>Operator</th><th>Destination </th></tr>";
       var count = 0;
       var time = $(data).find('timestamp').text();
        $(data).find('result').each(function(){
        	count++;
        	thisOne+="<tr>";
        	$(this).find('route').each(function(){
        			thisOne += "<td>" + $(this).text() + "</td>";
        	


        		});

        	$(this).find('arrivaldatetime').each(function(){
        			thisOne += "<td>" + $(this).text() + "</td>";
        	


        		});

        	$(this).find('origin').each(function(){
        			thisOne += "<td>" + $(this).text() + "</td>";
        	


        		});
        	$(this).find('operator').each(function(){
        			thisOne += "<td>" + $(this).text() + "</td>";
        	


        		});

        	$(this).find('destinationlocalized').each(function(){
        			thisOne += "<td>" + $(this).text() + "</td>";
   
        	});
        	thisOne+="</tr>";

        });
        thisOne+="</table>";

       document.getElementById("demo").innerHTML =thisOne;
        document.getElementById("countDiv").innerHTML = "<h2>" + count + " Results found for stop " + <?php echo $id?> + "</h2>";
        document.getElementById("stopDiv").innerHTML="Information at : " + time;
    },
    error: function (jqXHR, textStatus, errorThrown) {
        alert(errorThrown);
    }
});

</script>

<style>


form{
	visibility: hidden;
}
</html>