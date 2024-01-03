<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
    <style>
    .contact{
    bottom: 0rem;
    }
    .contact-me{
        /* border: 1px solid black; */
        height: 45rem;
    }
    .contact-me img{
        width:100%;
        height: 45rem;
    }
    .contact-heading-center {
        position: relative;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        bottom: 40rem;
    }
    .contact-heading-center .main_title {
        font-size: 4rem;
        /* color: #131022; */
        color:white;
        font-weight: 900;
        /* position: relative; */
        margin-bottom: 0;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .contact-heading-center .sub_title {
        font-size: 2.625rem;
        color: #6772E5;
        font-family: "Caveat", cursive;
        margin-bottom: 0;
        margin-left: 1rem;
    }
    .contacts{
        position: relative;
        display: flex;
        color: white;
        bottom: 35rem;
    }
    .contacts .contact-box{
        position: relative;
        border: 2px solid white;
        /* width: 25%; */
        height: 12rem;
        border-radius: 1rem;
        margin: 0rem 1rem;
        padding: 1rem 3rem;
    }
    .contacts .contact-box .contact_mode{
        font-size: 2rem;
    }
    .contacts .contact-box .contact_mode_link{
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        padding: 3rem 0rem;
        font-size: 1.5rem;
    }
    .contacts .contact-box a{
        color: #296fbf;
        font-size:4rem;
        width: 81px;
        height: 81px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #fff;
        position: absolute;
        right: 31px;
        top: -37px;
    }
    </style>
</head>
<body>
    <div class="contact-me">
        <img src="contactMe.jpg" alt="">

        <div class="contact-heading-center">
            <h2 class="main_title">Contact</h2>
            <p class="sub_title">Me</p>
        </div>

        <div class="contacts row px-xl-54 px-16">    
            <div class="col-12 col-md-6 col-xl-3 mb-60 mb-lg-60 mb-xl-30">          
                <div class="contact-box">
                    <a href="mailto: krupalpatel747@gmail.com"><i class="fa-solid fa-envelope"></i></a>
                    <p class="contact_mode">Email</p>
                    <p class="contact_mode_link">krupalpatel747@gmail.com</p>
                </div>
            </div>

            <div class="col-12 col-md-6 col-xl-3 mb-60 mb-lg-60 mb-xl-30">          
                <div class="contact-box">
                    <a href="https://github.com/Krupal-Patel-KP" target="_blank"><i class="fa-brands fa-github"></i> </a>
                    <p class="contact_mode">Github</p>
                    <p class="contact_mode_link">https://github.com/Krupal-Patel-KP</p>
                </div>
            </div>
            
            <div class="col-12 col-md-6 col-xl-3 mb-60 mb-lg-60 mb-xl-30">          
                <div class="contact-box">
                    <a href="https://www.linkedin.com/in/krupal-patel-kp/" target="_blank"><i class="fa-brands fa-linkedin"></i> </a>
                    <p class="contact_mode">Linkedin</p>
                    <p class="contact_mode_link">https://www.linkedin.com/in/krupal-patel-kp/</p>
                </div>
            </div>

            <div class="col-12 col-md-6 col-xl-3 mb-60 mb-lg-60 mb-xl-30">          
                <div class="contact-box">
                    <a href="tel: +1 705-279-5517"><i class="fa-solid fa-phone"></i> </a>
                    <p class="contact_mode">Call</p>
                    <p class="contact_mode_link">+1 705-279-5517</p>
                </div>
            </div>
        </div>  
    </div>
</body>
</html>
