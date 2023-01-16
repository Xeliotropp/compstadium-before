import React from "react";
import { useState } from "react";

import { useRef } from "react";
import { Divide as Hamburger } from "hamburger-react";
import '../../css/app.css'

export default function Navbar() {
  const NavRef = useRef();
  const [isOpen, setOpen] = useState(false)
  const ShowNavbar = () => {
    NavRef.current.classList.toggle("responsive_nav");
  };

  return (
    <>
      <header>
        <nav ref={NavRef}>
          {/*the side buttons that appear when the hamburger menu icon is clicked*/}  
          <button>Home</button>
          <button>CPU</button>
          <button>GPU</button>
          <button>Motherboards</button>
          <button>SSD</button>
          <button>HDD</button>
          <button>RAM</button>
          <button>PSU</button>
        </nav>

        {/*hamburger menu button*/}
        <button onClick={ShowNavbar}>  <Hamburger toggled={isOpen} toggle={setOpen} /></button>

        {/*logo*/}
        <button>
          <h2 className="logo">
            <span style={{ color: "#eb5160" }}>comp</span>stadium
          </h2>
        </button>

          {/* redirect to login/register page if the user doesn't have a profile else redirect the user to a page that show's their info and they can edit
          their profile (ex. change their username, pfp, about me, email and password)
          */}
          <a href="/login">
            Log In
          </a>
      </header>
    </>
  );
}