import React, { Component } from "react";
import {Form, Col, Button, FormGroup, FormControl, Checkbox, Nav, NavItem, Navbar} from 'react-bootstrap'

class Card extends Component {
    constructor() {
        super();
    }

    render() {
        return (
            <div className="card" style={{width: 18}}>
                <img className="card-img-top" src=".../100px180/" alt="Card image cap" />
                    <div className="card-body">
                        <h5 className="card-title">{{fkj}}</h5>
                        <p className="card-text">Some quick example text to build on the card title and make up the bulk
                            of the card's content.</p>
                        <a href="#" className="btn btn-primary">Go somewhere</a>
                    </div>
            </div>
        );
    }
}


export default Card;
