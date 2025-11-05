 
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/12.5.0/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/12.5.0/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyBB7PBEJuUASH8XEU2TwUGgGrYmPl44b44",
    authDomain: "pwa-login-719dd.firebaseapp.com",
    projectId: "pwa-login-719dd",
    storageBucket: "pwa-login-719dd.firebasestorage.app",
    messagingSenderId: "803354362166",
    appId: "1:803354362166:web:924f1e1050f599ef2bf397",
    measurementId: "G-8B0VMQLY85"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);

export { auth, createUserWithEmailAndPassword, signInWithEmailAndPassword };