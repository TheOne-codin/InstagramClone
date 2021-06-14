<script>

function SignIn() {
    let email = document.getElementById('SignInEmail')
    let password = document.getElementById('SignInPassword')
    
    const SignIn =  auth.signInWithEmailAndPassword(email.value, password.value);
    SignIn.then(()=>{
      window.location.href = "home.php";
      // alert('Signed In Successfully!!')
    })
    SignIn.catch(e => {
        alert(e.code)
    })
}


function SignUp() {
    let email = document.getElementById('SignUpEmail')
    let password = document.getElementById('SignUpPassword')
    
    const promise = auth.createUserWithEmailAndPassword(email.value,password.value)
    promise.then((value)=> {
        console.log(value)
      alert('Registration Successful!');
    })
    promise.catch((e)=>{
        alert(e.message);
    })
}
</script>