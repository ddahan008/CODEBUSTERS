import logo from './logo.svg';
import Navbar from './components/Navbar';
import { BrowserRouter as Router, Route, Routes} from 'react-router-dom';
import './App.css';

import { Component } from 'react';
import Greet1 from './components/greet'

function App () {
  return (
  <>
    <Router>
      <Navbar/>
      <Routes>

        <Route path ='/' exact/>
      </Routes>

    </Router>
  </>


);
  }

export default App;
