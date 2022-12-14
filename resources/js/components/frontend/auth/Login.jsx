import React, {useState} from 'react';

import axios from 'axios';
import swal from 'sweetalert';
import { useNavigate } from 'react-router-dom';

import Navbar from "../Navbar";
import Footer from "../Footer"
import { FaApple, FaFacebook, FaGoogle } from "react-icons/fa";

import "./css/login.css"

function Login() {

    const navigate = useNavigate();
    
    const [loginInput, setLogin] = useState({
        email: '',
        password: '',
        error_list: [],
    });

    const handleInput = (e) => {
        e.persist();
        setLogin({...loginInput, [e.target.name]: e.target.value });
    }

    const loginSubmit = (e) => {
        e.preventDefault();
        
    const data = {
        email: loginInput.email,
        password: loginInput.password,
    }

        axios.get('/sanctum/csrf-cookie').then(response => {
            axios.post(`api/login`, data).then(res => {
                if(res.data.status === 200)
                {
                    localStorage.setItem('auth_token', res.data.token);
                    localStorage.setItem('auth_name', res.data.username);
                    swal("Success",res.data.message,"success");
                    if(res.data.role === 'admin')
                    {
                        navigate.push('/admin/dashboard');
                    }
                    else
                    {
                        navigate.push('/');
                    }
                }
                else if(res.data.status === 401)
                {
                    swal("Warning",res.data.message,"warning");
                }
                else
                {
                    setLogin({...loginInput, error_list: res.data.validation_errors });
                }
            });
        });

    }
    const goRegister = () => {navigate('/register')} 

    return (
        <>
        <Navbar/>
            <div className='center'>   
                <form onSubmit={loginSubmit}>
                    <h1>Login</h1>
                    <br></br>
                    <div className="form-group mb-3">
                        <input placeholder ="Email" type="email" name="email" onChange={handleInput} value={loginInput.email} className="form-control" />
                        <span>{loginInput.error_list.email}</span>
                    </div>
                    <div className="form-group mb-3">
                        <input placeholder ="Password" type="password" name="password" onChange={handleInput} value={loginInput.password} className="form-control" />
                        <span>{loginInput.error_list.password}</span>
                    </div>
                    <div className="form-group mb-3">
                        <button type="submit" className="btn btn-primary">Login</button>
                    </div>
                    <br></br>
                    <p>-or-</p>
                    <div className="login-methods">
                        <FaGoogle/>
                        <FaFacebook/>
                        <FaApple/>
                    </div>
                    <button onClick={goRegister}>Don't have an account? Click here to create!</button>
                </form>               
            </div>
            <Footer/>
        </>
    );
}

export default Login;