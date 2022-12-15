/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

import "./bootstrap";

/**
 * Next, we will create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import App from "./components/App.jsx";
import React from "react";
import { BrowserRouter as Router } from "react-router-dom";

import { createRoot } from "react-dom/client";
createRoot(document.getElementById("app")).render(
    <Router>
        <App />
    </Router>
);

export default app;
