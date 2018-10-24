import React from 'react';
import ReactDOM from 'react-dom';

import 'bootstrap/dist/css/bootstrap.min.css';
import BasicNavBar from './component/react/navbar';
import Jumbotron from './component/react/jumbotron';
import Heading from './component/react/heading';

class App extends React.Component {
    render() {
        return (
            <React.Fragment>
                <div className="container-fluid">
                    <div className="row">
                        <div className="col-md-12">
                            <BasicNavBar />
                            <Jumbotron />
                        </div>
                    </div>
                    <div className="row">
                        <div className="col-md-4">
                            <Heading />
                        </div>
                        <div className="col-md-4">
                            <Heading />
                        </div>
                        <div className="col-md-4">
                            <Heading />
                        </div>
                    </div>
                </div>
            </React.Fragment>
        )
    }
}

ReactDOM.render(<App />, document.getElementById('root'));