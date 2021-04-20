var add = 0;
var update = 0;
var string = "works!";

function addOrder(){
  add = 1;
  window.prompt("Please enter username of the new order","________________");
}

function editOrder(){
  update = 1;
}

function deleteOrder(){

}

function save() {
  if (Boolean(add)) {

    window.prompt("Please enter the date of the order (DD/MM/YYYY)","--/--/----");
    add = 0;
    update = 1;
  } else if (Boolean(update)) {

    window.alert("Edit saved!");


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
    add = nameValueArray[26];
    update = nameValueArray[27];
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
    document.getElementById("item26").value + "&" +
    add + "&" + update;
  "expires = Fri, 31 Dec 2030 01: 00: 00 UTC;";
}

