<script type="text/javascript" src="jquery-1.3.2.min.js"></script>    
<script type="text/javascript" src="jquery-barcode.js"></script>



<div id="bcTarget"></div>   

<input type="button" onclick='$("#bcTarget").barcode("1234567890128", "ean13",{barWidth:2, barHeight:30});' value="ean13">  



<script type="text/javascript">

$("#bcTarget").barcode("1234567890128", "ean13");    

</script>