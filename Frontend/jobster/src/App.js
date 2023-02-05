import logo from './logo.svg';
import Navbar from './components/Navbar';
import { BrowserRouter as Router, Route, Routes} from 'react-router-dom';
import './App.css';

import { Component } from 'react';
import Greet1 from './components/greet'

function App () {
  return (
  <>
  hi
  <img src={require('./images/logo.png')} alt="sd" height={ 200} width={200}/>
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
