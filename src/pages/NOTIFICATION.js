import classes from './NOTIFICATION.css';
    import {Button, Card,CardGroup,Alert,Table} from 'react-bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';



function NOTIFICATION() {
    return (
        <>




        <img className={"bg1"} src={ require('./bg1.png') } />
       
      
{/*----------------------------------- WORK EXPERIENCE CARD -----------------------------------*/}  
<CardGroup>

<Card className="text-center" border="light">       
<div className="roundBorder2">
  <Card.Body>


  <Card.Text>Your Notifications</Card.Text>

  <Table>

<tbody>
   {/*------ ROW1 ----------*/} 
  <tr>
     
    <td >
    <div className="roundBorder2">
          <div><img src={ require('./user1-icon.png') } /></div>
          <div>Jeffrey Jones</div>
          <div>Marketing Manager</div>
          <br/>
          <div><img src={ require('./mail-icon.png') } /> Send message</div>
          <div><img src={ require('./x-icon.png') } /> Remove from network</div>
          <div><img src={ require('./ex-icon.png') } /> Report</div>
          <div >Offline</div>
      </div>
    </td>

      
    <td >
    <div className="roundBorder2">
          <div><img src={ require('./user1-icon.png') } /></div>
          <div>Jeffrey Jones</div>
          <div>Marketing Manager</div>
          <br/>
          <div><img src={ require('./mail-icon.png') } /> Send message</div>
          <div><img src={ require('./x-icon.png') } /> Remove from network</div>
          <div><img src={ require('./ex-icon.png') } /> Report</div>
          <div >Offline</div>
      </div>
    </td>
{/*------ ROW2 ----------*/} 
  </tr>

  <tr >
  <td >
  <div className="roundBorder2">
          <div><img src={ require('./user1-icon.png') } /></div>
          <div>Jeffrey Jones</div>
          <div>Marketing Manager</div>
          <br/>
          <div><img src={ require('./mail-icon.png') } /> Send message</div>
          <div><img src={ require('./x-icon.png') } /> Remove from network</div>
          <div><img src={ require('./ex-icon.png') } /> Report</div>
          <div >Offline</div>
      </div>
    </td>

    <td >
    <div className="roundBorder2">
          <div><img src={ require('./user1-icon.png') } /></div>
          <div>Jeffrey Jones</div>
          <div>Marketing Manager</div>
          <br/>
          <div><img src={ require('./mail-icon.png') } /> Send message</div>
          <div><img src={ require('./x-icon.png') } /> Remove from network</div>
          <div><img src={ require('./ex-icon.png') } /> Report</div>
          <div >Offline</div>
      </div>
    </td>
  </tr>

{/*------ ROW3 ----------*/} 
  <tr >
  <td >
  <div className="roundBorder2">
          <div><img src={ require('./user1-icon.png') } /></div>
          <div>Jeffrey Jones</div>
          <div>Marketing Manager</div>
          <br/>
          <div><img src={ require('./mail-icon.png') } /> Send message</div>
          <div><img src={ require('./x-icon.png') } /> Remove from network</div>
          <div><img src={ require('./ex-icon.png') } /> Report</div>
          <div >Offline</div>
      </div>
    </td>

    <td >
    <div className="roundBorder2">
          <div><img src={ require('./user1-icon.png') } /></div>
          <div>Jeffrey Jones</div>
          <div>Marketing Manager</div>
          <br/>
          <div><img src={ require('./mail-icon.png') } /> Send message</div>
          <div><img src={ require('./x-icon.png') } /> Remove from network</div>
          <div><img src={ require('./ex-icon.png') } /> Report</div>
          <div >Offline</div>
      </div>
    </td>
  </tr>      

</tbody>
</Table>
   </Card.Body>

  </div>
  </Card>

</CardGroup>

 











        </>
    );
  }
  

  
  export default NOTIFICATION;