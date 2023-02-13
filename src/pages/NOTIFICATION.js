import classes from './NOTIFICATION.css';
    import {Button, Card,CardGroup,Alert,Table,Pagination} from 'react-bootstrap';
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
          <div><img src={ require('./school2-icon.png') } /></div>
          <div>Elementary School Teacher</div>
          <div>Scout Talent</div>
          <br/>
          <div> posted a new job opportunity</div>
          <br/>
          <div><img src={ require('./work2-icon.png') } /> View job</div>

      </div>
    </td>

      
    <td >
    <div className="roundBorder2">
          <div><img src={ require('./user2-icon.png') } /></div>
          <div>Jeffrey Jones</div>
          <div>Marketing Manager</div>
          <br/>
          <div> Sent you a message</div>
          <br/>
          <div><img src={ require('./mail-icon.png') } /> View message</div>
 
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
          <div><img src={ require('./mail-icon.png') } /> Sent you a network invitation request</div>
          <div>
            <Table>
              <tbody>
                <tr>
                  <td><img src={ require('./accept-icon.png') } /> Accept</td>
                  <td><img src={ require('./reject-icon.png') } /> Reject</td>
                </tr>
              </tbody>
            </Table>
          </div>
          <br/>
          <div><img src={ require('./userlogo-icon.png') } /> View user</div>
          
      </div>
    </td>

    <td >
  <div className="roundBorder2">
          <div><img src={ require('./user1-icon.png') } /></div>
          <div>Jeffrey Jones</div>
          <div>Marketing Manager</div>
          <br/>
          <div><img src={ require('./mail-icon.png') } /> Sent you a network invitation request</div>
          <div>
            <Table>
              <tbody>
                <tr>
                  <td><img src={ require('./accept-icon.png') } /> Accept</td>
                  <td><img src={ require('./reject-icon.png') } /> Reject</td>
                </tr>
              </tbody>
            </Table>
          </div>
          <br/>
          <div><img src={ require('./userlogo-icon.png') } /> View user</div>
          
      </div>
    </td>
  </tr>

{/*------ ROW3 ----------*/} 

  <tr>
     
    <td >
    <div className="roundBorder2">
          <div><img src={ require('./school2-icon.png') } /></div>
          <div>Elementary School Teacher</div>
          <div>Scout Talent</div>
          <br/>
          <div> posted a new job opportunity</div>
          <br/>
          <div><img src={ require('./work2-icon.png') } /> View job</div>

      </div>
    </td>

      
    <td >
    <div className="roundBorder2">
          <div><img src={ require('./user2-icon.png') } /></div>
          <div>Jeffrey Jones</div>
          <div>Marketing Manager</div>
          <br/>
          <div> Sent you a message</div>
          <br/>
          <div><img src={ require('./mail-icon.png') } /> View message</div>
 
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
  

  
  export default NOTIFICATION;