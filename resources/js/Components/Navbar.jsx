import React from "react";
import { useState } from "react";
import { useRef } from "react";
import { Divide as Hamburger } from "hamburger-react";
import { CgProfile } from "react-icons/cg";
import '../../css/app.css';
import ApplicationLogo from "./ApplicationLogo";
import { MobileView, BrowserView } from "react-device-detect";
import { FaShoppingCart } from "react-icons/fa";
import ResponsiveNavLink from "./ResponsiveNavLink";

const DesktopView = () => {
  const NavRef = useRef();
  const [isOpen, setOpen] = useState(false)
  const [isItOpen, setItOpen] = useState(false)
  const ShowNavbar = () => {
    NavRef.current.classList.toggle("responsive_nav");
  };
  return (
    <BrowserView>
      <div style={{ display: "flex", alignItems: "center", justifyContent: "space-between" }}>
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
          <button>Cart</button>
        </nav>

        {/*hamburger menu button*/}
        <button id="hideOnMobile" onClick={ShowNavbar}>  <Hamburger toggled={isOpen} toggle={setOpen} /></button>

        {/*logo*/}
        <a href="/" style={{ textDecoration: "none", }}>
          <ApplicationLogo />
        </a>

        {/* redirect to login/register page if the user doesn't have a profile else redirect the user to a page that show's their info and they can edit
          their profile (ex. change their username, pfp, about me, email and password)
          */}
        <span style={{ display: "flex", gap: "1rem", fontSize: "18px" }}>
          <button><FaShoppingCart /></button>
          <button onClick={() => setItOpen(!isItOpen)}>
            <CgProfile />
          </button>
        </span>
        {isItOpen && (
          <ul style={{ position: "absolute", top: "114px", right: "16px", zIndex: "1", backgroundColor: "black" }}>
            <li className="py-2">
              <a href="/profile" className="block">Profile</a>
            </li>
            <li className="py-2">
              <ResponsiveNavLink method="post" href={route('logout')} as="button">
                Log Out
              </ResponsiveNavLink>
            </li>
          </ul>
        )}
      </div>
    </BrowserView>
  );
}
const PhoneView = () => {
  const NavRef = useRef();
  const ShowNavbar = () => {
    NavRef.current.classList.toggle("responsive_nav");
  };
  return (
    <MobileView>
      <div style={{ display: "flex", alignItems: "center", justifyContent: "space-between", padding: "0.2rem" }}>
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
          <button>Cart</button>
        </nav>
        <button onClick={ShowNavbar}> <ApplicationLogo /></button>
        <a href="/login"><CgProfile /></a>
      </div>
    </MobileView>
  );

}
export default function Navbar() {
  return (
    <>
      <header>
        <DesktopView />
        <PhoneView />
      </header>
    </>
  );
}