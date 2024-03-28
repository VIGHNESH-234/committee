<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery</title>
    <style>
        .members-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .member {
            width: 300px;
            margin: 20px;
        }

        .info {
            margin-top: 10px;
        }

        h1,
        h2 {
            text-align: center;
            color: black;
        }

        h2 {
            color: whitesmoke;
        }

        /*--------custom scrollbar----*/
        ::-webkit-scrollbar {
            width: 15px;
        }

        ::-webkit-scrollbar-track {
            background: #000;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(gray, whitesmoke)
        }
        .trigger {
            text-align: center;
        }
    </style>
</head>

<body bgcolor="white">
    <h1>Our Committee Members</h1>
    <h2><i>Supercore 2022-23</i></h2>
    <div class="members-container">
        <!-- Member 1 -->
        <div class="member">
            <img src="1g.webp"
                width="300" alt="Committee Member 1">
            <div class="info">
                <p><b>Harish Nilare</b></p>
                <p><b>Role:</b> Chairperson</p>
                <p><b>Email:</b> harish@example.com</p>
            </div>
        </div>

        <!-- Member 2 -->
        <div class="member">
            <img src="2g.webp"
                width="300" alt="Committee Member 2">
            <div class="info">
                <p><b>Shivalika Pillai</b></p>
                <p><b>Role:</b>Secretary</p>
                <p><b>Email:</b> shivalika@example.com</p>
            </div>
        </div>

        <!-- Member 3 -->
        <div class="member">
            <img src="3g.webp" width="300"
                alt="Committee Member 3">
            <div class="info">
                <p><b>Jahnevi N S</b></p>
                <p><b>Role:</b> Treasurer</p>
                <p><b>Email:</b> jahnevi@example.com</p>
            </div>
        </div>

        <!-- Member 4 -->
        <div class="member">
            <img src="4g.webp"
                width="300" alt="Committee Member 4">
            <div class="info">
                <p><b>Mubin Ansari </b></p>
                <p><b>Role:</b> Technical Head</p>
                <p><b>Email:</b> mubin@example.com</p>
            </div>
        </div>
        
        <!-- Member 5 -->
        <div class="member">
            <img src="4g.webp"
                width="300" alt="Committee Member 4">
            <div class="info">
                <p><b>Kensiya Pillai </b></p>
                <p><b>Role:</b> Creative Head</p>
                <p><b>Email:</b> kensiya@example.com</p>
            </div>
        </div>
        
        <!-- Member 6 -->
        <div class="member">
            <img src="5g.webp"
                width="300" alt="Committee Member 4">
            <div class="info">
                <p><b>Urvi Korgaonkar </b></p>
                <p><b>Role:</b>Publicity Head </p>
                <p><b>Email:</b> urvi@example.com</p>
            </div>
        </div>

        <!-- Member 6 -->
        <div class="member">
            <img src="6g.webp"  width="300"
                alt="Committee Member 4">
            <div class="info">
                <p><b>Achu S J </b></p>
                <p><b>Role:</b>Media Head </p>
                <p><b>Email:</b> achu@example.com</p>
            </div>
        </div>

        <!-- Member 7 -->
        <div class="member">
            <img src="6g.png"
                width="300" height="300" alt="Committee Member 4">
            <div class="info">
                <p><b>yashas visha</b></p>
                <p><b>Role:</b> Coder's Club Head </p>
                <p><b>Email:</b> sonu@example.com</p>
            </div>
        </div>

        <!-- Member 8 -->
    
