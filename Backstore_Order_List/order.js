var add = 1;
var update = 0;
var string = "works!";

function save() {
  if (Boolean(add)) {

    var count = 3;
    var input = document.getElementById("f3");
    if (input > 0) {
      window.alert("f" + count + " value is greater than 0");
    } else {
      window.alert(input);
    }





    add = 0;
    update = 1;
  } else if (Boolean(update)) {

    window.alert("updatet works");


    add = 1;
    update = 0;
  }
}






function CalculateSubTotal() {
  var subtotal = 0;
  var gst = 0.05;
  var qst = 0.09975;
  var total = 0;

  item1 = document.getElementById("item1");
  item2 = document.getElementById("item2");
  item3 = document.getElementById("item3");
  item4 = document.getElementById("item4");
  item5 = document.getElementById("item5");
  item6 = document.getElementById("item6");
  item7 = document.getElementById("item7");
  item8 = document.getElementById("item8");
  item9 = document.getElementById("item9");
  item10 = document.getElementById("item10");
  item11 = document.getElementById("item11");
  item12 = document.getElementById("item12");
  item13 = document.getElementById("item13");
  item14 = document.getElementById("item14");
  item15 = document.getElementById("item15");
  item16 = document.getElementById("item16");
  item17 = document.getElementById("item17");
  item18 = document.getElementById("item18");
  item19 = document.getElementById("item19");
  item20 = document.getElementById("item20");
  item21 = document.getElementById("item21");
  item22 = document.getElementById("item22");
  item23 = document.getElementById("item23");
  item24 = document.getElementById("item24");
  item25 = document.getElementById("item25");
  item26 = document.getElementById("item26");

  subtotal = (item1.value * item1.getAttribute("data-price")) +
    (item2.value * item2.getAttribute("data-price")) +
    (item3.value * item3.getAttribute("data-price")) +
    (item4.value * item4.getAttribute("data-price")) +
    (item5.value * item5.getAttribute("data-price")) +
    (item6.value * item6.getAttribute("data-price")) +
    (item7.value * item7.getAttribute("data-price")) +
    (item8.value * item8.getAttribute("data-price")) +
    (item9.value * item9.getAttribute("data-price")) +
    (item10.value * item10.getAttribute("data-price")) +
    (item11.value * item11.getAttribute("data-price")) +
    (item12.value * item12.getAttribute("data-price")) +
    (item13.value * item13.getAttribute("data-price")) +
    (item14.value * item14.getAttribute("data-price")) +
    (item15.value * item15.getAttribute("data-price")) +
    (item16.value * item16.getAttribute("data-price")) +
    (item17.value * item17.getAttribute("data-price")) +
    (item18.value * item18.getAttribute("data-price")) +
    (item19.value * item19.getAttribute("data-price")) +
    (item20.value * item20.getAttribute("data-price")) +
    (item21.value * item21.getAttribute("data-price")) +
    (item22.value * item22.getAttribute("data-price")) +
    (item23.value * item23.getAttribute("data-price")) +
    (item24.value * item24.getAttribute("data-price")) +
    (item25.value * item25.getAttribute("data-price")) +
    (item26.value * item26.getAttribute("data-price"));

  document.getElementById("subtotal").innerHTML = "$" + subtotal.toFixed(2);

  gst *= subtotal;

  qst *= subtotal;

  total = subtotal + gst + qst;
  document.getElementById("total").innerHTML = "$" + total.toFixed(2);
}

window.onload = function() {
  if (document.cookie.length != 0) {
    var nameValueArray = document.cookie.split("&");
    document.getElementById("item1").value = nameValueArray[0];
    document.getElementById("item2").value = nameValueArray[1];
    document.getElementById("item3").value = nameValueArray[2];
    document.getElementById("item4").value = nameValueArray[3];
    document.getElementById("item5").value = nameValueArray[4];
    document.getElementById("item6").value = nameValueArray[5];
    document.getElementById("item7").value = nameValueArray[6];
    document.getElementById("item8").value = nameValueArray[7];
    document.getElementById("item9").value = nameValueArray[8];
    document.getElementById("item10").value = nameValueArray[9];
    document.getElementById("item11").value = nameValueArray[10];
    document.getElementById("item12").value = nameValueArray[11];
    document.getElementById("item13").value = nameValueArray[12];
    document.getElementById("item14").value = nameValueArray[13];
    document.getElementById("item15").value = nameValueArray[14];
    document.getElementById("item16").value = nameValueArray[15];
    document.getElementById("item17").value = nameValueArray[16];
    document.getElementById("item18").value = nameValueArray[17];
    document.getElementById("item19").value = nameValueArray[18];
    document.getElementById("item20").value = nameValueArray[19];
    document.getElementById("item21").value = nameValueArray[20];
    document.getElementById("item22").value = nameValueArray[21];
    document.getElementById("item23").value = nameValueArray[22];
    document.getElementById("item24").value = nameValueArray[23];
    document.getElementById("item25").value = nameValueArray[24];
    document.getElementById("item26").value = nameValueArray[25];
    CalculateSubTotal()
  }
}

function setAllCookies() {
  document.cookie = document.getElementById("item1").value + "&" +
    document.getElementById("item2").value + "&" +
    document.getElementById("item3").value + "&" +
    document.getElementById("item4").value + "&" +
    document.getElementById("item5").value + "&" +
    document.getElementById("item6").value + "&" +
    document.getElementById("item7").value + "&" +
    document.getElementById("item8").value + "&" +
    document.getElementById("item9").value + "&" +
    document.getElementById("item10").value + "&" +
    document.getElementById("item11").value + "&" +
    document.getElementById("item12").value + "&" +
    document.getElementById("item13").value + "&" +
    document.getElementById("item14").value + "&" +
    document.getElementById("item15").value + "&" +
    document.getElementById("item16").value + "&" +
    document.getElementById("item17").value + "&" +
    document.getElementById("item18").value + "&" +
    document.getElementById("item19").value + "&" +
    document.getElementById("item20").value + "&" +
    document.getElementById("item21").value + "&" +
    document.getElementById("item22").value + "&" +
    document.getElementById("item23").value + "&" +
    document.getElementById("item24").value + "&" +
    document.getElementById("item25").value + "&" +
    document.getElementById("item26").value + "&";
  "expires = Fri, 31 Dec 2030 01: 00: 00 UTC;";
}

		if(typeof(Storage)!=="undefined"){
			localStorage.getElementById
		}
		
		
		function CalculateSubTotal() {
        	var subtotal = 0;
        	var gst = 0.05;
        	var qst = 0.09975;
        	var total = 0;

       		f1 = document.getElementById("f1");
       		f2 = document.getElementById("f2");
       		f3 = document.getElementById("f3");
       		f4 = document.getElementById("f4");
			v1 = document.getElementById("v1");
       		v2 = document.getElementById("v2");
       		v3 = document.getElementById("v3");
       		v4 = document.getElementById("v4");
			m1 = document.getElementById("m1");
       		m2 = document.getElementById("m2");
       		m3 = document.getElementById("m3");
       		m4 = document.getElementById("m4");
			se1 = document.getElementById("se1");
       		se2 = document.getElementById("se2");
       		se3 = document.getElementById("se3");
       		se4 = document.getElementById("se4");
			d1 = document.getElementById("d1");
       		d2 = document.getElementById("d2");
       		d3 = document.getElementById("d3");
       		d4 = document.getElementById("d4");
			d5 = document.getElementById("d5");
       		d6 = document.getElementById("d6");
			sn1 = document.getElementById("sn1");
			sn2 = document.getElementById("sn2");
      		sn3 = document.getElementById("sn3");
       		sn4 = document.getElementById("sn4");
       	
       		subtotal = 	(f1.value * f1.getAttribute("data-price")) +
						(f2.value * f2.getAttribute("data-price")) +
						(f3.value * f3.getAttribute("data-price")) +
						(f4.value * f4.getAttribute("data-price")) +
						(v1.value * v1.getAttribute("data-price")) +
						(v2.value * v2.getAttribute("data-price")) +
               		 	(v3.value * v3.getAttribute("data-price")) +
						(v4.value * v4.getAttribute("data-price")) +
						(m1.value * m1.getAttribute("data-price")) +
						(m2.value * m2.getAttribute("data-price")) +
               		 	(m3.value * m3.getAttribute("data-price")) +
						(m4.value * m4.getAttribute("data-price")) +
						(se1.value * se1.getAttribute("data-price")) +
                   		(se2.value * se2.getAttribute("data-price")) +
               		 	(se3.value * se3.getAttribute("data-price")) +
						(se4.value * se4.getAttribute("data-price")) +
						(d1.value * d1.getAttribute("data-price")) +
						(d2.value * d2.getAttribute("data-price")) +
               		 	(d3.value * d3.getAttribute("data-price")) +
						(d4.value * d4.getAttribute("data-price")) +
               		 	(d5.value * d5.getAttribute("data-price")) +
               			(d6.value * d6.getAttribute("data-price")) +
						(sn1.value * sn1.getAttribute("data-price")) +
						(sn2.value * sn2.getAttribute("data-price")) +
               			(sn3.value * sn3.getAttribute("data-price")) +
						(sn4.value * sn4.getAttribute("data-price"));
      		
			document.getElementById("subtotal").innerHTML = "$" + subtotal.toFixed(2);
        		
			gst *= subtotal;
			
        	qst *= subtotal;
	
        	total = subtotal + gst + qst;
        	document.getElementById("total").innerHTML = "$" + total.toFixed(2);
      		}
      
      		window.onload = function() {
      			if (document.cookie.length != 0) {
      				var nameValueArray = document.cookie.split("&");
          			document.getElementById("f1").value = nameValueArray[0];
          			document.getElementById("f2").value = nameValueArray[1];
          			document.getElementById("f3").value = nameValueArray[2];
          			document.getElementById("f4").value = nameValueArray[3];
					document.getElementById("v1").value = nameValueArray[4];
          			document.getElementById("v2").value = nameValueArray[5];
          			document.getElementById("v3").value = nameValueArray[6];
          			document.getElementById("v4").value = nameValueArray[7];
					document.getElementById("m1").value = nameValueArray[8];
          			document.getElementById("m2").value = nameValueArray[9];
          			document.getElementById("m3").value = nameValueArray[10];
          			document.getElementById("m4").value = nameValueArray[11];
					document.getElementById("se1").value = nameValueArray[12];
          			document.getElementById("se2").value = nameValueArray[13];
          			document.getElementById("se3").value = nameValueArray[14];
          			document.getElementById("se4").value = nameValueArray[15];
					document.getElementById("d1").value = nameValueArray[16];
          			document.getElementById("d2").value = nameValueArray[17];
          			document.getElementById("d3").value = nameValueArray[18];
          			document.getElementById("d4").value = nameValueArray[19];
					document.getElementById("d5").value = nameValueArray[20];
          			document.getElementById("d6").value = nameValueArray[21];
          			document.getElementById("sn1").value = nameValueArray[22];
          			document.getElementById("sn2").value = nameValueArray[23];
					document.getElementById("sn3").value = nameValueArray[24];
          			document.getElementById("sn4").value = nameValueArray[25];
      				CalculateSubTotal()
      			}
      		}

      		function setAllCookies() {
        		document.cookie = 	document.getElementById("f1").value + "&" +
									document.getElementById("f2").value + "&" +
									document.getElementById("f3").value + "&" +
									document.getElementById("f4").value + "&" +
									document.getElementById("v1").value + "&" +
									document.getElementById("v2").value + "&" +
									document.getElementById("v3").value + "&" +
									document.getElementById("v4").value + "&" +
									document.getElementById("m1").value + "&" +
									document.getElementById("m2").value + "&" +
									document.getElementById("m3").value + "&" +
									document.getElementById("m4").value + "&" +
									document.getElementById("se1").value + "&" +
									document.getElementById("se2").value + "&" +
									document.getElementById("se3").value + "&" +
									document.getElementById("se4").value + "&" +
									document.getElementById("d1").value + "&" +
									document.getElementById("d2").value + "&" +
									document.getElementById("d3").value + "&" +
									document.getElementById("d4").value + "&" +
									document.getElementById("d5").value + "&" +
									document.getElementById("d6").value + "&" +
									document.getElementById("sn1").value + "&" +
									document.getElementById("sn2").value + "&" +
									document.getElementById("sn3").value + "&" +
									document.getElementById("sn4").value + "&";expires= Fri, 31 Dec 2030 01:00:00 UTC;";
      		}
