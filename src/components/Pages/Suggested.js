import'./Suggested.css';
    import {Button, Card,CardGroup,Alert,Table,Pagination} from 'react-bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';



function Suggested() {
    return (
        <>
         <img className={"bg1"} src={ require('./sharedImages/bg1.png') } />
      
{/*----------------------------------- WORK EXPERIENCE CARD -----------------------------------*/}  
<CardGroup>

<Card className="text-center">       
<div className="roundBorder2">
  <Card.Body>


  <div className='title'>
    <Card.Text>Suggested Items</Card.Text>
    </div>

  <Table>

<tbody>
   {/*------ ROW1 ----------*/} 
  <tr>
     
    <td >
    <div className="roundBorder2">
          <div><img src={ require('./suggestedImages/school2-icon.png') } /></div>
          <div>Elementary School Teacher</div>
          <div>Scout Talent</div>
          <br/>
         
          <br/>
          <div><img src={ require('./suggestedImages/work2-icon.png') } /> View job</div>

      </div>
    </td>

      
    <td >
    <div className="roundBorder2">
          <div><img src={ require('./suggestedImages/user2-icon.png') } /></div>
          <div>Jeffrey Jones</div>
          <div>Marketing Manager</div>
          <br/>
         
          <br/>
          <div><img src={ require('./suggestedImages/userlogo-icon.png') } /> View user</div>
 
      </div>
    </td>
{/*------ ROW2 ----------*/} 
  </tr>

  <tr >
  <td >
    <div className="roundBorder2">
          <div><img src={ require('./suggestedImages/user2-icon.png') } /></div>
          <div>Jeffrey Jones</div>
          <div>Marketing Manager</div>
          <br/>
         
          <br/>
          <div><img src={ require('./suggestedImages/userlogo-icon.png') } /> View user</div>
 
      </div>
    </td>

    <td >
  <div className="roundBorder2">
          <div><img src={ require('./suggestedImages/user1-icon.png') } /></div>
          <div>Jeffrey Jones</div>
          <div>Marketing Manager</div>
          <br/>
   
          <br/>
          <div><img src={ require('./suggestedImages/userlogo-icon.png') } /> View user</div>
          
      </div>
    </td>
  </tr>

{/*------ ROW3 ----------*/} 

  <tr>
     
  <td >
  <div className="roundBorder2">
          <div><img src={ require('./suggestedImages/user1-icon.png') } /></div>
          <div>Jeffrey Jones</div>
          <div>Marketing Manager</div>
          <br/>
   
          <br/>
          <div><img src={ require('./suggestedImages/userlogo-icon.png') } /> View user</div>
          
      </div>
    </td>

      
    <td >
    <div className="roundBorder2">
          <div><img src={ require('./suggestedImages/user2-icon.png') } /></div>
          <div>Jeffrey Jones</div>
          <div>Marketing Manager</div>
          <br/>
       =
          <br/>
          <div><img src={ require('./suggestedImages/userlogo-icon.png') } /> View user</div>
 
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
  

  
  export default Suggested;