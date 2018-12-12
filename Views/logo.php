<body>
    <div class="here">
        <h4>
            <span class ="he">H</span>
            <span class ="he">E</span>
            <span class ="he">R</span>
            <span class ="he">E</span>
            <span class ="he"> </span>
            <span class ="he" id="check">&#10003;</span>
        </h4>
    </div>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Titan+One');
        html, body {
        width: 100%;  
        height: 100%;
        -webkit-font-smoothing: antialiased;
        justify-content: center;
        align-items: center;
        }

        .here {
        text-align: center;
        }

        h4 {
        height: 100px;
        padding: 40px;
        }

        #check {
        color: lightgreen;
        }

        h4, .he {
        position: relative;
        top: 10px;
        display: inline-block;
        animation: bounce .4s ease infinite alternate;
        animation-iteration-count: 8;
        font-family: 'Titan One', cursive;
        font-size: 80px;
        color: #FFF;
        text-shadow: 0 1px 0 #CCC,
                    0 2px 0 #CCC,
                    0 3px 0 #CCC,
                    0 4px 0 #CCC,
                    0 5px 0 #CCC,
                    0 6px 0 transparent,
                    0 7px 0 transparent,
                    0 8px 0 transparent,
                    0 9px 0 transparent,
                    0 10px 10px rgba(0, 0, 0, .4);
        }

        h4 .he:nth-child(2) { animation-delay: .1s; }
        h4 .he:nth-child(3) { animation-delay: .2s; }
        h4 .he:nth-child(4) { animation-delay: .3s; }
        h4 .he:nth-child(5) { animation-delay: .4s; }
        h4 .he:nth-child(6) { animation-delay: .5s; }
        h4 .he:nth-child(7) { animation-delay: .6s; }
        h4 .he:nth-child(8) { animation-delay: .7s; }

        @keyframes bounce {
        100% {
            top: -20px;
            text-shadow: 0 1px 0 #CCC,
                        0 2px 0 #CCC,
                        0 3px 0 #CCC,
                        0 4px 0 #CCC,
                        0 5px 0 #CCC,
                        0 6px 0 #CCC,
                        0 7px 0 #CCC,
                        0 8px 0 #CCC,
                        0 9px 0 #CCC,
                        0 50px 25px rgba(0, 0, 0, .2);
        }
        }

    
</style>