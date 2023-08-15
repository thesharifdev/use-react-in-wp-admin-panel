import React from 'react';
import ReactDOM from 'react-dom';
import App from './App';


// Render the React component
const container = document.getElementById('srf-root');
if (container) {
    ReactDOM.render(<App />, container);
}
