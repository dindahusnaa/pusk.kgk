<style>
        /*Login display */

    .container{
        width: 100%;
        display: contents;
        background: #fff;
        border-radius: 15px;
        text-align: center;
        box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
    }

    .login {
        width: 100%;

    }

    form {
        width: 100%;
        margin: 60px auto;
        
    }

    h1 {
        margin: 20px;
        text-align: center;
        font-weight: bolder;
        text-transform: uppercase;
    }
    h2 {
        margin: 20px;
        text-align: center;
        font-weight: bolder;
        text-transform: uppercase;
    }

    hr {
        border-top: 2px solid #008000;
    }

    p{
        text-align: center;
        margin: 10px;
    }

    .right img {
        width: 250px;
        height: 50%;
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
        /*border-top-left-radius: 15px;
        border-bottom-left-radius:15px;*/
    }

    form label {
        display: block;
        font-size: 16px;
        font-weight: 600;
        padding: 5px;
    }

    input{
        width: 80%;
        margin: 2px;
        border: none;
        outline: none;
        padding: 8px;
        border-radius: 5px;
        border: 1px solid gray;
    }

    /*button login */
    button{
        border: none;
        outline: none;
        padding: 20px;
        width: 250px;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
        margin-top: 100px;
        border-radius: 5px;
        background: #aff8db;
    }

    button:hover{
        background: #008000;
    }

    @media (max-width: 880px) {
        .container{
            width: 100%;
            max-width: 100%;
            margin-left: 20px;
            margin-right: 20px;
        }

        form {
            width: 100%;
            margin: 20px auto;
            text-align: center;
        }

        .login {
            width: 100%;
            padding: 20px;
        }

        button{
            width: 50%;
        }
    }
</style>
    
    <div class="input">
        <div class="container">
            <div class="login" >
            <form class="form-action" id="loginUKM">
                <h1> LOGIN </h1>
                <h1> SIRDADU </h1>
                <h2> UKM </h2>
                <hr>
                <p> Sistem Serba Ada Dan Terpadu</p>
    
                <div class="box-input pb-2">
                    <i class="fas fa-envelope-open-text"></i>
                    <input type="text" id="__username" name="username" placeholder="Username">
                </div>
                <div class="box-input pb-2" >
                    <i class="fas fa-lock"></i>
                    <input type="password" id="__password" name="password" placeholder="Password">
                    </div>
                
                <a href="dashboard_ukm.php">
                    <button type="submit" name="login" class="btn-input">Login</button>
                </a>
            </form>
            </div>

        </div>
    </div>