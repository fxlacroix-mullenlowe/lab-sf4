import React, { Component } from "react";
import {Form, Col, Button, FormGroup, FormControl, Checkbox, Nav, NavItem, Navbar} from 'react-bootstrap'

class Table extends Component {
    constructor() {
        super();
    }

    render() {
        return (
            <div>
                <h2>
                    Heading
                </h2>
                <p>
                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus
                    commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam
                    porta sem malesuada magna mollis euismod. Donec sed odio dui.
                </p>
                <p>
                    <a className="btn" href="#">View details »</a>
                </p>
            </div>
        );
    }
}


export default Table;
