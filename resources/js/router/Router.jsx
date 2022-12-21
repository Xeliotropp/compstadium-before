import React from "react";
import { Routes, Route } from "react-router";

import Home from "../components/frontend/Home";
import Login from "../components/frontend/auth/Login";
import Register from "../components/frontend/auth/Register";
import About from "../components/frontend/About";
import AboutMe from "../components/frontend/auth/AboutMe";
import NotFound from "../components/frontend/NotFound";
import NewProduct from "../components/frontend/products/New";

function Router(){
    return(
        <Routes>
            <Route path="/" element = {<Home/>}/>
            <Route path="/*" element= {<NotFound/>}/>
            <Route path="/login" element = {<Login/>}/>
            <Route path="/register" element = {<Register/>}/>
            <Route path="/about" element = {<About/>}/>
            <Route path="/profile" element = {<AboutMe/>}/>
            <Route path="/product/new" element= {<NewProduct/>}/>
        </Routes>
    )
}

export default Router