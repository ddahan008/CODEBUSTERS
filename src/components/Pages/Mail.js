import './Mail.css';
    import {Button, Card,CardGroup,Alert,Table,Form,Pagination} from 'react-bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';



function Mail() {
    return (
        <>
 <img className={"bg1"} src={ require('./sharedImages/bg1.png') } />

<CardGroup  >

 <Card> 
    {/* left job search*/ }
    <Table borderless>
        <tbody>
            {/* ---- user1 --- */}
            <tr>
                <td>
                <div className="roundBorder" className="roundBorderSelected">   
                   
                        <Table borderless   >
                            <tbody>
                                <tr>
                                    <Table borderless >
                                        <tbody>
                                            <tr className="verticlecenter">
                                                <td  ><img src={ require('./mailImages/usermessage-icon.png') } /></td>
                                                <td>
                                                <Table borderless>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                            Monica Lewis
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                            Fashion Designer
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                            Offline
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
            {/* ---- user2 --- */}
            <tr>
                <td>
                <div className="roundBorder">   
                   
                        <Table borderless  >
                            <tbody>
                                <tr>
                                    <Table borderless >
                                        <tbody>
                                            <tr className="verticlecenter">
                                                <td  ><img src={ require('./mailImages/usermessage2-icon.png') } /></td>
                                                <td>
                                                <Table borderless>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                            Monica Lewis
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                            Fashion Designer
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                            Offline
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
            {/* ---- user3 --- */}
            <tr>
                <td>
                <div className="roundBorder">   
                   
                        <Table borderless  >
                            <tbody>
                                <tr>
                                    <Table borderless >
                                        <tbody>
                                            <tr className="verticlecenter">
                                                <td  ><img src={ require('./mailImages/usermessage2-icon.png') } /></td>
                                                <td>
                                                <Table borderless>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                            Monica Lewis
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                            Fashion Designer
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                            Offline
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
            {/* ---- user4 --- */}
            <tr>
                <td>
                <div className="roundBorder">   
                   
                        <Table borderless  >
                            <tbody>
                                <tr>
                                    <Table borderless >
                                        <tbody>
                                            <tr className="verticlecenter">
                                                <td  ><img src={ require('./mailImages/usermessage2-icon.png') } /></td>
                                                <td>
                                                <Table borderless>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                            Monica Lewis
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                            Fashion Designer
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                            Offline
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
            {/* ---- user5 --- */}
            <tr>
                <td>
                <div className="roundBorder">   
                   
                        <Table borderless  >
                            <tbody>
                                <tr>
                                    <Table borderless >
                                        <tbody>
                                            <tr className="verticlecenter">
                                                <td  ><img src={ require('./mailImages/usermessage2-icon.png') } /></td>
                                                <td>
                                                <Table borderless>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                            Monica Lewis
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                            Fashion Designer
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                            Offline
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

    <div className="CenterPagination2">
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
            <Table >
                <tbody>
                <tr>
                    <td>
                        <Card>Conversation With Monica Lewis</Card>
                    </td>

                </tr>
                <tr>
                    <td>

                    <Table borderless>
                        <tbody>
                            <tr >
                                <td >
                                    <div className="roundBorder">hi</div>                               
                                </td>
                                <td> 
                                </td>
                            </tr>
                            <tr >
                                <td >
                                    <div className="roundBorder">hi</div>                               
                                </td>
                                <td> 
                                </td>
                            </tr>
                            <tr >
                                <td >
                                                                
                                </td>
                                <td> 
                                <div className="roundBorder">wassup</div>   
                                </td>
                            </tr>
                            <tr >
                                <td >
                                <div className="roundBorder">nmu</div>                            
                                </td>
                                <td> 
                                
                                </td>
                            </tr>

                        </tbody>
                        

                    </Table>
                    </td>

                </tr>
                <tr>
                <div className="chatbar">
                <img src={ require('./mailImages/send-icon.png') } /><input placeholder="enter message"></input> <img src={ require('./mailImages/folder-icon.png') } />
                </div>
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
export default Mail;