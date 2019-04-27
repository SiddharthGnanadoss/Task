/**
Core script to handle the entire layout and base functions
**/

   function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            alert("Please enter only Numbers.");
            return false;
        }
        return true;
    }
	
	function confirmDelete(){	
	{ 
		answer = confirm("Do you want to delete this item?")

		if (answer ==0) 
		{ 
			return false;
		} 

	}
    }
	
	
	function toggle(source) {
		checkboxes = document.getElementsByName('individual[]');
		for(var i=0, n=checkboxes.length;i<n;i++) {
		checkboxes[i].checked = source.checked;
		}
	}
