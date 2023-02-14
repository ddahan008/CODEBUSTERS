import './Contacts.css';
    import {Button, Card,CardGroup,Alert,Table,Pagination} from 'react-bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';



function Contacts() {
    return (
        <>
        <img className={"bg1"} src={ require('./sharedImages/bg1.png') } />
 
{/*----------------------------------- WORK EXPERIENCE CARD -----------------------------------*/}  
<CardGroup>

<Card className="text-center">       
<div className="roundBorder2">
  <Card.Body>


  <div className='title'>
    <Card.Text>Your Contacts</Card.Text>
    </div>

  <Table>

<tbody>
   {/*------ ROW1 ----------*/} 
  <tr>
     
    <td >
    <div className="roundBorder2">
          <div><img src={ require('./contactsImages/user1-icon.png') } /></div>
          <div>Jeffrey Jones</div>
          <div>Marketing Manager</div>
          <br/>
          <div><img src={ require('./contactsImages/mail-icon.png') } /> Send message</div>
          <div><img src={ require('./contactsImages/x-icon.png') } /> Remove from network</div>
          <div><img src={ require('./contactsImages/ex-icon.png') } /> Report</div>
          <div >Offline</div>
      </div>
    </td>

      
    <td >
    <div className="roundBorder2">
          <div><img src={ require('./contactsImages/user1-icon.png') } /></div>
          <div>Jeffrey Jones</div>
          <div>Marketing Manager</div>
          <br/>
          <div><img src={ require('./contactsImages/mail-icon.png') } /> Send message</div>
          <div><img src={ require('./contactsImages/x-icon.png') } /> Remove from network</div>
          <div><img src={ require('./contactsImages/ex-icon.png') } /> Report</div>
          <div >Offline</div>
      </div>
    </td>
{/*------ ROW2 ----------*/} 
  </tr>

  <tr >
  <td >
  <div className="roundBorder2">
          <div><img src={ require('./contactsImages/user1-icon.png') } /></div>
          <div>Jeffrey Jones</div>
          <div>Marketing Manager</div>
          <br/>
          <div><img src={ require('./contactsImages/mail-icon.png') } /> Send message</div>
          <div><img src={ require('./contactsImages/x-icon.png') } /> Remove from network</div>
          <div><img src={ require('./contactsImages/ex-icon.png') } /> Report</div>
          <div >Offline</div>
      </div>
    </td>

    <td >
    <div className="roundBorder2">
          <div><img src={ require('./contactsImages/user1-icon.png') } /></div>
          <div>Jeffrey Jones</div>
          <div>Marketing Manager</div>
          <br/>
          <div><img src={ require('./contactsImages/mail-icon.png') } /> Send message</div>
          <div><img src={ require('./contactsImages/x-icon.png') } /> Remove from network</div>
          <div><img src={ require('./contactsImages/ex-icon.png') } /> Report</div>
          <div >Offline</div>
      </div>
    </td>
  </tr>

{/*------ ROW3 ----------*/} 
  <tr >
  <td >
  <div className="roundBorder2">
          <div><img src={ require('./contactsImages/user1-icon.png') } /></div>
          <div>Jeffrey Jones</div>
          <div>Marketing Manager</div>
          <br/>
          <div><img src={ require('./contactsImages/mail-icon.png') } /> Send message</div>
          <div><img src={ require('./contactsImages/x-icon.png') } /> Remove from network</div>
          <div><img src={ require('./contactsImages/ex-icon.png') } /> Report</div>
          <div >Offline</div>
      </div>
    </td>

    <td >
    <div className="roundBorder2">
          <div><img src={ require('./contactsImages/user1-icon.png') } /></div>
          <div>Jeffrey Jones</div>
          <div>Marketing Manager</div>
          <br/>
          <div><img src={ require('./contactsImages/mail-icon.png') } /> Send message</div>
          <div><img src={ require('./contactsImages/x-icon.png') } /> Remove from network</div>
          <div><img src={ require('./contactsImages/ex-icon.png') } /> Report</div>
          <div >Offline</div>
      </div>
    </td>
  </tr>      


</tbody>


</Table>

<div className="CenterPagination">
<Pagination >
      <Pagination.First />
      <Pagination.Prev />
      <Pagination.Item>{1}</Pagination.Item>
      <Pagination.Ellipsis />

      <Pagination.Item>{10}</Pagination.Item>
      <Pagination.Item>{11}</Pagination.Item>
      <Pagination.Item active>{12}</Pagination.Item>
      <Pagination.Item>{13}</Pagination.Item>
      <Pagination.Item disabled>{14}</Pagination.Item>

      <Pagination.Ellipsis />
      <Pagination.Item>{20}</Pagination.Item>
      <Pagination.Next />
      <Pagination.Last />
    </Pagination>
    </div>


   </Card.Body>

  </div>
  </Card>





</CardGroup>













        </>
    );
  }
  

  
  export default Contacts;