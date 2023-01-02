import React from "react";
import { Routes, Route } from "react-router";

import Home from "../components/frontend/Home";
import Login from "../components/frontend/auth/Login";
import Register from "../components/frontend/auth/Register";
import About from "../components/frontend/About";
import Dashboard from "../components/frontend/Dashboard";

function Router(){
    return(
        <Routes>
            <Route path="/" element = {<Home/>}/>
            <Route path="/login" element = {<Login/>}/>
            <Route path="/register" element = {<Register/>}/>
            <Route path="/about" element = {<About/>}/>
            <Route path="/home" element={<Dashboard/>}/>
        </Routes>
    )
}

export default Router