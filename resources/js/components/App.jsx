import React from "react";
import Router from "../router/Router";
import '../../css/app.css'
import axios from "axios";

axios.defaults.baseURL= "http://localhost:8000";
axios.defaults.headers.post['Content-Type'] = "application/json";
axios.defaults.headers.post['Accept'] = "application/json";
axios.defaults.withCredentials = true;

function App(){
    return(
       <>
         <Router/>
       </>
    )
}

export default App