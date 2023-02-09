import classes from './MYPROFILE.css';


function MYPROFILE() {
    return (
        <>
        <img className={"bg1"} src={ require('./bg1.png') } />
        <div className={"div1"}>
         
                <img className={"div1-1"} src={ require('./userpic.png') } />
                <img className={"div1-2"} src={ require('./userRectangle.png') } />
                <div className={"div1-3"}>
                    <div className={"div1-3-1"}>Samantha Rosa di Castillo</div>
                    <div className={"div1-3-2"}>History teacher</div>
                    <br/>
                    <div className={"div1-3-3"}>New York, NY</div>
                    <div className={"div1-3-3"}>Passionate in helping students discover history of our world!</div>
                    <br/>

                    <table className={"table1"} className={"div1-3-3"}>
                            <tr>
                                <td>Send message</td>
                                <td>Invite to network</td>
                                <td>Report</td>
                            </tr>

                            </table>
                </div> 
                   
        </div>
        <div className={"spacer1"} ></div>


        <div >
            <img className={"rect1"} src={ require('./rect2.png') } />

            <table className={"rect1-table"}>

                <tr>
                    <td>icon</td>
                </tr>
                <tr>
                    <td>About</td>
                </tr>
                <tr>
                    <td>  514 555 5555</td>
                </tr>
                <tr>
                    <td>1455 Boul. de Maisonneuve Ouest, </td>
                </tr>
                <tr>
                    <td>Montréal, QC H3G 1M8</td>
                </tr>
                <tr>
                    <td>360noscope@hotmail.com</td>
                </tr>            
                 <tr>
                    <td>English, Italian</td>
                </tr>
                <tr>
                    <td>SamanthaRose.com</td>
                </tr>
            </table>




            <img className={"rect2"} src={ require('./rect2.png') } />
               
            <table className={"rect2-table"}>

                <tr>
                    <td>icon</td>
                </tr>
                <tr>
                    <td>Teaching</td>
                </tr>
                <tr>
                    <td>  World history</td>
                </tr>
                <tr>
                    <td>Presentations </td>
                </tr>

            </table>

        </div>




        </>
    );
  }
  
  export default MYPROFILE;