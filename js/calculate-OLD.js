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
var lastChar = id.match(/\d+$/)[0];
lastChar = parseInt(lastChar) + 4;
//alert(lastChar);
	
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("amount"+lastChar).value = this.responseText;
            }
        };
        xmlhttp.open("GET", "getPrice.php?q=" + value, true);
        xmlhttp.send();
	//var a = document.getElementsByName("amount[0]").value;
	//alert(a);
	
	getHsn(lastChar,value);
	getTax(lastChar,value);
	
}

function getHsn(lastChar,value)
{

   //alert(lastChar);
   var lastChar = lastChar-3;
	
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("hsn_code"+lastChar).value = this.responseText;
            }
        };
        xmlhttp.open("GET", "getHsn.php?q=" + value, true);
        xmlhttp.send();
}

function getTax(lastChar,value)
{

   //alert(lastChar);
   var lastChar = lastChar-2;

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("tax"+lastChar).value = this.responseText;
            }
        };
        xmlhttp.open("GET", "getTax.php?q=" + value, true);
        xmlhttp.send();
}

function getTotal(id,value)
{	
var lastChar = id.match(/\d+$/)[0];
//alert(lastChar);
lastChar = parseInt(lastChar) + 1;
var tot = parseInt(lastChar) + 2;
var tax = parseInt(lastChar) - 2;
var taxa = parseInt(lastChar) + 1;

//alert(taxa);

var qty = value;
var amount = document.getElementById('amount'+lastChar).value;
//alert(amount);

var subtotal = parseInt(qty)*amount;
//alert(subtotal);

var taxp = document.getElementById('tax'+tax).value;
//alert(taxp);
var gst = (taxp/100)*subtotal;
//alert(gst);
document.getElementById('tax_amount'+taxa).value=gst;

subtotal = subtotal + gst;
document.getElementById('total'+tot).value=subtotal;

subTotal();
}

function getTotala(id,value)
{
var lastChar = id.match(/\d+$/)[0];
lastChar = parseInt(lastChar) + 1;

var tax = parseInt(lastChar) - 3;
//alert(tax);
var taxa = parseInt(lastChar) + 0;
//alert(taxa);
var tot = parseInt(lastChar) + 1;
//alert(tot);

//alert(taxa);

var amount = value;
var qty2 = parseInt(lastChar) - 2;
var qty = document.getElementById('qty'+qty2).value;

var subtotal = parseInt(qty)*amount;

var taxp = document.getElementById('tax'+tax).value;
//alert(taxp);
var gst = (taxp/100)*subtotal;
//alert(gst);
document.getElementById('tax_amount'+taxa).value=gst;

subtotal = subtotal + gst;
document.getElementById('total'+tot).value=subtotal;

subTotal();
}

function subTotal()
{
	var sub_total = 0;
	for(i=6;i<=70;i=i+7)
	{
		var tot = document.getElementById('total'+i).value;
		if(tot!="")
		{
		sub_total = parseInt(sub_total) + parseInt(tot);
		document.getElementById('sub_total').value=sub_total;
		gstTotal();
		}
	}
	
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
		totalAmount();
	}
	else
	{
		var sub_total = document.getElementById('sub_total').value;
		var igst = (9/100)*parseInt(sub_total);
		document.getElementById('vat_igst').value=igst;
		totalAmount();
	}
			
}

function getTotal2(id,value)
{	

var lastChar = id.match(/\d+$/)[0];
lastChar = parseInt(lastChar) + 1;
var tot = parseInt(lastChar) + 1;

//alert(tot);

var qty = value;
var amount = document.getElementById('amount'+lastChar).value;

var subtotal = parseInt(qty)*amount;
//alert(subtotal);
document.getElementById('total'+tot).value=subtotal;

subTotal2();
}

function subTotal2()
{

	var sub_total = document.getElementById('sub_total2').value;
	//alert(sub_total);
	for(i=3;i<=31;i=i+4)
	{
		var tot = document.getElementById('total'+i).value;
		if(tot!="")
		{
		sub_total = parseInt(sub_total) + parseInt(tot);
		document.getElementById('sub_total').value=sub_total;
		totalAmount();
		}
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
	document.getElementById('total_amount').value = total_amount;
}


function getTax22(id)
{
	//alert(id);
	var customer_id = id;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("amount"+lastChar).value = this.responseText;
            }
        };
        xmlhttp.open("GET", "getPrice.php?q=" + value, true);
        xmlhttp.send();
	
	
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

