import React, { Component } from 'react';
import ApiButton from '../components/AppiButton'

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
          <p>Hello</p>
          <ApiButton></ApiButton>
      </div>
    );
  }
}

export default App;