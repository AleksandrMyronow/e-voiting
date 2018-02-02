import React, { Component } from 'react';
import axios from "axios";





class AppiButton extends Component
{
    constructor(props) {
        super(props);
        this.state = {products: []};

    }

    loadDoc () {


        axios.get("http://127.0.0.1:8000/api/article")
            .then(({ data }) => {
                console.log(data);
                this.setState({
                    products: JSON.parse(data)
                });
            });
        console.log("state - ", this.state);


    }

    render(){

        let array1 = this.state.products;


        console.log("array1 - ", array1);

        // array = array.map((item) => {
        //     return (
        //         <span>1</span>
        //     )
        // });

        return (
            <div>

                <button onClick={this.loadDoc.bind(this)}>API</button>
                <array></array>

            </div>
        )
    }
}

export default AppiButton;

