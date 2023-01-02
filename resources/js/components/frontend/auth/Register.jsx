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
            axios.post(`/register`, data).then(res => { 
                if(res.data.status === 200)
                {
                    localStorage.setItem('auth_token', res.data.token);
                    localStorage.setItem('auth_name', res.data.username);
                    swal("Success",res.data.message,"success");
                    navigate.push('/');
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
            <div className='center'>
                <form onSubmit={registerSubmit}>
                    <h1>Register</h1>
                    <br></br>
                    <div className="form-group mb-3">
                        <input placeholder="Username" type="text" name="name" onChange={handleInput} value={registerInput.name} className="form-control"  />
                        <span>{registerInput.error_list.name}</span>
                    </div>
                    <div className="form-group mb-3">
                        <input placeholder="Email" type="text" name="email" onChange={handleInput} value={registerInput.email} className="form-control"  />
                        <span>{registerInput.error_list.email}</span>
                    </div>
                    <div className="form-group mb-3">
                        <input placeholder="Password" type="password" name="password" onChange={handleInput} value={registerInput.password} className="form-control"  />
                        <span>{registerInput.error_list.password}</span>
                    </div>
                    <div className="form-group mb-3">
                        <button type="submit" className="btn btn-primary">Register</button>
                    </div>
                    <div>
                        <button onClick={goBack}>Back</button>
                    </div>
                </form>
            </div>
            <Footer/>
        </>
    );
}

export default Register;