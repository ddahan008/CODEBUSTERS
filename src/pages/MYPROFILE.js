import classes from './MYPROFILE.css';
    import {Button, Card,CardGroup,Alert,Table} from 'react-bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';



function MYPROFILE() {
    return (
        <>




        <img className={"bg1"} src={ require('./bg1.png') } />
       
       {/*----------------------------------- INTRO DIV *-----------------------------------*/}  
<CardGroup  >
    
      <Card className="text-center" border="light" class="cardmargin" >
        <div className="roundBorder">
        <Card.Body>

        <Table borderless className="centertable">

            <tbody>
            <tr>              
                <td >    <div><img src={ require('./userpic.png') } /></div>   </td>
                
               
                    <Table borderless className="movetable">
                        <tbody>
                             
                            <tr> Samantha Rosa di Castillo </tr>
                            <tr> History teacher </tr>
                            <tr><br/></tr>
                            <tr> New York, NY</tr>
                            <tr> Passionate in helping students discover history of our world!</tr>
                            <tr><br/></tr>

                            <tr> 
                                <Table borderless>
                                    <tbody>

                                            <tr>
                                                <td><img src={ require('./umessage-icon.png') } /> Send message</td>
                                                <td><img src={ require('./unetwork-icon.png') } />Invite to network</td>
                                                <td><img src={ require('./ureport-icon.png') } />Report</td>
                                            </tr>

                                    </tbody>
                                </Table>

                                </tr>

                        </tbody>


                    </Table>
               
          
            </tr>
                
            </tbody>
     </Table>



         </Card.Body>
         </div>
        </Card>


    </CardGroup>
     
    <CardGroup  >
    {/*----------------------------------- ABOUT CARD -----------------------------------*/}  
      <Card className="text-center" border="light" class="cardmargin" >
        <div className="roundBorder">
        <Card.Body>
            <Card.Text><img src={ require('./user-icon.png') } /></Card.Text>
            <Card.Text>About</Card.Text>
            <Card.Text>  514 555 5555</Card.Text>
            <Card.Text>1455 Boul. de Maisonneuve Ouest, Montréal, QC H3G 1M8</Card.Text>
            <Card.Text>360noscope@hotmail.com</Card.Text>
            <Card.Text>English, Italian</Card.Text>
            <Card.Text>SamanthaRose.com</Card.Text>
         </Card.Body>
         </div>
        </Card>

 {/*----------------------------------- SKILLS CARD -----------------------------------*/}  
      <Card className="text-center" border="light">
      <div className="roundBorder">       
        <Card.Body>
           <Card.Text><img src={ require('./skill-icon.png') } /></Card.Text>
          <Card.Text>Skills</Card.Text>
          <Card.Text> Teaching</Card.Text>
          <Card.Text>World history</Card.Text>
          <Card.Text>Presentations</Card.Text>
        </Card.Body>
        </div>
      </Card>

    </CardGroup>


 {/*----------------------------------- WORK EXPERIENCE CARD -----------------------------------*/}  
    <CardGroup>

      <Card className="text-center" border="light">       
      <div className="roundBorder2">
        <Card.Body>
      
            <Card.Text><img src={ require('./WE-icon.png') } /></Card.Text>
            <Card.Text>Work experience</Card.Text>


        <Table>

      <tbody>
         {/*------ ROW1 ----------*/} 
        <tr>
           
          <td >
            <div className="roundBorder2">
                <div><img src={ require('./concordia-icon.png') } /></div>
                <div>Concordia University</div>
                <div>Teacher assistant</div>
                <div>2005-2009</div>
            </div>
          </td>

            
          <td >
            <div className="roundBorder2">
                <div><img src={ require('./concordia-icon.png') } /></div>
                <div>Concordia University</div>
                <div>Teacher assistant</div>
                <div>2005-2009</div>
            </div>
          </td>
   {/*------ ROW2 ----------*/} 
        </tr>

        <tr >
        <td >
            <div className="roundBorder2">
                <div><img src={ require('./concordia-icon.png') } /></div>
                <div>Concordia University</div>
                <div>Teacher assistant</div>
                <div>2005-2009</div>
            </div>
          </td>

          <td >
            <div className="roundBorder2">
                <div><img src={ require('./concordia-icon.png') } /></div>
                <div>Concordia University</div>
                <div>Teacher assistant</div>
                <div>2005-2009</div>
            </div>
          </td>
        </tr>

 {/*------ ROW3 ----------*/} 
        <tr >
        <td >
            <div className="roundBorder2">
                <div><img src={ require('./concordia-icon.png') } /></div>
                <div>Concordia University</div>
                <div>Teacher assistant</div>
                <div>2005-2009</div>
            </div>
          </td>

          <td >
            <div className="roundBorder2">
                <div><img src={ require('./concordia-icon.png') } /></div>
                <div>Concordia University</div>
                <div>Teacher assistant</div>
                <div>2005-2009</div>
            </div>
          </td>
        </tr>      

      </tbody>
    </Table>
         </Card.Body>

        </div>
        </Card>

    </CardGroup>



{/*----------------------------------- EDUCATION CARD -----------------------------------*/}  
<CardGroup>

<Card className="text-center" border="light">       
<div className="roundBorder2">
  <Card.Body>

      <Card.Text><img src={ require('./education-icon.png') } /></Card.Text>
      <Card.Text>Education</Card.Text>


  <Table>

<tbody>
   {/*------ ROW1 ----------*/} 
  <tr>
     
    <td >
      <div className="roundBorder2">
          <div><img src={ require('./yale-icon.png') } /></div>
          <div>Yale University</div>
          <div>Teaching degree </div>
          <div>2000-2005</div>
      </div>
    </td>

      
    <td >
      <div className="roundBorder2">
          <div><img src={ require('./yale-icon.png') } /></div>
          <div>Yale University</div>
          <div>Teaching degree </div>
          <div>2000-2005</div>
      </div>
    </td>
{/*------ ROW2 ----------*/} 
  </tr>

  <tr >
  <td >
      <div className="roundBorder2">
          <div><img src={ require('./yale-icon.png') } /></div>
          <div>Yale University</div>
          <div>Teaching degree </div>
          <div>2000-2005</div>
      </div>
    </td>

    <td >
      <div className="roundBorder2">
          <div><img src={ require('./yale-icon.png') } /></div>
          <div>Yale University</div>
          <div>Teaching degree </div>
          <div>2000-2005</div>
      </div>
    </td>
  </tr>



</tbody>
</Table>
   </Card.Body>

  </div>
  </Card>

</CardGroup>



{/*----------------------------------- VOLONTEERING CARD -----------------------------------*/}  
<CardGroup>

<Card className="text-center" border="light">       
<div className="roundBorder2">
  <Card.Body>

      <Card.Text><img src={ require('./volunteering-icon.png') } /></Card.Text>
      <Card.Text>Volunteering</Card.Text>


  <Table>

<tbody>
   {/*------ ROW1 ----------*/} 
  <tr>
     
    <td >
      <div className="roundBorder2">
          <div><img src={ require('./school-icon.png') } /></div>
          <div>Beaver public school </div>
          <div>2020-2023 </div>
      </div>
    </td>

      
    <td >
      <div className="roundBorder2">
      <div><img src={ require('./school-icon.png') } /></div>
          <div>Beaver public school </div>
          <div>2020-2023 </div>
      </div>
    </td>

    /</tr>


</tbody>
</Table>
   </Card.Body>

  </div>
  </Card>

</CardGroup>


{/*----------------------------------- JOB OPPORTUNITY CARD -----------------------------------*/}  
<CardGroup>

<Card className="text-center" border="light">       
<div className="roundBorder2">
  <Card.Body>

      <Card.Text><img src={ require('./JO-icon.png') } /></Card.Text>
      <Card.Text>Job opportunities</Card.Text>


  <Table>

<tbody>
   {/*------ ROW1 ----------*/} 
  <tr>
     
    <td >
      <div className="roundBorder2">
          <div><img src={ require('./school-icon.png') } /></div>
          <div>Teacher assitant </div>
          <div>2023 </div>
      </div>
    </td>

      </tr>



</tbody>
</Table>
   </Card.Body>

  </div>
  </Card>

</CardGroup>


<CardGroup  >
    {/*----------------------------------- EVENTS CARD -----------------------------------*/}  
      <Card className="text-center" border="light" class="cardmargin" >
        <div className="roundBorder">
        <Card.Body>
            <Card.Text><img src={ require('./pin-icon.png') } /></Card.Text>
            <Card.Text>Events</Card.Text>

            {/*--------------- EVENT1  ---------------------*/}  
            <div className="roundBorder">
            <Card.Body>
                <Card.Text><img src={ require('./event1.png') } /></Card.Text>
                <Card.Text>MCV/Develop sat down with the wonderful Louise Andrew, Head of Art at our UK based co-development studios d3t and Coconut Lizard, to talk about her role in the wider Keywords Group and why our worldwide studios are encouraged to follow their own entrepreneurial spirit.</Card.Text>
            </Card.Body>
            </div>
<br/>
            {/*--------------- EVENT2 ---------------------*/}  
            <div className="roundBorder">
            <Card.Body>
                <Card.Text><img src={ require('./event2.png') } /></Card.Text>
                <Card.Text>MCV/Develop sat down with the wonderful Louise Andrew, Head of Art at our UK based co-development studios d3t and Coconut Lizard, to talk about her role in the wider Keywords Group and why our worldwide studios are encouraged to follow their own entrepreneurial spirit.</Card.Text>
            </Card.Body>
            </div>


         </Card.Body>
         </div>
        </Card>



    </CardGroup>


 {/*----------------------------------- WORK EXPERIENCE CARD -----------------------------------*/}  
 <CardGroup>

<Card className="text-center" border="light">       
<div className="roundBorder2">
  <Card.Body>

      <Card.Text><img src={ require('./network-icon.png') } /></Card.Text>
      <Card.Text>My network </Card.Text>


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
  

  
  export default MYPROFILE;