function SignIn() {
    let email = document.getElementById('SignInEmail')
    let password = document.getElementById('SignInPassword')

    const SignIn =  auth.signInWithEmailAndPassword(email.value, password.value)
    SignIn.then((value)=>{
        window.location.href = "/home.html";
        alert('Signed In Successfully!!')
    })
    SignIn.catch(e => {
        alert(e.code)
    })

}