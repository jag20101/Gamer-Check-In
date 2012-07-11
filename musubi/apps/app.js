function MusuWriter(app) {
  this.appContext = app;
}

var musu;
var steamid;

Musubi.ready(function(context) {
    console.log("launching bigwords.");
    musu = new MusuWriter(context);

    if (musu.appContext.message != null) {
      if (musu.appContext.message.obj != null) {
        var text = musu.appContext.message.obj.data.text;
        console.log("o " + text);
      }
    }
});


$('#check-in').click(function(e){
	var id = "tsaxjaguirre";
	$.ajax({
		  url: 'http://txjagtapp1.appspot.com/musubi/apps/steamcheck.php?username=' + id,
		  type:'GET',
		  success: function(mydata){
		    alert(mydata);
		  },
		  error: function(){
		    alert("Error");
		  }
		});
});

