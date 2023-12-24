<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>



    <style>
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
        }

        /*Desk map Layout*/

        .mapContainer {
            width: 100%;
            height: 100%;
            display: flex;
            padding: 5%;
            justify-content: center;
            border-width: 1px;

        }

        /* Vertical Layout of desks */
        .V-deskGroupContainer{
            align-self: center;
            margin: 1rem;
        }
        .V-deskgroup {
            display: flex;
            flex-direction: row;
            border-color: #2F3783;
            flex-basis: content;

        }

        .deskColumn {
            display: flex;
            flex-direction: column;
        }

        .V-desk {
            position: relative;
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .V-table {
            height: 5rem;
            width: 3rem;
            background-color: #2F3783;
            border-radius: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: 900;
            font-size: larger;
            color: white;
            margin: 2%;
        }

        .V-seat {
            height: 2rem;
            width: 1rem;
            background-color: #2F3783;
            border-radius: 5px;

        }

        .V-emptySeat {
            height: 2rem;
            width: 1rem;
        }

        .V-emptyTable {
            height: 5rem;
            width: 3rem;
            background-color: #ACACAC;
            border-radius: 5px;
        }

        /* Horizontal Layout of Desks */

        .H-deskGroupContainer {
            display: flex;
            flex-direction: column;
            align-self: flex-end;
            margin: 1rem;

        }

        .H-deskGroup {
            display: flex;
            flex-direction: column;
        }

        .deskRow {
            display: flex;
            flex-direction: row;
        }

        .H-desk {
            display: flex;
            flex-direction: column;
            align-items: center;
            row-gap: 2px;
        }

        .H-table {
            height: 3rem;
            width: 5rem;
            background-color: #2F3783;
            border-radius: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: 900;
            font-size: larger;
            color: white;
            margin: 1%;
        }

        .H-seat {
            height: 1rem;
            width: 2rem;
            background-color: #2F3783;
            border-radius: 5px;
        }

        .H-emptySeat {
            height: 1rem;
            width: 2rem;
        }

        .H-emptyTable {
            height: 3rem;
            width: 5rem;
            background-color: #ACACAC;
            border-radius: 5px;
            margin: 1%;
        }

        /* Office layout */
        .rightContainer{
            display:flex;
            flex-direction: column;
        }
        .topLeftBox{
            display: flex; 
            width: 5rem; 
            height: 5rem;
        }
        .topLeftContent1{
            height: 90%; 
            width:1.5rem;
            background-color: #2F3783;  
            border-radius: 0.5rem 0 0.5rem 0.5rem;
        }
        .topLeftContent2{
            height:1.5rem; 
            width:90%;
            background-color: #2F3783;  
            border-radius: 0 0.5rem 0.5rem 0;
        }
        .bottomLeftBox{
            display: flex; 
            width: 5rem; 
            height: 5rem;
        }
        .bottomLeftContent1{
            height: 90%; 
            width:1.5rem;
            background-color: #2F3783;  
            border-radius: 0.5rem 0.5rem 0 0.5rem  ;
            align-self: flex-end;
        }
        .bottomLeftContent2{
            height:1.5rem; 
            width:90%;
            background-color: #2F3783;  
            border-radius: 0 0.5rem 0.5rem 0;
            align-self: flex-end;
        }
        .midBox{
            display: flex;
            justify-self: center;
            align-self: center;
            justify-content: center;
            align-items: center;
            color:#ACACAC;
            font-size: 3rem;
            font-weight: 700; 
            width: 5rem; 
            height: 5rem;
        }
        .topRightBox{
            display: flex; 
            width: 5rem; 
            height: 5rem;
        }
        .topRightContent1{
            height: 90%; 
            width:1.5rem;
            background-color: #2F3783;  
            border-radius: 0 0.5rem 0.5rem 0.5rem;
        }
        .topRightContent2{
            height: 1.5rem; 
            width:90%;
            background-color: #2F3783;  
            border-radius: 0.5rem 0 0 0.5rem;
        }
        .bottomRightBox{
   
            display: flex; 
            width: 5rem; 
            height: 5rem;
        }
        .bottomRightContent1{
            height: 90%; 
            width:1.5rem;
            background-color: #2F3783;  
            border-radius: 0.5rem 0.5rem 0.5rem 0 ;
            align-self: flex-end;
        }
        .bottomRightContent2{
            height: 1.5rem; 
            width:90%;
            background-color: #2F3783;  
            border-radius: 0.5rem 0 0 0.5rem;
            align-self: flex-end;
        }
 
        
    </style>
</head>

<body>
    <div class="container mx-auto border-2">
    <div>
            <h2>Deskmap</h2>
            <div class="flex justify-center">
                <button class="bg-indigo-500 "> < </button>
                        Date
                <button> > </button>
            </div>
        </div>


        <div class="mapContainer">
            @php
            $numberOfDesks = 4;
            $numberOfGroups = 2;
            @endphp

            <div class="V-deskGroupContainer">
                @for ($g = 1; $g <= $numberOfGroups; $g++) 
            
                    <div class="V-deskgroup">

                        <div class="deskColumn">
                            @for ($i = 1; $i <= $numberOfDesks; $i++) 

                            <div class="V-desk">
                                <div class="V-emptySeat"></div>
                                <div class="V-emptyTable"></div>
                            </div>
                            <div class="V-desk">
                                <div class="V-seat"></div>
                                <div class="V-table">{{ ($g - 1) * $numberOfDesks + $i  }}</div>
                            </div>
                            @endfor
                        </div>

                        <div class="deskColumn">
                            @for ($j = 1; $j <= $numberOfDesks; $j++) 
                            <div class="V-desk">
                                <div class="V-table">{{ ($g - 1) * $numberOfDesks + $j }}</div>
                                <div class="V-seat"></div>
                            </div>
                            <div class="V-desk">
                                <div class="V-emptyTable"></div>
                                <div class="V-emptySeat"></div>
                            </div>
                        @endfor
                        </div>
                        <div style="width: 2rem;"></div>

                    @endfor
                    </div>
                </div>
            </div>

            <div  class="rightContainer">

                <div style="display: flex; padding:10px; justify-self:center; align-self:center; margin: 1rem;">
                    <div>
                        <div class="topLeftBox">
                            <div class="topLeftContent1"></div>
                            <div class="topLeftContent2"></div>
                        </div>
                        <div class="bottomLeftBox" >
                            <div class="bottomLeftContent1"></div>
                            <div class="bottomLeftContent2"></div>
                        </div>
                    </div>
                    <div class="midBox">A</div>
                    <div>
                        <div class="topRightBox">
                            <div class="topRightContent2"></div>
                            <div class="topRightContent1"></div>
                        </div>
                        <div class="bottomRightBox">
                            <div class="bottomRightContent2"></div>
                            <div class="bottomRightContent1"></div>
                        </div>
                    </div>
                </div>


            <div class="H-deskGroupContainer">
                @for($g=1; $g <= $numberOfGroups + 1; $g++) 
        
                <div class="H-deskGroup">

                    <div class="deskRow">
                        @for ($k = 1; $k <= $numberOfDesks - 2; $k++) 
                        <div class="H-desk">
                            <div class="H-seat"></div>
                            <div class="H-table">{{($g - 1) * $numberOfDesks + $i }}</div>
                        </div>
                        <div class="H-desk">
                            <div class="H-emptySeat"></div>
                            <div class="H-emptyTable"></div>
                        </div>
                        @endfor         
                    </div>

                    <div class="deskRow">
                        @for ($k = 1; $k <= $numberOfDesks - 2; $k++) 

                        <div class="H-desk">
                            <div class="H-emptyTable"></div>
                            <div class="H-emptySeat"></div>
                        </div>
                        <div class="H-desk">
                            <div class="H-table">{{ $k }}</div>
                            <div class="H-seat"></div>
                        </div>
                        @endfor
                    </div>
                    <div style="height: 2rem;"></div>    
                </div>
                @endfor
            </div>
            </div>
        </div>
    </div>


</body>



</html>