import React, { useRef } from "react";
import Navbar from "../frontend/Navbar";
import Footer from "../frontend/Footer"
import '../../../css/App.css'

function Home(){
    const Ref = useRef();
    
    return(
        <>
        <Navbar/>
        <body>
            <div className="center">
                <div className="menu-bar">
                    <button>Home</button>
                    <button>CPU</button>
                    <button>GPU</button>
                    <button>Motherboards</button>
                    <button>SSD</button>
                    <button>HDD</button>
                    <button>RAM</button>
                    <button>PSU</button>
                </div>
            </div>
        </body>
        <Footer/>
        </>
    )
}

export default Home