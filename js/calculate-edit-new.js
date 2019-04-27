function getInvoiceNo(cat) {
	
	//alert(cat);
  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("InvoiceNo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "getInvoiceNo.php?cat="+cat, true);
  xhttp.send();
}

function getsInvoiceNo(cat) {
	
	//alert(cat);
  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("InvoiceNo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "getsInvoiceNo.php?cat="+cat, true);
  xhttp.send();
  
  getTotal();
  
}

function getopInvoiceNo(cat) {
	
	//alert(cat);
  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("InvoiceNo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "getopInvoiceNo.php?cat="+cat, true);
  xhttp.send();
}

function getosInvoiceNo(cat) {
	
	//alert(cat);
  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("InvoiceNo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "getosInvoiceNo.php?cat="+cat, true);
  xhttp.send();
}

function getpInvoiceNo(cat) {
	
	//alert(cat);
  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("InvoiceNo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "getpInvoiceNo.php?cat="+cat, true);
  xhttp.send();
  
   getTotal();
  
}

function getpoInvoiceNo(cat) {
	
	//alert(cat);
  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("InvoiceNo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "getpoInvoiceNo.php?cat="+cat, true);
  xhttp.send();
}

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
	  //alert(this.responseText);
    }
  };
  xhttp.open("GET", "getState.php?id="+id+"&state="+state, true);
  xhttp.send();
  
  getBalance(id);
  
}

function getBalance(id)
{
  //alert(id);
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("getBalance").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "getBalance.php?id="+id, true);
  xhttp.send();
}

function get(id,value)
{
	
var inps = document.getElementsByName('item_id[]');
var amt = document.getElementsByName('amount[]');
var hsn = document.getElementsByName('hsn_code[]');
var tax = document.getElementsByName('tax[]');
var invoice_cat = document.getElementById("invoice_cat").value;
for (var i = 0; i <inps.length; i++) {
var inp=inps[i];
    var item_id = inp.value;
	    var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var customer_id = document.getElementById('customer_id').value;
				if(customer_id=="")
				{
					alert("Please select customer before create invoice");
				}
				//alert(this.responseText);
				//amt[0].value=10;
				var str = this.responseText;
				
				var temp = new Array();
				var temp = str.split("_");
				//alert(temp[2]);
				var a = parseInt(temp[3]);
				
				amount = roundNumber(temp[0],2);
				
				if(amt[a].value=="")
				{
				amt[a].value=amount;
				}

				//amt[a].value=amount;
				hsn[a].value=temp[1];
				if(invoice_cat=="Non Taxable")
				{
				tax[a].value="0.00";
				}
				else
				{
				tax[a].value=temp[2];	
				}
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
	
    var invoice_cat = document.getElementById("invoice_cat").value;
	if(invoice_cat=="Non Taxable")
	{
		tax_a[i].value="0.00";
		tax_r[i].value="0.00";
	}
	else
	{
		tax_a[i].value=pt;
	}
		
	//var sub_tot = subtotal + ptax;	
	
	//alert(subtotal);
	
	st = roundNumber(subtotal,2);
	
	tot[i].value=st;	

	}
	
    subTotal();
	
	
}

function subTotal()
{
	
	// 
	var sub_total2 = 0;
	var sub_tax_total2 = 0;
	var inps2 = document.getElementsByName('item_id2[]');
	var tot2 = document.getElementsByName('total2[]');
	var tax_tot2 = document.getElementsByName('tax_amount2[]');
	for (var i = 0; i <inps2.length; i++) 
	{
		var tot_t2 = tot2[i];
	    var total2 = tot_t2.value;
		//alert(total);
		sub_total2 = parseInt(sub_total2) + parseInt(total2); 
		
		var tax_t2 = tax_tot2[i];
	    var tax_total2 = tax_t2.value;
		//alert(total);
		sub_tax_total2 = parseInt(sub_tax_total2) + parseInt(tax_total2); 
		
	}
	
	//alert(sub_tax_total2);
	
	
	var sub_total = sub_total2;
	var sub_tax_total = sub_tax_total2;
	var inps = document.getElementsByName('item_id[]');
	var tot = document.getElementsByName('total[]');
	var tax_tot = document.getElementsByName('tax_amount[]');
	for (var i = 0; i <inps.length; i++) 
	{
		var tot_t = tot[i];
	    var total = tot_t.value;
		//alert(total);
		sub_total = parseInt(sub_total) + parseInt(total); 
		
		var tax_t = tax_tot[i];
	    var tax_total = tax_t.value;
		//alert(total);
		sub_tax_total = parseInt(sub_tax_total) + parseInt(tax_total); 
		
	}
	

	
    st = roundNumber(sub_total,2);
	document.getElementById('sub_total').value=st;
	
	var invoice_cat = document.getElementById("invoice_cat").value;
	if(invoice_cat=="Non Taxable")
	{
		gstTotalTax();
	}
	else
	{
		gstTotal();
	}
	
	
	
	
}

function gstTotalTax()
{
		document.getElementById('vat_sgst').value="0.00";
		document.getElementById('vat_cgst').value="0.00";
		document.getElementById('vat_igst').value="0.00";
		totalAmount();
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
		var igst = (18/100)*parseInt(sub_total);
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