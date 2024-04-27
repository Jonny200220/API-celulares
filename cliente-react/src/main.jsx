import React from 'react'
import ReactDOM from 'react-dom/client'
import App from './App.jsx'
// import axios from 'axios';

// window.axios = axios;

// window.axios.defaults.baseURL = '';
// window.axios.defaults.headers.common ['Accept'] = '';
// window.axios.defaults.headers.common ['ContentType'] = 'application/json';
// window.axios.defaults.headers.common ['X-Requested-With'] = 'XMLHttpRequest';
// window.axios.defaults.withCredentials = true;

ReactDOM.createRoot(document.getElementById('root')).render(
  <React.StrictMode>
    <App/>
  </React.StrictMode>,
)
