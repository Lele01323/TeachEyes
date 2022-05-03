
function handleCredentialResponse(response) {
    const data = jwt_decode(response.credential)
    console.log(data)
  }
//   window.onload = function () {
//     google.accounts.id.initialize({
//       client_id: "348047829127-fi8d0ju9c2he3b81gaheu4euego3pds4.apps.googleusercontent.com",
//       login_uri:"http://localhost:3000/index.php",
//       callback: handleCredentialResponse
//     });
//     google.accounts.id.renderButton(
//       document.getElementById("buttonDiv"),
//       { theme: "outline", size: "large" }  // customization attributes
//     );
//     google.accounts.id.prompt(); // also display the One Tap dialog
//   }

  
// const button = document.getElementById('signout_button');
// button.onclick = () => {
//   google.accounts.id.disableAutoSelect();
// }

console.log("teste");