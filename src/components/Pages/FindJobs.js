import './FindJobs.css';
import {Button, Card,CardGroup,Alert,Table,Form,Pagination} from 'react-bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';



function FindJobs() {
    return (
        <>
 <img className={"bg1"} src={ require('./sharedImages/bg1.png') } />

<CardGroup  >
{/*----------------------------------- search bar -----------------------------------*/}  
  <Card className="text-center" class="cardmargin" >
    <div className="roundBorder">
    <Card.Body> 
        <Form>
            <Form.Group className="mb-3" controlId="formBasicEmail">
                <Form.Control type="text" placeholder="Enter job description" />
            </Form.Group>

            <Button variant="primary" type="submit">
                Search
            </Button>
        </Form>   

     </Card.Body>
     </div>
    </Card>

{/*----------------------------------- check box-----------------------------------*/}  
  <Card className="text-center">
  <div className="roundBorder">       
    <Card.Body>

        <Table borderless>
            <tbody>
                <tr>
                <td> <input type="checkbox" /> Part time </td>
                <td> <input type="checkbox" />  Remote </td>
                </tr>


                <tr>
                <td> <input type="checkbox" /> Full time  </td>
                <td> <input type="checkbox" />  On site </td>
                </tr>
            </tbody>

        </Table>


    </Card.Body>
    </div>
  </Card>

</CardGroup>



<CardGroup  >

 <Card> 
    {/* left job search*/ }
    <Table borderless>
        <tbody>
            {/* ---- job1 --- */}
            <tr>
                <td>
                <div className="roundBorder">   
                   
                        <Table borderless  >
                            <tbody>
                                <tr>
                                    <Table borderless >
                                        <tbody>
                                            <tr className="verticlecenter">
                                                <div className='test'>
                                                <td><img className='findJobsImage' src={ require('./findJobsImages/concordia-icon.png') } /></td>
                                                </div>
                                                <td>
                                                <Table borderless className='text'>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                            Montreal Elementary School Science Tutor
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                            Varsity Tutors, a Nerdy Company
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                            Montreal Qc
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </Table>
                                                </td>                                             
                                            </tr>

                                        </tbody>
                                    </Table>
                                </tr>
                            </tbody>
                        </Table>
                    
                </div>
                </td>
            </tr>
            {/* ---- job2 --- */}
            <tr>
                <td>
                <div className="roundBorder">   
                   
                        <Table borderless  >
                            <tbody>
                                <tr>
                                    <Table borderless >
                                        <tbody>
                                            <tr className="verticlecenter">
                                            <div className='test'>
                                                <td  ><img className='findJobsImage' src={ require('./findJobsImages/concordia-icon.png') } /></td>
                                                </div>
                                                <td>
                                                <Table borderless className='text'>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                            Montreal Elementary School Science Tutor
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                            Varsity Tutors, a Nerdy Company
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                            Montreal Qc
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </Table>
                                                </td>                                             
                                            </tr>

                                        </tbody>
                                    </Table>
                                </tr>
                            </tbody>
                        </Table>
                    
                </div>
                </td>
            </tr>
            {/* ---- job3 --- */}
            <tr>
                <td>
                <div className="roundBorder">   
                   
                        <Table borderless  >
                            <tbody>
                                <tr>
                                    <Table borderless >
                                        <tbody>
                                            <tr className="verticlecenter">
                                            <div className='test'>
                                                <td  ><img className='findJobsImage' src={ require('./findJobsImages/concordia-icon.png') } /></td>
                                                </div>
                                                 <td>
                                                <Table borderless className='text'>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                            Montreal Elementary School Science Tutor
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                            Varsity Tutors, a Nerdy Company
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                            Montreal Qc
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </Table>
                                                </td>                                             
                                            </tr>

                                        </tbody>
                                    </Table>
                                </tr>
                            </tbody>
                        </Table>
                    
                </div>
                </td>
            </tr>
            {/* ---- job4 --- */}
            <tr>
                <td>
                <div className="roundBorder">   
                   
                        <Table borderless  >
                            <tbody>
                                <tr>
                                    <Table borderless >
                                        <tbody>
                                            <tr className="verticlecenter">
                                            <div className='test'>
                                                <td  ><img className='findJobsImage' src={ require('./findJobsImages/concordia-icon.png') } /></td>
                                                </div>
                                                <td>
                                                <Table borderless className='text'>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                            Montreal Elementary School Science Tutor
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                            Varsity Tutors, a Nerdy Company
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                            Montreal Qc
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </Table>
                                                </td>                                             
                                            </tr>

                                        </tbody>
                                    </Table>
                                </tr>
                            </tbody>
                        </Table>
                    
                </div>
                </td>
            </tr>
            {/* ---- job5 --- */}
            <tr>
                <td>
                <div className="roundBorder">   
                   
                        <Table borderless  >
                            <tbody>
                                <tr>
                                    <Table borderless >
                                        <tbody>
                                            <tr className="verticlecenter">
                                            <div className='test'>
                                                <td  ><img className='findJobsImage' src={ require('./findJobsImages/concordia-icon.png') } /></td>
                                                </div>
                                                <td>
                                                <Table borderless className='text'>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                            Montreal Elementary School Science Tutor
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                            Varsity Tutors, a Nerdy Company
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                            Montreal Qc
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </Table>
                                                </td>                                             
                                            </tr>

                                        </tbody>
                                    </Table>
                                </tr>
                            </tbody>
                        </Table>
                    
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
      <Pagination.Item active>{12}</Pagination.Item>
      <Pagination.Item disabled>{14}</Pagination.Item>

      <Pagination.Ellipsis />
      <Pagination.Item>{20}</Pagination.Item>
      <Pagination.Next />
      <Pagination.Last />
    </Pagination>
    </div>



    </Card> 

     {/* right job detail*/ }
    <Card className="text-center">   
    <div className="roundBorder">   
        <Card.Body>
            <Table>
                <tbody>


                    <tr className="alignleft">
                        <td>
                            <div>Varsity Tutors, a Nerdy Company Montreal, QC</div> 
                            <br/>
                            <div>            
                                <Button variant="primary" type="submit">
                                    Apply
                                </Button>
                            </div>
                            <br/>
                            <div>Dead line mach 2023</div> 
                            <div>CV requiered</div> 
                            <br/>


                            <div>Montreal Elementary School Science Tutor Job</div> 
                            <br/>

                            <div>Varsity Tutors is looking for experts like you to tutor K-12 and college students online in a variety of academic subjects!</div> 
                            <br/>

                            <div> By partnering with Varsity Tutors, teaching online is seamless and interactive. Some benefits of the platform include:</div> 
                            <br/>
                            <div> Conduct remote tutoring sessions from the comfort of your home (on laptop, desktop, tablet or mobile device)</div> 
                            
                            <div>Easily access interactive learning tools, such as our whiteboard, practice questions, diagnostics/assessments and quizzes
                            Connect with students around the country when it's convenient for you
                            Access to a wide variety of tutoring opportunities - Varsity Tutors helps connect thousands of new students with tutors each month</div> 
                            <br/>
                            <div> What's in it for you? NOTHING lulz</div> 

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



export default FindJobs;