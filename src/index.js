import React from 'react';
import ReactDOM from 'react-dom';

function Hello() {
  return <h1>Hello World!</h1>;
}

const container = document.getElementById("srf-root");

const root = ReactDOM.createRoot(container);
root.render(<Hello />);