import React from "react";
import { Routes, Route } from "react-router";

import Login from "@/Pages/Auth/Login";
import Register from "@/Pages/Auth/Register";

function Router(){
    return(
        <Routes>
            <Route path="/login" element = {<Login/>}/>
            <Route path="/register" element = {<Register/>}/>
        </Routes>
    )
}

export default Router