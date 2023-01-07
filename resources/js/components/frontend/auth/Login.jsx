import React, {useState} from 'react';
import axios from 'axios';
import swal from 'sweetalert';
import { useNavigate } from 'react-router-dom';
import Navbar from "../Navbar";
import Footer from "../Footer";

import "./css/login.css"

function Login() {

    const navigate = useNavigate();
    const login = useState({
        email: '',
        password: '',
        error_list: [],
    });
    let [loginInput, setLogin] = login;
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
                axios.post(`/login`, data).then(res => {
                    if (res.data.status === 200) {
                        localStorage.setItem('auth_token', res.data.token);
                        localStorage.setItem('auth_name', res.data.username);
                        swal("Success", res.data.message, "success");
                        if (res.data.role === 'admin') {
                            navigate('/admin/dashboard');
                        }

                        else {
                            navigate('/');
                        }
                    }
                    else if (res.data.status === 401) {
                        swal("Warning", res.data.message, "warning");
                    }

                    else {
                        setLogin({ ...loginInput, error_list: res.data.validation_errors });
                    }
                });
            });

    }
    const goRegister = () => {navigate('/register')} 
    const goBack = () =>{navigate('/')}

    const emailError = loginInput.error_list ? <span>{loginInput.error_list.email}</span> : null;
    const passwordError = loginInput.error_list ? <span>{loginInput.error_list.password}</span> : null;

    return (
        <>
        <Navbar/>
        <br></br>
        <br></br>
        <br></br>
            <div className='center-login'>   
                <form onSubmit={loginSubmit}>
                    <h1><span style={{color:"#eb5160"}}>Log</span> In</h1>
                    <br></br>
                    <div className='login-elements'>
                        <div className="login-info">
                            <div className="form-group mb-3" style={{display:"flex",flexFlow:"column", textAlign:"center"}}>
                                <input placeholder ="Email" type="email" name="email" onChange={handleInput} value={loginInput.email} id="email"/>
                                {loginInput.error_list.email}
                            </div>
                            <div className="form-group mb-3" style={{display:"flex",flexFlow:"column", textAlign:"center"}}>
                                <input placeholder ="Password" type="password" name="password" onChange={handleInput} value={loginInput.password} id="password" />
                                {loginInput.error_list.password}
                            </div>
                        </div>
                        
                        <div className="form-group mb-3">
                            <button type="submit">Sign in</button>
                        </div>
                    </div>
                    <br></br>
                    <div className='media-buttons'>
                        <button onClick={goRegister}>Don't have an account? Click here to create!</button>
                        <button onClick={goBack}>Back</button>
                    </div>
                </form>               
            </div>
            <br></br>
            <br></br>
            <br></br>
            <Footer/>
        </>
    );
}

export default Login;