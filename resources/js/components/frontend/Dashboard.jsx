import React from "react";
import Footer from "./Footer";
import Navbar from "./Navbar";

function Dashboard(){
    const HorizontalLine = ({ color }) => (
        <hr
            style={{
                color: color,
                backgroundColor: color,
                height: 5,
                width: "100%"
            }}
        />
    );
    const VerticalLine = ({color})=>(
        <hr style={{
            color: color,
            backgroundColor: color,
            height:"100%",
            width:5,
            right:0 
        }}>
        </hr>
    )
    return(
        <>
        <Navbar/>
        <div className="center">
            <form className="user-profile">
                <label>Username</label>
                <label>email</label>
                <label>password</label>
                <VerticalLine/>
                <div>
                    <label>Change username</label>
                    <label>Change email</label>
                    <label>Change password</label>
                </div>
                <HorizontalLine/>
                <label>Save Changes</label>
            </form>
        </div>

        <Footer/>
        </>
    )
}

export default Dashboard