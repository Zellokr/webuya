// Initialize Firebase
var config = {
  apiKey: "AIzaSyDzcWtqOV97rJvXKM3X_edDJqGf4gLYci8",
  authDomain: "fir-test-d70ef.firebaseapp.com",
  databaseURL: "https://fir-test-d70ef.firebaseio.com",
  projectId: "fir-test-d70ef",
  storageBucket: "fir-test-d70ef.appspot.com",
  messagingSenderId: "126797685071"
  };
      firebase.initializeApp(config);

var uploader = document.getElementById('uploader');
var fileButton = document.getElementById('fileButton');

fileButton.addEventListener("change", function(e){

  var file = e.files[0];
  
  var storageRef = firebase.storage().ref('mis_fotos/' + file.name);
  
  var task = storageRef.put(file);
  
  task.on('state_changed',
  
  function progress(snapshot){
    var pertentage = (snapshot.bytesTransferred / snapshot.totalBytes)*100;
    uploader.value = percentage;
  },
  
  function error(err){},
  
  function complete(){} ) 
  
  
});