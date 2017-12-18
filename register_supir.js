// Initialize Firebase
var config = {
  apiKey: "AIzaSyDnv_-WnxO-TJsc2uYcBTHuHTGQ0YUnadM",
  authDomain: "hypertrackexample-a9b3a.firebaseapp.com",
  databaseURL: "https://hypertrackexample-a9b3a.firebaseio.com",
  projectId: "hypertrackexample-a9b3a",
  storageBucket: "hypertrackexample-a9b3a.appspot.com",
  messagingSenderId: "825068417134"
};
firebase.initializeApp(config);
var usersRef = firebase.database();

// save contact
$('.addValue').on("click", function( event ) {  
  event.preventDefault();
  if( $('#name').val() != '' || $('#email').val() != '' ){
    usersRef.ref('user/').push({
      nama: $('#nama').val(),
      username: $('#username').val(),
      password: $('#password').val(),
      role: 'angkot'
    })
    contactForm.reset();
    alert('Pendaftaran supir sukses!');
  } else {
    alert('Form belum terisi lengkap!');
  }
});