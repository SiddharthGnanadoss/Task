function getVat2(id) {
  
  var state = document.getElementById('company_state').value;
 
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "getState.php?id="+id+"&state="+state, true);
  xhttp.send();
}

function getVat(id) {
  
  var state = document.getElementById('company_state').value;
 
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("customer_state").value =
      this.responseText;
    }
  };
  xhttp.open("GET", "getState.php?id="+id+"&state="+state, true);
  xhttp.send();
}

function get(id,value)
{
	
var inps = document.getElementsByName('item_id[]');
var amt = document.getElementsByName('amount[]');
var hsn = document.getElementsByName('hsn_code[]');
var tax = document.getElementsByName('tax[]');
for (var i = 0; i <inps.length; i++) {
var inp=inps[i];
    var item_id = inp.value;
	    var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                //alert(this.responseText);
				//amt[0].value=10;
				var str = this.responseText;
				
				var temp = new Array();
				var temp = str.split("_");
				//alert(temp[2]);
				var a = parseInt(temp[3]);
				
				amount = roundNumber(temp[0],2);

				amt[a].value=amount;
				hsn[a].value=temp[1];
				tax[a].value=temp[2];
            }
        };
        xmlhttp.open("GET", "getPurchasePrice.php?q=" + item_id+"&flag="+i, true);
        xmlhttp.send();
}
}

function getTotal()
{
	var inps = document.getElementsByName('item_id[]');
	var amt = document.getElementsByName('amount[]');
	var qty = document.getElementsByName('qty[]');
	var tot = document.getElementsByName('total[]');
	var tax_r = document.getElementsByName('tax[]');
	var tax_a = document.getElementsByName('tax_amount[]');
	
	
	
	for (var i = 0; i <inps.length; i++) 
	{
	var amt_t = amt[i];
	var amount = amt_t.value;
	
	var qty_y = qty[i];
	var quantity = qty_y.value;
	
	var tax_x = tax_r[i];
	var tax_x = tax_x.value;
	
	//alert(amount);
	//alert(quantity);
	
	var subtotal = parseFloat(quantity)*amount;
	
	var ptax = (tax_x/100)*subtotal;
	
	pt = roundNumber(ptax,2);
	
	tax_a[i].value=pt;
	
	//var sub_tot = subtotal + ptax;
	
	//alert(subtotal);
	
	st = roundNumber(subtotal,2);
	
	tot[i].value=st;	

	}
	
	subTotal();
	
	
}

function subTotal()
{
	var sub_total = 0;
	var inps = document.getElementsByName('item_id[]');
	var tot = document.getElementsByName('total[]');
	for (var i = 0; i <inps.length; i++) 
	{
		var tot_t = tot[i];
	    var total = tot_t.value;
		sub_total = parseInt(sub_total) + parseInt(total); 
	}
	var sub_total2 = document.getElementById('sub_total2').value;
	var s_total = parseInt(sub_total) + parseInt(sub_total2);
	
	st = roundNumber(s_total,2);
    document.getElementById('sub_total').value=st;
	gstTotal();
	
}

function gstTotal()
{

	var company_state = document.getElementById('company_state').value;
	var customer_state = document.getElementById('customer_state').value;
	if(company_state==customer_state)
	{
		var sub_total = document.getElementById('sub_total').value;
		//alert(sub_total);
		var sgst = (9/100)*parseInt(sub_total);
		sgst = roundNumber(sgst,2);
		var cgst = (9/100)*parseInt(sub_total);
		cgst = roundNumber(cgst,2);
		document.getElementById('vat_sgst').value=sgst;
		document.getElementById('vat_cgst').value=cgst;
		document.getElementById('vat_igst').value="0.00";
		totalAmount();
	}
	else
	{
		var sub_total = document.getElementById('sub_total').value;
		var igst = (9/100)*parseInt(sub_total);
		igst = roundNumber(igst,2);
		document.getElementById('vat_igst').value=igst;
		document.getElementById('vat_sgst').value="0.00";
		document.getElementById('vat_cgst').value="0.00";
		totalAmount();
	}
			
}

function totalAmount()
{
	var sub_total = document.getElementById('sub_total').value;
	var vat_sgst = document.getElementById('vat_sgst').value;
	var vat_cgst = document.getElementById('vat_cgst').value;
	var vat_igst = document.getElementById('vat_igst').value;
	//alert(vat_value);
	var other_charges = document.getElementById('other_charges').value;
	
	var total_amount = parseInt(sub_total) + parseInt(vat_sgst) + parseInt(vat_cgst) + parseInt(vat_igst) + parseInt(other_charges);
	
	ta = roundNumber(total_amount,2);
	document.getElementById('total_amount').value = ta;
}

function roundNumber(number,decimal_points) {
	if(!decimal_points) return Math.round(number);
	if(number == 0) {
		var decimals = "";
		for(var i=0;i<decimal_points;i++) decimals += "0";
		return "0."+decimals;
	}

	var exponent = Math.pow(10,decimal_points);
	var num = Math.round((number * exponent)).toString();
	return num.slice(0,-1*decimal_points) + "." + num.slice(-1*decimal_points)
}