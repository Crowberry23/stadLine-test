

$("#logout").on("click", function(){
  console.log(gapi.auth2.getAuthInstance().isSignedIn.Ab);
  gapi.auth2.getAuthInstance().disconnect();
  $('#image').attr("src", "");
});

  console.log("plop");
  function isConnect() {
    console.log(gapi.auth2.getAuthInstance().isSignedIn.Ab);
   var  isCo = gapi.auth2.getAuthInstance().isSignedIn.Ab;
    return isCo;
  }
  console.log(gapi.load);
  console.log(gapi.auth2);
  console.log(isConnect());
  console.log(gapi.auth2.getAuthInstance().isSignedIn.Aia);