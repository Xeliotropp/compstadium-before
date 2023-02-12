import '../../css/app.css';
import { FaFacebook, FaGithub, FaReddit, FaTelegramPlane, FaPhoneAlt } from "react-icons/fa";
import { useNavigate } from "react-router-dom";

function Footer() {
    const navigate = useNavigate();

    const handleClick = () => {
        navigate("/about")
    }
    return (
        <>
            <footer>
                <br></br>
                <div className="title">
                    <div>
                        <h2><span style={{ color: "#eb5160" }}>comp</span>stadium</h2>
                    </div>

                    <div>
                        <p style={{ color: "#071013", userSelect: "none" }}>text</p>
                        <p style={{ color: "#071013", userSelect: "none" }}>text</p>
                        <h2>Contacts</h2>
                        <p className="hoverEffect"><FaPhoneAlt /> {' '}<a>placeholder</a></p>
                        <p className="hoverEffect"><FaTelegramPlane />{' '}Email: <a>placeholder</a></p>
                    </div>
                    <div>
                        <p style={{ color: "#071013", userSelect: "none" }}>text</p>
                        <p style={{ color: "#071013", userSelect: "none" }}>text</p>
                        <h2>Socials</h2>
                        <div className="socialMedia">
                            <a className="hoverEffect"><FaFacebook /></a>
                            <a href="https://github.com/Xeliotropp" className="hoverEffect"><FaGithub /></a>
                            <a className="hoverEffect"><FaReddit /></a>
                        </div>
                    </div>
                    <div>
                        <button onClick={handleClick}><h2 className="hoverEffect">About</h2></button>
                    </div>
                </div>
            </footer>
        </>
    );
}
export default Footer;