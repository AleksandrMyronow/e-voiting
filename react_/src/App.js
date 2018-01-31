import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';
import ApiButton from './components/AppiButton'

class App extends Component {
    loadDoc() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                this.x = this.responseText;
            }
        };
        xhttp.open("GET", "demo_get.asp", true);
        xhttp.send();
    }

  render() {
    return (
      <div className="App">
        <header className="App-header">
          <img src={logo} className="App-logo" alt="logo" />
          <h1 className="App-title">Welcome to React</h1>
        </header>
        <p className="App-intro">
          To get started, edit <code>src/App.js</code> and save to reload.
        </p>
          <ApiButton></ApiButton>
      </div>
    );
  }
}

export default App;
