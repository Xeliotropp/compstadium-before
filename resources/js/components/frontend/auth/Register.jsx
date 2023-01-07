import React, { useState } from 'react';
import axios from 'axios';
import swal from 'sweetalert';
import { useNavigate } from 'react-router-dom';
import Navbar from "../Navbar";
import Footer from "../Footer"
import "./css/login.css"

function Register() {
    const navigate = useNavigate();
    const [registerInput, setRegister] = useState({
        name: '',
        email: '',
        password: '',
        error_list: [],
    });

    const handleInput = (e) => {
        e.persist();
        setRegister({...registerInput, [e.target.name]: e.target.value });
    }

    const registerSubmit = (e) => {
        e.preventDefault();
        
        const data = {
            name: registerInput.name,
            email: registerInput.email,
            password: registerInput.password,
        }

        axios.get('/sanctum/csrf-cookie').then(response => {
            axios.post(`http://localhost:8000/api/register`, data).then(res => { 
                if(res.data.status === 200)
                {
                    localStorage.setItem('auth_token', res.data.token);
                    localStorage.setItem('auth_name', res.data.username);
                    swal("Success",res.data.message,"success");
                    navigate('/');
                }
                else
                {
                    setRegister({...registerInput, error_list: res.data.validation_errors});
                }
            });
        });
    }
    const goBack = () =>{navigate('/login')}

    return (
        <>
        <Navbar/>
            <div className='center-login'>   
                <form onSubmit={registerSubmit}>
                    <h1>Register</h1>
                    <br></br>
                    <div className='login-elements'>
                        <div className="login-info">
                            <div className="form-group mb-3" style={{display:"flex",flexFlow:"column", textAlign:"center"}}>
                                <input placeholder ="Username" type="username" name="username" onChange={handleInput} value={registerInput.username} id="username"/>
                                {registerInput.error_list.email}
                            </div>
                            <div className="form-group mb-3" style={{display:"flex",flexFlow:"column", textAlign:"center"}}>
                                <input placeholder ="Email" type="email" name="email" onChange={handleInput} value={registerInput.email} id="email"/>
                                {registerInput.error_list.email}
                            </div>
                            <div className="form-group mb-3" style={{display:"flex",flexFlow:"column", textAlign:"center"}}>
                                <input placeholder ="Password" type="password" name="password" onChange={handleInput} value={registerInput.password} id="password" />
                                {registerInput.error_list.password}
                            </div>
                        </div>
                        
                        <div className="form-group mb-3">
                            <button type="submit">Sign up</button>
                        </div>
                    </div>
                    <br></br>
                    <div className='media-buttons'>
                        <button onClick={goBack}>Back</button>
                    </div>
                </form>               
            </div>
            <Footer/>
        </>
    );
}

export default Register;