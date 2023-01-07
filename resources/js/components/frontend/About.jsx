import React from "react";
import Footer from "./Footer";
import Navbar from "./Navbar";

function About(){
    return(
        <>
            <Navbar/>
            <body>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2958.501629370535!2d24.72586641575016!3d42.13955125699043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14acd1cd095a6015%3A0x28bf671eeed22152!2sPgee!5e0!3m2!1sen!2sbg!4v1672931809128!5m2!1sen!2sbg" style={{width:"600", height:"450", border:"0", allowFullScreen:""}}></iframe>
            </body>
            <Footer/>
        </>
    )
}

export default About