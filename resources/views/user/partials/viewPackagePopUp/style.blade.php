<style> 
    :root{
      --brown:#5e503f;
      --lite-brown:#E7D9CA;
    }
 
    .view-package-container{
     
      padding: 15px;
      box-shadow: 5px 5px 15px  rgba(0,0,0,0.3), -5px -5px 15px rgba(0,0,0,0.3);
      border-radius: 5px;
      background-color: #fff;
    }
      .img{
          img{
              height: 8rem;
              border-radius: 10px;
              box-shadow: 5px 5px 15px  rgba(0,0,0,0.3), -5px -5px 15px rgba(0,0,0,0.3);
          }
      }
      .row1{
          display: flex;
         align-items: center;
         justify-content: space-evenly;
         padding-bottom: 10px;
      }
      .pack-name{
          
          width: 50%;
          h1{
              color: var(--brown);
          }
          h5{
              font-weight: 400;
              color:#8a6b45;
          }
      }
      
      .row2{
          display: flex;
          flex-direction: column;
      }
      .includes-select{
          display: flex;
          justify-content: space-evenly;
          margin: 20px;
          background: #E7D9CA;
         
          a{
             
                padding: 8px;
                border-radius: 3px;
                color: var(--brown);
                font-weight: 500;
                text-transform: uppercase;
                text-decoration: none;
          }
          a:hover{
              transition: 0.3s ease;
                padding: 8px ;
                color:var(--lite-brown) ;
                border-radius: 3px;
                background: var(--brown);
          }
      }
      .package-includes{
          display: flex;
          flex-direction: column;
         
        
      }
  
      .include-items{
          display: flex;
          align-items: center;
          justify-content: space-evenly;
          span{
              text-align: center;
              text-transform: uppercase;
          }
          span:hover{
              cursor: pointer;
          }
          div{
              font-size: 10px;
          }
      }
      .includes-display{
        overflow-y:scroll ;
          text-align: center;
          min-height: 20vw;
          height: 20rem;
          padding: 10px;
          
  
      }
      
      .departure-days{
        text-align: right;
      }
      .departure-month{
        
        text-align: left;
      }
      .date-box{
        padding: 3px 5px;
        border: 1px solid var(--lite-brown);
        border-radius:5px; 
        cursor: pointer;
        transition: 0.3s ease;

      }
      .date-box:hover{
        background-color:var(--brown) ;
        color: white;
      }
      .room-share-details{
        display: flex;
        justify-content: center;
        p{
            text-align:left;
        }
        
      }
      .btns{
          margin-top: 10px;
          margin-bottom: 10px;
          display: flex;
          gap: 20px;
         
      }
      .package-includes-lable{
          background: rgb(230, 57, 57);
          color: white;
          text-transform: capitalize;
          font-size: 10px;
          padding: 5px 7px;
          border-radius: 6px;
          text-align: center;
          text-transform: uppercase;
          font-weight: 500;
          letter-spacing: 3px;
          font-family: 'Roboto';
      }
  
      @media (max-width: 768px){
          .container{
              width: 90%;
          }
          .row1{
              flex-direction: column;
              align-items: center;
          }
          .pack-name{
              width: 100%;
              text-align: center;
              h1{
                  margin-top: 10px;
                  margin-bottom: 10px;
              }
          }
          .includes-select{
              a{
                  font-size: 10px;
              }
          }
          .img{
              img{
                  height: 10rem;
              }
          }
          .btns{
              margin-top: 50px;
              display: flex;
              justify-content: space-evenly;
              gap: 10px;
          }
          .include-items{
              display: flex;
              flex-wrap: wrap;
              gap: 10px;
          }
        
      }




/* -------------------------book hear pop up------------------- */


    .modal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .modal-content {
        background-color: white;
        padding: 20px;
        border-radius: 8px;
        width: 400px;
        text-align: center;
        position: relative;
    }

    .close {
        position: absolute;
        top: 10px;
        right: 15px;
        font-size: 20px;
        cursor: pointer;
    }















    </style>